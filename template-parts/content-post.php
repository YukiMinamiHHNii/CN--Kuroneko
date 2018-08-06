<article class="col-sm-12">
    <section class="bg-light post-content">
        <section class="post-info">
            <h2><?php the_title();?></h2>
            <p>By <?php the_author_posts_link();?> on <a href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d'));?>"><?php echo get_the_date('Y/m/d');?></a></p>
            <?php if(has_category()):?>
                <p>Category: <?php the_category(', ');?></p>
            <?php endif;?>
            <?php if(has_tag()):?>
                <p>Tags: <?php the_tags('', ', ');?></p>
            <?php endif;?>
        </section>
        <?php the_post_thumbnail();?>
        <?php the_content();?>
    </section>
</article>
<?php comments_template();?>
<?php if(comments_open()):?>
    <article class="col-sm-10 mx-auto post-comments">
        <section class="bg-light">
        <?php 
		    $fields= array(
    			'author' =>
				    '<label for="author">Name:</label>'.
				    '<input class="col-sm-12 form-control" id="author" name="author" type="text" value="'.esc_attr($commenter['comment_author']).'" size="30"/>',
			    'email' =>
    				'<label for="email">Mail: </label>'.
				    '<input class="col-sm-12 form-control" id="email" name="email" type="email" value="'.esc_attr($commenter['comment_author_email']).'" size="30"/>',
			    'comment_field'=>
    				'<label for="comment">Comment:</label>'.
				    '<textarea class="col-sm-12 form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>'
		    );
		    comment_form(array(
                    'fields'=> apply_filters('comment_form_default_fields', $fields),
					'comment_field'=>'',
					'label_submit'=>'Send comments',
                    'comment_notes_before'=>'<p>Please enter your comment or reply using the form below. (Your email address will not be published)</p>',
                    'class_submit'=>'btn btn-secondary my-2 my-sm-0',
                    'format'=>'html5'
				));
	    ?>
        </section>
    </article>
<?php endif;?>