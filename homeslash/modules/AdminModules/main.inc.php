<?php
/*
	File: 		main.inc.php
	Purpose:	modules output.
*/
	$id = $_GET["id"];
	$id2 = $_GET["id2"];
	if($_POST['id']) $id = $_POST["id"];
	
	echo "<h1>AdminModules</h1>";
	
	switch($id)
	{
		case 11:												// Install module $id2;
			AdminModules_installmod($id2);
			AdminModules_out_modules();
			break;
		case 12:
			AdminModules_uninstallmod($id2);					// Uninstall module $id2;
			AdminModules_out_modules();
			break;
		case 13:												// Delete module $id2;
			AdminModules_delmod($id2);
			AdminModules_out_modules();
			break;
		case 14:												// Add module (uploaded);
			AdminModules_addmod();
			AdminModules_out_modules();
			break;
		default:												// Admin main page.
			AdminModules_out_modules();
			break;
	}
?>