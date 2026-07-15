<?php
session_start();

include("config/database.php");

if(isset($_POST['login'])){

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = $_POST['password'];

    $query = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");

    if(mysqli_num_rows($query)>0){

        $user = mysqli_fetch_assoc($query);

        if(password_verify($password,$user['password'])){

            $_SESSION['user_id']=$user['id'];
            $_SESSION['user_name']=$user['fullname'];
            $_SESSION['user_email']=$user['email'];

            header("Location:index.php");
            exit();

        }else{

            echo "<script>alert('Incorrect Password');</script>";

        }

    }else{

        echo "<script>alert('Email Not Found');</script>";

    }

}
?>
<?php include("includes/header.php"); ?>

<link rel="stylesheet" href="assets/css/login.css">

<main class="login-page">

<div class="login-container">

    <div class="login-left">

        <h1>Welcome Back</h1>

        <p>Login to your YASSS account and continue shopping.</p>

       

    </div>

    <div class="login-right">

        <form method="POST">

            <h2>Sign In</h2>

            <input type="email"
                   name="email"
                   placeholder="Email Address"
                   required>

            <input type="password"
                   name="password"
                   placeholder="Password"
                   required>

            <div class="login-options">

                <label>

                    <input type="checkbox">

                    Remember Me

                </label>

                <a href="#">Forgot Password?</a>

            </div>

            <button type="submit" name="login" class="btn-primary">
                    Login
            
            </button>>

            <p>

                Don't have an account?

                <a href="register.php">

                    Register

                </a>

            </p>

        </form>

    </div>

</div>

</main>

<?php include("includes/footer.php"); ?>