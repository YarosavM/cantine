<section class="story cf">

    <div class="blogpost-image-zone">
        <?php echo get_the_post_thumbnail($post->ID,'large'); ?>
    </div>
    <div class="blogpost-content-zone">
        <?php the_content(); ?>
    </div>
    <?php if(get_the_tags()){ ?>
        <p class="tagsphar"><?php the_tags(); ?></p>
    <?php } ?>

    <?php wp_link_pages(array(
        'before' => '<p>' . __('Pages:', 'aletheme'),
        'after'	 => '</p>',
    )) ?>
</section>
