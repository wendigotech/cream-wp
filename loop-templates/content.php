 
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class( 'mb-5' ); ?> id="post-<?php the_ID(); ?>"> 
                <header class="entry-header"> 
                    <?php if ( is_singular() ) : ?>
                        <h2 class="text-center"><?php the_title(); ?></h2>
                    <?php else : ?>
                        <h2 class="text-center"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
                    <?php endif; ?> 
                    <div class="entry-meta"> 
                        <p><?php _e( 'Posted on', 'cream' ); ?> <span><?php the_modified_date(); ?></span> <?php _e( 'by', 'cream' ); ?> <span><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span></p> 
                    </div>                     
                </header>                 
                <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'large', array(
                        'class' => 'mb-4'
                    ) );
                    }
                 ?> 
                <div class="entry-content"> 
                    <?php the_excerpt( ); ?> 
                    <a class="btn btn-secondary" href="<?php echo esc_url( get_permalink() ); ?>"><?php _e( 'Read More', 'cream' ); ?></a> 
                </div>                 
                <footer class="entry-footer"></footer>                 
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'cream' ); ?></p>
    <?php endif; ?> 
    <nav aria-label="Posts navigation"> 
        <?php posts_nav_link( null, __( '&#xAB; Newer Posts', 'cream' ), __( 'Older Posts &#xBB;', 'cream' ) ); ?> 
    </nav>     
