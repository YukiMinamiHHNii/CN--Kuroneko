<main class="container pt-4">
    <section class="row">
    <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                get_template_part('/template-parts/content-type');
            endwhile;
        else:
            get_template_part('template-parts/content-none');
        endif;
    ?>
    </section>
    <?php if(paginate_links()!=''):?>
        <nav class="pagination">
            <?php echo paginate_links();?>
        </nav>
    <?php endif;?>
</main>