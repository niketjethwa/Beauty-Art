// Preload Symbol JS
$(window).on("load",function() {
    $(".preload-symbol").fadeOut("slow");;
});
// Preload Symbol JS End

//Back To Top
$(document).ready(function(){
	$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
});
//Back To Top End