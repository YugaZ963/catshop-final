<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<html>

<head>
    <title>Cat Shop Yuga</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
    <style>
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
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-5">
        <?= $this->session->flashdata('message'); ?>
        <div style="color: red"><?= validation_errors() ?></div>
        <!-- <form class="login-form" method="post" action="">
            <div class="mb-3">
                <label for="" class="">Username</label>
                <input type="text" class="" name="username" placeholder="Username">
            </div>
            <div class="mb-3">
                <label for="" class="">Password</label>
                <input type="password" class="" name="password" placeholder="Password" id="pass">&nbsp;
            </div>

            <input type="submit" class="btn-primary" name="login" value="LOGIN">
            <input type="submit" class="btn-secondary" name="reset" value="RESET">

        </form> -->

        <div class="container-fluid mt-5">
            <h4 style="text-align: center;">Login Page</h4>
            <?= $this->session->flashdata("message"); ?>
            <div style="color: red"><?= validation_errors() ?></div>

            <div class="container align-items-center mb-5">
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-6">
                        <div class="card" style="background-color: #8C9E80;">
                            <div class="card-body">
                                <h5 class="card-title text-center mb-4">Login Your Username and Password</h5>
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password" id="pass">
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
                                        <input type="submit" class="btn-primary" name="login" value="LOGIN">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script src="">
        function show() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>