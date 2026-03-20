<?php
//echo "Hello";
//$name="Akansha";
//echo $name;
echo $name=$_REQUEST['name'];
echo $email=$_REQUEST['email'];
echo $password=$_REQUEST['pass'];
echo $gender=$_REQUEST['gen'];
echo $number=$_REQUEST['num'];
//echo $date=$date_REQUEST['date'];
$connect=mysqli_connect("localhost","root","","sh");

echo $sql="insert into shi(name,email,pass,gen,num) values ('$name','$email','$password','$gender','$number')";
mysqli_query($connect,$sql);
?> 