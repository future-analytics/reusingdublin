<?php
namespace ReusingDublinTest;
use \ReusingDublin\Error;

class ErrorTest extends \PHPUnit_Framework_TestCase{

    function setUp(){
        $this->fooMessage = 'Everybody hands in the air - this is a foo';
        $this->fooError = new \ReusingDublin\Error($this->fooMessage);
    }

    function tearDown(){
        unset($this->fooMessage);
        unset($this->fooError);
    }

    public function testGetMessage(){

        $expected = $this->fooMessage;
        $actual = $this->fooError->getMessage();
        $this->assertEquals($expected, $actual);
    }

    public function testIsError(){

        //test true
        $actual = \ReusingDublin\Error::isError($this->fooError);
        $this->assertTrue($actual);

        //test false
        $actual = \ReusingDublin\Error::isError(new \stdClass());
        $this->assertFalse($actual);
    }
}
