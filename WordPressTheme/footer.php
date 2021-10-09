<footer class="">
	<div class="l-footer">
		<div class="footer">
			<div class="footer__info">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-sm.png" alt="">
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
</body>
</html>