<?php
/*
	File: 		login.php
	Purpose:	the /home login page.
*/
	include "inc/setup.inc.php";
?>
<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title><?php echo $site_name; ?></title>
		<link href="css/login.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<form action="./" method="post">
			<table>
				<tr>
					<td class="center" colspan="2">
						<h2><?php echo $site_name; ?></h2>
					</td>
				</tr>
				<tr>
					<td class="right">
						Username: 
					</td>
					<td>
						<input type="text" name="username" />
					</td>
				</tr>
				<tr>
					<td class="right">
						Password: 
					</td>
					<td>
						<input type="password" name="password" />
					</td>
				</tr>
				<tr>
					<td class="center" colspan="2">
						<input type="submit" value="Login" />
					</td>
				</tr>
				<tr>
					<td class="center" colspan="2">
						<a href="http://homeslash.aeger.homelinux.org/">homeslash</a> - Created by Tobias Nyström ©2004
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>