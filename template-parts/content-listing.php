<article class="col-lg-4 col-md-6 col-sm-12 post">
    <div class="prev-header bg-secondary">
        <a href="<?php the_permalink();?>">
            <h3><?php the_title();?></h3>
        </a>
        <p>By <?php the_author_posts_link();?> on <a href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d'));?>"><?php echo get_the_date('Y/m/d');?></a></p>
        <?php if(has_category()):?>
            <p>Category: <?php the_category(', ');?></p>
        <?php endif;?>
        <?php if(has_tag()):?>
            <p>Tags: <?php the_tags('', ', ');?></p>
        <?php endif;?>
    </div>
    <div class="prev-body bg-light">
        <div class="prev-img">
            <?php the_post_thumbnail();?>
        </div>
        <p class="prev-text">
            <?php echo get_the_excerpt();?>
        </p>
    </div>
</article>