<?php

   // require_once '../tools/functions.php';
   // require_once '../classes/fees.class.php';

    //resume session here to fetch session values
   // session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
   // if (!isset($_SESSION['logged-in'])){
       // header('location: ../login/login.php');
   // }
    //if the above code is false then code and html below will be executed

    //if add faculty is submitted
    if(isset($_POST['save'])){

        $fees = new Fees;
        //sanitize user inputs
        $fees->type_of_fee = htmlentities($_POST['Type_of_fee']);
        $fees->description = htmlentities($_POST['Description']);
        $fees->duration = $_POST['Duration'];
        $fees->amount = $_POST['Amount'];
        if(validate_add_fees($_POST)){
            if($fees->add()){
                header('location: fees.php');
            }
        }
    }
   // require_once '../tools/variables.php';
    $page_title = 'WMSU COLLECTION SYSTEM | Add Fees';
    $fees = 'active';
    require_once '../includes/header.php';
    require_once '../includes/sidebar.php';
   // require_once '../includes/topnav.php';
   ?>
   <div  class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Add Fees</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group" action="addfees.php" method="post">
						<label for= "type_of_fee">Type of Fee</label>
						<input type="text" class="form-control" id ="type_of_fee" name= "type_of_fee" required placeholder = "Enter the Type of Fees"  value="<?php if(isset($_POST['type_of_fee'])) { echo $_POST['type_of_fee']; } ?>">
                    <?php>
                        if(isset($_POST['save']) && !validate_fees_type_of_fee($_POST)){
                            ?>
                                        <p class="error">Type of Fees is invalid.</p>
                            <?php
                                }
                                ?>
					<div class="form-group">
						<label for = "description">Description</label>
						<input type="text" class="form-control"  id="description" name="description" required placeholder="Enter Fees Description" value="<?php if(isset($_POST['description'])) { echo $_POST['description']; } ?>">
                    <?php
                        if(isset($_POST['save']) && !validate_fees_description($_POST)){
                    ?>
                                <p class="error">Fees description is invalid.</p>
                    <?php
                        }
                    ?>
					</div>
					<div class="form-group">
						<label for = "duration">Duration</label>
                        <input type="number" id="duration" name="duration" required value="<?php if(isset($_POST['duration'])) { echo $_POST['duration']; } ?>">
                        <?php
                        if(isset($_POST['save']) && !validate_duration($_POST)){
                    ?>
                                <p class="error">Please input proper duration.</p>
                    <?php
                        }
                    ?>
					</div>
					<div class="form-group">
						<label for = "amount">Amount</label>
						<input type="number" class="form-control" id ="amount" name ="amount" required placeholder="Enter Amount" value="<?php if(isset($_POST['amount'])) { echo $_POST['amount']; } ?>">
                        <?php
                        if(isset($_POST['save']) && !validate_amount($_POST)){
                    ?>
                                <p class="error">Please input proper amount.</p>
                    <?php
                        }
                    ?>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add fees" name="save" id="save">
				</div>
			</form>
		</div>
	</div>
</div>
