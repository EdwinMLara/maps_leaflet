<footer class="footer_area">
	
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
	/*
	$(window).on('load', function() { // makes sure the whole site is loaded 
		$('#status').fadeOut(); // will first fade out the loading animation 
		$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
		$('body').delay(350).css({'overflow':'visible'});
	});
    */  
	/*Scroll to top when arrow up clicked BEGIN*/
	$(window).scroll(function() {
		var height = $(window).scrollTop();
		if (height > 100) {
			$('#back-to-top').fadeIn();
		} else {
			$('#back-to-top').fadeOut();
		}
	});

	$(document).ready(function() {
		$("#back-to-top").click(function(event) {
			event.preventDefault();
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
		});
	});	
	/*Scroll to top when arrow up clicked END*/
</script>
