<?php
/*
	File: 		actions.inc.php
	Purpose:	the /home actions.
*/
																// id = action id, as described in main.inc.php

	function action_login() 									// Logs user $user into system.
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$where = "username='".$username."' AND password=PASSWORD('".$password."')";
		$result = sql_select("users",$where);
		$row = mysql_fetch_array($result);
		if($row['ID'])
		{
			
			ses_set("userID", $row['ID']);
			ses_set("username", $row['username']);
			ses_set("fullname", $row['surname']." ".$row['lastname']);
			ses_set("admin", $row['group']);
			
			mysql_query("UPDATE users SET visits = visits + 1 WHERE username='".$username."'") or die("Query failed : " . mysql_error());
			
			return true;
		}
		else
			return false;
	}
	function action_checklogin()								// Checks if user is logged in
	{
		if(ses_get("userID"))
			return true;
		else
			return false;
	}
	function action_logout() {
		ses_unset("userID");									// id 9 Logs current user out of system
		ses_end();
		action_redirect("login.php");
	}
	function action_redirect($page = "")						// id 3 Redirect user to $page within /home
	{
		header("Location: ".$site_absolute_uri.$page);
		exit();
	}
?>