<?php require __DIR__ . '/../layout/header.php'; ?>
<div class="col-md-8 offset-md-2 mt-4">
    <div class="card shadow-sm">
        <img src="/uploads/<?= htmlspecialchars($photo['file_name']) ?>" class="card-img-top" style="max-height: 500px; object-fit: contain; background: #000;" alt="photo">
        <div class="card-body">
            <h3><?= htmlspecialchars($photo['title']) ?></h3>
            <p class="text-muted">بواسطة: <?= htmlspecialchars($photo['first_name'] . ' ' . $photo['last_name']) ?> | التاريخ: <?= $photo['date_time'] ?></p>
            <p><?= htmlspecialchars($photo['description']) ?></p>
            <hr>
            <h5>التعليقات</h5>
            <div class="mb-4">
                <?php foreach($comments as $c): ?>
                    <div class="p-2 mb-2 bg-light rounded border">
                        <strong><?= htmlspecialchars($c['first_name'] . ' ' . $c['last_name']) ?>:</strong>
                        <p class="mb-1"><?= htmlspecialchars($c['comment']) ?></p>
                        <small class="text-muted"><?= $c['date_time'] ?></small>
                    </div>
                <?php endforeach; ?>
            </div>
            <form action="/photo/<?= $photo['id'] ?>/comment" method="POST">
                <div class="input-group">
                    <input type="text" name="comment" class="form-control" placeholder="أضف تعليقاً..." required>
                    <button class="btn btn-primary" type="submit">إرسال</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require __DIR__ . '/../layout/footer.php'; ?>
