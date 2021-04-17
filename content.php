<div class="bg-white p-3 rounded">
    <div class="row">
        <div class="col-md-5 p-0">
            <?php if (has_post_thumbnail()): ?> 
                <div class="thumbnail-img"> <?php the_post_thumbnail(); ?> </div>
            <?php endif; ?>
        </div>
        <div class="col-md-7 excerpt-loop p-0">
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <small class="text-gray">Posted on: <?php the_time('F j, Y') ?>, in <?php the_category() ?></small>
            <?php the_excerpt(); ?>
        </div>
    </div>
</div>
<br>