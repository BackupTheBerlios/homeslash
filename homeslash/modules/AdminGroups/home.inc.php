<?php
/*
	File: 		home.inc.php
	Purpose:	Your modules info and installation instructions.
*/

	function AdminGroups_settings() 
	{
		$settings = array(	"name"        => "AdminGroups",
							"version"     => "0.1",
							"description" => "Used to manage groups.",
							"author"      => "Tobias Nyström",
							"adminonly"   => 1);
		return $settings;
	}
	function AdminGroups_install()
	{
		
	}
	function AdminGroups_uninstall()
	{
		
	}
?>