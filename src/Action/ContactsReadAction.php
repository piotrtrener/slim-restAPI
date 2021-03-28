<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Domain\Contact\Service\ContactsRead;

final class ContactsReadAction {

    private $contactsRead;

    public function __construct(ContactsRead $contactsRead) {

        $this->contactsRead = $contactsRead;

    }

    public function __invoke(Request $request, Response $response) : Response {

        $contacts = $this->contactsRead->getContacts();
        
        $response->getBody()->write((string)json_encode($contacts));
        
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);

    }
    
}
