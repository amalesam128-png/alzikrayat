<?php require __DIR__ . '/../layout/header.php'; ?>
<div class="col-md-6 offset-md-3 mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white"><h4>رفع صورة جديدة</h4></div>
        <div class="card-body">
            <form action="/upload" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">عنوان الصورة</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">الوصف</label>
                    <textarea name="description" class="form-control" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">اختر الملف</label>
                    <input type="file" name="photo" class="form-control" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-success w-100">رفع الآن</button>
            </form>
        </div>
    </div>
</div>
<?php require __DIR__ . '/../layout/footer.php'; ?>
