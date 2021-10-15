<!-- 上手く言っていたやつ -->

<?php get_header(); ?>

<div class="l-inner container">
    <main class="main custom-home-photos">
        <section class="custom-home inner">
            <h2 class="custom-home-title">注文住宅</h2>
            <div class="custom-home-arrow-box">
                <div class="custom-home-arrow"></div>
            </div>
            <div class="custom-home-slider-area">
                <div class="custom-home-slider-area__bg">
                    <h3 class="custom-home-slider-area__title">常滑市　K様邸</h3>
                    <ul id="slider" class="custom-home-slider-area__img-wrap">
                        <?php for($i = 1; $i <= 10 ; $i++): ?>
                            <?php if(!empty(get_field('thumbnail'.$i))): ?>
                        <li class="custom-home-slider-area__img slider-01 horizontal-img">
                            <div class="thumbnail-photo" style="background-image:url('<?php the_field('thumbnail'.$i); ?>');"></div>
                        </li>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </ul>
                </div>
                <div class="custom-home-slider__thumb-area">
                    <ul id="thumbnail-list" class="custom-home-slider__thumb-area-wrap">
                    <?php for($i = 1; $i <= 10 ; $i++): ?>
                            <?php if(!empty(get_field('thumbnail'.$i))): ?>
                        <li class="thumbnail-li slider-02 horizontal-img">
                            <div class="thumbnail-item thumbnail-photo" style="background-image:url('<?php the_field('thumbnail'.$i); ?>');"></div>
                        </li>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <?php get_template_part('template/contact-items');?>
</div>


<?php get_footer(); ?>