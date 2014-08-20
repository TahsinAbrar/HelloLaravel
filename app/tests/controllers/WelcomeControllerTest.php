<?php
/**
 * Created by PhpStorm.
 * User: LAB5
 * Date: 8/20/14
 * Time: 9:02 AM
 */

class WelcomeControllerTest extends TestCase {
    public function testLoadingWelcomeSayHello(){
        $this->call('get','welcome/sayhello');
    }
} 