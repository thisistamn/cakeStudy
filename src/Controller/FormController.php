<?php

namespace App\Controller;

Class FormController extends AppController {
    public function initialize(){
        $this->name = "Form";
        $this->viewBuilder()->Layout('Hello');
        $this->set('msg','Hello/index');
        $this->set('footer','Hello/footer2');
    }
    public function index(){

    }
    public function sendForm(){
        $str = $this->request['url']['text1'];
        $result = "";
        if($str != ''){
            $result = "you type:" . $str;
        } else {
            $result = 'empty.';
        }
        $this->set('result',h($result));
    }
}
