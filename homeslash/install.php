<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Homeslash Installation</title>
		<link href="css/home.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<table class="main">
			<tr>
				<td class="logo">
					<img src="img/logo.png" alt="logo" />
				</td>
			</tr>
		</table>
		<form method="post">
		<h1>Homeslash Installation</h1>
		<table>
			<tr>
				<td colspan="2">
					<h2>Main setup</h2>
				</td>
			</tr>
			<tr>
				<td>
					Site name:
				</td>
				<td>
					<input style="width:250px;" type="text" name="i_name" value="homeslash" />
				</td>
			</tr>
			<tr>
				<td>
					Site absolute uri (with trailing slash):
				</td>
				<td>
					<input style="width:250px;" type="text" name="i_uri" value="http://homeslash.aeger.homelinux.org/" />
				</td>
			</tr>
			<tr>
				<td>
					temp directory:
				</td>
				<td>
					<input style="width:250px;" type="text" name="i_uri" value="/tmp" />
				</td>
			</tr>
			<tr>
				<td>
					Site logo:
				</td>
				<td>
					<input style="width:250px;" type="text" name="i_logo" value="img/logo.png" />
				</td>
			</tr>
			<tr>
				<td valign="top">
					Welcome text (displayed when users login):
				</td>
				<td>
					<textarea style="width:250px;height:100px" name="i_wtext"/><h1>Welcome to home/</h1>a small groupware created by Tobias Nyström ©2004.<br /><br />Please select module to the left.</textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<h2>MySQL Setup</h2>
				</td>
			</tr>
			<tr>
				<td>
					host:
				</td>
				<td>
					<input style="width:250px;" type="text" name="i_mhost" value="localhost" />
				</td>
			</tr>
			<tr>
				<td>
					databasename:
				</td>
				<td>
					<input style="width:250px;" type="text" name="i_mdbname" value="homeslash" />
				</td>
			</tr>
			<tr>
				<td>
					username:
				</td>
				<td>
					<input style="width:250px;" type="text" name="i_muser" value="homeslash" />
				</td>
			</tr>
			<tr>
				<td>
					password:
				</td>
				<td>
					<input style="width:250px;" type="text" name="i_mpass" value="homeslash" />
				</td>
			</tr>
			<tr>
				<td>
				
				</td>
			</tr>
			<tr>
				<td style="text-align:right;" colspan="2">
					<input type="submit" value="Install" />
				</td>
			</tr>
		<table>
	</body>
</html>