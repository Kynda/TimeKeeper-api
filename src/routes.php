<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/accounts', function (Request $request, Response $response, array $args) {
    return $response->withJson([
        'Administrative' => 'Administrative',
        'Research' => 'Research',
        'Sales' => 'Sales',
        'Server' => 'Server',
    ]);
});

$app->get('/tasks', function (Request $request, Response $response, array $args) {
    return $response->withJson([
        'GTD',
        'Meeting',
        'Billing',
        'Production',
    ]);
});

$app->get('/query', function (Request $request, Response $response, array $args) {
    $params = $request->getQueryParams();

    if (isset($params['account']) && $params['account'] === 'Administrative') {
        return $response->withJson([
            [
                'id'        => 1,
                'date'      => '2018-01-01',
                'startTime' => '08:00:00',
                'endTime'   => '08:30:00',
                'account'   => 'Administrative',
                'task'      => 'GTD',
                'notes'     => 'Empty',
                'billable'  => 'false',
            ],
        ]);
    } else {
        return $response->withJson([]);
    }
});

$app->post('/time', function (Request $request, Response $response, array $args) {
    // Create new time record.
    return $response;
});

$app->put('/time/{id}', function (Request $request, Response $response, array $args) {
    // Update the time record.
    return $response;
});

$app->delete('/time/{id}', function (Request $request, Response $response, array $args) {
    // Delete the time record.
    return $response;
});
