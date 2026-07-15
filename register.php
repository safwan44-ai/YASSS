<?php

include("config/database.php");

if(isset($_POST['register'])){

    $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);

    if($_POST['password'] != $_POST['confirm_password']){

        echo "<script>alert('Passwords do not match!');</script>";

    }else{

        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $check = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");

        if(mysqli_num_rows($check)>0){

            echo "<script>alert('Email already exists!');</script>";

        }else{

            mysqli_query($conn,"INSERT INTO users(fullname,email,phone,password)
            VALUES('$fullname','$email','$phone','$password')");

            echo "<script>alert('Registration Successful'); window.location='login.php';</script>";

        }

    }

}

?>
<?php include("includes/header.php"); ?>

<link rel="stylesheet" href="assets/css/login.css">

<main class="login-page register-page">

<div class="login-container">

    <div class="login-left">

        <h1>Join YASSS</h1>

        <p>Create your account and start shopping premium fashion.</p>

    </div>

    <div class="login-right">

        <form method="POST">

            <h2>Create Account</h2>

                <input type="text" name="fullname" placeholder="Full Name" required>

                <input type="email" name="email" placeholder="Email Address" required>

                <input type="tel" name="phone" placeholder="Phone Number" required>

                <input type="password" name="password" placeholder="Password" required>

                <input type="password" name="confirm_password" placeholder="Confirm Password" required>

            <button type="submit" name="register" class="btn-primary">
                Create Account
            </button>

            <p>
                Already have an account?
                <a href="login.php">Login</a>
            </p>

        </form>

    </div>

</div>

</main>

<?php include("includes/footer.php"); ?>