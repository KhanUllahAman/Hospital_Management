<?php
include 'config.php';
$id=$_GET['updateid'];
$sql="Select * from `employees` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$fathername=$row['fathername'];
$vaccine=$row['vaccine'];
$age=$row['age'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $fathername=$_POST['fathername'];
    $vaccine=$_POST['vaccine'];
    $age=$_POST['age'];

    $sql= "update `employees` set id=$id,name='$name',fathername='$fathername',vaccine='$vaccine',age=$age where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "upadated succesfully";
        header('location:req_parents_table.php');

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
                        <h4 class="card-title">Request From Parents</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="" method="post">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="name" placeholder="Enter your name" required value=<?php echo $name;?>>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Father Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="fathername" placeholder="Enter your name" required value=<?php echo $fathername;?>>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Vaccine Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="vaccine" required value=<?php echo $vaccine;?>>
                                                    <option>Please select</option>
                                                    <option>Pfizer</option>
                                                    <option>Moderna</option>
                                                    <option>AstraZeneca</option>
                                                    <option>Sputnik V</option>
                                                    <option>Sinopharm</option>
                                                    <option>Sinovac</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-currency">Age
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-currency" name="age" placeholder="Enter your age" required value=<?php echo $age;?>>
                                            </div>
                                        </div>

                                        <div class="form-group row" style="align-items: center; display: flex; justify-content: center;">
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