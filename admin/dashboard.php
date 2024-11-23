<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../login.php');
    exit();
}
include '../includes/db_connect.php';
include '../includes/header.php';
include '../includes/navbar.php';

// Fetch data for the dashboard, e.g. total sales, total products, etc.
?>

<h1>Admin Dashboard</h1>
<!-- Add your dashboard components here -->

<?php include '../includes/footer.php'; ?>