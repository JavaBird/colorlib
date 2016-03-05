<?php




if ( function_exists( 'add_theme_support' ) )   add_theme_support( 'post-thumbnails' );// 开启缩略图

remove_filter( 'the_excerpt', 'wpautop' );// 去掉文章摘要的<p>

remove_filter( 'the_excerpt_embed','wpautop' );// 去掉手动文章摘要的<p>

function colorlib_excerpt_length(){

    return 100;
}
function colorlib_excerpt_more(){

    return '&hellip;&hellip;';
}
/*格式化摘要*/
function my_wp_trim_excerpt( $text = '' ) {
    $raw_excerpt = $text;
    if ( '' == $text ) {
        $text = get_the_content('');

        $text = strip_shortcodes( $text );

        /** This filter is documented in wp-includes/post-template.php */
        $text = apply_filters( 'the_content', $text );
        $text = str_replace(']]>', ']]&gt;', $text);

        /**
         * Filter the number of words in an excerpt.
         *
         * @since 2.7.0
         *
         * @param int $number The number of words. Default 55.
         */
        $excerpt_length = apply_filters( 'excerpt_length', 300 );
        /**
         * Filter the string in the "more" link displayed after a trimmed excerpt.
         *
         * @since 2.9.0
         *
         * @param string $more_string The string shown within the more link.
         */
        $excerpt_more = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );

        $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
    }else{

        $excerpt_more = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );

        $excerpt_length = apply_filters( 'excerpt_length', 300 );

        $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
    }



    /**
     * Filter the trimmed excerpt string.
     *
     * @since 2.8.0
     *
     * @param string $text        The trimmed text.
     * @param string $raw_excerpt The text prior to trimming.
     */
    return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
}

add_filter("excerpt_length","colorlib_excerpt_length");


add_filter("excerpt_more","colorlib_excerpt_more");


add_filter( 'get_the_excerpt', 'my_wp_trim_excerpt'  );


//显示来源
function display_source($ID){

    $source= get_post_meta($ID, 'source', true);

    if($source == ''){
        echo "<a href='".esc_url( home_url( '/' ) )."'>Colorlib中文网</a>";
    }else{
        echo $source;
    }

}

//获取当前文章分类
function get_currpost_category($array){

    echo  ''.$array[0];
}

// 获取当前文章标签
function get_currpost_tags($post){

    $tags =  get_the_tags();



    if($tags){

        $ul='<ul><li><i class="fa fa-tags fa-lg fa-fw"></i> 标签：</li>';

        for($i = 0; $i < count($tags); $i ++){


                $ul .='<li><a href="'.get_tag_link($tags[$i]->term_id).'">'.$tags[$i]->name.'</a></li>';

        }
        $ul .="</ul>";
        echo $ul;
    }




}






?>