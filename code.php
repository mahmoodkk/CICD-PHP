<?php
if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
    $clientIP = $_SERVER["HTTP_X_FORWARDED_FOR"];
} else {
    $clientIP = $_SERVER["REMOTE_ADDR"];
}

echo "Client's IP address: " . $clientIP;



?>