<?php /* ?>
<!-- Footer -->
<nav
    class="footer-menu <?php if($post->post_type == "gallery" and !is_single()) { echo""; } elseif(is_page_template('template-contact.php') or is_page_template('template-about.php') or is_404() or is_page_template('template-award.php') or is_page_template('page-home.php')  or is_page_template('template-press.php')){  echo ""; } else { echo "no-fixed";}    ?>">

    <!-- Social -->
    <ul class="left">
        <?php if(ale_get_option('fb')){ echo '<li class="facebook"><a href="'.ale_get_option('fb').'" rel="external"></a></li>'; } ?>
        <?php if(ale_get_option('twi')){ echo '<li class="twitter"><a href="'.ale_get_option('twi').'" rel="external"></a></li>'; } ?>
        <?php if(ale_get_option('gog')){ echo '<li class="google"><a href="'.ale_get_option('gog').'" rel="external"></a></li>'; } ?>
        <?php if(ale_get_option('pint')){ echo '<li class="pinterest"><a href="'.ale_get_option('pint').'" rel="external"></a></li>'; } ?>
        <?php if(ale_get_option('flickr')){ echo '<li class="flickr"><a href="'.ale_get_option('flickr').'" rel="external"></a></li>'; } ?>
        <?php if(ale_get_option('linked')){ echo '<li class="linkedin"><a href="'.ale_get_option('linked').'" rel="external"></a></li>'; } ?>
        <?php if(ale_get_option('insta')){ echo '<li class="instagram"><a href="'.ale_get_option('insta').'" rel="external"></a></li>'; } ?>
        <?php if(ale_get_option('emailcont')){ echo '<li class="mail"><a href="mailto:'.ale_get_option('emailcont').'" rel="external"></a></li>'; } ?>
        <?php if(ale_get_option('rssicon')){?><li class="rss"><a href="<?php echo home_url(); ?>/feed"
                rel="external"></a></li><?php } ?>
    </ul>

    <?php if(is_page_template('page-home.php')){ ?>
    <!-- Footer Menu -->
    <div class="center">
        <ul class="nav">
            <li><span><?php echo ale_get_option('footermenutitle'); ?></span>
                <?php
                    if ( has_nav_menu( 'footer_menu' ) ) {
                        wp_nav_menu(array(
                            'theme_location'=> 'footer_menu',
                            'menu'			=> 'Footer Menu',
                            'menu_class'	=> 'footermenu cf',
                            'walker'		=> new Aletheme_Nav_Walker(),
                            'container'		=> '',
                        ));
                    }
                    ?>
            </li>
        </ul>
    </div>
    <?php } ?>

    <!-- Copy -->
    <?php if (ale_get_option('copyrights')) : ?>
    <p class="right"><?php echo ale_option('copyrights'); ?></p>
    <?php else: ?>
    <p class="right">&copy; <?php _e('2013 ALL RIGHTS RESERVED', 'aletheme')?></p>
    <?php endif; ?>

</nav>
<?php */ ?>

<!-- Custom Footer -->
<footer class="footer">
    <div class="footer-p1">
        <div class="footer-content grid-x">
            <div class="footer-menu cell large-4 medium-4 small-4">
                <ul class="footer-menu-list">
                    <li class="footer-menu-element">Home</li>
                    <li class="footer-menu-element">Menu</li>
                    <li class="footer-menu-element">Contact</li>
                </ul>
            </div>
            <div class="footer-comunication cell large-8 medium-8 small-8 grid-x">
                <div class="footer-contacts cell large-8 medium-8 small-8">
                    Level 1, Portside Wharf, 39 Hercules St Hamilton QLD 4007 <br>(07) 3268 6655
                </div>

                <div class="footer-social large-4 medium-4 small-4">
                    <a href="https://facebook.com">
                        <img class="social-image" id="facebook" src="css/images/icons/043-facebook-1.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-p2">
        <div class="footer-content">
            <div class="copyright">
                &copy;2019 All rights reserved KaintinDRestaurant.<br>
                Website design by Dobie.
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<?php wp_footer(); ?>
</body>

</html>