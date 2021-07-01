<?php

$con=mysqli_connect('localhost','root');

if($con){
   echo "connection successful";
}else{
 echo "no connection";
}

mysqli_select_db($con, 'kalp');

$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Feedback=$_POST['Feedback'];

$query = " insert into kalp (Name,Email,Feedback)
values ('$Name','$Email', '$Feedback') ";

echo "$query";

mysqli_query($con, $query);

?>
