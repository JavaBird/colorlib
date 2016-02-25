<?php


if ( function_exists( 'add_theme_support' ) )   add_theme_support( 'post-thumbnails' );// 开启缩略图

remove_filter( 'the_excerpt', 'wpautop' );// 去掉文章摘要的<p>






?>