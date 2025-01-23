<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:57:"/www/wwwroot/1/public/../app/admin/view/common/login.html";i:1658766893;}*/ ?>
     <!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="/static/public/layui/css/layui.css" />
   <link rel="stylesheet" type="text/css" href="/static/admin/css/admin-1.css" />
   <link rel="stylesheet" type="text/css" href="/static/admin/css/login-1.css" />
   <link rel="stylesheet" type="text/css" href="/static/public/font-awesome/css/font-awesome.css" />
   <link rel="stylesheet" type="text/css" href="/static/public/layui/css/layui.css" />
 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title></title>
    <link rel="stylesheet" href="/static/public/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="/static/public/font-awesome/css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" href="/static/admin/css/app.css" media="all" />
    <link rel="stylesheet" href="/static/admin/css/themes/default.css" media="all" id="skin" kit-skin />
    <link rel="stylesheet" href="/static/admin/css/admin.css" />
  <style>
        * { margin: 0; padding: 0; }
        html { height: 100%; }
        body { height: 100%; background: #fff url(./1.jpg) 50% 50% no-repeat; background-size: cover;}
        .dowebok { position: absolute; left: 50%; top: 50%; width: 430px; height: 550px; margin: -300px 0 0 -215px; border: 1px solid #fff; border-radius: 20px; overflow: hidden;}
        .logo { width: 104px; height: 104px; margin: 50px auto 80px; background: url(./s.png) 0 0 no-repeat; }
        .form-item { position: relative; width: 360px; margin: 0 auto; padding-bottom: 30px;}
        .form-item input { width: 288px; height: 48px; padding-left: 70px; border: 1px solid #fff; border-radius: 25px; font-size: 18px; color: #fff; background-color: transparent; outline: none;}
        .form-item button { width: 360px; height: 60px; border: 0; border-radius: 25px; font-size: 18px; color: #1f6f4a; outline: none; cursor: pointer; background-color: #fff; }
        #username { background: url( ) 20px 14px no-repeat; }
        #password { background: url( ) 23px 11px no-repeat; }
        .tip { display: none; position: absolute; left: 20px; top: 52px; font-size: 14px; color: #f50; }
        .reg-bar { width: 360px; margin: 20px auto 0; font-size: 14px; overflow: hidden;}
        .reg-bar a { color: #fff; text-decoration: none; }
        .reg-bar a:hover { text-decoration: underline; }
        .reg-bar .reg { float: left; }
        .reg-bar .forget { float: right; }
        .dowebok ::-webkit-input-placeholder { font-size: 18px; line-height: 1.4; color: #fff;}
        .dowebok :-moz-placeholder { font-size: 18px; line-height: 1.4; color: #fff;}
        .dowebok ::-moz-placeholder { font-size: 18px; line-height: 1.4; color: #fff;}
        .dowebok :-ms-input-placeholder { font-size: 18px; line-height: 1.4; color: #fff;}

        @media screen and (max-width: 500px) {
            * { box-sizing: border-box; }
            .dowebok { position: static; width: auto; height: auto; margin: 0 30px; border: 0; border-radius: 0; }
            .logo { margin: 50px auto; }
            .form-item { width: auto; }
            .form-item input, .form-item button, .reg-bar { width: 100%; }
        }
    </style>
<body>
    <div class="dowebok">
        <div class="logo"></div>
        <div class="form-item">
     <form class="layui-form" id="login">
        <div class="form-item">
          <label  class="layadmin-user-login-icon layui-icon layui-icon-username" for="LAY-user-login-username"></label>
          <input id="username" type="text" name="name"  lay-verify="required" autocomplete="off" placeholder="用户名"  <?php if(!(empty($usermember) || (($usermember instanceof \think\Collection || $usermember instanceof \think\Paginator ) && $usermember->isEmpty()))): ?>value="<?php echo $usermember; ?>"<?php endif; ?>>
        </div>
        <div class="form-item">
          <label class="layadmin-user-login-icon layui-icon layui-icon-password" for="LAY-user-login-password"></label>
          <input id="password" type="password" name="password" lay-verify="required" autocomplete="off" placeholder="密码">
        </div>
        <div class="form-item">
          <label class="layadmin-user-login-icon layui-icon layui-icon-password" for="LAY-user-login-password"></label>
          <input id="password" type="text" name="captcha" lay-verify="required" autocomplete="off" placeholder="验证码" class="layui-input" style="width:62%;float: left;margin-right:11px;"><img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>?seed='+Math.random()" height="36" id="captcha" style="margin-top: 1px" />
        </div>
     
        <div class="form-item">
          <button  lay-submit lay-filter="login">登 入</button>
        </div>
        <?php echo token('__token__', 'sha1'); ?>
      </form>
    </div>
  </div>
  
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
                form.on('submit(login)', function(data) {
                    $.ajax({
                        url:"<?php echo url('admin/common/login'); ?>",
                        data:$('#login').serialize(),
                        type:'post',
                        async: false,
                        success:function(res) {
                          //alert(res.msg);
                            layer.msg(res.msg,{offset: '50px',anim: 1});
                            if(res.code == 1) {
                                setTimeout(function() {
                                    location.href = res.url;
                                }, 1500);
                            } else {
                                $('#captcha').click();
                            }
                        }
                    })
                    return false;
                });
            });
        });
    </script>
</body>
</html>