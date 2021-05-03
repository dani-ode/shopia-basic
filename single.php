<?php get_header(); ?>
<?php get_template_part('/template-parts/navbar/navbar-blog');?>
<br>
<br>
<main class="mt-3">
    <article class="container p-0">
        <div class="row">

            <div class="col-xs-12 col-sm-1 d-none d-md-block text-center">
                <?php get_template_part('/template-parts/content/single-blog/share-icon');?>
            </div>
            <div class="main-article col-xs-12 col-sm-8">
            <?php if(have_posts()): ?>

                <section class="blog-canvas bg-white p-3">
                    <div id="post-<?php the_id(); ?>" <?php post_class(); ?>>
                        <?php if (has_post_thumbnail()): ?> 
                            <div class="shopia-future-image"> <?php the_post_thumbnail(); ?> </div>
                        <?php endif; ?>
                        <?php
                            get_template_part('/template-parts/edit-this');
                            the_title('<h1 class="entry-title pt-3">', '</h1>'); 
                        ?>
                        <?php the_content(); ?>
                        <hr>
                        <div class="post-cat-and-tags text-gray">
                            <small >Posted on: <?php the_time('F j, Y'); ?>, in... </small> 
                            <br>
                            <small>Categories: <?php the_category(); ?></small>
                            <br>
                            <small class="shopia-tags"><?php the_tags(); ?> </small>
                        </div>
                        <hr>
                    </div>
                </section> <br>

                <section class="row single-post-navigation-canvas">
                    <small class="col"><?php previous_post_link(); ?></small>
                    <small class="col text-end"><?php next_post_link(); ?></small>
                </section> <br>

                <!-- comment-section -->
                <section class="comments-canvas bg-white p-3">
                    <?php if( comments_open() ){
                        comments_template();
                    }else echo '<h5 class="text-center text-muted"> Sorrry, Comments are closed! </h5>' ?>
                </section>

                <!-- Related Popst -->
                <section class="related-post-canvas">
                    <?php get_template_part('/template-parts/content/single-blog/related-post');?>
                </section>

            <?php endif;?>
            </div>
            <aside class="col-xs-12 col-sm-3 sidebar-canvas">
                <?php get_sidebar(); ?>
            </aside>

        </div>
    </article>
</main>
<?php get_template_part('/template-parts/footer/footer-nav');?>
<?php get_footer(); ?>