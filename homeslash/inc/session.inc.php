<?php
/*
	File: 		session.inc.php
	Purpose:	Manages sessions.
*/

	function ses_start() 										// Start session
	{
		session_start();
		header("Cache-control: private"); /* IE 6 Fix */
	}
	function ses_set($var,$info) 								// Add session variable
	{
		$_SESSION[$var] = $info;
	}
	function ses_get($var)										// Return session variable value
	{
		return $_SESSION[$var];
	}
	function ses_unset($var) 									// Del session variable
	{
		session_unregister($var);
	}
	function ses_end() 											// End session
	{
		session_destroy();
	}
?>