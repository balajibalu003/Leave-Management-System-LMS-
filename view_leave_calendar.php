<?php
include 'db_connect.php';

$sql = "SELECT employees.name, leave_requests.leave_type, leave_requests.start_date, leave_requests.end_date 
        FROM leave_requests 
        JOIN employees ON leave_requests.employee_id = employees.id 
        WHERE leave_requests.status = 'approved'";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Calendar</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; background-color: #f4f4f4; }
        .container { max-width: 600px; margin: 50px auto; background: white; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: center; }
        th { background-color: #007bff; color: white; }
    </style>
</head>
<body>

<div class="container">
    <h2>Leave Calendar</h2>
    <table>
        <tr>
            <th>Employee Name</th>
            <th>Leave Type</th>
            <th>Start Date</th>
            <th>End Date</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo ucfirst($row['leave_type']); ?></td>
            <td><?php echo $row['start_date']; ?></td>
            <td><?php echo $row['end_date']; ?></td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>
