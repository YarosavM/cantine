<section class="story cf">

    <div class="blogpost-top">
        <div class="blogpost-image-zone">
            <?php echo get_the_post_thumbnail($post->ID,'large'); ?>
        </div>
        <div class="blogpost-under-image-zone">
            <div class="post-date">
                <?php
                $date = get_the_date( $d, $post );
                echo $date;
                ?>
            </div>
        </div>
    </div>
    
    <div class="blogpost-bottom">
        <div class="blogpost-content-zone">
            <?php the_content(); ?>
        </div>
    </div>

    <?php if(get_the_tags()){ ?>
        <p class="tagsphar"><?php the_tags(); ?></p>
    <?php } ?>

    <?php wp_link_pages(array(
        'before' => '<p>' . __('Pages:', 'aletheme'),
        'after'	 => '</p>',
    )) ?>
</section>
