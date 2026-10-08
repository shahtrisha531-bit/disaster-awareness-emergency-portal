<?php
session_start();

// Protect page: Redirect to login if user is not authenticated
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_name = $_SESSION['user_name'];
$user_role = $_SESSION['user_role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - Disaster Portal</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .dashboard-container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .welcome-card {
            background-color: #f8f9fa;
            border-left: 5px solid #d9534f;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 30px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .welcome-card h2 {
            margin: 0 0 10px 0;
            color: #333;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .card {
            background: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }
        .card h3 {
            margin-top: 0;
            color: #d9534f;
        }
        .card p {
            color: #666;
            font-size: 14px;
        }
        .btn-card {
            display: inline-block;
            margin-top: 15px;
            padding: 8px 16px;
            background-color: #0275d8;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
            font-weight: bold;
        }
        .header-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background-color: #333;
            color: #fff;
        }
        .header-bar a {
            color: #fff;
            text-decoration: none;
            background-color: #d9534f;
            padding: 8px 15px;
            border-radius: 4px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="header-bar">
        <h2>Disaster Awareness Portal</h2>
        <div>
            <a href="index.php" style="background-color: #5bc0de; margin-right: 10px;">Home</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="dashboard-container">
        <div class="welcome-card">
            <h2>Welcome back, <?php echo htmlspecialchars($user_name); ?>! 👋</h2>
            <p>You are logged in as <strong><?php echo ucfirst(htmlspecialchars($user_role)); ?></strong>.</p>
        </div>

        <div class="grid-container">
            <div class="card">
                <h3>Disaster Information</h3>
                <p>Learn about earthquakes, floods, cyclones, and safety protocols.</p>
                <a href="index.php" class="btn-card">View Disasters</a>
            </div>

            <div class="card">
                <h3>Emergency Services</h3>
                <p>Quick access to national emergency helplines and contact numbers.</p>
                <a href="index.php" class="btn-card">Emergency Numbers</a>
            </div>

            <div class="card">
                <h3>Submit Feedback</h3>
                <p>Have questions or suggestions? Reach out to the admin team.</p>
                <a href="index.php" class="btn-card">Contact Us</a>
            </div>
        </div>
    </div>

</body>
</html>