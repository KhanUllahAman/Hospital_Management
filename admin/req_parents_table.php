<?php
include 'config.php';
?>
<?php
include 'code.php';
?>
<?php
include 'header.php';
?>
<?php
include 'sidebar.php';
?>
<style>
    .modal-btn{
        background: #fa8d18;
        color: #fff;
    }
    .modal_back{
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
      .table_childern_content{
        background: #1f232c;
      }
      .footer{
        background: #1d1e26;
      }
    
</style>


<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0 table_childern_content">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1 text-light">E_Vaccination</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
              <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <?php
        $sql = "SELECT * FROM `booking_details_form`";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            // echo "good";
        } else {
            // echo "error";
        }
        ?>
        <div class="row">

            <div class="col-12">
                <div class="card table_childern_content">
                    <div class="card-header">
                        <h4 class="card-title text-light">Request From Parents</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th class="text-light">ID</th>
                                        <th class="text-light">First Name</th>
                                        <th class="text-light">Class</th>
                                        <th class="text-light">Gender</th>
                                        <th class="text-light">Approved</th>
                                        <th class="text-light">Reject</th>
                                        <th class="d-none"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1;
                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                        <td class="d-none"> <span class="id "><?php echo $row["id"]   ?></span></td>

                                            <td class="text-light"> <?php echo  $i ?></td>

                                            <td class="text-light"><?php echo $row["firstname"] ?></td>
                                            <td class="text-light"><?php echo $row["fathername"] ?></td>
                                            <td class="text-light"><?php echo $row["email"] ?></td>


                                            
                                            <td><button class="btn btn-primary">Approved</button></td>
                                            <td><button class="btn btn-danger">Rejected</button></td>

                                        

                                        
                                            </td>


                                        <?php $i++;
                                    } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
           <div class="copyright text-light">
               <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">E_Vaccination</a> 2022</p>
           </div>
       </div>



       </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
