<?php

include_once __DIR__ . '/../src/App/functions.php';


$app = include __DIR__ . '/../src/App/bootstrap.php';

dd($app);

$app->run();
