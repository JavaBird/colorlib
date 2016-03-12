<?php
get_header();
?>
    <div class="breadcrumb-col">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><i class="fa fa-home fa-lg fa-fw"></i><a href="<?php echo esc_url( home_url( '/' ) ); ?>">首页</a><i class="fa fa-angle-right"></i></li>
                        <li><?php the_title();?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">


           <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php  the_content();?>

           <?php  endwhile;

        endif;
;?>

                </div>

            </div>
        </div>
    </div>



<?php  get_footer();?>