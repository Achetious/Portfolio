<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/output.css" rel="stylesheet">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <!-- Hamburger -->
    <link rel="stylesheet" href="assets/css/hamburgers.css">
    <!-- qrcode generator -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        .owl-carousel {
            width: 75%;
            background-color: #161616;
        }

        .owl-item img {
            width: 40% !important;
        }

        .card {
            width: 650px;
            height: 500px;
            background: #15001f;
            border: 1px solid #c042ff;
            font-size: 14px;
            font-family: monospace;
            overflow: auto;
        }

        .titlebar {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 21px;
            font-weight: 450;
            background-color: #2e0043;
            width: 100%;
        }

        .card button {
            width: 40px;
            height: 30px;
            margin-left: -5px;
            border: 0;
            outline: 0;
            background: transparent;
            transition: 0.2s;
        }

        button svg path,
        button svg rect,
        button svg polygon {
            fill: #ffffff;
        }

        button svg {
            width: 10px;
            height: 10px;
        }

        .close:hover {
            background-color: #e81123;
        }

        .maximize:hover {
            background-color: #c042ff2e;
        }

        .minimize:hover {
            background-color: #c042ff2e;
        }

        #pre {
            overflow: auto;
            width: 100%;
            padding: 10px;
            height: auto;
            color: #bafff8;
        }

        .curlies {
            color: #ff0000;
        }

        .sc {
            color: #e600ff;
        }

        .rounds {
            color: #ffffff;
        }

        .operator {
            color: #ffff00;
        }

        .s1 {
            color: #22ff00;
        }

        .s2 {
            color: #4281ff;
        }

        .s3 {
            color: #ff4284;
        }

        .s4 {
            color: #ffae00;
        }

        .s5 {
            color: #ffffff;
        }

        .s6 {
            color: #ffff00;
        }

        .s7 {
            color: #f59867;
        }
    </style>
</head>

<body class="bg-black text-white">
    <?php include("includes/navbar.php") ?>