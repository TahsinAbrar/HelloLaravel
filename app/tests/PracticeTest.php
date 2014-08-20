<?php
/**
 * Created by PhpStorm.
 * User: LAB5
 * Date: 8/20/14
 * Time: 10:19 AM
 */
use Way\Tests\Assert;
use Way\Tests\Should;
ini_set("date.timezone","UTC");

class DateFormatter {
    protected $stamp;

    public function __construct(DateTime $stamp)
    {
        $this->stamp = $stamp;
    }

    public function getStamp()
    {
        return $this->stamp;
    }
}


class PracticeTest extends PHPUnit_Framework_TestCase{
    public function testHelloWorld(){
        //assertTrue
        $greeting = "Hello, World.";
        $this->assertTrue($greeting=='Hello, World.',$greeting);
        
        //assertFalse
        $this->assertFalse($greeting=='Hello',$greeting);

        //assertEquals accepts three arguments
        //$this->assertEquals(EXPECTED, ACTUAL, OPTIONAL MESSAGE);
        $this->assertEquals('Hello, World.',$greeting);
    /*
     * If you wish to prove that two values are equal to one another,
     * then, clearly, assertEquals is a better choice than assertTrue,
     * even though both will work.*/
        //assertNotEquals
        $this->assertNotEquals('Hello, VM World.',$greeting);
        
        //Another exercise of assertEquals
        $sum = 2+2;
        $this->assertEquals('4',$sum);

        //assertSame
        $val=null;
        $this->assertEquals(0,$val);
        //In situations, when you require strict comparison (or effectively ===), reach for assertSame
        //$this->assertSame(0,$val);//return false
        $val=0;
        $this->assertSame(0,$val);
    }
    public function testKhorerGadaIncludesShui()
    {
        //assertContains
         $khorerGada = ['Taylor', 'Shui', 'Dayle'];
         $this->assertContains('Shui', $khorerGada);
         $this->assertNotContains('Troll', $khorerGada); // true
    }
    public function testFamilyRequiresParent(){
        /*assertArrayHaskey*/
        $family = [
            'parents' => 'Joe',
            'children' => ['Timmy', 'Suzy']
        ];
        //$this->assertContains('parents', $family); // Failed asserting that an arra
        $this->assertArrayHasKey('parents', $family); // true
        $this->assertInternalType('array', $family['children']); // false

        //another Exercise of assertInternalType
        $age = 25;
        $this->assertInternalType('integer', $age); // true
    }

    //assertInstanceof
    //$this->assertInstanceOf(EXPECTED, ACTUAL, MESSAGE);
    public function testStampMustBeInstanceOfDateTime()
     {
         $date = new DateFormatter(new DateTime);
         $this->assertInstanceOf('DateTime', $date->getStamp()); // true
     }
    public function testItWorks()
     {
         $name = 'Joe';

         Should::equal('Joe', $name);
         Assert::equals('Joe', $name);
     }
} 