<?php
if (flex_is_neatline_time_on_home_page()):
    queue_timeline_assets();
endif;
?>

<?php echo head(array('bodyid' => 'home')); ?>

<?php
$homepageElementsStr = get_theme_option('homepage_elements');

if ($homepageElementsStr):

    $homepageElementsArray = explode('|', $homepageElementsStr);

    foreach ($homepageElementsArray as $element):
        switch ($element) {
            case 'vimeo':
                echo common('homepage-vimeo', array(), 'homepage');
                break;
            case 'youtube':
                echo common('homepage-youtube', array(), 'homepage');
                break;
            case 'timeline':
                echo common('homepage-neatline-time-timeline', array(), 'homepage');
                break;
            case 'text':
                echo common('homepage-text', array(), 'homepage');
                break;
            case 'featured':
                echo common('featured-records');
                break;
            case 'items':
                echo common('recent-items');
                break;
        }
    endforeach;

else:
    // Will use the translator system later or sooner !!!!
    ?>
    <p>Configure the elements you want in theme configuration</p>
<?php endif; ?>

<?php fire_plugin_hook('public_home', array('view' => $this)); ?>

<?php echo foot(); ?>