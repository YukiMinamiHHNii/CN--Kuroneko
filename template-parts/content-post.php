<article class="col-sm-12">
    <section class="bg-light post-content">
        <section class="post-info">
            <h1><?php the_title();?></h1>
            <p>By <?php the_author_posts_link();?> on <a href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d'));?>"><?php echo get_the_date('Y/m/d');?></a></p>
            <p>Category: <?php the_category(', ');?></p>
        </section>
        <?php the_post_thumbnail();?>
        <?php the_content();?>
    </section>
</article>
<?php if(comments_open()):?>
    <article class="col-sm-10 mx-auto post-comments">
        <section class="bg-light ">
            <?php comments_template();?>
        </section>
    </article>
<?php endif;?>