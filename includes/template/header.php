<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ميزانيتك">
    <meta name="csrf-token" content="MUcTQAfceRUfwg5hPwPBdmVcIj4LaM4QNEeq2E2J">
    <meta name="google-site-verification" content="DgtROe43o2oKNKCmLjdhbMPAJ3DC-nfabgHubFKzdQI" />
    <meta name="format-detection" content="telephone=no">
    <link rel="alternate" hreflang="ar" href="#" />
    <link href="<?php $config['url_app']; ?>layout/css/bootstrap.min.css?v=" rel="stylesheet">
    <link rel="stylesheet" href="<?php $config['url_app']; ?>layout/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="<?php $config['url_app']; ?>layout/css/styles.css?v=" rel="stylesheet">
    <link href="<?php $config['url_app']; ?>layout/css/grid.css?v=" rel="stylesheet">
    <link href="<?php $config['url_app']; ?>layout/css/me.css?v=" rel="stylesheet">
   
    <link rel="stylesheet" href="<?php $config['url_app']; ?>layout/css/fontawesome/css/all.min.css">
    <title><?php echo $config['app_name']; ?> | <?php echo $title; ?> </title>
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <style>
        .sticky-nav {
            top: -400px !important;
            transition: top .9s;
            position: -webkit-sticky;
            position: -moz-sticky;
            position: -ms-sticky;
            position: -o-sticky;
            position: sticky;
            z-index: 1020;
            background-color: white;
        }

        .sticky-nav-top {
            top: 0px !important;
        }

        .header-bg {

            background: linear-gradient(117deg, rgb(0, 205, 188) 10%, rgb(255, 255, 255) 8%, rgb(255, 255, 255) 46%, rgb(24, 169, 158) 29%, rgb(0, 205, 188) 88%, rgb(0, 205, 188) 90%);
        }
        }

        .intro-logo {
            height: 112px;
            width: 435px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
        }

        .sign-card-height {
            height: 448px;
        }

        .card-row-height {
            height: 200px;
        }

        .card .featured-course-image {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-size: cover;
        }

        .custom-icon-pos {
            position: absolute;
            top: -15px;
            left: 10px;
            font-size: 50px;
        }

        .featured-mark {
            position: absolute;
            height: 35px;
            width: 48px;
            align-items: end;
            top: 8px;
            right: 5px;
            font-size: 15px;
            color: white;
        }

        .new-course-mark-pos {
            position: absolute;
            padding-top: 2px;
            padding-bottom: 2px;
            top: 8px;
            right: -1px;
            font-size: 15px;
            color: white;
            text-align: center;
            z-index: 0;
        }

        .card-img-top {
            width: 70%;
        }

        .new-course-mark-pos:after {
            border-radius: 3px;
            left: -9px;
            background: inherit;
            content: "";
            height: 20px;
            width: 20px;
            position: absolute;
            top: 3px;
            transform: rotate(45deg);

            display: block;
        }

        @media only screen and (max-device-width: 990px) {

            .header-bg {
                background-image: linear-gradient(to right top, #418276, #389886, #23b5a6, #00cdbc, #00cdbc) !important;
            }

            .card-img-top {

                width: 100%;
                left: 3px;
            }

            .more {
                margin: 26px 0px;
            }

            @media (max-width: 576px) {
                .more {
                    margin: 26px 0px;
                }
            }

            .fecratec {
                font-size: 60px;
                margin: 38px 0px;
            }

            @media (max-width: 576px) {
                .fecratec {
                    font-size: 60px;
                    margin: 40px 0px;

                }


            }
    </style>
</head>

<body>