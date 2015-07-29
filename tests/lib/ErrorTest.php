<?php
namespace ReusingDublinTest;
use \ReusingDublin\Error;

class ErrorTest extends PHPUnit_Framework_TestCase{

    function setUp(){

        $fooMessage = 'Everybody hands in the air - this is a foo';
        $fooError = new \ReusingDublin\Error($fooMessage);
    }

    public function testGetMessage(){

        $expected = $fooMessage;
        $actual = $fooError->getMessage();
        $this->assertEquals($expected, $actual);
    }

    public function testIsError(){

        //test true
        $actual = \ReusingDublin\Error::isError($fooError);
        $this->assertTrue($actual);

        //test false
        $this->assertFalse(object);
    }
}
