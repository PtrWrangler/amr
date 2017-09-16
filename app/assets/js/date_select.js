//on load index page...
$(function() {
	d = new Date();
	month = '' + (d.getMonth() + 1),
	day = '' + d.getDate(),
	year = d.getFullYear();
	if (month.length < 2) month = '0' + month;
	if (day.length < 2) day = '0' + day;
		
	if (localStorage.getItem("arrival") !== null)
		document.getElementById("reservation__check-in").value = moment(localStorage.getItem("arrival")).format("YYYY-MM-DD");
	else
		document.getElementById("reservation__check-in").value = moment().format("YYYY-MM-DD"); 
		
	if (localStorage.getItem("departure") !== null)
		document.getElementById("reservation__check-out").value = moment(localStorage.getItem("departure")).format("YYYY-MM-DD");
	else
		document.getElementById("reservation__check-out").value = moment().format("YYYY-MM-DD"); 
	
	if (localStorage.getItem("adults") !== null)
		document.getElementById("num_adults").innerHTML = localStorage.getItem("adults");
	if (localStorage.getItem("children") !== null)
		document.getElementById("num_children").innerHTML = localStorage.getItem("children");
	
/* 	// Load Events
	var xhr = new XMLHttpRequest();
	xhr.open("GET", "http://eventful.com/events?q=music&l=Quebec", false);
	xhr.send();

	console.log(xhr.status);
	console.log(xhr.statusText); */
	get_local_events();
	
});

// http://api.eventful.com/docs/events/search
function get_local_events()
{
	var oArgs = {
			app_key:"z3ZVCPzb2nH9FS8k",

			date: "Future",
			location: "Quebec City", 
			//"date": "2017091000-2017092000",
			within: 25 ,
			units: "km" ,
			total_items: 3 ,
			mature: "Safe" ,
			// langauges: 
			// image_sizes: 
				// A comma separted list of image_sizes desired. See Faq for list of possible image sizes. (optional)
			// sort_order: 
				// One of 'popularity', 'date', or 'relevance'. Default is 'relevance'. (optional)
			// count_only: boolean
				// If count_only is set, an abbreviated version of the output will be returned. Only total_items and search_time elements are included in the result. (optional)
			
			
	};
	
	EVDB.API.call("/events/search", oArgs, function(oData) {
		//console.log(JSON.stringify(oData));
		//var events = JSON.parse(oData);
		
		var events = oData.events.event;
		console.log(events[0]);
		
		console.log(events[0].description);
		console.log(events[0].image.medium.url);
		console.log(events[0].title);
		console.log(events[0].start_time);
		console.log(events[0].venue_address);
		console.log(events[0].venue_name);
		console.log(events[0].venue_url);
		
	});
}

$('#date_submit').on('click', function() {
	
	if (typeof(Storage) !== "undefined") {
		// Code for localStorage/sessionStorage.
		
		localStorage.setItem("arrival",   $( "#reservation__check-in"  ).val());
		localStorage.setItem("departure", $( "#reservation__check-out" ).val());
		localStorage.setItem("adults",    $( "#num_adults"             ).text());
		localStorage.setItem("children",  $( "#num_children"           ).text());
		
		/* alert($( "#reservation__check-in"  ).val());
		alert($( "#reservation__check-out" ).val());
		alert($( "#num_adults"             ).text().charAt(0));
		alert($( "#num_children"           ).text().charAt(0)); */
		
	} else {
		// No Web Storage support, use hidden fields to store booking data
		
		$( "#arrival"   ).val($( ".img-responsive.201"    )[0].src);
		$( "#departure" ).val($( ".rooms_desc__title.201" ).text());
		$( "#adults"    ).val($( ".rooms_desc__price.201" ).text());
		$( "#children"  ).val($( ".rooms_desc__desc.201"  ).text());
		
		alert($( "#imageURL" ).val());
		alert($( "#room"     ).val());
		alert($( "#price"    ).val());
		alert($( "#desc"     ).val());
	}	
	
	window.location.href = "reservation.html";
	
});