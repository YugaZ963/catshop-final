<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CATSHOP 057</title>
</head>
<body>
    <h1>CATSHOP 057</h1>
    <h3>CATEGOTY FORM</h3>
    <hr>
    <?php

    $name = '';
    $desc = '';


    if(isset($category)) { 
        $name = $category->category_name_057;
        $desc = $category->description_057;
    }
    ?>

    <form action="" method="post"> 
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name_057" value="<?=$name?>" required></td>
            </tr>
            <tr>
                <td>Description</td>
                <td>
                    <textarea name="desc_057" id="" cols="30" rows="10"><?=$desc?></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="SAVE" name="submit">
                    <a href="<?php echo site_url('categories057'); ?>"><input type="button" value="CANCEL"></a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>