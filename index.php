<?php
if (flex_is_neatline_time_on_home_page()):
    queue_timeline_assets();
endif;
?>

<?php echo head(array('bodyid' => 'home')); ?>

<?php echo common('homepage-vimeo', array(), 'homepage'); ?>

<?php echo common('homepage-youtube', array(), 'homepage'); ?>

<?php echo common('featured-records'); ?>


<?php if (get_theme_option('Homepage Text')): ?>
    <?php $introBg = (get_theme_option('Homepage Intro Background') ? 'style="background-image:url(' . foundation_homepage_intro_background() . ')"' : ''); ?>
    <div id="intro" class="text-center" <?php echo $introBg; ?>>
        <?php echo get_theme_option('Homepage Text'); ?>
    </div>
    <hr>
<?php endif; ?>

<?php if (flex_is_neatline_time_on_home_page()): ?>
    <div id="homepage-neatline-time-timeline">
        <?php $neatline_time_timeline = flex_get_one_neatline_time_timeline(get_theme_option('homepage_neatline_time')); ?>
        <h2 class="text-center"><?php echo metadata($neatline_time_timeline, 'title'); ?></h2>
        <?php echo flex_one_neatline_time_timeline_html($neatline_time_timeline); ?>
    </div>
<?php endif; ?>

<?php
$recentItems = get_theme_option('Homepage Recent Items');
if ($recentItems === null || $recentItems === ''):
    $recentItems = 6;
else:
    $recentItems = (int)$recentItems;
endif;
if ($recentItems):
    ?>
    <div class="supporting-content">
        <h2 class="text-center"><?php echo __('Recently Added Items'); ?></h2>
        <hr>
        <div class="recent-items">
            <?php echo recent_items($recentItems); ?>
            <p class="view-items-link"><a
                        href="<?php echo html_escape(url('items')); ?>"><?php echo __('View All Items'); ?></a></p>
        </div>
        <div class="other">
            <div class="item total">
                <span class="count"><?php echo total_records('item'); ?></span> <?php echo __('items'); ?>
            </div>
            <div class="collection total">
                <span class="count"><?php echo total_records('collections'); ?></span> <?php echo __('collections'); ?>
            </div>
            <?php if (plugin_is_active('ExhibitBuilder')): ?>
                <div class="exhibit total">
                    <span class="count"><?php echo total_records('exhibits'); ?></span> <?php echo __('exhibits'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div><!--end recent-items -->
<?php endif; ?>

<?php fire_plugin_hook('public_home', array('view' => $this)); ?>

<?php echo foot(); ?>
