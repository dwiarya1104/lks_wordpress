<?php 
    get_header();
?>

<h1 style="padding-top:50px;"><?= the_title()?></h1>
<div class="single">
    <?= the_post_thumbnail()?>
</div>

<div class="single-text">
    <p><?= the_content()?></p>
</div>
<?= get_footer();?>