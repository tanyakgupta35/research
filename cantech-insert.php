<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','Cantech connections');
$link=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
if ($link)	{echo 'Connected to server...<br>';}
$connect=mysqli_select_db($link,DB_NAME);
if ($connect) {echo 'Connected to Database...<br>';}
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$phone_number=$_POST['phone_number'];
$email=$_POST['email'];
$street=$_POST['street'];
$city=$_POST['city'];
$postal_code=$_POST['postal_code'];
$DOB=$_POST['DOB'];
$sex=$_POST['sex'];
$sql="INSERT INTO customer (first_name,last_name,phone_number,email,street,city,postal_code,DOB,sex) VALUES ('$first_name','$last_name','$phone_number','$email','$street','$city','$postal_code','$DOB','$sex')";
if (mysqli_query($link,$sql)) {echo 'Row inserted!<br>';} else {
    echo 'Error: ' . mysqli_error($link);
}
mysqli_close($link);
?>
