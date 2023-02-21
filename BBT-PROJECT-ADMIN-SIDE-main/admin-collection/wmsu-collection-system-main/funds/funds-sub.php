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
    <link rel="stylesheet" href="../css/funds.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
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
                <a href="../funds/funds-sub.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold active">Funds</a>
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
            <h2 class="fs-2 m-0" style="color:#000000; font-weight: 400;">Funds</h2>
        </div>
    </nav>
    <div class="container">
		<div class="row justify-content-center">
			<div class="graphBoxing">
                    <a href="../funds/funds-sub.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold active" id="funds">Funds</a>
                    <a href="../funds/collected-fees.php" class="list-group-item list-group-item-action bg-hover first-text fw-bold " id="funds">Collected fees</a>
				</div>
                </div>
                <div class="table-responsive" id="depression">
                <div class="col-sm-6">
                    <p>112123123123123</p>
                    <ul>
                        <li>1</li>
                        <li>1</li>
                        <li>icon</li>
                        <li>1212</li>
                        <li>12</li>
                        <li>1212</li>
                    </ul>
                </div>
                <div class="col-sm-6" id="lakatan">
                <table class="table table-striped table-borderless">
            <thead style="background-color:#95BDFE ;" class="text-white">
              <tr>
                <h style="font-size: 30px;"><b>Pending</b></h>
                <hr style="height: 5px; color: red;">
                <th scope="col" style = " color: #000000;" >Title</th>
                <th scope="col" style = " color: #000000;" >Fund Size</th>
                <th scope="col" style = " color: #000000;" >School Year</th>
                <th scope="col" style = " color: #000000;" >Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Boracay</td>
                <td>Php 100,000</td>
                <td>2022-2023</td>
                <td><a href="#pendingModal" class="details" data-toggle="modal"><i class="fa-solid fa-circle-info fa-xl" style="color:gray;" data-toggle="tooltip" title="details"></i></a></td>
              </tr>
          </table>
                </div>
                </div>
    <div class="table-responsive" id="anxiety">
        <div class="row my-2 mx-1">
        <div class="col-sm-4">
        <input class="form-control border" type="search" name= "search" id="search-input" placeholder="Search Name">
        </div>
        <div class="col-sm-4" style="padding-bottom: 5px;">
        <button class="btn btn-primary dropdown-toggle" id ="sort-by" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort By </button>
						<div class="dropdown-menu">
    					<a class="dropdown-item" href="#">Ascending</a>
    					<a class="dropdown-item" href="#">Descending</a>
					</div>
        </div>
        <div class="col-sm-4">
        <button class="btn btn-primary dropdown-toggle" id ="school-year" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">School Year </button>
						<div class="dropdown-menu">
    					<a class="dropdown-item" href="#">2021-2022</a>
    					<a class="dropdown-item" href="#">2022-2023</a>
					</div>
        </div>
          <table class="table table-striped table-borderless">
            <thead style="background-color:#95BDFE ;" class="text-white">
              <tr>
                <th scope="col" style = " color: #000000;" >ID</th>
                <th scope="col" style = " color: #000000;" >College</th>
                <th scope="col" style = " color: #000000;" >Total</th>
                <th scope="col" style = " color: #000000;" >USC Share</th>
                <th scope="col" style = " color: #000000;" >School Year</th>
                <th scope="col" style = " color: #000000;" >Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>CCS</td>
                <td>Php 1,000,000</td>
                <td>Php 300,000</td>
                <td>2022-2023</td>
                <td><a href="#detailsModal" class="details" data-toggle="modal"><i class="fa-solid fa-circle-info fa-xl" style="color:gray;" data-toggle="tooltip" title="details"></i></a></td>
              </tr>

              <tr>
                <th scope="row">2</th>
                <td>CCS</td>
                <td>Php 1,500,000</td>
                <td>Php 600,000</td>
                <td>2022-2023</td>
                <td><a href="#detailsModal" class="details" data-toggle="modal"><i class="fa-solid fa-circle-info fa-xl" style="color:gray;" data-toggle="tooltip" title="details"></i></a></td>
              </tr>

              <tr>
                <th scope="row">3</th>
                <td>CCS</td>
                <td>Php 2,000,000</td>
                <td>Php 450,000</td>
                <td>2022-2023</td>
                <td><a href="#detailsModal" class="details" data-toggle="modal"><i class="fa-solid fa-circle-info fa-xl" style="color:gray;" data-toggle="tooltip" title="details"></i></a></td>
              </tr>
            </tbody>
          </table>
                 </div>
			    </div>
              </div>
		    </div>
	    </div>
    </div>
    <!-- Details Modal -->
  <div id="detailsModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Details</h4>
				</div>
				<div class="modal-body">					
          <ul style="list-style-type: none;">
          <li><label>Boracay</label></li>
						<li><label>Fund Size: Php 215,000</label></li>
            <li><label>Semester: 1</label></li>
            <li><label>School Year: 2022-2023</label></li>
            <li><label>Status: Pending</label></li>
            <li><label>Date Created: 12/15/23</label></li>
            &nbsp;<li><label>Download Proposal Files: Finding ways for this function</label></li>&nbsp;
        </ul>
				</div>
				<div class="modal-footer" style="justify-content: center">
					<input type="button" class="btn btn-danger" style="width: 60%; border-radius: 25px;" data-dismiss="modal"value="Exit">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Pending Modal -->
<div id="pendingModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Details</h4>
				</div>
				<div class="modal-body">					
          <ul style="list-style-type: none;">
          <li><label>Boracay</label></li>
						<li><label>Fund Size: Php 215,000</label></li>
            <li><label>Semester: 1</label></li>
            <li><label>School Year: 2022-2023</label></li>
            <li><label>Status: Pending</label></li>
            <li><label>Date Created: 12/15/23</label></li>
            &nbsp;<li><label>Download Proposal Files: Finding ways for this function</label></li>&nbsp;
        </ul>
				</div>
				<div class="modal-footer" style="justify-content: center">
					<input type="button" class="btn btn-success" style="width: 40%; border-radius: 25px;" data-dismiss="modal"value="Approve">
          <input type="button" class="btn btn-danger" style="width: 40%; border-radius: 25px;" data-dismiss="modal"value="Rejected">
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