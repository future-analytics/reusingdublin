<?php
namespace ReusingDublin;
use ReusingDublin;
/**
 * The Site controller
 * @todo Implement ORM
 * @package  ReusingDublin
 * @author daithi coombes <daithi.coombes@futureanalytics.ie>
 */
class Site extends Controller{

    public $data;
    private $dbCols = array('id','address1','address2','address3','lat','lng');

    /**
     * Install database tables.
     * @uses \ReusingDublin\Model::query()
     * @return mixed Returns true on success or Error on fail.
     */
    public static function install()
    {

        $db = Model::factory();

        //Site
        $sql = "CREATE TABLE Site (
            id int(11) NOT NULL AUTO_INCREMENT,
            address1 varchar(254) NOT NULL,
            address2 varchar(254) DEFAULT NULL,
            address3 varchar(254) DEFAULT NULL,
            lat decimal(10,8) NOT NULL,
            lng decimal(11,8) NOT NULL,
            PRIMARY KEY (id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
        ";

        //Comment
        $sql .= "CREATE TABLE IF NOT EXISTS `Comment` (
            `id` int(11) NOT NULL auto_increment,
            `site_id` int(11) NOT NULL,
            `question` varchar(254) collate utf8_unicode_ci NOT NULL,
            `message` blob NOT NULL,
            `name` varchar(254) collate utf8_unicode_ci NOT NULL,
            `ip` varchar(18) collate utf8_unicode_ci NOT NULL,
            `created` timestamp NOT NULL default CURRENT_TIMESTAMP,
        PRIMARY KEY  (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
        ";

        $sql .= "CREATE TABLE IF NOT EXISTS `File` (
            `id` int(11) NOT NULL auto_increment,
            `file` varchar(254) collate utf8_unicode_ci NOT NULL,
            `ext` varchar(10) collate utf8_unicode_ci NOT NULL,
            `site_id` int(11) NOT NULL,
            `ip` varchar(25) collate utf8_unicode_ci NOT NULL,
            `created` timestamp NOT NULL default CURRENT_TIMESTAMP,
            PRIMARY KEY  (`id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

        if(!$db->tableExists('Site'))
            $res = $db->query($sql);

        return $res;
    }

    /**
     * Get a site's data
     * @param integer $id The site id.
     * @return array Returns an array of site data.
     */
    public static function getSite($id)
    {

        $db = Model::factory()->getDb();
        $qry = "SELECT * FROM Site
            WHERE id = :id";
        $sth = $db->prepare($qry);
        $sth->execute(array(
            ':id' => $id,
        ));
        $res = $sth->fetchAll(\PDO::FETCH_ASSOC);

        if(isset($res[0])){
            return $res[0];
        }
    }

    /**
     * Get a site's comments.
     * @uses \ReusingDublin\Controller::sanatizeArray()
     * @param integer $siteId The site id.
     * @return array Returns an array of data.
     */
    public static function getComments($siteId)
    {

        $db = Model::factory()
            ->getDb();
        $qry = "SELECT * FROM Comment
            WHERE site_id=:site_id";

        //query db
        $sth = $db->prepare($qry);
        $sth->execute(array(
            ':site_id' => $siteId,
        ));
        $res = $sth->fetchAll(\PDO::FETCH_ASSOC);

        $res = Controller::sanatizeArray($res);

        return $res;
    }

    public static function getFiles($siteId)
    {

        $db = Model::factory()
            ->getDb();
        $ret = array();

        $qry = "SELECT * FROM File WHERE site_id=:siteId ORDER BY created ASC";
        $stmt = $db->prepare($qry);
        $stmt->bindValue(":siteId", $siteId);
        $stmt->execute();

        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
            $ret[] = array_merge(pathinfo($row['file']), $row);
        }

        return $ret;
    }

    /**
     * Default action.
     * Reroute default action to ::actionView()
     * @return Site Returns this for chaining.
     */
    public function action()
    {

        //check for uploaded files
        if(isset($_FILES) && count($_FILES))
            parent::upload($_FILES, $_GET['id']);

        return $this->actionView();
    }

    /**
     * Parse form data for email.
     */
    public function actionConnect()
    {

        if(isset($_POST['data'])){

            $mail = new \PHPMailer;
            $data = $_POST['data'];
            $config = Config::getInstance()->get('admin');

            $mail->From = $data['email'];
            $mail->FromName = $data['name'];
            $mail->Subject = 'Connect request from: ' . $data['name'];
            $mail->Body = "
                phone number: {$data['phone']}
                facebook page: {$data['facebook']}
            ";
            $mail->addAddress($config['email'],$config['name']);
            $mail->addReplyTo($data['email'], $data['name']);
            $mail->setFrom($data['email'], $data['name']);

            if(!$mail->send()) {


                echo '
                    <div class="alert alert-error">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Error!</strong> A problem has been occurred while submitting your data.
                        ' . $mail->ErrorInfo . '
                    </div>';
            } else {
                echo '
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Success!</strong> Your message has been sent successfully.
                    </div>';
            }
        }

        return $this;
    }

    /**
     * To edit or update a site.
     * @return Site Returns this for chaining.
     */
    public function actionEdit()
    {

        (isset($_POST['data'])) ?
            $data = $_POST['data'] :
            $data = false;

        //files
        if(isset($_FILES['files']))
            $data['files'] = parent::parseUpload($_FILES['files']);

        // update/create site
        if($data){
            $this->data = $this->update($data);
        }

        return $this;
    }

    /**
     * Ajax handle for autocomplete functionality.
     * @return \ReusingDublin\Site Returns self for chaining.
     */
    public function actionApiAutocomplete()
    {

        $query  = '%'.Config::getInstance()->routes[2].'%';
        $db     = Model::factory();
        $res    = array();

        //query db
        $sth = Model::factory()
                ->getDb()
                ->prepare("SELECT address1,id FROM Site
                    WHERE address1 LIKE :query");
        $sth->execute(array(
                ':query' => $query
            ));

        //build required dataSet
        foreach($sth->fetchAll(\PDO::FETCH_ASSOC) as $result){
            $res[] = (object) array(
                'value' => $result['address1'],
                'data' => $result['id']
            );
        }
        $this->result = json_encode($res);

        return $this;
    }

    /**
     * API action method for returning sites.
     * @return Site Returns this for chaining.
     */
    public function actionApiGetSites()
    {

        //vars
        $routes     = Config::getInstance()->routes;
        $db         = Model::factory();
        $fields     = array_splice($routes, 2);
        $sites      = array();

        //error report
        $fields = array_intersect($fields, $this->dbCols);
        if(!count($fields)){
          http_response_code('405');
          die('<img src="/assets/images/405-method-not-allowed.jpg">');
        }

        //map title field to address1
        if(in_array('title', $fields)){
            $key = array_search('title', $fields);
            unset($fields[$key]);
            $fields[] = 'address1';
        }
        $fields[] = 'id';           //always return id with rows.
        var_dump($fields);

        //query db
        (count($fields)) ?
            $fields = "`".implode("`,`", $fields)."`":
            $fields = "*";
        $query      = "SELECT {$fields} FROM Site";
        $result     = $db->query($query);

        //error report
        if(Error::isError($result)){
            $result = array(
                'error' => $result->getMessage(),
            );
        }

        //build & return results
        array_push($result, Api::factory()->hal);

        $this->result = json_encode($result);

        return $this;
    }

    /**
     * API action method for searching sites.
     * @return Site Returns this for chaining.
     */
    public function actionApiSearch()
    {

        $query  = '%'.Config::getInstance()->routes[2].'%';
        $db     = Model::factory();

        $sth = Model::factory()
                ->getDb()
                ->prepare("SELECT address1,id FROM Site
                    WHERE address1 LIKE :query");

        $sth->execute(array(
                ':query' => $query
            ));

        $this->result = json_encode($sth->fetchAll(\PDO::FETCH_ASSOC));

        return $this;
    }

    /**
     * Parse form data for email.
     * @param string $source The source action method for email subject.
     */
    public function actionLetUsKnow($source='let us know')
    {

        if(isset($_POST['data'])){

            $mail = new \PHPMailer;
            $data = $_POST['data'];
            $config = Config::getInstance()->get('admin');

            $mail->From = $data['email'];
            $mail->FromName = $data['name'];
            $mail->subject = $source.': '.$data['subject'];
            $mail->Body = $data['message'];
            $mail->addAddress($config['email'],$config['name']);

            if(!$mail->send()) {


                echo '
                    <div class="alert alert-error">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Error!</strong> A problem has been occurred while submitting your data.
                        ' . $mail->ErrorInfo . '
                    </div>';
            } else {
                echo '
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Success!</strong> Your message has been sent successfully.
                    </div>';
            }
        }

        return $this;
    }

    public function actionComment()
    {

        $_POST['ip'] = $_SERVER['REMOTE_ADDR'];

        // update/create site
        if(isset($_POST['data']))
            Model::factory()
                ->insert('Comment', $_POST['data']);

        return $this;
    }

    /**
     * route to actionLetUsKnow
     * @see \ReusingDublin\Site::actonLetUsKnow()
     */
    public function actionTellUsMore()
    {

        return $this->actionLetUsKnow('tell us more');
    }

    public function actionView()
    {

        return $this;
    }

    private function update(array $data)
    {

        $db = Model::factory();
        $files = $data['files'];
        unset($data['files']);


        //update a site
        if(isset($data['id'])){

            $db->update('Site', $data, 'id');
        }

        //create a site
        else{

            $data['id'] = $db->insert('Site', $data);
        }

        //files
        $data['files']  = Controller::upload($files, $data['id']);

        return $data;
    }
}
