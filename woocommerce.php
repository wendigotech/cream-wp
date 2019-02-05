<?php
get_header(); ?>

<div class="wrapper" id="woocommerce-wrapper">
    <div tabindex="-1" id="content" class="container">
        <div class="row">

            <div id="carousel1" class="carousel slide" data-ride="carousel"> 
                <ol class="carousel-indicators"> 
                    <li data-target="#carousel1" data-slide-to="0" class="active"></li>                                     

                    <li data-target="#carousel1" data-slide-to="1"></li>                                     

                    <li data-target="#carousel1" data-slide-to="2"></li>                                     
                </ol>                                 

                <div class="carousel-inner"> 
                    <div class="carousel-item active"> 
                        <img class="d-block w-100" src="http://pinegrow.com/placeholders/img13.jpg" alt="First slide"> 
                        <div class="carousel-caption d-none d-md-block"> 
                            <h3><?php _e( 'Slide label 1', 'cream' ); ?></h3> 
                            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'cream' ); ?></p> 
                        </div>                                         
                    </div>                                     

                    <div class="carousel-item"> 
                        <img class="d-block w-100" src="http://pinegrow.com/placeholders/img11.jpg" alt="Second slide"> 
                        <div class="carousel-caption d-none d-md-block"> 
                            <h3><?php _e( 'Slide label 2', 'cream' ); ?></h3> 
                            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'cream' ); ?></p> 
                        </div>                                         
                    </div>                                     

                    <div class="carousel-item"> 
                        <img class="d-block w-100" src="http://pinegrow.com/placeholders/img20.jpg" alt="Third slide"> 
                        <div class="carousel-caption d-none d-md-block"> 
                            <h3><?php _e( 'Slide label 3', 'cream' ); ?></h3> 
                            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'cream' ); ?></p> 
                        </div>                                         
                    </div>                                     
                </div>                                 

                <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Previous', 'cream' ); ?></span> </a> 
                <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Next', 'cream' ); ?></span> </a> 
            </div><div id="primary" class="content-area col-md-12">
                <main class="site-main" id="main">
                    <?php get_template_part( 'loop-templates/content-woocommerce' ); ?>
                </main>                                 
            </div>

        </div>
    </div>
</div>


<?php get_footer(); ?>