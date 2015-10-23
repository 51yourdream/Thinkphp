<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
	    $menu = M("menu");
        $list =$menu->select();
        foreach($list as $k=>$v){
            $newlist[$v['pid']][]=$v;
        }
        $this->assign("list",$list);
        $this->assign("newlist",$newlist);
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