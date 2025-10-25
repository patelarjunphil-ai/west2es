<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['file'])) {
    // Define the base directory for allowed file access
    $allowedBaseDirectory = realpath($_SERVER['DOCUMENT_ROOT'] . '/west2es/uploads');
    $filePath = $_GET['file'];

    // Sanitize and resolve the real path of the requested file
    $realPath = realpath($filePath);

    // Validate the resolved path
    // 1. Check if the file exists ($realPath is not false)
    // 2. Check if the file's path starts with the allowed directory path
    if ($realPath && strpos($realPath, $allowedBaseDirectory) === 0) {
        // Serve the file for download
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($realPath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($realPath));
        ob_clean(); // Clean (erase) the output buffer
        flush(); // Flush the system output buffer
        readfile($realPath);
        exit;
    } else {
        // Forbidden access or file does not exist
        http_response_code(403);
        echo "Error 403: Access denied or file not found.";
    }
} else {
    // Invalid request
    http_response_code(400);
    echo "Invalid request.";
}
?>
