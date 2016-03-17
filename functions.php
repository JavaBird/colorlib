<?php





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

if(! function_exists("colorlib_setup")):

    function colorlib_setup(){


        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );


        /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );


        /*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
        add_theme_support( 'post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'status',
            'audio',
            'chat',
        ) );


        add_theme_support('custom-header-uploads');


        add_theme_support('custom-header');

    }


endif;

add_action( 'after_setup_theme', 'colorlib_setup' );


/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function colorlib_head_scripts(){


  wp_enqueue_style('colorlib_responsive',get_template_directory_uri().'/css/responsive.css',array(),'1.0');
  wp_enqueue_style('colorlib_font_awesome',get_template_directory_uri().'/css/font-awesome.css',array(),'1.0');
  wp_enqueue_style('colorlib_sidr',get_template_directory_uri().'/css/jquery.sidr.dark.min.css',array(),'1.0');
  wp_enqueue_style('colorlib_buttons',get_template_directory_uri().'/css/buttons.css',array(),'1.0');
  wp_enqueue_style('colorlib_base',get_template_directory_uri().'/css/base.css',array(),'1.0');
    // Load the html5 shiv.
    wp_enqueue_script( 'colorlib-html5', get_template_directory_uri() . '/js/html5shiv.min.js', array(), '3.7.2' );
    wp_script_add_data( 'colorlib-html5', 'conditional', 'lt IE 9' );
    wp_enqueue_script( 'colorlib-respond', get_template_directory_uri() . '/js/respond.min.js', array(), '1.4.2' );
    wp_script_add_data( 'colorlib-respond', 'conditional', 'lt IE 9' );

}
add_action('wp_enqueue_scripts','colorlib_head_scripts',0);

function colorlib_foot_scripts(){


    wp_enqueue_script( 'colorlib-jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.11.3' );
    wp_enqueue_script( 'colorlib-sidr-js', get_template_directory_uri() . '/js/jquery.sidr.min.js', array(), '2.0.0' );
    wp_enqueue_script( 'colorlib-stickUp-js', get_template_directory_uri() . '/js/stickUp.min.js');
    wp_enqueue_script( 'colorlib-base-js', get_template_directory_uri() . '/js/colorlib.js', array(), '1.0' );

}

add_action('wp_footer','colorlib_foot_scripts',1);








?>