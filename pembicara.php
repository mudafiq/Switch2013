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
 
<?php 
 include 'navbar.php';
 ?>

<div class="container">
 
<a id="testimonials"></a>
<div class="row-fluid PageHead">
<div class="span12">
<center><div class="alert alert-success"><h1>Keynote Speaker</h1></div></center>
<h3></h3>
<br/><br/>
</div>
</div>
<div class="row-fluid">
	<div class="span4">
		<div class="thumbnail alert alert-info"> <img src="images/nuh.png" alt="client">
			<div class="caption">
				<center><span class="label label-info"><h5>Muhammad Nuh Al-Azhar</h5></span></center>
				<br/>
				<p>seorang Komisaris Polisi dari Mabes Polri Indonesia dan salah satu perintis pengembangan kemampuan digital forensik di Puslabfor Bareskrim Polri sejak tahun 2000, dan sekarang menjabat sebagai Ketua Digital Forensic Analyst Team (DFAT) Puslabfor sejak Januari 2010 yang bertanggung jawab terhadap pemeriksaan dan analsisi barang bukti elektronik dan digital yang berasal dari kasus computer crime dan/atau computer-related crime</p>
				
			</div>
		</div>
	</div>
	<div class="span4">
		<div class="thumbnail alert alert-info"> <img src="images/desmond.png" alt="client">
			<div class="caption">
				<center><span class="label label-info"><h5>Dr. Desmond Devendran Alexander </h5></span></center>
				<br/>
				<p>Merupakan CEO di FORESEC Academy Malaysia yang lebih dari 8 tahun pengalaman di bidang teknologi informasi, dengan penekanan pada keamanan informasi</p>
				<br/><br/><br/><br/><br/><br/>
			</div>
		</div>
	</div>
	<div class="span4">
		<div class="thumbnail alert alert-info"> <img src="images/raditya.png" alt="client">
			<div class="caption">
				<center><span class="label label-info"><h5>Raditya Iryandi</h5></span></center>
				<br/>
				<p>adalah konsultan keamanan di PT. Bellua Asia Pasifik, dengan beberapa tahun pengalaman dibidang keamanan teknologi informasi. Raditya adalah seorang insinyur keamanan dan konsultan yang khusus dalam bidang keamanan jaringan telekomunikasi. Selain menjadi konsultan keamanan telekomunikasi, ia juga hobi dibidang musik yaitu menjadi seorang DJ (Disc Jokey).</p>
				<br/><br/>
			</div>
		</div>
	</div>
</div>
 
 
<div class="row-fluid">
	<div class="span4">
		<div class="thumbnail alert alert-info"> <img src="images/client1.jpg" alt="client">
			<div class="caption">
				<center><span class="label label-info"><h5>Arif Abdillah </h5></span></center>
				<br/>
				<p>Merupakan seorang mayor di Pusinfolahta TNI. Alumnus AKABRI tahun 1997, ITS tahun 2006, dan UGM tahun 2010 ini sekarang menjabat sebagai Komandan Cyber unit TNI</p>
				<br/><br/><br/><br/><br/><br/><br/>
			</div>
		</div>
	</div>
	<div class="span4">
		<div class="thumbnail alert alert-info"> <img src="images/nofia.jpg" alt="client">
			<div class="caption">
				<center><span class="label label-info"><h5>Nofia Fitri</h5></span></center>
				<br/>
				<p>Nofia FITRI a.k.a Bunga Mataharry, a.k.a whitecoin, a.k.a Casper_SPY, adalah lulusan Ilmu Politik Universitas Nasional, Pendiri Kelompok Studi Mahasiswa Universitas Nasional (KSM UNAS) Jakarta, saat ini tengah menempuh pendidikan Master Hubungan International (EMU/Turki), Aktivis Mahasiswa & Dunia Maya, dan Peneliti Muda untuk Indonesian Democracy (PSIK-Indonesia) yang aktif menulis seputar Filsafat, Ekonomi-Politik & Teknologi Hacking Komputer. </p>
			</div>
		</div>
	</div>
	<div class="span4">
		<div class="thumbnail alert alert-info"> <img src="images/eko.jpg" alt="client">
			<div class="caption">
				<center><span class="label label-info"><h5>Eko Kurniawan Khannedy</h5></span></center>
				<br/>
				<p>Adalah seorang java programmer yang aktif menulis tutorial tentang java, groovy, dan scala. Beliau menjadi CEO di sebuah perusahaan yang didirikannya dengan nama StripBandunk. StripBandunk merupakan perusahaan pendidikan yang menyediakan bimbingan belajar dan pelatihan seputar teknologi dan komputer.</p>
				<br/><br/><br/><br/>
			</div>
		</div>
	</div>
</div>
 
<div class="row-fluid PartnersList"> <img src="images/logo1.jpg" alt="logo"> <img src="images/logo2.jpg" alt="logo"> <img src="images/logo3.jpg" alt="logo"> <img src="images/logo4.jpg" alt="logo"> <img src="images/logo5.jpg" alt="logo"> </div>
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