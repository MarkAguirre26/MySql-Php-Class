<?php 
include_once("class.php");


function Select() {
	
    $db = new MySqlClass();
    $result  = $db->getData(" query here");   
    echo json_encode($result); 
}

?>
