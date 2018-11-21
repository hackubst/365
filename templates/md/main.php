<!DOCTYPE html>
<html>
<head>

<title>Allox-Proxy</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="generator" content="php-proxy.com">
<meta name="version" content="<?=$version;?>">
<link rel="shortcut icon" type="image/x-icon" href="http://www.365cent.com/favicon.ico">
<link rel="dns-prefetch" href="http://www.365cent.com">
<link rel="dns-prefetch" href="https://cdn.bootcss.com">
<link rel="dns-prefetch" href="//fl5.gtimg.com">
<link href="https://cdn.bootcss.com/materialize/1.0.0-rc.1/css/materialize.min.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/materialize/1.0.0-rc.1/js/materialize.min.js" defer></script>

<style type="text/css">
html body {
	font-family: Arial,Helvetica,sans-serif;
	font-size: 12px;
}

#container {
	width:500px;
	margin:0 auto;
	margin-top:150px;
}

#error {
	color:red;
	font-weight:bold;
}

#footer {
	text-align:center;
	font-size:10px;
	margin-top:35px;
	clear:both;
}
</style>

</head>

<body>


<div id="container">

	<div style="text-align:center;">
		<h3>Allox-Proxy</h3>
	</div>
	
	<?php if(isset($error_msg)){ ?>
	
	<div id="error">
		<p><?php echo $error_msg; ?></p>
	</div>
	
	<?php } ?>
	
	<div id="frm">
	
	<!-- I wouldn't touch this part -->
	
		<form action="index.php" method="post" style="margin-bottom:0;">
			<input name="url" type="text" style="width:400px;" autocomplete="on" placeholder="http://" />
			<input class="waves-effect waves-light btn" type="submit" value="Go" />
		</form>
		
		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script>
		
	<!-- [END] -->
	
	</div>
	
</div>

<div id="footer">
  <div class="chip">
    <a href="http://www.365cent.com" onClick="window.open('https://www.php-proxy.com/','_blank')">Powered by PHP-Proxy 5.1.0</a>
  </div>
  <div class="chip">
    <script src="//s22.cnzz.com/z_stat.php?id=1273669953&web_id=1273669953"></script>
  </div>
</div>


</body>
</html>