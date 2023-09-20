<?php
include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>preview</title>
    <!-- bootstrap -->
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap -->
    <!-- bootstrap -->

</head>

<body>


    <style>
        body {
            background-color: #153c64;
        }

        .h3 {
            color: #eea55d;
        }
        h5{
            color: #ffcfa0;

        }

        .back_h1 {
            background-color: #eea55d;
            color: #fff;
        }
    </style>

    <!-- php -->
    <?php
    $id = $_GET['id'];
$sql = "Select * from `child detail` where id=$id";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);
$Firstname = $row['firstname'];
$Middlename = $row['middlename'];
$Lastname = $row['lastname'];
$Class = $row['class'];
$Birthday = $row['birthday'];
$Gender = $row['gender'];
$Housenumber = $row['housenumber'];
$Housename = $row['housename'];
$Street = $row['street'];
$Village = $row['village'];
$Posttown = $row['posttown'];
$Postcode = $row['postcode'];
$Mr = $row['mr'];
$Initial = $row['initail'];
$Surname = $row['surname'];
$hometelephone = $row['hometelephone'];
$mobiletelephone = $row['mobiletelephone'];
$relationtochild = $row['relationtochild'];
$Email = $row['email'];

?>


    <!-- php -->

    <!-- form -->


        <div class="container">
            <h3 class="h3 card text-center bg-dark">Child Details</h3>
            <div class="row">
                <?php while ($row = mysqli_fetch_assoc($result))?>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label class="text-light font-weight-bold" type="hidden">
                        First Name</label> 
                    <div class="">
                        <h5><?php echo $Firstname?></h5>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label class="text-light font-weight-bold">Middle Name</label>
                    <div class="class">
                        <h5><?php echo $Middlename?></h5>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label class="text-light font-weight-bold">Last Name</label>
                    <div class="class">
                        <h5><?php echo $Lastname?></h5>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                    <label class="text-light font-weight-bold">Class</label>
                    <div class="class">
                        <h5><?php echo $Class?></h5>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                    <label class="text-light font-weight-bold">Date of Birth</label>
                    <div class="class">
                        <h5><?php echo $Birthday?></h5>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                    <label class="text-light font-weight-bold">Gender</label>
                    <div class="class">
                        <h5><?php echo $Gender?></h5>
                    </div>
                </div>



                <h3 class="mt-3 h3 card text-center bg-dark ">Home Address</h3>
                <div class="col-lg-6 mt-4">
                    <label class="text-light font-weight-bold">House Number</label>
                    <div class="class">
                        <h5><?php echo $Housenumber?></h5>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <label class="text-light font-weight-bold">House Name</label>
                    <div class="class">
                        <h5><?php echo $Housename?></h5>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <label class="text-light font-weight-bold">Street</label>
                    <div class="class">
                        <h5><?php echo $Street?></h5>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <label class="text-light font-weight-bold">Village (if applicable)</label>
                    <div class="class">
                        <h5><?php echo $Village?></h5>
                    </div>

                </div>
                <div class="col-6 mt-4">
                    <label class="text-light font-weight-bold">Post Town</label>
                    <div class="class">
                        <h5><?php echo $Posttown?></h5>
                    </div>

                </div>
                <div class="col-6 mt-4">
                    <label class="text-light font-weight-bold">Post Code</label>
                    <div class="class">
                        <h5><?php echo $Postcode?></h5>
                    </div>

                </div>
                <h3 class="mt-4 h3 card text-center bg-dark">Parents/Carers Details</h3>
                <div class="col-6 mt-4">
                    <label class="text-light font-weight-bold">Mr/ Mrs/ Miss/ Ms</label>
                    <div class="class">
                        <h5><?php echo $Mr?></h5>
                    </div>

                </div>
                <div class="col-6 mt-4">
                    <label class="text-light font-weight-bold">Initail</label>
                    <div class="class">
                        <h5><?php echo $Initial?></h5>
                    </div>

                </div>
                <div class="col-6 mt-4">
                    <label class="text-light font-weight-bold">SurName</label>
                    <div class="class">
                        <h5><?php echo $Surname?></h5>
                    </div>

                </div>
                <div class="col-6 mt-4">
                    <label class="text-light font-weight-bold">Home Telephone No</label>
                    <div class="class">
                        <h5><?php echo $hometelephone?></h5>
                    </div>
                </div>

                <div class="col-6 mt-4">
                    <label class="text-light font-weight-bold">Mobile Telephone Number</label>
                    <div class="class">
                        <h5><?php echo $mobiletelephone?></h5>
                    </div>

                </div>
                <div class="col-6 mt-4">
                    <label class="text-light font-weight-bold">RelationShip to Child </label>
                    <div class="class">
                        <h5><?php echo $relationtochild?></h5>
                    </div>

                </div>
                <div class="col-12 mt-4">
                    <label class="text-light font-weight-bold">Email Adddress </label>
                    <div class="class">
                        <h5><?php echo $Email?></h5>
                    </div>

                </div>
            </div>

        </div>


    <!-- form -->

</body>

</html>

<!-- javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- javascript -->