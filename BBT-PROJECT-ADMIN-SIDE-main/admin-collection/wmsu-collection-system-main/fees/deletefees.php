<?php 
    require_once '../classes/database.class.php';
    require_once "../classes/fee.class.php";
    
    if (isset($_POST['action']) && $_POST['action'] == 'delete') {
        $fee = new Fee();
        $fee->feeID = $_POST['fee_id'];
            if($fee->delete()){
                header('location: fees.php');
            }
            else{
                echo 'Error deleting fees';
            }
    }
?>