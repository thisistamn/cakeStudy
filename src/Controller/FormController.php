<?php
namespace App\Controller;
use \Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Routing\Router;

Class FormController extends AppController {
    public function initialize(){
        $this->name = "Form";
        $this->viewBuilder()->Layout('Hello');
        $this->set('msg','Hello/index');
        $this->set('footer','Hello/footer2');
    }
    public function index(){
        $test =Router::url(['controller'=>'form','action'=>'index']);
        $this->set('test',$test);
    }
    public function sendForm(){
        $result = '';
        $result = $this->request->getData('text1');
        $this->set('result',$result);
    }
}
