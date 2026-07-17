<?php
include("config/auth.php");
include("includes/header.php");
?>

<link rel="stylesheet" href="assets/css/login.css">

<main class="login-page">

<div class="login-container">

    <div class="login-left">

        <h1>My Account</h1>

        <p>Welcome Back,
            <strong><?php echo $_SESSION['user_name']; ?></strong>
        </p>

    </div>

    <div class="login-right">

        <h2>Profile Information</h2>

        <p><strong>Name:</strong> <?php echo $_SESSION['user_name']; ?></p>

        <p><strong>Email:</strong> <?php echo $_SESSION['user_email']; ?></p>

        <br>

        <a href="logout.php" class="btn-primary">
            Logout
        </a>

    </div>

</div>

</main>

<?php include("includes/footer.php"); ?>