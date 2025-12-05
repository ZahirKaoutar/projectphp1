
<?php

$json = file_get_contents(__DIR__ . '/../data/file.json');
$services = json_decode($json, true);



$content = __DIR__ . '/../views/services.views.php';





include __DIR__ . '/../templates/Layout.php';