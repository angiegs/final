$(document).ready(function() {
  $.uploadPreview2({
    input_field: "#image-upload2",   // Default: .image-upload
    preview_box: "#image-preview2",  // Default: .image-preview
    label_field: "#image-label2",    // Default: .image-label
    label_default: "Escoja una foto",   // Default: Choose File
    label_selected: "Cambiar foto",  // Default: Change File
    no_label: false                 // Default: false
  });
});

