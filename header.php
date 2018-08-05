<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo home_url('/');?>">
                    <?php
						if(has_custom_logo()):
							the_custom_logo();
						else:
							bloginfo('name');
						endif;
                    ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarColor03">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php 
                                $categories = get_categories(array('orderby'=>'name','order'=>'ASC'));
                                foreach( $categories as $category ) {
                                    $postLink= get_category_link($category->term_id);
                                    echo "<a class='dropdown-item' href='$postLink'>".$category->name."</a>";
                                } 
                            ?>
                        </div>
                    </li>     
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form> 
                </ul>
            </div>
        </div>
    </nav>