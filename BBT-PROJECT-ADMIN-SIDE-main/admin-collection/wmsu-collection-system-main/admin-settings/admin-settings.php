<!doctype html>
<html lang="en" class="no-js">
  <html>
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--- links for bootstrap and css  --->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/payment.css" />
    <!-- Unicons CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/admin-settings.css" />
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
                <a href="../admin/dashboard.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold ">Dashboard</a>
                <a href="../fees/fees.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold">Fees</a>
                <a href="../remit-records/remit-records.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold ">Remit Records</a>
                <a href="../college/Oldcollege.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold">Colleges</a>
                <a href="../funds/funds-sub.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold ">Funds</a>
                <a href="../financial-report/financial-report.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold">Financial Report</a>
                <a href="../audit-log/audit-log.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold">Audit Log</a>
                <a href="../admin-settings/admin-settings.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold active">Admin Settings</a>
                <a href="../public/logout.php" class="list-group-item list-group-item-action bg-hover fw-bold">Logout</a>
            </div>
        </div>
		<div class="table-responsive">
	<div id="page-content-wrapper">
<!-- Dashboard hamburger      -->
    <nav class="navbar navbar-expand-lg navbar-light bg-active py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            <h2 class="fs-2 m-0" style="color:#000000; font-weight: 400;">Admin Settings</h2>
        </div>
    </nav>
    <div class="container">
		<div class="row justify-content-center">
			<div class="graphBox">
                    <a href="../admin-settings/admin-settings.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold active" id="funds">Overview</a>
                    <a href="../admin-settings/User-management.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold " id="funds">User Management</a>
                    <a href="../admin-settings/Colleges.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold " id="funds">Colleges</a>
				</div>

                <h style="font-size: 20px;"><b>Permission</b></h>
                <div class =" table-responsive">
                <table class="table">
            <thead style="background-color:#95BDFE ;" class="text-white">
              <tr>
                <th scope="col" style = " color: #000000;" >Role</th>
                <th scope="col" style = " color: #000000;" >Description</th>
                <th scope="col" style = " color: #000000;" >Status</th></th>
                <th scope="col" style = " color: #000000;" >Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>USC Admin</td>
                <td>Allow Special Privilege</td>
                <td>Active</td>
                <td>
                    <div class="form-check form-switch">
                    <input class="form-check-input" style="width: 40%;" type="checkbox" id="flexSwitchCheckChecked" checked>
                     <label class="form-check-label" for="flexSwitchCheckChecked"></label>
            </div>
        </td>
        <tr>
                <td>USC Treasures/Auditor</td>
                <td>Allow Access to view,edit and audit the payment</td>
                <td>Active</td>
                <td>
                    <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                     <label class="form-check-label" for="flexSwitchCheckChecked"></label>
            </div>
        </td>
        <tr>
                <td>College Admin</td>
                <td>Allow Special Privilege</td>
                <td>Active</td>
                <td>
                    <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                     <label class="form-check-label" for="flexSwitchCheckChecked"></label>
            </div>
        </td>

        <tr>
                <td>College Collectors</td>
                <td>Allow access to view, edit and audit the payment</td>
                <td>Active</td>
                <td>
                    <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                     <label class="form-check-label" for="flexSwitchCheckChecked"></label>
            </div>
        </td>
        </tbody>
          </table>
</div>
<h style="font-size: 20px;"><b>Semester</b></h>
          <div class =" table-responsive">
                <table class="table">
            <thead style="background-color:#95BDFE ;" class="text-white">
              <tr>
                <th scope="col" style = " color: #000000;" >Semester</th>
                <th scope="col" style = " color: #000000;" >From</th>
                <th scope="col" style = " color: #000000;" >To</th></th>
                <th scope="col" style = " color: #000000;" >At</th>
                <th scope="col" style = " color: #000000;" >Until</th>
                <th scope="col" style = " color: #000000;" >Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>First Semester</td>
                <td>06/11/22</td>
                <td>12/11/22</td>
                <td>12:00</td>
                <td>24:02</td>
                <td>	<a href="#editSemesterModal1" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></td>
              </tr>
              <tr>
                <td>Second  Semester</td>
                <td>01/03/23</td>
                <td>06/03/23</td>
                <td>12:00</td>
                <td>24:02</td>
                <td>	<a href="#editSemesterModal2" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></td>
              </tr>
              </td>
        </tbody>
          </table>
</div>
<h style="font-size: 20px;"><b>Archiving</b></h>
<div class =" table-responsive">
                <table class="table">
            <thead style="background-color:#95BDFE ;" class="text-white">
              <tr>
                <th scope="col" style = " color: #000000;" >Schedule for Archiving</th>
                <th scope="col" style = " color: #000000;" >From</th>
                <th scope="col" style = " color: #000000;" >To</th></th>
                <th scope="col" style = " color: #000000;" >At</th>
                <th scope="col" style = " color: #000000;" >Until</th>
                <th scope="col" style = " color: #000000;" >Status</th>
                <th scope="col" style = " color: #000000;" >Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>6 months</td>
                <td>06/11/22</td>
                <td>12/11/22</td>
                <td>7:00</td>
                <td>18:00</td>
                <td>Active</td>
                <td>	<a href="#editArchiveModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></td>
              </tr>
            </tbody>
</table>
</div>
<!-- Edit Modal HTML -->
<div id="editSemesterModal1" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Semester</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Semester</label>
						<input type="text" placeholder="First Semester"class="form-control" required>
					</div>
					&nbsp;&nbsp;<div class="form-group">&nbsp;&nbsp;
						<label for ="" style="font-size:x-large; color: black; font-weight: 500; margin-top: 25px;">Duration</label> 
					</div>
					<div class="form-group">
					<label>To</label>
						<input type="number" placeholder="06/11/22" class="form-control" required>
					</div>
					<div class="form-group">
					<label>To</label>
						<input type="number" placeholder="12/11/23" class="form-control" required>
					</div>
                    &nbsp;&nbsp;<div class="form-group">&nbsp;&nbsp;
						<label for ="" style="font-size:x-large; color: black; font-weight: 500; margin-top: 25px;">Time</label> 
					</div>
                    <div class="form-group">
					<label>At</label>
						<input type="number" placeholder="12:00" class="form-control" required>
					</div>
                    <div class="form-group">
					<label>Until</label>
						<input type="number" placeholder="24:00" class="form-control" required>
					</div>
				</div>
				<div class="modal-footer" style="justify-content: center">
					<input type="button" class="btn btn-success" style="width: 40%; border-radius: 25px;" data-dismiss="modal"value="Save">
                    <input type="button" class="btn btn-danger" style="width: 40%; border-radius: 25px;" data-dismiss="modal"value="Exit">
				</div>
			</form>
		</div>
	</div>
</div>
<div id="editSemesterModal2" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
        <form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Semester</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Semester</label>
						<input type="text" placeholder="Second Semester"class="form-control" required>
					</div>
					&nbsp;&nbsp;<div class="form-group">&nbsp;&nbsp;
						<label for ="" style="font-size:x-large; color: black; font-weight: 500; margin-top: 25px;">Duration</label> 
					</div>
                    <div>
					<label>From</label>
						<input type="number" placeholder="01/03/23" class="form-control" required>
					</div>
					<div class="form-group">
					<label>To</label>
						<input type="number" placeholder="06/03/23" class="form-control" required>
					</div>
                    &nbsp;&nbsp;<div class="form-group">&nbsp;&nbsp;
						<label for ="" style="font-size:x-large; color: black; font-weight: 500; margin-top: 25px;">Time</label> 
					</div>
                    <div class="form-group">
					<label>At</label>
						<input type="number" placeholder="12:00" class="form-control" required>
					</div>
                    <div class="form-group">
					<label>Until</label>
						<input type="number" placeholder="24:00" class="form-control" required>
					</div>
				</div>
				<div class="modal-footer" style="justify-content: center">
					<input type="button" class="btn btn-success" style="width: 40%; border-radius: 25px;" data-dismiss="modal"value="Save">
                    <input type="button" class="btn btn-danger" style="width: 40%; border-radius: 25px;" data-dismiss="modal"value="Exit">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Archive Modal -->
<div id="editArchiveModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
        <form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Archiving</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Schedule for Archiving</label>
						<input type="text" placeholder="6 Months"class="form-control" required>
					</div>
					&nbsp;&nbsp;<div class="form-group">&nbsp;&nbsp;
						<label for ="" style="font-size:x-large; color: black; font-weight: 500; margin-top: 25px;">Duration</label> 
					</div>
					<div class="form-group">
					<label>From</label>
						<input type="number" placeholder="06/11/22" class="form-control" required>
					</div>
					<div class="form-group">
					<label>To</label>
						<input type="number" placeholder="12/11/22" class="form-control" required>
					</div>
                    &nbsp;&nbsp;<div class="form-group">&nbsp;&nbsp;
						<label for ="" style="font-size:x-large; color: black; font-weight: 500; margin-top: 25px;">Time</label> 
					</div>
                    <div class="form-group">
					<label>At</label>
						<input type="number" placeholder="7:00" class="form-control" required>
					</div>
                    <div class="form-group">
					<label>Until</label>
						<input type="number" placeholder="18:00" class="form-control" required>
					</div>
                    <div class="form-group">
						<label>Status</label>
						<input type="text" placeholder="Active" class="form-control" required>
					</div>
				</div>
				<div class="modal-footer" style="justify-content: center">
					<input type="button" class="btn btn-success" style="width: 40%; border-radius: 25px;" data-dismiss="modal"value="Save">
                    <input type="button" class="btn btn-danger" style="width: 40%; border-radius: 25px;" data-dismiss="modal"value="Exit">
				</div>
            </form> 
		</div>
	</div>
</div>
</div>
<div class = "col ml-auto px-auto" id="nyeperts" style="border-radius: 25px; width: 50%; height: 55px; padding-left: 130px; display: contents;">
<input type="button" class="btn btn-success" style="width: 100%; border-radius: 25px;" value="Save Settings">
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