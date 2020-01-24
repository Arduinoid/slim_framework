<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

use Controllers\HandlerFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

/**
 * ===============================
 * Routes and actions declarations
 * ===============================
 */
$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});
$app->get('/things', HandlerFactory::create(Controllers\ThingsController::class));

/**
 * ===================
 * Run the application
 * ===================
 */
$app->run();