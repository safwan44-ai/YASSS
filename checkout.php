<?php include("includes/header.php"); ?>

<link rel="stylesheet" href="assets/css/checkout.css">

<main>

<section class="checkout-page">

    <div class="container">

        <div class="section-title">

            <h2>Checkout</h2>

            <p>Complete your order securely.</p>

        </div>

        <div class="checkout-container">

            <!-- Billing Information -->

            <div class="billing-details">

                <h3>Billing Details</h3>

                <form>

                    <input type="text" placeholder="Full Name">

                    <input type="email" placeholder="Email Address">

                    <input type="text" placeholder="Phone Number">

                    <input type="text" placeholder="District">

                    <input type="text" placeholder="City">

                    <textarea placeholder="Full Address"></textarea>

                </form>

            </div>

            <!-- Order Summary -->

            <div class="order-summary">

                <h3>Your Order</h3>

                <div class="summary-item">

                    <span>Anime Oversized Tee ×1</span>

                    <span>৳799</span>

                </div>

                <div class="summary-item">

                    <span>Football Tee ×2</span>

                    <span>৳1798</span>

                </div>

                <hr>

                <div class="summary-item">

                    <strong>Subtotal</strong>

                    <strong>৳2597</strong>

                </div>

                <div class="summary-item">

                    <strong>Delivery</strong>

                    <strong>৳80</strong>

                </div>

                <div class="summary-item total">

                    <strong>Total</strong>

                    <strong>৳2677</strong>

                </div>

                <h4>Payment Method</h4>

                <label><input type="radio" name="payment"> Cash On Delivery</label>

                <label><input type="radio" name="payment"> bKash</label>

                <label><input type="radio" name="payment"> Nagad</label>

                <label><input type="radio" name="payment"> Card Payment</label>

                <a href="#" class="btn-primary">

                    Place Order

                </a>

            </div>

        </div>

    </div>

</section>

</main>

<?php include("includes/footer.php"); ?>