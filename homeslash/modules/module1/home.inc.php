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

	function module1_settings() 
	{
		/*	Put your settings here
			Can not be removed
		*/
		$settings = array(	"name"        => "module1",			// Name of module
							"version"     => "0.1",				// Module version
																
																// Describe your module in max 60 characters
							"description" => "Module template",
							
							"author"      => "Your name",		// Module's author (you!)
							"adminonly"   => 0);				// Set to 1 if it is a module only for the admins
		return $settings;
	}
	function module1_install()
	{
		/* 	all installation-code goes here, this is executed once during installation of your module
			i.e. creation of database-tables, files, directorys or similar.
			Can not be removed
		*/
	}
	function module1_uninstall()
	{
		/* 	Same as abowe but reversed (of course) 
			Can not be removed
		*/
	}
?>