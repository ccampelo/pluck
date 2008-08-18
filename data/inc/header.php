<?php
/* 
 * This file is part of pluck, the easy content management system
 * Copyright (c) somp (www.somp.nl)
 * http://www.pluck-cms.org

 * Pluck is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 
 * See docs/COPYING for the complete license.
*/

//Make sure the file isn't accessed directly
if((!ereg("index.php", $_SERVER['SCRIPT_FILENAME'])) && (!ereg("admin.php", $_SERVER['SCRIPT_FILENAME'])) && (!ereg("install.php", $_SERVER['SCRIPT_FILENAME'])) && (!ereg("login.php", $_SERVER['SCRIPT_FILENAME']))){
    //Give out an "access denied" error
    echo "access denied";
    //Block all other code
    exit();
}

//First set character encoding
header("Content-Type:text/html;charset=utf-8");
//And include the user-specified settings
include("data/settings/options.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>pluck <?php echo $pluck_version; ?> <?php echo $lang_install22; ?> - <?php echo $titelkop; ?></title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<?php
//Check if we need rtl-direction
if ((isset($direction)) && ($direction == "rtl")) {
	echo "<link href=\"data/styleadmin-rtl.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />";
}
else {
	echo "<link href=\"data/styleadmin.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />";
}

//Include TinyMCE, if needed
if ((isset($tinymce)) && ($tinymce == "yes")) {
	include("data/inc/tinymce_inc.php");
}
?>
<meta name="robots" content="noindex" />

<script type="text/javascript">
<!--  
function kadabra(zap) {
	if (document.getElementById) {
		var abra = document.getElementById(zap).style;
		if (abra.display == "block") {
			abra.display = "none";
		}
		else {
			abra.display= "block";
		}
   	return false;
	}
	else {
		return true;
	}
}
//-->
</script>
<script type="text/javascript">
<!--
function confirmation(message) {
	return confirm(message);
}
//-->
</script>
</head>
<body>

<div id="menuheader">
	<div id="menu">
		<div class="menuitem">
			<span><img src="data/image/menu/start.png" border="0" alt="" /></span>
			<span><a href="?action=start" title="<?php echo $lang_kop1; ?>"><?php echo $lang_kop1; ?></a></span>
		</div>
		<div class="menuitem">
			<span><img src="data/image/menu/pages.png" border="0" alt="" /></span>
			<span><a href="?action=page" title="<?php echo $lang_kop2; ?>"><?php echo $lang_kop2; ?></a></span>
		</div>
		<div class="menuitem">
			<span><img src="data/image/menu/modules.png" border="0" alt="" /></span>
			<span><a href="?action=modules" title="<?php echo $lang_modules; ?>"><?php echo $lang_modules; ?></a></span>
		</div>
		<div class="menuitem">
			<span><img src="data/image/menu/options.png" border="0" alt="" /></span>
			<span><a href="?action=options" title="<?php echo $lang_kop4; ?>"><?php echo $lang_kop4; ?></a></span>
		</div>
		<div class="menuitem">
			<span><img src="data/image/menu/logout.png" border="0" alt="" /></span>
			<span><a href="?action=logout" title="<?php echo $lang_kop5; ?>"><?php echo $lang_kop5; ?></a></span>
		</div>
	</div>
	<h1>pluck</h1>
	<div id="statusbox">
	<?php include("data/inc/trashcan_applet.php"); ?>
	<?php include("data/inc/update_applet.php"); ?>
	</div>
</div>

<div id="text">
<h2><?php echo $titelkop; ?></h2>