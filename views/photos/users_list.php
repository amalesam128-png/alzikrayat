<?php require __DIR__ . '/../layout/header.php'; ?>
<div class="col-md-3 sidebar p-3">
    <h5 class="fw-bold mb-3">قائمة المستخدمين</h5>
    <div class="list-group">
        <?php foreach($users as $u): ?>
            <a href="/photos/user/<?= $u['id'] ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <?= htmlspecialchars($u['first_name'] . ' ' . $u['last_name']) ?>
                <span class="badge bg-primary rounded-pill">عرض</span>
            </a>
        <?php endforeach; ?>
    </div>
</div>
<div class="col-md-9 p-4">
    <div class="alert alert-info">اختر مستخدماً من القائمة الجانبية لعرض معروضاته وذكرياته.</div>
</div>
<?php require __DIR__ . '/../layout/footer.php'; ?>
