<?php require __DIR__ . '/../layout/header.php'; ?>
<div class="col-md-12 p-4">
    <h3 class="mb-2">ذكريات: <?= htmlspecialchars($targetUser['first_name'] . ' ' . $targetUser['last_name']) ?></h3>
    <p class="text-muted mb-4"><?= htmlspecialchars($targetUser['description'] ?? '') ?> | الموقع: <?= htmlspecialchars($targetUser['location'] ?? 'غير محدد') ?></p>
    <hr>
    <div class="row">
        <?php foreach($photos as $photo): ?>
            <div class="col-md-4 mb-4">
                <div class="card photo-card shadow-sm">
                    <img src="/uploads/<?= htmlspecialchars($photo['file_name']) ?>" class="card-img-top" alt="photo">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($photo['title']) ?></h5>
                        <p class="card-text text-truncate"><?= htmlspecialchars($photo['description']) ?></p>
                        <a href="/photo/<?= $photo['id'] ?>" class="btn btn-sm btn-primary w-100">عرض التاصيل والتعليقات</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php if(empty($photos)): ?>
            <div class="col-12"><div class="alert alert-warning">لا توجد صور مضافة لهذا المستخدم بعد.</div></div>
        <?php endif; ?>
    </div>
</div>
<?php require __DIR__ . '/../layout/footer.php'; ?>
