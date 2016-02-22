<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>colorlib中文网</title>
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.sidr.dark.min.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/buttons.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/base.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>js/html5shiv.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="topbar">
    <div class="container">
        colorlib中文网提供免费的网站主题供大家下载。
    </div>
</div>
<header>
    <div class="container">
        <div class="head-warp">
            <div class="logo">
                <a href="#"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/colorlib-logo-top.png" ></a>
                <p >中文网</p>
            </div>
            <div id="nav" class="navbar">

                <?php get_sidebar();?>

            </div>
            <div  class="mobile-menu">
                <div class="mobile-menu-warp">
                    <a href="#sidr" id="left-menu">
                        <i class="fa fa-bars fa-lg"></i>
                    </a>
                </div>
                <div id="sidr" style="display: none">
                    <ul>
                        <li>
                            <a href="javascript:;" id="close-menu"><i class="fa fa-bars fa-lg"></i></a>
                        </li>
                        <?php get_sidebar('mobile');?>

                    </ul>
                </div>

            </div>

        </div>
    </div>
</header>