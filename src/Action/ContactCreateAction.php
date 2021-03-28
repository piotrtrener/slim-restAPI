<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Domain\Contact\Service\ContactCreator;

final class ContactCreateAction {

    private $contactCreator;

    public function __construct(ContactCreator $contactCreator) {

        $this->contactCreator = $contactCreator;

    }

    public function __invoke(Request $request, Response $response) : Response {

        $data = (array)$request->getParsedBody();

        $contactId = $this->contactCreator->createContact($data);

        $result = [
            'insert_id' => $contactId
        ];
        
        $response->getBody()->write((string)json_encode($result));
        
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);

    }
    
}
