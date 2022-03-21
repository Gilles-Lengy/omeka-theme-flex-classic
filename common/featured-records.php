<div class="featured-records">
    <?php $mainFeaturedRecordType = (get_theme_option('home_main_featured') !== null) ? get_theme_option('home_main_featured') : 'item'; ?>
    <!-- Featured Collection -->
    <div class="main featured">
        <?php if (($mainFeaturedRecordType == 'exhibit') && !plugin_is_active('ExhibitBuilder')): ?>
            <?php echo __('Exhibit Builder is not installed.'); ?>
        <?php else: ?>
            <?php echo foundation_random_featured_records_html($mainFeaturedRecordType); ?>
        <?php endif; ?>
    </div><!-- end featured collection -->


    <div class="supporting featured">
        <?php $secondFeaturedRecordType = (get_theme_option('home_second_featured') !== null) ? get_theme_option('home_second_featured') : 'item'; ?>
        <!-- Featured Collection -->
        <?php if (($secondFeaturedRecordType == 'exhibit') && !plugin_is_active('ExhibitBuilder')): ?>
            <?php echo __('Exhibit Builder is not installed.'); ?>
        <?php else: ?>
            <?php echo foundation_random_featured_records_html($secondFeaturedRecordType); ?>
        <?php endif; ?>

        <?php $thirdFeaturedRecordType = (get_theme_option('home_third_featured') !== null) ? get_theme_option('home_third_featured') : 'item'; ?>
        <!-- Featured Collection -->
        <?php if (($thirdFeaturedRecordType == 'exhibit') && !plugin_is_active('ExhibitBuilder')): ?>
            <?php echo __('Exhibit Builder is not installed.'); ?>
        <?php else: ?>
            <?php echo foundation_random_featured_records_html($thirdFeaturedRecordType); ?>
        <?php endif; ?>
    </div>
</div>
