<?= $this->extend('layout_clear2') ?>
<?= $this->section('content') ?>

<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'class' => 'form-control'
];

$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control'
];
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                <div class="card-body">
                    <?php if (session()->getFlashData('failed')) : ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashData('failed') ?>
                        </div>
                    <?php endif; ?>

                    <?= form_open('login') ?>
                        <div class="form-group">
                            <?= form_label('Username', 'username') ?>
                            <?= form_input($username) ?>
                        </div>
                        <div class="form-group">
                            <?= form_label('Password', 'password') ?>
                            <?= form_password($password) ?>
                        </div>
                        <br>
                        <div class="form-group">
                            <?= form_submit('submit', 'Login', ['class' => 'btn btn-primary w-100']) ?>
                        </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
