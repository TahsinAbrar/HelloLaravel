<?php
/**
 * Created by PhpStorm.
 * User: LAB5
 * Date: 8/21/14
 * Time: 9:13 AM
 */

class StudentControllerTest extends TestCase{

    public function testLoadingStudentSayHi(){
        $this->call('get','student/sayhi');
        $this->assertResponseOk();
    }
} 