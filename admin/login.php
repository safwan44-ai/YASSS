<?php

session_start();

include __DIR__ . "/../config/database.php";

if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $_SESSION['admin'] = $username;

        header("Location: dashboard.php");
        exit();

    } else {

        $error = "Invalid Username or Password";

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>YASSS Admin Login</title>

    <link rel="stylesheet" href="../assets/css/admin.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>

<div class="login-container">

    <div class="login-box">

        <h2>YASSS Admin</h2>

        <p>Sign in to continue</p>

        <?php if (isset($error)) { ?>
            <p style="color:red;text-align:center;margin-bottom:20px;">
                <?php echo $error; ?>
            </p>
        <?php } ?>

        <form method="POST">

            <div class="input-group">
                <i class="fa-solid fa-user"></i>
                <input
                    type="text"
                    name="username"
                    placeholder="Username"
                    required>
            </div>

            <div class="input-group">
                <i class="fa-solid fa-lock"></i>
                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    required>
            </div>

            <button type="submit" name="login">
                Login
            </button>

        </form>

    </div>

</div>

</body>

</html>