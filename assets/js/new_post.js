$(document).ready(function() {
    let summernote_div;
    $('#summernote').summernote();
    let viewport_height = window.innerHeight;

    let header = document.querySelector('#header');
    let header_height = header ? header.offsetHeight : 0;

    let footer = document.querySelector('#footer');
    let footer_height = footer ? footer.offsetHeight : 0;

    let toolbar = document.querySelector('.note-toolbar');
    let toolbar_height = toolbar ? toolbar.offsetHeight : 0;

    let resize = document.querySelector('.note-statusbar');
    let resize_height = resize ? resize.offsetHeight : 0;

    let margins = 32;
    let total_height = viewport_height - header_height - footer_height - toolbar_height - resize_height - margins;

    $('#summernote').summernote('destroy');
    $('#summernote').summernote({
        height: total_height,
    });
});
