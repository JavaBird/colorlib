<?php
get_header();
?>
<!--main-->
<div class="main">
<div class="container">
<div class="row">
<div class="col-md-9 col-sm-12">

    <?php  get_template_part("template-parts/main")?>

</div>
<div class="col-md-3 col-sm-12">
    <div class="row">
        <div class="col-md-12">
            <div class="follow">
                <p>关注我们</p>
                <ul>
                    <li><a href="#" class="weixin">
                            <i class="fa fa-weixin fa-2x"></i>
                        </a></li>
                    <li><a href="#" class="weibo">
                            <i class="fa fa-weibo fa-2x"></i>
                        </a></li>
                    <li><a href="#" class="rss">
                            <i class="fa fa-rss fa-2x"></i>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!--编辑推荐-->
            <div class="editor_recommend">
                <p>编辑推荐</p>
                <ul>
                    <li>
                        <a href="#"><img class="img-responsive " src="images/ad/eighttheme-on-colorlib-1.png"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive" src="images/ad/theblogstarter-on-colorlib.png"></a>
                    </li>
                    <li>
                        <a href="#"><img class="img-responsive" src="images/ad/themeisle-colorlib.png"></a>
                    </li>

                </ul>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <!--我们的主题-->
            <div class="our_theme">
                <p>免费主题分类</p>
                <ul>
                    <?php
                    $cat = get_category_by_slug('wpfree');
                    wp_list_categories(array(
                        'title_li'=>0,
                        'hide_empty' => 0,
                        'child_of' => $cat ->term_id,
                    ));?>
                    <?php get_terms('wpfree');?>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="download_theme">
                <p>下载量排行榜</p>
                <ul>
                    <li>
                        <a href="#">
                            <img src="images/recomm/a2hosting-review-65x65.jpg" class="  img-responsive">
                        </a>
                        <a href="#">
                            <p>2015年10个html5开发者必备文本编辑器</p>
                        </a>
                    </li> <li>
                        <a href="#">
                            <img src="images/recomm/colorlib_blog_image_retina_1024-65x65.png" class="img-responsive">
                        </a>
                        <a href="#">
                            <p>2015年10个html5开发者必备文本编辑器</p>
                        </a>
                    </li> <li>
                        <a href="#">
                            <img src="images/recomm/free-wordpress-video-themes-65x65.jpg" class="img-responsive">
                        </a>
                        <a href="#">
                            <p>2015年10个html5开发者必备文本编辑器</p>
                        </a>
                    </li> <li>
                        <a href="#">
                            <img src="images/recomm/Northeme-WordPress-Themes-65x65.jpg" class="img-responsive">
                        </a>
                        <a href="#">
                            <p>2015年10个html5开发者必备文本编辑器</p>
                        </a>
                    </li> <li>
                        <a href="#">
                            <img src="images/recomm/pinbin-theme-instructions-65x65.jpg" class="img-responsive">
                        </a>
                        <a href="#">
                            <p>2015年10个html5开发者必备文本编辑器</p>
                        </a>
                    </li> <li>
                        <a href="#">
                            <img src="images/recomm/SiteGround-Review-Discount-Codes-Feature-65x65.jpg" class="img-responsive">
                        </a>
                        <a href="#">
                            <p>2015年10个html5开发者必备文本编辑器</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>


</div>

</div>


</div>
</div>
<!--main-->



<?php  get_footer();?>
