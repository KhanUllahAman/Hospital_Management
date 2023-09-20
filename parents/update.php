<?php
include 'config.php';
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
$Id = $row['id'];


if (isset($_POST['update'])) {
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $class = $_POST['class'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $housenumber = $_POST['housenumber'];
    $housename = $_POST['housename'];
    $street = $_POST['street'];
    $village = $_POST['village'];
    $posttown = $_POST['posttown'];
    $postcode = $_POST['postcode'];
    $mr = $_POST['mr'];
    $initial = $_POST['initail'];
    $surname = $_POST['surname'];
    $hometelephone = $_POST['hometelephone'];
    $mobiletelephone = $_POST['mobiletelephone'];
    $relationtochild = $_POST['relationtochild'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    $sql = "UPDATE `child detail` SET `firstname`='$firstname',`middlename`='$middlename',`lastname`='$lastname',`class`='$class',`birthday`='$date',`gender`='$gender',`housenumber`='$housenumber',`housename`='$housename',`street`='$street',`village`='$village',`posttown`='$posttown',`postcode`='$postcode',`mr`='$mr',`initail`='$initial',`surname`='$surname',`hometelephone`='$hometelephone',`mobiletelephone`='$mobiletelephone',`relationtochild`='$relationtochild',`email`='$email' WHERE id=$id";
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        echo "upadated succesfully";

        header('location:table-childern.php');
    } else {
        echo "not updated";
    }
}
?>



<?php
include 'header.php';
?>
<style>
    .card-title1 {
        color: #ff8f16;
        display: flex;
        align-items: center;
        justify-content: center;
        /* font-size: 100px; */
        font-family: sans-serif;
        font-style: italic;
    }
</style>
<?php
include 'sidebar.php';
?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0" style="background-color: #1f232c;">
            <div class="card-header" style="background-color: #1f232c;">
                <h4 class="card-title">Child Details</h4>
            </div>
            <div class="card-body" style="background-color: #1f232c;">
                <form method="POST" id="step-form-horizontal" class="step-form-horizontal" enctype="multipart/form-data">
                    <div>
                        <h1 class="card-title1">Personal Info</h1>
                        <!-- <section> -->
                        <div class="row">

                            <div class="form-group">
                                <!-- <label class="text-label">First Name*</label> -->
                                <input type="hidden" class="form-control" name="id" value="<?php echo $Id ?>">
                            </div>

                            <div class="col-lg-4 mb-4">

                                <div class="form-group">
                                    <label class="text-label text-light">First Name*</label>
                                    <input type="text" class="form-control" placeholder="Enter Your First Name" name="firstname"  id="fname" value="<?php echo $Firstname ?>">
                                    <small id="fnamevalid" class="form-text text-muted-danger invalid-feedback">
                                                    Your First Name must be 3-10 characters and should not enter a Number
                                                </small>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">

                                <div class="form-group">
                                    <label class="text-label text-light">Middle Name*</label>
                                    <input type="text" class="form-control" placeholder="Enter Your First Name" name="middlename" value="<?php echo $Middlename ?>" id="mname">
                                    <small id="fnamevalid" class="form-text text-muted-danger invalid-feedback">
                                                    Your Middle Name must be 3-10 characters and should not enter a Number
                                                </small>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">

                                <div class="form-group">
                                    <label class="text-label text-light">Last Name*</label>
                                    <input type="text" class="form-control" placeholder="Enter Your First Name" name="lastname" value="<?php echo $Lastname ?>" id="lname">
                                    <small id="fnamevalid" class="form-text text-muted-danger invalid-feedback">
                                                    Your last Name must be 3-10 characters and should not enter a Number
                                                </small>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="form-group">
                                    <label class="text-label text-light">class*</label>
                                    <input type="text" class="form-control" placeholder=" enter your class" name="class" value="<?php echo $Class ?>" id="c_l">
                                    <small id="c_lvalid" class="form-text text-muted-danger invalid-feedback">
                                                    Enter Your Valid Class
                                                </small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="example">
                                    <p class="mb-1 text-light">BirthDay</p>
                                    <input class="form-control input-daterange-datepicker" type="date" name="date" value="<?php echo $Birthday ?>">
                                </div>
                            </div>
                            <div class="col-4">
                                <label class="text-light">Gender</label>

                                <select class="form-control" placeholder="Enter Your gender" name="gender" required value="<?php echo $Gender ?>">

                                    <option>male</option>
                                    <option>female</option>
                                    <option>custom</option>
                                </select>
                            </div>
                        </div>
                        <!-- </section> -->
                        <h1 class="card-title1">House Info</h1>
                        <!-- <section> -->
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="form-group">
                                    <label class="text-label text-light">House Number*</label>
                                    <input type="text" class="form-control" placeholder="Enter Your House Number" name="housenumber" value="<?php echo $Housenumber ?>" id="housenumber">
                                    <small id="housenumbervalid" class="form-text text-muted-danger invalid-feedback">
                                                    Enter Your Valid House Number
                                                </small>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="form-group">
                                    <label class="text-label text-light">Enter Your House Name*</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter Your House Name" name="housename" value="<?php echo $Housename ?>" id="housename">
                                        <small id="housenamevalid" class="form-text text-muted-danger invalid-feedback">
                                                      Enter a Valid House Name
                                                    </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="form-group">
                                    <label class="text-label text-light">Street*</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter Your Street" name="street" value="<?php echo $Street ?>" id="street">
                                        <small id="streetvalid" class="form-text text-muted-danger invalid-feedback">
                                                        Enter Your Valid Street
                                                    </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="form-group">
                                    <label class="text-label text-light">Village*</label>
                                    <input type="text" class="form-control" name="village" placeholder="Enter your Village" value="<?php echo $Village ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="form-group">
                                    <label class="text-label text-light">Post Town*</label>
                                    <input type="text" class="form-control" name="posttown" placeholder="Enter your PostTown" value="<?php echo $Posttown ?>"  id="posttown">
                                    <small id="posttownvalid" class="form-text text-muted-danger invalid-feedback">
                                                Enter Your Valid Post_Town and should not enter a Number.
                                            </small>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                    <label class="text-label text-light">Post Code*</label>
                                    <input type="text" class="form-control" name="postcode" placeholder="Enter your PostCode" value="<?php echo $Postcode ?>" id="postcode">
                                    <small id="postcodevalid" class="form-text text-muted-danger invalid-feedback">
                                                Enter Your Valid Post_Code and should not enter a Alphabets.
                                            </small>
                                </div>
                            </div>
                        </div>
                        <!-- </section> -->
                         <section>
                        <h1 class="card-title1">Parents/Carers Details</h1>
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="form-group">
                                    <label class="text-label text-light">Mr/Mrs/Miss/Ms*</label>
                                    <input type="text" name="mr" class="form-control" placeholder="" value="<?php echo $Mr ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="form-group">
                                    <label class="text-label text-light">Initail*</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="emial1" placeholder="Enter Your House Initail" name="initail" value="<?php echo $Initial ?>">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="form-group">
                                    <label class="text-label text-light">SurName*</label>
                                    <div class="input-group">
                                        <input type="text" name="surname" class="form-control" placeholder="Enter Your SurName" value="<?php echo $Surname ?>" id="surname">
                                        <small id="surnamevalid" class="form-text text-muted-danger invalid-feedback">
                                                Enter Your Valid Surname and should not enter a Number.
                                            </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="form-group">
                                    <label class="text-label text-light">Home Telephone*</label>
                                    <input type="text" name="hometelephone" class="form-control" placeholder="Enter your HomeTelephone" value="<?php echo $hometelephone ?>" id="hometelephone">
                                    <small id="hometelephonevalid" class="form-text text-muted-danger invalid-feedback">
                                                Enter Your Valid Home_telephone and should not enter a Alphabets.
                                            </small>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="form-group">
                                    <label class="text-label text-light">Mobile Telephone*</label>
                                    <input type="text" name="mobiletelephone" class="form-control" placeholder="Enter your PostTown" value="<?php echo $mobiletelephone ?>" id="mobiletelephone">
                                    <small id="mobiletelephonevalid" class="form-text text-muted-danger invalid-feedback">
                                                Enter Your Valid Mobile_telephone and should not enter a Alphabets.
                                            </small>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                    <label class="text-label text-light">RelationShip To Child*</label>
                                    <input type="text" name="relationtochild" class="form-control" placeholder="Enter your RelationShip to Child" value="<?php echo $relationtochild ?>" id="r_child">
                                    <small id="relationtochild" class="form-text text-muted-danger invalid-feedback">
                                                Enter Your Valid Relation and should not enter a Numbers
                                            </small>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label text-light">Email*</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter email" value="<?php echo $Email ?>" id="email">
                                    <small id="email" class="form-text text-muted-danger invalid-feedback">
                                                Enter Your Valid Email
                                            </small>
                                </div>
                            </div>
                        </div>
                        <!-- </section> -->
                        <!-- <h4>update Form</h4> -->
                        <!-- <section> -->
                        <div class="text-center mt-5">
                            <input class="btn text-light font-weight-bold ku" style="background-color: #fa8d18" ; type="submit" value="update" name="update" style="margin-left: 70vh;">
                        </div>

                        <!-- </section> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?php include "footer.php" ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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