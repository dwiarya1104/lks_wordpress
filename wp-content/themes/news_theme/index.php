<?php 

    get_header();
    $img = get_theme_file_uri('images/gadget1.jpg');
    // var_dump($img);
    $posts = get_posts(['numberposts' => 4]);
    
?>

<?php foreach($posts as $post) : ?>
    <div class="card">
        <?= the_post_thumbnail()?>
        <div class="content">
            <h1><a href="<?= the_permalink()?>"><?= the_title() ?></a></h1>
            <p style="font-size:40px;"><?= the_content()?></p>
            <p style="padding-top:15px;">Jelajahi lebih banyak tentang <?= the_category(',')?>.</p>
        </div>
    </div>
<?php endforeach; ?>

<?= get_footer() ?>
