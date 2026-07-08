<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Products | YASSS Admin</title>

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

            <li>
                <a href="dashboard.php">
                    <i class="fa-solid fa-house"></i>
                    Dashboard
                </a>
            </li>

            <li class="active">
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

        </ul>

    </aside>

    <!-- Main -->

    <main class="main-content">

        <div class="topbar">

            <h1>Products</h1>

            <a href="#" class="add-btn">
                <i class="fa-solid fa-plus"></i>
                Add Product
            </a>

        </div>

        <table class="product-table">

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Action</th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td>1</td>

                    <td>
                        <img src="../assets/images/products/product1.jpg">
                    </td>

                    <td>Anime Oversized Tee</td>

                    <td>৳799</td>

                    <td>15</td>

                    <td>

                        <button class="edit-btn">
                            Edit
                        </button>

                        <button class="delete-btn">
                            Delete
                        </button>

                    </td>

                </tr>

            </tbody>

        </table>

    </main>

</div>

</body>

</html>