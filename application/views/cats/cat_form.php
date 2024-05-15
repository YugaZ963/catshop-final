<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CATSHOP 057</title>
</head>

<body>
    <h1>CATSHOP 057</h1>
    <h3>CATS FORM</h3>
    <hr>
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

    <form action="" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name_057" value="<?= $name ?>" required></td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                    <select name="type_057" required>
                        <option value="">Choose type</option>
                        <?php foreach ($category as $cate) : ?>
                            <option value="<?= $cate->category_name_057 ?>" <?= set_select('type_057', $cate->category_name_057, $type == $cate->category_name_057 ? TRUE : FALSE) ?>><?= $cate->category_name_057 ?></option>
                        <?php endforeach; ?>
                        <!-- <option value="Angora" <?= set_select('type_057', 'Angora', $type == 'Angora' ? TRUE : FALSE) ?>>Angora</option>
                        <option value="Persia" <?= set_select('type_057', 'Persia', $type == 'Persia' ? TRUE : FALSE) ?>>Persia</option> -->
                    </select>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender_057" value="Male" <?= $gender == 'Male' ? 'checked' : '' ?>>Male
                    <input type="radio" name="gender_057" value="Female" <?= $gender == 'Female' ? 'checked' : '' ?>>Female
                </td>
            </tr>
            <tr>
                <td>Age (month)</td>
                <td><input type="number" name="age_057" value="<?= $age ?>" required></td>
            </tr>
            <tr>
                <td>Price ($)</td>
                <td><input type="number" name="price_057" value="<?= $price ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="SAVE" name="submit">
                    <a href="<?php echo site_url('cats057'); ?>"><input type="button" value="CANCEL"></a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>