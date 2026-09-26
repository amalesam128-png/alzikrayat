<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الذكريات - الرئيسية</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark px-3 mb-4 shadow-sm">
        <a class="navbar-brand fw-bold" href="/">📸 الذكريات</a>
        <div>
            <?php if (isset($_SESSION['user'])): ?>
                <span class="text-white me-3">مرحباً، <?= htmlspecialchars($_SESSION['user']['name'] ?? $_SESSION['user']['fullname'] ?? $_SESSION['user']['username'] ?? $_SESSION['user']['email'] ?? 'زائر') ?></span>
                <a href="/logout" class="btn btn-danger btn-sm">خروج</a>
            <?php else: ?>
                <a href="/login" class="btn btn-primary btn-sm">تسجيل الدخول</a>
            <?php endif; ?>
        </div>
    </nav>
    <div class="container">
        <div class="card shadow-sm p-4">
            <h3 class="mb-4 text-primary">قائمة المستخدمين</h3>
            <div class="list-group">
                <?php if (!empty($users)): ?>
                    <?php foreach ($users as $u): ?>
                        <?php 
                            $displayName = $u['name'] ?? $u['fullname'] ?? $u['username'] ?? $u['first_name'] ?? $u['email'] ?? 'مستخدم';
                        ?>
                        <div class="list-group-item d-flex justify-content-between align-items-center py-3">
                            <span class="fs-5 fw-semibold text-secondary">👤 <?= htmlspecialchars($displayName) ?></span>
                            <a href="/user?id=<?= $u['id'] ?>" class="btn btn-outline-primary btn-sm px-4">عرض</a>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="alert alert-info">لا يوجد مستخدمين حالياً.</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
