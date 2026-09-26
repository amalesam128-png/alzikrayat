<?php
require_once '/data/data/com.termux/files/home/alzikrayat/models/User.php';

class AuthController {
    public function index() {
        $userModel = new User();
        $users = $userModel->getAll();
        
        $basePath = '/data/data/com.termux/files/home/alzikrayat/views/';
        if (file_exists($basePath . 'home.php')) {
            require_once $basePath . 'home.php';
        } else if (file_exists($basePath . 'index.php')) {
            require_once $basePath . 'index.php';
        } else if (file_exists($basePath . 'users.php')) {
            require_once $basePath . 'users.php';
        } else {
            echo "خطأ: لم يتم العثور على ملف الواجهة الرئيسية في مجلد views";
        }
    }

    public function registerForm() {
        require_once '/data/data/com.termux/files/home/alzikrayat/views/register.php';
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = new User();
            if ($userModel->findByEmail($_POST['email'])) {
                $error = "البريد الإلكتروني مستخدم بالفعل";
                require_once '/data/data/com.termux/files/home/alzikrayat/views/register.php';
                return;
            }
            $userModel->create($_POST);
            header('Location: /login');
            exit;
        }
    }

    public function loginForm() {
        require_once '/data/data/com.termux/files/home/alzikrayat/views/login.php';
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = new User();
            $user = $userModel->findByEmail($_POST['email']);
            if ($user && password_verify($_POST['password'], $user['password'])) {
                $_SESSION['user'] = $user;
                header('Location: /');
                exit;
            } else {
                $error = "بيانات الدخول غير صحيحة";
                require_once '/data/data/com.termux/files/home/alzikrayat/views/login.php';
            }
        }
    }

    public function logout() {
        session_destroy();
        header('Location: /login');
        exit;
    }

    public function show($id = null) {
        $id = $id ?? $_GET['id'] ?? null;
        $userModel = new User();
        $user = $userModel->findById($id);
        
        $basePath = '/data/data/com.termux/files/home/alzikrayat/views/';
        if (file_exists($basePath . 'profile.php')) {
            require_once $basePath . 'profile.php';
        } else if (file_exists($basePath . 'show.php')) {
            require_once $basePath . 'show.php';
        } else {
            echo "خطأ: ملف صفحة التفاصيل غير موجود في مجلد views";
        }
    }
}
