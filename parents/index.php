<?php

// include "function.php";
include "config.php";
include 'header.php';

// include "../function.php";

// if (!isLoggedIn()) {
//     $_SESSION['msg'] = "You must log in first";
//     header('location: ../parents_login.php');
// }
// $target_dir = "upload/";
// $target_files = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFiletype = strtolower(pathinfo($target_files,PATHINFO_EXTENSION));
// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])){
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if($check !== false){
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image";
//         $uploadOk =0;
//     }
// }

if (isset($_POST["submit"])) {

    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $class = $_POST['class'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $housenumber = $_POST['housenumber'];
    $housename = $_POST['housename'];
    $street = $_POST['street'];
    $village = $_POST['village'];
    $posttown = $_POST['posttown'];
    $postcode = $_POST['postcode'];
    $mr = $_POST['mr'];
    $initial = $_POST['initail'];
    $surname = $_POST['surname'];
    $hometelephone = $_POST['hometelephonenumber'];
    $mobiletelephone = $_POST['mobiletelephonenumber'];
    $relationtochild = $_POST['relationtochild'];
    $email = $_POST['email'];
    $parent_id = $_POST['ParentId'];
    


    //   $firstname = $_POST["firstname"];
    //   $middlename = $_POST["middlename"];
    //   $lastname = $_POST["lastname"];
    //   $date = $_POST['date'];

    //   $gender = $_POST["gender"];
    //   $image = $_FILES["fileToUpload"]["name"];
    //   $housenumber = $_POST["housenumber"];
    //   $housename = $_POST["housename"];
    //   $street = $_POST["street"];
    //   $village = $_POST["village"];
    //   $posttown = $_POST["posttown"];
    //   $postcode = $_POST["postcode"];
    //   $mr = $_POST["mr"];
    //   $initail = $_POST["initail"];
    //   $hometelephonenumber = $_POST["hometelephonenumber"];
    //   $mobiletelephonenumber = $_POST["mobiletelephonenumber"];
    //   $relationshipchild = $_POST["relationshipchild"];
    //   $surname = $_POST["surname"];
    //   $email = $_POST["email"];


    //   $insert = "INSERT INTO `child detail`( `firstname`,`middlename`, `lastname`,`date`, `gender`, `image`, `housenumber`, `housename`, `street`, `village`, `posttown`, `postcode`, `mr`, `initail`, `hometelephonenumber`,`mobiletelephonenumber`,`relationshipchild`,`surname`, `email`) VALUES ('$firstname','$middlename','$lastname','$date','$gender','$image','$housenumber','$housename','$street','$village','$posttown','$postcode','$mr','$initail',
    //      '$hometelephonenumber','$mobiletelephonenumber','$relationshipchild','$surname','$email')";
    $insert = "INSERT INTO `child detail`(`firstname`, `middlename`, `lastname`, `class`, `birthday`, `gender`, `housenumber`, `housename`, `street`, `village`, `posttown`, `postcode`, `mr`, `initail`, `surname`, `hometelephone`, `mobiletelephone`, `relationtochild`, `email`, `parent_id`) VALUES ('$firstname','$middlename','$lastname','$class','$date','$gender','$housenumber','$housename','$street','$village','$posttown','$postcode','$mr','$initial','$surname','$hometelephone','$mobiletelephone','$relationtochild','$email', $parent_id )";
    $result = mysqli_query($mysqli, $insert);
    if ($result) {
      $_SESSION['status'] = "Register  Successfully";
      $_SESSION['status_code'] = "success";
    header("Location:table-childern.php");

    } else {
        $_SESSION['status'] = "Data Not Register";
      $_SESSION['status_code'] = "error";
    }
}
?>


<style>
    .ku ::placeholder {
        color: #1f232c;
        font-size: 17px;
    }

    .index_con {
        background: #1f232c;
    }

    .footer {
        background: #1d1e26;
    }

    .card-title {
        color: #fa8d18;
    }

    .card-title1 {
        color: #ff8f16;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 40px;
        font-family: sans-serif;
        font-style: italic;
    }
</style>



<?php
include 'sidebar.php';
?>

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0 index_con">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4 class="">Hi, welcome back!</h4>
                    <p class="mb-0 text-light"> ------------------ </p>
                   
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Components</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card index_con">
                    <div class="card-header">
                        <h4 class="card-title">Child Details</h4>
                    </div>
                    <div class="card-body" style="background-color: #1f232c;">
                        <form action="index.php" method="POST" id="step-form-horizontal" class="step-form-horizontal" enctype="multipart/form-data">
                            <div class="">
                                <h4 class="card-title1">Personal Info</h4>
                                <section style="background-color: #1f232c;">
                                    <div class="row mt-4">

                                        <div class="col-lg-4 mb-4">
                                            <div class="form-group ku">
                                                <label class="text-label text-light">First Name*</label>
                                                <input type="text" class="form-control" placeholder="Enter Your First Name" required name="firstname" id="fname">
                                                <small id="fnamevalid" class="form-text text-muted-danger invalid-feedback">
                                                    Your First Name must be 3-10 characters and should not enter a Number
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <div class="form-group ku">
                                                <label class="text-label text-light">Middle Name*</label>
                                                <input type="text" class="form-control" placeholder="Enter Your Middle Name" required name="middlename" id="mname">
                                                <small id="mnamevalid" class="form-text text-muted-danger invalid-feedback">
                                                    Your Middle Name must be 3-10 characters and should not enter a Number
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <div class="form-group ku">
                                                <label class="text-label text-light">Last Name*</label>
                                                <input type="text" class="form-control" placeholder="Enter Your Last Name" required name="lastname" id="lname">
                                                <small id="lnamevalid" class="form-text text-muted-danger invalid-feedback">
                                                    Your Last Name must be 3-10 characters and should not enter a Number
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <div class="form-group ku">
                                                <label class="text-label text-light">Class*</label>
                                                <input type="text" class="form-control" placeholder=" Enter Your Class" required name="class" id="c_l">
                                                <small id="c_lvalid" class="form-text text-muted-danger invalid-feedback">
                                                    Enter Your Valid Class
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="example ku">
                                                <p class="mb-1 text-light">BirthDay</p>
                                                <input class="form-control input-daterange-datepicker" type="date" name="date" value="date" id="birthday">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="text-light ku">Gender</label>

                                            <select class="form-control bg bg-light" placeholder="Enter Your gender" required name="gender" id="gender">
                                                <option class="bg bg-dark">choose</option>
                                                <option class="bg bg-dark text-light">male</option>
                                                <option class="bg bg-dark text-light">female</option>
                                                <option class="bg bg-dark text-light">custom</option>

                                            </select>
                                        </div>

                                    </div>
                                    <!-- </section> -->
                                    <h4 class="card-title1">House Info</h4>
                                    <!-- <section style="background-color: #1f232c;"> -->
                                    <div class="row mt-5">
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group ku">
                                                <label class="text-label text-light">House Number*</label>
                                                <input type="text" class="form-control" placeholder="Enter Your House Number" required name="housenumber" id="housenumber">
                                                <small id="housenumbervalid" class="form-text text-muted-danger invalid-feedback">
                                                    Enter Your Valid House Number
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group ku">
                                                <label class="text-label text-light">Enter Your House Name*</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="housename" placeholder="Enter Your House Name" required name="housename" id="housename">
                                                    <small id="housenamevalid" class="form-text text-muted-danger invalid-feedback">
                                                      Enter a Valid House Name
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group ku">
                                                <label class="text-label text-light">Street*</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Enter Your Street" required name="street" id="street">
                                                    <small id="streetvalid" class="form-text text-muted-danger invalid-feedback">
                                                        Enter Your Valid Street
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group ku">
                                                <label class="text-label text-light">Village*</label>
                                                <input type="text" class="form-control" required name="village" placeholder="Enter your Village" id="village">
                                            </div>
                                          
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group ku">
                                                <label class="text-label text-light">Post Town*</label>
                                                <input type="text" class="form-control" required name="posttown" placeholder="Enter your PostTown" id="posttown">
                                                <small id="posttownvalid" class="form-text text-muted-danger invalid-feedback">
                                                Enter Your Valid Post_Town and should not enter a Number.
                                            </small>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group ku">
                                                <label class="text-label text-light">Post Code*</label>
                                                <input type="text" class="form-control" required name="postcode" placeholder="Enter your PostCode" id="postcode">
                                                <small id="postcodevalid" class="form-text text-muted-danger invalid-feedback">
                                                Enter Your Valid Post_Code and should not enter a Alphabets.
                                            </small>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- </section> -->
                                    <h4 class="card-title1">Parents/Carers Details</h4>
                                    <!-- <section style="background-color: #1f232c;"> -->
                                    <div class="row mt-5">
                                       <div class="col-lg-6">
                                            <label class="text-light ku">Mrs/Miss/Ms/Mr*</label>

                                            <select class="form-control bg bg-light" placeholder="Enter Your gender" required name="mr" id="mr">
                                                <option class="bg bg-dark">choose</option>
                                                <option class="bg bg-dark text-light">Mrs</option>
                                                <option class="bg bg-dark text-light">Miss</option>
                                                <option class="bg bg-dark text-light">Ms</option>
                                                <option class="bg bg-dark text-light">Mr</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group ku">
                                                <label class="text-label text-light">Initial*</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Enter Your House Initail" required="" name="initail">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group ku">
                                                <label class="text-label text-light">SurName*</label>
                                                <div class="input-group">
                                                    <input type="text" name="surname" class="form-control" placeholder="Enter Your SurName" required="" id="surname">
                                                    <small id="surnamevalid" class="form-text text-muted-danger invalid-feedback">
                                                Enter Your Valid Surname and should not enter a Number.
                                            </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group ku">
                                                <label class="text-label text-light">Home Telephone*</label>
                                                <input type="text" name="hometelephonenumber" class="form-control" required="" placeholder="Enter your HomeTelephone" id="hometelephone">
                                                <small id="hometelephonevalid" class="form-text text-muted-danger invalid-feedback">
                                                Enter Your Valid Home_telephone and should not enter a Alphabets.
                                            </small>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group ku">
                                                <label class="text-label text-light">Mobile Telephone*</label>
                                                <input type="text" name="mobiletelephonenumber" class="form-control" required="" placeholder="Enter your PostTown" id="mobiletelephone">
                                                <small id="mobiletelephonevalid" class="form-text text-muted-danger invalid-feedback">
                                                Enter Your Valid Mobile_telephone and should not enter a Alphabets.
                                            </small>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group ku">
                                                <label class="text-label text-light">RelationShip To Child*</label>
                                                <input type="text" name="relationtochild" class="form-control" required="" placeholder="Enter your RelationShip to Child" id="r_child">
                                                <small id="relationtochild" class="form-text text-muted-danger invalid-feedback">
                                                Enter Your Valid Relation and should not enter a Numbers
                                            </small>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group ku">
                                                <label class="text-label text-light">Email*</label>
                                                <input type="email" name="email" class="form-control" required="" placeholder="Enter Your Email" id="email">
                                                <small id="email" class="form-text text-muted-danger invalid-feedback">
                                                Enter Your Valid Email
                                            </small>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group ku"> 
                                                <input type="hidden" name="ParentId" class="form-control" required="" placeholder="Enter Your Email" id="ParentId" value="<?php echo $_SESSION["user"] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section style="background-color: #1f232c;">
                                    <div class="row emial-setup">


                                    </div>
                                    <div class="text-center mt-5">
                                        <input class="btn text-light font-weight-bold" style="background-color: #ff8f16" ; type="submit" value="submit" name="submit">
                                    </div>

                                </section>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="footer">
    <div class="copyright text-light">
        <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2020</p>
    </div>
</div>



</div>

</body>

</html>
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/dlabnav-init.js"></script>
<script src="vendor/jquery-steps/build/jquery.steps.min.js"></script>
<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
<!-- Form validate init -->
<script src="js/plugins-init/jquery.validate-init.js"></script>
<!-- Datatable -->
<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="js/plugins-init/datatables.init.js"></script>

<!-- Chart Morris plugin files -->
<script src="vendor/raphael/raphael.min.js"></script>
<script src="vendor/morris/morris.min.js"></script>
<!-- Form step init -->
<script src="js/plugins-init/jquery-steps-init.js"></script>

<!-- Chart piety plugin files -->
<script src="vendor/peity/jquery.peity.min.js"></script>

<!-- Demo scripts -->
<script src="js/dashboard/dashboard-2.js"></script>

<!-- Svganimation scripts -->
<script src="vendor/svganimation/vivus.min.js"></script>
<script src="vendor/svganimation/svg.animation.js"></script>
<script src="js/styleSwitcher.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
    ?>
<script>
swal({
  title: "<?php echo $_SESSION['status']?>",
  text: "You clicked the button!",
  icon: "<?php echo $_SESSION['status_code']?>",
  button: "Done",
});
</script>
<?php
unset($_SESSION['status']);
}
?>

<script>
    // console.log("aman");
    const fname = document.getElementById('fname');
    const mname = document.getElementById('mname');
    const lname = document.getElementById('lname');
    const c_l = document.getElementById('c_l');
    // const birthday = document.getElementById('birthday');
    // const gender = document.getElementById('gender');
    const housenumber = document.getElementById('housenumber');
    const housename = document.getElementById('housename');
    const street = document.getElementById('street');
    // const village = document.getElementById('village');
    const posttown = document.getElementById('posttown');
    const postcode = document.getElementById('postcode');
    // const mr = document.getElementById('mr');
    const initail = document.getElementById('initail');
    const surname = document.getElementById('surname');
    const hometelephone = document.getElementById('hometelephone');
    const mobiletelephone = document.getElementById('mobiletelephone');
    const r_child = document.getElementById('r_child');
    const email = document.getElementById('email');
    // let validfname = false;
    // let validmname = false;
    // let validlname = false;
    // console.log(fname, mname, lname ,classs, birthday, gender, housenumber, housename, street, village, posttown, postcode, mr, initail, surname, hometelephone, mobiletelephone, r_child, email)
    // fname validate
    fname.addEventListener('blur', () => {
        // console.log("name is blur")
        let regex = /^[a-zA-Z]([a-zA-Z]){2,10}$/;
        let str = fname.value;
        console.log(regex, str)
        if (regex.test(str)) {
            console.log('it matched')
            fname.classList.remove('is-invalid');
            //   validfname = true;
        } else {
            console.log('no match');
            fname.classList.add('is-invalid');
        }
    })

    // mname validate
    mname.addEventListener('blur', () => {
        // console.log("name is blur")
        let regex = /^[a-zA-Z]([a-zA-Z]){2,10}$/;
        let str = mname.value;
        console.log(regex, str)
        if (regex.test(str)) {
            console.log('it mname matched')
            mname.classList.remove('is-invalid');
            //   validmname = true;
        } else {
            console.log('mname is not match');
            mname.classList.add('is-invalid');
        }
    })

    // lname validate
    lname.addEventListener('blur', () => {
        // console.log("name is blur")
        let regex = /^[a-zA-Z]([a-zA-Z]){2,10}$/;
        let str = lname.value;
        console.log(regex, str)
        if (regex.test(str)) {
            console.log('it matched')
            lname.classList.remove('is-invalid');
            //   validlname = true
        } else {
            console.log('no match');
            lname.classList.add('is-invalid');
        }
    })
    // classs validate
    c_l.addEventListener('blur', () => {
        // console.log("name is blur")
        let regex = /^([1-12])/;
        let str = c_l.value;
        console.log(regex, str)
        if (regex.test(str)) {
            console.log('it matched')
            c_l.classList.remove('is-invalid');
            //   validfname = true;
        } else {
            console.log('no match');
            c_l.classList.add('is-invalid');
        }
    })

    // housenumber validate
    housenumber.addEventListener('blur', () => {
        // console.log("name is blur")
        let regex = /^([1-500])\//;
        let str = housenumber.value;
        console.log(regex, str)
        if (regex.test(str)) {
            console.log('it matched')
            housenumber.classList.remove('is-invalid');
            //   validfname = true;
        } else {
            console.log('no match');
            housenumber.classList.add('is-invalid');
        }
    })
    // housename validate
    housename.addEventListener('blur', () => {
        // console.log("name is blur")
        let regex = /^[a-zA-Z]([a-zA-Z])/;
        let str = housename.value;
        console.log(regex, str)
        if (regex.test(str)) {
            console.log('it matched')
            housename.classList.remove('is-invalid');
            //   validfname = true;
        } else {
            console.log('no match');
            housename.classList.add('is-invalid');
        }
    })

    // street
    street.addEventListener('blur', () => {
        // console.log("name is blur")
        let regex = /^[a-zA-Z]([a-zA-Z])/;
        let str = street.value;
        console.log(regex, str)
        if (regex.test(str)) {
            console.log('it matched')
            street.classList.remove('is-invalid');
            //   validfname = true;
        } else {
            console.log('no match');
            street.classList.add('is-invalid');
        }
    })
    //   // village
    //   village.addEventListener('blur', () => {
    //     // console.log("name is blur")
    //     let regex = /^[a-zA-Z]([a-zA-Z])/;
    //     let str = village.value;
    //     console.log(regex, str)
    //     if (regex.test(str)) {
    //         console.log('it matched')
    //         village.classList.remove('is-invalid');
    //         //   validfname = true;
    //     } else {
    //         console.log('no match');
    //         village.classList.add('is-invalid');
    //     }
    // })
    posttown.addEventListener('blur', () => {
        // console.log("name is blur")
        let regex = /^[a-zA-Z]([a-zA-Z])/;
        let str = posttown.value;
        console.log(regex, str)
        if (regex.test(str)) {
            console.log('it matched')
            posttown.classList.remove('is-invalid');
            //   validfname = true;
        } else {
            console.log('no match');
            posttown.classList.add('is-invalid');
        }
    })

    postcode.addEventListener('blur', () => {
        // console.log("name is blur")
        let regex = /^[1-500\-]/;
        let str = postcode.value;
        console.log(regex, str)
        if (regex.test(str)) {
            console.log('it matched')
            postcode.classList.remove('is-invalid');
            //   validfname = true;
        } else {
            console.log('no match');
            postcode.classList.add('is-invalid');
        }
    })
    surname.addEventListener('blur', () => {
        // console.log("name is blur")
        let regex = /^[a-zA-z]/;
        let str = surname.value;
        console.log(regex, str)
        if (regex.test(str)) {
            console.log('it matched')
            surname.classList.remove('is-invalid');
            //   validfname = true;
        } else {
            console.log('no match');
            surname.classList.add('is-invalid');
        }
    })
    hometelephone.addEventListener('blur', () => {
        // console.log("name is blur")
        let regex = /^[1-50]/;
        let str = hometelephone.value;
        console.log(regex, str)
        if (regex.test(str)) {
            console.log('it matched')
            hometelephone.classList.remove('is-invalid');
            //   validfname = true;
        } else {
            console.log('no match');
            hometelephone.classList.add('is-invalid');
        }
    })

    mobiletelephone.addEventListener('blur', () => {
        // console.log("name is blur")
        let regex = /^[1-50]/;
        let str = mobiletelephone.value;
        console.log(regex, str)
        if (regex.test(str)) {
            console.log('it matched')
            mobiletelephone.classList.remove('is-invalid');
            //   validfname = true;
        } else {
            console.log('no match');
            mobiletelephone.classList.add('is-invalid');
        }
    })
    
    r_child.addEventListener('blur', () => {
        // console.log("name is blur")
        let regex = /^[a-zA-Z]/;
        let str = r_child.value;
        console.log(regex, str)
        if (regex.test(str)) {
            console.log('it matched')
            r_child.classList.remove('is-invalid');
            //   validfname = true;
        } else {
            console.log('no match');
            r_child.classList.add('is-invalid');
        }
    })

    email.addEventListener('blur', () => {
        // console.log("name is blur")
        let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
        let str = email.value;
        console.log(regex, str)
        if (regex.test(str)) {
            console.log('it matched')
            email.classList.remove('is-invalid');
            //   validfname = true;
        } else {
            console.log('no match');
            email.classList.add('is-invalid');
        }
    })
</script>