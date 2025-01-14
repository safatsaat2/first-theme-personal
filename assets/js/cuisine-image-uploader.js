document.addEventListener('DOMContentLoaded', function () {
    var mediaUploader;

    // Get the upload button and the input field
    var uploadButton = document.querySelector('.cuisine-image-upload-button');
    var imageInput = document.getElementById('cuisine-image');
    var previewDiv = document.querySelector('.cuisine-image-preview');

    if (uploadButton) {
        // Add event listener for the upload button
        uploadButton.addEventListener('click', function (e) {
            e.preventDefault();

            // If the uploader already exists, open it
            if (mediaUploader) {
                mediaUploader.open();
                return;
            }

            // Create a new media uploader
            mediaUploader = wp.media({
                title: 'Select Image',
                button: {
                    text: 'Use this image',
                },
                multiple: false, // Only allow one file
            });

            // When an image is selected
            mediaUploader.on('select', function () {
                var attachment = mediaUploader.state().get('selection').first().toJSON();
                // Set the input field value to the image URL
                imageInput.value = attachment.url;

                // Show the image in the preview div
                previewDiv.innerHTML = '<img src="' + attachment.url + '" style="max-width: 100px;" />';
            });

            // Open the media uploader
            mediaUploader.open();
        });
    }
});
