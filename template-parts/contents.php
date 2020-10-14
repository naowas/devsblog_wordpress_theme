<?php get_template_part( "/template-parts/hero" ) ?>
<div class="container">
    <header class="content-header">
        <div class="meta mb-3"><span class="date"><?php the_date() ?></span>
            <span class="tag"><i class='fa fa-tag'></i> <?php the_tags(); ?> </span>
            <span class="comment"><a href="#comments"><i
                            class='fa fa-comment'></i> <?php comments_number(); ?> </a></span>
        </div>
    </header>
	<?php
	if ( has_post_thumbnail() ){
	    the_post_thumbnail('post-thumbnail',array('class' => 'img-fluid'));
	}
	?>

	<?php
	the_content();
	?>
	<?php
	comments_template();
	?>

</div>



