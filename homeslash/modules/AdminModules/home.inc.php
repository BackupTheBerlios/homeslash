<?php
/*
	File: 		home.inc.php
	Purpose:	module info and installation instructions.
*/

	function AdminModules_settings() 
	{
		$settings = array(	"name"        => "AdminModules",			// Name of module
							"version"     => "0.1",				// Module version
																
																// Describe your module in max 60 characters
							"description" => "Used to manage modules. (DO NOT UNINSTALL OR DELETE)",
							
							"author"      => "Tobias Nyström",	// Module's author (you!)
							"adminonly"   => 1);				// If its a module only for the admins
		return $settings;
	}
	function AdminModules_install()
	{
		
	}
	function AdminModules_uninstall()
	{
		
	}
?>