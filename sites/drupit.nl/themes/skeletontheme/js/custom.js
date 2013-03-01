/*to top*/

jQuery(document).ready(function($){
	$(".totop ").hide();

});

jQuery(window).bind('scroll', function(){
if(jQuery(this).scrollTop() > 200) 
 jQuery(".totop ").fadeIn(200);
else
 jQuery(".totop ").fadeOut(200);
 
if(jQuery(this).scrollTop() > 5) 
 jQuery("#headerwrap").addClass('headerwrapdown');
else
 jQuery("#headerwrap").removeClass('headerwrapdown');

});