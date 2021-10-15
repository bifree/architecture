<?php
/*Template Name: kategori*/
// カテゴリ：お知らせ
?>

<?php get_header(); ?>

<?php
    $categorys = array(3);
    for ($i=0; $i<count($categorys); $i++) :
    ?>

    <?php
    query_posts('showposts=5&cat='.$categorys[$i]);
    if (have_posts()) : while (have_posts()) : the_post();
    ?>

    <div class="blog__box">
      <a href=<?php the_permalink(); ?>><div class="thumbnail">
				<?php the_post_thumbnail( 'medium' ); ?>
      </div></a>
      <div class="tags__date">
        <span class="category__news">
          <?php the_category(); ?>
        </span>
        <span class="small">
          <i class="far fa-clock"></i><?php echo get_the_date('Y.n.j'); ?>
        </span>
      </div>
      <span class="small ">
        <?php the_tags( '<i class="fas fa-tag"></i>', ' 、 ' ); ?>
      </span>
      <hr>
      <h3 class="article--title">
        <a href=<?php the_permalink(); ?>><?php the_title(); ?></a>
      </h3>
    </div>

    <?php endwhile; ?>
    <?php else: ?>
    <?php echo esc_html(get_catname($categorys[$i]))."はまだありません。"; ?>

    <?php endif; ?>
    <?php endfor; ?>

<?php get_footer(); ?>