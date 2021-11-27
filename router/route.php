<?php
/** @noinspection PhpUnusedParameterInspection */
/** @noinspection StaticClosureCanBeUsedInspection */
declare(strict_types=1);

use ReallySimpleJWT\Token;
use Slim\App;
use Slim\Views\PhpRenderer;

return function (App $app) {

    $app->get('/', function ($request, $response, $args) {
        $renderer = new PhpRenderer(__DIR__ . '/../views/');
        return $renderer->render($response, 'index.php', []);
    });

    $app->get('/activity', function ($request, $response, $args) {
        $renderer = new PhpRenderer(__DIR__ . '/../views/');
        return $renderer->render($response, 'activity.php', []);
    });

    $app->get('/goals', function ($request, $response, $args) {
        $renderer = new PhpRenderer(__DIR__ . '/../views/');
        return $renderer->render($response, 'goals.php', []);
    });

    $app->get('/targets', function ($request, $response, $args) {
        $renderer = new PhpRenderer(__DIR__ . '/../views/');
        return $renderer->render($response, 'targets.php', []);
    });

    $app->get('/rideCompleted', function ($request, $response, $args) {
        $renderer = new PhpRenderer(__DIR__ . '/../views/');
        return $renderer->render($response, 'rideCompleted.php', []);
    });
};
