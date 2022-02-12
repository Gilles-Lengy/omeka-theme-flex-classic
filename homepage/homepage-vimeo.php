<?php
$homepage_vimeo_video_id = get_theme_option('homepage_vimeo_video_id');
$homepage_vimeo_video_color = get_theme_option('homepage_vimeo_video_color');
$homepage_vimeo_video_title = get_theme_option('homepage_vimeo_video_title');
$homepage_vimeo_video_portrait = get_theme_option('homepage_vimeo_video_portrait');
$homepage_vimeo_video_byline = get_theme_option('homepage_vimeo_video_byline');
?>

<div id="homepage-vimeo">
    <div class="responsive-embed widescreen">
        <iframe
                src="https://player.vimeo.com/video/<?php echo $homepage_vimeo_video_id; ?>?&portrait=<?php echo $homepage_vimeo_video_portrait; ?>&title=<?php echo $homepage_vimeo_video_title; ?>&byline=<?php echo $homepage_vimeo_video_byline; ?><?php if ($homepage_vimeo_video_color): echo "&color=$homepage_vimeo_video_color"; endif; ?>"
                webkitallowfullscreen mozallowfullscreen allowfullscreen>
        </iframe>
    </div>
</div><!-- end homepage-vimeo -->
