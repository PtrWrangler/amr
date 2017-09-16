var date1 = moment(new Date()).format("YYYY-MM-DD");
var date2 = moment(new Date()).format("YYYY-MM-DD");

function calDiff()
{
	var duration = moment.duration(moment(date2).diff(moment(date1)));
	var days = duration.asDays();
	return days;
}

//on load reservation page...
$(function() {

	// Code for localStorage/sessionStorage.
	if (typeof(Storage) !== "undefined") {
		
		// if room has been selected (from room select)
		if (localStorage.getItem("imageURL") !== null && localStorage.getItem("room") !== null &&
		  localStorage.getItem("price") !== null && localStorage.getItem("desc") !== null)
		{
			document.getElementById("is_room_selected" ).innerHTML = "";
			
			document.getElementById("res_img"  ).src       = localStorage.getItem("imageURL");
			document.getElementById("res_room" ).innerHTML = localStorage.getItem("room");
			document.getElementById("res_price").innerHTML = localStorage.getItem("price");
			document.getElementById("res_desc" ).innerHTML = localStorage.getItem("desc");
		}
		
		//Extract dates and tennants from localstorage and format them correctly for input
		
		// Arrival date
		if (localStorage.getItem("arrival") !== null) 
			date1 = moment(localStorage.getItem("arrival")).format("YYYY-MM-DD");
		
		document.getElementById("select_checkin").value = date1;
			
		// Departure date
		if (localStorage.getItem("departure") !== null) 
			date2 = moment(localStorage.getItem("departure")).format("YYYY-MM-DD");
			
		document.getElementById("select_checkout").value = date2;
		
		// Num adults
		if (localStorage.getItem("adults") !== null)
			document.getElementById("num_adults").value = localStorage.getItem("adults");
		else
			document.getElementById("num_adults").value = 1;
		
		// Num children
		if (localStorage.getItem("children") !== null)
			document.getElementById("num_children").value = localStorage.getItem("children");
		else
			document.getElementById("num_children").value = 0;
		
		// Prefill name, email, phone, needs
		if (localStorage.getItem("fname") !== null)
			document.getElementById("first-name").value = localStorage.getItem("fname")
		if (localStorage.getItem("lname") !== null)
			document.getElementById("last-name").value = localStorage.getItem("lname")
		if (localStorage.getItem("email") !== null)
			document.getElementById("email").value = localStorage.getItem("email")
		if (localStorage.getItem("phone") !== null)
			document.getElementById("phone").value = localStorage.getItem("phone")
		if (localStorage.getItem("reqs") !== null)
			document.getElementById("requirements").value = localStorage.getItem("reqs")
		
		
	} else {
		// No Web Storage support, use hidden fields to store booking data
		
		$( "#imageURL" ).val($( ".img-responsive.201"    )[0].src);
		$( "#room" ).val(    $( ".rooms_desc__title.201" ).text());
		$( "#price" ).val(   $( ".rooms_desc__price.201" ).text());
		$( "#desc" ).val(    $( ".rooms_desc__desc.201"  ).text());
		
		alert($( "#imageURL" ).val());
		alert($( "#room"     ).val());
		alert($( "#price"    ).val());
		alert($( "#desc"     ).val());
	}
	
	// Fill date info section
	/* var arrival = document.getElementById("select_checkin").value;
	var departure = document.getElementById("select_checkout").value; */
	document.getElementById("checkin").innerHTML = date1;
	document.getElementById("checkout").innerHTML = date2;
	localStorage.setItem("arrival", date1);
	localStorage.setItem("departure", date2);
	
	// calc number of nights staying
	/* date1 = new Date(document.getElementById("select_checkin").value);
	date2 = new Date(document.getElementById("select_checkout").value); 
	var timeDiff = date2.getTime() - date1.getTime();
	var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); */
	
	
	document.getElementById("stay").innerHTML = calDiff();
	
	// fill num tennants
	document.getElementById("adults").innerHTML = document.getElementById("num_adults").value;
	document.getElementById("children").innerHTML = document.getElementById("num_children").value;

});

/*************************************************************/
/*  	   	FUNCTIONS LOCALLY SAVING INFO ON CHANGE		     */
/*************************************************************/

$('#select_checkin').change( function() {
	// Update info section
	var arrival = document.getElementById("select_checkin").value;
	document.getElementById("checkin").innerHTML = arrival;
	
	// Recalc stay length info
	date1 = moment(document.getElementById("select_checkin").value).format("YYYY-MM-DD");
	document.getElementById("stay").innerHTML = calDiff();
	
	// Re-save localstorage var
	localStorage.setItem("arrival", arrival);
});
$('#select_checkout').change( function() {
	// Update info section
	var departure = document.getElementById("select_checkout").value;
	document.getElementById("checkout").innerHTML = departure;
	
	// Recalc stay length info
	date2 = moment(document.getElementById("select_checkout").value).format("YYYY-MM-DD");
	document.getElementById("stay").innerHTML = calDiff();
	
	// Re-save localstorage var
	localStorage.setItem("departure", departure);
});

$('#num_adults').focusout( function() {
	// Update info section
	var adults = document.getElementById("num_adults").value;
	document.getElementById("adults").innerHTML = adults;
	
	// Re-save localstorage var
	localStorage.setItem("adults", adults);
});
$('#num_children').focusout( function() {
	// Update info section
	var children = document.getElementById("num_children").value;
	document.getElementById("children").innerHTML = children;
	
	// Re-save localstorage var
	localStorage.setItem("children", children);
});
$('#first-name').focusout( function() {
	localStorage.setItem("fname", document.getElementById("first-name").value);
});
$('#last-name').focusout( function() {
	localStorage.setItem("lname", document.getElementById("last-name").value);
});
$('#email').focusout( function() {
	localStorage.setItem("email", document.getElementById("email").value);
});
$('#phone').focusout( function() {
	localStorage.setItem("phone", document.getElementById("phone").value);
});
$('#requirements').focusout( function() {
	localStorage.setItem("reqs", document.getElementById("requirements").value);
});