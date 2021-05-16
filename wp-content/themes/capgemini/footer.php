<footer class="text-muted py-5">
	<div class="container">
		<p class="text-center">Todos os direitos reservados!</p>
		
		
	</div>
</footer>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo('template_url') ?>/slick/slick.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.slider').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			arrows:false
		});
	});

	function on() {
		document.getElementById("overlay").style.display = "block";
	}

	function off() {
		document.getElementById("overlay").style.display = "none";
	}
</script>
</body>

</html>