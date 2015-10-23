<?php if (!defined('THINK_PATH')) exit();?><div class="page-header">
  <h4><?php echo ($header); ?><small></small></h4>
</div>
<form  id="menu-add" action="/my/thinkphp/index.php/Admin/Menu/insert" method="post" onsubmit="return false">
  <div class="form-group has-success">
    <label class="control-label" for="pid">父级</label>
    <select class="form-control" id="pid" name="pid">
    <option value="0">一级菜单</option>
    <?php if(is_array($menuList)): foreach($menuList as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo["id"] == $pid): ?>selected<?php endif; ?>><?php echo str_repeat('&nbsp;',(substr_count($vo['path'],",")-1)*2); echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
    </select>
    <span class="help-block"></span>
  </div>
  <div class="form-group has-success">
    <label class="control-label" for="app">应用名称</label>
    <input type="text" class="form-control" id="app" name="app" placeholder="应用名称" value="开心蛙APP" required>
    <span class="help-block"></span>
  </div>
  <div class="form-group has-success">
    <label class="control-label" for="name">菜单名称</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="填写应用名称" required>
    <span class="help-block"></span>
  </div>
  <div class="form-group has-success">
    <label class="control-label" for="module">模块名称</label>
    <input type="text" class="form-control" id="module" name="module" placeholder="填写模块名称" required>
    <span class="help-block"></span>
  </div>
  <div class="form-group has-success">
    <label class="control-label" for="controller">控制器名称</label>
    <input type="text" class="form-control" id="controller" name="controller" placeholder="填写控制器名称" required>
    <span class="help-block"></span>
  </div>
  <div class="form-group has-success">
    <label class="control-label" for="action">方法名称</label>
    <input type="text" class="form-control" id="action" name="action" placeholder="填写方法名称" required>
    <span class="help-block"></span>
  </div>
  <div class="form-group has-success">
    <label class="control-label" for="data">额外参数</label>
    <input type="text" class="form-control" id="data" name="data" placeholder="请填写额外参数">
    <span class="help-block"></span>
    <p class="help-block">格式为:<span class="bg-primary">?a=1&b=3或者/a=1/b=2</span></p>
  </div>
  <div class="form-group has-success">
    <label class="control-label" for="status">状态选择</label>
    <select class="form-control" id="status" name="status" required>
        <option value="0">隐藏</option>
        <option value="1">显示</option>
      </select>
      <span class="help-block"></span>
  </div>
  <div class="form-group has-success">
    <label class="control-label" for="type">类型选择</label>
    <select class="form-control" id="type" name="type" required>
        <option value="0">菜单显示</option>
        <option value="1">权限认证加菜单</option>
      </select>
      <span class="help-block"></span>
  </div>
  <div class="form-group has-success">
    <label class="control-label" for="listorder">排序</label>
    <input type="text" class="form-control" id="listorder" name="listorder" placeholder="填写排序数字">
    <span class="help-block"></span>
  </div>
  <button type="submit" class="btn btn-primary" onclick="upload();">添加</button>
  <button type="reset" class="btn btn-danger">重置</button>
</form>

<script>
function upload(){
  var formid = $("#menu-add");
  formupload(formid);
}
  function formupload(formid,showRequest,showResponse,dataType,clearForm,resetForm,timeout){
    var showRequest= showRequest ? showRequest : defaultRequest;
    var showResponse= showResponse ? showResponse : defaultResponse;
    var dataType= dataType ? dataType : 'json';
    var clearForm= clearForm ? true : false;
    var resetForm= resetForm ? true : false;
    var timeout= timeout ? timeout : 3000;
    var options = {  
         // target:'#menu-add',          //把服务器返回的内容放入id为output的元素中      
         beforeSubmit: showRequest,  //提交前的回调函数  
         success: showResponse,      //提交后的回调函数  
         // url:"",                 //默认是form的action， 如果申明，则会覆盖  
         // type: type,               //默认是form的method（get or post），如果申明，则会覆盖  
         dataType:dataType,           //html(默认), xml, script, json...接受服务端返回的类型  
         clearForm:clearForm,          //成功提交后，清除所有表单元素的值  
         resetForm:resetForm,          //成功提交后，重置所有表单元素的值  
         timeout: timeout               //限制请求的时间，当请求大于3秒后，跳出请求  
    } 
    $(formid).ajaxSubmit(options);
    return false;
  }

  function defaultRequest(){
      
  }

  function defaultResponse(data){
    if(data!==true){
      $.each(data,function(n,value){
        $("#"+n).parent().removeClass("has-success").addClass("has-error").end().next("span.help-block").html(value);
      });
    }else{
      qkhl_load($("#qkhl-refresh"));
     // $("#menu-add").resetForm(); //将表单恢复到初始状态。
    }
  }
  
</script>