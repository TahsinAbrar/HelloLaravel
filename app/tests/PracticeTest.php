<?php
/**
 * Created by PhpStorm.
 * User: LAB5
 * Date: 8/20/14
 * Time: 10:19 AM
 */

class PracticeTest extends PHPUnit_Framework_TestCase{
    public function testHelloWorld(){
        $greeting = "Hello, World.";
        $this->assertTrue($greeting=='Hello, World.');
    }
} 