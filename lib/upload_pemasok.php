<?php
header('Content-Type: application/json');
include "../controllers/Pemasok.php";
include "../lib/functions.php";

$obj      = new PemasokController();
$response = [];

if (! isset($_GET['id']) || empty($_GET['id'])) {
    $response['success'] = false;
    $response['message'] = 'ID is missing.';
    echo json_encode($response);
    exit;
}

$id         = $_GET['id'];
$upload_dir = '../images/';
$thumb_dir  = '../images/thumbs/';

// Create directories if they don't exist
if (! file_exists($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}
if (! file_exists($thumb_dir)) {
    mkdir($thumb_dir, 0777, true);
}

// Check file upload
if (! isset($_FILES['foto']) || $_FILES['foto']['error'] !== UPLOAD_ERR_OK) {
    $response['success'] = false;
    $response['message'] = 'No file uploaded or an error occurred.';
    echo json_encode($response);
    exit;
}

$file = $_FILES['foto'];

// Validate file type
$allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
if (! in_array($file['type'], $allowed_types)) {
    $response['success'] = false;
    $response['message'] = 'Invalid file type. Only JPG, PNG, and GIF are allowed.';
    echo json_encode($response);
    exit;
}

// Generate unique filename
$extension   = pathinfo($file['name'], PATHINFO_EXTENSION);
$filename    = uniqid() . '.' . $extension;
$target_path = $upload_dir . $filename;
$thumb_path  = $thumb_dir . $filename;

// Move uploaded file and create thumbnail
if (move_uploaded_file($file['tmp_name'], $target_path)) {
    if (! createThumbnail($target_path, $thumb_path)) {
        $response['success'] = false;
        $response['message'] = 'Failed to create thumbnail.';
        echo json_encode($response);
        exit;
    }

    // Update database
    if ($obj->updatefotoPemasok($id, $filename)) {
        $response['success']   = true;
        $response['message']   = 'Image uploaded successfully';
        $response['file_path'] = '/images/' . $filename;
    } else {
        $response['success'] = false;
        $response['message'] = 'Failed to update database.';
    }
} else {
    $response['success'] = false;
    $response['message'] = 'Failed to upload file.';
}

ob_end_clean(); // Clear any output buffer
echo json_encode($response);
exit;
