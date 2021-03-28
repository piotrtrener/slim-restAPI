<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class HomeAction {

    public function __invoke(Request $request, Response $response) : Response {

        $response->getBody()->write((string)json_encode(['test_JSON'=>true, 'test_JSON2'=> 34]));
        
        return $response->withHeader('Content-Type', 'application/json');

    }
    
}

