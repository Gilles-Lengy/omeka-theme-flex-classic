<?php
if (flex_is_neatline_time_on_home_page()):
    queue_timeline_assets();
endif;
?>

<?php echo head(array('bodyid' => 'home')); ?>

<?php echo common('homepage-vimeo', array(), 'homepage'); ?>

<?php echo common('homepage-youtube', array(), 'homepage'); ?>

<?php echo common('homepage-neatline-time-timeline', array(), 'homepage'); ?>

<?php echo common('homepage-text', array(), 'homepage'); ?>

<?php echo common('featured-records'); ?>

<?php echo common('recent-items'); ?>

<?php fire_plugin_hook('public_home', array('view' => $this)); ?>

<?php echo foot(); ?>
