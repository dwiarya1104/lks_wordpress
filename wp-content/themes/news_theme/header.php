<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tekno News</title>

    <style>
        * {
            margin:0;
            padding:0;
            font-family:arial;
        }

        a {
            text-decoration:none;
            /* color:white; */
        }

        /* p {
            font-size:20px;
            line-height:20px;
        } */

        .container {
            margin-left:100px;
            margin-right:100px;
        } 

        /* Card */
        .card {
            display:flex;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition:0.3;
            background:white;
            margin-top:50px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .content {
            margin:20px;
        }

        .card img {
            width:30rem;
            height:30rem;
        }

        .category img {
            width:91rem;
            height:50rem;
        }
    
        /* Navbar */ 
        .navbar {
            display:flex;
            justify-content:space-between;
            background:blue;
            position:sticky;
            top:0;
            height:60px;
        }

        .navbar ul{ 
            list-style:none;
            display:flex;
            padding:17px;
            padding-right:120px;
            font-size:20px;
        }

        .navbar ul li {
            margin-left:20px;
        }

        .title-nav {
            padding:17px;
            color:white;
            display:flex;
            position:absolute;
            padding-left:170px;
            font-size:20px;
        }

        .menu-item > a {
            color:white;
        }

        .logo img{
            width:40px;
            padding-left:100px;
            padding-top:10px;
        }

        /* Single */
        .single img {
            /* background-size:cover; */
            width:91rem;
            height:50rem;
        }

        /* Footer */
        .footer {
            display:flex;
            margin-top:20px;
            height:20vh;
            justify-content:center;
            background:blue;
            align-items:center;
        }

        .footer ul{
            list-style:none;
            position:absolute;
            display:flex;
        }

        .footer > ul > li{
            margin-top:50px;
            margin-left:10px;
        }

        .footer-teks {
            color:white;
        }

        .footer-icon {
            width:40px;
            margin-top:40px;
            display:flex;
            margin-left:20px;
            align-items:center;
        }

    
    </style>
</head>
<body>

<nav class="navbar">
    <div class="logo">
        <img src="<?= get_theme_file_uri('images/logo.png')?>" alt="">
    </div>
    <h3 class="title-nav">Tekno News</h3>

    <?= wp_nav_menu(['them_location'=> 'Main Menu'])?>

</nav>
<div class="container">
