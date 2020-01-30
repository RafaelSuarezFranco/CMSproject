<?php

// force UTF-8 Ø

if (!defined('WEBPATH')) die();

?>
<!DOCTYPE html>

<html>
	<head>
		<?php zp_apply_filter('theme_head'); ?>
		<title><?php echo getBareGalleryTitle(); ?> | <?php echo gettext("Password required"); ?></title>
		<meta http-equiv="content-type" content="text/html; charset=<?php echo LOCAL_CHARSET; ?>" />
		<link rel="stylesheet" href="<?php echo $_zp_themeroot ?>/zen.css" type="text/css" />
	</head>
<body>
<?php  printRegistrationForm(); ?>

<div id="page">
<?php include("header.php") ?>

<div id="wrapper" class="clearfix">
	<div id="content" class="widecolumn">
	<div id="post">
		<h2 class="title"><span><a href="<?php echo  getGalleryIndexURL();?>" title="Gallery Index"><?php echo  getGalleryTitle();?></a> | </span> <?php printAlbumTitle(true);?></h2>
	</div>
	</div>
	
<div id="main">
<div>

</div>
</div>


</div>

</div>
<?php zp_apply_filter('theme_body_close'); ?>
</body>
</html>
