<?php $homepage_top_image = get_theme_option('homepage_top_image'); ?>
<?php if ($homepage_top_image): ?>
    <div id="homepage-top-image" role="banner">
        <?php echo flex_theme_homepage_top_image(); ?>
    </div><!-- end homepage top image -->
<?php endif; ?>