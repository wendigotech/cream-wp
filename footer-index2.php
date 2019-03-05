</div>
            <?php if ( is_active_sidebar( 'footerfull' ) ) : ?><div class="wrapper" id="wrapper-footer-full">
                <div id="footer-full-content" tabindex="-1" class="container">
                    <div class="row">
                        <?php if ( is_active_sidebar( 'footerfull' ) ) : ?><?php dynamic_sidebar( 'footerfull' ); ?><?php endif; ?>
                        
                        
                    </div>
                </div>
            </div><?php endif; ?>
            <div class="wrapper bg-dark text-white" id="wrapper-footer">
                <div class="container">
                    <div class="row">
                        <div class="d-flex justify-content-center col-md-3">
                            <?php if ( ! has_custom_logo() ) : ?><div>
                                <a rel="home" class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a>
                            </div>

<?php else : ?><?php the_custom_logo(); ?><?php endif; ?>
                            <!-- #colophon -->
                        </div><?php if ( is_active_sidebar( 'endfull' ) ) : ?><?php dynamic_sidebar( 'endfull' ); ?><?php endif; ?><div class="col-md-12">
                            <footer class="site-footer flex-row d-flex justify-content-center" id="colophon">
                                <div class="site-info">
                                    <p><?php echo get_theme_mod( 'footer_text', 'Proudly powered by WordPress | Theme: Starter Theme 2 by Pinegrow 2018. (Version: 0.0.0)' ); ?></p>
                                </div>
                                <!-- .site-info -->
                            </footer>
                            <!-- #colophon -->
                        </div>
                        <!--col end -->
                    </div>
                </div>
                <!-- container end -->
            </div>
        </div>
        
        
        
        
        
    <?php wp_footer(); ?></body>
</html>
