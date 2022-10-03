<?php

if (isset($_GET['key']) && $_GET['key'] == "rahasia") {
    header('Content-Disposition: attachment; filename="ss.png"');
    header('Content-Type: image/png');
    readfile(__DIR__ . '/file/ss.png');
    exit();
}else {
    echo "Invalid Key";
}