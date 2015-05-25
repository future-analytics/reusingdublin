<?php
namespace ReusingDublin;
use ReusingDublin;
/**
 * The Site controller
 * @todo Implement ORM
 * @package  ReusingDublin
 * @author daithi coombes <david.coombes@futureanalytics.ie>
 */
class Site extends Controller{

	public $data;

	/**
	 * Install database tables.
	 * @uses \ReusingDublin\Model::query()
	 * @return mixed Returns true on success or Error on fail.
	 */
	public static function install()
	{

		$db = Model::factory();
		$sql = "CREATE TABLE Site (
			id int(11) NOT NULL AUTO_INCREMENT,
			address1 varchar(254) NOT NULL,
			address2 varchar(254) DEFAULT NULL,
			address3 varchar(254) DEFAULT NULL,
			lat decimal(10,8) NOT NULL,
			lng decimal(11,8) NOT NULL,
			PRIMARY KEY (id)
		) ENGINE=InnoDB
		";

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

		if(isset($res[0]))
			return $res[0];
	}

	/**
	 * Default action.
	 * Reroute default action to ::actionView()
	 * @return Site Returns this for chaining.
	 */
	public function action()
	{

		return $this->actionView();
	}

	public function actionConnect()
	{

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
		if(isset($_FILES['photos']))
			$data['photos'] = parent::parseUpload($_FILES['photos']);
		if(isset($_FILES['files']))
			$data['files'] = parent::parseUpload($_FILES['files']);

		// update/create site
		if($data){
			$this->data = $this->update($data);						
		}

		return $this;
	}

	public function actionApiGetSites()
	{

		//vars
		$routes		= Config::getInstance()->routes;
		$db 		= Model::factory();
		$fields		= array_splice($routes, 2);
		$sites 		= array();

		//map title field to address1
		if(in_array('title', $fields)){
			$key = array_search('title', $fields);
			unset($fields[$key]);
			$fields[] = 'address1';
		}
		$fields[] = 'id';			//always return id with rows.

		//query db
		(count($fields)) ?
			$fields = "`".implode("`,`", $fields)."`":
			$fields = "*";
		$query 		= "SELECT {$fields} FROM Site";
		$result 	= $db->query($query);

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

	public function actionLetUsKnow()
	{

		if(isset($_POST['data'])){

		}

		return $this;
	}

	public function actionShare()
	{
		return $this;
	}

	public function actionTellUsMore()
	{
		return $this;
	}

	public function actionView()
	{
		return $this;
	}

	private function update(array $data)
	{

		$db = Model::factory();
		$photos = $data['photos'];
		$files = $data['files'];
		unset($data['files']);
		unset($data['photos']);


		//update a site
		if(isset($data['id'])){

			$db->update('Site', $data, 'id');
		}

		//create a site
		else{

			$data['id'] = $db->insert('Site', $data);
		}

		//upload photos & files
		Controller::upload($photos, $data['id'], 'photos');
		Controller::upload($files, $data['id'], 'files');

		return $data;
	}
}
