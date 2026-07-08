<?php include("includes/header.php"); ?>

<link rel="stylesheet" href="assets/css/cart.css">

<main>

<section class="cart-page">

    <div class="container">

        <div class="section-title">

            <h2>Shopping Cart</h2>

            <p>Review your selected products.</p>

        </div>

        <table class="cart-table">

            <thead>

                <tr>

                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Remove</th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td class="cart-product">

                        <img src="assets/images/products/product1.jpg" alt="">

                        <span>Anime Oversized Tee</span>

                    </td>

                    <td>৳799</td>

                    <td>

                        <input type="number" value="1" min="1">

                    </td>

                    <td>৳799</td>

                    <td>

                        <a href="#"><i class="fa-solid fa-trash"></i></a>

                    </td>

                </tr>

                <tr>

                    <td class="cart-product">

                        <img src="assets/images/products/product2.jpg" alt="">

                        <span>Football Tee</span>

                    </td>

                    <td>৳899</td>

                    <td>

                        <input type="number" value="2" min="1">

                    </td>

                    <td>৳1798</td>

                    <td>

                        <a href="#"><i class="fa-solid fa-trash"></i></a>

                    </td>

                </tr>

            </tbody>

        </table>

        <div class="cart-bottom">

            <div class="coupon">

                <input type="text" placeholder="Coupon Code">

                <button class="btn-primary">

                    Apply Coupon

                </button>

            </div>

            <div class="cart-total">

                <h3>Cart Total</h3>

                <p>Subtotal : <strong>৳2597</strong></p>

                <p>Delivery : <strong>৳80</strong></p>

                <h2>Total : ৳2677</h2>

                <a href="checkout.php" class="btn-primary">

                    Proceed To Checkout

                </a>

            </div>

        </div>

    </div>

</section>

</main>

<?php include("includes/footer.php"); ?>