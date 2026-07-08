<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>YASSS Admin Dashboard</title>

    <link rel="stylesheet" href="assets/css/admin.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>

<div class="admin-container">

    <!-- Sidebar -->

    <aside class="sidebar">

        <div class="logo">
            <h2>YASSS</h2>
            <span>Admin Panel</span>
        </div>

        <ul>

            <li class="active">
                <a href="dashboard.php">
                    <i class="fa-solid fa-house"></i>
                    Dashboard
                </a>
            </li>

            <li>
                <a href="products.php">
                    <i class="fa-solid fa-shirt"></i>
                    Products
                </a>
            </li>

            <li>
                <a href="orders.php">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Orders
                </a>
            </li>

            <li>
                <a href="customers.php">
                    <i class="fa-solid fa-users"></i>
                    Customers
                </a>
            </li>

            <li>
                <a href="parcels.php">
                    <i class="fa-solid fa-truck-fast"></i>
                    Parcels
                </a>
            </li>

            <li>
                <a href="sales.php">
                    <i class="fa-solid fa-chart-line"></i>
                    Sales
                </a>
            </li>

            <li>
                <a href="logout.php">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout
                </a>
            </li>

        </ul>

    </aside>

    <!-- Main -->

    <main class="main-content">

        <div class="topbar">

            <h1>Dashboard</h1>

            <div class="admin-user">
                <i class="fa-solid fa-user-circle"></i>
                Admin
            </div>

        </div>

        <!-- Cards -->

        <div class="dashboard-cards">

            <div class="card">
                <i class="fa-solid fa-sack-dollar"></i>
                <h3>Total Sales</h3>
                <h2>৳0</h2>
            </div>

            <div class="card">
                <i class="fa-solid fa-box"></i>
                <h3>Products</h3>
                <h2>0</h2>
            </div>

            <div class="card">
                <i class="fa-solid fa-cart-shopping"></i>
                <h3>Orders</h3>
                <h2>0</h2>
            </div>

            <div class="card">
                <i class="fa-solid fa-truck"></i>
                <h3>Parcels</h3>
                <h2>0</h2>
            </div>

        </div>

    </main>

</div>

</body>

</html>