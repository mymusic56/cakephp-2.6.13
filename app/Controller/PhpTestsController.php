<?php
App::uses('AppController', 'Controller');
class PhpTestsController extends AppController{
	public $content = 2;
	public $uses = ['User'];
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}
	public function index(){
		$this->myTest();
		$this->myTest();
		$this->myTest();die;
		$this->getHttpInfo();
		$this->arrayAdd();die;
	}
	public function stringTest(){
		$a = ' D , E ， F      ，H';
		$a = str_replace(' ', '', $a);
		$a = str_replace('，', ',', $a);
		$a = explode(',', $a);
		var_dump($a);
		die;
	}
	public function arrayAdd(){
		$c = 'c';
		$d = 'd';
		$aaa = ['a' => 'a', 'b' => 'b', 'ef'=>['e','fg'=>'fg']];
		$arry = compact('c', 'd')+$aaa;
		var_dump($arry);
		var_dump(array_keys($arry));
		die;
	}
	public function testUpdate(){
		$this->User->updateAll($fields);
	}
	public function getHttpInfo(){
		$host = env('HTTP_HOST');
		$agent = env('HTTP_USER_AGENT');
		$addr = env('SERVER_ADDR');
		var_dump($addr);
		die;
	}
	function myTest() {
		static $x=0;
		echo $x;
		$x++;
	}
}