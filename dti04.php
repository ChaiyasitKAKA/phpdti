<?php

//array
//index array

$dataa = [10,20,30,40,50];
$datab = array("11", "22", "33");
$datac = array("saurabh", "kumar", "yadav");

echo $dataa[0] .'&nbsp'; //10
echo $datab[1] .'&nbsp;&nbsp'; //22
echo $datac[2] .''; //yadav

//associtive array
$faculty = ["as" => "saurabh", "kumar" => "yadav"];
$subject = array("php" => "web programming", "js" => "frontend programming");   
echo $faculty["as"] . '&nbsp;&nbsp'; //saurabh
echo $faculty["kumar"] . '&nbsp;&nbsp'; //yadav

echo $subject["php"] . '&nbsp;&nbsp'; //web programming
echo $subject["js"] . '&nbsp;&nbsp'; //frontend programming

?>