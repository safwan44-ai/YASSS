<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DTF Design Customizer | YASSS</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/footer.css">

    <link rel="stylesheet" href="css/customizer.css">
    <link rel="stylesheet" href="css/preview.css">
    <link rel="stylesheet" href="css/controls.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
</head>

<body>

<?php include("../includes/header.php"); ?>

<div class="customizer-container">

    <!-- =========================
         LEFT PANEL
    ========================== -->

    <div class="preview-panel">

        <h2>T-Shirt Preview</h2>

        <!-- Front / Back Switch -->

        <div class="view-switch">

            <button
                id="frontView"
                class="active-view"
                type="button">

                Front

            </button>

            <button
                id="backView"
                type="button">

                Back

            </button>

        </div>

        <!-- T-Shirt Preview -->

        <div class="tshirt-box">

            <img class="shirt"
                    src="../assets/images/products/t-shirt-001/tshirt-white-front.png"
                    alt="Design Preview">

            <!-- Print Area -->

            <div class="print-area">

                <img
                    id="designPreview"
                    class="design-preview"
                    src=""
                    alt="Design Preview"
                    draggable="false">

            </div>

        </div>

    </div>

    <!-- =========================
         RIGHT PANEL
    ========================== -->

    <div class="control-panel">

        <h2>Design Analysis</h2>

        <!-- Upload -->

        <div class="upload-box">

            <i class="fa-solid fa-cloud-arrow-up"></i>

            <p>Upload Your Design</p>

            <input
                type="file"
                id="designUpload"
                accept=".png,.jpg,.jpeg,.webp">

        </div>

        <!-- Report -->

<div class="report">

    <p><strong>Resolution:</strong> <span id="resolution">--</span></p>

    <p><strong>File Size:</strong> <span id="filesize">--</span></p>

    <p><strong>File Type:</strong> <span id="filetype">--</span></p>

    <p><strong>Print Quality:</strong> <span id="quality">Waiting...</span></p>

</div>

<!-- =========================
     T-Shirt Color
========================= -->

<div class="color-section">

    <h3>T-Shirt Color</h3>

    <div class="color-options">

        <button
            id="whiteColor"
            class="color-btn active-color"
            type="button">

            White

        </button>

        <button
            id="blackColor"
            class="color-btn"
            type="button">

            Black

        </button>

        <button
            id="blueColor"
            class="color-btn"
            type="button">

            Blue

        </button>

    </div>

</div>

<!-- =========================
     Rotate Controls
========================= -->

<div class="design-controls">

    <button
        id="rotateLeft"
        type="button">

        <i class="fa-solid fa-rotate-left"></i>

    </button>

    <button
        id="rotateRight"
        type="button">

        <i class="fa-solid fa-rotate-right"></i>

    </button>

</div>

        <!-- Continue -->

        <button
            class="upload-btn"
            type="button">

            Continue

        </button>

    </div>

</div>

<?php include("../includes/footer.php"); ?>
<script src="js/customizer.js"></script>

</body>

</html>
