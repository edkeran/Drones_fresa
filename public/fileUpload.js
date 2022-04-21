function showPreviewImage(btnFileUpload){
    let filesCarga = btnFileUpload.files;
    for(let i = 0; i < filesCarga.length; i++){
        let currentFile = filesCarga[i];
        let readerFile = new FileReader();
        readerFile.readAsDataURL(currentFile);
        readerFile.onload = function(read){
            let resultBase64Image = readerFile.result;
            let divImage = document.querySelector("#previewImagesDiv");
            let imagePreview = new Image();
            imagePreview.src = resultBase64Image;
            divImage.appendChild(imagePreview);
        }
    }
}