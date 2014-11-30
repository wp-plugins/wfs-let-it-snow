<div class="wrap">
	
	<div id="icon-options-general" class="icon32"></div>
	<h2><?php _e( 'WFS Let It Snow Plugin' ); ?></h2>
	
	<div id="poststuff">
	
		<div id="post-body" class="metabox-holder columns-2">
		
			<!-- main content -->
			<div id="post-body-content">
				
				<div class="meta-box-sortables ui-sortable">
					
					<div class="postbox">
					
						<h3><span><?php _e( 'Plugin Settings' ); ?></span></h3>
						
						<div class="inside">
							
							<form name="wfs_letitsnow_settings_form" method="post" action="">
								
							<input type="hidden" name="wfs_letitsnow_settings_submitted" value="Y">
							
							<table class="form-table">
								
								<tr valign="top" class="alternate">
									<td scope="row">
										<label for="wfs_letitsnow_activate"><?php _e( 'Do you want to let it snow?' ); ?></label>
									</td>
									<td>
										<select name="wfs_letitsnow_activate" id="wfs_letitsnow_activate">
											<option <?php if( $wfs_letitsnow_activate == 'disabled' ) { echo 'selected="selected"'; } ?> value="disabled"><?php _e( 'No thanks' ); ?></option>
											<option <?php if( $wfs_letitsnow_activate == 'enabled' ) { echo 'selected="selected"'; } ?> value="enabled"><?php _e( 'Yes please!' ); ?></option>
										</select>
									</td>
								</tr>
								
								<tr valign="top">
									<td scope="row">
										<label for="wfs_letitsnow_scope"><?php _e( 'Make it snow on' ); ?></label>
									</td>
									<td>
										<select name="wfs_letitsnow_scope" id="wfs_letitsnow_scope">
											<option <?php if( $wfs_letitsnow_scope == 'site' ) { echo 'selected="selected"'; } ?> value="site"><?php _e( 'All Pages' ); ?></option>
											<option <?php if( $wfs_letitsnow_scope == 'homepage' ) { echo 'selected="selected"'; } ?>value="homepage"><?php _e( 'Homepage only' ); ?></option>
										</select>
									</td>
								</tr>
								
								<tr valign="top" class="alternate">
									<td scope="row">
										<label for="wfs_letitsnow_flakeCount"><?php _e( 'Type of snowfall' ); ?></label>
									</td>
									<td>
										<select name="wfs_letitsnow_flakeCount" id="wfs_letitsnow_flakeCount">
											<option <?php if( wfs_letitsnow_flakeCount == 350 ) { echo 'selected="selected"'; } ?> value="350"><?php _e( 'Light flurry' ); ?></option>
											<option <?php if( $wfs_letitsnow_flakeCount == 700 ) { echo 'selected="selected"'; } ?> value="700"><?php _e( 'Medium flurry' ); ?></option>
											<option <?php if( $wfs_letitsnow_flakeCount == 1300 ) { echo 'selected="selected"'; } ?> value="1300"><?php _e( 'Heavy flurry' ); ?></option>
											<option <?php if( $wfs_letitsnow_flakeCount == 2000 ) { echo 'selected="selected"'; } ?> value="2000"><?php _e( 'Whiteout!' ); ?></option>
										</select>
									</td>
								</tr>
								
								<tr valign="top">
									<td scope="row">
										<label for="wfs_letitsnow_minSize"><?php _e( 'Minimum flake size' ); ?></label>
									</td>
									<td>
										<select name="wfs_letitsnow_minSize" id="wfs_letitsnow_minSize">
											<option <?php if( $wfs_letitsnow_minSize == 1 ) { echo 'selected="selected"'; } ?> value="1"><?php _e( '1' ); ?></option>
											<option <?php if( $wfs_letitsnow_minSize == 2 ) { echo 'selected="selected"'; } ?>value="2"><?php _e( '2' ); ?></option>
											<option <?php if( $wfs_letitsnow_minSize == 3 ) { echo 'selected="selected"'; } ?>value="3"><?php _e( '3' ); ?></option>
											<option <?php if( $wfs_letitsnow_minSize == 4 ) { echo 'selected="selected"'; } ?>value="4"><?php _e( '4' ); ?></option>
											<option <?php if( $wfs_letitsnow_minSize == 5 ) { echo 'selected="selected"'; } ?>value="5"><?php _e( '5' ); ?></option>
											<option <?php if( $wfs_letitsnow_minSize == 6 ) { echo 'selected="selected"'; } ?>value="6"><?php _e( '6' ); ?></option>
											<option <?php if( $wfs_letitsnow_minSize == 7 ) { echo 'selected="selected"'; } ?>value="7"><?php _e( '7' ); ?></option>
											<option <?php if( $wfs_letitsnow_minSize == 8 ) { echo 'selected="selected"'; } ?>value="8"><?php _e( '8' ); ?></option>
											<option <?php if( $wfs_letitsnow_minSize == 9 ) { echo 'selected="selected"'; } ?>value="9"><?php _e( '9' ); ?></option>
											<option <?php if( $wfs_letitsnow_minSize == 10 ) { echo 'selected="selected"'; } ?>value="10"><?php _e( '10' ); ?></option>
										</select>
									</td>
								</tr>
								
								<tr valign="top" class="alternate">
									<td scope="row">
										<label for="wfs_letitsnow_maxSize"><?php _e( 'Maximum flake size' ); ?></label>
									</td>
									<td>
										<select name="wfs_letitsnow_maxSize" id="wfs_letitsnow_maxSize">
											<option <?php if( $wfs_letitsnow_maxSize == 1 ) { echo 'selected="selected"'; } ?> value="1"><?php _e( '1' ); ?></option>
											<option <?php if( $wfs_letitsnow_maxSize == 2 ) { echo 'selected="selected"'; } ?>value="2"><?php _e( '2' ); ?></option>
											<option <?php if( $wfs_letitsnow_maxSize == 3 ) { echo 'selected="selected"'; } ?>value="3"><?php _e( '3' ); ?></option>
											<option <?php if( $wfs_letitsnow_maxSize == 4 ) { echo 'selected="selected"'; } ?>value="4"><?php _e( '4' ); ?></option>
											<option <?php if( $wfs_letitsnow_maxSize == 5 ) { echo 'selected="selected"'; } ?>value="5"><?php _e( '5' ); ?></option>
											<option <?php if( $wfs_letitsnow_maxSize == 6 ) { echo 'selected="selected"'; } ?>value="6"><?php _e( '6' ); ?></option>
											<option <?php if( $wfs_letitsnow_maxSize == 7 ) { echo 'selected="selected"'; } ?>value="7"><?php _e( '7' ); ?></option>
											<option <?php if( $wfs_letitsnow_maxSize == 8 ) { echo 'selected="selected"'; } ?>value="8"><?php _e( '8' ); ?></option>
											<option <?php if( $wfs_letitsnow_maxSize == 9 ) { echo 'selected="selected"'; } ?>value="9"><?php _e( '9' ); ?></option>
											<option <?php if( $wfs_letitsnow_maxSize == 10 ) { echo 'selected="selected"'; } ?>value="10"><?php _e( '10' ); ?></option>
										</select>
									</td>
								</tr>
								
								<tr valign="top">
									<td scope="row">
										<label for="wfs_letitsnow_minSpeed"><?php _e( 'Minimum flake speed' ); ?></label>
									</td>
									<td>
										<select name="wfs_letitsnow_minSpeed" id="wfs_letitsnow_minSpeed">
											<option <?php if( $wfs_letitsnow_minSpeed == 1 ) { echo 'selected="selected"'; } ?> value="1"><?php _e( '1' ); ?></option>
											<option <?php if( $wfs_letitsnow_minSpeed == 2 ) { echo 'selected="selected"'; } ?>value="2"><?php _e( '2' ); ?></option>
											<option <?php if( $wfs_letitsnow_minSpeed == 3 ) { echo 'selected="selected"'; } ?>value="3"><?php _e( '3' ); ?></option>
											<option <?php if( $wfs_letitsnow_minSpeed == 4 ) { echo 'selected="selected"'; } ?>value="4"><?php _e( '4' ); ?></option>
											<option <?php if( $wfs_letitsnow_minSpeed == 5 ) { echo 'selected="selected"'; } ?>value="5"><?php _e( '5' ); ?></option>
											<option <?php if( $wfs_letitsnow_minSpeed == 6 ) { echo 'selected="selected"'; } ?>value="6"><?php _e( '6' ); ?></option>
											<option <?php if( $wfs_letitsnow_minSpeed == 7 ) { echo 'selected="selected"'; } ?>value="7"><?php _e( '7' ); ?></option>
											<option <?php if( $wfs_letitsnow_minSpeed == 8 ) { echo 'selected="selected"'; } ?>value="8"><?php _e( '8' ); ?></option>
											<option <?php if( $wfs_letitsnow_minSpeed == 9 ) { echo 'selected="selected"'; } ?>value="9"><?php _e( '9' ); ?></option>
											<option <?php if( $wfs_letitsnow_minSpeed == 10 ) { echo 'selected="selected"'; } ?>value="10"><?php _e( '10' ); ?></option>
										</select>
									</td>
								</tr>
								
								<tr valign="top" class="alternate">
									<td scope="row">
										<label for="wfs_letitsnow_maxSpeed"><?php _e( 'Maximum flake speed' ); ?></label>
									</td>
									<td>
										<select name="wfs_letitsnow_maxSpeed" id="wfs_letitsnow_maxSpeed">
											<option <?php if( $wfs_letitsnow_maxSpeed == 1 ) { echo 'selected="selected"'; } ?> value="1"><?php _e( '1' ); ?></option>
											<option <?php if( $wfs_letitsnow_maxSpeed == 2 ) { echo 'selected="selected"'; } ?>value="2"><?php _e( '2' ); ?></option>
											<option <?php if( $wfs_letitsnow_maxSpeed == 3 ) { echo 'selected="selected"'; } ?>value="3"><?php _e( '3' ); ?></option>
											<option <?php if( $wfs_letitsnow_maxSpeed == 4 ) { echo 'selected="selected"'; } ?>value="4"><?php _e( '4' ); ?></option>
											<option <?php if( $wfs_letitsnow_maxSpeed == 5 ) { echo 'selected="selected"'; } ?>value="5"><?php _e( '5' ); ?></option>
											<option <?php if( $wfs_letitsnow_maxSpeed == 6 ) { echo 'selected="selected"'; } ?>value="6"><?php _e( '6' ); ?></option>
											<option <?php if( $wfs_letitsnow_maxSpeed == 7 ) { echo 'selected="selected"'; } ?>value="7"><?php _e( '7' ); ?></option>
											<option <?php if( $wfs_letitsnow_maxSpeed == 8 ) { echo 'selected="selected"'; } ?>value="8"><?php _e( '8' ); ?></option>
											<option <?php if( $wfs_letitsnow_maxSpeed == 9 ) { echo 'selected="selected"'; } ?>value="9"><?php _e( '9' ); ?></option>
											<option <?php if( $wfs_letitsnow_maxSpeed == 10 ) { echo 'selected="selected"'; } ?>value="10"><?php _e( '10' ); ?></option>
										</select>
									</td>
								</tr>
								
								<tr valign="top">
									<td scope="row">
										<label for="wfs_letitsnow_shadow"><?php _e( 'Turn on shadows?' ); ?></label><br>
										<em><small>(For websites with white backgrounds)</small></em>
									</td>
									<td>
										<select name="wfs_letitsnow_shadow" id="wfs_letitsnow_shadow">
											<option <?php if( $wfs_letitsnow_shadow == 'false' ) { echo 'selected="selected"'; } ?> value="false"><?php _e( 'No' ); ?></option>
											<option <?php if( $wfs_letitsnow_shadow == 'true' ) { echo 'selected="selected"'; } ?>value="true"><?php _e( 'Yes' ); ?></option>
										</select>
									</td>
								</tr>
								
							</table>
							<p><input class="button-primary" type="submit" name="wfs_letitsnow_settings_submit" value="<?php _e( 'Save Settings' ); ?>"></p>
								
							</form>
						</div> <!-- .inside -->
					
					</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables .ui-sortable -->
				
			</div> <!-- post-body-content -->
			
			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">
				
				<div class="meta-box-sortables">
					
					<div class="postbox">
					
						<h3><span>Developed by</span></h3>
						<div class="inside">
							<a href="http://winkingfrog.com"><img src="<?php echo $plugin_img . 'WFS-Inline-Logo.png';?>" alt="Winking Frog Studios Ltd"></a>
							<p>Visit our website at <a href="http://winkingfrog.com" target="_blank">http://winkingfrog.com</a>.</p>
							<p>This plugin is distributed as a FREE plugin for you to enjoy. If it makes you happy and you feel like helping us develop and support more WordPress themes &amp; plugins, you can use the PayPal link below. No pressure though, this one is more for fun than anything else :-)</p>
						</div> <!-- .inside -->
						
					</div> <!-- .postbox -->
					
					<div class="postbox">
					
						<h3><span>Help us do more! (optional)</span></h3>
						<div class="inside">
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="9TNDZAD79QD8S">
								<table>
								<tr><td><input type="hidden" name="on0" value="What's this plugin worth to you?">What's this plugin worth to you?</td></tr><tr><td><select name="os0">
									<option value="By me a coffee">By us a coffee £2.50 GBP</option>
									<option value="Coffee and a cake">Coffee and a cake £5.00 GBP</option>
								</select> </td></tr>
								</table>
								<input type="hidden" name="currency_code" value="GBP">
								<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
								<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
							</form>
						</div> <!-- .inside -->
						
					</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables -->
				
			</div> <!-- #postbox-container-1 .postbox-container -->
			
		</div> <!-- #post-body .metabox-holder .columns-2 -->
		
		<br class="clear">
	</div> <!-- #poststuff -->
	
</div> <!-- .wrap -->