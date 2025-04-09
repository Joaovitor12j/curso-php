<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Database\Database;

try {
    $database = new Database();
    $db = $database->getConnection();

    if ($db) {
        echo "Conexão bem sucedida!\n";
        $stmt = $db->query("SELECT VERSION() as version");
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "Versão do MySQL: " . $row['version'] . "\n";
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage() . "\n";
}
