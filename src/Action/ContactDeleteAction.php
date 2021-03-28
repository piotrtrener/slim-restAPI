<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Domain\Contact\Service\ContactDelete;

final class ContactDeleteAction {

    private $contactDelete;

    public function __construct(ContactDelete $contactDelete) {

        $this->contactDelete = $contactDelete;

    }

    public function __invoke(Request $request, Response $response, array $arr) : Response {

        $id = (int)$arr['id'];

        $this->contactDelete->deleteContact($id);
        
        $response->getBody()->write((string)json_encode(['delete' => 'ok']));
        
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);

    }
    
}
