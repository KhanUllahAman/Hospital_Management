<?php
include "config.php";

if (isset($_POST["submit"])) {

    $childrenname = $_POST["childrenname"];
    $vaccinationname = $_POST["vaccinationname"];
    $vaccinationtime = $_POST["vaccinationtime"];
    $vaccinationday = $_POST["vaccinationday"];
    $v_detail = $_POST["v_detail"];
    $v_available_unavailable = $_POST["v_available_unavailable"];

    $insert = " INSERT INTO `hospitaldetail`(`childrenname`, `vaccinationname`, `vaccinationtime`, `vaccinationday`, `v_detail`, `v_available_unavailable`) VALUES ('$childrenname','$vaccinationname','$vaccinationtime','$vaccinationday','$v_detail','$v_available_unavailable')";
    $result = mysqli_query($mysqli, $insert);
    if ($result) {
        echo "";
        // header("location:index.php");
    } else {
        echo "errr";
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
    .ku {
        margin-left: 70vh;
    }
</style>

<div class="content-body" style="background-color: #1d1e26;">
    <div class="container-fluid">
        <div class="row page-titles mx-0" style="background-color: #1f232c;">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                </div>
            </div>

        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card" style="background-color: #1f232c;">
                    <div class="card-header">
                        <h4 class="card-title text-light">Hospital Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="index.php" method="POST" id="step-form-horizontal" class="step-form-horizontal" enctype="multipart/form-data">
                            <div>
                                <h4 class="text-light">Personal Info</h4>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label text-light">Hospital Name*</label>
                                                <input type="text" class="form-control" placeholder="Enter Your  children name" required name="childrenname">
                                            </div>
                                        </div>





                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-light">vaccination Name*</label>
                                                <select class="form-control" placeholder="Enter Your vaccination name" required name="vaccinationname">
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
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="text-light">Vaccination Days</label>
                                                <select class="form-control" placeholder="Enter Your vaccination day" required name="vaccinationday">
                                                    <option>Please select</option>
                                                    <option>Monday</option>
                                                    <option>Tuesday</option>
                                                    <option>Wednesday</option>
                                                    <option>Thrusday</option>
                                                    <option>Friday</option>
                                                    <option>Saturday</option>
                                                    <option>Sunday</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="text-light">Vaccination Time</label>
                                                <select class="form-control" placeholder="Enter Your vaccination time" required name="vaccinationtime">
                                                    <option>Please select</option>
                                                    <option>08:00 Am</option>
                                                    <option>09:00 Am</option>
                                                    <option>10:00 Am</option>
                                                    <option>11:00 Am</option>
                                                    <option>12:00 Pm</option>
                                                    <option>02:00 pm</option>
                                                    <option>03:00 pm</option>
                                                    <option>04:00 Pm</option>
                                                    <option>05:00 Pm</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        

                                        
                                        <div class="col-lg-12 mb-4 mt-5">
                                            <div class="form-group">
                                                <label class="text-label text-light">Detail About Vaccination*</label>
                                                <div class="input-group">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" required rows="3" name="v_detail"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                            <div class="form-group">
                                                <label class="text-light">Available/Unavailable</label>
                                                <select class="form-control" placeholder="Enter Your vaccination day" required name="v_available_unavailable">
                                                    <option>Please select</option>
                                                    <option>Availabe</option>
                                                    <option>Unavailable</option>
                                                    </select>
                                            </div>
                                        </div>  

                                    
                                </section>
                                <section>
                                    <div class="text-center mt-5" style="align-items: center;">
                                        <input class="btn text-light font-weight-bold" style="background-color: #fa8d18" ; type="submit" value="submit" name="submit">
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
<!--**********************************
            Content body end
        ***********************************
        <?php
        include 'footer.php';
        ?> 