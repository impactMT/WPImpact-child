// Google Fonts
WebFontConfig = {
    google: { families: [ 'Open+Sans:400,400italic,700italic,700:latin', 'Open+Sans+Condensed:700:latin' ] }
};

(function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
})();
	
// Function to open different panel within the panel	
function ppOpen(panel, width){
	jQuery.prettyPhoto.close();
		setTimeout(function() {
			jQuery.fn.prettyPhoto({social_tools: false, deeplinking: false, show_title: false, default_width: width, theme:'impact'});
			jQuery.prettyPhoto.open(panel);
		}, 300);
	}

/* jQuery Selectors Functions */ 
jQuery(document).ready(function($) {
	$( "#page" ).fadeIn( "slow" );
	$( ".tip" ).tooltip();
	$( "a[data-rel^='prettyPhoto[login_panel]']" ).prettyPhoto({theme:'impact', default_width:715, social_tools:false, deeplinking:false});
});
