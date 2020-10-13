<?php
get_header();
?>

<body <?php body_class(); ?>>

<header class="header text-center">
    <a class="site-title pt-lg-4 mb-0" href="<?php echo site_url() ?>"><?php bloginfo( "name" ); ?></a>

    <nav class="navbar navbar-expand-lg navbar-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navigation" class="collapse navbar-collapse flex-column">
			<?php
			if ( current_theme_supports( "custom-logo" ) ) {
				$logo_id = get_theme_mod( 'custom_logo' );
				$logo    = wp_get_attachment_image_src( $logo_id );
			}
			?>
            <img class="mb-3 mx-auto logo" src="<?php echo $logo[0]; ?>" alt="logo">


			<?php
			wp_nav_menu(
				array(
					'menu'           => 'primary',
					'container'      => '',
					'theme_location' => 'primary',
					'items_wrap'     => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>',
				)
			);
			?>
            <hr>
            <ul class="social-list list-inline py-3 mx-auto">
                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
            </ul>

        </div>
    </nav>
</header>

<div class="main-wrapper">
    <header class="page-title theme-bg-light text-center gradient py-5">
        <h1 class="heading"><?php the_title(); ?></h1>
    </header>
    <article class="content px-3 py-5 p-md-5">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				the_content();
			}
		}
		?>
    </article>
    <footer class="footer text-center py-2 theme-bg-dark">

        <p class="copyright"><a href="https://youtube.com/FollowAndrew">FollowAndrew</a></p>

    </footer>

</div>


<?php
get_footer();
?>

