<?php
session_start();
$conn=mysqli_connect("localhost","root","","APP");
if(!$conn){
    echo "erorr". mysqli_connect($conn);
}
if($_SERVER['REQUEST_METHOD']  == "POST" && isset($_POST['title'])){
    $title=htmlspecialchars(htmlentities($_POST['title']));
   // echo $title;
   $sql = "INSERT INTO `tasks`(`title`) VALUES('$title')";
      
   $res=mysqli_query($conn,$sql);
 if (mysqli_affected_rows($conn)==1){

 $_SESSION['success']="data insert success";

}
header("location:../index.php");
}