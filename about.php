<
<?php
$uname=$_POST['uname'];
$service=$_POST['service'];
$comment=$_POST['comment'];

//connection

$con=mysqli_connect("localhost","root","");
if($con)
{
	echo "connection succesfull";
}
else
{
	echo "connection fail",mysqli_connect_eror();
}

//create database
/*

$db="CREATE DATABASE ABOUT";
if(mysqli_query($con,$db))
{
    echo "Dtabase Created";
}
else
{
   echo "Dtabase Creating is fail";
}
*/

//create a table in database

mysqli_select_db($con,"ABOUT");
/*
$TABLE="CREATE TABLE COMMENT(uname varchar(50),how_about_Service varchar(20),comment varchar(180))";
if(mysqli_query($con,$TABLE))
{
    echo "Table is created";
}
else
{
   echo "Table is not created";
}
*/

//inserting values
$insert="INSERT INTO COMMENT VALUES('uname','service','comment')";
if(mysqli_query($con,$insert))
{
    echo "Data inserted successfully";
}
else
{
   echo "Dta inserted fail";
}



?>
