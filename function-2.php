<?php

// Function to display custom contact information in the WordPress admin dashboard with modern styling
function custom_dashboard_contact_info() {
	
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


// Hook the custom function to the 'admin_notices' action
add_action('admin_notices', 'custom_dashboard_contact_info');