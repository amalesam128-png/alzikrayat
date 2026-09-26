<?php require __DIR__ . '/../layout/header.php'; ?>
<div class="col-md-4 offset-md-4 mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white"><h4>تسجيل الدخول</h4></div>
        <div class="card-body">
            <?php if(isset($error)): ?><div class="alert alert-danger"><?= $error ?></div><?php endif; ?>
            <form action="/login" method="POST">
                <div class="mb-3"><input type="email" name="email" class="form-control" placeholder="البريد الإلكتروني" required></div>
                <div class="mb-3"><input type="password" name="password" class="form-control" placeholder="كلمة المرور" required></div>
                <button type="submit" class="btn btn-dark w-100">دخول</button>
            </form>
            <div class="mt-3 text-center"><a href="/register">ليس لديك حساب؟ سجل الآن</a></div>
        </div>
    </div>
</div>
<?php require __DIR__ . '/../layout/footer.php'; ?>
