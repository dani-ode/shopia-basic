<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}?>
<!-- <button class="show-share-modal">Share This Story</button> -->


<?php
get_template_part('/template-parts/edit-this');

the_title( '<h1 class="product_title entry-title">', '</h1>' );
