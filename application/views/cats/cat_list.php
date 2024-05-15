<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CATSHOP 057</title>
</head>

<body>
    <h1>CATSHOP 057</h1>
    <h3>CATS LIST</h3>
    <a href="<?= base_url() ?>">
        <h4>Home</h4>
    </a>
    <?= $this->session->flashdata('message'); ?>
    <a href="<?= site_url('cats057/add') ?>">Add new cat</a>
    <hr>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Type</th>
            <th>Gender</th>
            <th>Age (month)</th>
            <th>Price($)</th>
            <th colspan="3">Action</th>
        </tr>
        <?php $i = 1;
        foreach ($cats as $cat) { ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $cat->name_057 ?></td>
                <td><?= $cat->type_057 ?></td>
                <td><?= $cat->gender_057 ?></td>
                <td><?= $cat->age_057 ?></td>
                <td><?= $cat->price_057 ?></td>
                <td><a href="<?= site_url('cats057/edit/' . $cat->id_057) ?>">Edit</a></td>
                <td><a href="<?= site_url('cats057/delete/' . $cat->id_057) ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
                <td>
                    <?php if ($cat->sold_057 == 1) {
                        echo
                        "Sold";
                    } else { ?>
                        <a href="<?= site_url('cats057/sale/' . $cat->id_057) ?>">Sale</a>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>