<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('body_musicold_class'); ?> >

<?php wp_body_open(); ?>

<!-- Navigaton Menu -->
<?php get_template_part('template-parts/header/content', 'menu'); ?>

    