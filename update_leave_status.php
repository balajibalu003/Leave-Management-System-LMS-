<?php
include 'db_connect.php';

if (isset($_GET['id']) && isset($_GET['status'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];

    $sql = "UPDATE leave_requests SET status='$status' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Leave status updated!'); window.location.href='approve_reject_leaves.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
