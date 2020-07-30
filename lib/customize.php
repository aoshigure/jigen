<?php
/**
 * Monochrome Pro.
 *
 * This file adds the Customizer additions to the Monochrome Pro Theme.
 *
 * @package Monochrome
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/monochrome/
 */

add_action( 'customize_register', 'monochrome_customizer_register' );
/**
 * Registers settings and controls with the Customizer.
 *
 * @since 1.0.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function monochrome_customizer_register( $wp_customize ) {

	// 独自カスタマイズ
	$wp_customize->add_section(
		'monochrome_theme_options',
		[
			'description' => __( '利用可能なオプション', 'monochrome-pro' ),
			'title'       => __( '独自設定', 'monochrome-pro' ),
			'priority'    => 30,
		]
	);

	// 独自カスタマイズ｜検索の設定
	$wp_customize->add_setting(
		'monochrome_header_search',
		[
			'default'           => monochrome_customizer_get_default_search_setting(),
			'sanitize_callback' => 'absint',
		]
	);

	// 独自カスタマイズ｜検索のコントロール
	$wp_customize->add_control(
		'monochrome_header_search',
		[
			'label'       => __( 'メニュー検索アイコンを表示しますか？', 'monochrome-pro' ),
			'description' => __( 'チェックボックスをオンにすると、メニューに検索アイコンが表示されます。', 'monochrome-pro' ),
			'section'     => 'monochrome_theme_options',
			'type'        => 'checkbox',
			'settings'    => 'monochrome_header_search',
		]
	);

	// 独自カスタマイズ｜段落スタイルの設定
	$wp_customize->add_setting(
		'monochrome_intro_paragraph_styling',
		[
			'default'           => 1,
			'sanitize_callback' => 'absint',
		]
	);

	// 独自カスタマイズ｜段落スタイルのコントロール
	$wp_customize->add_control(
		'monochrome_intro_paragraph_styling',
		[
			'label'       => __( '単一の投稿で「イントロ」段落スタイルを有効にしますか？', 'monochrome-pro' ),
			'description' => __( 'チェックボックスをオンにすると、すべての単一投稿の最初の段落に「イントロ」のフォントサイズとスタイルが自動的に適用されます。', 'monochrome-pro' ),
			'section'     => 'monochrome_theme_options',
			'settings'    => 'monochrome_intro_paragraph_styling',
			'type'        => 'checkbox',
		]
	);

	// カラー｜リンクカラーの設定
	$wp_customize->add_setting(
		'monochrome_link_color',
		[
			'default'           => monochrome_customizer_get_default_link_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	// カラー｜リンクカラーのコントロール
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'monochrome_link_color',
			[
				'description' => __( 'リンクされたタイトル、メニューリンク、エントリメタリンクなどのホバーのデフォルトの色を変更します。', 'monochrome-pro' ),
				'label'       => __( 'リンクカラー', 'monochrome-pro' ),
				'section'     => 'colors',
				'settings'    => 'monochrome_link_color',
			]
		)
	);

	// カラー｜アクセントカラーの設定
	$wp_customize->add_setting(
		'monochrome_accent_color',
		[
			'default'           => monochrome_customizer_get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	// カラー｜アクセントカラーのコントロール
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'monochrome_accent_color',
			[
				'description' => __( 'ブロックベースのボタンに使用される色と他のボタンのホバー色を変更します。', 'monochrome-pro' ),
				'label'       => __( 'アクセントカラー', 'monochrome-pro' ),
				'section'     => 'colors',
				'settings'    => 'monochrome_accent_color',
			]
		)
	);

	// カラー｜フッターカラーのグラデーションスタートの設定
	$wp_customize->add_setting(
		'monochrome_footer_start_color',
		[
			'default'           => monochrome_customizer_get_default_footer_start_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	// カラー｜フッターカラーのグラデーションスタートのコントロール
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'monochrome_footer_start_color',
			[
				'description' => __( 'フッターのグラデーションの開始のデフォルト色を変更します。', 'monochrome-pro' ),
				'label'       => __( 'フッターカラーのグラデーションスタート', 'monochrome-pro' ),
				'section'     => 'colors',
				'settings'    => 'monochrome_footer_start_color',
			]
		)
	);

	// カラー｜フッターカラーのグラデーションエンドの設定
	$wp_customize->add_setting(
		'monochrome_footer_end_color',
		[
			'default'           => monochrome_customizer_get_default_footer_end_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	// カラー｜フッターカラーのグラデーションエンドのコントロール
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'monochrome_footer_end_color',
			[
				'description' => __( 'フッターの終わりのグラデーションのデフォルト色を変更します。', 'monochrome-pro' ),
				'label'       => __( 'フッターカラーのグラデーションエンド', 'monochrome-pro' ),
				'section'     => 'colors',
				'settings'    => 'monochrome_footer_end_color',
			]
		)
	);

	// サイト基本情報にフッターロゴのアップロードのコントロールを追加します。
	$wp_customize->add_setting(
		'monochrome-footer-logo',
		[
			'default'           => monochrome_get_default_footer_logo(),
			'sanitize_callback' => 'esc_attr',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'monochrome-footer-logo',
			[
				'description' => __( 'フッタークレジットの上に表示する画像を選択します。', 'monochrome-pro' ),
				'label'       => __( 'フッターロゴ', 'monochrome-pro' ),
				'section'     => 'title_tagline',
				'settings'    => 'monochrome-footer-logo',
			]
		)
	);

}
