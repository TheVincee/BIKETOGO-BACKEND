<?php 
$host = "localhost";
$user = "root";
$password = "";
$db = "bike-to-go";

$data = mysqli_connect($host, $user, $password, $db);
if ($data == false) {
    die("Connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Use prepared statements to prevent SQL injection
    $stmt = $data->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
        if ($row["usertype"] == "user") {
            header("Location: Index.php");
            exit();
        } elseif ($row["usertype"] == "admin") {
            header("Location: Admin.php");
            exit();
        }
    } else {
        echo "username or password incorrect";
    }

    $stmt->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <div class="loginBox">
            <h1>Login</h1>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username" name="username" value="">
            </div>
            <div class="textbox2">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password" name="password" value="">
            </div>
            <input class="button" type="submit" name="Login" value="Sign-in">
        </div>
    </form>
</body>
</html>
