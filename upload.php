<?php
// Configuration
$key = "your key";
$dir = "your file directory name";

isset($_SERVER["HTTPS"]) ? $protocol = "https" : $protocol = "http";
if ($_SERVER["REQUEST_URI"] == "/robot.txt") die("User-Agent: *\nDisallow: /");

if (!is_dir(dir)) mkdir(dir, 0755);

if (isset($_POST["key"])) {
    if ($_POST["key"] == $key) {
        $parts = explode(".", $_FILES["d"]["name"]);
        $target = getcwd() . "/$dir/" . $_POST["name"] . "." . end($parts);
        
        if (move_uploaded_file($_FILES["d"]["tmp_name"], $target)) {
            $target_parts = explode("/i/", $target);
            echo "$protocol://" . $_SERVER["HTTP_HOST"] . "/$dir/" . end($target_parts);
        }
        
        else echo "Sorry, there was a problem uploading your file. (Ensure your directory has 777 permissions)";
    }
}

else header("HTTP/1.0 404 Not Found");
