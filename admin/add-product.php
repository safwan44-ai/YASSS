<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Product | YASSS Admin</title>

    <link rel="stylesheet" href="../assets/css/admin.css">

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

    <!-- Main Content -->

    <main class="main-content">

        <div class="topbar">

            <h1>Add Product</h1>

        </div>

        <div class="form-card">

            <h2>Product Information</h2>

            <form>
               <div class="form-grid">

    <div class="form-group">
        <label>Product Name</label>
        <input type="text" placeholder="Enter Product Name">
    </div>

    <div class="form-group">
        <label>Category</label>
        <select>
            <option>Select Category</option>
            <option>Anime</option>
            <option>Football</option>
            <option>Gaming</option>
            <option>Islamic</option>
            <option>Movies & TV</option>
            <option>Custom Print</option>
        </select>
    </div>

    <div class="form-group">
        <label>Regular Price</label>
        <input type="number" placeholder="999">
    </div>

    <div class="form-group">
        <label>Sale Price</label>
        <input type="number" placeholder="799">
    </div>

    <div class="form-group">
        <label>Stock</label>
        <input type="number" placeholder="50">
    </div>

    <div class="form-group">
        <label>Featured Product</label>
        <select>
            <option>No</option>
            <option>Yes</option>
        </select>
    </div>

</div>

<div class="form-group">

    <label>Description</label>

    <textarea rows="6" placeholder="Write product description..."></textarea>

</div>

<div class="form-group">

    <label>Front Image</label>

    <input type="file">

</div>

<div class="form-group">

    <label>Back Image</label>

    <input type="file">

</div>

<button class="save-btn">
    <i class="fa-solid fa-floppy-disk"></i>
    Save Product
</button> 
            </form>

        </div>

    </main>

</div>

</body>

</html>