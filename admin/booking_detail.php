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
<?php
$sql = "SELECT * FROM `booking_details_form`";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo "good";
} else {
	echo "error";
}
?>



<div class="content-body">
	<!-- row -->
	<div class="container-fluid">

		<!-- child table start -->
		<div class="col-xl-12 col-lg-12 col-xxl-12 col-md-12">
			<div class="card profile-tab table_childern_content">
				<div class="card-header table_childern_content">
					<h4 class="card-title text-light"><b>Request from parents </b></h4>
				</div>
				<div class="card-body custom-tab-1">

					<div class="tab-content">
						<div id="my-posts" class="tab-pane fade active show">
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
										<tr>
											<th class="text-light">ID</th>
											<th  class="text-light">First Name</th>
											<th  class="text-light">Last Name</th>
											<th  class="text-light">Father Name</th>
											<th  class="text-light">Email</th>
											<th  class="text-light">Age</th>
											<th  class="text-light">Blood Group</th>
											<th  class="text-light">Vaccination Name</th>
											<th  class="text-light">Class</th>
											<th  class="text-light">Phone Number</th>

										</tr>
									</thead>
									<tbody>
										<?php $i = 1;
										while ($row = mysqli_fetch_assoc($result)) { ?>
											<tr>

												<td  class="text-light"><span class="badge badge-rounded badge-info text-dark"> <?php echo  $i ?></span></td>

												<td  class="text-light"><?php echo $row["firstname"] ?></td>
												<td  class="text-light"><?php echo $row["lastname"] ?></td>
												<td  class="text-light"><?php echo $row["fathername"] ?></td>
												<td  class="text-light"><?php echo $row["email"] ?></td>
												<td  class="text-light"><span class="badge badge-rounded badge-success text-dark"><?php echo $row["age"] ?></span></td>
												<td  class="text-light"><span class="badge badge-rounded badge-warning text-dark"><?php echo $row["blood_group"] ?></span></td>
												<td  class="text-light"><?php echo $row["vaccination_name"] ?></td>
												<td  class="text-light"><span class="badge badge-rounded badge-danger text-light"><?php echo $row["class"] ?></span></td>
												<td  class="text-light"><span class="badge badge-rounded badge-secondary text-light"><?php echo $row["phonenumber"] ?></span></td>



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