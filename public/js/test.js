$(document).ready(function() {
    $('.carousel').carousel({
      interval: 1200
    })
  });
  $(document).ready(function(){	  
	     $('.col-sm-3').append( "<p class='nice'>This is nice picture.</p>" );  
		$('.col-sm-3').mouseover(function(){
		  $('.nice').animate({
			  width: [ "toggle", "swing" ],
              height: [ "toggle", "swing" ],
              opacity: "toggle",
			  fontSize: '12px'
		  }, 5000);	
        $('.img').animate({
	width: '280px',
         })		  
	  })
  })
  
  
  
  
 