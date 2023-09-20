<?php
include "config.php";
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `employees` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "Deleted Succesfully";
        header('location:req_parents_table.php');
    } else{
        die(mysqli_error($conn));
    }
}




?>