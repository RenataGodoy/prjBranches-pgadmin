<?php
require __DIR__ . '/public/index.php';
$port = env('PORT', 9000);
$app->run($port, '0.0.0.0');
