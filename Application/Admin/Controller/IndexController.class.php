<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	
    	$this->display();
    }

    public function indexLoad(){
    	if(IS_AJAX){
    		$a=I('name');
    		$this->assign("a",$a);
    		$this->display();
    	}else{
    		$this->redirect("Index/index");
    	}
    	
    }

    public function load1(){
    	$a=I('name');
    	$this->assign("a",$a);
    	$this->display();
    }
}