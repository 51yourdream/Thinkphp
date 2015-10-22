<?php
namespace Admin\Controller;
class MenuController extends CommonController {
    public function index(){

    	$this->display();
    }

    public function add(){
        $menu = D("Menu");
        // if(!I("id")){
        //     $pid=0;
        //     $path="0,";
        // }else{
        //     $pid=I('id');
        //     $path=I("path").$pid.",";
        // }
        $menuList = $menu->order("concat(path,id)")->select();   //菜单成绩关系
        // $this->assign('pid',$pid);
        // $this->assign('path',$path);
        $this->assign("menuList",$menuList);
        $this->assign("header","菜单添加");
    	$this->assign("title","开心蛙后台管理-菜单添加");
        $this->display();
    }
    public function insert(){
        $menu = D("Menu");
        if($menu->create()){
            $menu->add();
            $this->ajaxReturn(true);
        }else{
            $this->ajaxReturn($menu->getError());
        }
    }
}