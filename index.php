<?php

/**
* CopyRight Bitmoe · Hero
* Link https://api.ioliu.cn 
* Follow https://github.com/eary/bing
*/
require('./lib/base.php');

$p = $_REQUEST['p'];
$api = new Base();
$pics = $api -> getPicsByPagin($p);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Pictures | Bing Inc.</title>
		<meta charset="utf-8" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <meta name="keywords" content="Bing,Bing壁纸,bing壁纸api,Bing每日壁纸整合">
        <meta name="description" content="Bing每日壁纸整合">
	    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
        <meta name="author" content="Bitmoe · Hero">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="renderer" content="webkit">
    </head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<!--<h1><a href="index.html"><strong>Bing Pictures.</strong> by ioliu.cn</a></h1>-->
						<h1><a href="/"><strong>&copy; Bing.</strong></a></h1>
						<nav>
							<ul>
								<li><a href="#footer" class="icon fa-info-circle">About</a></li>
								<li><a href="?p=<?php echo $pics['page']['prevNo'] ?>" class=""><i class="icon fa-chevron-circle-left"></i> PREV</a></li>
								<li><a href="?p=<?php echo $pics['page']['nextNo'] ?>" class="">NEXT <i class="icon fa-chevron-circle-right"></i></a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">
						<?php 
                        foreach($pics['images'] as $key=>$value){
                            
                            echo '<article class="thumb">
                                <a href="'.$value['url'].'" class="image"><img src="'.$value['url'].'" alt="" /></a>
                                <h2>'.$value['copyright'].'</h2>
                                <p>
                                    <a target="_blank" href="'.$value['copyrightlink'].'" class="button">查看详细</a>
                                    <a target="_blank" href="'.$value['url'].'" class="button">下载壁纸</a>
                                </p>
                            </article>';
                            
                        }
                        
                        ?>
					</div>

				<!-- Footer -->
					<footer id="footer" class="panel">
						<div class="inner ">
							<div>
								<section>
									<h2>Bing 壁纸 api 用法</h2>
									<p>1. 访问 <a href="/bing" target="_blank" >https://api.ioliu.cn/bing</a>, 返回bing每日最新背景图. </p>
									<p>2. 访问 <a href="/bing?d=1" target="_blank" >https://api.ioliu.cn/bing?d=n</a> (n>=0, max=<span class="max">00</span>), 返回以当日为起点n天前的壁纸.</p>
									<p>3. 访问 <a href="/bing/json" target="_blank" >https://api.ioliu.cn/bing/json</a> , 返回bing每日最新壁纸的相关(介绍、图片地址等)信息(json格式).</p>
								    <p>4. 提供分辨率访问接口(w=宽度,h=高度)
                                        <br>访问 <a href="/bing?w=1920&h=1200" target="_blank" >https://api.ioliu.cn/bing?w=1920&h=1200</a> ,返回Bing每日最新 宽1920 高1200 的分辨率背景图片.
                                        <br>访问 <a href="/bing?d=1&w=1920&h=1200" target="_blank" >https://api.ioliu.cn/bing?d=n&w=1920&h=1200</a> , 返回以当日为起点n天前的 宽1920高1200 的分辨率背景图片.
                                        <br>//目前已知分辨率  
                                        <br>1920x1200  
                                        <br>1920x1080  
                                        <br>1366x768  
                                        <br>1280x768
                                        <br>1024x768
                                        <br>800x600
                                        <br>800x480
                                        <br>640x480
                                        <br>400x240 
                                        <br>320x240
                                    </p>
                                </section>
								<section>
									<h2>Follow me on ...</h2>
									<ul class="icons">
										<!--<li><a target="_blank" href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a target="_blank" href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a target="_blank" href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a target="_blank" href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>-->
										<li><a target="_blank" href="http://github.com/eary/bing" class="icon fa-github"><span class="label">GitHub</span></a></li>
										<li><a target="_blank" href="http://weibo.com/1842336184" class="icon fa-weibo"><span class="label">Weibo</span></a></li>
										<li><a target="_blank" href="mailto:yy.liu@foxmail.com" class="icon fa-envelope"><span class="label">Mail</span></a></li>
									</ul>
								</section>
								<p class="copyright">
									<a href="http://www.miitbeian.gov.cn/">粤ICP备15050037号</a> <br>
                                    &copy; 2016. <a href="/">ioliu.cn</a>.
								    <br>
                                    POWERED BY Bing.
                                </p>
							</div>
						</div>
					</footer>

			</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.poptrox.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>
<script>
$(function(){
    
    var start = "2016-03-04";
    
    var startDate = (new Date(start)).getTime();
    
    var now = new Date();
    
    var today = now.getFullYear() + '-' + (now.getMonth()+1) + '-' + now.getDate();
    
    now = (new Date(today)).getTime();
    
    var calc = Math.floor((new Date(now - startDate)) / 1000 / 60 / 60 / 24);
    
    $('.max').html(calc);
    
});
    

var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?99d1e1ee6b085485bc6ec3e23b821b49";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>


</body>
</html>