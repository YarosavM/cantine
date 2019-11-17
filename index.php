<?php get_header(); ?>

<?php ?>
    <!-- Content -->
    <div class="blog-center-align blog-main">

        <!-- Blog Caption -->
        <div class="blog-caption">
            <div class="blogtitle"><?php _e('Blog Posts','aletheme'); ?></div>
        </div>

        <!-- Filters Here -->
        <ul class="blog-filter-line">
            <li class="search">
                <form role="search" method="get" id="searchform" action="<?php echo site_url()?>" >
                    <input type="search" class="searchinput" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php _e('SEARCH', 'aletheme')?>" />
                    <button type="submit" id="searchsubmit"></button>
                </form>
            </li>
        </ul>

        <!-- Blog Content -->
        <div class="blog-content grid-x">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php ale_part('postpreview' );?>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>

        <!-- Blog Nav  -->
        <div class="blog-nav">
            <span class="left"><?php echo get_previous_posts_link(__('&lt; Newer Posts','aletheme')); ?></span>
            <span class="right"><?php echo get_next_posts_link(__('Older Posts &gt;','aletheme')); ?></span>
            <div class="center"><?php _e('page','aletheme'); ?> <?php echo $paged; ?> <?php _e('of','aletheme'); ?> <?php echo $wp_query->max_num_pages; ?></div>
        </div>

        <!-- Blog Footer
        <div class="blog-footer">
            <?php /*ale_part('archives'); */?>
        </div>  -->

    </div>

<?php?>
<?php get_footer(); ?>