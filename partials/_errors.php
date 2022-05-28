
        <?php 
               if(isset($errors) && count($errors) != 0){


               echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
  
             <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button>';

                       foreach ($errors as $error) {
                       echo $error.'<br>';
                   }

              echo'</div>';



               }

               if(!empty($email_activation)){
                   echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
  
             <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button>';

                 echo $email_activation;

             echo'</div>';

               }

        ?>