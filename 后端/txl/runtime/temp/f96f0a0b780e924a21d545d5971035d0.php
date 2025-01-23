<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:65:"/www/wwwroot/qingyu.com/public/../app/admin/view/index/index.html";i:1656816390;s:57:"/www/wwwroot/qingyu.com/app/admin/view/public/header.html";i:1657696052;s:55:"/www/wwwroot/qingyu.com/app/admin/view/public/left.html";i:1657697119;s:57:"/www/wwwroot/qingyu.com/app/admin/view/public/footer.html";i:1657698775;}*/ ?>
<!-- 头部公共文件 -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title></title>
    <link rel="stylesheet" href="/static/public/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="/static/public/font-awesome/css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" href="/static/admin/css/app.css" media="all" />
    <link rel="stylesheet" href="/static/admin/css/themes/default.css" media="all" id="skin" kit-skin />
    <link rel="stylesheet" href="/static/admin/css/admin.css" />
    <link href="http://20.187.70.78:2022/ui/css/perfect-scrollbar.css" rel="stylesheet">
		<link href="http://20.187.70.78:2022/ui/css/metisMenu.min.css" rel="stylesheet"><!-- Bootstrap CSS -->
		<link href="http://20.187.70.78:2022/ui/css/bootstrap.min.css" rel="stylesheet">
		<link href="http://20.187.70.78:2022/ui/css/bootstrap-extended.css" rel="stylesheet">
		<link href="http://20.187.70.78:2022/ui/css/style.css" rel="stylesheet">
		<link href="http://20.187.70.78:2022/ui/css/icons.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"><!-- loader-->
		<link href="http://20.187.70.78:2022/ui/css/pace.min.css" rel="stylesheet">
		<!--Theme Styles-->
		<link href="http://20.187.70.78:2022/ui/css/dark-theme.css" rel="stylesheet">
		<link href="http://20.187.70.78:2022/ui/css/light-theme.css" rel="stylesheet">
		<link href="http://20.187.70.78:2022/ui/css/semi-dark.css" rel="stylesheet">
		<link href="http://20.187.70.78:2022/ui/css/header-colors.css" rel="stylesheet">
</head>
<body class="kit-theme">
    <div class="layui-layout layui-layout-admin kit-layout-admin">
        <div class="layui-header">
            <div class="layui-logo" id="logo" style="background:#fff;color#000"><span>快科技</span></div>
            <ul class="layui-nav layui-layout-left kit-nav kit-tab-tool-body">
                <li class="layui-nav-item"><a id="kit-side-fold" title="左侧菜单" style="color:#333;"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></li>
               
                <li class="layui-nav-item"><a class="kit-item" data-target="refresh" title="刷新当前页" style="color:#333;" id="refresh"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
            </ul>
            <ul class="layui-nav layui-layout-right kit-nav">
                
                <li class="layui-nav-item">
                    <a href="javascript:;" style="color:#333;">
                         ID:<?php if(empty($cookie['nickname']) || (($cookie['nickname'] instanceof \think\Collection || $cookie['nickname'] instanceof \think\Paginator ) && $cookie['nickname']->isEmpty())): ?><?php echo $cookie['name']; else: ?><?php echo $cookie['nickname']; endif; ?>
                    </a>
                </li>
                <li class="layui-nav-item"><a href="javascript:;"  id="logout" style="color:#333;"><span><i class="fa fa-sign-out" aria-hidden="true"></i>退出登录</span></a></li>
            </ul>
        </div>
<!-- 左侧公共菜单文件 -->
        <style>
            .layui-nav-itemed .layui-nav-child {

    background-color: rgba(0,0,0,0)!important;
}
.layui-nav-tree .layui-nav-item a:hover {
    background-color: #fff
}
        </style>
        <div class="layui-side kit-side" style="background-color:#fff !important">
            <div class="layui-side-scroll">
                <ul class="layui-nav layui-nav-tree" lay-filter="kitNavbar" kit-navbar style="background-color:#fff !important">
                <?php if(is_array($menus) || $menus instanceof \think\Collection || $menus instanceof \think\Paginator): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
                    <li class="layui-nav-item <?php if($data['is_open'] == 1): ?>layui-nav-itemed<?php endif; ?>" style="background-color:#fff !important;color:#000">
                        <a href="javascript:;"><i class="fa <?php echo $data['icon']; ?>" aria-hidden="true" style="color: #000;"></i><span style="color:#000!important"> <?php echo $data['name']; ?></span></a>
                        <ul class="menu_ul layui-nav-child">
                        <?php if(!(empty($data['list']) || (($data['list'] instanceof \think\Collection || $data['list'] instanceof \think\Paginator ) && $data['list']->isEmpty()))): if(is_array($data['list']) || $data['list'] instanceof \think\Collection || $data['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(!(empty($vo['list']) || (($vo['list'] instanceof \think\Collection || $vo['list'] instanceof \think\Paginator ) && $vo['list']->isEmpty()))): ?>
                            <li style="color:#000">
                                <a class="table" href="javascript:;"><i class="fa <?php echo $vo['icon']; ?>" style="color: #000;"></i><span style="color:#000!important"> <?php echo $vo['name']; ?></span> <span class="angle"><i class="fa fa-angle-down" style="color: #000;"></i><span></span></a>
                                <ul <?php if($vo['is_open'] == 1): ?>style="display:block;"<?php endif; ?>>
                                    <?php if(is_array($vo['list']) || $vo['list'] instanceof \think\Collection || $vo['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$co): $mod = ($i % 2 );++$i;?>
                                    <li style="color:#000"><a href="javascript:;" data-url="<?php echo $co['url']; ?>" data-icon="<?php echo $co['icon']; ?>" data-title="<?php echo $co['name']; ?>" kit-target data-id='<?php echo $co['id']; ?>'><i class="fa <?php echo $co['icon']; ?>" aria-hidden="true" style="color: #000;"></i><span style="color:#000!important"> <?php echo $co['name']; ?></span></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </li>
                            <?php else: ?>
                            <li style="color:#000">
                                <a href="javascript:;" data-url="<?php echo $vo['url']; ?>" data-icon="<?php echo $vo['icon']; ?>" data-title="<?php echo $vo['name']; ?>" kit-target data-id='<?php echo $vo['id']; ?>'><i class="fa <?php echo $vo['icon']; ?>" aria-hidden="true" style="color: #000;"></i><span style="color:#000!important"> <?php echo $vo['name']; ?></span></a>
                            </li>
                            <?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                        </ul>
                    </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
<div class="layui-body" id="container" style="padding:0 2px;">
    <!-- 内容主体区域 -->
    <div style="padding: 15px;"><i class="layui-icon layui-anim layui-anim-rotate layui-anim-loop">&#xe63e;</i> 正在拼命加载...</div>
</div>
<!-- 底部固定区域 -->

   </div>
    <script src="/static/public/layui/layui.js"></script>
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
            
            $('dl.skin > dd').on('click', function() {
                var $that = $(this);
                var skin = $that.children('a').data('skin');
                switchSkin(skin);
            });
            var setSkin = function(value) {
                    layui.data('kit_skin', {
                        key: 'skin',
                        value: value
                    });
                },
                getSkinName = function() {
                    return layui.data('kit_skin').skin;
                },
                switchSkin = function(value) {
                    var _target = $('link[kit-skin]')[0];
                    _target.href = _target.href.substring(0, _target.href.lastIndexOf('/') + 1) + value + _target.href.substring(_target.href.lastIndexOf('.'));
                    setSkin(value);
                },
                initSkin = function() {
                    var skin = getSkinName();
                    switchSkin(skin === undefined ? 'default' : skin);
                }();
                
                $('#color').click(function(){
                layer.open({
                    type:1,
                    title:'配色方案',
                    area: ['290px', 'calc(100% - 52px)'],
                    offset: 'rb',
                    shadeClose:true,
                    id:'colors',
                    anim: 2,
                    shade:0.2,
                    closeBtn:0,
                    isOutAnim:false,
                    resize:false,
                    move: false,
                    skin: 'color-class',
                    btn:['黑白格','橘子橙','原谅绿','少女粉','天空蓝','枫叶红'],
                    yes: function(index, layero){
                        switchSkin('default');
                      }
                      ,btn2: function(index, layero){
                        switchSkin('orange');
                        return false;
                      }
                      ,btn3: function(index, layero){
                        switchSkin('green');
                        return false;
                      }
                      ,btn4: function(index, layero){
                        switchSkin('pink');
                        return false;
                      }
                      ,btn5: function(index, layero){
                        switchSkin('blue.1');
                        return false;
                      }
                      ,btn6: function(index, layero){
                        switchSkin('red');
                        return false;
                      }

                  });
              })
        });
    </script>
    <script src="/static/public/jquery/jquery.min.js"></script>
    <script type="text/javascript">
    
        layui.use('jquery', function() {
            var $ = layui.jquery;
            $('#clear').on('click', function() {
                var the = $(this).find('i');
                the.attr("class","fa fa-spinner");
                $.ajax({
                  url:"<?php echo url('admin/common/clear'); ?>"
                  ,success:function(res) {
                    if(res.code == 1) {
                        setTimeout(function(){
                            parent.message.show({
                                skin: 'cyan',
                                msg:res.msg
                            });
                            $('#clear i').attr("class","fa fa-institution");
                        },1000)
                    }
                  }
                })
            });
        });

      $('#logout').click(function(){
        layer.confirm('真的要退出?',{icon: 3, title:'提示',anim: 2}, function(index){
            $.ajax({
              url:"<?php echo url('admin/common/logout'); ?>"
              ,success:function(res) {
                layer.msg(res.msg,{offset: '250px',anim: 4});
                if(res.code == 1) {
                    setTimeout(function(){
                        location.href = res.url;
                    },2000)
                }
              }
            })
        }) 
      })

      $('.layui-nav-item').click(function(){
        $(this).siblings('li').attr('class','layui-nav-item');
      })
    </script>

<script type="text/javascript">
  layui.use('layer', function(){
    var layer = layui.layer;
    var remember = '';
    
    $('#tag').click(function(){
        var tag = localStorage.getItem("tag");
      layer.prompt({
        formType: 2,
        anim: 1,
        offset: ['52px', 'calc(100% - 500px)'],
        value: tag,
        title: '便签',
        skin: 'demo-class',
        area: ['280px', '150px'],
        id: 'remember' ,//设定一个id，防止重复弹出
        btn: ['写好了', '忘了吧'],
        shade: 0,
        moveType: 1, //拖拽模式，0或者1
        btn2: function(index, layero){
            localStorage.removeItem("tag");
            $('#remember textarea').val(''); 
            return false;
          }
      },function(value, index, elem){
        localStorage.setItem("tag",value); 
      })
    });
  });              
</script>
</body>
</html>