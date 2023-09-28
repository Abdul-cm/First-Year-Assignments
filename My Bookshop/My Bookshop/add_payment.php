<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
include 'config.php';

  $x_card_code=$_POST['x_card_code'];
  $year=$_POST['year'];
  $month=$_POST['month'];
  $card_no=$_POST['card_no'];
  
  


  //Add MST_MAIN_PERSON
 $sql_insert_main="INSERT INTO `payment`(`pay_card_no`,`pay_month`,`pay_year`,`pay_cvv`)
    VALUES ('$card_no','$month','$year','$x_card_code')";
   $mainregister=$conn->query($sql_insert_main);
session_start();
$_SESSION["credit_no"] = $card_no;
  if($mainregister==1)
   {
echo json_encode(12);
  
 }  
?> 

