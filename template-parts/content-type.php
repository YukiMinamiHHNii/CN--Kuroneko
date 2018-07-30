<?php 
    if(!is_page()&&!is_single()):
        get_template_part('/template-parts/content-listing');
    else:
?>
    <h1>Is a post or a page</h1>
<?php endif;?>