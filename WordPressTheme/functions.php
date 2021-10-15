<?php
/**
 * Functions
 */

/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );

/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{

	wp_enqueue_style( 'my', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1', 'all' );

	wp_enqueue_script( 'my', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.1', true );

}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
 * メニューの登録
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
		 */
function my_menu_init() {
	register_nav_menus(
		array(
			'global'  => 'ヘッダーメニュー',
			'utility' => 'ユーティリティメニュー',
			'drawer'  => 'ドロワーメニュー',
		)
	);
}
add_action( 'init', 'my_menu_init' );
// カスタムメニュー設定
register_nav_menu( 'header-nav', ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav', ' フッターナビゲーション ' );
/*
 * メニューの登録
 *
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */


/**
 * ウィジェットの登録
 *
 * @codex http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
 */
// function my_widget_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => 'サイドバー',
// 			'id'            => 'sidebar',
// 			'before_widget' => '<div id="%1$s" class="p-widget %2$s">',
// 			'after_widget'  => '</div>',
// 			'before_title'  => '<div class="p-widget__title">',
// 			'after_title'   => '</div>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'my_widget_init' );


/**
 * アーカイブタイトル書き換え
 *
 * @param string $title 書き換え前のタイトル.
 * @return string $title 書き換え後のタイトル.
 */
function my_archive_title( $title ) {

	if ( is_home() ) { /* ホームの場合 */
		$title = 'ブログ';
	} elseif ( is_category() ) { /* カテゴリーアーカイブの場合 */
		$title = '' . single_cat_title( '', false ) . '';
	} elseif ( is_tag() ) { /* タグアーカイブの場合 */
		$title = '' . single_tag_title( '', false ) . '';
	} elseif ( is_post_type_archive() ) { /* 投稿タイプのアーカイブの場合 */
		$title = '' . post_type_archive_title( '', false ) . '';
	} elseif ( is_tax() ) { /* タームアーカイブの場合 */
		$title = '' . single_term_title( '', false );
	} elseif ( is_search() ) { /* 検索結果アーカイブの場合 */
		$title = '「' . esc_html( get_query_var( 's' ) ) . '」の検索結果';
	} elseif ( is_author() ) { /* 作者アーカイブの場合 */
		$title = '' . get_the_author() . '';
	} elseif ( is_date() ) { /* 日付アーカイブの場合 */
		$title = '';
		if ( get_query_var( 'year' ) ) {
			$title .= get_query_var( 'year' ) . '年';
		}
		if ( get_query_var( 'monthnum' ) ) {
			$title .= get_query_var( 'monthnum' ) . '月';
		}
		if ( get_query_var( 'day' ) ) {
			$title .= get_query_var( 'day' ) . '日';
		}
	}
	return $title;
};
add_filter( 'get_the_archive_title', 'my_archive_title' );


/**
 * 抜粋文の文字数の変更
 *
 * @param int $length 変更前の文字数.
 * @return int $length 変更後の文字数.
 */
function my_excerpt_length( $length ) {
	return 80;
}
add_filter( 'excerpt_length', 'my_excerpt_length', 999 );


/**
 * 抜粋文の省略記法の変更
 *
 * @param string $more 変更前の省略記法.
 * @return string $more 変更後の省略記法.
 */
function my_excerpt_more( $more ) {
	return '...';

}
add_filter( 'excerpt_more', 'my_excerpt_more' );

add_action('init','create_post_type');
function create_post_type(){
	register_post_type('news',//
	array(
		'labels'=>array(
			'name'=>__('新着'),//
			'singular_name'=>__('新着')
		),
		'public'=>true,
		'query_var'=>true,
		'hierarchical'=>false,
		'menu_positon'=>6,
		'has_archive'=>true,
		'supports'=>array(
			'title',
			'author',
			'editor',
			'custom-fields',
			'thumbnail',
			'excerpt',
		),
	));

	register_post_type('reform-info',//
	array(
		'labels'=>array(
			'name'=>__('リフォーム'),//
			'singular_name'=>__('リフォーム')
		),
		'public'=>true,
		'query_var'=>true,
		'hierarchical'=>false,
		'menu_positon'=>6,
		'has_archive'=>true,
		'supports'=>array(
			'title',
			'author',
			'editor',
			'custom-fields',
			'thumbnail',
			'excerpt',
		),
	));

	register_post_type('soundproof',//
	array(
		'labels'=>array(
			'name'=>__('防音室'),//
			'singular_name'=>__('防音室')
		),
		'public'=>true,
		'query_var'=>true,
		'hierarchical'=>false,
		'menu_positon'=>6,
		'has_archive'=>true,
		'supports'=>array(
			'title',
			'author',
			'editor',
			'category',
			'custom-fields',
			'thumbnail',
			'excerpt',
		),
	));
/* ここから */
	register_taxonomy(
	‘event_cat’, /* タクソノミーの名前 */
	‘event’,
	array(
	‘hierarchical’ => true, //カテゴリータイプの指定
	‘update_count_callback’ => ‘_update_post_term_count’,
	//ダッシュボードに表示させる名前
	‘label’ => ‘イベントのカテゴリー’,
	‘public’ => true,
	‘has_archive’ => true, /* アーカイブページを持つ */
	‘show_ui’ => true
	)
	);
	register_taxonomy_for_object_type('post_tag', 'article');
}

function add_post_category_archive( $wp_query ) {
	if ($wp_query->is_main_query() && $wp_query->is_category()) {
	$wp_query->set( 'post_type', array('post','article'));
	}
	}
	add_action( 'pre_get_posts', 'add_post_category_archive' , 10 , 1);

	function add_post_tag_archive( $wp_query ) {
		if ($wp_query->is_main_query() && $wp_query->is_tag()) {
		$wp_query->set( 'post_type', array('post','article'));
		}
		}
		add_action( 'pre_get_posts', 'add_post_tag_archive' , 10 , 1);

//物件詳細・画像の取得・カスタムフィールド
function my_custom_single_popular_post( $post_html, $p, $instance ){
	//画像(返り値は「画像ID」)
	$img = get_field( 'img', $p->id ); // 'img' には Advanced Custom Fields で設定した物を入れてください。
	$imageUrl = wp_get_attachment_image_src( $img, 'full' ); //サイズは自由に
	$imghtml = '<img src="'.$imageUrl[ 0 ].'" alt="">';
	// （略）
}