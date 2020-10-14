<?php
get_header();
?>
<body <?php body_class(); ?>>
<?php get_template_part( "/template-parts/hero" ) ?>
<article class="content px-3 py-5 p-md-5">
	<?php
	_e( "Sorry! We could not found what you are looking for", "devsblog" )
	?>
</article>
<?php
get_footer();
?>

