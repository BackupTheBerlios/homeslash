<?php
/*
	File: 		output.inc.php
	Purpose:	All functions including html-code.
*/

	function AdminModules_out_modules()								// Outputs all modules avalible for installation (and already installed modules) with options.
	{
		?>
		<table class="hs" cellspacing="0">
			<tr>
				<td class="hs_title">
					Module
				</td>
				<td class="hs_title">
					Description
				</td>
				<td class="hs_title">
					Author
				</td>
				<td class="hs_title">
					Installed
				</td>
				<td class="hs_title">
					&nbsp;
				</td>
				<td class="hs_title">
					&nbsp;
				</td>
			</tr>
		<?php
		$modules = AdminModules_listavailablemodules();
		foreach($modules as $mod => $i) 
		{
			?>
				<tr>
					<td class="hs" style="font-weight:bold;">
						<?php echo $mod; ?>
					</td>
					<td class="hs">
						<?php 
							$settings = AdminModules_getmodsettings($mod);
							echo $settings['description']; 
						?>
					</td>
					<td class="hs">
						<?php echo $settings['author']; ?>
					</td>
					<td class="hs" style="text-align:center;width:60px;">
					<?php
						if($i)
							echo "Installed";
						else
						{
							?>
							<form action="">
								<input type="hidden" name="id" value="11" />
								<input type="hidden" name="id2" value="<?php echo $mod; ?>" />
								<input type="submit" value="install" />
							</form>
							<?php
						}
					?>
					</td>
					<td class="hs">
					<?php
						if($i)
						{
							?>
							<form action="">
								<input type="hidden" name="id" value="12" />
								<input type="hidden" name="id2" value="<?php echo $mod; ?>" />
								<input type="submit" value="uninstall" />
							</form>
							<?php
						}
					?>
					</td>
					<td class="hs">
						<form>
							<input type="hidden" name="id" value="13" />
							<input type="hidden" name="id2" value="<?php echo $mod; ?>" />
							<input type="submit" value="delete" />
						</form>
					</td>
				</tr>
			<?php
		}
		?>
		</table>
		<br />
		<form enctype="multipart/form-data" action="./" method="post">
			<input type="hidden" name="id" value="14" />
			<input type="hidden" name="MAX_FILE_SIZE" value="300000" />
			<input name="userfile" type="file" />
			<input type="submit" value="Add module" />
		</form>
		<?php
	}
	function AdminModules_out_users()									// Outputs all modules avalible for installation (and already installed modules).
	{
		?>
			<h1>Manage users</h1>
		<?php
	}
?>