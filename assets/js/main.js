jQuery(document).ready(function ($) {
    var mediaUploader;

    $('.cuisine-image-upload-button').on('click', function (e) {
        e.preventDefault();

        if (mediaUploader) {
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media({
            title: 'Select Image',
            button: {
                text: 'Use this image',
            },
            multiple: false,
        });

        mediaUploader.on('select', function () {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#cuisine-image').val(attachment.url);
            $('.cuisine-image-preview').html('<img src="' + attachment.url + '" style="max-width: 100px;" />');
        });

        mediaUploader.open();
    });
});
