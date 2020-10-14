<?php
wp_footer();
?>
    <footer class="footer text-center py-2 theme-bg-dark">


        <p class="copyright">
            <a href="https://youtube.com/FollowAndrew">
                <?php
				if ( is_active_sidebar( "footer-right" ) ) {
					dynamic_sidebar( "footer-right" );
				}
				?>
            </a>
        </p>

    </footer>

</div>
</body>
</html>