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

        <?php

        $name = '';
        $type = '';
        $gender = '';
        $age = '';
        $price = '';


        if (isset($cat)) {
            $name = $cat->name_057;
            $type = $cat->type_057;
            $gender = $cat->gender_057;
            $age = $cat->age_057;
            $price = $cat->price_057;
        }
        ?>
        <div style="color: red"><?= validation_errors() ?></div>
        <h3 style="text-align: center;">CATS FORM</h3>

        <div class="container align-items-center mb-5">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-6">
                    <div class="card" style="background-color: #8C9E80;">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-4">Enter Cat Identity</h5>
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name_057" value="<?= $name ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Type</label>
                                    <select class="form-select" name="type_057">
                                        <option value="">Choose type</option>
                                        <?php foreach ($category as $cate) : ?>
                                            <option value="<?= $cate->category_name_057 ?>" <?= set_select('type_057', $cate->category_name_057, $type == $cate->category_name_057 ? TRUE : FALSE) ?>><?= $cate->category_name_057 ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Gender : </label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="gender_057" value="Male" <?= $gender == 'Male' ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="exampleRadios3"> Male </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="gender_057" value="Female" <?= $gender == 'Female' ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="exampleRadios3"> Female </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Age</label>
                                    <input type="number" class="form-control" name="age_057" value="<?= $age ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Price</label>
                                    <input type="number" class="form-control" name="price_057" value="<?= $price ?>">
                                </div>
                                <div class="d-grid gap-2">
                                    <input type="submit" name="submit" class="btn btn-primary"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>