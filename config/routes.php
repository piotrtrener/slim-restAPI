<?php
// use Psr\Http\Message\ResponseInterface as Response;
// use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;

return function (App $app) {

    $app->get('/', \App\Action\HomeAction::class);

    $app->post('/contact', \App\Action\ContactCreateAction::class);

    // $app->get('/', function(Request $request, Response $response): Response {
        
    //     $response->getBody()->write((string)json_encode(['test_JSON'=>true, 'test_JSON2'=> 34]));
        
    //     return $response->withHeader('Content-Type', 'application/json');

    // });
    
    // $app->get('/test-args/{id}', function(Request $request, Response $response, array $arr): Response {
        
    //     $id = (int)$arr['id'];

    //     $response->getBody()->write((string)json_encode(['przekazane_id'=> $id]));
        
    //     return $response->withHeader('Content-Type', 'application/json');

    // });
    
    // $app->post('/test-post', function(Request $request, Response $response): Response {
        
    //     $data = (array)$request->getParsedBody();

    //     $response->getBody()->write((string)json_encode($data));
        
    //     return $response->withHeader('Content-Type', 'application/json')->withStatus(200);

    // });
    
    // $app->post('/test-get-post/{id}/{name}', function(Request $request, Response $response, array $arr): Response {
        
    //     $param = (array)$arr;

    //     $data = (array)$request->getParsedBody();

    //     $merge = array_merge($data, $param);

    //     $response->getBody()->write((string)json_encode($merge));
        
    //     return $response->withHeader('Content-Type', 'application/json')->withStatus(200);

    // });





};
