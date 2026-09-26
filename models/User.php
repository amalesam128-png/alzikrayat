<?php
require_once __DIR__ . '/../config/database.php';

class User {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function create($firstName, $lastName, $email, $password, $location = null, $description = null, $occupation = null) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->db->prepare("INSERT INTO users (first_name, last_name, email, password, location, description, occupation) VALUES (?, ?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$firstName, $lastName, $email, $hashedPassword, $location, $description, $occupation]);
    }

public function findByEmail($email) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }

    public function findById($id) {
        $stmt = $this->db->prepare("SELECT id, first_name, last_name, email, location, description, occupation FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT id, first_name, last_name FROM users");
        return $stmt->fetchAll();
    }
}
