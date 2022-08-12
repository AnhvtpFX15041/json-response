<?php 
require_once __DIR__."/vendor/autoload.php";

use Devscreencast\ResponseClass\JsonResponse;
$student = array(
    'name' => 'John Doe',
    'course' => 'php',
    'level' => '20',
    'collection' => ['books' => 'Intro to PHP', 'music'=> 'rock']
);
new JsonResponse('unauthorized', '', $student);