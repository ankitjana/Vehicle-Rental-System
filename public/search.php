<?php 

require_once("../private/initialize.php");

if(is_post_request()){
	//change default location of from and to - current locations
	$place_from = !empty($_POST['place_from']) ? $_POST['place_from'] : "Montreal";
	$place_to = !empty($_POST['place_to']) ? $_POST['place_to'] : "Montreal";
	$timestamp_from = !empty($_POST['timestamp_from']) ? $_POST['timestamp_from'] : strtotime("now");
	$timestamp_to = !empty($_POST['timestamp_to']) ? $_POST['timestamp_to'] : strtotime("tomorrow");
	
	echo "Form Parameters : </br> From : " . $place_from . "</br>To : " . $place_to . "</br>timestamp_from : " . $timestamp_from . "</br>timestamp_to:" . $timestamp_to; 


}else{
	redirect_to(url_for('index.php'));
}


?>