// Prevent jQuery UI dialog from blocking focusin
$(document).on('focusin', function(e) {
    if ($(e.target).closest(".mce-window, .moxman-window").length) {
        e.stopImmediatePropagation();
    }
});

// Open dialog and add tinymce to it


$('textarea').tinymce({
    toolbar: 'link',
    plugins: 'link'
});
