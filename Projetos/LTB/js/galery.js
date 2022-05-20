const galleryModal = document.querySelector(".gallery-modal");
const imgModal = document.querySelector(".gallery-modal img");

function openGallery(src){
    galleryModal.style.visibility = "visible";
    imgModal.style.transform = "scale(1)";
    imgModal.src = src
}

function closeGallery(){
    galleryModal.style.visibility = "hidden";
    imgModal.style.transform = "scale(0)";
}