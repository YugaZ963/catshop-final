<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CATSHOP 057</title>
</head>

<body>
    <h1>CATSHOP 057</h1>
    <h3>CATEGORIES LIST</h3>
    <a href="<?= base_url() ?>">
        <h4>Home</h4>
    </a>
    <a href="<?= site_url('categories057/add') ?>">Add new category</a>
    <hr>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Desc</th>
            <th colspan="2">Action</th>
        </tr>
        <?php $i = 1;
        foreach ($categories as $category) { ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $category->category_name_057 ?></td>
                <td><?= $category->description_057 ?></td>
                <td><a href="<?= site_url('categories057/edit/' . $category->category_id_057) ?>">Edit</a></td>
                <td><a href="<?= site_url('categories057/delete/' . $category->category_id_057) ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>