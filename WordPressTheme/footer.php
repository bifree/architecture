<footer class="">
	<div class="l-footer">
		<div class="footer">
			<div class="footer__info">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-sm.png" alt=""></a>
				<p>リフォーム、注文住宅は碧南市の大友建築</p>
				<p>〒447-0013     愛知県碧南市白沢町</p>
				<p>TEL	0566-42-8648</p>
			</div>
			<div class="footer__menu">
				<?php 
					wp_nav_menu( array( 
					'theme_location' => 'footer-nav', 
					'container' => 'nav'
					) ); ?>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<!-- script -->
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- script.js -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
    <!-- script.js -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.js"></script>
<!-- script end -->
</body>
</html>