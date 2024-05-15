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
        <h4>CATS LIST</h4>
        <?= $this->session->flashdata('message'); ?>
        <a class="btn btn-primary" href="<?= site_url('cats057/add') ?>">Add new cat
        </a>
        </button>
        <hr>
        <table class="table">
            <tr>
                <th style="text-align: center;">No</th>
                <th style="text-align: center;">Name</th>
                <th style="text-align: center;">Type</th>
                <th style="text-align: center;">Gender</th>
                <th style="text-align: center;">Age (month)</th>
                <th style="text-align: center;">Photo</th>
                <th style="text-align: center;">Price($)</th>
                <th style="text-align: center;" colspan="3">Action</th>
            </tr>
            <?php
            foreach ($cats as $cat) { ?>
                <tr>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;"><?= $i++ ?></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;"><?= $cat->name_057 ?></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;"><?= $cat->type_057 ?></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;"><?= $cat->gender_057 ?></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;"><?= $cat->age_057 ?></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;" align="center">
                        <img src="<?= base_url('uploads/cats/' . $cat->photo_057) ?>" alt="Foto Cat" width="50" height="50">
                        <a class="nav-link" style="color: #3F362A;" href="<?= site_url('cats057/changephoto/' . $cat->id_057) ?>">Change Photo</a>
                    </td>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;"><?= $cat->price_057 ?></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;"><a class="btn btn-warning" href="<?= site_url('cats057/edit/' . $cat->id_057) ?>">Edit</a></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;"><a class="btn btn-danger" href="<?= site_url('cats057/delete/' . $cat->id_057) ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 18px;">
                        <?php if ($cat->sold_057 == 1) {
                        ?> <p class="btn btn-secondary" disabled><?= "Sold"; ?></p> <?php

                                                                                } else { ?>
                            <a class="btn btn-info" href="<?= site_url('cats057/sale/' . $cat->id_057) ?>">Sale</a>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <p class="nav-link" style="color: #3F362A;"><?= $this->pagination->create_links(); ?></p>
            </ul>
        </nav>


    </div>

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>