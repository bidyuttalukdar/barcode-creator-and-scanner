<?php
$connect =mysqli_connect("localhost","root","","mydb");

$barcode = isset($_POST['barcode']) ? $_POST['barcode'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$color = isset($_POST['color']) ? $_POST['color'] : '';
$weight = isset($_POST['weight']) ? $_POST['weight'] : '';
$size = isset($_POST['size']) ? $_POST['size'] : '';

#$barcode=$_POST["barcode"];
#$name=$_POST["name"];
#$price=$_POST["price"];
mysqli_query($connect,"INSERT INTO appdata(barcode,name,price,address,color,weight,size) VALUES('$barcode','$name','$price','$address','$color','$weight','$size') ");

?>