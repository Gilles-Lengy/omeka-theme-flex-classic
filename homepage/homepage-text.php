<?php if (get_theme_option('Homepage Text')): ?>
    <?php $introBg = (get_theme_option('Homepage Intro Background') ? 'style="background-image:url(' . foundation_homepage_intro_background() . ')"' : ''); ?>
    <div id="intro" class="text-center" <?php echo $introBg; ?>>
        <?php echo get_theme_option('Homepage Text'); ?>
    </div>
<?php endif; ?>
