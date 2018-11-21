<!DOCTYPE html>
<html>
<head>

<title>AlloX-Proxy</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="php-proxy.com">
<meta name="version" content="<?=$version;?>">
<link rel="shortcut icon" type="image/x-icon" href="http://www.365cent.com/favicon.ico">
<link rel="dns-prefetch" href="//www.365cent.com">
<link rel="dns-prefetch" href="//cc.365cent.com">
<link rel="dns-prefetch" href="//p805rrmce.bkt.clouddn.com">
<link href="//p805rrmce.bkt.clouddn.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" rel="stylesheet">
<style type="text/css">
body{
font-family: 'Lato', sans-serif;
}

#form{
width: 400px;
}
#container {
	width:400px;
	margin:0 auto;
	padding-top:150px;
	padding-bottom:20px;
}

#header {
text-align:center;
padding-bottom:50px;
}
  
#error {
	color:red;
	font-weight:bold;
}

#footer {
	text-align:center;
	font-size:10px;
	clear:both;
}
</style>
</head>

<body>


<div id="container">

	<div id="header">
		<h2>AlloX-Proxy</h2>
	</div>
	
	<?php if(isset($error_msg)){ ?>
	
	<div id="error">
		<p><?php echo $error_msg; ?></p>
	</div>
	
	<?php } ?>
	
	<div id="frm">
	
	<!-- I wouldn't touch this part -->
		<form action="index.php" method="post" style="margin-bottom:0;">
		<div class="ui search">
  <div id="form" class="ui large left icon input">
    <input name="url" class="prompt" type="text" autocomplete="on" placeholder="http://">
    <i class="inverted circular search link icon"></i>
  </div>
  <div class="results"></div>
</div>
		</form>
		
		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script>
		
	<!-- [END] -->
	
	</div>
	
</div>

<div id="footer">
<a class="ui label" href="http://cc.365cent.com" onClick="window.open('https://www.php-proxy.com/','_blank')">Powered by PHP-Proxy 5.1.0</a>
<a class="ui label" href="https://www.365cent.com/alipay" data-tooltip="AlloX项目的运行需要资金，点击按钮免费赞助AlloX项目" data-position="bottom center">请求超时？</a>
<a class="ui label" href="#" data-tooltip="AlloX通过数据分析策略为你屏蔽广告" data-position="bottom center">广告屏蔽</a>
</div>
<script src="//p805rrmce.bkt.clouddn.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//p805rrmce.bkt.clouddn.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
<div style="display:none"><script src="//s22.cnzz.com/z_stat.php?id=1273669953&web_id=1273669953"></script></div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125858308-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125858308-1');
</script>
</body>
</html>