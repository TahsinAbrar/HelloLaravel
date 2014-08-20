<?php
/**
 * Created by PhpStorm.
 * User: LAB5
 * Date: 8/20/14
 * Time: 9:57 AM
 */

class WelcomeController extends BaseController {
    public function sayhello(){
        return View::make('welcome.sayhello')
                ->with(array('hi'=>'||Hello, How are you?||',
                             'hell'=>'||Hell||',
                             'anExampleArraykey'=>'example value')
                        );
    }
} 