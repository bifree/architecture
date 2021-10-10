<?php get_header(); ?>
	<div class="orders-page">
		<div class="topimg">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top.png">
		</div>
		<div class="nav--list">
			<h1>施工事例</h1>
			<div class="col">
				<p class="c1">ALL</p>
				<p class="c2">注文住宅</p>
				<p class="c3">リフォーム</p>
				<p class="c4">防音室</p>
			</div>
			<div class="nav--items">
				<div class="nav1">
					<div class="nav2 nav--item">
						<p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav1.png"></p>
						<div class="navitem1">注文住宅</div>
						<h3>常滑市<br>K様邸</h3>
					</div>
					<div class="nav3 nav--item">
						<p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav2.png"></p>
						<div class="navitem2">リフォーム</div>
						<h3>常滑市<br>K様邸</h3>
					</div>
					<div class="nav3 nav--item">
						<p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav3.png"></p>
						<div class="navitem1">注文住宅</div>
						<h3>常滑市<br>K様邸</h3>
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part('template/pre-footer');?>
	</div>
<?php get_footer(); ?>