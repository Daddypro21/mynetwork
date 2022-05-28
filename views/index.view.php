<?php
$title = "Acceuil";
?>
<?php include('includes/constaints.php'); ?>
<?php include('partials/_header.php'); ?>
<div id="main-content">



	<div class="container">

		<?php

			//echo $_SERVER["REMOTE_ADDR"];

		?>


		<?php if(date('G') >= 0 && date('G') < 18): ?>
         
        <div class="alert alert-success alert-dismissible fade show" role="alert"><h5 style="text-align: center;">BONJOUR</h5></div>
  
         <?php else:?>
         	<div class="alert alert-warning alert-dismissible fade show" role="alert"><h5 style="text-align: center;">BONSOIR</h5></div>

	   <?php endif;?>
		

		<div class="jumbotron">
			<h1><?= WEBSITE_NAME;  ?></h1>
			<p><?= WEBSITE_NAME;  ?>, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate <br> velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<a href="register.php">Rejoignez la communauté dès maintenant !!</a>
			<br>
			<a href="register.php" class="btn btn-primary btn-lg">Créer un compte</a>
		</div>
	</div>
</div>
<?php include('partials/_footer.php'); ?>