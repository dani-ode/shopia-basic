

<footer class="text-black">


    <!-- for mobile -->
    <?php if ( wp_is_mobile() ): ?>
    

    <!-- for desktop -->
    <?php else : ?>
    <?php endif; ?>

    <div class="footer-nav footer-4-col pt-3 pb-3 bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php dynamic_sidebar('footer-shop-1'); ?>
                </div>
                <div class="col">
                    <?php dynamic_sidebar('footer-shop-2'); ?>
                </div>
                <div class="col">
                    <?php dynamic_sidebar('footer-shop-3'); ?>
                </div>
                <div class="col">
                    <?php dynamic_sidebar('footer-shop-4'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('/template-parts/footer/credit');?>
</footer>

