<?php

namespace App\Domain\Contact\Repository;

use PDO;

final class ContactReadRepository {

    private $connection;

    public function __construct(PDO $connection) {

        $this->connection = $connection;

    }

    public function getOneContact(int $id): array {

        $sql = "SELECT * FROM contacts WHERE id = :id;";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

        $data = $stmt->fetch();

        return (array) $data;

    }
    
}