<?php
/*
	File: 		output.inc.php
	Purpose:	All functions including html-code.
*/

	function AdminUsers_out_users() 
	{
		require "modules/AdminUsers/menu.inc.php";
	}
	function AdminUsers_out_adduser()
	{
		?>
		<table class="hs" cellspacing="0">
			<tr>
				<td class="hs_title" colspan="2">
					Add user
				</td>
			</tr>
			<form method="post" action="./">
				<input type="hidden" name="id"value="3" />
				<tr>
					<td class="hs_right">
						Username:
					</td>
					<td>
						<input type="text" name="id3" />
					</td>
				</tr>
				<tr>
					<td class="hs_right">
						Name:
					</td>
					<td>
						<input type="text" name="id4" />
					</td>
				</tr>
				<tr>
					<td class="hs_right">
						Lastname:
					</td>
					<td>
						<input type="text" name="id5" />
					</td>
				</tr>
				<tr>
					<td class="hs_right">
						Password:
					</td>
					<td>
						<input type="password" name="id6" />
					</td>
				</tr>
				<tr>
					<td></td>
					<td class="hs">
						<input type="submit" value="adduser" />
					</td>
				</tr>
			</form>
			<form method="get" action="./">
				<tr>
					<td></td>
					<td class="hs">
						<input type="submit" value="Cancel" />
					</td>
				</tr>
			</form>
		</table>
		<?php
	}
	function AdminUsers_out_deluser() {
		?>
			<table class="hs" cellspacing="0">
				<tr>
					<td class="hs_title" colspan="2">
						Delete user
					</td>
				</tr>
				<tr>
					<form method="post" action="./">
					<td class="hs_right">
						User:
					</td>
					<td>
						<?php
							$users = AdminUsers_allusers();
							echo "<select class=\"AdminUser\" name=\"id2\">";
							echo "<option value=\"\">Select user</option>";
							foreach($users as $i => $user)
								echo "<option value=\"".$i."\">".$user."</option>";
						
							echo "</select>";
						?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td class="hs">
							<input type="hidden" name="id" value="4" />
							<input type="submit" value="Delete" />
						</td>
					</tr>
				</form>
			</table>
		<?php
	}
	
?>