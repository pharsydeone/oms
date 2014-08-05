jQuery(document).ready(function() {
  jQuery('#sidr-menu').sidr();
});


$(window).resize(function(){
						  
						  
   var height = $(this).outerHeight() - ($("#header-wrapper").outerHeight() + $("#footer").outerHeight() + $("#header-wrapper2").outerHeight());

// screen and (min-device-width: 320px) and (max-device-width: 568px) {
	if(window.innerWidth > 568) {
	   if($('#content-copy').height() < height) {
			$('#container').height(height);
	
			//var topmargin = ((height - $('#content-copy').height()) / 2);
			//$('#content-copy').css('margin-top',topmargin+'px');
	   } else {
			$('#content-copy').css('margin-top','0px');
	   } 
	}
})

$(window).resize();