<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DTF Design Customizer | YASSS</title>

    <link rel="stylesheet" href="css/customizer.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>

<div class="customizer-container">

    <!-- LEFT SIDE -->
    <div class="preview-panel">

        <h2>T-Shirt Preview</h2>

        <div class="tshirt-box">

            <!-- T-Shirt Image -->
            <img
                src="../assets/images/products/t-shirt-001/tshirt-white-front.png"
                class="shirt"
                alt="White T-Shirt">

            <!-- Print Area -->
            <div class="print-area">

                <!-- Uploaded Design -->
                <img
                    id="designPreview"
                    class="design-preview"
                    src=""
                    alt="Design Preview"
                    draggable="false">

            </div>

        </div>

    </div>

    <!-- RIGHT SIDE -->
    <div class="control-panel">

        <h2>Design Analysis</h2>

        <div class="upload-box">

            <i class="fa-solid fa-cloud-arrow-up"></i>

            <p>Upload Your Design</p>

            <input
                type="file"
                id="designUpload"
                accept=".png,.jpg,.jpeg,.webp">

        </div>

        <div class="report">

            <p><strong>Resolution:</strong> <span id="resolution">--</span></p>

            <p><strong>File Size:</strong> <span id="filesize">--</span></p>

            <p><strong>File Type:</strong> <span id="filetype">--</span></p>

            <p><strong>Print Quality:</strong> <span id="quality">Waiting...</span></p>

        </div>

        <div class="design-controls">

            <button type="button" id="rotateLeft">
                <i class="fa-solid fa-rotate-left"></i>
            </button>

            <button type="button" id="rotateRight">
                <i class="fa-solid fa-rotate-right"></i>
            </button>

        </div>

        <button class="upload-btn" type="button">

            Continue

        </button>

    </div>

</div>

<script src="js/customizer.js"></script>

</body>
</html>