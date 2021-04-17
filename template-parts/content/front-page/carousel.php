<?php if ( wp_is_mobile() ): ?>
<div class="s-carousel-m">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo get_theme_mod( 'set_first_slide'); ?>" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo get_theme_mod( 'set_second_slide'); ?>" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo get_theme_mod( 'set_third_slide'); ?>" alt="Third slide">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
</div>
<?php else: ?>
<div class="container p-0 s-carousel pt-4 pb-4">
    <div class="row">
        <div class="col-8 main-image">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100 desktop-img-carousel" src="<?php echo get_theme_mod( 'set_first_slide'); ?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 desktop-img-carousel" src="<?php echo get_theme_mod( 'set_second_slide'); ?>" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 desktop-img-carousel" src="<?php echo get_theme_mod( 'set_third_slide'); ?>" alt="Third slide">
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-4 sec-image ">
            <img class="img-carousel w-100 sec-img-1 desktop-img-carousel2" src="<?php echo get_theme_mod( 'set_second_slide'); ?>" alt="First slide">
            <img class="img-carousel w-100 sec-img-2 desktop-img-carousel2" src="<?php echo get_theme_mod( 'set_third_slide'); ?>" alt="Second slide">
        </div>
    </div>
</div>
<?php endif; ?>