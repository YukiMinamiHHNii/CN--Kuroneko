<?php 
    if(!is_page()&&!is_single()):
        get_template_part('/template-parts/content-listing');
    else:
        get_template_part('/template-parts/content-post');
    endif;
?>