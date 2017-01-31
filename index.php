<?php get_header(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class( 'mod', 'four-fifth' ); ?> itemscope="itemscope"
             itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
		<?php if ( have_posts() ) : while ( have_posts() ) :
		the_post(); ?>
        <div <?php post_class('contenu'); ?>>
            <h2 class="entry-title" itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="entry-content" itemprop="text">
				<?php the_content(); ?>
            </div>


			<?php posts_nav_link( 'sep', __('previous'), __('next') ); ?>
			<?php
			$defaults = array(
				'before'           => '<p>' . __( 'Pages:', 'thivinfo' ),
				'after'            => '</p>',
				'link_before'      => '',
				'link_after'       => '',
				'next_or_number'   => 'number',
				'separator'        => ' ',
				'nextpagelink'     => __( 'Next page', 'thivinfo' ),
				'previouspagelink' => __( 'Previous page', 'thivinfo' ),
				'pagelink'         => '%',
				'echo'             => 1
			);

			echo wp_link_pages( $defaults );

			?>
			<?php endwhile;

			else:

				_e( 'Sorry, No Post matched your criteria!', 'thivinfo' );

			endif;
			comments_template(); ?>
        </div>
    </article> <!-- main -->


<?php get_footer();