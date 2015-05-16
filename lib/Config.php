<?php
/**
 * Singleton config class.
 *
 * @package ReusingDublin
 * @link http://github.com/future-analytics/reusingdublin
 * @author daithi coombes <webeire@gmail.com>
 */
class Config
{

	/** @var array An array of database parameters */
	protected $db;
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
    			throw new Exception('ReusingDublin Config::setInstance unkown property: '.$prop);
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
			throw new Exception('Config::get() Unkown property: '.$prop);
		return $this->$prop;
	}

	/**
	 * Get the config singleton instalce
	 * @return Config Returns config singleton.
	 */
    public static function getInstance()
    {
    	if(! (self::$instance instanceof self)){
    		throw new Exception("ReusingDublin Config::getInstance singleton instance not constructed");
    	}
    	return self::$instance;
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
