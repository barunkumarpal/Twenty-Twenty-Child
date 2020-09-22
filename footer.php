<footer id="site-footer" role="contentinfo" class="header-footer-group">

    <div class="section-inner">

        <div class="footer-credits">

            <p class="footer-copyright">
                <?php
                // echo date_i18n(
                //     /* translators: Copyright date format, see https://www.php.net/date */
                //     _x( 'Y', 'copyright date format', 'twentytwenty-child' )
                // );

                if(get_field('copyright', 'option')){
                    the_field('copyright', 'option');
                }
                ?>
               
            </p><!-- .footer-copyright -->            

        </div><!-- .footer-credits -->

        <a class="to-the-top" href="#site-header">
            <span class="to-the-top-long">
                <?php
                /* translators: %s: HTML character for up arrow. */
                printf( __( 'To the top %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
                ?>
            </span><!-- .to-the-top-long -->
            <span class="to-the-top-short">
                <?php
                /* translators: %s: HTML character for up arrow. */
                printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
                ?>
            </span><!-- .to-the-top-short -->
        </a><!-- .to-the-top -->

    </div><!-- .section-inner -->

</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
