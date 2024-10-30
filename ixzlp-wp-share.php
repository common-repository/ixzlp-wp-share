<?php

/*

Plugin Name: ixzlp WP Share
Plugin URI: https://www.ixzlp.com/
Description: Display social media sharing buttons under your blog posts. | Follow me on <a href="https://www.twitter.com/ixzlp" target="_blank" alt="Dominik Rieken ixzlp on Twitter">Twitter</a>
Version: 1.1
Author: Dominik Rieken
Author URI: https://www.twitter.com/ixzlp/
Update Server: https://www.github.com/ixzlp/ixzlpWPShare/
Min WP Version: 3.0

*/





function ixzlp_wp_share_menu_item()
{
  add_submenu_page("options-general.php", "ixzlp WP Share", "ixzlp WP Share", "manage_options", "ixzp-wp-share", "ixzlp_wp_share_page"); 
}

add_action("admin_menu", "ixzlp_wp_share_menu_item");




/* */



function ixzlp_wp_share_page()
{
   ?>
	<div class="wrap" style="background-color: #FFF; margin-top: 20px; padding: 30px; border-radius: 30px; margin-top:25px;">


		<h1>ixzlp WP Share Settings</h1>

		<p>
Here you have the possibility to display different share buttons under your blog entries.<br />Just select the desired platforms.</p>

		<form method="post" action="options.php">
			<?php
               settings_fields("ixzlp_wp_share_config_section");
 
               do_settings_sections("ixzlp-wp-share");
                
               submit_button(); 
            ?>
		</form>

		<p>* The WhatsApp button is currently only for mobile devices, but the contribution can also be shared, if the user has<br />also installed the WhatsApp client on the MAC / PC.</p>
		<br /><br /><br /><br />
		<p>If you like <strong>ixzlp WP Share</strong> feel free to follow me on <a href="https://www.twitter.com/ixzlp" target="_blank" alt="Dominik Rieken ixzlp on Twitter">Twitter</a>.</p>
		<br /><br />
		<h3>Support</h3>
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="E6ESQ96TH3SSA">
<input type="image" src="https://www.paypalobjects.com/de_DE/DE/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.">
<img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
</form>



		<br /><br />
		<p style="font-size: 10px;">Copyright &copy;
			<?php echo date("Y"); ?> <a href="https://www.ixzlp.com/" target="_blank" alt="Dominik Rieken">Dominik Rieken</a>. All rights reserved.</p>
	</div>

	<?php
}



/* */



function ixzlp_wp_share_settings()
{
	
    add_settings_section("ixzlp_wp_share_config_section", "", null, "ixzlp-wp-share");
	 
    add_settings_field("ixzlp-wp-share-facebook", "Show Facebook", "ixzlp_wp_share_facebook_checkbox", "ixzlp-wp-share", "ixzlp_wp_share_config_section");
    add_settings_field("ixzlp-wp-share-twitter", "Show Twitter", "ixzlp_wp_share_twitter_checkbox", "ixzlp-wp-share", "ixzlp_wp_share_config_section");
    add_settings_field("ixzlp-wp-share-linkedin", "Show LinkedIn", "ixzlp_wp_share_linkedin_checkbox", "ixzlp-wp-share", "ixzlp_wp_share_config_section");
    add_settings_field("ixzlp-wp-share-xing", "Show Xing", "ixzlp_wp_share_xing_checkbox", "ixzlp-wp-share", "ixzlp_wp_share_config_section");
    add_settings_field("ixzlp-wp-share-googleplus", "Show Google+", "ixzlp_wp_share_googleplus_checkbox", "ixzlp-wp-share", "ixzlp_wp_share_config_section");
	add_settings_field("ixzlp-wp-share-whatsapp", "Show WhatsApp *", "ixzlp_wp_share_whatsapp_checkbox", "ixzlp-wp-share", "ixzlp_wp_share_config_section");
	add_settings_field("ixzlp-wp-share-pinterest", "Show Pinterest", "ixzlp_wp_share_pinterest_checkbox", "ixzlp-wp-share", "ixzlp_wp_share_config_section");
	
    register_setting("ixzlp_wp_share_config_section", "ixzlp-wp-share-facebook");
    register_setting("ixzlp_wp_share_config_section", "ixzlp-wp-share-twitter");
    register_setting("ixzlp_wp_share_config_section", "ixzlp-wp-share-linkedin");
    register_setting("ixzlp_wp_share_config_section", "ixzlp-wp-share-xing");
	register_setting("ixzlp_wp_share_config_section", "ixzlp-wp-share-googleplus");
	register_setting("ixzlp_wp_share_config_section", "ixzlp-wp-share-whatsapp");
	register_setting("ixzlp_wp_share_config_section", "ixzlp-wp-share-pinterest");

}
 


/* */



function ixzlp_wp_share_facebook_checkbox()
{  
   ?>
		<input type="checkbox" name="ixzlp-wp-share-facebook" value="1" <?php checked(1, get_option( 'ixzlp-wp-share-facebook'), true); ?> />
		<?php
}

function ixzlp_wp_share_twitter_checkbox()
{  
   ?>
			<input type="checkbox" name="ixzlp-wp-share-twitter" value="1" <?php checked(1, get_option( 'ixzlp-wp-share-twitter'), true); ?> />
			<?php
}

function ixzlp_wp_share_linkedin_checkbox()
{  
   ?>
				<input type="checkbox" name="ixzlp-wp-share-linkedin" value="1" <?php checked(1, get_option( 'ixzlp-wp-share-linkedin'), true); ?> />
				<?php
}

function ixzlp_wp_share_xing_checkbox()
{  
   ?>
					<input type="checkbox" name="ixzlp-wp-share-xing" value="1" <?php checked(1, get_option( 'ixzlp-wp-share-xing'), true); ?> />
					<?php
}
 
function ixzlp_wp_share_googleplus_checkbox()
{  
   ?>
						<input type="checkbox" name="ixzlp-wp-share-googleplus" value="1" <?php checked(1, get_option( 'ixzlp-wp-share-googleplus'), true); ?> />
						<?php
}
 
function ixzlp_wp_share_whatsapp_checkbox()
{  
   ?>
							<input type="checkbox" name="ixzlp-wp-share-whatsapp" value="1" <?php checked(1, get_option( 'ixzlp-wp-share-whatsapp'), true); ?> />
							<?php
}

function ixzlp_wp_share_pinterest_checkbox()
{  
   ?>
							<input type="checkbox" name="ixzlp-wp-share-pinterest" value="1" <?php checked(1, get_option( 'ixzlp-wp-share-pinterest'), true); ?> />
							<?php
}

add_action("admin_init", "ixzlp_wp_share_settings");



/* */



function add_ixzlp_wp_share_icons($content)
{
    $html = "<div class='ixzlp-wp-share-wrapper'><div class='share-on'>Share: </div>";

    global $post;

    $url = get_permalink($post->ID);
    $url = esc_url($url);

    if(get_option("ixzlp-wp-share-facebook") == 1)
    {		
		$html = $html . "<a target='_blank' href='http://www.facebook.com/sharer.php?url=" . $url . "'><div class='facebook'><span class='ixzlp-wp-share-icon-facebook'></<span>Facebook</div></a>";
    }

    if(get_option("ixzlp-wp-share-twitter") == 1)
    {
        $html = $html . "<a target='_blank' href='https://twitter.com/share?url=" . $url . "'><div class='twitter'><span class='ixzlp-wp-share-icon-twitter'>Twitter</div></a>";
    }

    if(get_option("ixzlp-wp-share-linkedin") == 1)
    {
        $html = $html . "<a target='_blank' href='http://www.linkedin.com/shareArticle?url=" . $url . "'><div class='linkedin'><span class='ixzlp-wp-share-icon-linkedin'>LinkedIn</div></a>";
    }

    if(get_option("ixzlp-wp-share-xing") == 1)
    {
        $html = $html . "<a target='_blank' href='https://www.xing.com/spi/shares/new?url=" . $url . "'><div class='xing'><span class='ixzlp-wp-share-icon-xing'>Xing</div></a>";
    }
	
	if(get_option("ixzlp-wp-share-googleplus") == 1)
    {
        $html = $html . "<a target='_blank' href='https://plus.google.com/share?url=" . $url . "'><div class='googleplus'><span class='ixzlp-wp-share-icon-googleplus'>Google +</div></a>";
    }
	
	if(get_option("ixzlp-wp-share-whatsapp") == 1)
    {
        $html = $html . "<a target='_blank' href='WhatsApp://send?text=" . $url . "'><div class='whatsapp'><span class='ixzlp-wp-share-icon-whatsapp'>WhatsApp</div></a>";
    }

		if(get_option("ixzlp-wp-share-pinterest") == 1)
    {
        $html = $html . "<a target='_blank' href='https://pinterest.com/pin/create/bookmarklet/?url=" . $url . "'><div class='pinterest'><span class='ixzlp-wp-share-icon-pinterest'>Pinterest</div></a>";
    }
	
    $html = $html . "<div class='clear'></div></div>";

    return $content = $content . $html;
}

add_filter("the_content", "add_ixzlp_wp_share_icons");



/* */



function ixzlp_wp_share_style() 
{
    wp_register_style("ixzlp-wp-share-style-file", plugin_dir_url(__FILE__) . "style.css");
    wp_enqueue_style("ixzlp-wp-share-style-file");
}

add_action("wp_enqueue_scripts", "ixzlp_wp_share_style");
