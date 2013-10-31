var previousScroll = 0;

		$(window).scroll(function(){
			var currentScroll = $(this).scrollTop();
			if (currentScroll > previousScroll){
				if ( $( "header" ).hasClass( "collapsed" ) ) {/*do nothing*/}
				else {$("header").addClass("collapsed");

				}
			} else {
				if ($("header").hasClass("collapsed")){
					$("header").removeClass("collapsed");					
				}
				else{}
			}
	       previousScroll = currentScroll;
	    });
	    $("header").hover(function() {
	    	if ($(window).scrollTop() > 0){
	    		if ($("header").hasClass("collapsed")){
	    			$(this).toggleClass("collapsed");
	    		}	    		
	    	}	    	
	    });
