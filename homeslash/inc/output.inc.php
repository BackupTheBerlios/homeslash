<?php
/*
	File: 		output.inc.php
	Purpose:	All functions including html-code
*/

	function output_modules()									// Output the modules frame
	{
		$modules = mod_listinstalled();
		foreach($modules as $mod => $name)
		/*{*/
			if(mod_checkisinstalled($mod)) 
				if(mod_getadmin($mod))
				{
					if(ses_get("admin"))
						echo output_link("?m=".$mod, $name)."<br />";
				}
				else
						echo output_link("?m=".$mod, $name)."<br />";
		/*}*/
	}
	function output_link($link, $text)							// Returns a html link to $link with the text $text
	{
		return "<a href=\"".$link."\">".$text."</a>";
	}
	function output_userfullname() {
		echo ses_get("fullname"); 
		if(ses_get("admin")) 
			echo " (admin)";
	}
?>