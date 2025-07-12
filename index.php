<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Movers & Packers  :: Home Page</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- load-more -->
<script>
	$(document).ready(function () {
		size_li = $("#myList li").size();
		x=1;
		$('#myList li:lt('+x+')').show();
		$('#loadMore').click(function () {
			x= (x+1 <= size_li) ? x+1 : size_li;
			$('#myList li:lt('+x+')').show();
		});
		$('#showLess').click(function () {
			x=(x-1<0) ? 1 : x-1;
			$('#myList li').not(':lt('+x+')').hide();
		});
	});
</script>
<!-- //load-more -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->
<?php include_once('includes/header.php');?>
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="w3ls_banner_info">
				<h2>Movers & Packers</h2>
				<p>Packers and Movers is an online platform for service seekers and service providers where   
                     all the companies are available at single site as web portal and they do communicate 
                     directly with service seekers. Our packers and movers directory is having ultimate objective   of   
                     providing information to its visitors about best packersmovers and relocation companies 
                     offering its services in Indian destinations. The reliable and swift packers and movers services providers 
                     are the best for any kind of relocation and car transportation services.</p>
				<div class="wthree_more">
					<a href="services.php" class="button--wayra button--border-thick button--text-upper button--size-s">Services</a>
				</div>
			</div>
		</div>
	</div>
<!-- //banner -->





</body>
</html>