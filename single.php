<?php
get_header();
get_template_part('template-parts/contents','article');

?>
<body <?php body_class(); ?>>

    <article class="content px-3 py-5 p-md-5">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
			}
		}
		?>
    </article>
<?php
get_footer();
?>

