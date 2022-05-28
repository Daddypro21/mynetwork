<?php 



session_start();

if(!function_exists('set_flash')){

         function set_flash($message,$type="info"){
         	$_SESSION['notification']['message']= $message;
         	$_SESSION['notification']['type'] = $type;
         	
         }
}