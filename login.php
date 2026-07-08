<?php include("includes/header.php"); ?>

<link rel="stylesheet" href="assets/css/admin.css">

<main>

<section class="auth-page">

    <div class="container">

        <div class="auth-box">

            <h2>Login</h2>

            <form action="#" method="POST">

                <input type="email" placeholder="Email Address" name="email" required>

                <input type="password" placeholder="Password" name="password" required>

                <button type="submit" class="btn-primary">Login</button>

            </form>

            <p>Don't have an account? <a href="register.php">Register</a></p>

        </div>

    </div>

</section>

</main>

<?php include("includes/footer.php"); ?>