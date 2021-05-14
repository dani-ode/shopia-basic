<?php get_header(); ?>
<div class="container">
    <h1 class="fw-bold mt-5 mb-5 text-center"><?php the_title() ;?></h1>
    <div class="row">
        <div class="col-md-3 mb-5">
            <div class="list-group text-white">
                <a href="<?php the_permalink() ?>" class="list-group-item list-group-item-action list-group-item-light fw-bold"> Memulai </a>
                <a href="<?php the_permalink() ?>2/" class="list-group-item list-group-item-action list-group-item-light">1. Download file nya</a>
                <a href="<?php the_permalink() ?>3/" class="list-group-item list-group-item-action list-group-item-light">2. Pasang File nya</a>
                <a href="<?php the_permalink() ?>4/" class="list-group-item list-group-item-action list-group-item-light">3. Konfigurasi awal</a>
                <a href="<?php the_permalink() ?>5/" class="list-group-item list-group-item-action list-group-item-light">4. Konfigurasi Lanjutan</a>
                <a href="<?php the_permalink() ?>6/" class="list-group-item list-group-item-action list-group-item-light">5. Selesai...</a>
            </div>
        </div>
        <div class="col">
            <div class="bg-white p-3 pb-4 pt-4 shadow rounded">
                <div class="container-cara-install-article">
                    <?php the_content() ;?>
                </div>

            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<?php get_template_part('/template-parts/footer/credit');?>
<?php get_footer(); ?>