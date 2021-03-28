<?php

namespace App\Domain\Contact\Service;

use App\Domain\Contact\Repository\ContactDeleteRepository;

final class ContactDelete {

    private $repository;

    public function __construct(ContactDeleteRepository $repository) {

        $this->repository = $repository;

    }

    public function deleteContact(int $id): void {

        $this->repository->deleteContact((int)$id);

    }

}