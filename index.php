<?php
get_header();
?>
<body <?php body_class(); ?>>
<?php get_template_part("/template-parts/hero") ?>
 <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">
			    <div class="row">

                    	<?php
	while (have_posts()){
		the_post();
		?>
					<div class="col-md-4 mb-3">
						<div class="card blog-post-card">
                               <?php
                        if(has_post_thumbnail()){

                            ?>
                            <a class="more-link" href="<?php echo get_post_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail',array('class' => 'img-fluid')); ?></a>
                       <?php
                        }
                        ?>
							<div class="card-body">
								<h5 class="card-title"><a class="theme-link" href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h5>
								<p class="card-text"><?php the_excerpt(); ?></p>
								<p class="mb-0"><a class="more-link" href="<?php echo get_post_permalink(); ?>">Read more →</a></p>

							</div>
							<div class="card-footer">
								<small class="text-muted">Published <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . '&nbsp;ago'; ?></small>
							</div>
						</div><!--//card-->
                    </div>
<?php
	}
	?>
                </div>
			    <nav class="pagination">
                         <?php
            the_posts_pagination(array(
                    "screen_reader_text"=>' ',
                    "prev_text"=>'New Posts',
                    "next_text"=>'Old Posts'
            ));

            ?>
				</nav>

		    </div>
	    </section>
<?php
get_footer();
?>

