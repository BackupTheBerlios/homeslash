<?php
/*
	File: 		index.php
	Purpose:	The Index page of /home.
*/
	require("inc/main.inc.php");
?>
<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title><?php echo $site_name; ?></title>
		<link href="css/home.css" rel="stylesheet" type="text/css" />
		<link href="<?php mod_includecss($mod); ?>" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<table class="main">
			<tr>
				<td></td>
				<td class="top"></td>
				<td></td>
			</tr>
			<tr>
				<td class="logo" colspan="3">
					<img src="<?php echo $site_logo; ?>" alt="logo" />
				</td>
			</tr>
			<tr>
				<td class="login" colspan="2">
					Logged in as <?php output_userfullname(); ?>.
				</td>
				<td class="info">
					<a href="http://homeslash.aeger.homelinux.org/">homeslash</a> - Created by Tobias Nyström ©2004 (
					<a href="http://validator.w3.org/check?uri=referer">Valid XHTML 1.0</a> - 
					<a href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS</a> )
				</td>
			</tr>
			<tr>
				<td class="modules" valign="top">
					modules<br />
					<br />
					<?php output_modules(); ?>
				</td>
				<td class="main" valign="top" rowspan="3" colspan="2">
					<?php mod_echomain($mod) ?>
				</td>
			</tr>
			<tr>
				<td class="menu" valign="top">
					<a href="?a=1">home</a><br />
					<a href="?a=9">logout</a>
				</td>
			</tr>
			<tr>
				<td class="mod_menu" valign="top">
					module menu<br />
					<br />
					<?php mod_echomenu($mod) ?>
				</td>
			</tr>
		</table>
	</body>
</html>	
<?php 
	sql_disconnect();
?>	