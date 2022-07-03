<?php 
    get_header();
?>

<?php 

    get_header();
    $img = get_theme_file_uri('images/gadget1.jpg');
    // var_dump($img);
    $posts = get_posts(['numberposts' => -1]);
    
?>



<?php foreach($posts as $post) : ?>
    <h1 style="padding-top:50px;"><a href="<?= the_permalink()?>"><?= the_title() ?></a></h1>
        <div class="category">
        <?= the_post_thumbnail()?>
        </div>
            <p style="align-items:justify"><?= the_content()?></p>
    <?php endforeach; ?>    


<?= get_footer() ?>