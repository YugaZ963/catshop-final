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
        <h3 style="text-align: center;">SALES FORM</h3>

        <div class="container align-items-center mb-5">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-6">
                    <div class="card" style="background-color: #8C9E80;">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-4">Enter The Field To Buy This Cat</h5>
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Cat Id : </label>
                                    <label for="email" class="form-label"><?= $cat->id_057 ?></label>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Cat Name : </label>
                                    <label for="email" class="form-label"><?= $cat->name_057 ?></label>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Cat Type : </label>
                                    <label for="email" class="form-label"><?= $cat->type_057 ?></label>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Cat Price : </label>
                                    <label for="email" class="form-label"><?= $cat->price_057 ?></label>
                                </div>
                                <hr>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Customer Name</label>
                                    <input type="text" class="form-control" name="customer_name_057">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Customer Address</label>
                                    <textarea class="form-control" name="customer_address_057" id="" cols="30" rows="10"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Customer Phone</label>
                                    <td><input type="text" class="form-control" name="customer_phone_057"></td>
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