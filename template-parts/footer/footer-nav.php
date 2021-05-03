<footer class="text-black">

    <div class="footer-nav footer-4-col pt-5 pb-5 bg-dark text-light">
        <div class="container">
            <div class="row fw-light fs-6">
                <div class="col-6 col-md-3 mb-3">
                    <?php dynamic_sidebar('footer-shop-1'); ?>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <?php dynamic_sidebar('footer-shop-2'); ?>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <?php dynamic_sidebar('footer-shop-3'); ?>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <?php dynamic_sidebar('footer-shop-4'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('/template-parts/footer/credit');?>

</footer>