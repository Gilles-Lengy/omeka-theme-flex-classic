<?php
$homepage_youtube_video_id = get_theme_option('homepage_youtube_video_id');
?>
<div id="homepage-youtube">
    <div class="responsive-embed widescreen">
        <iframe
                width="560"
                height="315"
                src="https://www.youtube.com/embed/<?php echo $homepage_youtube_video_id; ?>"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
        </iframe>
    </div>
</div><!-- end homepage-youtube -->
