<?php
/*
	File: 		functions.inc.php
	Purpose:	module functions here.
*/
	require("modules/AdminModules/inc/output.inc.php");
	
	function AdminModules_listavailablemodules()						// List all modules on disk (installed and not)
	{
		$modulesavailable = array();
		$modules = array();
		$dir = opendir("modules/");
		while($file = readdir($dir)) 
		{
			if(	$file != "." && 
				$file != ".." &&
				is_dir("modules/".$file))
				$modulesavailable[] = $file;
		}
		$modulesinstalled = mod_listinstalled();
		foreach($modulesavailable as $i => $modavailable)
		{
			foreach($modulesinstalled as $j => $modinstalled)
			{
				if($modavailable == $modinstalled)
				{
					$modules[$modavailable] = 1;
					break;
				}
				else
					$modules[$modavailable] = 0;
			}
		}
		ksort($modules);
		return $modules;
	}
	function AdminModules_installmod($modname)							// Install a module
	{
		
		$settings = AdminModules_getmodsettings($modname);
		eval($modname."_install();");
		$query = "INSERT INTO modules values(NULL, '".$modname."',".$settings['adminonly'].")";
		mysql_query($query) or die("mySQL error: " . mysql_error());
	}
	function AdminModules_uninstallmod($modname)						// Uninstall a module
	{
		require_once("modules/".$modname."/home.inc.php");
		eval("\$settings = ".$modname."_uninstall();");
		$query = "DELETE FROM modules WHERE name='".$modname."' LIMIT 1";
		mysql_query($query) or die("mySQL error: " . mysql_error());
	}
	function AdminModules_addmod()										// Add a module
	{
		$uploaddir = "files/tmp/";
		
		$uploadfile = $_FILES['userfile']['name'];
		
		$modname = substr($uploadfile,0,strlen($uploadfile)-7);
		
		if (!move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir.$uploadfile)) 
			echo "File was <span style=\"color:#ff0000\">NOT</span>successfully uploaded.\n";
		
		exec("cd ".$uploaddir." && tar -zxvf ".$uploadfile);
		exec("mv ".$uploaddir.$modname." modules/");
		exec("rm".$uploaddir.$uploadfile);
		
	}
	function AdminModules_delmod($modname)								// Remove a module
	{
		$modules = AdminModules_listavailablemodules();
		
		if($modules[$modname] == 1)
			AdminModules_uninstallmod($modname);
			
		exec("rm -r modules/".$modname);
	}
	function AdminModules_getmodsettings($modname)						// Get modules's settings
	{
		require_once("modules/".$modname."/home.inc.php");
		eval("\$settings = ".$modname."_settings();");
		return $settings;
	}
?>