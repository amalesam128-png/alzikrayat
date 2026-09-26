<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الملف الشخصي</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark px-3 mb-4 shadow-sm">
        <a class="navbar-brand fw-bold" href="/">📸 الذكريات</a>
        <a href="/" class="btn btn-outline-light btn-sm">الرئيسية</a>
    </nav>
    <div class="container">
        <?php if (!empty($user)): ?>
            <?php 
                $displayName = $user['name'] ?? $user['fullname'] ?? $user['username'] ?? $user['first_name'] ?? 'غير محدد';
            ?>
            <div class="card p-4 shadow-sm text-center mx-auto" style="max-width: 500px;">
                <div class="mb-3">
                    <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px; font-size: 36px;">
                        👤
                    </div>
                </div>
                <h3 class="fw-bold mb-1"><?= htmlspecialchars($displayName) ?></h3>
                <p class="text-muted mb-3">الملف الشخصي للمستخدم</p>
                <hr>
                <div class="text-start">
                    <p class="fs-6 mb-2"><strong>📧 البريد الإلكتروني:</strong> <?= htmlspecialchars($user['email'] ?? 'غير محدد') ?></p>
                    <?php if (isset($user['created_at'])): ?>
                        <p class="fs-6 mb-2"><strong>📅 تاريخ الانضمام:</strong> <?= htmlspecialchars($user['created_at']) ?></p>
                    <?php endif; ?>
                </div>
                <div class="mt-4">
                    <a href="/" class="btn btn-secondary btn-sm w-100">الرجوع للقائمة</a>
                </div>
            </div>
        <?php else: ?>
            <div class="alert alert-warning text-center">المستخدم غير موجود.</div>
        <?php endif; ?>
    </div>
</body>
</html>
