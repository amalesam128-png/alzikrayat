<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تطبيق الذكريات - Al-Zikrayat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: system-ui, -apple-system, sans-serif; }
        .sidebar { background-color: #ffffff; border-left: 1px solid #dee2e6; min-height: 100vh; }
        .photo-card img { height: 250px; object-fit: cover; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="/users">📸 الذكريات</a>
    <div class="d-flex">
      <?php if(isset($_SESSION['user_id'])): ?>
        <span class="navbar-text me-3 text-white">مرحباً، <?= htmlspecialchars($_SESSION['user_name']) ?></span>
        <a href="/upload" class="btn btn-sm btn-outline-light me-2">رفع صورة</a>
        <a href="/logout" class="btn btn-sm btn-danger">خروج</a>
      <?php else: ?>
        <a href="/login" class="btn btn-sm btn-outline-light me-2">دخول</a>
        <a href="/register" class="btn btn-sm btn-primary">تسجيل</a>
      <?php endif; ?>
    </div>
  </div>
</nav>
<div class="container-fluid">
<div class="row">
