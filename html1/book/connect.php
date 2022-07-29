<?php

$host="localhost";
$username="root";
$password="dkdkdk";
$db="social_site";

$con = mysqli_connect($host,$username,$password,$db);

if(!$con)
{

	die("failed to connect!");
}

$first_name="paul";
$last_name="onyedika";

$query = "insert into testing (firstName,lastName) values ('$first_name','$last_name')";
mysqli_query($con, $query);

echo mysqli_error($query);
?>
