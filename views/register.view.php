
<?php 
   $title = "Inscription";
 ?>

<?php include('partials/_header.php'); ?>
<div id="main-content">
    


    <div class="container">
    	
    	<h1 class="lead">Devenez membre des à present </h1>


            <?php include('partials/_errors.php'); ?>


        <form method="post" class="well col-md-6">
            <!-- Name field-->
            <div class="form-group">
                <label class="control-label" for="name">Nom:</label>
                <input type="text" name="name" class="form-control" id="name" required="required">
            </div>

            <!-- Pseudo field-->
            <div class="form-group">
                <label class="control-label" for="pseudo">Pseudo:</label>
                <input type="text" name="pseudo" class="form-control" id="pseudo" required="required">
            </div>

            <!-- Email field-->
            <div class="form-group">
                <label class="control-label" for="email">Adresse Email:</label>
                <input type="email" name="email" class="form-control" id="email" required="required">
            </div>

            <!-- Password field-->
            <div class="form-group">
                <label class="control-label" for="password">Mot de passe:</label>
                <input type="password" name="password" class="form-control" id="password" required="required">
            </div>

             <!-- Password confirmation field-->
          <!-- <div class="form-group">
                <label class="control-label" for="password_Confirm">Confirmer votre Mot de passe:</label>
                <input type="password" name="password_confirm" class="form-control" id="password_confirm" required="required">
            </div> -->
                 <input type="submit" value="Inscription" name="register" class="btn btn-primary">
        </form>
    </div>
</div>
   <?php include('partials/_footer.php'); ?>