<?php


if ( function_exists( 'add_theme_support' ) )   add_theme_support( 'post-thumbnails' );// 开启缩略图

remove_filter( 'the_excerpt', 'wpautop' );// 去掉文章摘要的<p>

remove_filter( 'the_excerpt_embed','wpautop' );// 去掉手动文章摘要的<p>

function colorlib_excerpt_length(){

    return 75;
}
function colorlib_excerpt_more(){

    return '&hellip;&hellip;';
}

add_filter("excerpt_length","colorlib_excerpt_length");

add_filter("excerpt_more","colorlib_excerpt_more");

?>