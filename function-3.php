<?php

// Register a custom meta box
function custom_dashboard_meta_box() {
	
    add_meta_box(
        'custom_dashboard_contact_info', // Unique ID
        'Contact Information', // Box title
        'custom_dashboard_contact_info_callback', // Content callback
        'dashboard', // Post type
        'side', // Context (side, normal, advanced)
        'high' // Priority (low, default, high)
    );
	
}

add_action('wp_dashboard_setup', 'custom_dashboard_meta_box');

// Callback function to output the content of the meta box
function custom_dashboard_contact_info_callback() {
	
    echo '<div style="text-align: center; background-color: #f9f9f9; padding: 30px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 600px; margin: 20px auto;">
            <p style="font-size: 20px; font-weight: bold; color: #333;">Contact us for Developer:</p>
            <p style="margin: 10px 0; font-size: 16px;"><strong>Email:</strong> <a href="mailto:you@example.com" style="color: #0073aa; text-decoration: none;">you@example.com</a></p>
            <p style="margin: 10px 0; font-size: 16px;"><strong>Phone:</strong> +123456789</p>
            <p style="margin: 10px 0; font-size: 16px;"><strong>WhatsApp:</strong> <a href="https://wa.me/123456789" style="color: #25D366; text-decoration: none;">Click here to chat</a></p>
            <p style="margin: 10px 0; font-size: 16px;"><strong>Skype:</strong> <a href="skype:your_skype_username?chat" style="color: #00aff0; text-decoration: none;">your_skype_username</a></p>
            <p style="margin: 10px 0; font-size: 16px;"><strong>Telegram:</strong> <a href="https://t.me/your_telegram_username" style="color: #0088cc; text-decoration: none;">Your Telegram Username</a></p>
            <p style="margin: 10px 0; font-size: 16px;"><strong>Facebook:</strong> <a href="https://www.facebook.com/yourprofile" style="color: #3b5998; text-decoration: none;">Your Facebook Profile</a></p>
          </div>';
		  
}


// Enqueue custom admin styles
function custom_dashboard_styles() {
	
    echo '<style>
        .postbox-container .meta-box-sortables.ui-sortable .postbox {
            margin-bottom: 20px;
        }
        .postbox-container .meta-box-sortables.ui-sortable .postbox .inside {
            padding: 0;
        }
        .postbox-container .meta-box-sortables.ui-sortable .postbox .inside > div {
            padding: 15px;
        }
    </style>';
	
}

add_action('admin_enqueue_scripts', 'custom_dashboard_styles');
