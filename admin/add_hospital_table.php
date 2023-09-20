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
      .hospital_btn{
        background: #ff8f16;
        color: #fff;
        margin-left: 135vh; 
      }
      
</style>

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0 table_childern_content">
            <div class="col-lg-12">
                <div class="card table_childern_content">
                    <div class="card-header">
                        <h4 class="card-title text-light">Add Hospital</h4>
                    </div>
                  <a href="add_hospital_form.php"><button class="btn btn-warning">Add Hospital</button></a>
                   <!-- <a href="add_hospital_form.php"> <button class="btn hospital_btn">Add Hospital</button> </a> -->
                    <div class="card-body table_childern_content">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th class="text-light" scope="">ID</th>
                                        <th  class="text-light"  scope="">Hospital Name</th>
                                        <th  class="text-light"  scope="col">Area</th>
                                        <th  class="text-light"  scope="col">Since</th>
                                        <th  class="text-light"  scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `hospital_list`";
                                    $result = mysqli_query($conn, $sql);
                                    if ($result) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $hid = $row['id'];
                                            $hospital = $row['hospital'];
                                            $area = $row['area'];
                                            $since = $row['since'];
                                            echo ' <tr>
                                            <th class="text-light" scope="row">' .$hid. '</th>
                                                    <td class="text-light">' .$hospital. '</td>
                                                    <td class="text-light">' .$area. '</td>
                                                    <td class="text-light">' .$since. '</td>
                                                    <td>
                                                    <button class="btn btn-success"><a href="update_add_hospital.php? updateid=' .$hid. '" class="text-light"><i class="fa-solid fa-pen-to-square"></i></a></button>
                                                    <button class="btn btn-danger"><a href="delete_add_hospital.php? deleteid=' .$hid. '" class="text-light"><i class="fa-solid fa-trash"></i></a></button>
                                                    </td>
                                                </tr>';
                                        }
                                    }

                                    ?>
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