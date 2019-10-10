$.noConflict();
jQuery(document).ready(function(){
    
	var form = jQuery('.addCart');

	
	jQuery(form).submit(function(event){

		event.preventDefault();

		

		var formData = jQuery(this).serialize();

		console.log(formData);

		jQuery.ajax({
			type:'POST',
			async:false,
			url:jQuery(form).attr('action'),
			data:formData
		}).done(function(response){
			jQuery(formMessages).removeClass('error');
			jQuery(formMessages).addClass('success');
		}).fail(function(data){
			jQuery(formMessages).addClass('error');
			jQuery(formMessages).removeClass('success');
		})
			
	var formMessages = jQuery('#cart_item_number');

		jQuery.ajax({
			type:'POST',
			url:'http://localhost/gadgetstore/cart/total_item',
			data:formData
		}).done(function(response){
			jQuery(formMessages).removeClass('error');
			jQuery(formMessages).addClass('success');
			console.log(response);
			jQuery(formMessages).text(response);

		}).fail(function(data){
			jQuery(formMessages).addClass('error');
			jQuery(formMessages).removeClass('success');
		})
	});


	

});