<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CATSHOP 057</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
    <style>
        .hide-account {
            background-color: #C19A6B;
        }

        body {
            background-color: #C19A6B;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <?php $this->load->view('navbar/navbar'); ?>
    <!-- Daftar informasi grup yang disembunyikan -->
    <div class="collapse" id="groupInfo">
        <ul class="list-group">
            <li class="hide-account list-group-item">
                <h4>Welcome <?= $this->session->userdata('fullname'); ?>, You're Login as <?= $this->session->userdata('usertype') ?></h4>
                <img src="<?= base_url('uploads/users/' . $this->session->userdata('photo')); ?>" class="img-fluid" alt="" width="128" height="128">
            </li>
            <li class="hide-account list-group-item shadow">
                <a class="nav-link" style="color: #3F362A;" href="<?= site_url('auth057/changephoto') ?>">Change Photo</a>
            </li>
            <li class="hide-account list-group-item shadow">
                <a class="nav-link" style="color: #3F362A;" href="<?= site_url('auth057/changepass') ?>">Change Password</a>
            </li>
            <li class="hide-account list-group-item shadow">
                <a class="nav-link" style="color: #3F362A;" href="<?= site_url('auth057/logout') ?>">Logout</a>
            </li>
        </ul>
    </div>
    <div class="container-fluid mt-5">
        <div style="color: red"><?= validation_errors() ?></div>
        <h4 style="text-align: center;">USERS FORM</h4>
        <?php

        $username = '';
        $password = '';
        $usertype = '';
        $fullname = '';


        if (isset($user)) {
            $username = $user->username_057;
            $password = $user->password_057;
            $usertype = $user->usertype_057;
            $fullname = $user->fullname_057;
        }
        ?>

        <div class="container align-items-center mb-5">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-6">
                    <div class="card" style="background-color: #8C9E80;">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-4">Enter User Identity</h5>
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username_057" value="<?= $username ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">User Type : </label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="usertype_057" value="Manager" <?= $usertype == 'Manager' ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="exampleRadios3"> Manager </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="usertype_057" value="Cassier" <?= $usertype == 'Cassier' ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="exampleRadios3"> Cassier </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Fullname</label>
                                    <input type="text" class="form-control" name="fullname_057" value="<?= $fullname ?>">
                                </div>
                                <div class="d-grid gap-2">
                                    <input type="submit" value="SAVE" class="btn btn-primary" name="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="<?= base_url('assets/js/bootstrap.bundle.js') ?>"></script>
</body>

</html>