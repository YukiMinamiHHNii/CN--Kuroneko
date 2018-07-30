<article class="col-lg-4 col-md-6 col-sm-12 post">
    <div class="prev-header bg-secondary">
        <a href="#">
            <h3><?php the_title();?></h3>
        </a>
        <p>By <a href="#">YukiMinami</a> on <a href="#">2018/07/29</a></p>
        <p>Category: <a href="#">category</a></p>
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