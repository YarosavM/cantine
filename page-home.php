<?php
/*
  * Template name: Home
  * */
get_header();

?>
<div class="content">
  <main class="main">
    <div class="main-top-image">
      <div class="main-header">Who we are?</div>
      <div class="main-text">
        A place for those that want a fantastic Gelato in an elegant and friendly
        environment, during their lunch break or while taking a walk along the
        shopping streets of Milan. A welcoming place, to maintain a high profile,
        even when you are relaxing. At Chocolat Milano Boccaccio, we spoil our
        clients by offering infinite options during the whole day: coffee and
        snacks for a small break, cakes and chocolate bars, but above all our
        famous Gelato.
      </div>
      <div class="buttons-wrap">
        <input class="button white-button main-action-button" type="submit" value="Find us">
        <input class="button white-button main-action-button" type="submit" value="Contact us">
        <input class="button white-button main-action-button" type="submit" value="Book a table">
      </div>
    </div>

  </main>

  <div class="blog-line-wrap">
    <div class="blog-line-c">

      <ul class="blog-post-list grid-x">
        <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>

        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

        <li class="blog-post-item cell small-6 large-4 medium-4">
          <a href="<?php the_permalink() ?>">
            <?php the_post_thumbnail( 'blog-post-image' ); ?>
          </a>

          <a href="<?php the_permalink() ?>">
            <?php the_title(); ?>
          </a>

          <!--<div class="blog-post-content">
            <?php /*the_excerpt(__('(more…)')); */?>
          </div>-->
        </li>

        <?php 
          endwhile;
          wp_reset_postdata(); ?>
      </ul>



      <div class="more-posts-zone">
        <a href="https://www.blog.com">More posts...</a>
      </div>
    </div>
  </div>

  <div class="map-wrap" id="map">
    <div class="main-header">Where we are?</div>
    <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d607.1483037970053!2d24.02577985345822!3d49.8423654442472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473add7241d43dd5%3A0xf8c00005a1a7d40e!2sYaponaHata!5e0!3m2!1sen!2sua!4v1573922060997!5m2!1sen!2sua"
        width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
  </div>

</div>

<?php get_footer();