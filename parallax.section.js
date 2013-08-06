jQuery.PlaxSec = {
	init: function(speed){
		var that = this;
		if( jQuery('.plax-section').length >= 1){
			
			jQuery('.plax-section').each(function(element){
			     jQuery(this).parallax('50%', jQuery(this).attr('data-speed'));
            });
		}
	}
}
jQuery(document).ready(function() { jQuery.PlaxSec.init() });