	<?php if ( have_comments() ) : ?>

	<h2 class="comments-title">
		<?php
			$comments_number = get_comments_number();
		if ( '1' === $comments_number ) {
			/* translators: %s: post title */
			printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'twentyfourteen' ), get_the_title() );
		} else {
			printf(
				/* translators: 1: number of comments, 2: post title */
				_nx(
					'%1$s thought on &ldquo;%2$s&rdquo;',
					'%1$s thoughts on &ldquo;%2$s&rdquo;',
					$comments_number,
					'comments title',
					'twentyfourteen'
				),
				number_format_i18n( $comments_number ),
				get_the_title()
			);
		}
		?>
	</h2>

	<ol class="comment-list">
		<?php
			wp_list_comments(
				array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 34,
				)
			);
		?>
	</ol><!-- .comment-list -->

	<?php if ( ! comments_open() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfourteen' ); ?></p>
	<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>
