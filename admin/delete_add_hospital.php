<?php
include "config.php";
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `hospital_list` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "Deleted Succesfully";
        header('location:add_hospital_table.php');
    } else{
        die(mysqli_error($conn));
    }
}




?>