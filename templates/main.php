<!DOCTYPE html>
<html>
<head>

<title>AlloX-Proxy</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="php-proxy.com">
<meta name="version" content="<?=$version;?>">
<!--<link rel="dns-prefetch" href="//cc.365cent.com">-->
<link rel="shortcut icon" type="image/x-icon" href="http://www.365cent.com/favicon.ico">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/material-design-lite@1.3.0/dist/material.indigo-pink.min.css">
<script defer src="https://cdn.jsdelivr.net/npm/material-design-lite@1.3.0/material.min.js"></script>
<style type="text/css">
body{
font-family: 'Lato', sans-serif;
}
a{
  text-decoration: none;
}
#form{
width: 320px;
}
#container {
	width:400px;
	margin:0 auto;
	padding-top:150px;
	padding-bottom:20px;
}

#header {
text-align:center;
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
  <div class="nav">
  <button id="demo-menu-lower-left"
          class="mdl-button mdl-js-button mdl-button--icon">
    <i class="material-icons">more_vert</i>
  </button>
  <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
      for="demo-menu-lower-left">
    <li class="mdl-menu__item">AlloX Engine</li>
    <li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><a href="http://cc.365cent.com">CC Forum</a></li>
    <li disabled class="mdl-menu__item">广告合作</li>
    <li class="mdl-menu__item"><a href="http://wpa.qq.com/msgrd?v=3&uin=1309041134&site=qq&menu=yes">联系QQ：1309041134</a></li>
  </ul>
</div>

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
      <div class="mdl-textfield mdl-js-textfield" id="form">
        <input class="mdl-textfield__input" name="url" class="prompt" type="text" autocomplete="on">
         <label class="mdl-textfield__label" for="sample1">http(s)://</label>
      </div>
      <button class="mdl-button mdl-js-button mdl-button--primary" type="submit">
        <i class="material-icons">search</i>
      </button>
		</form>

	<!-- [END] -->

	</div>

</div>

<div id="footer">
  <button type="button" class="mdl-chip">
      <span class="mdl-chip__text" onClick="window.open('https://www.php-proxy.com/','_blank')">Powered by PHP-Proxy 5.1.0</span>
  </button>
  <button type="button" class="mdl-chip">
      <span  class="mdl-chip__text" ><a href="http://p.qnid.cc">Theme: AlloX by 365cent</a></span>
  </button>
  <button id="tt" type="button" class="mdl-chip">
      <span class="mdl-chip__text" onClick="window.open('https://www.paypal.me/allox','_blank')">Why TimeOut?</span>
  </button>
<div class="mdl-tooltip mdl-tooltip--large" for="tt">
AlloX Engine is a free programe, we need your sponsor.
</div>
</div>
<script type="text/javascript">
	document.getElementsByName("url")[0].focus();
</script>
</body>
</html>
