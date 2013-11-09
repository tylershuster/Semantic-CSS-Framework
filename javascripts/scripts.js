var previousScroll = 0;

$(window).scroll(function(){
	var currentScroll = $(this).scrollTop();
	if (currentScroll > previousScroll){
		if ( $( "body>header" ).hasClass( "collapsed" ) ) {/*do nothing*/}
		else {$("body>header").addClass("collapsed");

		}
	} else {
		if ($("body>header").hasClass("collapsed")){
			$("body>header").removeClass("collapsed");					
		}
		else{}
	}
   previousScroll = currentScroll;
});
$("body>header").hover(function() {
	if ($(window).scrollTop() > 0){
		if ($("body>header").hasClass("collapsed")){
			$(this).toggleClass("collapsed");
		}	    		
	}	    	
});

$(".slide-checkbox").attr("disabled",true);

$(".slide-toggle").click(function() {
	if( $(".slide-checkbox").hasClass("activated") ) {
		$(".slide-checkbox").removeClass("activated");
	} else {
		$(".slide-checkbox").addClass("activated");
	};
});
