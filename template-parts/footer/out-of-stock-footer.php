<?php if ( wp_is_mobile() ): ?>
<div class="hide-if-focus shopia-single-m-footer bg-white fixed-bottom shadow">
    <div class="container">
        <div class="row stcky-a-t-cart">
            <div class="col p-0">
                <button type="submit" class="btn out-of-tock-btn bg-gray text-white alt" disabled>Out Of Stock</button>
            </div>
            
            <?php get_template_part('/template-parts/footer/share-and-chat-button'); ?>
            
        </div>
    </div>
</div>
<?php endif; ?>