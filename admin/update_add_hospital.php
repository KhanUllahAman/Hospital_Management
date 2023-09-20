<?php
include 'config.php';
$id=$_GET['updateid'];
$sql="Select * from `hospital_list` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$hospital=$row['hospital'];
$area=$row['area'];
$since=$row['since'];

if(isset($_POST['submit'])){
    $hospital=$_POST['hospital'];
    $area=$_POST['area'];
    $since=$_POST['since'];

    $sql= "UPDATE `hospital_list` SET `id`='$id',`hospital`='$hospital',`area`='$area',`since`='$since' WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "upadated succesfully";
        header('location:add_hospital_table.php');

    } else{
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
        <div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
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
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Hospital</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="" method="post">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Hospital Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="hospital" required placeholder="Enter your Hospital Name" value=<?php echo $hospital;?>>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Area<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="area" required placeholder="Enter your area" value=<?php echo $area;?>>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Since<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="since" required placeholder="Enter your since"  value=<?php echo $since;?>>
                                            </div>
                                        </div>

                                        <div class="form-group row" style="align-items: center; display:    flex; justify-content: center;">
                                            <div>
                                                <button type="submit" class="btn btn-warning" name="submit">Update</button>
                                            </div>
                                        </div>


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