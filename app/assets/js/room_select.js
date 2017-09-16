$('.btn-rooms').on('click', function() {
	//alert($(this).attr('id'));
	
	if (typeof(Storage) !== "undefined") {
		// Code for localStorage/sessionStorage.
		
		localStorage.setItem("imageURL", $( ".img-responsive." + $(this).attr('id') )[0].src);
		localStorage.setItem("room",     $( ".rooms_desc__title." + $(this).attr('id') ).text());
		localStorage.setItem("price",    $( ".rooms_desc__price." + $(this).attr('id') ).text());
		localStorage.setItem("desc",     $( ".rooms_desc__desc." + $(this).attr('id')  ).text());
		
		//alert(localStorage.getItem("desc"));
		
	} else {
		// No Web Storage support, use hidden fields to store booking data
		
		$( "#imageURL" ).val($( ".img-responsive." + $(this).attr('id')    )[0].src);
		$( "#room" ).val(    $( ".rooms_desc__title." + $(this).attr('id') ).text());
		$( "#price" ).val(   $( ".rooms_desc__price." + $(this).attr('id') ).text());
		$( "#desc" ).val(    $( ".rooms_desc__desc." + $(this).attr('id')  ).text());
		
		alert($( "#imageURL" ).val());
		alert($( "#room"     ).val());
		alert($( "#price"    ).val());
		alert($( "#desc"     ).val());
	}

	
	
	/* alert($( ".img-responsive." )[0].src);
	alert($( ".rooms_desc__title." ).text());
	alert($( ".rooms_desc__price." ).text());
	alert($( ".rooms_desc__desc." ).text()); */
	
	window.location.href = "/reservation.html";
	
	
});