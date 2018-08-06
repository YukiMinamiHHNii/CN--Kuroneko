<?php if(have_comments()):?>
    <article class="col-sm-10 mx-auto post-comments">
        <section class="bg-light">
			<h2 class="comments-title">Comments for <?php echo get_the_title();?></h2>
			<ol class="comment-list">
			<?php
				wp_list_comments(array('style'=>'ol','short_ping'=> true,'avatar_size'=> 34));
			?>
			</ol>
		</section>
    </article>
<?php endif;?>