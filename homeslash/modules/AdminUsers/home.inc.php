<?php
/*
	File: 		home.inc.php
	Purpose:	Your modules info and installation instructions.
	
	Module-creation-howto:
	
	Rules:
	
		1. All your functions must to start with your module's name , i.e modulename_function()
		2. All your tables (in database) must start with your module's name, i.e modulename_table
		3. All your css classes must also start with your module's name, i.e td.modulename_class
		4. If your need to send var through GET you must use ?id=value&id2=value2&id3=value... and so on.
		
*/

	function AdminUsers_settings() 
	{
		/*	Put your settings here
			Can not be removed
		*/
		$settings = array(	"name"        => "AdminUsers",			// Name of module
							"version"     => "0.1",				// Module version
																
																// Describe your module in max 60 characters
							"description" => "Used to manage users.",
							
							"author"      => "Tobias Nyström",	// Module's author (you!)
							"adminonly"   => 1);			// Set to 1 if it is a module only for the admins
		return $settings;
	}
	function AdminUsers_install()
	{
		/* 	all installation-code goes here, this is executed once during installation of your module
			i.e. creation of database-tables, files, directorys or similar.
			Can not be removed
		*/
	}
	function AdminUsers_uninstall()
	{
		/* 	Same as abowe but reversed (of course) 
			Can not be removed
		*/
	}
?>