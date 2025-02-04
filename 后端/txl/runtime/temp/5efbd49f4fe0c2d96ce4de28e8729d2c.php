<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"/www/wwwroot/20.187.70.78/public/../app/admin/view/smsconfig/index.html";i:1546481688;}*/ ?>
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
    <div style="margin-top: 20px;">
    </div>
    <form class="layui-form" id="admin">
      
     
      <div class="layui-form-item">
        <label class="layui-form-label">AppKey</label>
        <div class="layui-input-inline">
          <input name="appkey" type="keywords" lay-verify="pass" autocomplete="off" class="layui-input" value="<?php echo $data['appkey']; ?>" placeholder="">
        </div>
        <div class="layui-form-mid layui-word-aux">阿里大鱼短信接口的AppKey,<a href="https://dayu.aliyun.com/" target="_blank">点击申请</a></div>
      </div>

      <div class="layui-form-item">
        <label class="layui-form-label">SecretKey</label>
        <div class="layui-input-inline">
          <input name="secretkey" lay-verify="pass" autocomplete="off" class="layui-input" type="keywords" value="<?php echo $data['secretkey']; ?>" placeholder="">
        </div>
        <div class="layui-form-mid layui-word-aux">阿里大鱼短信接口的SecretKey,<a href="https://dayu.aliyun.com/" target="_blank">点击申请</a></div>
      </div>

      <div class="layui-form-item">
        <label class="layui-form-label">短信类型</label>
        <div class="layui-input-inline">
          <input name="type" type="text" lay-verify="pass" autocomplete="off" class="layui-input" value="<?php echo $data['type']; ?>">
        </div>
        <div class="layui-form-mid layui-word-aux">文字短信默认为：normal</div>
      </div>

      <div class="layui-form-item">
        <label class="layui-form-label">签名</label>
        <div class="layui-input-inline">
          <input name="name" type="text" lay-verify="pass" autocomplete="off" autocomplete="off" class="layui-input" value="<?php echo $data['name']; ?>">
        </div>
        <div class="layui-form-mid layui-word-aux">必须是在阿里大于“管理中心-验证码/短信通知/推广短信-配置短信签名”中的可用签名</div>
      </div>

      <div class="layui-form-item">
        <label class="layui-form-label">短信模板id</label>
        <div class="layui-input-inline">
          <input type="text" name="code" lay-verify="pass" autocomplete="off" class="layui-input" value="<?php echo $data['code']; ?>">
        </div>
        <div class="layui-form-mid layui-word-aux">短信模板ID，传入的模板必须是在阿里大于“管理中心-短信模板管理”中的可用模板</div>
      </div>

      <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">附加内容</label>
        <div class="layui-input-block" style="max-width:600px;">
          <textarea placeholder="可通过设置阿里短信的系统变量来调用" class="layui-textarea" name="content" id="container" ><?php echo $data['content']; ?></textarea>
        </div>
      </div>

      <div class="layui-form-item">
        <div class="layui-input-block">
          <button class="layui-btn" lay-submit lay-filter="admin">立即提交</button>
          <button type="reset" class="layui-btn layui-btn-primary">重置</button>
          <button class="layui-btn layui-btn-normal" id="smsto">发送测试</button>
        </div>
      </div>
    </form>

    <div class="layui-form-item">
      <div class="layui-input-block">
      </div>
    </div>

    <script src="/static/public/layui/layui.js"></script>
    <script src="/static/public/jquery/jquery.min.js"></script>
    <script>
      layui.use(['layer', 'form'], function() {
          var layer = layui.layer,
              $ = layui.jquery,
              form = layui.form;
          $(window).on('load', function() {
              form.on('submit(admin)', function(data) {
                  $.ajax({
                      url:"<?php echo url('admin/smsconfig/publish'); ?>",
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


    <script type="text/javascript">
      layui.use('layer', function(){
        var layer = layui.layer;
        var phone;
        $('#smsto').click(function(){
          layer.prompt({
            formType: 0,
            value: '',
            title: '请输入手机号码,不要重复点确定键'
          }, function(value, index, elem){
            phone = value;
            // if(email = null) {
            //   layer.msg('收件箱不能为空');
            //   return false;
            // }
            $.ajax({
              url:"<?php echo url('admin/smsconfig/smsto'); ?>"
              ,type:'post'
              ,data:{phone:phone}
              ,success:function(res) {
                layer.msg(res.msg);
                if(res.code == 1) {
                  layer.close(index);
                }
              }
            })
          });
          return false;
        })
      });              
    </script>
  </div>
</body>
</html>