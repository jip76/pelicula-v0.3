<!-- app/Views/partials/_session.php -->
<?php if (session()->has('message')) : ?>
    <div class="alert alert-success">
        <?= session('message') ?>
    </div>
<?php endif; ?>
