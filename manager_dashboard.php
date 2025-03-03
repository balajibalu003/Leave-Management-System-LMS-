<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'manager') {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; background-color: #f4f4f4; }
        .container { max-width: 600px; margin: 50px auto; background: white; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); }
        .btn { display: block; width: 100%; padding: 10px; margin: 10px 0; text-decoration: none; background-color: #007bff; color: white; text-align: center; border-radius: 5px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Manager Dashboard</h2>
    <a href="approve_reject_leaves.php" class="btn">Approve/Reject Leave Requests</a>
    <a href="view_leave_calendar.php" class="btn">View Leave Calendar</a>
    <a href="view_employees.php" class="btn">See Employee Details</a>
    <a href="logout.php" class="btn" style="background-color: red;">Logout</a>
</div>

</body>
</html>
