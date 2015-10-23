<?php
namespace Admin\Controller;
class MenuController extends CommonController {
    public function index(){
        $menu = D("Menu");
        $menuList = $menu->select();   //菜单成绩关系
        foreach($menuList as $k=>$v){
            $id=$v['id'];
            $menu->where("pid={$id}")->select();
        }
        $this->assign("menuList",$menuList);
    	$this->display();
    }
    public function digui($pid,&$arr=array()){
        
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
        // error_log(print_r($_POST,1));
        // exit;
        if($menu->create()){
            $menu->add();
            $this->ajaxReturn(true);
        }else{
            $this->ajaxReturn($menu->getError());
        }
    }
}