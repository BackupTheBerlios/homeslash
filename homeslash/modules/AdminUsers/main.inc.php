<?php
/*
	File: 		main.inc.php
	Purpose:	Your modules output.
*/

	echo "<h1>AdminUsers</h1>";
	$id = $_GET["id"];
	if($_POST["id"])
		$id = $_POST["id"];
	
	switch($id)
	{
		case 1:													// AdminUsers add user form
			AdminUsers_out_adduser();
			break;
		case 2:													// AdminUsers del user form
			AdminUsers_out_deluser();
			break;
		case 3:													// Add user 
			AdminUsers_adduser($_POST["id3"],$_POST["id4"],$_POST["id5"],$_POST["id6"],$_POST["id7"]);
			AdminUsers_out_users();
			break;
		case 4:													// Delete user $id2
			AdminUsers_deluser($_POST["id2"]);
			AdminUsers_out_users();
			break;
		default:												//	AdminUsers main page
			AdminUsers_out_users();
			break;
		
	}
?>