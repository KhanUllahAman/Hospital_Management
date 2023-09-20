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
                            <div class="card-header">
                                <h4 class="card-title text-light"><b>Report of vaccination</b></h4>
                            </div>
							<div class="card-body custom-tab-1 table_childern_content">
								
								<div class="tab-content">
									<div id="my-posts" class="tab-pane fade active show">
										<div class="table-responsive">
											<table class="table table-responsive-md">
												<thead>
													<tr>
                                                        <th class="text-light">ID</th>
                                                        <th class="text-light">Child Name</th>
                                                        <th class="text-light">Vaccines Name</th>
                                                        <th class="text-light">Date</th>
                                                        <th class="text-light">Report</th>
													</tr>
												</thead>
												<tbody>
													<tr>
                                                        <td class="text-light">1</td>
														<td class="text-light">Shayan</td>
                                                        <td class="text-light">Pfizer</td>
                                                        <td class="text-light">21/May</td>
                                                        <td><span class="badge badge-rounded badge-info">Cleared</span></td>
                                                        
														
													</tr>
													<tr>
                                                        <td class="text-light">2</td>
                                                        <td class="text-light">Arisha</td>
														<td class="text-light">Moderna</td>
                                                        <td class="text-light">12 Jun</td>
                                                        <td><span class="badge badge-rounded badge-warning">Cleared</span></td>
														

                                                        
													</tr>
													<tr>
                                                        <td class="text-light">3</td>
														<td class="text-light">Hamza</td>
														<td class="text-light">AstraZeneca</td>
														<td class="text-light">14 sep</td>
                                                        <td><span class="badge badge-rounded badge-danger">Cancle</span></td>
														
													</tr>
													<tr>
                                                        <td class="text-light">4</td>
                                                        <td class="text-light">Aman</td>
                                                        <td class="text-light">Sinopharm</td>
                                                        <td class="text-light">22 Sep</td>
                                                        <td><span class="badge badge-rounded badge-success">Panding</span></td>
                                                        
                                                        
														
													</tr>
                                                   
													
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
      