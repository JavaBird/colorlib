



<!--one col -->
<div class="row">

    <?php

            if(have_posts()):
            while(have_posts()): the_post();
    ?>

    <div class="col-md-6 col-sm-6">
        <div class="panel">
            <div class="panel-img">
                <a href="###"><img class="img-responsive" src="images/them/wordpress-church-themes.jpg"></a>
            </div>
            <div class="panel-content">
                <div class="panel-title">
                    <h2><a href="<?php ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h2>
                </div>
                <ul>
                    <li><i class="fa fa-clock-o fa-fw"></i> <?php the_time('Y-m-d');?></li>
                    <li><i class="fa fa-user fa-fw" title="<?php the_author();?>"></i> <?php the_author();?></li>
                    <li><i class="fa fa-folder-o fa-fw" ></i> <?php the_category();?></li>
                    <li><i class="fa fa-comment-o fa-fw"></i> <?php the_comment();?> 评论</li>
                </ul>
                <div class="panel-desc">
                    <p>
                        <?php the_content();?>
                    </p>
                                            <span>
                                                <a href="#" class="button  button-pri button-small"><i class="fa fa-eye fa-fw"></i> 查看全部</a>
                                            </span>

                </div>
            </div>

        </div>
    </div>
    <?php endwhile;

    endif;

    ?>
</div>