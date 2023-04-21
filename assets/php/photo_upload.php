<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_FILES['file'];
    $file_name = $file['name'];
    $file_size = $file['size'];
    $file_tmp_name = $file['tmp_name'];
    $file_error = $file['error'];
    $file_type = mime_content_type($file_tmp_name); // requires PHP 5.3 or higher

    // Check for errors
    if ($file_error !== UPLOAD_ERR_OK) {
        die('Error uploading file');
    }

    // Check file type
    if ($file_type !== 'image/jpeg' && $file_type !== 'image/png') {
        die('Invalid file type. Only JPEG and PNG files are allowed.');
    }

    // Move uploaded file to destination folder
    $destination = 'assets/uploads/' . $file_name;
    move_uploaded_file($file_tmp_name, $destination);

    // Return uploaded image URL and name as JSON response
    $response = array(
        'url' => $destination,
        'name' => $file_name
    );
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

?>
