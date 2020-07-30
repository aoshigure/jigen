モノクロームプロ
https://my.studiopress.com/themes/monochrome/

インストール
1. FTP経由でMonochrome Proテーマフォルダーをwp-content / themes /ディレクトリにアップロードします（Genesis親テーマもwp-content / themes /ディレクトリにある必要があります）。
2. WordPressダッシュボードに移動し、[外観]を選択します。
3. Monochromeテーマをアクティブにします。
4. WordPressダッシュボード内で、[Genesis]> [テーマ設定]に移動し、好みに合わせて設定します。デモのようなテーマを設定するには、https：//my.studiopress.com/documentation/monochrome-pro-theme/にアクセスしてください。

必要に応じて、example.com / wp-admin / admin.php？page = genesis-getting-startedにアクセスして、テーマをワンクリックテーマセットアップから再開します。

ウィジェットエリア
プライマリサイドバー-コンテンツ/サイドバーまたはサイドバー/コンテンツサイトレイアウトオプションを使用している場合、これはプライマリサイドバーです。
Before Footer CTA-これは、Before Footer CTAセクションです。
エントリー後-エントリー後のセクションです。

アイコンフォント
Monochrome Proテーマで使用されているアイコンは著作権フリーで、https：//ionicons.com/の厚意により提供されています。

ローカリゼーション
Monochrome Proテーマは翻訳対応です。翻訳プロセスの詳細については、https：//my.studiopress.com/documentation/getting-started/translations/translating-genesis-and-studiopress-themes/をご覧ください。

サポート
テーマのサポートについては、https：//my.studiopress.com/help/にアクセスしてください。

変更履歴

= 1.5.0 =

Monochrome Pro 1.5.0にはWordPress 5.4以降が必要です。

*追加：WordPress 5.4ソーシャルアイコンのCSSスタイル。
*追加：テーマの色がインラインテキストの色で機能するようにするエディタースタイル。
*変更：ワンクリックテーマの設定コンテンツを更新して、WordPress 5.4ボタンマークアップを含めました。
*変更：リンクの色、ボタン、見出し、リストなど、WordPress 5.4互換のエディターとフロントエンドのスタイル。

= 1.4.0 =
*追加：WordPress 5.3で利用可能な「スクリプト」と「スタイル」のHTML5サポート。
*追加：Genesis 3.2で利用可能な `genesis-lazy-load-images`のサポート。
*追加：テーマのアクティブ化時に投稿メタを設定。
*追加：WordPress 5.3配置クラス。
*変更：簡素化された `genesis_sample_secondary_menu_args`関数。
*変更：ネストされたブロックのブロック幅CSS。
*変更：ブロック色オプションを許可するためのセパレーターとhrスタイル。
*変更：画像、ギャラリー、ギャラリーアイテムのfigcaptionsのCSS。
*変更：エディターとフロントエンド間の整合性を向上させ、新しいWordPress 5.3設定を可能にするためのテーブルのCSS。
*削除：四角いボタンスタイル。新しいボタンブロックの境界線半径設定が優先されます。

= 1.3.0 =
Monochrome Pro 1.3.0にはGenesis 3.1以降が必要です。

*追加：ワンクリックテーマセットアップオプションにスターターパック。
*追加：ワンクリックテーマのセットアップ中にWPFormsフォームを作成し、サンプルの連絡先ページにWPFormsブロックを挿入します。
*変更：ワンクリックのテーマ設定コンテンツを反映するようにスクリーンショットを更新。
*変更：custom-headerをgenesis-custom-logoに置き換えます。
*変更：CHILD_THEME_NAMEおよびCHILD_THEME_VERSION定数を宣言する代わりに、Genesis 3.0.0からの新しいgenesis_get_theme_handle（）およびgenesis_get_theme_version（）関数を使用します。
*変更：PHPの短い配列構文を使用。
*変更：テーマサポートをconfig / theme-supports.phpに統合。
*変更：matchHeightスクリプトを削除し、CSSフレックスを使用してWooCommerce製品リストの高さを一致させます。
*変更：ランディングページテンプレートでブレッドクラムとレイアウト設定を使用できるようになりました。
*修正：WooCommerceボタンスタイルの一貫性。
*修正：一般的なリストスタイルがWooCommerce製品ブロックに適用されないことを確認します。
*削除：ナビゲーションエキストラフィルターはGenesis 3.0以降では不要になったため。
*削除：Genesis 3.0+では不要になったため、Genesis設定ページのフィルター。
*削除：Genesis 3.0+では不要になったため、 `genesis_theme_settings_defaults`フィルター。
*削除：Genesis 3.0+にはデフォルトで含まれているため、 `genesis-responsive-viewport`のサポート。
*削除：WooCommerceスタイルからのCSS remユニット。
*削除：post_dateショートコードから `format`属性。

= 1.2.0 =
Monochrome Pro 1.2.0にはGenesis 2.9以降が必要です。

*追加：同じデザインのウィジェットベースからブロックベースのホームページに切り替えます。
*追加：ワンクリックテーマのセットアップ中にホームページと追加のサンプルページをインポート。
*追加：サイトが新しい場合（WordPressの `fresh_site`オプションがtrueの場合）、ワンクリックテーマのセットアップ中に注目の画像を含むサンプルブログ投稿をインポートします。
*追加：ワンクリックテーマのセットアップ中にメニューをセットアップします。メニュー項目は、インポートされたサンプルコンテンツをポイントします。
*追加：ワンクリックテーマのセットアップ中に、依存プラグインWPForms Lite、Genesis eNews Extended、およびシンプルソーシャルアイコン（アトミックブロックに加えて）をインストールしてアクティブ化します。
*追加：カスタムヘッダーの代わりにカスタムロゴを使用します。サイトのロゴは、外観->カスタマイズ-> IDで設定できるようになりました。
*追加：カスタマイザからフッターロゴを追加する機能。[外観]-> [カスタマイズ]-> [ID]で設定を見つけます。
*変更：明るい注目画像でパンくずを読みやすくしました。
*変更：テーマの相互運用性を向上させるためのブロックエディターのカラースタイルのスラッグ。
*変更：Javaの改善
