

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
                $('html, body').animate({
                    scrollTop: $('#photos').offset().top
                }, 'slow');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        });
    });
});

  


//  Upload -----------------------------------------------------------------
$(document).ready(function() {
    $('#uploadForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: 'assets/php/photo_upload.php',
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                var img = $('<img>').attr('src', 'assets/php/' + response);
                img.addClass('photo');
                $('#response').append(img);
                $('#title').val('');
                $('#image').val('');
            },
            
            error: function(jqXHR, status, error) {
                console.log(status + ": " + error);
            }
        });
    });
});






  