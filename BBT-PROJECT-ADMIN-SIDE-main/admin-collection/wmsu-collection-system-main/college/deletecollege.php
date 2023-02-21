<?php 
    require_once '../classes/database.class.php';
    require_once "../classes/college.class.php";
    
    if (isset($_POST['action']) && $_POST['action'] == 'delete') {
        $college = new College();
        $college->collegeID = $_POST['college_id'];
            if($college->delete()){
                header('location: college.php');
            }
            else{
                echo 'Error deleting college';
            }
    }
?>