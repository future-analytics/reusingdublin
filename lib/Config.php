<?php
namespace ReusingDublin;
use ReusingDublin;
/**
 * Singleton config class.
 *
 * @package ReusingDublin
 * @link http://github.com/future-analytics/reusingdublin
 * @author daithi coombes <webeire@gmail.com>
 */
class Config
{
    /** @var array An array of admin parameters */
    protected $admin;
	/** @var array An array of database parameters */
	protected $db;
    /** @var array An array of api settings */
    protected $api;
    /** @var string The url query string */
    protected $query;
    /** @var array An array of url params as routes */
    public $routes;
	private static $instance;

    /**
     * Protected constructor to prevent creating a new instance of the
     * *Config* via the `new` operator from outside of this class.
     */
    public function __construct(array $params)
    {
    	//set properties
    	foreach($params as $prop => $value)
    	{
    		if (!property_exists($this, $prop))
    			throw new \Exception('ReusingDublin Config::setInstance unkown property: '.$prop);
    		else
    			$this->$prop = $value;
    	}

    	self::$instance = $this;
    }

	/**
	 * Get a property
	 * @param  string $prop The property name
	 * @return mixed       The property value
	 */
	public function get($prop)
	{
		if(!property_exists($this, $prop))
			throw new \Exception('Config::get() Unkown property: '.$prop);
		return $this->$prop;
	}

	/**
	 * Get the config singleton instalce
	 * @return Config Returns config singleton.
	 */
    public static function getInstance()
    {
    	if(! (self::$instance instanceof self)){
    		throw new \Exception("ReusingDublin Config::getInstance singleton instance not constructed");
    	}
    	return self::$instance;
    }

    /**
     * Set a property.
     * @param string $prop The property name.
     * @param mixed $value The property value.
     * @return Config Returns this singleton for chaining.
     */
    public function set($prop, $value)
    {

        // try setter
        $method = 'set'.ucfirst($prop);
        if(method_exists($this, $method)){
            $this->$method($value);
        }

        // try set property
        if(property_exists(__CLASS__, $prop))
            $this->$prop = $value;
        else
            throw new \Exception('Config::set unkown property: '.$prop);

        // check return value for singleton persistence.
        return self::getInstance();
    }

    /**
     * create routes from url query.
     *
     * Routes:
     *  - /ajax
     *  - /site/
     *  - /site/edit/$urlencode_site_street
     *  - /form/let-us-know
     *  - /form/tell-us-more
     *  - /form/connect
     *  - /form/share (this should allow sharing of page, not collecing more information)
     * @subpackage Router
     * @param string $query The url query.
     */
    private function setQuery($query)
    {

        // default index page
        if(!$query)
            $query = 'index';

        $routes = explode("/", $query);

        //rebuild ajax routes
        if(strtolower($routes[0])=='api')
            $routes = $this->apiRoutes($routes);

        $this->routes = $routes;
    }

    /**
     * Rewrite routes array for api requests.
     * @param  array $routes An array of routes.
     * @return array         The new array of routes.
     */
    private function apiRoutes(array $routes)
    {

        define('REUSINGDUBLIN_API', 1);
        array_shift($routes);

        $routes[1] = 'api' . ucfirst($routes[1]);

        return $routes;
    }

    /**
     * Private clone method to prevent cloning of the instance of the
     * *Config* instance.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the *Config*
     * instance.
     *
     * @return void
     */
    private function __wakeup()
    {
    }
}
