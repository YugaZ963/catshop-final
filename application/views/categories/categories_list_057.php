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
        <h4>CATEGORIES LIST</h4>
        <a class="btn btn-primary" href="<?= site_url('categories057/add') ?>">Add new category</a>
        <hr>
        <table class="table">
            <tr>
                <th style="text-align: center;">No</th>
                <th style="text-align: center;">Name</th>
                <th style="text-align: center;">Desc</th>
                <th style="text-align: center;" colspan="2">Action</th>
            </tr>
            <?php $i = 1;
            foreach ($categories as $category) { ?>
                <tr>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;"><?= $i++ ?></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;"><?= $category->category_name_057 ?></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;"><?= $category->description_057 ?></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;"><a class="btn btn-warning" href="<?= site_url('categories057/edit/' . $category->category_id_057) ?>">Edit</a></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;"><a class="btn btn-danger" href="<?= site_url('categories057/delete/' . $category->category_id_057) ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>