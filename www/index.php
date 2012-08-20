<?php
include(__DIR__ . '/../lib/App.php');

$environ = getenv('GONZALO_ENVIRON');
$app = new App($environ);
echo $app->run();