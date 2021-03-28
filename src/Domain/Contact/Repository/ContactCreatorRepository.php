<?php

namespace App\Domain\Contact\Repository;

use PDO;

final class ContactCreatorRepository {

    private $connection;

    public function __contruct(PDO $connection) {

        $this->connection = $connection;

    }

    public function insertContact(array $contact): int {

        $row = [
            'surname' => $contact['surname'],
            'firstName' => $contact['firstName'],
            'phoneNumber' => $contact['phoneNumber']
        ];

        $sql = "INSERT INTO contacts SET
            surname = :surname,
            firstName = :firstName,
            phoneNumber = :phoneNumber;";

        $this->connection->prepare($sql)->execute($row);

        return (int)$this->connection->lastInsertId();

    }
    
}