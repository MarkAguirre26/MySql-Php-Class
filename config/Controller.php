<?php 
include_once("class.php");

if(isset($_REQUEST['insert'])) {
	insert();
} else if (isset($_REQUEST['get'])) {
	get();
} else if (isset($_REQUEST['validate'])) {
	validate();
} 

function insert() {	

	$username =  $_REQUEST['username'];
	$pwd =  $_REQUEST['pwd'];
	
	
	

    $db = new MySqlClass();
  $result  =  $db->executeQuery("call InsertData('$username','$pwd')");
    echo json_encode($result);    
   
}

function get() {

	$username =  $_REQUEST['username'];
	$Category =  $_REQUEST['Category'];
	$db = new MySqlClass();
    $result  = $db->getData("SELECT QuizID, QuizDescrition, Attemp, TotalItems, Score, Grade FROM scoring WHERE scoring.username = '$username' AND scoring.Category = '$Category' ORDER BY cn,Category ASC");   
    echo json_encode($result); 
}

function validate() {	
	$username =  $_REQUEST['username'];
	$QuizID =  $_REQUEST['QuizID'];
    $db = new MySqlClass();
    $result  = $db->getData("SELECT Count(*) as total FROM scoring WHERE scoring.username = '$username' AND QuizID = '$QuizID'");   
    echo json_encode($result); 
}

?>
