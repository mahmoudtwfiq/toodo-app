<?php
//CONNECT TO DMS
$conn=mysqli_connect("localhost","root","");
if(!$conn){
    echo "erorr". mysqli_connect($conn);
}
//data base create
$sql="CREATE DATABASE if not exists APP";
//make quary
$res= mysqli_query($conn,$sql);
mysqli_close($conn);
echo "<pre>";
var_dump($conn);
//tables 
$conn=mysqli_connect("localhost","root","","APP");
if(!$conn){
    echo "erorr". mysqli_connect($conn);
}
//create جدول
$sql="CREATE TABLE if not exists tasks(
 `id` int primary key auto_increment,
 `title` varchar(255) not null

    )";
$res= mysqli_query($conn,$sql);

mysqli_close($conn);
echo"<pre>";
var_dump($conn);