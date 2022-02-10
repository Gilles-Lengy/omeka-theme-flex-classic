<?php $homepage_vimeo_video_id = get_theme_option('homepage_vimeo_video_id'); ?>
<?php $homepage_vimeo_video_color = get_theme_option('homepage_vimeo_video_color'); ?>
<div id="homepage-vimeo">
    <div class="responsive-embed widescreen">
        <iframe
                src="https://player.vimeo.com/video/<?php echo $homepage_vimeo_video_id; ?>?&portrait=0&title=no&byline=0<?php if ($homepage_vimeo_video_color): echo "&color=$homepage_vimeo_video_color"; endif; ?>"
                webkitallowfullscreen mozallowfullscreen allowfullscreen>
        </iframe>
    </div>
</div><!-- end homepage-vimeo -->
