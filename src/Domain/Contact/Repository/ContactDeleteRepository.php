<?php

namespace App\Domain\Contact\Repository;

use PDO;

final class ContactDeleteRepository {

    private $connection;

    public function __construct(PDO $connection) {

        $this->connection = $connection;

    }

    public function deleteContact(int $id): void {

        $sql = "DELETE FROM contacts WHERE id = :id LIMIT 1;";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

    }
    
}