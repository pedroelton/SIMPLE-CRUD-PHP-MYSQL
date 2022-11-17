<?php

include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="Delete from `crud` where id=$id";
    $result=mysqli_query($con, $sql);

    if($result){
        header('location:display.php');
    }else{
        die("Connection failed: " . mysqli_connect_error());
    }
}

?>