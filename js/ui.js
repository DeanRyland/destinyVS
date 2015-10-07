$(document).ready(function () {

	//Ajax Loading
	var $loading = $('#vs-submit .loader').hide();
	$(document)
	  .ajaxStart(function () {
	    $loading.show();
	  })
	  .ajaxStop(function () {
	    $loading.hide();
	  });
	
	// Clicking on the vs-submit button will show each profiles characters
	$('#vs-submit').on("click", function(event) {

		$('.form-container').css("top", "20%");
		
		$('.profile-characters').show();

		$('#vs-submit .submit-img').hide();

		$('#vs-submit .loader').show();

	});

	// Clicking on each character will show their stats
	$('.profileA .character').click(function(event) {

		$('.form-container').css("top", "10%");

		$(".profileA .character:not(#"+event.currentTarget.id+")").hide();
		$('.profileA-stats').show();

	});

	// Clicking on each character will show their stats
	$('.profileB .character').click(function(event) {

		$('.form-container').css("top", "10%");

		$(".profileB .character:not(#"+event.currentTarget.id+")").hide();
		$('.profileB-stats').show();

	});

	// Clicking on return tab will return to all characters
	$('.profileA .return-tab').click(function(event) {

		$('.form-container').css("top", "20%");

		$(".profileA .character-stats").hide();
		$(".profileA .character").show();
	});

	$('.profileB .return-tab').click(function(event) {

		$('.form-container').css("top", "20%");

		$(".profileB .character-stats").hide();
		$(".profileB .character").show();
	});
})