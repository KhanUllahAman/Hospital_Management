<?php
// session_start();
include "config.php";


if(isset($_GET["id"])){
    $del_id = $_GET["id"];
    
    $delete = "DELETE FROM `child detail` WHERE `id` = $del_id";

    $delete_run = mysqli_query($mysqli, $delete);

    if($delete_run){
        // echo "<div class='alert alert-danger'> Data Deleted </div>";
        header("Location:table-childern.php");
    } else {
        // echo "<div class='alert alert-success'> Data Not Deleted </div>";
    }
}

?>



