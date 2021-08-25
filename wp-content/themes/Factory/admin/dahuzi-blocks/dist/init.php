<?php
/**
 * @Author: 大胡子
 * @Email:  dahuzi@xintheme.com
 * @Link:   www.dahuzi.me
 * @Date:   2020-12-09 08:11:20
 * @Last Modified by:   dahuzi
 * @Last Modified time: 2020-12-11 00:01:10
 */

/** --------------------------------------------------------------------------------- *
 *  为前端和后端加载资源
 *  --------------------------------------------------------------------------------- */
function dahuzi_blocks_block_assets() {

	// 加载已编译的样式
	wp_enqueue_style(
		'dahuzi-blocks-style-css',
		get_template_directory_uri() . '/admin/dahuzi-blocks/dist/blocks.style.build.css',
		array(),
		filemtime( get_stylesheet_directory() . '/admin/dahuzi-blocks/dist/blocks.style.build.css')
	);

}
add_action( 'init', 'dahuzi_blocks_block_assets' );

/** --------------------------------------------------------------------------------- *
 *  后端编辑器加载JS
 *  --------------------------------------------------------------------------------- */

function dahuzi_blocks_editor_assets() {

	// 将编译后的块加载到编辑器中
	wp_enqueue_script(
		'dahuzi-blocks-block-js',
		get_template_directory_uri() . '/admin/dahuzi-blocks/dist/blocks.build.js',
		array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-components', 'wp-editor' ),
		//'1.0.0',
		filemtime( get_stylesheet_directory() . '/admin/dahuzi-blocks/dist/blocks.build.js'),
		true
	);

	wp_enqueue_style(
		'dahuzi-blocks-block-editor-css',
		get_template_directory_uri() . '/admin/dahuzi-blocks/dist/blocks.editor.build.css',
		array( 'wp-edit-blocks' ),
		filemtime( get_stylesheet_directory() . '/admin/dahuzi-blocks/dist/blocks.editor.build.css')
	);

	$user_data = wp_get_current_user();
	unset( $user_data->user_pass, $user_data->user_email );

	// 传入 REST URL
	wp_localize_script(
		'dahuzi-blocks-block-js',
		'dahuzi_globals',
		array(
			'rest_url'      => esc_url( rest_url() ),
			'user_data'     => $user_data,
			'is_wpe'        => function_exists( 'is_wpe' ),
		)
	);
}
add_action( 'enqueue_block_editor_assets', 'dahuzi_blocks_editor_assets' );


/** --------------------------------------------------------------------------------- *
 *  添加块类别
 *  --------------------------------------------------------------------------------- */

add_filter( 'block_categories', 'dahuzi_blocks_add_custom_block_category' );
function dahuzi_blocks_add_custom_block_category( $categories ) {

	return array_merge(
		$categories,
		array(
			array(
				'slug'  => 'dahuzi-blocks',
				'title' => 'XinTheme Blocks',
			),
		)
	);
}
