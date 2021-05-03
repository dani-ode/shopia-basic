<?php get_header(); ?>
<?php if(have_posts()): ?> 
<?php get_template_part('/template-parts/navbar/navbar-page');?>
    <main class="mt-2">
        <article class="container">
            <div class="main-article page-canvas mt-4 mb-4">
                <section id="post-<?php the_id(); ?>" <?php post_class(); ?>>
                    <?php if (has_post_thumbnail()): ?> 
                        <div class="shopia-future-image"> <?php the_post_thumbnail(); ?> </div>
                    <?php endif; ?>
                    <?php the_content(); ?>
                </section>
            </div>     
        </article>
    </main>
<?php endif;?>
<?php get_template_part('/template-parts/footer/footer-nav');?>
<?php get_footer(); ?>