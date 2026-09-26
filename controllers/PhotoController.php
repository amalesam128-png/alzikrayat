<?php
require_once __DIR__ . '/../models/Photo.php';
require_once __DIR__ . '/../models/Comment.php';
require_once __DIR__ . '/../models/User.php';

class PhotoController {
    private $photoModel;
    private $commentModel;
    private $userModel;

    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }
        $this->photoModel = new Photo();
        $this->commentModel = new Comment();
        $this->userModel = new User();
    }

    public function index() {
        $users = $this->userModel->getAll();
        require __DIR__ . '/../views/photos/users_list.php';
    }

    public function userPhotos($userId) {
        $targetUser = $this->userModel->findById($userId);
        if (!$targetUser) {
            http_response_code(404);
            echo "المستخدم غير موجود";
            return;
        }
        $photos = $this->photoModel->getByUserId($userId);
        require __DIR__ . '/../views/photos/user_photos.php';
    }

    public function show($photoId) {
        $photo = $this->photoModel->findById($photoId);
        if (!$photo) {
            http_response_code(404);
            echo "الصورة غير موجودة";
            return;
        }
        $comments = $this->commentModel->getByPhotoId($photoId);
        require __DIR__ . '/../views/photos/detail.php';
    }

    public function upload() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['photo'])) {
            $title = trim($_POST['title']);
            $description = trim($_POST['description']);
            $file = $_FILES['photo'];

            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
            $fileName = uniqid() . '.' . $ext;
            $uploadDir = __DIR__ . '/../public/uploads/';

            if (move_uploaded_file($file['tmp_name'], $uploadDir . $fileName)) {
                $this->photoModel->create($_SESSION['user_id'], $fileName, $title, $description);
                header('Location: /photos/user/' . $_SESSION['user_id']);
                exit;
            }
        }
        require __DIR__ . '/../views/photos/upload.php';
    }

    public function addComment($photoId) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['comment'])) {
            $this->commentModel->create($photoId, $_SESSION['user_id'], trim($_POST['comment']));
        }
        header('Location: /photo/' . $photoId);
        exit;
    }
}
