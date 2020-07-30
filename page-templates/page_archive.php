<?php
/**
 * Sitemap and Archive Page for Genesis Framework. Customized and modified by Crunchify.
 * Put this in to your child theme directory.
 *
 * @package Genesis\Templates
 * @author  Crunchify
 * @license GPL-2.0+
 * @link    https://crunchify.com/
 */

//* Template Name: Archive

add_filter( 'body_class', 'aoshigure_archive_body_class' );
/**
 * Adds landing page body class.
 *
 * @since 1.0.0
 *
 * @param array $classes Original body classes.
 * @return array Modified body classes.
 */
function aoshigure_archive_body_class( $classes ) {

	$classes[] = 'archive-page';
	return $classes;

}

//* Remove standard post content output
remove_action( 'genesis_post_content', 'genesis_do_post_content' );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );

add_action( 'genesis_entry_content', 'genesis_page_archive_content' );
add_action( 'genesis_post_content', 'genesis_page_archive_content' );
/**
 * This function outputs sitemap-esque columns displaying all pages,
 * categories, authors, monthly archives, and recent posts.
 *
 * @since 1.6
 */
function genesis_page_archive_content() { ?>

	<!-- 固定ページ一覧を表示 -->
	<h2><?php _e( 'ページ一覧', 'genesis' ); ?></h2>
	<ul>
		<?php wp_list_pages( 'title_li=' ); ?>
	</ul>

	<!-- カテゴリ一覧 -->
	<h2><?php _e( 'カテゴリ一覧', 'genesis' ); ?></h2>
	<ul>
		<?php wp_list_categories( 'sort_column=name&title_li=' ); ?>
	</ul>

	<!-- 投稿一覧 -->
	<h2><?php _e( '投稿一覧（150件）', 'genesis' ); ?></h2>
	<ul>
		<?php wp_get_archives( 'type=postbypost&limit=150' ); ?>
	</ul>

<?php
}

genesis();
