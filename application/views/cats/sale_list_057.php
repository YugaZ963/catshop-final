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
    <nav class="navbar navbar-expand-lg navbar-light shadow" style="height: 80px; background-color: #D2B48C;">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url() ?>">CATSHOP 057</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
                    <a class="nav-link" href="<?= site_url('cats057') ?>">Manage Cats</a>
                    <a class="nav-link" href="<?= site_url('categories057') ?>">Manage Categories</a>
                    <?php if ($this->session->userdata('usertype') == 'Manager') { ?>
                        <a class="nav-link" href="<?= site_url('users057') ?>">Manage User</a>
                        <a class="nav-link" href="<?= site_url('cats057/sales') ?>">Sales Report</a>
                    <?php  } ?>
                    <!-- Button untuk menampilkan burger menu -->
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#groupInfo" aria-expanded="false" aria-controls="groupInfo" style="height: fit-content;">
                        Account
                    </button>
                </div>
            </div>
        </div>
    </nav>
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
        <H4>SALES REPORT</H4>
        <hr>
        <table class="table">
            <tr>
                <th style="text-align: center;">No</th>
                <th style="text-align: center;">Sale ID</th>
                <th style="text-align: center;">Sale Date</th>
                <th style="text-align: center;">Cat ID</th>
                <th style="text-align: center;">Customer Name</th>
                <th style="text-align: center;">Customer Address</th>
                <th style="text-align: center;">Customer Phone</th>
            </tr>
            <?php $i = 1;
            foreach ($sales as $sale) { ?>
                <tr>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;"><?= $i++ ?></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;"><?= $sale->sale_id_057 ?></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;"><?= $sale->sale_date_057 ?></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;"><?= $sale->cat_id_057 ?></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;"><?= $sale->customer_name_057 ?></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;"><?= $sale->customer_address_057 ?></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;"><?= $sale->customer_phone_057 ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>