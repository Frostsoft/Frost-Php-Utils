<?php
//Show button according to time.
//Copyright © James Vandersluis 2015
//Description: Echo desired code within a certain time parameter.

Function FrostTimeButton($start, $end, $timed_code){
													//Param #1: Time Button Starts To Show.
													//Param #2: Time Button Will Disapear.
	$now = date('G',time());						//Get Time in Integer Format
	if($now >= $start && $now <= $end){ 
    	echo "$timed_code";
	}
}

Function FrostTimeButton($s1, $e1, $s2, $e2, $timed_code){
													//Second method for multi-time support
	$now = date('G',time());						//Get Time in Integer Format
	if($now >= $s1 && $now <= $e1){ 
    	echo "$timed_code";
	}else if($now >= $s2 && $now <= $e2){
		echo "$timed_code";
	}
}

//Example usage:
//include ("FrostButton.php");
//<?php FrostTimeButton(12, 13, "<p>Hello world</p>") ? >

?>
