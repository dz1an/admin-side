<?php

    //resume session here to fetch session values
    //session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
   // if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] == 'student'){
     //   header('location: ../control-panel/login.php');
   // }
   //if the above code is false then html below will be displayed

  //  require_once '../tools/variables.php';
   // $page_title = 'GreenScreen | Application';
   //$application = 'active';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="BigBirdieTech">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.3.1/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap.min.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/6023332cf2.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b7698cb814.js" crossorigin="anonymous"></script>


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">
    <link href="../css/features.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">

    <!-- JavaScript -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/fees.css" />
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/6023332cf2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://kit.fontawesome.com/30ff5f2a0c.js" crossorigin="anonymous"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.3.1/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://datatables.net/extensions/fixedheader/examples/integration/responsive-bootstrap.html"></script>

    <title><?php echo $page_title; ?></title>
    <link rel="icon" href="../img/greenscreen_logo_green.png" type="image/icon type">
</head>

<body>
<div class="d-flex" id="wrapper">
        <!-- Sidebar with bootstrap -->
        <div class="bg-white" id="sidebar-wrapper">
            <img src="../images/logo.jpg" width ="200" alt="CCS COLLECTION FEE">
            <div class="list-group list-group-flush my-3">
                <a href="../admin/dashboard.php" class="list-group-item list-group-item-action bg-hover first-text fw">Dashboard</a>
                <a href="../fees/fees1.php" class="list-group-item list-group-item-action bg-hover first-text active">Fees</a>
                <a href="../remit-records/remit-records.php" class="list-group-item list-group-item-action bg-hover first-text fw">Remit Records</a>
                <a href="../college/college.php" class="list-group-item list-group-item-action bg-hover first-text fw">Colleges</a>
                <a href="../funds/funds.php" class="list-group-item list-group-item-action bg-hover first-text fw">Funds</a>
                <a href="../financial-report/financial-report.php" class="list-group-item list-group-item-action bg-hover first-text fw">Financial Report</a>
                <a href="../audit-log/audit-log.php" class="list-group-item list-group-item-action bg-hover first-text fw">Audit Log</a>
                <a href="../admin-settings/admin-settings.php" class="list-group-item list-group-item-action bg-hover first-text fw">Admin Settings</a>
                <a href="../public/logout.php" class="list-group-item list-group-item-action bg-hover first-text fw">Logout</a>
            </div>
        </div>
    <?php
//   require_once '../includes/topnav_admin.php';
    ?>
    <div class="container-fluid">
        <div class="row">
            <?php
           //  require_once '../includes/sidebar.php';
            ?>
            <div id="page-content-wrapper">
<!-- Dashboard hamburger      -->
    <nav class="navbar navbar-expand-lg navbar-light bg-active py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            <h2 class="fs-2 m-0">Fees</h2>
        </div>
    </nav>
  </div>
                    <div class="table-responsive py-3 table-container">
                        
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script>
        function load(status){
            if(status == 'fees'){
                $.ajax({
                    type: "GET",
                    url: 'feestable.php',
                    success: function(result)
                    {
                        $('div.table-responsive').html(result);
                        dataTable = $("#table-fees").DataTable({
                            "dom": 'rtip',
                            responsive: true
                        });
                        $('input#keyword').on('input', function(e){
                            var status = $(this).val();
                            dataTable.columns([3]).search(status).draw();
                        })
                        $('select#student_fees').on('change', function(e){
                            var status = $(this).val();
                            dataTable.columns([2]).search(status).draw();
                        })
                        new $.fn.dataTable.FixedHeader(dataTable);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    }  
                });
            }
        }
        $(document).ready(function(){
            load('fees');
            $('ul.application .nav-item').on('click', function(){
                $('ul.application .nav-item').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
</body>
</html>
