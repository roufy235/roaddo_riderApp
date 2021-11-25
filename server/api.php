<?php
/** @noinspection PhpUnusedParameterInspection */
/** @noinspection StaticClosureCanBeUsedInspection */
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Routing\RouteContext as GetRoute;
use Slim\Psr7\Response as Res;
use Slim\App;

return function (App $app) {
    $apiBase = $_ENV['SERVER_API_ROUTE_BASE'];

    $tokenBasedAuthMiddleware = function (Request $request, RequestHandler $handler) {
        $newResponse = new Res();
        $verify = new DB();
        $bearerToken = TokenGenerator::getBearerToken($request->getHeaders()['Authorization'][0] ?? ''); // token
        if (TokenGenerator::validateToken($bearerToken)) {
            $tokenPayload = TokenGenerator::getPayload($bearerToken);
            $response = $handler->handle($request->withAttribute('tokenPayload', $tokenPayload));
            $routeResponse = $response->getBody();
            $verify->response = json_decode($routeResponse, true, 512, JSON_THROW_ON_ERROR);
        } else {
            $verify->response['statusStr'] = 'Invalid token';
        }
        return returnMyStatus($verify->response, $newResponse);
    };

    $app->get($apiBase.'/registration', function (Request $request, Response $response) {
        $hello = new DB();
        $responseArray = $hello->response;
        return returnMyStatus($responseArray, $response);
    });

};
