<?php

?>

<div class="table-responsive">
	<div id="page-content-wrapper">
	<div class="col-sm-6">
<div class="table-wrapper">



<div class="container">
    <div class="row">
        <div class="col-sm-6 my-auto" id="search-form">
		<label for="keyword">Search</label>
        <input type="text" name="keyword" id="keyword" placeholder="Enter Type of Fees Here" class="form-control form-control-sm">
        </div>
        <div class="col-sm-6">
		<div class ="sticky-md-top">
        <a href="#addFeesModal" class="btn btn-success btn-primary position-relative" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Fees</span></a>	
        </div>
    </div>
</div>
    <!-- <div class="form-outline">
        <label for="keyword">Search</label>
        <input type="text" name="keyword" id="keyword" placeholder="Enter Type of Fees Here" class="form-control form-control-sm">
		<a href="#addFeesModal" class="btn btn-success btn-primary position-relative" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Fees</span></a>	

    </div>
	<div class="row">
    <div class="col-sm-12">
	<div class ="sticky-md-top">
        <a href="#addFeesModal" class="btn btn-success btn-primary position-relative" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Fees</span></a>	
</div> -->
</div>
<table class="table table-hover col-12" id="table-fees">
    <thead>
        <tr>
            <th scope="col">Action</th>
            <th scope="col">ID</th>
            <th scope="col">Duration</th>
            <th scope="col">Type of Fees</th>
            <th scope="col">Amount</th>
            <th scope="col">School Year</th>
            <th scope="col">Description</th>
            </tr>
    </thead>
    <tbody>
        <tr>
        <td>
							<a href="#editFeesModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteFeesModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                          			        <a href="" class="status" data-toggle="modal"><i class='far fa-address-card' data-toggle="tooltip" title="Status"></i></a>
						</td>
            <td>1</td>
            <td>1st Semester</td>
            <td>University</td>
            <td>200</td>
            <td>05/19/2022</td>
            <td>University Fees</td>

        </tr>
        <tr>
        <td>
							<a href="#editFeesModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteFeesModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                          				<a href="" class="status" data-toggle="modal"><i class='far fa-address-card' data-toggle="tooltip" title="Status"></i></a>
						</td>
            <td>2</td>
			<td>1st Semester</td>
            <td>Wmsu Palaro</td>
            <td>300</td>
			<td>05/19/2022</td>
            <td>Fees</td>

        </tr>
        <tr>
        <td>
							<a href="#editFeesModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteFeesModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            				<a href="" class="status" data-toggle="modal"><i class='far fa-address-card' data-toggle="tooltip" title="Status"></i></a>
						</td>
            <td>3</td>
			<td>1st Semester</td>
            <td>Laptop</td>
            <td>200</td>
			<td>05/19/2022</td>
            <td>Fees</td>

        </tr>
        <tr>
        <td>
							<a href="#editFeesModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteFeesModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                      			<a href="" class="status" data-toggle="modal"><i class='far fa-address-card' data-toggle="tooltip" title="Status"></i></a>
						</td>
            <td>4</td>
            <td>1st Semester</td>
            <td>University</td>
            <td>150</td>
            <td>05/19/2022</td>
            <td>Fees</td>

            <tr>
            <td>
							<a href="#editFeesModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteFeesModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                           			        <a href="" class="status" data-toggle="modal"><i class='far fa-address-card' data-toggle="tooltip" title="Status"></i></a>
						</td>
            <td>5</td>
			<td>1st Semester</td>
            <td>Bahay Kubo</td>
            <td>599</td>
            <td>05/19/2022-</td>
            <td>Fees</td>
        </tr>
        </tr>
    </tbody>
</table>
<div>
</div>
<div id="addFeesModal" class="modal fade">
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
						<input type="text" class="form-control" required>
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
						<label>School Year</label> 
						<input type="text" class="form-control" required> <!-- text muna kasi automatically default - mark -->
					</div>				
					<div class="form-group">
						<label>Semester</label>
						<input type="text" class="form-control" required><!-- text muna kasi automatically default - mark -->
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
						<input type="text" class="form-control" required>
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
						<label>School Year</label> 
						<input type="text" class="form-control" required> <!-- text muna kasi automatically default - mark -->
					</div>				
					<div class="form-group">
						<label>Semester</label>
						<input type="text" class="form-control" required><!-- text muna kasi automatically default - mark -->
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
<div id="deleteFeesModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
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
					<input type="submit" class="btn btn-danger" value="Delete">
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
 <script src="https://kit.fontawesome.com/6023332cf2.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://kit.fontawesome.com/6023332cf2.css" crossorigin="anonymous">

			<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
			  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                var el = document.getElementById("wrapper");
                var toggleButton = document.getElementById("menu-toggle");
        
                toggleButton.onclick = function () {
                    el.classList.toggle("toggled");
                };
            </script>
</html>
