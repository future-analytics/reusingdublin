<?php
namespace ReusingDublin;
use ReusingDublin;

/**
 * Main controller
 * @package ReusingDublin
 * @author daithi coombes <webeire@gmail.com>
 */
class Controller{

    public $action;
    public $class;
    public $data = array();
    public $result;

    /**
     * Factory method.
     * @param  array  $routes An array of routes paramaters returned from 
     * Config::getRoutes()
     * @return Controller         Returns a child class that extends this.
     */
    public static function factory(array $routes)
    {

        $class      = '\\ReusingDublin\\' . ucfirst($routes[0]);
        $action     = self::parseAction($routes);
        $method     = 'action'.$action;

        if(class_exists($class)){

            $obj            = new $class();
            $obj->action    = $action;
            $obj->class     = ucfirst($routes[0]);

            return $obj->$method();
        }
        else
            return new Error('Controller::factory(): '.$class.' not found');
    }

    /**
     * Install scripts for reference only.
     */
    public static function install()
    {

        $database = 'reusingdublin';

        $sql = "CREATE TABLE IF NOT EXISTS `reusingdublin`.`File` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `file` VARCHAR(254) NULL,
            `type` ENUM('photo', 'file', 'video') NULL,
            `site_id` INT NULL,
            `ip` VARCHAR(15) NULL,
            `created` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`))
        ENGINE = InnoDB;

        CREATE TABLE IF NOT EXISTS `{$database}`.`Site` (
            `id` INT(11) NOT NULL AUTO_INCREMENT,
            `address1` VARCHAR(254) NOT NULL,
            `address2` VARCHAR(254) NULL DEFAULT NULL,
            `address3` VARCHAR(254) NULL DEFAULT NULL,
            `lat` DECIMAL(10,8) NOT NULL,
            `lng` DECIMAL(11,8) NOT NULL,
            `info` BLOB NULL DEFAULT NULL,
            `tellUs` BLOB NULL DEFAULT NULL,
            `tellUsInfo` BLOB NULL DEFAULT NULL,
            `ownership` VARCHAR(254) NULL DEFAULT NULL,
            `zoning` VARCHAR(254) NULL DEFAULT NULL,
            `planning` VARCHAR(254) NULL DEFAULT NULL,
            `size` VARCHAR(254) NULL DEFAULT NULL,
            `heritage` VARCHAR(254) NULL DEFAULT NULL,
            `derelict` VARCHAR(254) NULL DEFAULT NULL,
            `ip` VARCHAR(15) NULL DEFAULT NULL,
            `created` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
            `updated` DATETIME NULL DEFAULT NULL,
        PRIMARY KEY (`id`))
        ENGINE = InnoDB;";

    }

    /**
     * Turn urls into hyperlinks in a blob of text.
     * @param string $text The blob of text to parse.
     * @return string
     */
    public static function autoLinkText($text) {
        
        $pattern  = '#\b(([\w-]+://?|www[.])[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/)))#';
        
        return preg_replace_callback($pattern, function($matches) {
            $max_url_length = 50;
            $max_depth_if_over_length = 2;
            $ellipsis = '&hellip;';

            $url_full = $matches[0];
            $url_short = '';

            if (strlen($url_full) > $max_url_length) {
                $parts = parse_url($url_full);
                $url_short = $parts['scheme'] . '://' . preg_replace('/^www\./', '', $parts['host']) . '/';

                $path_components = explode('/', trim($parts['path'], '/'));
                foreach ($path_components as $dir) {
                    $url_string_components[] = $dir . '/';
                }

                if (!empty($parts['query'])) {
                    $url_string_components[] = '?' . $parts['query'];
                }

                if (!empty($parts['fragment'])) {
                    $url_string_components[] = '#' . $parts['fragment'];
                }

                for ($k = 0; $k < count($url_string_components); $k++) {
                    $curr_component = $url_string_components[$k];
                    if ($k >= $max_depth_if_over_length || strlen($url_short) + strlen($curr_component) > $max_url_length) {
                        if ($k == 0 && strlen($url_short) < $max_url_length) {
                            // Always show a portion of first directory
                            $url_short .= substr($curr_component, 0, $max_url_length - strlen($url_short));
                        }
                        $url_short .= $ellipsis;
                        break;
                    }
                    $url_short .= $curr_component;
                }

            } else {
                $url_short = $url_full;
            }

            return "<a rel=\"nofollow\" target=\"_new\" href=\"$url_full\">$url_short</a>";
        }, 
        $text);
    }
    
    /**
     * Get the data property
     * @param  string $dataType Default OBJECT. The dataType to return
     * @return mixed
     */
    public function getData($dataType = 'ARRAY')
    {

        if($dataType=='OBJECT')
            return (object) $this->data;

        return $this->data;
    }

    /**
     * Get the client ip address.
     * @return string The IP address.
     */
    public static function getIp()
    {
        $ret = $_SERVER['REMOTE_ADDR'];

        if(array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER))
            $ret = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));

        return $ret;
    }

    /**
     * Get the action name from an array of routes.
     * @param  array  $routes An array of routes @see Config::getRoutes()
     * @return string         Returns the action.
     */
    public static function parseAction(array $routes)
    {

        //get controller
        $controller = $routes[0];

        //get action
        $action = '';
        if(isset($routes[1]) && $routes[1]!=''){
            foreach(explode("-", $routes[1]) as $route)
                $action .= ucfirst($route);
        }
        return $action;
    }

    /**
     * Clean multifile uploads array.
     * @param array $files
     * @return array
     */
    public static function parseUpload(array $files)
    {

        $ret = array();

        foreach($files['name'] as $index=>$name){
            $ret[$index] = array(
                'name'      => $name,
                'type'      => $files['type'][$index],
                'tmp_name'  => $files['tmp_name'][$index],
                'error'     => $files['error'][$index],
                'size'      => $files['size'][$index],
            );
        }

        return $ret;
    }

    /**
     * Sanatize an array for xss attacks.
     * Should work on multidimensional array's
     * @param array $ar The array.
     * @return array The sanatized array.
     */
    public static function sanatizeArray(array $ar)
    {

        $ret = array();

        foreach($ar as $key=>$val){

            if(is_array($val))
                $ret[$key] = self::sanatizeArray($val);
            else
                $ret[$key] = htmlspecialchars($val, ENT_QUOTES, 'UTF-8');
        }

        return $ret;
    }

    public static function uniqueName($test)
    {
        $path = pathinfo($test);
        $count = 0;

        while(file_exists($test)){
            $test = "{$path['dirname']}/{$path['filename']}-{$count}.{$path['extension']}";
            $count++;
        }

        return $test;
    }

    /**
     * Upload a files and write records to db.
     * @param  array $data    An array of file data.
     * @param  integer $site_id The site to link up with the uploaded file.
     * @return array          Returns an array of results.
     */
    public static function upload(array $data, $site_id)
    {

        $res = array();
        $db = Model::factory();

        foreach($data as $file){

            if($file['error']!=0)
                continue;

            $orig = $file['tmp_name'];
            $dest = self::uniqueName(REUSINGDUBLIN_UPLOADS . '/' . $file['name']);
            $fileInfo = pathinfo($dest);
            if(!move_uploaded_file($orig, $dest)){
                $res[] = new Error('Unable to move uploaded file: '.$file['name']);
                continue;
            }

            //insert record into db
            $db->insert('File', array(
                'file'     => $fileInfo['basename'],
                'ext'      => $fileInfo['extension'],
                'site_id'  => $site_id,
                'ip'       => self::getIp(),
            ));

            $res[] = pathinfo($dest);
        }

        return $res;
    }
}