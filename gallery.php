<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<!--====== Required meta tags ======-->
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	
	      <meta http-equiv=x-ua-compatible content="ie=edge">
	  <meta name=description content="Agastyaarkoodam trek is a life changing experience, the air and water both has medicinal properties which heals mind and the body.">
      <meta name=keywords content="agasthyarkoodam,kerala,trivandrum,agasthyarkoodamdiaries,nature,agasthyakoodam,travel,india,godsowncountry,keralaforest,ponmudi,climbing,agastyamuni,mountain,naturephotography,bonacaud,
	  kanitribe,keralatourism,top,year,keralagram,photography,trekking,keralaforestdepartment,of,wildlife,agastyahills,peakyblindersshiva,mahadev,mahakal,harharmahadev,bholenath,shiv,india,hindu,lordshiva,hinduism,love,
	  kedarnath,om,omnamahshivaya,bhole,bholebaba,ujjain,god,krishna,mahakaal,,wayanad,wildlifephotography,agastyamaharshi,thiruvananthapuram,agastyarkoodam,mallu,agasthyamala,agastyarkudam,tamilnadu,goprohero,forest
	  ,mtr,trivandrumdiaries,highestpeak,unescoworldheritage,travelphotography,keralavibes,moodygrams,idukki,re,ksrtc,trivandrumvibes,tripislife,instagood,technopark,rer,vishnugnath,sky,mahakaleshwar,shivshakti,hanuman,
	  shivshankar,mahadeva,aghori,har,temple,jaimahakal,kerala,india,keralagram,love,photography,malayalam,instagram,kochi,instagood,malayali,keralagodsowncountry,keralatourism,godsowncountry,mallugram,likeforlikes,
	  malappuram,kozhikode,mumbai,nature,gainwithmchina,chennai,mollywood,likes,keralam,kannur,entekeralam,photooftheday,yoga,ganesha,ke,ram,shambhu,meditation,omnamahshivay,bhakti,adiyogi,spirituality,
	  shivbhakt,lord,hindutemple,vishnu,somnath,instagood,amarnath,shivay,photography,spiritual,shankar">
	  
	<!--====== Title ======-->
	<title>Agastyaarkoodam - Gallery</title>
	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="img/png" />
	<!--====== Animate Css ======-->
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<!--====== Bootstrap css ======-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<!--====== Fontawesome css ======-->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
	<!--====== Flaticon css ======-->
	<link rel="stylesheet" href="assets/css/flaticon.css" />
	<!--====== Slick Css ======-->
	<link rel="stylesheet" href="assets/css/slick.min.css" />
	<!--====== Lity Css ======-->
	<link rel="stylesheet" href="assets/css/lity.min.css" />
	<!--====== Main css ======-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--====== Responsive css ======-->
	<link rel="stylesheet" href="assets/css/responsive.css" />
	<!--====== Gallery css ======-->
    <link href="assets/css/gallery.css" rel="stylesheet">
</head>
<!--====== PHP Header Code  ======-->
<?php include 'header.php';?>
<header class="site-header sticky-header" style="height: 140px;"> </header>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!--====== Preloader ======-->
	<div id="preloader">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_four"></div>
			</div>
		</div>
	</div>
 <!--====== Counter With Image Text Block Start ======-->
	<div class="container">
	<br><br>
	<section class="latest-blog-section ">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-12">
				<div class="description-content">
				<div class="common-heading text-center mb-20">
				<span class="tagline">
					Agastyaarkoodam
					<span class="heading-shadow-text">Gallery</span>
				</span>
				<h1 class="title">Agastyaarkoodam</h1>
				</div>
				</div>
				</div>
			</div>
		<div class="gallery"><?php
		// (B) GET LIST OF IMAGE FILES FROM GALLERY FOLDER
		$dir = __DIR__ . DIRECTORY_SEPARATOR . "assets/gallery/album" . DIRECTORY_SEPARATOR;
		$images = glob("$dir*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);

		// (C) OUTPUT IMAGES
		foreach ($images as $i) {
		  printf("<img src='assets/gallery/album/%s'/>", basename($i));
		}
    ?></div>
	</section>
	<!--====== Image Area End ======-->
</div>
	<br>
<?php include 'footer.php';?>
	<!--====== jquery js ======-->
	<script src="assets/js/jquery.min.js"></script>
	<!--====== Bootstrap js ======-->
	<script src="assets/js/bootstrap.min.js"></script>
	<!--====== Inview js ======-->
	<script src="assets/js/jquery.inview.min.js"></script>
	<!--====== Slick js ======-->
	<script src="assets/js/slick.min.js"></script>
	<!--====== Lity js ======-->
	<script src="assets/js/lity.min.js"></script>
	<!--====== Wow js ======-->
	<script src="assets/js/wow.min.js"></script>
	<!--====== Main js ======-->
	<script src="assets/js/main.js"></script>
	<!--====== gallery js ======-->
	<script src="assets/js/gallery.js"></script>
</body>
</html>