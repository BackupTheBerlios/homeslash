<?php
/*
	File: 		modules.inc.php
	Purpose:	Manages modules.
*/
	function mod_install($mod)									// Install a module
	{
		
	}
	function mod_uninstall($mod)								// Uninstall a module
	{
		
	}
	function mod_listinstalled()								// List all installed modules
	{
		$modules = array();
		
		$result = sql_select("modules");
		while($row = mysql_fetch_array($result))
			$modules[$row['ID']] = $row['name'];
		
		asort($modules);
		/*echo "Debug: mod_listinstalled(): <pre>";
		print_r($modules);
		echo "</pre><br>";	//###############################*/
		return $modules;
	}
	function mod_checkisinstalled($mod)							// Checks is module number $mod is installed
	{
		
		global $site_localdir;
		/*if(!$mod)
			echo "Debug: mod nr ".$mod." is not installed<br>";	//###############################*/
		$modname = mod_getname($mod);
		if(! $modname)
			return false;
		if(	is_dir("modules/".$modname) && 
			is_file("modules/".$modname."/functions.inc.php") &&
			is_file("modules/".$modname."/home.inc.php") &&
			is_file("modules/".$modname."/menu.inc.php") &&
			is_file("modules/".$modname."/main.inc.php"))
			return true;
		return false;
	}
	function mod_getname($mod)									// returns name of module number $mod
	{
		$result = sql_select("modules","ID='".$mod."'");
		$row = mysql_fetch_array($result);
		/*echo "Debug: mod nr ".$mod." has name ".$row['name']."<br>"; // ############################*/
		if($modname = $row['name'])
			return $modname;
		else
			return false;
	}
	function mod_getadmin($mod)									// returns true or false wether $mod is only for admins
	{
		$result = sql_select("modules","ID='".$mod."'");
		$row = mysql_fetch_array($result);
		if($row['admin']==1)
			return true;
		else
			return false;
	}
	function mod_execute($mod)									// Execute module $mod
	{
		if(mod_checkisinstalled($mod)) 
			require("modules/".mod_getname($mod)."/functions.inc.php");
	}
	function mod_includecss($mod)									// Include css for module $mod
	{
		if(mod_checkisinstalled($mod)) 
			echo "modules/".mod_getname($mod)."/css.css";
	}
	function mod_echomain($mod)									// Output main frame for module $mod
	{
		global $site_welcometext;
		if(mod_checkisinstalled($mod)) 
			require("modules/".mod_getname($mod)."/main.inc.php");
		else
			echo $site_welcometext;
	}
	function mod_echomenu($mod)									// Output menu for module $mod
	{
		if(mod_checkisinstalled($mod))
			require("modules/".mod_getname($mod)."/menu.inc.php");
	}
?>