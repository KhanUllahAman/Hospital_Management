<?php

include 'config.php';
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
        $sql = "SELECT * FROM `hospital_list`";
        $result = mysqli_query($mysqli, $sql);
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
                        <h4 class="card-title text-light">Childern Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th class="text-light">ID</th>
                                        <th class="text-light">Hospital Name</th>
                                        <th class="text-light">Area</th>
                                        <th class="text-light">Since</th>
                                        <th class="text-light"></th>
                                        <th class="text-light">Book Hospital</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1;
                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>

                                            <td class="text-light"> <?php echo  $i ?></td>

                                            <td class="text-light"><?php echo $row["hospital"] ?></td>
                                            <td class="text-light"><?php echo $row["area"] ?></td>
                                            <td class="text-light"><?php echo $row["since"] ?></td>


                                            <td>
                                             
                                            </td>

                                            <td>

                                                <button class="btn btn-warning"><a href="child_vaccination.php" class="text-dark"><i class="fa-solid fa-notes-medical"></i></button></a>
                                            </td>
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

<?php
include 'footer.php';
?>