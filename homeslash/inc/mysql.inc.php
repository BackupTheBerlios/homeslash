<?php
/*
	File: 		mysql.inc.php
	Purpose:	Manages all mySQL queries. No Queries outside this file (modules can have additional queries still).
*/
	function sql_connect()										// Connect to the database
	{
		global $sql_database_host;
		global $sql_database_user;
		global $sql_database_password;
		global $sql_database_name;
		
		mysql_connect($sql_database_host, $sql_database_user, $sql_database_password);
		mysql_select_db($sql_database_name);
	}
	function sql_disconnect()									// Disconnects from the database
	{
		mysql_close();
	}
	function sql_select($table,$where = false)					// Fetch data from $table ("SELECT * FROM $table [WHERE $where]).
	{		
		
		$query = "SELECT * FROM ".$table;
		if($where)
			$query .= " WHERE ".$where;
		/*echo "Debug: Query: ".$query."<br />";	//##########################*/
		$sql_results = mysql_query($query);
		
		return $sql_results;
	}
?>