<?php
/*
	File: 		main.inc.php
	Purpose:	the /home basesystem. Action and user handling.
*/

/*
###############################################################################
## All descriptions goes here 
#
	Actions		 a
	--------------
	home		 1
	redirect	 3
	logout		 9
	--------------
	
	Modules		 m
	--------------
	none		 0
	mod1		 1
	mod2		 2
	... 		..
	--------------

###############################################################################
*/

/*	includes  */

	require("inc/setup.inc.php");
	require("inc/actions.inc.php");
	require("inc/session.inc.php");
	require("inc/modules.inc.php");
	require("inc/mysql.inc.php");
	require("inc/output.inc.php");

	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	
	ses_start();
	sql_connect();
	if(! action_checklogin())
	{
		if(! action_login())
			action_redirect("login.php");
	}
	
	$mod = $_GET['m'];
	if($mod)
		ses_set("module",$mod);
	else
		$mod = ses_get("module");
		
	switch($_GET['a'])
	{
		case 1:
			unset($mod);
			break;
		case 3:
			action_redirect($_GET['page']);
			break;
		case 9:
			action_logout();
			break;
	}
	if(mod_getadmin($mod))
		if(!ses_get("admin")) unset($mod);
	mod_execute($mod);
?>