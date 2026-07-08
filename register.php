<?php include("includes/header.php"); ?>

<link rel="stylesheet" href="assets/css/login.css">

<main>

<section class="auth-page">

    <div class="container">

        <div class="auth-box">

            <h2>Register</h2>

            <form action="#" method="POST">

                <input type="text" placeholder="Full Name" name="name" required>

                <input type="email" placeholder="Email Address" name="email" required>

                <input type="password" placeholder="Password" name="password" required>

                <input type="password" placeholder="Confirm Password" name="confirm_password" required>

                <button type="submit" class="btn-primary">Create Account</button>

            </form>

            <p>Already have an account? <a href="login.php">Login</a></p>

        </div>

    </div>

</section>

</main>

<?php include("includes/footer.php"); ?>