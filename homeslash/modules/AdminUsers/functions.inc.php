<?php
/*
	File: 		functions.inc.php
	Purpose:	Put all your modules functions here. 
*/

//	If you want to include other files, put it here:

	require "modules/AdminUsers/inc/output.inc.php";
	
	function AdminUsers_allusers()						// return all users
	{
		$users = array();
		
		$result = sql_select("users");
		while($row = mysql_fetch_array($result))
			$users[$row['ID']] = $row['username']." (".$row['surname']." ".$row['lastname'].")";
			
		ksort($users);
		return $users;
	}
	function AdminUsers_adduser($username,$surname,$lastname,$password)
	{
		mysql_query("INSERT INTO users VALUES(NULL, '".$username."', PASSWORD('".$password."'), '".$surname."', '".$lastname."', 0, 0)") or die("mySQL error: " . mysql_error());
	}
	function AdminUsers_deluser($id)
	{
		mysql_query("DELETE FROM users WHERE ID='".$id."' LIMIT 1") or die("mySQL error: " . mysql_error());
	}
	
?>