<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fileName = $_POST['fileName'];
    $code = $_POST['code'];

    if (empty($fileName) || empty($code)) {
        echo "File name or code cannot be empty.";
        exit;
    }

    $filePath = 'saved_codes/' . $fileName . '.txt';

    if (file_put_contents($filePath, $code)) {
        echo "Code saved to $filePath.";
    } else {
        echo "Failed to save the code.";
    }
}
?>
