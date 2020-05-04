<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
		<!-- Google Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
		<!-- Bootstrap core CSS -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
		<style>
			.gallery {
				-webkit-column-count: 3;
				-moz-column-count: 3;
				column-count: 3;
				-webkit-column-width: 33%;
				-moz-column-width: 33%;
				column-width: 33%; }
				.gallery .pics {
				-webkit-transition: all 350ms ease;
				transition: all 350ms ease; }
				.gallery .animation {
				-webkit-transform: scale(1);
				-ms-transform: scale(1);
				transform: scale(1); }

				@media (max-width: 450px) {
				.gallery {
				-webkit-column-count: 1;
				-moz-column-count: 1;
				column-count: 1;
				-webkit-column-width: 100%;
				-moz-column-width: 100%;
				column-width: 100%;
				}
				}

				@media (max-width: 400px) {
				.btn.filter {
				padding-left: 1.1rem;
				padding-right: 1.1rem;
				}
				}
		</style>
	</head>
	<body>
		<!-- Grid row -->
		<div class="row">
			<!-- Grid column -->
			<div class="col-md-12 d-flex justify-content-center mb-5">
				<button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">All</button>
				<button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Mountains</button>
				<button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Sea</button>
			</div>
			<!-- Grid column -->
		</div>
		<!-- Grid row -->
		<!-- Grid row -->
		<div class="gallery" id="gallery">
			<!-- Grid column -->
			<div class="mb-3 pics animation all 2">
				<img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" alt="Card image cap">
			</div>
			<!-- Grid column -->
			<!-- Grid column -->
			<div class="mb-3 pics animation all 1">
				<img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.jpg" alt="Card image cap">
			</div>
			<!-- Grid column -->
			<!-- Grid column -->
			<div class="mb-3 pics animation all 1">
				<img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg" alt="Card image cap">
			</div>
			<!-- Grid column -->
			<!-- Grid column -->
			<div class="mb-3 pics animation all 2">
				<img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg" alt="Card image cap">
			</div>
			<!-- Grid column -->
			<!-- Grid column -->
			<div class="mb-3 pics animation all 2">
				<img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" alt="Card image cap">
			</div>
			<!-- Grid column -->
			<!-- Grid column -->
			<div class="mb-3 pics animation all 1">
				<img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg" alt="Card image cap">
			</div>
			<!-- Grid column -->
		</div>
		<!-- Grid row -->
		<!-- JQuery -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>

		<script>
			$(function() {
				var selectedClass = "";
				$(".filter").click(function(){
				selectedClass = $(this).attr("data-rel");
				$("#gallery").fadeTo(100, 0.1);
				$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
				setTimeout(function() {
				$("."+selectedClass).fadeIn().addClass('animation');
				$("#gallery").fadeTo(300, 1);
				}, 300);
				});
				});
		</script>
	</body>
</html>