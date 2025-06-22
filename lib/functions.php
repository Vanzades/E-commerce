<?php
require_once __DIR__ . "/../vendor/autoload.php";

function getJSON($jsonResponse)
{
    $data = json_decode($jsonResponse);

    // Check if the JSON decoding was successful
    if ($data !== null) {
                                   // Access the values
        $success = $data->success; // true
        $message = $data->message; // "Update successful"

        // Now you can use $success and $message in your PHP code
        if ($success) {
            $val = true;
        } else {
            $val = false;
        }
    } else {
        // JSON parsing failed
        $val = "error";
    }
    return $val;
}

function base_url()
{
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/..");
    $dotenv->load();
    $base = $_ENV["BASE_URL"];
    return $base;
}

function controller_url()
{
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/..");
    $dotenv->load();
    $base = $_ENV["CONTROLLER_URL"];
    return $base;
}

function MenuList()
{
    // Ensure the directory path is correct
    $directory = controller_url();
    $mod_array = ['Login', 'Pinjamdetail', 'Users']; // Modul yang tidak dimasukkan ke Leftmenu

    // Validate directory path
    if (! is_dir($directory)) {
        error_log("Invalid directory path: " . $directory);
        return [];
    }

    // Get all .php files in the directory
    $files = glob($directory . '*.php');

    if ($files === false) {
        error_log("Error reading directory: " . $directory);
        return [];
    }

    // Remove directory path and .php extension
    $filenames = array_map(function ($file) {
        return basename($file, '.php');
    }, $files);

    // Filter out unwanted modules
    $filenames = array_filter($filenames, function ($mod) use ($mod_array) {
        return ! in_array($mod, $mod_array);
    });

    return array_values($filenames); // Re-index array after filtering
}

function ShowCheckBoxValue($val)
{
    if ($val === 0) {
        $result = "Tidak";
    } else {
        $result = "Ya";
    }
    return $result;
}

function setTheme()
{
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/..");
    $dotenv->load();
    $theme = $_ENV["THEME"];
    return $theme;
}

function getHeader($theme_name)
{
    include "../themes/" . $theme_name . "/header.php";
    include "../themes/" . $theme_name . "/leftmenu.php";
    include "../themes/" . $theme_name . "/topnav.php";
    include "../themes/" . $theme_name . "/upper_block.php";
}

function getFooter($theme_name, $extra)
{
    include "../themes/" . $theme_name . "/lower_block.php";
    echo $extra;
    include "../themes/" . $theme_name . "/footer.php";

    echo '</body>
    </html>';
}
function getHeaderLogin($theme_name)
{
    include "themes/" . $theme_name . "/headerlogin.php";
    // include "themes/" . $theme_name . "/leftmenulogin.php";
    // include "themes/" . $theme_name . "/topnav.php";
    // include "themes/" . $theme_name . "/upper_block.php";
}
function getHeaderRegister($theme_name)
{
    include "themes/" . $theme_name . "/headerlogin.php";
    include "themes/" . $theme_name . "/leftmenulogin.php";
    include "themes/" . $theme_name . "/topnav.php";
    include "themes/" . $theme_name . "/upper_block.php";
}

function getFooterLogin($theme_name, $extra)
{
    include "themes/" . $theme_name . "/lower_block.php";
    echo $extra;
    include "themes/" . $theme_name . "/footerlogin.php";

    echo '</body>
    </html>';
}
function getFilename()
{
    $host       = $_SERVER["HTTP_HOST"];
    $uri        = $_SERVER["REQUEST_URI"];
    $url        = "http://" . $host . $uri;
    $parsed_url = parse_url($url);

    // Get the path from the parsed URL
    $path = $parsed_url["path"];

    // Use pathinfo to extract the filename
    $file_info = pathinfo($path);

    // Get the filename
    $filename = $file_info["basename"];

    return $filename;
}

function generateRandomString($length = 7)
{
    // Get the current time in microseconds
    $time = microtime(true);

    // Use the current time to generate a random string
    // Convert the time to a string and hash it
    $hash = md5($time);

    // Take the first $length characters from the hash
    $randomString = substr($hash, 0, $length);

    return $randomString;
}

function createThumbnail($sourcePath, $targetPath, $maxWidth = 100, $maxHeight = 100)
{
    // Get image info
    list($width, $height, $type) = getimagesize($sourcePath);

    // Calculate new dimensions
    $ratio      = min($maxWidth / $width, $maxHeight / $height);
    $new_width  = round($width * $ratio);
    $new_height = round($height * $ratio);

    // Create new image
    $thumb = imagecreatetruecolor($new_width, $new_height);

    // Load source image based on file type
    switch ($type) {
        case IMAGETYPE_JPEG:
            $source = imagecreatefromjpeg($sourcePath);
            break;
        case IMAGETYPE_PNG:
            $source = imagecreatefrompng($sourcePath);
            // Preserve transparency
            imagealphablending($thumb, false);
            imagesavealpha($thumb, true);
            break;
        case IMAGETYPE_GIF:
            $source = imagecreatefromgif($sourcePath);
            break;
        default:
            return false;
    }

    // Resize image
    imagecopyresampled($thumb, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

    // Save thumbnail based on original file type
    switch ($type) {
        case IMAGETYPE_JPEG:
            imagejpeg($thumb, $targetPath, 90);
            break;
        case IMAGETYPE_PNG:
            imagepng($thumb, $targetPath, 9);
            break;
        case IMAGETYPE_GIF:
            imagegif($thumb, $targetPath);
            break;
    }

    // Free up memory
    imagedestroy($thumb);
    imagedestroy($source);

    return true;
}
