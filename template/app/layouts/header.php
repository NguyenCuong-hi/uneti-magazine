<?php

use Database\DataBase;

?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
<!--    <link rel="shortcut icon" href="--><?php //= asset($setting['icon']) ?><!--">-->
    <!-- Meta Description -->
<!--    <meta name="description" content="--><?php //= $setting['description'] ?><!--">-->
    <!-- Meta Keyword -->
<!--    <meta name="keywords" content="--><?php //= $setting['keywords'] ?><!--">-->
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
<!--    <title>--><?php //= $setting['title'] ?><!--</title>-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
		CSS
		============================================= -->
    <link rel="stylesheet" href="<?= asset('public/app/css/linearicons.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/nice-select.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/animate.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/owl.carousel.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/jquery-ui.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/main2.css') ?>">
</head>

<body style="background-color:#E6E6E6; ">


<div style="width: 80%; margin: 0 auto; background-color:  white; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);">
    <header>

        <style>

            * {
                box-sizing: border-box;
                padding: 0;
                margin: 0;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .banner img {
                width: 100%;
                height: 350px;
            }


            .header-top-right {
                display: flex;
                justify-content: flex-end;
                margin: 0;
            }

            .header-top-right ul {
                display: flex;
                list-style-type: none;
                margin: 8px;
            }

            .header-top-right ul li {
                margin: 8px;
            }


            .menu {
                display: flex;
                justify-content: space-between;
                box-sizing: border-box;
                padding: 1px;
                color: white;
                font-size: 12px;
                margin-bottom: 20px;
                font-weight: 700;
            }

            .menu a {
                color: white;
                font-weight: 700;
                border-radius: 8px;
                background-color: #5B9BD5;
                width: 100%;
                border: none;
                margin: 0 2px 0 2px;
                padding: 15px 0px;
                text-align: center;
                font-size: 12.5px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
                transition: transform 0.3s ease;
                text-transform: uppercase;

            }

            /* .menu a {
                text-transform: uppercase;
                font-weight: 700;
                position: relative;
                display: inline-block;
                padding: 10px 20px;
                font-weight: bold;
                color: white;
                text-decoration: none;
                background-color: #5B9BD5;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);

            } */


            .menu a:hover {
                transform: translateY(-2px) rotateX(8deg) rotateY(3deg);
                text-decoration: none;
            }

            .menu a:hover:before {
                opacity: 1;
            }

            .footer {
                background-color: #F7F7F7;
                height: 40px;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                width: 100%;
                display: flex;
              justify-content: space-around;
                box-sizing: border-box;
                padding: 8px;
                border-top: 2px #9b3333 solid;
                white-space: nowrap;
            }


            .current-date {
                color: black;
                font-size: 14px;
                width: 15%;

                font-family: Arial, Helvetica, sans-serif;
                font-weight: 400;
                text-align: left;
            }


            .title-head {
                color: #9C1A1A;
                font-size: 14px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-weight: 700;
                text-align: center;
                height: 100%;
                width: 70%;

            }

            .search-input {

                text-align: right;
                height: 100%;
            }

            .search-input input {
                color: black;
                font-size: 14px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-weight: bold;
                border-radius: 5px;
                border: 1px solid #E2E6EB;

            }

        </style>

        <div class="banner">

            <img src="/OnlineNewsSite/public/banner-image/banner_header.jpg" alt="Banner"/>

        </div>

        <!--        <div class="header-top-right">-->
        <!--            <ul class="login-register">-->
        <!--                <li><a href="--><?php //= url('login') ?><!--"><span class="lnr">Login</span></a></li>-->
        <!--                <li><a href="-->
        <?php //= url('register') ?><!--"><span class="lnr">Register</span></a></li>-->
        <!--            </ul>-->
        <!--        </div>-->

        <div class="menu">
            <a style=" margin: 0 2px 0 0px;" href="<?= url('/') ?>">Trang chủ</a>
            <a href="<?= url('khoahoccongnghe') ?>">Khoa học - công nghệ</a>
            <a href="<?= url('kinhtexahoi') ?>">Kinh tế - xã hội</a>
            <a href="<?= url('diendankhoahoc') ?>">Diễn đàn khoa học</a>
            <a href="<?= url('thongtintraodoi') ?>">Thông tin trao đổi</a>
            <a style=" margin: 0 0px 0 2px;" href="<?= url('lienhe') ?>">Liên hệ</a>
        </div>

        <div class="footer">
            <div class="current-date" id="date">
                <script>
                    var daysOfWeek = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy'];
                    var monthsOfYear = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];

                    var today = new Date();
                    var dayOfWeek = daysOfWeek[today.getDay()];
                    var day = today.getDate();
                    var month = monthsOfYear[today.getMonth()];
                    var year = today.getFullYear();

                    var formattedDate = dayOfWeek + ',' + day + '/' + month + '/' + year;
                    document.getElementById('date').innerHTML = formattedDate;
                </script>
            </div>

            <div class="title-head">  <p> Giáo dục và đào tạo cùng với khoa học và công nghệ là quốc sách hàng đầu</p></div>
            <div class="search-input">
                <input type="text" placeholder="Tìm kiếm...">
            </div>
        </div>

    </header>
