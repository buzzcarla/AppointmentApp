<!-- ERROR PAGE -->
<!DOCTYPE html>
<html lang="en">
<!-- head file -->
<?php
	require('head.php');
?>

<body>

	<div class="layer"></div>
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
    <!-- header -->
	<?php
	require('header.php');
	?>
	
	<main>
		<div id="error_page">
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="col-xl-7 col-lg-9">
						<h2>404</h2>
						<p>We're sorry, but the page you were looking for doesn't exist.</p>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- Footer -->
	<?php 
		require('footer.php');
	?>
	<!-- Back to top button -->
	<div id="toTop"></div>

	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>
</body>
</html>