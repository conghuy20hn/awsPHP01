<?php

require 'vendor/autoload.php';

function ServiceHandler()
{
    $data = new stdClass();
    $data->Output = "Hello World! ServiceHandler";

    return json_encode($data);
}

;

$app = new \Slim\App;

$app->get('/', 'ServiceHandler');
$app->post('/', 'ServiceHandler');


$app->get('/books', function ($request, $response, $args) {
    // Show book identified by $args['id']
    $data = new stdClass();
    $data->Output = ["book1", "book2"];

    return json_encode($data);
});


$app->run();
