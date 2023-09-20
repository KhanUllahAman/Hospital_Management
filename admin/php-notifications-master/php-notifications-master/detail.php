<?php


include "connect.php";
$get = $_GET["id"];
echo $get;

$query = "SELECT * FROM comments WHERE comment_id = $get";
$qy = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($qy);

echo $res["comment_subject"];
echo $res["comment_text"];


?>




<button ></button>