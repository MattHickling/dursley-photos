<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_FILES['file'];
    $file_name = $file['name'];
    $file_size = $file['size'];
    $file_tmp_name = $file['tmp_name'];
    $file_error = $file['error'];
    $file_type = mime_content_type($file_tmp_name); 


    if ($file_error !== UPLOAD_ERR_OK) {
        die('Error uploading file');
    }


    if ($file_type !== 'image/jpeg' && $file_type !== 'image/png') {
        die('Invalid file type. Only JPEG and PNG files are allowed.');
    }


    $destination = 'assets/uploads/' . $file_name;
    move_uploaded_file($file_tmp_name, $destination);

  
    $response = array(
        'url' => $destination,
        'name' => $file_name
    );
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

?>
