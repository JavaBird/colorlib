



<!--one col -->
<div class="row">

    <?php

           $i = 0;

            if(have_posts()):
            while(have_posts()):
                the_post();
                ++$i;


    ?>

    <div class="col-md-6 col-sm-6">
        <div class="panel">
            <div class="panel-img">
               <!-- <a href="###"><img class="img-responsive" src="images/them/wordpress-church-themes.jpg"><?php /*the_post_thumbnail()*/?></a>-->
                <a href="<?php the_permalink();?>"><img alt="<?php the_title(); ?>" class="img-responsive" src="<?php the_post_thumbnail_url();?>"></a>
            </div>
            <div class="panel-content">
                <div class="panel-title">
                    <h2><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title();  ?></a></h2>
                </div>
                <ul>
                    <li><i class="fa fa-clock-o fa-fw"></i> <?php the_time('Y-m-d');?></li>
                    <li><i class="fa fa-user fa-fw" title="<?php the_author();?>"></i> <?php the_author();?></li>
                    <li><i class="fa fa-folder-o fa-fw" ></i> <?php  the_category(' ');?></li>
                    <li><i class="fa fa-comment-o fa-fw"></i> <?php the_comment();?> 评论</li>
                </ul>
                <div class="panel-desc">
                      <p>  <?php the_excerpt_embed();?> </p>
                                            <span>
                                                <a href="<?php the_permalink();?>" class="button  button-pri button-small"><i class="fa fa-eye fa-fw"></i> 查看全部</a>
                                            </span>

                </div>
            </div>

        </div>
    </div>
                <?php  if(($i != 1) && ($i % 2 != 1 )){ ?>
                <div class="clearfix hidden-xs-block"></div>
            <?php
              }



                ?>


    <?php endwhile;

                wp_pagenavi();
    endif;

    ?>
</div>