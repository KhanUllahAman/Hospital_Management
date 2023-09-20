<?php
include 'config.php';
?>
<?php
if (isset($_POST['checking_view_btn'])) {
    $id = $_POST['id'];
    // echo $return - $id;
    $sql = "SELECT * FROM `child detail` WHERE id = $id ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_fetch_assoc($result) > 0) {
        foreach ($result as $row) {
            echo $return = '
         <div class="container">
        <h3 class="h3 card text-center bg-dark">Child Details</h3>
        <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
        <label class="text-light font-weight-bold" type="hidden">
            First Name</label> 
        <div class="">
            <h5>'.$row['firstname'].'</h5>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
        <label class="text-light font-weight-bold">Middle Name</label>
        <div class="class">
            <h5>'.$row['middlename'].'</h5>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <label class="text-light font-weight-bold">Last Name</label>
        <div class="class">
            <h5>'.$row['lastname'].'</h5>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
        <label class="text-light font-weight-bold">Class</label>
        <div class="class">
            <h5>'.$row['class'].'</h5>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
        <label class="text-light font-weight-bold">Date of Birth</label>
        <div class="class">
            <h5>'.$row['birthday'].'</h5>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
        <label class="text-light font-weight-bold">Gender</label>
        <div class="class">
            <h5>'.$row['gender'].'</h5>
        </div>
    </div>



    <h3 class="mt-3 h3 card text-center bg-dark ">Home Address</h3>
    <div class="col-lg-6 mt-4">
        <label class="text-light font-weight-bold">House Number</label>
        <div class="class">
            <h5>'.$row['housenumber'].'</h5>
        </div>
    </div>
    <div class="col-6 mt-4">
        <label class="text-light font-weight-bold">House Name</label>
        <div class="class">
            <h5>'.$row['housename'].'</h5>
        </div>
    </div>
    <div class="col-6 mt-4">
        <label class="text-light font-weight-bold">Street</label>
        <div class="class">
            <h5>'.$row['street'].'</h5>
        </div>
    </div>
    <div class="col-6 mt-4">
        <label class="text-light font-weight-bold">Village (if applicable)</label>
        <div class="class">
            <h5>'.$row['village'].'</h5>
        </div>

    </div>
    <div class="col-6 mt-4">
        <label class="text-light font-weight-bold">Post Town</label>
        <div class="class">
            <h5>'.$row['posttown'].'</h5>
        </div>

    </div>
    <div class="col-6 mt-4">
        <label class="text-light font-weight-bold">Post Code</label>
        <div class="class">
            <h5>'.$row['postcode'].'</h5>
        </div>

    </div>
    <h3 class="mt-4 h3 card text-center bg-dark">Parents/Carers Details</h3>
    <div class="col-6 mt-4">
        <label class="text-light font-weight-bold">Mr/ Mrs/ Miss/ Ms</label>
        <div class="class">
            <h5>'.$row['mr'].'</h5>
        </div>

    </div>
    <div class="col-6 mt-4">
        <label class="text-light font-weight-bold">Initail</label>
        <div class="class">
            <h5>'.$row['initail'].'</h5>
        </div>

    </div>
    <div class="col-6 mt-4">
        <label class="text-light font-weight-bold">SurName</label>
        <div class="class">
            <h5>'.$row['surname'].'</h5>
        </div>

    </div>
    <div class="col-6 mt-4">
        <label class="text-light font-weight-bold">Home Telephone No</label>
        <div class="class">
            <h5>'.$row['hometelephone'].'</h5>
        </div>
    </div>

    <div class="col-6 mt-4">
        <label class="text-light font-weight-bold">Mobile Telephone Number</label>
        <div class="class">
            <h5>'.$row['mobiletelephone'].'</h5>
        </div>

    </div>
    <div class="col-6 mt-4">
        <label class="text-light font-weight-bold">RelationShip to Child </label>
        <div class="class">
            <h5>'.$row['relationtochild'].'</h5>
        </div>

    </div>
    <div class="col-12 mt-4">
        <label class="text-light font-weight-bold">Email Adddress </label>
        <div class="class">
            <h5>'.$row['email'].'</h5>
        </div>

    </div>
        </div>
        </div>


            ';
        }
    } else {
        echo $return = "<h5>No Record Found</h5>";
    }
}

?>