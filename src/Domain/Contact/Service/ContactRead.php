<?php

namespace App\Domain\Contact\Service;

use App\Domain\Contact\Repository\ContactReadRepository;

final class ContactRead {

    private $repository;

    public function __construct(ContactReadRepository $repository) {

        $this->repository = $repository;

    }

    public function getContact(int $id): array {

        $contact = $this->repository->getOneContact((int)$id);

        return (array)$contact;

    }

}