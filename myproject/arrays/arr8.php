<?php
require_once  '/var/www/html/myproject/webPages/header.php';
$mas = array('1', '2', '4', '4', '2', '5');
$mas2 = [];
$mas2 = array_unique($mas);

echo "<pre>";
print_r ($mas2);
echo "<pre>";
require_once  '/var/www/html/myproject/webPages/footer.php';