<?php $homepage_top_image = get_theme_option('homepage_top_image'); ?>
<?php if ($homepage_top_image): ?>
    <header id="homepage-top-image" role="banner">
        <?php echo flex_theme_homepage_top_image(); ?>
    </header><!-- end homepage top image -->
<?php endif; ?>