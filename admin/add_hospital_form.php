
<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $hospital = $_POST['hospital'];
    $details = $_POST['details'];
    $area = $_POST['area'];
    $since = $_POST['since'];

    $sql = "INSERT INTO `hospital_list`(`hospital`, `details`, `area`, `since`)VALUES ('$hospital','$details','$area','$since')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "data inserted";
        header('location:add_hospital_table.php');
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
<style>
      .table_childern_content{
        background: #1f232c;
      }
      .hospital_btn{
        background: #ff8f16;
        color: #fff;
        /* display: flex;
        align-items: center;
        justify-content: center; */
        margin-left: 86vh; 
      }
      
</style>





<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0 table_childern_content">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome!</h4>

                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Validation</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row table_childern_content">
            <div class="col-lg-12">
                <div class="card table_childern_content">
                    <div class="card-header table_childern_content">
                        <h4 class="card-title text-light">Add Hospital</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="" method="post">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label text-light" for="val-username">Hospital Name
                                                <span class="text-warning">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="hospital" placeholder="Enter your Hospital Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label text-light" for="val-email">Area<span class="text-warning">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="area" placeholder="Enter your area" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label text-light" for="val-email">Since<span class="text-warning">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="since" placeholder="Enter your since" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label text-light" for="val-email">Details<span class="text-warning">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea type="text" class="form-control" id="val-email" name="details" placeholder="Enter your Details" required></textarea>
                                            </div>
                                        </div>
                                        

                                    </div>
                                    
                                </div>
                                <div class="form-group row" style="align-items: center;">
                                            <div>
                                                <button type="submit" class="btn hospital_btn mt-3" name="submit">Submit</button>
                                            </div>
                                        </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<!--**********************************
            Content body end
        ***********************************-->



 <?php
include 'footer.php';
?>