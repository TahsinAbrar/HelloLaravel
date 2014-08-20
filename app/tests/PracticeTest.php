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
        $this->assertTrue($greeting=='Hello, World.',$greeting);
        
        //$greeting = "Hello, World.";
        $this->assertFalse($greeting=='Hello',$greeting);

        //assertEquals accepts three arguments
        //$this->assertEquals(EXPECTED, ACTUAL, OPTIONAL MESSAGE);
        $this->assertEquals('Hello, World.',$greeting);
    /*
     * If you wish to prove that two values are equal to one another,
     * then, clearly, assertEquals is a better choice than assertTrue,
     * even though both will work.*/

        $this->assertNotEquals('Hello, VM World.',$greeting);
        
    }
} 