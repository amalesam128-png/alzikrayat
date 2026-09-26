<?php
require_once __DIR__ . '/../config/database.php';

class Photo {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function create($userId, $fileName, $title, $description) {
        $stmt = $this->db->prepare("INSERT INTO photos (user_id, file_name, title, description) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$userId, $fileName, $title, $description]);
    }

    public function getByUserId($userId) {
        $stmt = $this->db->prepare("SELECT * FROM photos WHERE user_id = ? ORDER BY date_time DESC");
        $stmt->execute([$userId]);
        return $stmt->fetchAll();
    }

    public function findById($id) {
        $stmt = $this->db->prepare("SELECT photos.*, users.first_name, users.last_name FROM photos JOIN users ON photos.user_id = users.id WHERE photos.id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
