
   <!--Nav Bar-->
<nav id="navi" class="navbar navbar-inverse navbar-fixed-top ">
	<div class="container-fluid">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span> 
		</button> 
		<a id="logo" class="navbar-brand" href="index.php">The Handy Gringo</a>
	</div>
	<!--Nav Bar Collapse-->
		<div class="collapse navbar-collapse" id="navbar" >
			<ul class="nav navbar-nav" style="font-family:'Pacifico', cursive;">
			<!--Nav Items foreach loop-->
			<?php 
			
				foreach($navItems as $item) {
					echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
				}
				
			?>
	
			</ul>
		</div>
	</div>
</nav>
<!--Nav Bar End-->