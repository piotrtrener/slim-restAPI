<?php

namespace App\Domain\Contact\Repository;

use PDO;

final class ContactsReadRepository {

    private $connection;

    public function __construct(PDO $connection) {

        $this->connection = $connection;

    }

    public function getAllContacts(): array {

        $sql = "SELECT * FROM contacts;";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute();

        $data = $stmt->fetchAll();

        return (array) $data;

    }
    
}