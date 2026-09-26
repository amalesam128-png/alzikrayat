<?php require __DIR__ . '/../layout/header.php'; ?>
<div class="col-md-6 offset-md-3 mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white"><h4>إنشاء حساب جديد</h4></div>
        <div class="card-body">
            <?php if(isset($error)): ?><div class="alert alert-danger"><?= $error ?></div><?php endif; ?>
            <form action="/register" method="POST">
                <div class="row mb-3">
                    <div class="col"><input type="text" name="first_name" class="form-control" placeholder="الاسم الأول" required></div>
                    <div class="col"><input type="text" name="last_name" class="form-control" placeholder="الاسم الأخير" required></div>
                </div>
                <div class="mb-3"><input type="email" name="email" class="form-control" placeholder="البريد الإلكتروني" required></div>
                <div class="mb-3"><input type="password" name="password" class="form-control" placeholder="كلمة المرور" required></div>
                <div class="mb-3"><input type="text" name="location" class="form-control" placeholder="الموقع / المدينة"></div>
                <div class="mb-3"><input type="text" name="occupation" class="form-control" placeholder="المهنة"></div>
                <div class="mb-3"><textarea name="description" class="form-control" placeholder="نبذة عنك"></textarea></div>
                <button type="submit" class="btn btn-primary w-100">تسجيل الحساب</button>
            </form>
        </div>
    </div>
</div>
<?php require __DIR__ . '/../layout/footer.php'; ?>
