<!-- Blog Item -->
<div class="blog-item cell small-12 medium-6 large-4">
    <a href="<?php the_permalink(); ?>" class="img-post">
        <div><?php /* _e('open post','aletheme'); */?></div>
        <span class="darken"></span>
        <span class="border"></span>
        <?php echo get_the_post_thumbnail($post->ID, 'post-thumba') ?>
    </a>
    <div class="item-content">
        <a href="<?php the_permalink(); ?>" class="blogpost-caption"><?php the_title(); ?></a>
        <div class="blog-text"><?php echo ale_trim_excerpt('25'); ?></div>
        <!--<a class="href" href="<?php /*the_permalink(); ?>"><?php _e('take a look','aletheme'); */?></a>-->
    </div>
</div>