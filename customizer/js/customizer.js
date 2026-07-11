const upload = document.getElementById("designUpload");
const preview = document.getElementById("designPreview");

upload.addEventListener("change", function () {

    const file = this.files[0];

    if (!file) return;

    const url = URL.createObjectURL(file);

    preview.src = url;
    preview.style.display = "block";

});

console.log(upload);
console.log(preview);