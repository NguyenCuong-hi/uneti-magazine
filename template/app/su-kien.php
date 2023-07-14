<html>

</html>

<?php

use App\EventController;

require_once(BASE_PATH . '/template/app/layouts/header.php');

?>

<div class="body_getdata" style="display: flex;  margin-top: 30px; margin-right: 32px">
    <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>

    <div class="body_data" style="width: 62%; display: flex;  flex-direction: column; margin: 0 64px;
         padding: 4px; box-sizing: border-box">

        <?php foreach ($data as $datas): ?>

            <div style="display: flex; font-weight: 500; height: 200px; padding-bottom: 0.800px; margin-bottom: 18px;border-bottom: 2px dotted red">
                <div>
                    <img style="width: 286px; height: 190px" src="<?php echo $datas['image'] ?>">
                </div>

                <div style="padding-left: 20px">
                    <div style="font-size: 16px; font-weight: 500">
                    <span>
                        <a style=" font-weight: 600; font-size: 20px" href="#"> <?php echo $datas['title']; ?>
                            </a>
                    </span>

                        <div style="display: flex; font-weight: 300">
                            <div>
                                <?php echo date("d/m/Y", strtotime($datas['created_at'])); ?> |
                            </div>
                            <div>
                                <a href="" style="font-weight: 500">Chi tiết</a>
                            </div>
                        </div>

                        <div style=" margin:7px 0 ; font-size: 14px">
                            <div>
                                <?php echo $datas['summary'] ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <div class="img_lienket" style="width: 15%; ">
        <img style="width: 100%" src="./public/banner-image/bo-cong-thuong.png">
        <img style="width: 100%" src="./public/banner-image/DHKTKTCN.png">
        <img style="width: 100%" src="./public/banner-image/khcn.png">

    </div>

</div>

<?php
require_once(BASE_PATH . '/template/app/layouts/phantrang.php')
?>


<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>