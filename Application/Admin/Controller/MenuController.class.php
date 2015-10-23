<?php
namespace Admin\Controller;
class MenuController extends CommonController {
    public function index(){

    	$this->display();
    }

    public function add(){
        $menu = D("Menu");
        $menuList = $menu->order("concat(path,id)")->select();   //菜单成绩关系
        $this->assign("menuList",$menuList);
        $this->assign("header","菜单添加");
    	$this->assign("title","开心蛙后台管理-菜单添加");
        $this->display();
    }
    public function insert(){
        $menu = D("Menu");
        $id= I('pid');
        if(!$id){
            $id=0;
            $path="0,";
        }
        $map['id']=array("eq",$id);
        $plist = $menu->where($map)->field("path")->find(); //根据id 查出path
        $_POST['path'] = $plist['path'].$id.",";
        $_POST['pid'] = $id;
        if($menu->create()){
            $menu->add();
            $this->ajaxReturn(true);
        }else{
            $this->ajaxReturn($menu->getError());
        }
    }
}