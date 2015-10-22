<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _before_index(){   //前置操作
          if(!IS_AJAX){
            $this->redirect("Index/index");
          }
        }
    
}