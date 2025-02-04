<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"/www/wwwroot/180.215.171.140/public/../app/admin/view/admin/publish.html";i:1572770758;}*/ ?>
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
</head>
<body style="padding:10px;">
  <div class="tplay-body-div">
    <div class="layui-tab">
      <ul class="layui-tab-title">
        <li><a href="<?php echo url('admin/admin/index'); ?>" class="a_menu">管理员管理</a></li>
        <li class="layui-this">新增管理员</li>
      </ul>
    </div> 
    <div style="margin-top: 20px;">
    </div>
    <form class="layui-form" id="admin">

      <div class="layui-form-item">
        <label class="layui-form-label">分组</label>
        <div class="layui-input-inline">
          <select name="admin_cate_id" lay-filter="aihao">
            <option>请选择分组</option>
            <?php if(is_array($info['admin_cate']) || $info['admin_cate'] instanceof \think\Collection || $info['admin_cate'] instanceof \think\Paginator): $i = 0; $__LIST__ = $info['admin_cate'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo $vo['id']; ?>" <?php if(!(empty($info['admin']['admin_cate_id']) || (($info['admin']['admin_cate_id'] instanceof \think\Collection || $info['admin']['admin_cate_id'] instanceof \think\Paginator ) && $info['admin']['admin_cate_id']->isEmpty()))): if($info['admin']['admin_cate_id'] == $vo['id']): ?> selected=""<?php endif; endif; ?>><?php echo $vo['name']; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </select>
        </div>
      </div>

      <div class="layui-upload" id="upload-thumb">
        <label class="layui-form-label">头像</label>
        <button type="button" class="layui-btn" id="thumb">上传头像</button>
        <div class="layui-upload-list">
          <label class="layui-form-label"></label>
          <img class="layui-upload-img" id="demo1" width="150" height="150" <?php if(!(empty($info['admin']['thumb']) || (($info['admin']['thumb'] instanceof \think\Collection || $info['admin']['thumb'] instanceof \think\Paginator ) && $info['admin']['thumb']->isEmpty()))): ?>src="<?php echo geturl($info['admin']['thumb']); ?>"<?php endif; ?>>
          <p id="demoText"></p>
        </div>
      </div>


      <div class="layui-form-item">
        <label class="layui-form-label">用户名</label>
        <div class="layui-input-inline">
          <input name="name" lay-verify="required" placeholder="请输入" autocomplete="off" class="layui-input" type="text" <?php if(!(empty($info['admin']['name']) || (($info['admin']['name'] instanceof \think\Collection || $info['admin']['name'] instanceof \think\Paginator ) && $info['admin']['name']->isEmpty()))): ?>value="<?php echo $info['admin']['name']; ?>"<?php endif; ?>>
        </div>
        <label class="layui-form-label">昵称</label>
        <div class="layui-input-inline">
          <input name="nickname" lay-verify="required" placeholder="请输入" autocomplete="off" class="layui-input" type="text" <?php if(!(empty($info['admin']['nickname']) || (($info['admin']['nickname'] instanceof \think\Collection || $info['admin']['nickname'] instanceof \think\Paginator ) && $info['admin']['nickname']->isEmpty()))): ?>value="<?php echo $info['admin']['nickname']; ?>"<?php endif; ?>>
        </div>
      </div>
      
      <?php if(empty($info['admin']) || (($info['admin'] instanceof \think\Collection || $info['admin'] instanceof \think\Paginator ) && $info['admin']->isEmpty())): ?>
      <div class="layui-form-item">
        <label class="layui-form-label">密码</label>
        <div class="layui-input-inline">
          <input name="password" lay-verify="pass" placeholder="请输入密码" autocomplete="off" class="layui-input" type="password">
        </div>
        <label class="layui-form-label">重复密码</label>
        <div class="layui-input-inline">
          <input name="password_confirm" lay-verify="pass" placeholder="请再次输入密码" autocomplete="off" class="layui-input" type="password">
        </div>
      </div>
      <?php endif; if(!(empty($info['admin']) || (($info['admin'] instanceof \think\Collection || $info['admin'] instanceof \think\Paginator ) && $info['admin']->isEmpty()))): ?>
      <input type="hidden" name="id" value="<?php echo $info['admin']['id']; ?>">
      <?php endif; ?>
      <div class="layui-form-item">
        <div class="layui-input-block">
          <button class="layui-btn" lay-submit lay-filter="admin">立即提交</button>
          <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
      </div>
      
    </form>


    <script src="/static/public/layui/layui.js"></script>
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
    <script>
    layui.use('upload', function(){
      var upload = layui.upload;
      //执行实例
      var uploadInst = upload.render({
        elem: '#thumb' //绑定元素
        ,url: "<?php echo url('common/upload'); ?>" //上传接口
        ,done: function(res){
          //上传完毕回调
          if(res.code == 2) {
            $('#demo1').attr('src',res.src);
            $('#upload-thumb').append('<input type="hidden" name="thumb" value="'+ res.id +'">');
          } else {
            layer.msg(res.msg);
          }
        }
        ,error: function(){
          //请求异常回调
          //演示失败状态，并实现重传
          var demoText = $('#demoText');
          demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-mini demo-reload">重试</a>');
          demoText.find('.demo-reload').on('click', function(){
            uploadInst.upload();
          });
        }
      });
    });
    </script>
    <script>
      layui.use(['layer', 'form'], function() {
          var layer = layui.layer,
              $ = layui.jquery,
              form = layui.form;
          $(window).on('load', function() {
              form.on('submit(admin)', function(data) {
                  $.ajax({
                      url:"<?php echo url('admin/admin/publish'); ?>",
                      data:$('#admin').serialize(),
                      type:'post',
                      async: false,
                      success:function(res) {
                          if(res.code == 1) {
                              layer.alert(res.msg, function(index){
                                location.href = res.url;
                              })
                          } else {
                              layer.msg(res.msg);
                          }
                      }
                  })
                  return false;
              });
          });
      });
    </script>
  </div>
</body>
</html>