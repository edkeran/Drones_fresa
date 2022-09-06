function showPreviewImage(btnFileUpload){
    console.log("Entro funcion"); 
    let filesCarga = btnFileUpload.files;
    console.log(filesCarga);
    for(let i = 0; i < filesCarga.length; i++){
        let currentFile = filesCarga[i];
        console.log(filesCarga[i]);
        let readerFile = new FileReader();
        readerFile.readAsDataURL(currentFile);
        readerFile.onload = function(read){
            let resultBase64Image = readerFile.result;
            let divImage = document.querySelector("#previewImagesDiv");
            let imagePreview = new Image();
            imagePreview.src = resultBase64Image;
            imagePreview.style.width = '300px';
            imagePreview.style.marginLeft = '10px';
            divImage.appendChild(imagePreview);
        }
    }
}