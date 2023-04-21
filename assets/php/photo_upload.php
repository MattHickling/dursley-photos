<?php
if (isset($_FILES['image'])) {
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $title = $_POST['title'];

    $extensions = array("jpeg", "jpg", "png");
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    if (!in_array($file_ext, $extensions)) {
        echo "Extension not allowed, please choose a JPEG, JPG or PNG file.";
    } elseif ($file_size > 2097152) {
        echo "File size must be exactly or less than 2 MB.";
    } else {
        $upload_dir = "uploads/";
        $new_file_name = uniqid('', true) . "." . $file_ext;

        if (move_uploaded_file($file_tmp, $upload_dir . $new_file_name)) {
            // Insert the filename and title into a database or write to a file here
            $image_url = $upload_dir . $new_file_name;
            echo $image_url;
        } else {
            echo "Error uploading image.";
        }
    }
}
?>
