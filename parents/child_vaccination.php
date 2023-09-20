 <!-- // session_start ();
// if(!isset($_SESSION["login"]))

// 	header("location: login1.php");  -->

 <?php
    include "config.php";
    if (isset($_POST["submit"])) {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $fathername = $_POST['fathername'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $blood_group = $_POST['blood_group'];
        $vaccination_name = $_POST['vaccination_name'];
        $class = $_POST['class'];
        $phonenumber = $_POST['phonenumber'];



        $insert = "INSERT INTO `booking_details_form`(`firstname`, `lastname`, `fathername`, `email`, `age`, `blood_group`, `vaccination_name`, `class`, `phonenumber`) VALUES ('$firstname','$lastname','$fathername','$email','$age','$blood_group','$vaccination_name','$class','$phonenumber')";
        $result = mysqli_query($mysqli, $insert);
        if ($result) {
            // echo "inserted";
            header("location:child_vaccination.php");
        } else {
            echo "errr";
        }
    }
    ?>
 <?php
    include 'header.php';
    ?>
 <style>
     .table_childern_content {
         background: #1f232c;
     }
     .ku{
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 5vh;
     }
 </style>
 <?php
    include 'sidebar.php';
    ?>
 <div class="content-body">
     <div class="container-fluid">
         <div class="row page-titles mx-0 table_childern_content">
             <div class="col-sm-6 p-md-0">
                 <div class="welcome-text">
                     <h4>Hi, welcome back!</h4>
                     <p class="mb-1 text-light">Book Vaccination</p>
                 </div>
             </div>
             <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                 <ol class="breadcrumb">
                     <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Validation</a></li> -->
                 </ol>
             </div>
         </div>
         <!-- row -->
         <div class="row table_childern_content">
             <div class="col-lg-12">
                 <div class="card table_childern_content">
                     <div class="card-header table_childern_content">
                         <h4 class="card-title text-light">Booking vaccination Form</h4>
                     </div>
                     <div class="card-body table_childern_content">
                         <div class="form-validation">
                             <form class="form-valide" action="#" method="post">
                                 <div class="row">
                                     <div class="col-xl-6">

                                         <div class="form-group row">
                                             <label class="col-lg-4 col-form-label text-light" for="val-firstname">First Name
                                                 <span class="text-warning">*</span>
                                             </label>
                                             <div class="col-lg-6">
                                                 <input type="text" class="form-control"  required name="firstname" placeholder="Enter a First Name.." id="fname">
                                                 <small id="fnamevalid" class="form-text text-muted-danger invalid-feedback">
                                                    Your First Name must be 3-10 characters and should not enter a Number
                                                </small>
                                             </div>
                                         </div>


                                         <div class="form-group row">
                                             <label class="col-lg-4 col-form-label text-light" for="val-lastname">Last Name
                                                 <span class="text-warning">*</span>
                                             </label>
                                             <div class="col-lg-6">
                                                 <input type="text" class="form-control"  required name="lastname" placeholder="Enter a Last Name.." id="lname">
                                                 <small id="lnamevalid" class="form-text text-muted-danger invalid-feedback">
                                                    Your Last Name must be 3-10 characters and should not enter a Number
                                                </small>
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <label class="col-lg-4 col-form-label text-light" for="val-fathername">Fatherrname
                                                 <span class="text-warning">*</span>
                                             </label>
                                             <div class="col-lg-6">
                                                 <input type="text" class="form-control" id="mname" required name="fathername" placeholder="Enter a Father Name..">
                                                 <small id="mnamevalid" class="form-text text-muted-danger invalid-feedback">
                                                    Father Name must be 3-10 characters and should not enter a Number
                                                </small>
                                             </div>
                                         </div>


                                         <div class="form-group row">
                                             <label class="col-lg-4 col-form-label text-light">Email <span class="text-warning">*</span>
                                             </label>
                                             <div class="col-lg-6">
                                                 <input type="email" class="form-control" id="email" reqiured name="email" placeholder="Your valid Email..">
                                                 <small id="email" class="form-text text-muted-danger invalid-feedback">
                                                Enter Your Valid Email
                                            </small>
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <label class="col-lg-4 col-form-label text-light" for="val-lastname">Age
                                                 <span class="text-warning">*</span>
                                             </label>
                                             <div class="col-lg-6">
                                                 <input type="text" class="form-control" required id="c_l" name="age" placeholder="Enter a Age..">
                                                 <small id="email" class="form-text text-muted-danger invalid-feedback">
                                                Enter Your Valid Age
                                            </small>
                                             </div>
                                         </div>

                                     </div>

                                     <div class="col-xl-6">
                                         <div class="form-group row">
                                             <label class="col-lg-4 col-form-label text-light" for="val-bloodgroup">Blood group
                                                 <span class="text-warning">*</span>
                                             </label>
                                             <div class="col-lg-6">
                                                 <select class="form-control" id="val-vaccination" required name="blood_group">
                                                     <option value="">Please select</option>

                                                     <option value="A+">A+</option>
                                                     <option value="A-">A-</option>
                                                     <option value="B-">B-</option>
                                                     <option value="B+">B+</option>
                                                     <option value="O+">O+</option>
                                                     <option value="O-">O-</option>
                                                     <option value="AB+">AB+</option>
                                                     <option value="AB-">AB-</option>

                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <label class="col-lg-4 col-form-label text-light" for="val-vaccination">VaccinationName
                                                 <span class="text-warning">*</span>
                                             </label>
                                             <div class="col-lg-6">
                                                 <select class="form-control" id="val-vaccination" required name="vaccination_name">
                                                     <option value="">Please select</option>
                                                     <option value="Pfizer">Pfizer</option>
                                                     <option value="Moderna">Moderna</option>
                                                     <option value="AstraZeneca">AstraZeneca</option>
                                                     <option value="Sputnik V">Sputnik V</option>
                                                     <option value="Sinopharm">Sinopharm</option>
                                                     <option value="Sinovac">Sinovac</option>

                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                             <label class="col-lg-4 col-form-label text-light">Class
                                                 <span class="text-warning">*</span>
                                             </label>
                                             <div class="col-lg-6">
                                                 <input type="text" class="form-control" id="r_child" required name="class" placeholder="Enter Class">
                                                 <small id="r_child" class="form-text text-muted-danger invalid-feedback">
                                                    Enter Your Valid Class
                                                </small>
                                             </div>
                                         </div>


                                         <div class="form-group row">
                                             <label class="col-lg-4 col-form-label text-light" for="">Phonenumber
                                                 <span class="text-warning">*</span>
                                             </label>
                                             <div class="col-lg-6">
                                                 <input type="text" class="form-control" id="mobiletelephone" required name="phonenumber" placeholder="Enter Phone Number">
                                                 <small id="mobiletelephone" class="form-text text-muted-danger invalid-feedback">
                                                    Enter Your Valid Class
                                                </small>
                                             </div>
                                         </div>




                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-lg-12 ku">
                                         <button type="submit" id="post"  class="btn" style="background: #fa8d18; color: #fff;" name="submit">Submit</button>
                                         <!-- <input type="submit" name="post" id="post" class="btn btn-info" value="Post" /> -->
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

 <?php
    include 'footer.php';
    ?>

    
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
