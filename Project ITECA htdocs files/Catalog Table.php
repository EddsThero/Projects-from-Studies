<?php
 $conn = mysqli_connect('localhost','root','Thunderdrake21','dbmoonwalk');
 if(!$conn){
	 echo 'Could not find DB:'.mysqli_connect_error();
 }
 
 $importshoes = 'Select ProductID, ProductName, ProductCost FROM Catalog';
 
 $shoescomplete = mysqli_query($conn, $importshoes);
 $GetShoes = mysqli_fetch_all($shoescomplete, MYSQLI_ASSOC);
 
 mysqli_close($conn);
 print_r($GetShoes);
?>

