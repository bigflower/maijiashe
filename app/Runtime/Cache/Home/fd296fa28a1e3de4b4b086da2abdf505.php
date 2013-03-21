<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
	<meta name="keywords" content="<?php echo ($setting["key"]); ?>" />
	<meta name="description" content="<?php echo ($setting["des"]); ?>" />
	<meta property="wb:webmaster" content="ee3a36e41e3657fe" />
	<title><?php echo ($setting["name"]); echo L('web_info');?></title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="<?php echo C('static');?>/css/base.css" />
	<script type="text/javascript" src="<?php echo C('static');?>/js/core.js"></script>
	<script type="text/javascript" src="<?php echo C('static');?>/js/base.js"></script>
	<script type="text/javascript">
	<!--
		var $CONFIG = {
			url : '__URL__',
			static : '<?php echo C('static');?>'
		};
	//-->
	</script>
	<?php if(($actionName == 'index')): ?><link rel="stylesheet" type="text/css" href="<?php echo C('static');?>/css/home.css" />
<?php elseif($actionName == 'view'): ?>
	<link rel="stylesheet" type="text/css" href="<?php echo C('static');?>/css/view.css" /><?php endif; ?>
</head>
<body>
<div id="header">
	<div class="box">
		<!-- logo -->
		<h1 class="logo fl">
			<a title="淘宝卖家社" href="#"><img src="" alt="" />淘宝卖家社</a>
		</h1>
		<!-- nav -->
		<div class="nav fr">
			<ul>
				<li><a href="#">经验分享</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="content">

</div>
<div id="footer">
	<div class="footer_m">
		<div class="box">
			<div class="footer_left">
				<a href="<?php echo ($setting["weibo"]); ?>" target="_blank"><?php echo L('FOLLOW_WEIBO');?></a>
				<span><?php echo L('COOP');?>&nbsp;<?php echo ($setting["email"]); ?></span>
			</div>
			<div class="footer_right">
				<!-- Baidu Button BEGIN -->
				<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
					<a class="bds_tsina"></a>
					<a class="bds_taobao"></a>
					<a class="bds_qzone"></a>
					<a class="bds_tqq"></a>
					<a class="bds_douban"></a>
					<a class="bds_renren"></a>
					<a class="bds_tsohu"></a>
					<a class="bds_hi"></a>
					<a class="bds_t163"></a>
					<span class="bds_more">&nbsp;更多</span>
					<a class="shareCount"></a>
				</div>
				<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=4661347" ></script>
				<script type="text/javascript" id="bdshell_js"></script>
				<script type="text/javascript">
				document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
				</script>
				<!-- Baidu Button END -->
			</div>
		</div>
		<div class="box topline">
			<span class="copy"><?php echo ($setting["copy"]); ?></span>
			<span class="link">
				<a href="#">关于我们</a>
				<a href="#">最新动态</a>
				<a href="#">充值说明</a>
				<a href="#">帮助中心</a>
				<a href="#">模板推荐</a>
			</span>
		</div>
	</div>
</div>
</body>
</html>