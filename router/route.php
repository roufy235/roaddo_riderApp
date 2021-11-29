<?php
/** @noinspection PhpUnusedParameterInspection */
/** @noinspection StaticClosureCanBeUsedInspection */
declare(strict_types=1);

use DI\NotFoundException;
use ReallySimpleJWT\Token;
use Slim\App;
use Slim\Psr7\Response;
use Slim\Routing\RouteCollectorProxy;
use Slim\Routing\RouteContext;
use Slim\Views\PhpRenderer;
use Psr\Http\Message\ResponseInterface as ResponseHttp;
use Psr\Http\Message\ServerRequestInterface as RequestHttp;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;

return function (App $app) {

    $authenticatedMiddleware = function (RequestHttp $request, RequestHandler $handler): ResponseHttp {
        $response = new Response();
        $routeContext = RouteContext::fromRequest($request);
        $route = $routeContext->getRoute();
        if ($route === null) {
            throw new NotFoundException($request, $response);
        }
        if (!isLoggedIn()) {
            return $response->withStatus(200)->withHeader('Location', getBasePath());
        }
        return $handler->handle($request);
    };

    $app->get('/', function ($request, $response, $args) {
        $renderer = new PhpRenderer(__DIR__ . '/../views/');
        return $renderer->render($response, 'login.php', []);
    });

    $app->get('/home', function ($request, $response, $args) {
        $renderer = new PhpRenderer(__DIR__ . '/../views/');
        return $renderer->render($response, 'index.php', []);
    })->add($authenticatedMiddleware);

    $app->get('/activity', function ($request, $response, $args) {
        $renderer = new PhpRenderer(__DIR__ . '/../views/');
        return $renderer->render($response, 'activity.php', []);
    })->add($authenticatedMiddleware);

    $app->get('/goals', function ($request, $response, $args) {
        $renderer = new PhpRenderer(__DIR__ . '/../views/');
        return $renderer->render($response, 'goals.php', []);
    })->add($authenticatedMiddleware);

    $app->get('/targets', function ($request, $response, $args) {
        $renderer = new PhpRenderer(__DIR__ . '/../views/');
        return $renderer->render($response, 'targets.php', []);
    })->add($authenticatedMiddleware);

    $app->get('/rideCompleted', function ($request, $response, $args) {
        $renderer = new PhpRenderer(__DIR__ . '/../views/');
        return $renderer->render($response, 'rideCompleted.php', []);
    })->add($authenticatedMiddleware);
};
