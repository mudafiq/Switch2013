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
<div class="container"> <a id="features"></a>
 

<div class="row-fluid PageHead">
	<div class="span12">
	<h1>Jadwal Acara</h1>
	<h3>Seminar & Workshop</h3>
	</div>
</div>
<div class="row-fluid">
	<div class="span6 features"> <img src="images/setup_icon.png" alt="icon">
	<h4>Seminar</h4>
	<table>
		<tr>
			<td>Jam</td>
			<td>Acara</td>
		</tr>
		<tr>
			<td>08.00-08.30</td>
			<td>Registrasi</td>
		</tr>
		<tr>
			<td>08.30-09.00</td>
			<td>Pembukaan
- Sambutan Rektor Universitas Muhammadiyah Jember
- Sambutan Ketua Program Studi
</td>
		</tr>
	</table>
	</div>
	<div class="span6 features"> <img src="images/backup_icon.png" alt="icon">
	<h4>Workshop</h4>
		<table>
		<tr>
			<td>Jam</td>
			<td>Acara</td>
		</tr>
		<tr>
			<td>08.00-08.30</td>
			<td>Registrasi</td>
		</tr>
		<tr>
			<td>08.30-09.00</td>
			<td>Pembukaan
- Sambutan Rektor Universitas Muhammadiyah Jember
- Sambutan Ketua Program Studi
</td>
		</tr>
	</table>
	</div>
</div>

</div>
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