<?php

    //resume session here to fetch session values
    //session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
   // if (!isset($_SESSION['logged-in'])){
        //header('location: ../login/login.php');
   // }
    //if the above code is false then html below will be displayed

   // require_once '../tools/variables.php';
    //$page_title = 'CCS COLLECTION | Show Fees';
    //$Fees = 'active';

    //require_once '../includes/header.php';
   // require_once '../includes/sidebar.php';

   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Fees</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /><link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/fees.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
<div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <img src="../login/images/logo.jpg" width ="200" alt="CCS COLLECTION FEE">
            <div class="darna my-3">
                <a href="#" class="#">
                    Dashboard</a>
                <a href="#" class="active">
                    Fees</a>
                <a href="#" class="#">
                    Remit Records</a>
                <a href="#" class="# ">
                    Colleges</a>
                <a href="#" class="#"> 
                    Funds</a>
                <a href="#" class="#"> 
                     Financial Report</a>
                <a href="#" class="#">
                     Audit Log</a> 
                     <a href="#" class="#"> 
                     Admin Settings</a>
                <a href="#" class="#" id='a_logout'>
                    Logout</a>
            </div>
        </div>
		<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-active py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            <h2 class="fs-2 m-0">Fees</h2>
        </div>
    </nav>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Fees</h2>
					</div>
					<?php
					// if($_SESSION['user_type'] == 'admin'){ 
						?>
					<div class="col-sm-6">
						<a href="" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Fees</span></a>				
						<?php
					//	}
						?>	
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Type of Fee</th>
						<th>Description</th>
						<th>Duration</th>
						<th>Amount</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					//require_once '../classes/fees.class.php';
					
					//$fees = new fees();
					//We will now fetch all the records in the array using loop
					//use as a counter, not required but suggested for the table
					//$i = 1;
					//loop for each record found in the array
					//foreach ($fees->show() as $value){ //start of loop
				?>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<tr>
                            <!-- always use echo to output PHP values -->
                            <td><?php echo $i ?></td>
                            <td><?php echo $value['Type_of_fee']?></td>
                            <td><?php echo $value['Description'] ?></td>
                            <td><?php echo $value['Duration'] ?></td>
                            <td><?php echo $value['Amount'] ?></td>
							<?php
							// if($_SESSION['user_type'] == 'admin'){ 
								?>
						<td>
							<a class="edit" href = "editfees.php?id=<?php echo $value['id'] ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a class="delete" href="deletefees.php?id=<?php echo $value['id'] ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<?php
                      //  $i++;
                    //end of loop
                   // }
                    ?>
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item active"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
<div id="" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Add Fees</h4>
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
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Amount</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<div id="" class="modal fade">
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
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Amount</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>

<div id="" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Fees</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Are you sure you want to delete these Records?</p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
