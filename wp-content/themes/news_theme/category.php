<?php 
    get_header();
    $img = get_theme_file_uri('images/default.jpg')
?>


<?php while(have_posts()): the_post()?>
<h1 style="padding-top:50px;"><?= the_title()?></h1>
<div class="category">
    <?php the_post_thumbnail()?>
</div>
    <div class="single-text">
        <p><?= the_content()?></p>
    </div>
<?php endwhile;?>


<?= get_footer()?>