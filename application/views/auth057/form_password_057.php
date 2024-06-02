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