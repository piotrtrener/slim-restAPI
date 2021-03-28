<?php

namespace App\Domain\Contact\Service;

use App\Domain\Contact\Repository\ContactsReadRepository;

final class ContactsRead {

    private $repository;

    public function __construct(ContactsReadRepository $repository) {

        $this->repository = $repository;

    }

    public function getContacts(): array {

        $contacts = $this->repository->getAllContacts();

        return (array)$contacts;

    }

}