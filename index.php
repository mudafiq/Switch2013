<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SWITCH 2013 - Seminar and Workshop Information Technology | TI UMJember</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
 
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
 
<link href="css/hosting.css" rel="stylesheet" media="all">
 
<link rel="stylesheet" href="css/flexslider.css"/>
<script src="js/jquery-1.9.0.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
  $(window).load(function() {
     $('.flexslider').flexslider({
        animation: "slide"
      });
  });
</script>
 
</head>
<body>
<a id="home"></a>
 
<div class="jumbotron masthead">
 <!-- this is navigation bar -->
	<?php 
	include 'navbar.php';
	?>
	<!-- this is slideshow -->
	<div class="container">
		<div class="flexslider">
			<ul class="slides">
				<li>
					<div class="hero-unit">
						<h1>Affordable Hosting Solution</h1>
						<h3>Flathost is a bootstrap based responsive minimal, flat and afforable hosting template with easy customization and great support</h3>
						<p class="hidden-phone"> <a href="#" class="btn btn-success btn-large">Explore Features </a> <a href="#" class="btn btn-primary btn-large">Plans and Pricing </a> </p>
					</div>
				</li>
				<li>
					<div class="slide2">
						<p><img src="images/server1.png" alt="server"></p>
						<h1>Dedicated and VIP Hosting</h1>
					</div>
				</li>
				<li>
					<div class="slide3">
						<p class="pull-left"><img src="images/server2.png" alt="server"></p>
						<h1>Managed Hosting</h1>
						<h3>Flathost is a bootstrap based responsive minimal, flat and afforable hosting template with easy customization and great support</h3>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
 
<div class="container"> <a id="features"></a>
<!-- this content -->
	<div class="row-fluid mainFeatures">
		<div class="span4">
			<div class="thumbnail"> <img src="images/secure_img.png" width="85" height="88" alt="secure">
				<div class="caption">
					<h3 align="center">Tema</h3>
					<h4 align="center">Tema dari Seminar dan Worksop Kali ini adalah "Indonesia Youth Cyber Army"</h4>
				</div>
			</div>
		</div>
		<div class="span4">
			<div class="thumbnail"> <img src="images/fast_img.png" width="85" height="88" alt="secure">
				<div class="caption">
					<h3 align="center">Jadwal</h3>
					<h4 align="center">28-29 Agustus 2013 </h4>
					<h4 align="center">Aula Gedung Ahmad Zainuri</h4>
					<h4 align="center">Universitas Muhammadiyah Jember</h4>
				</div>
			</div>
		</div>
		<div class="span4">
			<div class="thumbnail"> <img src="images/support_img.png" width="85" height="88" alt="secure">
				<div class="caption">
					<h3 align="center">Bonus</h3>
					<h4 align="center">Seminar Kit, Snack, Coffe Break, Lunch, Sertifikat</h4>
				</div>
			</div>
		</div>
	</div>

	<!--div class="row-fluid PartnersList"> <img src="images/logo1.jpg" alt="logo"> <img src="images/logo2.jpg" alt="logo"> <img src="images/logo3.jpg" alt="logo"> <img src="images/logo4.jpg" alt="logo"> <img src="images/logo5.jpg" alt="logo"> </div-->
</div>
 
<?php 
include 'footer.php';
?>

  
<script src="js/jquery.easing.1.2.js"></script>
 
<script src="js/modernizr.js"></script>
 
<script src="js/bootstrap.js"></script>
 
<script>
            $(function() {
                $('.nav li a').bind('click',function(event){
                    var $anchor2 = $(this).parent();
				    var $anchor = $(this);
					$('.nav  li').removeClass('active');
                    $anchor2.addClass('active');
					
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top - 50
                    }, 1500,'easeInOutExpo');
                    /*
                    if you don't want to use the easing effects:
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1000);
                    */
                    event.preventDefault();
                });
            });
        </script>
 
<script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&"www.cloudflare.com/email-protection"==a.substr(7 ,35)){s='';j=43;r=parseInt(a.substr(j,2),16);for(j+=2;a.length-j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
/* ]]> */
</script>
</body>
</html>