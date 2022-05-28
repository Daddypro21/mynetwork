

<?php if(isset($_SESSION['notification']['message'])): ?>
     <div class="container">

     <div class="alert alert-<?=$_SESSION['notification']['type'];?> alert-dismissible fade show" role="alert">
  
             <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button>
              
              <h4><?= $_SESSION['notification']['message'];?></h4>
         </div>

         </div>

         <?php $_SESSION['notification'] = [];?>

	<?php endif;?>