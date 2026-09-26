<?php
require_once __DIR__ . '/../config/database.php';

class Comment {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function create($photoId, $userId, $comment) {
        $stmt = $this->db->prepare("INSERT INTO comments (photo_id, user_id, comment) VALUES (?, ?, ?)");
        return $stmt->execute([$photoId, $userId, $comment]);
    }

    public function getByPhotoId($photoId) {
        $stmt = $this->db->prepare("SELECT comments.*, users.first_name, users.last_name FROM comments JOIN users ON comments.user_id = users.id WHERE photo_id = ? ORDER BY date_time ASC");
        $stmt->execute([$photoId]);
        return $stmt->fetchAll();
    }
}
