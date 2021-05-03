<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); ?> <?php wp_title('|') ?></title>
        <script type="text/javascript"> var siteUrl = '<?= get_site_url(); ?>'; </script>
        <?php wp_head(); ?>
        <meta name="theme-color" content="#75cfb8" />
        <meta property="og:image" content="<?php echo get_the_post_thumbnail_url() ?>" />
    </head>
    <body <?php body_class(array('shopia-body','bg-v-l text-black')) ?> >
