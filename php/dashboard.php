<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cab Management System - Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Welcome to the Dashboard, <?php echo $_SESSION['username']; ?></h2>
        <!-- Add dashboard content here -->
        <a href="logout.php" id="logout">Log Out</a>
    </div>
</body>
</html>
