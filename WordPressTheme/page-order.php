<?php get_header(); ?>

<div class="l-inner container">
    <main class="main">
        <section class="custom-home inner">
            <h2 class="custom-home-title">注文住宅</h2>
            <div class="custom-home-arrow-box">
                <div class="custom-home-arrow"></div>
            </div>
            <div class="custom-home-slider-area">
                <div class="custom-home-slider-area__bg">
                    <h3 class="custom-home-slider-area__title">常滑市　K様邸</h3>
                    <ul id="slider" class="custom-home-slider-area__img-wrap">
                        <li class="custom-home-slider-area__img slider-01 vertical-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/01.png" alt="" class="examplephoto">
                        </li>
                        <li class="custom-home-slider-area__img slider-02 horizontal-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/02.png" alt="" class="examplephoto">
                        </li>
                        <li class="custom-home-slider-area__img slider-03 horizontal-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/03.png" alt="" class="examplephoto">
                        </li>
                        <li class="custom-home-slider-area__img slider-04 horizontal-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/04.png" alt="" class="examplephoto">
                        </li>
                        <li class="custom-home-slider-area__img slider-05 horizontal-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/05.png" alt="" class="examplephoto">
                        </li>
                        <li class="custom-home-slider-area__img slider-06 horizontal-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/06.png" alt="" class="examplephoto">
                        </li>
                        <li class="custom-home-slider-area__img slider-07 horizontal-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/07.png" alt="" class="examplephoto">
                        </li>
                        <li class="custom-home-slider-area__img slider-08 horizontal-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/08.png" alt="" class="examplephoto">
                        </li>
                        <li class="custom-home-slider-area__img slider-09 vertical-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/09.png" alt="" class="examplephoto">
                        </li>
                        <li class="custom-home-slider-area__img slider-10 horizontal-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/10.png" alt="" class="examplephoto">
                        </li>
                    </ul>
                </div>
                <div class="custom-home-slider__thumb-area">
                    <ul id="thumbnail-list" class="custom-home-slider__thumb-area-wrap">
                        <li class="thumbnail-item slider-01 vertical-img thumbnail-current">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/01.png" alt="" class="examplephoto">
                        </li>
                        <li class="thumbnail-item slider-02 horizontal-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/02.png" alt="" class="examplephoto">
                        </li>
                        <li class="thumbnail-item slider-03 horizontal-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/03.png" alt="" class="examplephoto">
                        </li>
                        <li class="thumbnail-item slider-04 horizontal-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/04.png" alt="" class="examplephoto">
                        </li>
                        <li class="thumbnail-item slider-05 horizontal-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/05.png" alt="" class="examplephoto">
                        </li>
                        <li class="thumbnail-item slider-06 horizontal-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/06.png" alt="" class="examplephoto">
                        </li>
                        <li class="thumbnail-item slider-07 horizontal-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/07.png" alt="" class="examplephoto">
                        </li>
                        <li class="thumbnail-item slider-08 horizontal-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/08.png" alt="" class="examplephoto">
                        </li>
                        <li class="thumbnail-item slider-09 vertical-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/09.png" alt="" class="examplephoto">
                        </li>
                        <li class="thumbnail-item slider-10 horizontal-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/10.png" alt="" class="examplephoto">
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <?php get_template_part('template/contact-items');?>
</div>

<?php get_footer(); ?>