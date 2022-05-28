<?php 


if(!function_exists('not_empty'))
{
	function not_empty($fields=[])
	{
		if(count($fields) != 0){
			foreach ($fields as $field) {
				if(empty($field) || trim($field) == false)
				{
					return false;
				}
			}
			return true;
		}
	}
}

if(!function_exists('is_already_in_use'))
{
	function is_already_in_use($field,$value,$table)
	{
		global $db;

		$q = $db->prepare("SELECT id FROM $table WHERE $field = ?");
		$q->execute([$value]);

		$count = $q->rowCount();

		$q->closeCursor();

		return $count;
	}
}


if(!function_exists('set_flash')){

         function set_flash($message,$type="info"){
         	$_SESSION['notification']['message']= $message;
         	$_SESSION['notification']['type'] = $type;
         	
         }
}


if(!function_exists('redirect')){

	function redirect($page){
		header('Location:'.$page);
		exit();
	}
}




