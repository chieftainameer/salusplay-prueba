const imageSelector = $('#thumbnail');
const previewThumbnail = $('#previewThumbnail');

imageSelector.on('change', e => imgPreview(e.target));

function imgPreview(input) {
    const file = input.files[0];
    if (!file) {
        previewThumbnail.attr('src', '');
        previewThumbnail.closest('.form-group').hide();
        imageSelector.attr('required', true);
        return;
    }
    const type = file['type'].split("/");
    const filetype = type[0]; // (image, video)
    if(filetype === "image"){
        const reader = new FileReader();
        reader.onload = function(e){
            previewThumbnail.closest('.form-group').show();
            previewThumbnail.attr("src", e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }else{
        alert("Invalid file type");
    }
}