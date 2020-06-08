<?php

$con = mysqli_connect('localhost','root');
if($con){
echo "Connection Successful";
}else{

echo "no connection";
}

mysqli_select_db($con,'website_sample');
$user = $_POST['user'];
$email = $_POST['email'];
$mobno = $_POST['mobno'];
$comment = $_POST['comment'];

$query = " insert into userinfodata (user,email,mobno,comment)
 values ('$user','$email','$mobno','$comment')";

 echo "$query";
 mysqli_query($con, $query);
 header('location:index.php');




?>