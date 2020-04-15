<?php
if(!empty($_GET['page'])) {
    $load_file = $_GET['page'];
} else {
    $load_file = 'home';
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Aplaudo</title>
		<link rel="icon" href="img/favicon/favicon.ico">
		<!-- Bootstrap -->

		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
	
		
		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
		
		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- nouislider  <link rel="stylesheet" href="css/compact-gallery.css">-->
		<!-- nouislider  <link rel="stylesheet" href="css/photogallery.css"> -->
		<!-- nouislider  <link rel="stylesheet" href="css/photogallery.min.css"> -->
		<link href="dist/photogallery.css" rel="stylesheet">
		
		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

    </head>

	<body id="page-<?php echo $load_file; ?>">
 	<div class="super_container">
        <?php include("pages/header.php"); ?>
        <?php include("pages/" . $load_file . ".php"); ?>
        <?php include("pages/footer.php"); ?>
    </div>	
<!-- modal -->
    	<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
			<!--Content-->
			<div class="modal-content">
				<div class="modal-body mb-0 p-0">
				<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
					<!-- Put a blank video for have a black screen meanwhile new video appears -->
					<iframe class="embed-responsive-item" id="modalIframe" src="https://www.youtube.com/embed/XIMLoLxmTDw"
					allowfullscreen></iframe>
				</div>
				</div>
			</div>
			
			</div>
		</div>
		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="dist/photogallery.js"></script>

		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
	
		<!-- nouislider > <script src="js/photogallery.js"></script> -->
<script> 
	  $(document).ready(function(){
        $('ul.first').bsPhotoGallery({
          "classes" : "col-xl-3 col-lg-2 col-md-4 col-sm-4",
          "hasModal" : true,
          "shortText" : false  
        });
      });
</script>
	</body>
</html>
