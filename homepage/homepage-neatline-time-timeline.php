<?php if (flex_is_neatline_time_on_home_page()): ?>
    <div id="homepage-neatline-time-timeline">
        <?php $neatline_time_timeline = flex_get_one_neatline_time_timeline(get_theme_option('homepage_neatline_time')); ?>
        <h2 class="text-center"><?php echo metadata($neatline_time_timeline, 'title'); ?></h2>
        <?php echo flex_one_neatline_time_timeline_html($neatline_time_timeline); ?>
    </div>
<?php endif; ?>
