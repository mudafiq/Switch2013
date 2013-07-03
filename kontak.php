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
include'navbar.php';
?>
 
<div class="container"> <a id="features"></a>
 
<div class="row-fluid FeatLayout">
<div class="span5 Featimg"><iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Akademi+Pariwisata,+Jember,+East+Java,+Indonesia&amp;aq=0&amp;oq=akademi+pariwisata+je&amp;sll=37.0625,-95.677068&amp;sspn=37.325633,86.572266&amp;ie=UTF8&amp;hq=Akademi+Pariwisata,+Jember,+East+Java,+Indonesia&amp;ll=-8.174694,113.716325&amp;spn=0.006295,0.006295&amp;t=m&amp;output=embed"></iframe></div>
<div class="span7">
<h1>Kontak Kami</h1>
<h3>A left aligned image and content with tick</h3>
<p>As soon as you make a successful payment via PayPal or Google Checkout, your web hosting and domain names will be activated immediately. No waiting time whatsoever. Our network runs the latest stable and secure versions of PHP &amp; MySQL. </p>
<ul class="ticklist">
<li>Dedicated Servers</li>
<li>cPanel Access</li>
<li>MySQL Databases</li>
<li>Super Bandwidth</li>
<li>Web Builder</li>
<li>Web Secutity</li>
</ul>
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