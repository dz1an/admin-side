<?php

    // resume session here to fetch session values
    session_start();

	//prevent horny people
    if (!isset($_SESSION['logged_id'])){
        header('location: ../public/logout.php');
    }
	require_once '../classes/database.class.php';
	require_once '../classes/fee.class.php';
?>
<!doctype html>
<html lang="en" class="no-js">
  <html>
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--- links for bootstrap and css  --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/fees.css" />
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/6023332cf2.js" crossorigin="anonymous"></script>
    <title>Wmsu Collection System</title>
    </head>

      <body>
      <div class="d-flex" id="wrapper">
        <!-- Sidebar with bootstrap -->
        <div class="bg-white" id="sidebar-wrapper">
            <img src="../images/logo.jpg" width ="200" alt="CCS COLLECTION FEE">
			<div class="list-group list-group-flush my-3">
                <a href="../admin/dashboard.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold">Dashboard</a>
                <a href="../fees/fees.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold active">Fees</a>
                <a href="../remit-records/remit-records.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold">Remit Records</a>
                <a href="../college/Oldcollege.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold">Colleges</a>
                <a href="../funds/funds-sub.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold">Funds</a>
                <a href="../financial-report/financial-report.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold">Financial Report</a>
                <a href="../audit-log/audit-log.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold">Audit Log</a>
                <a href="../admin-settings/admin-settings.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold">Admin Settings</a>
                <a href="../public/logout.php" class="list-group-item list-group-item-action bg-hover fw-bold">Logout</a>
            </div>
        </div>
		<div class="table-responsive">
	<div id="page-content-wrapper">
<!-- Dashboard hamburger      -->
    <nav class="navbar navbar-expand-lg navbar-light bg-active py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            <h2 class="fs-2 m-0">Fees</h2>
        </div>
    </nav>
		<div class="table-wrapper">
		<div class="table-title">
				<div class="row">
					<div class="col-sm-4">
					<input class="form-control border" type="search" name= "search" id="search-input" placeholder="Search Name">
					<button class="btn btn-primary dropdown-toggle" id ="sort-by" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort By </button>
						<div class="dropdown-menu">
    					<a class="dropdown-item" href="#">Ascending</a>
    					<a class="dropdown-item" href="#">Descending</a>
					</div>
					</div>
					<div class="col-sm-8">
						<a href="#addFeesModal" class="btn btn-success" id = "add-fees" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Fees</span></a>

						<!-- <a href="#deleteFeesModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						 -->
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<!-- <th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th> -->
						<th>ID</th>
						<th>Type of Fee</th>
						<th>Description</th>
						<th>Amount</th>
						<th>Duration</th>
						<th>School Year</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php
					//$fee = new Fee();
					//$data = $fee->show();
				//foreach($data as $fee) {
        ?>
					<tr>
						<!-- <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td> -->
						<td>1</td>
           			 <td>Wmsu Palaro</td>
            		<td>University Fees</td>
            		<td>200</td>
            		<td>1st Semester</td>
            		<td>05/19/2022</td>
					<td>
					<a href="#editFeesModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteFeesModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
							</td>
				</tr>
							<td>2</td>
           			 <td>Bahay Kubo</td>
            		<td>University Fees</td>
            		<td>150</td>
            		<td>1st Semester</td>
            		<td>05/20/2022</td>
					<td>
					<a href="#editFeesModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteFeesModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
							</td>
					</tr>
					</tbody>
			</table>
						<!--<td><?php //echo $fee['fee_id']; ?></td>
						<td><?php  // echo $fee['fee_type']; ?></td>
						<td><?php //echo $fee['fee_description']; ?></td>
						<td><?php //echo $fee['fee_amount']; ?></td>
						<td><?php //echo $fee['fee_due_date']; ?></td>
						<td>
							<a href="#editFeesModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteFeesModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<?php //} ?>
				</tbody>
			</table>
			<- - <div class="clearfix">
				<div class="hint-text">Showing <b>1</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item active"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div> -->
		</div>
	</div>        
</div>
<!-- Add Modal HTML -->
<div id="addFeesModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="addfees.php" method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Add Fees</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label for="feeType">Type of Fee</label>
						<input type="text" name="feeType" id="feeType" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="feeDescription">Description</label>
						<input type="text" name="feeDescription" id="feeDescription" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="feeAmount">Amount</label>
						<input type="number" name="feeAmount" id="feeAmount" class="form-control" required>
					</div>
					&nbsp;&nbsp;<div class="form-group">&nbsp;&nbsp;
						<label for ="" style="font-size:x-large; color: black; font-weight: 500; margin-top: 25px;">Fee Scheduling</label> 
					</div>
					<div class="form-group">
						<label for="year-level">School Year</label>
						<select name="sy" id="sy" class="form-control" required>
                        <option value="" disabled selected>Select your option</option>
                        <option value="pers">2020-2021</option>
                        <option value="tecond">2022-2023</option>
                        </select><br><br>
                        </form>					</div>	
					<div class="form-group">
					<label for="year-level">Semester</label>
						<select name="sy" id="sy" class="form-control" required>
                        <option value="" disabled selected>Select your option</option>
                        <option value="pers">1st Semester</option>
                        <option value="tecond">2nd Semester</option>
                        </select><br><br>
                        </form>
					</div>			
					<div class="form-group">
						<label for="feeDueDate">Start date</label>
						<input type="date" name="feeDueDate" id="feeDueDate" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="feeDueDate">End date</label>
						<input type="date" name="feeDueDate" id="feeDueDate" class="form-control" required>
					</div>			
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="hidden" name="action" value="add">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editFeesModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Fees</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Type of Fee</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Description</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Duration</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
					<label>Amount</label>
						<input type="number" class="form-control" required>
					</div>
					<div class="form-group">
						<label for ="">School Year</label>
						<input type="text" name ="" id= "" class="form-control" required> <!-- text muna kasi automatically default - mark -->
					</div>
					<div class="form-group">
						<label for = "">Semester</label>
						<input type="text" name = " " id= " " class="form-control" required><!-- text muna kasi automatically default - mark -->
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteFeesModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="deletefees.php" method="POST">
				<div class="modal-header">
					<h4 class="modal-title">Delete Fees</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="hidden" name="action" value="delete">
					<input type="hidden" name="fee_id" value="<?php echo $fee['fee_id']; ?>">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editFeesModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Fees</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Type of Fee</label>
						<input type="text" class="form-control" required>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>       
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                var el = document.getElementById("wrapper");
                var toggleButton = document.getElementById("menu-toggle");
        
                toggleButton.onclick = function () {
                    el.classList.toggle("toggled");
                };
            </script>
</html>
