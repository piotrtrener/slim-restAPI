<?php

namespace App\Domain\Contact\Service;

use App\Domain\Contact\Repository\ContactCreatorRepository;

final class ContactCreator {

    private $repository;

    public function __construct(ContactCreatorRepository $repository) {

        $this->repository = $repository;

    }

    public function createContact(array $data): int {

        $contactId = $this->repository->insertContact($data);

        return $contactId;

    }

}