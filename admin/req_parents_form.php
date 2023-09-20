<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $fathername = $_POST['fathername'];
    $vaccine = $_POST['vaccine'];
    $age = $_POST['age'];

    $sql = "INSERT INTO `employees`(`name`, `fathername`, `vaccine`, `age`)VALUES ('$name','$fathername','$vaccine','$age')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "data inserted";
        header('location:req_parents_table.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>

<?php
include 'header.php';

?>
<?php
include 'sidebar.php';
?>
<!--**********************************
            Content body start
        ***********************************-->





        

<!--**********************************
            Content body end
        ***********************************-->



<?php
include 'footer.php';
?>