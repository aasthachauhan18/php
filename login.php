<?php session_start();
if(isset(($_SESSION['username']))){
    header('Location: dashboard.php');
    exit();
}

if($_SESSION['REQUEST_METHOD']==='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];


if($username==='admin' && $password === 'admin@123'){
    $_SESSION['username'] = $username;
    header('Location: dashboard.php');
    exit();

} else{
    $error = 'Invalid username and password';
}
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
    <h1>Login</h1>
    <!-- Login form in table format -->

    <form action="login.php" method="post">
        <table>
            <tr>
                <td><label for="username">Username:</label></td>
                <td><input type="text" id="username" name="username" required></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" id="password" name="password" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>