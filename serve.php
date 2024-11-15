<?php
require __DIR__ . '/public/index.php';
$port = env('PORT', 8000);
$app->run($port, '127.0.0.1');
