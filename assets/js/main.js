

// AJAX call to retrieve photos----------------------------------------------
$(document).ready(function() {
    $('#search-button').click(function() {
        var searchQuery = $('#search-form').val();
        $.ajax({
            type: 'GET',
            url: 'assets/php/flickr.php',
            data: {
                query: searchQuery
            },
            success: function(response) {
                var photos = JSON.parse(response);
                var photoHTML = '';
                if (photos.length > 0) {
                    $.each(photos, function(index, photo) {
                        photoHTML += '<div class="photo"><img src="' + photo.url + '" alt="' + photo.title + '"><div class="caption">' + photo.title + '</div></div>';
                    });
                } else {
                    photoHTML = '<div class="no-results">No images found matching your search </div>';
                }
                $('#photos').html(photoHTML);
            }
            ,
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        });
    });
});

  


//  Upload -----------------------------------------------------------------
$('#upload-form').submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);

    // Make AJAX request to upload.php
    $.ajax({
        url: 'assets/php/photo_upload.php',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
            // Clear form
            $('#upload-form')[0].reset();

            // Display uploaded images
            var images = JSON.parse(data);
            var html = '';
            for (var i = 0; i < images.length; i++) {
                if (i % 3 == 0) {
                    html += '<div class="row">';
                }
                html += '<div class="col-md-4 mb-3">';
                html += '<div class="card">';
                html += '<img src="'+images[i].url+'" class="card-img-top" alt="'+images[i].name+'">';
                html += '<div class="card-body">';
                html += '<h5 class="card-title">'+images[i].name+'</h5>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                if ((i + 1) % 3 == 0) {
                    html += '</div>';
                }
            }
            $('#photos').html(html);
        },
        error: function() {
            alert('Error uploading file.');
        }
    });
});



  
  