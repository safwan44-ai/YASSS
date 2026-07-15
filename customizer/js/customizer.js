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
   DESIGN STATE
========================== */

const designStates = {

    white: {

        front: {
            x: 65,
            y: 80,
            width: 170,
            rotation: 0
        },

        back: {
            x: 65,
            y: 80,
            width: 170,
            rotation: 0
        }

    },

    black: {

        front: {
            x: 65,
            y: 80,
            width: 170,
            rotation: 0
        },

        back: {
            x: 65,
            y: 80,
            width: 170,
            rotation: 0
        }

    },

    blue: {

        front: {
            x: 65,
            y: 80,
            width: 170,
            rotation: 0
        },

        back: {
            x: 65,
            y: 80,
            width: 170,
            rotation: 0
        }

    }

};
/* ==========================
   VIEW MANAGEMENT
========================== */

let currentView = "front";
let currentColor = "white";

/* ==========================
   UPLOAD IMAGE
========================== */

upload.addEventListener("change", function () {

    const file = this.files[0];

    if (!file) return;

    const imageURL = URL.createObjectURL(file);

     preview.src = URL.createObjectURL(file);
    preview.style.display = "block";

    currentWidth = 170;
    currentRotation = 0;
    posX = 65;
    posY = 80;

    preview.onload = function () {

        updatePreview();

    };

    /* Report */

    filesize.textContent = (file.size / 1024 / 1024).toFixed(2) + " MB";
    filetype.textContent = file.type;

    const img = new Image();

    img.onload = function () {

        resolution.textContent = `${img.width} × ${img.height}`;

        if (img.width >= 3000 && img.height >= 3000) {

            quality.textContent = "Excellent";
            quality.style.color = "green";

        } else if (img.width >= 2000) {

            quality.textContent = "Good";
            quality.style.color = "#ff9800";

        } else {

            quality.textContent = "Low Quality";
            quality.style.color = "red";

        }

    };

    img.src = imageURL;

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

    saveCurrentState();

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


/* ==========================
   FRONT / BACK LOGIC
========================== */

const frontBtn = document.getElementById("frontView");
const backBtn = document.getElementById("backView");
const shirt = document.querySelector(".shirt");

function changeShirtColor() {

    let imageName = "";

    if (currentColor === "white") {

        imageName = currentView === "front"
            ? "tshirt-white-front.png"
            : "tshirt-white-back.png";

    } else if (currentColor === "black") {

        imageName = currentView === "front"
            ? "tshirt-black-front.png"
            : "tshirt-black-back.png";

    } else {

        imageName = currentView === "front"
            ? "tshirt-blue-front.png"
            : "tshirt-blue-back.png";

    }

    shirt.src = "../assets/images/products/t-shirt-001/" + imageName;

}

frontBtn.addEventListener("click", function () {

    currentView = "front";

    loadCurrentState();

    changeShirtColor();

    frontBtn.classList.add("active-view");
    backBtn.classList.remove("active-view");

});

backBtn.addEventListener("click", function () {

    currentView = "back";

    loadCurrentState();

    changeShirtColor();

    backBtn.classList.add("active-view");
    frontBtn.classList.remove("active-view");

});
/* ==========================
   COLOR MANAGEMENT
========================== */



const whiteBtn = document.getElementById("whiteColor");
const blackBtn = document.getElementById("blackColor");
const blueBtn = document.getElementById("blueColor");

function updateColorButtons() {

    whiteBtn.classList.remove("active-color");
    blackBtn.classList.remove("active-color");
    blueBtn.classList.remove("active-color");

    if (currentColor === "white") {

        whiteBtn.classList.add("active-color");

    } else if (currentColor === "black") {

        blackBtn.classList.add("active-color");

    } else {

        blueBtn.classList.add("active-color");

    }

    changeShirtColor();

    loadCurrentState();
    shirt.onload = function () {
    loadCurrentState();
};

}

whiteBtn.addEventListener("click", function () {

    currentColor = "white";
    updateColorButtons();

});

blackBtn.addEventListener("click", function () {

    currentColor = "black";
    updateColorButtons();

});

blueBtn.addEventListener("click", function () {

    currentColor = "blue";
    updateColorButtons();

});

/* Initial State */
updateColorButtons();

function refreshCustomizer() {

    loadCurrentState();

}

function saveCurrentState() {

    designStates[currentColor][currentView] = {

        x: posX,
        y: posY,
        width: currentWidth,
        rotation: currentRotation

    };

}

function loadCurrentState() {

    const state = designStates[currentColor][currentView];

    posX = state.x;
    posY = state.y;
    currentWidth = state.width;
    currentRotation = state.rotation;

    preview.style.width = currentWidth + "px";
    preview.style.left = posX + "px";
    preview.style.top = posY + "px";
    preview.style.transform = `rotate(${currentRotation}deg)`;

    if (preview.src !== "") {

        preview.style.display = "block";

    }

}

/* ==========================
   Shirt Selection
========================== */

const shirtOptions=document.querySelectorAll(".shirt-option");

shirtOptions.forEach(function(option){

option.addEventListener("click",function(){

shirtOptions.forEach(function(item){

item.classList.remove("active-shirt");

});

this.classList.add("active-shirt");

const shirt=this.dataset.shirt;

if(currentView==="front"){

document.querySelector(".shirt").src=
`../assets/images/products/t-shirt-001/tshirt-${shirt}-front.png`;

}else{

document.querySelector(".shirt").src=
`../assets/images/products/t-shirt-001/tshirt-${shirt}-back.png`;

}

});

});