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

            <?php get_template_part("template-parts/context_follow_me")?>


        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!--编辑推荐-->
            <?php get_template_part("template-parts/context_editor_recommend")?>

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
            <div class="most_views_posts">
                <p>大家都在看</p>
                <?php if (function_exists('get_most_viewed')): ?>
                    <ul>
                        <?php get_most_viewed('post'); ?>
                    </ul>
                <?php endif; ?>

            </div>
        </div>

    </div>


</div>

</div>


</div>
</div>
<!--main-->



<?php  get_footer();?>
