<?php



// Function to display custom contact information in the WordPress admin dashboard
function custom_dashboard_contact_info() {
	
    echo '<p>Contact us for Developer:</p>
          <p>Email: <a href="mailto:you@example.com">you@example.com</a></p>
          <p>Phone: +123456789</p>
          <p>WhatsApp: <a href="https://wa.me/123456789">Click here to chat</a></p>
          <p>Skype: <a href="skype:your_skype_username?chat">your_skype_username</a></p>
          <p>Telegram: <a href="https://t.me/your_telegram_username">Your Telegram Username</a></p>
          <p>Facebook: <a href="https://www.facebook.com/yourprofile">Your Facebook Profile</a></p>';
		  
}

// Hook the custom function to the 'admin_notices' action
add_action('admin_notices', 'custom_dashboard_contact_info');