<?php
    //start session begin here
    session_start();

    //check if user is login already otherwise send to login page
    if (isset($_SESSION['user_type']) == 'admin'){
        header('location: admin/dashboard.php');
    }
    else if (isset($_SESSION['user_type']) == 'officer'){
        header('location: public/payment.php');
    }
    else{
        header('location: login/login.php');
    }

?>