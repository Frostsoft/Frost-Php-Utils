<?php
//Show button according to time.
//Copyright © James Vandersluis 2015

Function FrostTimeButton($start, $end){
													//Param #1: Time Button Starts To Show.
													//Param #2: Time Button Will Disapear.

	$now = date('G',time());						//Get Time in Integer Format
	$Image_path = "YOURIMAGE.PNG";					//Set This Property To Your Image
	if($now >= $start && $now <= $end){ 
    	echo "<img src=\"$Image_path\">";
	}
}

?>