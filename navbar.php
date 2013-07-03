<div class="navbar navbar-fixed-top navbar-absolute">
		<div class="navbar-inner">
			<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
			<a class="brand" href="index.html"> <img src="images/switch.png" width="174" height="52" alt="logo"></a>
				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
						<?php
							if($_SERVER['PHP_SELF']=='/Switch2013/trunk/index.php'){
								echo '<li class="active"><a href="index.php">HOME</a></li>
									<li><a href="pembicara.php">PEMBICARA</a></li>
									<li><a href="acara.php">ACARA</a></li>';
							}elseif($_SERVER['PHP_SELF']=='/Switch2013/trunk/pembicara.php'){
								echo '<li><a href="index.php">HOME</a></li>
									<li class="active"><a href="pembicara.php">PEMBICARA</a></li>
									<li><a href="acara.php">ACARA</a></li>';
							}elseif($_SERVER['PHP_SELF']=='/Switch2013/trunk/acara.php'){
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