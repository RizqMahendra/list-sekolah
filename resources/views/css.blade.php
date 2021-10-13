<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/landing_page/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{asset('css/landing_page/slicknav.css')}} ">
    <link rel="stylesheet" href="{{asset('css/landing_page/flaticon.css')}} ">
    <link rel="stylesheet" href="{{asset('css/landing_page/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing_page/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing_page/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing_page/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing_page/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing_page/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing_page/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing_page/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing_page/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing_page/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/toggle.css')}}">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css" type="text/css">


    <title>Daftar Sekolah Bahasa Jepang</title>
</head>
<style>
    #map {
    height: 100%;
    }
    :root {
        --color-primary: #4ed7a8;
    }

    @media (min-width: 800px) and (max-width: 850px) {
        .navbar:not(.top-nav-collapse) {
            background: #1C2331 !important;
        }
    }

    .read-more {
        margin-bottom: 30px;
    }

    .box .showContent {
        height: auto;
    }

    .sns-icon img {
        width: 30px;
        margin: 5px;
    }

    .sns-icon-list {
        display: inline-block;
    }

    .sns-icon-list img {
        width: 30px !important;
        height: 30px !important;
        min-width: 30px !important;
        min-height: 30px !important;
        margin: 3px !important;
    }

    .view,
    body,
    html {
        height: 100%
    }

    .margin-top {
        margin-top: 100px;
    }

    h1.special-header {
        font-size: 4.2rem;
        font-weight: 300;
        color: #212121;
    }

    .navbar {
        background-color: rgba(0, 0, 0, .2)
    }

    .page-footer,
    .top-nav-collapse {
        background-color: #1C2331
    }

    @media only screen and (max-width:768px) {
        .navbar {
            background-color: #1C2331
        }
    }


    .header {
        display: flex;
        align-items: center;
        margin-bottom: 3px;
    }

    .logo-univ img {
        height: 100%;
        width: 100%;
        -o-object-fit: contain;
        object-fit: contain;
        -o-object-position: center;
        object-position: center;
    }

    .logo-univ {
        width: 70px;
        height: 70px;
        border: 1px solid #ddd;
        border-radius: 10px;
        min-width: 40px;
        min-height: 40px;
        overflow: hidden;
        background: #fff;
        position: relative;
        padding: 2.5px;
    }

    .location a {
        color: #277dcb;
        font-size: 12px;
        display: flex;
        display: -webkit-flex;
        flex-wrap: wrap;
    }

    .short-description {
        overflow: hidden;
        font-size: 12px;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* number of lines to show */
        -webkit-box-orient: vertical;
    }

    .card {
        margin-bottom: 20px;
        border-radius: 20px;
        box-shadow: rgb(26 52 79 / 10%) 0px 2px 12px 0px;
    }

    .card:hover {
        box-shadow: 1px 8px 20px grey;
        /* -webkit-transition: box-shadow .3s ease-in; */
    }

    .card-img-top {
        border-top-left-radius: 10px;
        height: 150px;
        border-top-right-radius: 10px;
    }

    .card img:after {
        content: '\A';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.6);
        opacity: 0;
        transition: all 0.5s;
        -webkit-transition: all 0.5s;
    }

    .card:hover:after {
        opacity: 1;
    }

    .location-img {
        cursor: pointer;
        margin-bottom: 1.5rem;
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        height: 200px;
    }

    .location-img img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 8px;
    }

    .desc {
        text-align: left;
        margin-top: 20px;
        font-size: 14px;
        overflow: hidden;
        height: 90px;
        font-family: "Poppins", sans-serif;
    }

    .desc h5 {
        color: #fff;
        margin: auto;
        letter-spacing: .02em;
    }

    .location-img:before {
        content: "";
        position: absolute;
        inset: 0px;
        background-color: rgb(26, 52, 79);
        opacity: 0.3;
        border-radius: 10px;
        transition: opacity 0.5s ease 0s;
    }

    .image:hover:after {
        opacity: 0.1;
    }

    .info-kampus {
        margin-bottom: 1rem;
        background: #fff;
        border: 1px solid #e4e4e4;
        padding: 20px;
        margin-bottom: 20px;
    }

    .info-kampus img {
        width: 130px;
        height: 130px;
        min-width: 130px;
        max-width: 130px;
        min-height: 130px;
        max-height: 130px;
        object-fit: contain;
        padding: 5px;
        margin-right: 10px;
    }

    @media (max-width: 575px) {
        .info-kampus img {
            width: 80px;
            height: 80px;
            min-width: 80px;
            max-width: 80px;
            min-height: 80px;
            max-height: 80px;
            object-fit: contain;
            padding: 5px;
            margin-right: 10px;
        }
    }

    .label-info {
        font-size: 14px;
        margin-top: 20px;
        font-weight: bold;
    }

    .info-detail {
        margin-top: .5rem;
        padding: .3rem 0;
        border-bottom: 1px solid #ebebeb;
        font-family: sf-regular, sans-serif;
        font-weight: 600;
    }

    .entry-header {
        padding: 50px 0;
    }

    .entry-title h1 {
        color: #fff;
        text-transform: uppercase;
        line-height: 55px;
        letter-spacing: -0.4px;
        font-weight: 700;
        font-size: 40px;
        font-family: "Poppins", sans-serif;
    }

    @media (max-width:375px) {
        .entry-title h1 {
            font-size: 30px;
            font-family: "Poppins", sans-serif;
        }

        .section-padding {
            padding-top: 50px;
            padding-bottom: 50px;
        }
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }

    @media (max-width: 575px) {
        .header-area .main-header {
            padding: 30px 0px;
        }
    }

    .d-flex,
    .title h4 {
        font-size: 18px;
        font-weight: 600;
        font-family: "Poppins", sans-serif;
    }

    .blog_details {
        padding: 0px 0px 0px 0px;
    }

    /* text navbar */

    @media (max-width: 1615px) {
        .header-area .main-header .main-menu ul li a {
            font-size: 14px;
            padding: 15px;
        }
    }

    @media (max-width: 1545px) {
        .header-area .main-header .main-menu ul li a {
            font-size: 12px;
            padding: 15px;
        }
    }

    @media (max-width: 1220px) {
        .header-area .main-header .main-menu ul li a {
            font-size: 11px;
            padding: 8px;
        }
    }

    /* color pagination */
    .page-item.active .page-link {
        background-color: #4ed7a8;
        border-color: #4ed7a8;
    }

    .page-item a {
        color: #0D210B;
    }

    b {
        color: #0D210B;
    }

    .box {
        background: #fff;
        border: 1px solid #e4e4e4;
        padding: 20px;
        margin-bottom: 20px;
    }

    /* Form input */
    label.form-label {
        text-align: left;
        margin-top: 20px;
        font-size: 14px;
        overflow: hidden;
        font-family: "Poppins", sans-serif;
    }

    .form-filter {
        border: 1px solid #ced4da;
    }

    .form-select .nice-select {
        height: 35px;
        padding-left: 15px !important;
        font-size: 14px;
        /* overflow: hidden; */
        font-family: "Poppins", sans-serif;
    }

    .form-control-lg {
        height: 35px;
        padding-left: 15px !important;
        font-size: 14px;
        overflow: hidden;
        font-family: "Poppins", sans-serif;
    }

    .form-select .nice-select .list .option {
        height: 35px;
        padding-left: 15px !important;
        font-size: 14px;
        overflow: hidden;
        font-family: "Poppins", sans-serif;
    }

    .form-select .nice-select .list {
        margin-top: 0;
        border: none;
        border-radius: 0px;
        box-shadow: none;
        width: 100%;
        height: 200px;
        padding: 10px 0 10px 0px;
        border: 1px solid #ced4da;
        overflow: auto;
    }

    .btn-submit {
        background-color: #273044;
        transition: all .3s ease;
        border: 1px solid #ced4da;
        font-weight: 700;
    }

    .btn-submit:hover {
        background-color: var(--color-primary);
    }

    @media (min-width: 997px) {
        .submenu .submenu {
            position: absolute !important;
            left: 100% !important;
            top: -10px !important;
            width: 185px !important;
            padding: 12px 0 15px !important;
            margin-top: 0 !important;
            list-style: none !important;
            box-shadow: 1px 1px 3px rgb(0 0 0 / 20%) !important;
        }
    }

    .morecontent span {
        display: none;
    }

    .morelink {
        display: contents;
        font-weight: 500;
    }

    .blog_area a:hover,
    .blog_area a :hover {
        -webkit-text-fill-color: #000;
    }

    .more {
        text-align: left;
        margin-top: 20px;
        font-size: 14px;
        overflow: hidden;
        height: 90px;
        font-family: "Poppins", sans-serif;
    }

    body {
        padding-right: 0px !important;
    }

    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 854px !important;
            margin: 1.75rem auto;
        }
    }

    .modal-body,
    .px-4 {
        padding: 24px 24px 24px 24px !important;
    }

    .t-web a {
        font-size: 14px;
        margin-top: 20px;
        font-weight: bold;
        color: #4ed7a8;
    }

    .t-web {
        padding-top: 12px !important;
    }

    .label_custome {
        font-size: 14px;
        margin-top: 20px;
        font-weight: bold;
        color: #4ed7a8;
    }

    .col-form-label {
        display: inline-block !important;
        font-weight: 600 !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
        vertical-align: top !important;
        width: 100px !important;
        font: 400 14px / 20px Roboto, RobotoDraft, Helvetica, Arial, sans-serif !important;
        color: #202124 !important;
    }

    .h00 {
        font: 400 18px / 24px;
        color: #202124 !important;
        padding-top: 15px;
        padding-bottom: 15px;
        font-weight: 700 !important;
        font-family: "Poppins", sans-serif !important;
        font-size: 14px !important;
    }

    .form-control {
        display: block !important;
        width: 100% !important;
        height: 40px !important;
        padding: .375rem .75rem !important;
        font-size: 14px !important;
        line-height: 1.5 !important;
        color: #495057 !important;
        background-color: #fff !important;
        background-clip: padding-box !important;
        border: 1px solid #ced4da !important;
        border-radius: .25rem !important;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out !important;
        font-family: "Poppins", sans-serif !important;
    }

    .form-control-file {
        display: block !important;
        width: 100% !important;
        height: 40px !important;
        padding: .375rem .75rem !important;
        font-size: 14px !important;
        line-height: 1.5 !important;
        color: #495057 !important;
        background-color: #fff !important;
        background-clip: padding-box !important;
        border: 1px solid #ced4da !important;
        border-radius: .25rem !important;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out !important;
        font-family: "Poppins", sans-serif !important;
    }

    .text-center {
        font-family: "Poppins", sans-serif !important;
    }

    .btn-group-lg>.btn,
    .btn-lg {
        padding: 15px !important;
    }

    .nice-select .form-control .custom-select .mb-3 {
        display: none !important;
    }

    #select00 {
        display: block !important;
        width: 100% !important;
        height: 40px !important;
        padding: .375rem .75rem !important;
        font-size: 14px !important;
        line-height: 1.5 !important;
        color: #495057 !important;
        background-color: #fff !important;
        background-clip: padding-box !important;
        border: 1px solid #ced4da !important;
        border-radius: .25rem !important;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out !important;
        font-family: "Poppins", sans-serif !important;
    }
</style>