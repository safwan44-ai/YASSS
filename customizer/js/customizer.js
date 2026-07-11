/* ==========================
   YASSS DTF CUSTOMIZER
========================== */

const upload = document.getElementById("designUpload");
const preview = document.getElementById("designPreview");
const printArea = document.querySelector(".print-area");

const rotateLeft = document.getElementById("rotateLeft");
const rotateRight = document.getElementById("rotateRight");

const resolution = document.getElementById("resolution");
const filesize = document.getElementById("filesize");
const filetype = document.getElementById("filetype");
const quality = document.getElementById("quality");

/* ==========================
   VARIABLES
========================== */

let currentWidth = 170;
let currentRotation = 0;

let posX = 65;
let posY = 80;

let dragging = false;
let offsetX = 0;
let offsetY = 0;

/* ==========================
   UPLOAD IMAGE
========================== */

upload.addEventListener("change", function () {

    const file = this.files[0];

    if (!file) return;

    preview.src = URL.createObjectURL(file);

    preview.style.display = "block";

    currentWidth = 170;
    currentRotation = 0;

    posX = 65;
    posY = 80;

    updatePreview();

    /* Report */

    filesize.textContent =
        (file.size / 1024 / 1024).toFixed(2) + " MB";

    filetype.textContent = file.type;

    const img = new Image();

    img.onload = function () {

        resolution.textContent =
            img.width + " × " + img.height;

        if (img.width >= 3000 && img.height >= 3000) {

            quality.textContent = "Excellent";

            quality.style.color = "green";

        }

        else if (img.width >= 2000) {

            quality.textContent = "Good";

            quality.style.color = "#ff9800";

        }

        else {

            quality.textContent = "Low Quality";

            quality.style.color = "red";

        }

    }

    img.src = URL.createObjectURL(file);

});

/* ==========================
   UPDATE PREVIEW
========================== */

function updatePreview() {

    preview.style.width = currentWidth + "px";

    preview.style.left = posX + "px";

    preview.style.top = posY + "px";

    preview.style.transform =
        `rotate(${currentRotation}deg)`;

}

/* ==========================
   DRAG
========================== */

preview.addEventListener("mousedown", function (e) {

    dragging = true;

    offsetX = e.offsetX;

    offsetY = e.offsetY;

});

document.addEventListener("mousemove", function (e) {

    if (!dragging) return;

    const rect = printArea.getBoundingClientRect();

    posX = e.clientX - rect.left - offsetX;

    posY = e.clientY - rect.top - offsetY;

    /* Boundary */

    const maxX = printArea.clientWidth - preview.offsetWidth;

    const maxY = printArea.clientHeight - preview.offsetHeight;

    if (posX < 0) posX = 0;

    if (posY < 0) posY = 0;

    if (posX > maxX) posX = maxX;

    if (posY > maxY) posY = maxY;

    updatePreview();

});

document.addEventListener("mouseup", function () {

    dragging = false;

});

/* ==========================
   RESIZE
========================== */

preview.addEventListener("wheel", function (e) {

    e.preventDefault();

    if (e.deltaY < 0)

        currentWidth += 10;

    else

        currentWidth -= 10;

    if (currentWidth < 60)

        currentWidth = 60;

    if (currentWidth > 350)

        currentWidth = 350;

    updatePreview();

});

/* ==========================
   ROTATE
========================== */

rotateLeft.addEventListener("click", function () {

    currentRotation -= 15;

    updatePreview();

});

rotateRight.addEventListener("click", function () {

    currentRotation += 15;

    updatePreview();

});