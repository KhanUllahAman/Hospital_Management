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
<!--**********************************
            Content body start
        ***********************************-->
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
               <!-- child table start -->
                <div class="col-xl-12 col-lg-12 col-xxl-12 col-md-12">
						<div class="card profile-tab table_childern_content">
                            <div class="card-header table_childern_content">
                                <h4 class="card-title text-light"><b>List Of Hospital</b></h4>
                            </div>
							<div class="card-body custom-tab-1">
								
								<div class="tab-content">
									<div id="my-posts" class="tab-pane fade active show">
										<div class="table-responsive">
											<table class="table table-responsive-md">
												<thead>
													<tr>
                                                        <th class="text-light">ID</th>
                                                        <th class="text-light">List of Hopital</th>
                                                        <th class="text-light">Detail</th>
                                                        <th class="text-light">area</th>
                                                        <th class="d-none"></th>
                                                        <th class="d-none"></th>
                                                        <th class="text-light">Since</th>
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
                                            $details = $row['details'];
                                            $area = $row['area'];
                                            $since = $row['since'];
                                            echo ' <tr>
											<th><span class="badge badge-rounded badge-info text-dark">' .$hid. '</span></th> 
                                                    <td class="text-light">' .$hospital. '</td>
                                                    <td class="text-light">' .$details. '</td>
                                                    <td class="text-light">' .$area. '</td>
                                                   <td><span class="badge badge-rounded badge-secondary">' .$since. '</span></td> 
                                                   
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
               <!-- child table end -->

        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        <!--**********************************
            Content body end
        ***********************************-->

        <?php
include 'footer.php';
?>
