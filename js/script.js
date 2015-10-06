$(document).ready(function () {
	
	$('#vs-submit').on("click", function(event) {

		$('.profile-characters').show();

	});

	$('.profileA .character').click(function(event) {
		$(".profileA .character:not(#"+event.target.id+")").hide();

		$('.profileA-stats').show();

	});

	$('.profileB .character').click(function(event) {
		$(".profileB .character:not(#"+event.target.id+")").hide();

	});
})