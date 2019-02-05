<?php
get_header(); ?>

<div class="wrapper" id="index-wrapper">
    <div class="container " id="content" tabindex="-1">
        <div class="row">

            <div class="content-area col-md-12" id="primary">
                <main class="site-main" id="main">
                    <div><?php the_content(); ?></div>
                </main>                                 
            </div>

        </div>
    </div>
</div>


<?php get_footer(); ?>