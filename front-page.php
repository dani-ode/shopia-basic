<?php get_header(); ?>
<?php get_template_part('/template-parts/navbar/navshop');?>
<?php get_template_part('/template-parts/content/front-page/carousel');?>


<main class="mt-2 is-home">

    <article class="container p-0">
        <div class="main-article">
            
            <?php if(have_posts()):
                while(have_posts()): the_post();?>

                <div id="post-<?php the_id(); ?>" <?php post_class(); ?>>
                    
                    <?php the_title('<h1 class="entry-title home-title position-absolute">', '</h1>'); ?>
                    <?php the_content(); ?>
                    
                </div>

                <?php endwhile;
            endif;?>
            
    </article>
</main>
<?php get_template_part('/template-parts/footer/footershop');?>
<?php get_footer(); ?>