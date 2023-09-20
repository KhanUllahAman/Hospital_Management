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
	.table_childern_content {
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
		$sql = "SELECT * FROM `hospitaldetail`";
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
						<h4 class="card-title text-light">Vaccination Detail</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="example5" class="display" style="min-width: 845px">
								<thead>
									<tr>
										<th class="text-light">ID</th>
										<th class="text-light">Hospital Name</th>
										<th class="text-light">Vaccination Name</th>
										<th class="text-light">Vaccination Time</th>
										<th class="text-light">Vaccination Day</th>
										<th class="text-light">Detail</th>
										<th class="text-light">Available/Unavailable</th>


									</tr>
								</thead>
								<tbody>

									<?php $i = 1;
									while ($row = mysqli_fetch_assoc($result)) { ?>
										<tr>

											
											<td class="text-light"><span class="badge badge-rounded badge-success text-dark"><?php echo  $i ?></span></td>

											<td class="text-light"><?php echo $row["childrenname"] ?></td>
											<td class="text-light"><?php echo $row["vaccinationname"] ?></td>
											
											<td class=""><span class="badge badge-rounded badge-warning text-dark"><?php echo $row["vaccinationtime"] ?></span></td>

											<td class="text-light"><?php echo $row["vaccinationday"] ?></td>
											<td class="text-light"><?php echo $row["v_detail"] ?></td>
											<td class="text-light"><span class="badge badge-rounded badge-secondary"><?php echo $row["v_available_unavailable"] ?></span></td>

											
											


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