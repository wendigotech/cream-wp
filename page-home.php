<?php
get_header(); ?>

<div class="wrapper" id="index-wrapper">
    <div class="container " id="content" tabindex="-1">
        <div class="row">
            <?php if ( get_theme_mod( 'show_left_sidebar' ) ) : ?><div class="widget-area col-md-4" role="complementary" id="left-sidebar">
                <?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?><?php dynamic_sidebar( 'left-sidebar' ); ?><?php endif; ?>


            </div><?php endif; ?>
            <div class="content-area col-md-12" id="primary">
                <main class="site-main" id="main">
                    <?php the_content(); ?>
                </main>                                 
            </div>

        </div>
    </div>
</div>


<?php get_footer(); ?>