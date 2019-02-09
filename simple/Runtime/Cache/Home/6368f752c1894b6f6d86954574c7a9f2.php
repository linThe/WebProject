<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>视频播放器</title>
	<link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_u4qz1594lnixusor.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>common.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>detail_p.css">
</head>
<body>
		<h1 id="dbd"></h1>
		<div class="videos">
		    <!--bottom-->
		    <div class="video_b" style="margin-top:0">
		    	<div class="video_b_in">
		        	<div class="video_ls">
		            	<video id="vids">
		               		 您的浏览器不支持h5标签,请升级或换个浏览器
		                </video>
		                <!--标题-->
		                <div id="titleT" class="title_top">
		                </div>
		                <!--列表菜单-->
		                <div class="list_right">
		                	<a href="javascript:void(0)" id="like"><i class="iconfont icon-xinxing2"></i></a>
		                    <a href="javascript:void(0)" id="zan"><i class="iconfont icon-dianzan"></i></a>
		                    <a href="javascript:void(0)"><i class="iconfont icon-pinglun"></i></a>
		                    <a href="javascript:void(0)"><i class="iconfont icon-zhuanfa"></i></a>
		                    <a href="javascript:void(0)"><i class="iconfont icon-gerenyetianjiajiaguanzhu"></i></a>
		                </div>
		                <!--暂停-->
		                <div id="pass">
		                	<img src="<?php echo (IMG_URL); ?>zt.png">
		                </div>
		                <!--控制器-->
		                <div class="controls">
		                	<!--进度条容器-->
		                    <div id="pBar">
		                    	<!--进度条底色-->
		                        <div class="pBar_bj">
		                        	<!--缓冲的进度条-->
		                            <div id="buff"></div>
		                        	<!--进度条动态-->
		                        	<div id="pBar_move">
		                            	<!--进度条按钮-->
		                        		<div id="pBtn"></div>
		                            </div>
		                        </div>
		                    </div>
		                    <!--展厅播放快进快退音量全屏-->
		                    <div class="trol_list">
		                    	<!--暂停和快进快退-->
		                        <div class="list_1">
		                        	<i class="iconfont icon-kuaitui-copy" onClick="ktui()"></i>
		                            <i class="iconfont icon-zanting2" id="ztbf"></i>
		                            <i class="iconfont icon-kuaijin" onClick="kjin()"></i>
		                        </div>
		                        <!--音量-->
		                        <div class="voice">
		                        	<i class="iconfont icon-yinliang" style="float:left;"></i>
		                            <div class="voicep">
		                            	<div id="vBar">
		                                	<div id="vBar_in"></div>
		                                </div>
		                                <div id="vBtn"></div>
		                            </div>
		                        </div>
		                        <!--时间-->
		                        <div class="vtime">
		                        	<font id="nTime">00:00:00</font>/<em id="aTime">00:00:00</em>
		                        </div>
		                        <!--全屏-->
		                        <i id="qp" class="iconfont icon-quanping"></i>
		                    </div>
		                </div> 
		            </div>
		        </div>
		    </div>
		</div>
		
	
	
<script src="https://cdn.staticfile.org/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo (JS_URL); ?>vedio.js"></script>
</body>
</html>