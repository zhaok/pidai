<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<head>
	<meta http-equiv=content-type content="text/html; charset=UTF-8" />
<?php if(!$pagetitle||$request_uri=='index'){?>
	<title><?php echo $INI['system']['sitename']; ?> - <?php echo $INI['system']['sitetitle']; ?>|<?php echo $city['name']; ?>购物|<?php echo $city['name']; ?>团购|<?php echo $city['name']; ?>打折</title>
<?php } else { ?>
	<title><?php echo $pagetitle; ?> | <?php echo $INI['system']['sitename']; ?> - <?php echo $INI['system']['sitetitle']; ?> |<?php echo $city['name']; ?>购物|<?php echo $city['name']; ?>团购|<?php echo $city['name']; ?>打折<?php echo $INI['system']['subtitle']; ?></title>
<?php }?>

<?php if($seo_description){?>
	<meta name="description" content="<?php echo $seo_description; ?>" />
<?php } else if($team) { ?>
	<meta name="description" content="<?php echo mb_strimwidth(strip_tags($team['title'] .', '. $team['summary'] .', '. $team['systemreview']), 0, 320); ?>" />
<?php } else { ?>
	<meta name="description" content="<?php echo $INI['system']['sitetitle']; ?>|<?php echo $city['name']; ?>购物|<?php echo $city['name']; ?>团购|<?php echo $city['name']; ?>打折" />
<?php }?>
<?php if($seo_keyword){?>
	<meta name="keywords" content="<?php echo $seo_keyword; ?>，<?php echo $city['name']; ?>购物，<?php echo $city['name']; ?>团购，<?php echo $city['name']; ?>打折，团购，打折，精品消费，购物指南，消费指南" />
<?php } else { ?>
	<meta name="keywords" content="<?php echo $INI['system']['sitename']; ?>, <?php echo $city['name']; ?>, <?php echo $city['name']; ?><?php echo $INI['system']['sitename']; ?>，<?php echo $city['name']; ?>购物，<?php echo $city['name']; ?>团购，<?php echo $city['name']; ?>打折，团购，打折，精品消费，购物指南，消费指南" />
<?php }?>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<link href="<?php echo $INI['system']['wwwprefix']; ?>/feed.php?ename=<?php echo $city['ename']; ?>" rel="alternate" title="订阅更新" type="application/rss+xml" />
	<link rel="shortcut icon" href="/static/icon/favicon.ico" />

<link rel="stylesheet" href="/static/<?php echo $INI['skin']['theme']=='default'?'css':('theme/'.(empty($INI['skin']['theme'])?'xiutuan':$INI['skin']['theme']).'/css'); ?>/index.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript">var WEB_ROOT = '<?php echo WEB_ROOT; ?>';</script>
<script type="text/javascript">var LOGINUID= <?php echo abs(intval($login_user_id)); ?>;</script>
<script src="/static/theme/xiutuan/js/index.js" type="text/javascript"></script>
<!--script src="/static/theme/xiutuan/js/index.unpack.js" type="text/javascript"></script-->
<!--script src="/static/theme/xiutuan/js/jquery.ch.js" type="text/javascript"></script-->
<script src="/static/<?php echo $INI['skin']['theme']=='default'?'js':'theme/'.$INI['skin']['theme'].'/js'; ?>/ev56_index.js" type="text/javascript"></script>
<script src="/static/theme/xiutuan/js/tuangou.js" type="text/javascript"></script>
<?php echo Session::Get('script',true);; ?>
</head>
<!--<body class="<?php echo $request_uri=='index'?'bg-alt':'newbie'; ?>">-->
<body class="bg-alt">
<div id="pagemasker"></div>
<div id="dialog"></div>
<div id="doc">
