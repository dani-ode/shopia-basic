<?php get_header(); ?>
<?php get_template_part('/template-parts/navbar/navbar-blog');?>
<br>
<br>
<main class="mt-5">
    <article class="container p-0">
        <div class="row">
            <div class="main-article col-xs-12 col-sm-9">

                <?php if(have_posts()):
                    while(have_posts()): the_post();?>

                    <?php get_template_part('content', get_post_format()); ?>

                    <?php endwhile; ?>

                    <div class="row navigation-canvas">
                        <div class="col left-navigation text-left">
                            <?php previous_posts_link('<< Newer Post') ?>
                        </div>
                        <div class="col left-navigation text-end">
                            <?php next_posts_link('Older Post >>') ?>
                        </div>
                    </div>

                <?php endif;?>
            </div>
            <div class="col-xs-12 col-sm-3">
                <?php get_sidebar(); ?>
            </div>
        </div>

    </article>
</main>
<?php get_template_part('/template-parts/footer/footer-nav');?>
<?php get_footer(); ?>

