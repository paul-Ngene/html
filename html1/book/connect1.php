<?php

$host="localhost";
$username="root";
$password="";
$db="social_site";

$con = mysqli_connect($host,$username,$password,$db);

if(!$con)
{

	die("failed to connect!");
}
$id=1;
$uid=1;
$first_name="paul";
$last_name="onyedika";
$gender="male";
$email="me@g.com";
$password"1234";
$url="me.com";

$query = "insert into testing (id,user_id,firstName,lastName,gender,email,password,url_address) values ('$id','$uid','$first_name','$last_name','$gender','$email','$password','$url')";
mysqli_query($con, $query);

echo "mysqli_error($query)";
?>
