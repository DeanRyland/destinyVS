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

		$('.form-container').css("top", "70%");
		
		$('.profile-characters').show();

		$('#vs-submit .submit-img').hide();

		$('#vs-submit .loader').show();

	});

	// Clicking on each character will show their stats
	$('.profileA .character').click(function(event) {

		$('.form-container').css("top", "60%");

		$(".profileA .character:not(#"+event.currentTarget.id+")").hide();
		$('.profileA-stats').show();

	});

	// Clicking on each character will show their stats
	$('.profileB .character').click(function(event) {

		$('.form-container').css("top", "60%");

		$(".profileB .character:not(#"+event.currentTarget.id+")").hide();
		$('.profileB-stats').show();

	});

	// Clicking on return tab will return to all characters
	$('.profileA .return-tab').click(function(event) {

		$('.form-container').css("top", "70%");

		$(".profileA .character-stats").hide();
		$(".profileA .character").show();
	});

	$('.profileB .return-tab').click(function(event) {

		$('.form-container').css("top", "70%");

		$(".profileB .character-stats").hide();
		$(".profileB .character").show();
	});
})

document.addEventListener('DOMContentLoaded', function () {
  particleground(document.getElementById('particles'), {
    dotColor: '#D3D4D6',
    lineColor: '#D3D4D6'
  });
  var intro = document.getElementById('intro');
  intro.style.marginTop = - intro.offsetHeight / 2 + 'px';
}, false);