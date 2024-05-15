<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<html>

<head>
    <title>Cat Shop Yuga</title>
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
        <h4 style="text-align: center;">Change Password</h4>
        <?= $this->session->flashdata("message"); ?>
        <!-- <div style="color: red"><?= validation_errors() ?></div>
        <form method="post" action="">
            <table>
                <tr>
                    <td>Old Password</td>
                    <td>: <input type="password" name="old_password" id="old" /></td>
                </tr>
                <tr>
                    <td>New Password</td>
                    <td>: <input type="password" name="new_password" id="new" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp; <input type="checkbox" onclick="showold()">Show Old Password</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp; <input type="checkbox" onclick="shownew()">Show New Password</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;
                        <input type="submit" name="change" value="CHANGE">
                        <input type="submit" name="reset" value="RESET">
                    </td>
                </tr>
            </table>
            <a class="btn btn-primary" href="<?= base_url() ?>">Cancel</a>
        </form> -->

        <div class="container align-items-center mb-5">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-6">
                    <div class="card" style="background-color: #8C9E80;">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-4">Change Your Password, Remember Okay. Don't Forget it !</h5>
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Old Password</label>
                                    <input type="password" class="form-control" name="old_password" id="old" />
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">New Password</label>
                                    <input type="password" class="form-control" name="new_password" id="new" />
                                </div>
                                <!-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" onclick="showold()">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Show Old Password
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" onclick="shownew()">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Show New Password
                                    </label>
                                </div> -->
                                <div class="d-grid gap-2">
                                    <input type="submit" name="change" class="btn btn-primary" value="CHANGE">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>">
        function showold() {
            var y = document.getElementById("old");
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
        }

        function shownew() {
            var x = document.getElementById("new");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>