<?php
require_once 'functions/db_connection.php';

try {
    $sql = file_get_contents('migration.sql');
    $pdo->exec($sql);
    echo "Database migration successful!";
} catch (PDOException $e) {
    die("Database migration failed: " . $e->getMessage());
}
