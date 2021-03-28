<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Domain\Contact\Service\ContactRead;

final class ContactReadAction {

    private $contactRead;

    public function __construct(ContactRead $contactRead) {

        $this->contactRead = $contactRead;

    }

    public function __invoke(Request $request, Response $response, array $arr) : Response {

        $id = (int)$arr['id'];

        $contact = $this->contactRead->getContact($id);
        
        $response->getBody()->write((string)json_encode($contact));
        
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);

    }
    
}
