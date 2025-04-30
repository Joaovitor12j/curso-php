<?php

namespace App\Database;

use Dotenv\Dotenv;
use PDO;
use PDOException;

class Database {
    private string $db;
    private string $username;
    private string $password;

    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(dirname(__DIR__, 2));
        $dotenv->load();

        $this->db = $_ENV['DB_NAME'];
        $this->username = $_ENV['DB_USER'];
        $this->password = $_ENV['DB_PASS'];
    }

    public function getConnection(): ?PDO
    {
        $conn = null;

        try {
            $conn = new PDO(
                "mysql:host=db;port=3306;dbname=" . $this->db,
                $this->username,
                $this->password,
                [
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false
                ]
            );
        } catch(PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        return $conn;
    }
}
