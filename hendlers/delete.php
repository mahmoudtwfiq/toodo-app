<?php
session_start();
if(isset($_GET['id'])){
    $conn=mysqli_connect("localhost","root","","APP");
if(!$conn){
   $_SESSION['errors']= "erorr". mysqli_connect($conn);
}
$id=$_GET['id'];

$sql="SELECT * FROM `tasks` WHERE `id`='$id' " ;
$res= mysqli_query($conn,$sql);
$row=mysqli_fetch_row($res);
if(!$row){
$_SESSION['errors']  = "data not correctt";

}else{
    
$sql="DELETE FROM `tasks` WHERE `id`='$id' " ;
$res= mysqli_query($conn,$sql);
$_SESSION['success']="good jop ";
}

header("location:../index.php");
exit();
}

