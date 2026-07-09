const upload=document.getElementById("designUpload");

const preview=document.getElementById("designPreview");

upload.addEventListener("change",function(){

    const file=this.files[0];

    if(!file) return;

    const reader=new FileReader();

    reader.onload=function(e){

        preview.src=e.target.result;

        preview.style.display="block";

    }

    reader.readAsDataURL(file);

});