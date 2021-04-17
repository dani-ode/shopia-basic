<div class="bg-white-shopia">
    <div class="thumbnail-img"> <?php the_post_thumbnail(); ?> </div>
    <h1><?php the_title(); ?> </h1>
    <small>Posted on: <?php the_time('F j, Y') ?>, in <?php the_category() ?></small>
    <p><?php the_content(); ?> </p>
</div>