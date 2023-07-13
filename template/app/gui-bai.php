<html>

</html>

<style>
    body {
        justify-content: center;
        align-items: center;
        font-family: Arial, sans-serif;

    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    form {
    /*    width: 400px;*/
        padding: 20px;
        background-color: #f0f0f0;
        border-radius: 5px;
        margin-left: 30px;

    }

    .input_, textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #299be4;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #299be4;
    }
</style>
<?php

use App\SocioEconomicController;

require_once(BASE_PATH . '/template/app/layouts/header.php');

?>

<div class="body_getdata" style="display: flex;  margin-top: 30px; margin-right: 32px">
    <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>

    <div class="body_data" style="width: 62%; display: flex;  flex-direction: column;
         padding: 10px 50px; box-sizing: border-box">
        <div style="width: 100%; display: flex; justify-content: center">


            <form action="" method="post" enctype="multipart/form-data">
                <label for="email">Email của bạn</label>
                <input class="input_" type="email" id="email" name="email" required>

                <label for="file">Chọn file:</label>
                <input class="input_" type="file" id="file" name="file" required>

                <label for="content">Nội dung:</label>
                <textarea id="content" name="content" rows="4" cols="50" required></textarea>

                <input  class="input_" type="submit" value="Submit">
            </form>
        </div>

    </div>

    <div class="img_lienket" style="width: 15%; ">
        <img style="width: 100%" src="./public/banner-image/bo-cong-thuong.png">
        <img style="width: 100%" src="./public/banner-image/DHKTKTCN.png">
        <img style="width: 100%" src="./public/banner-image/khcn.png">
    </div>

</div>


<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>