<?php 
    require_once '../classes/database.class.php';
    require_once "../classes/college.class.php";
    
    if (isset($_POST['action']) && $_POST['action'] == 'add') {
        $college = new College();
        $college->collegeCode = htmlspecialchars($_POST['collegeCode']);
        $college->collegeName = htmlspecialchars($_POST['collegeName']);
    
        if ($college->add()) {
            header('location: college.php');
        } else {
            echo 'Failed to add college';
        }
    }
?>