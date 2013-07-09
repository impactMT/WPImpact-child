<?php
/* Admin Welcome */
function impact_admin_welcome() {
global $current_user;
get_currentuserinfo();	 
echo '
<div class="welcome-panel-content">
<h3 class="welcome">';
bloginfo('name');
echo ', welcome to your new website!</h3>
<i class="icon-Impact icon-15x impact-link floatleft" title="Developed by Impact Marketing & Technology"></i>
<p class="about-description">';
echo $current_user->user_firstname;
echo ', follow the simple instructions below to update the dynamic features and content of your new ';
echo get_bloginfo('name');
echo ' website. If you need help getting started, use our <a href="http://impactmt.com/website-support/?company='.get_bloginfo('name').'&website='.get_bloginfo('url').'&email='.$current_user->user_email.'&firstname='.$current_user->user_firstname.'&lastname='.$current_user->user_lastname.'" target="_blank">support form</a> or contact us by phone at 319.232.4332 or fax at 319.236.2292. Thank you for choosing Impact Marketing & Technology for all thats holy and <em>just</em>.
</p>
<div class="clearfix"></div>
<div class="welcome-panel-column-container">
<div class="welcome-panel-column">
<h4>
<span class="icon16 icon-settings"></span>
Basic Settings
</h4>
<p>Here are a few easy things you can do to get your feet wet. Make sure to click Save on each Settings screen.</p>
<ul>
<li>
<a href="http://marketing.impactcreates.com/wordpress/wp-admin/options-privacy.php">Choose your privacy setting</a>
</li>
<li>
<a href="http://marketing.impactcreates.com/wordpress/wp-admin/options-general.php">Select your tagline and time zone</a>
</li>
<li>
<a href="http://marketing.impactcreates.com/wordpress/wp-admin/options-discussion.php">Turn comments on or off</a>
</li>
<li>
<a href="http://marketing.impactcreates.com/wordpress/wp-admin/profile.php">Fill in your profile</a>
</li>
</ul>
</div>
<div class="welcome-panel-column">
<h4>
<span class="icon16 icon-settings"></span>
Basic Instructions
</h4>
<p>Here are a few easy things you can do to get your feet wet. Make sure to click Save on each Settings screen.</p>
<ul>
<li>
<a href="http://marketing.impactcreates.com/wordpress/wp-admin/options-privacy.php">Choose your privacy setting</a>
</li>
<li>
<a href="http://marketing.impactcreates.com/wordpress/wp-admin/options-general.php">Select your tagline and time zone</a>
</li>
<li>
<a href="http://marketing.impactcreates.com/wordpress/wp-admin/options-discussion.php">Turn comments on or off</a>
</li>
<li>
<a href="http://marketing.impactcreates.com/wordpress/wp-admin/profile.php">Fill in your profile</a>
</li>
</ul>
</div>
<div class="welcome-panel-column welcome-panel-last">
<h4>
<span class="icon16 icon-appearance"></span>
Customize Your Site
</h4>
<p>
Use the current theme — Impact Starter — or
<a href="http://marketing.impactcreates.com/wordpress/wp-admin/themes.php">choose a new one</a>
. If you stick with Impact Starter, here are a few ways to make your site look unique.
</p>
<ul>
<li>
<a href="http://marketing.impactcreates.com/wordpress/wp-admin/widgets.php">Add some widgets</a>
</li>
</ul>
</div>
</div>
</div>
<div class="clearfix"></div>';
	 }   
add_action('admin_notices', 'impact_admin_welcome', 1);

