<?php session_start();
if(!isset($_SESSION['username'])){
    $_SESSION['message'] = 'Please login to excess the dashboard';
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to the Dashboard, <?php echo htmlspecialchars($_SESSION['username']);?>!</h1>
<p>This is the protected area.</p>
<a href="logout.php">Log Out</a>
</body>
</html>
