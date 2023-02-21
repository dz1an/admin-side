<?php
    require_once '../classes/database.class.php';
    require_once '../classes/users.class.php';
    session_start();
    //prevent horny people
    if (!isset($_SESSION['logged_id'])){
        header('location: ../public/logout.php');
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="bg-white" id="sidebar-wrapper">
            <img src="../login/images/logo.jpg" width ="200" alt="CCS COLLECTION FEE">
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-hover second-text active">Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-hover second-text fw-bold">Fees</a>
                <a href="#" class="list-group-item list-group-item-action bg-hover second-text fw-bold">Remit Records</a>
                <a href="#" class="list-group-item list-group-item-action bg-hover second-text fw-bold">Colleges</a>
                <a href="#" class="list-group-item list-group-item-action bg-hover second-text fw-bold">Funds</a>
                <a href="#" class="list-group-item list-group-item-action bg-hover second-text fw-bold">Financial Report</a>
                <a href="#" class="list-group-item list-group-item-action bg-hover second-text fw-bold">Audit Log</a>
                <a href="#" class="list-group-item list-group-item-action bg-hover second-text fw-bold">Admin Settings</a>
                <a href="#" class="list-group-item list-group-item-action bg-hover text-danger fw-bold">Logout</a>
            </div>
        </div>
    <!--testing-->
<table border="1">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Role ID</th>
            <th>College ID</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $users = new Users();
        $data = $users->get_all_users();
        
        foreach($data as $user) {
        ?>
        <tr>
            <td><?php echo $user['user_id']; ?></td>
            <td><?php echo $user['user_name']; ?></td>
            <td><?php echo $user['user_email']; ?></td>
            <td><?php echo $user['type']; ?></td>
            <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<a class="logout-link" href="../public/logout.php" title="Logout">
                <i class='bx bx-log-out'></i>
                <span class="links-name">Logout</span>
            </a>
</body>
</html>
