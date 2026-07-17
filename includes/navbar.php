<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>
<nav class="navbar">

    <div class="container nav-container">

        <div class="logo">
            <a href="/YASSS/index.php">
                <img src="/YASSS/assets/images/logo/logo.png" alt="YASSS Logo">
            </a>
        </div>

        <ul class="nav-menu">
            <li><a href="/YASSS/index.php">Home</a></li>
            <li><a href="/YASSS/shop.php">Shop</a></li>
            <li><a href="/YASSS/customizer/index.php">Customize</a></li>
            <li><a href="/YASSS/shop.php">Collections</a></li>
            <li><a href="/YASSS/pages/about.php">About</a></li>
            <li><a href="/YASSS/pages/contact.php">Contact</a></li>
        </ul>

       <div class="nav-icons">

    <a href="#">
        <i class="fa-solid fa-magnifying-glass"></i>
    </a>

    <a href="/YASSS/pages/wishlist.php">
        <i class="fa-regular fa-heart"></i>
    </a>

    <a href="/YASSS/cart.php">
        <i class="fa-solid fa-cart-shopping"></i>
    </a>

    <?php if(isset($_SESSION['user_id'])){ ?>

    <a href="/YASSS/account.php" title="<?php echo $_SESSION['user_name']; ?>">
        <i class="fa-solid fa-user-check"></i>
    </a>

    <a href="/YASSS/logout.php" title="Logout">
        <i class="fa-solid fa-right-from-bracket"></i>
    </a>

    <?php }else{ ?>

    <a href="/YASSS/login.php" title="Login">
        <i class="fa-regular fa-user"></i>
    </a>

    <?php } ?>

</div>

    </div>

</nav>