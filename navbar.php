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
									<li><a href="pembicara.php">PEMBICARA</a></li>
									<li><a href="acara.php">ACARA</a></li>';
							}elseif(preg_match("/pembicara.php/", $_SERVER['PHP_SELF'])){
								echo '<li><a href="index.php">HOME</a></li>
									<li class="active"><a href="pembicara.php">PEMBICARA</a></li>
									<li><a href="acara.php">ACARA</a></li>';
							}elseif(preg_match("/acara.php/", $_SERVER['PHP_SELF'])){
								echo '<li><a href="index.php">HOME</a></li>
									<li><a href="pembicara.php">PEMBICARA</a></li>
									<li class="active"><a href="acara.php">ACARA</a></li>';
							}
						?>
						
					</ul>
				</div>
			</div>
		</div>
	</div>