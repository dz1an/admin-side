<?php 
    require_once '../classes/database.class.php';
    require_once "../classes/fee.class.php";
    
    if (isset($_POST['action']) && $_POST['action'] == 'add') {
        $fee = new Fee();
        $fee->feeType = htmlspecialchars($_POST['feeType']);
        $fee->feeAmount = htmlspecialchars($_POST['feeAmount']);
        $fee->feeDescription = htmlspecialchars($_POST['feeDescription']);
        $fee->feeDueDate = $_POST['feeDueDate'];
    
        if ($fee->add()) {
            header('location: fees.php');
        } else {
            echo 'Failed to add fee';
        }
    }
?>