<div class="navbar navbar-fixed-top navbar-absolute">
		<div class="navbar-inner">
			<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
			<a class="brand" href="index.html"> <img src="images/switch.png" width="174" height="52" alt="logo"></a>
				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
						<?php
							
							if(preg_match("/index.php/", $_SERVER['PHP_SELF'])){
								echo '<li class="active"><a href="index.php">HOME</a></li>
									<li><a href="speaker.php">SPEAKER</a></li>
									<li><a href="seminar.php">SEMINAR</a></li>
									<li><a href="workshop.php">WORKSHOP</a></li>
									<li><a href="maps-venue.php">MAPS & VENUE</a></li>
									<li><a href="contact.php">CONTACT</a></li>';
							}elseif(preg_match("/speaker.php/", $_SERVER['PHP_SELF'])){
								echo '<li><a href="index.php">HOME</a></li>
									<li class="active"><a href="speaker.php">SPEAKER</a></li>
									<li><a href="seminar.php">SEMINAR</a></li>
									<li><a href="workshop.php">WORKSHOP</a></li>
									<li><a href="maps-venue.php">MAPS & VENUE</a></li>
									<li><a href="contact.php">CONTACT</a></li>';
							}elseif(preg_match("/seminar.php/", $_SERVER['PHP_SELF'])){
								echo '<li><a href="index.php">HOME</a></li>
									<li><a href="speaker.php">SPEAKER</a></li>
									<li class="active"><a href="seminar.php">SEMINAR</a></li>
									<li><a href="workshop.php">WORKSHOP</a></li>
									<li><a href="maps-venue.php">MAPS & VENUE</a></li>
									<li><a href="contact.php">CONTACT</a></li>';
							}elseif(preg_match("/workshop.php/", $_SERVER['PHP_SELF'])){
								echo '<li><a href="index.php">HOME</a></li>
									<li><a href="speaker.php">SPEAKER</a></li>
									<li><a href="seminar.php">SEMINAR</a></li>
									<li class="active"><a href="workshop.php">WORKSHOP</a></li>
									<li><a href="maps-venue.php">MAPS & VENUE</a></li>
									<li><a href="contact.php">CONTACT</a></li>';
							}elseif(preg_match("/maps-venue.php/", $_SERVER['PHP_SELF'])){
								echo '<li><a href="index.php">HOME</a></li>
									<li><a href="speaker.php">SPEAKER</a></li>
									<li><a href="seminar.php">SEMINAR</a></li>
									<li><a href="workshop.php">WORKSHOP</a></li>
									<li class="active"><a href="maps-venue.php">MAPS & VENUE</a></li>
									<li><a href="contact.php">CONTACT</a></li>';
							}elseif(preg_match("/contact.php/", $_SERVER['PHP_SELF'])){
								echo '<li><a href="index.php">HOME</a></li>
									<li><a href="speaker.php">SPEAKER</a></li>
									<li><a href="seminar.php">SEMINAR</a></li>
									<li><a href="workshop.php">WORKSHOP</a></li>
									<li><a href="maps-venue.php">MAPS & VENUE</a></li>
									<li class="active"><a href="contact.php">CONTACT</a></li>';
							}
						?>
						
					</ul>
				</div>
			</div>
		</div>
	</div>