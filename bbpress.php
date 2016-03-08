<?php
get_header();
?>
    <div class="breadcrumb-col">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><i class="fa fa-home fa-lg fa-fw"></i><a href="<?php echo esc_url( home_url( '/' ) ); ?>">首页</a><i class="fa fa-angle-right"></i></li>
                        <li><a ><?php the_title();?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12">

                   <?php while ( have_posts() ) : the_post(); ?>

                        <?php the_title(); ?>
                        <?php the_content();?>
                   

                   <?php endwhile;?>





                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="follow">
                                <p>关注我们</p>
                                <ul>
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
                                    <li><a href="#">科技</a></li>
                                    <li><a href="#">文化</a></li>
                                    <li><a href="#">教育</a></li>
                                    <li><a href="#">医疗</a></li>
                                    <li><a href="#">体育</a></li>
                                    <li><a href="#">商城</a></li>
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
                                            <p>2015年10个html5开发者必备文本编辑器备文本编辑器备文本编辑器备文本编辑器备文本编辑器客服的拉萨开发力度上拉链数量的法律的力量的来了来了</p>
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



<?php  get_footer();?>