<?php
// Heading
$_['heading_title']                       = 'Playful Sparkle - IndexNow';
$_['heading_contact']                     = 'サポートにお問い合わせ';
$_['entry_indexnow_services']             = 'IndexNow サービス';

// Text
$_['text_extension']                      = '拡張機能';
$_['text_success']                        = '成功: IndexNow フィードを更新しました。';
$_['text_success_generate_service_key']   = '成功: 新しいサービスキーを生成しました。';
$_['text_success_remove_queue']           = '成功: キュー内の URL を削除しました。';
$_['text_success_clear_log']              = '成功: ログをクリアしました。';
$_['text_success_clear_queue']            = '成功: キューをクリアしました。';
$_['text_success_submit_queue']           = '成功: キュー内の URL を送信しました。';
$_['text_success_submit_url_list']        = '成功: URL リストを送信しました。';
$_['text_edit']                           = 'IndexNow の編集';
$_['text_contact']                        = '<p>さらにサポートが必要な場合は、サポートチームにお問い合わせください：</p><ul><li><strong>連絡先:</strong> <a href="mailto:%s">%s</a></li><li><strong>ドキュメント:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">ユーザーマニュアル</a></li></ul>';
$_['text_log_no_results']                 = '現在、ログエントリーはありません。';
$_['text_queue_no_results']               = '現在、キュー内に送信待ちの URL はありません。';
$_['text_categories']                     = 'サイトのカテゴリーが追加、更新、または削除されたとき';
$_['text_products']                       = 'サイトの商品が追加、更新、または削除されたとき';
$_['text_manufacturers']                  = 'サイトのメーカーが追加、更新、または削除されたとき';
$_['text_information']                    = 'サイトの説明ページが追加、更新、または削除されたとき';
$_['text_articles']                       = 'サイトの記事が追加、更新、または削除されたとき';
$_['text_url_list_warning']               = '貼り付けた URL は検証されます。各 URL は "http" または "https" で正しくフォーマットされている必要があり、ホスト名はストアのホスト名 "%s" と一致する必要があります。最大 10,000 件の URL を送信できます。';
$_['text_http_status_code']               = 'IndexNow サービスからの HTTP レスポンスステータスコードを分析することで、リクエストが正常に処理されたか、問題が発生したかを確認できます。これらのコードは、URL インデックス作成の結果や潜在的なエラーに関する情報を提供します。詳細については、以下の IndexNow サービス各社のドキュメントを参照してください：<br><br><ul><li><a href="https://www.bing.com/indexnow/getstarted"target="_blank" rel="noopener noreferrer">Microsoft Bing Webmaster Tools</a></li><li><a href="https://searchadvisor.naver.com/guide/indexnow-request"target="_blank" rel="noopener noreferrer">Naver Search Advisor</a></li><li><a href="https://napoveda.seznam.cz/cz/fulltext-hledani-v-internetu/protokol-indexnow/odeslani-vice-stranek-jednim-pozadavkem/"target="_blank" rel="noopener noreferrer">Seznam.cz</a></li><li><a href="https://yandex.com/support/webmaster/indexnow/reference/post-url.html"target="_blank" rel="noopener noreferrer">Yandex Webmaster Tools</a></li></ul>';

// Column
$_['column_log_id']                       = 'ログ ID';
$_['column_log_url']                      = 'URL';
$_['column_log_service_name']              = 'サービス名';
$_['column_log_status_code']              = 'ステータスコード';
$_['column_log_date_added']               = '追加日';
$_['column_queue_id']                     = 'キュー ID';
$_['column_queue_url']                    = 'URL';
$_['column_queue_date_added']             = '追加日';
$_['column_queue_action']                 = 'アクション';

// Tab
$_['tab_general']                         = '全般';
$_['tab_manual_submit']                   = '手動送信';
$_['tab_queue']                           = 'キュー';
$_['tab_log']                             = 'ログ';
$_['tab_help_and_support']                = 'ヘルプ & サポート';

// Entry
$_['entry_status']                        = 'ステータス';
$_['entry_service_key']                   = 'サービスキー';
$_['entry_service_key_location']          = 'サービスキー URL';
$_['entry_active_store']                  = '有効なストア';
$_['entry_notify_search_engines']         = '検索エンジンに通知';
$_['entry_url_list']                      = 'URL リスト';
$_['entry_load_sitemap']                  = 'サイトマップの読み込み';
$_['entry_cron_url']                      = 'Cron URL';

// Button
$_['button_change_key']                   = 'キーを変更';
$_['button_check_key']                    = 'キーを確認';
$_['button_submit_url']                   = 'URL を送信';
$_['button_submit_queue']                 = 'キュー内の URL を送信';
$_['button_clear_queue']                  = 'キュー内の URL をクリア';
$_['button_clear_log']                    = 'ログをクリア';
$_['button_submit_url_list']              = 'URL リストを送信';
$_['button_clear_url_list']               = 'URL リストをクリア';
$_['button_upload_sitemap']               = 'サイトマップ URL をアップロード';
$_['button_import_sitemap']               = 'サイトマップ URL をインポート';
$_['button_copy']                         = 'URL をコピー';

// Help
$_['help_service_key']                    = 'IndexNow API キーはサイト所有権を証明するもので、自動的に生成されます。キーが漏洩した場合は変更してください。';
$_['help_service_key_location']           = '「キーを確認」ボタンをクリックして、検索エンジンがキーにアクセス可能であることを確認してください。キーが配置されている公開 URL が開くはずです。';
$_['help_url_list']                       = 'URL リストを1行に1件ずつ入力してください（最大 10,000 件）。各 URL が "http" または "https" で正しくフォーマットされていることを確認してください。「URL リストを送信」をクリックすると、選択した IndexNow サービスに送信されます。';
$_['help_load_sitemap']                   = 'サイトマップ URL を指定するか、sitemap.xml ファイルをアップロード（最大 50MB または 50,000 件の URL）できます。サイトマップ内の URL がリストに追加され、選択した IndexNow サービスに送信されます。完了すると通知されます。';
$_['help_cron_url']                       = 'この URL をホスティングサーバーの cron 設定に追加してください。スケジュールされた間隔で、<strong>設定済みのすべてのストア</strong>から<strong>すべてのキュー内の URL</strong> を<strong>選択した IndexNow サービスエンドポイント</strong>に自動的に送信します。';

// Error
$_['error_permission']                    = '警告: IndexNow 拡張機能を変更する権限がありません。';
$_['error_generate_service_key']          = '警告: 新しいサービスキーを生成できません。';
$_['error_remove_queue']                  = '警告: キュー内の URL を削除できません。';
$_['error_not_configured']                = '警告: IndexNow 拡張機能が設定されていません。';
$_['error_filetype']                      = '警告: 無効なファイル形式です。有効なファイルをアップロードしてください。';
$_['error_upload']                        = '警告: ファイルをアップロードできませんでした。';
$_['error_download']                      = '警告: サイトマップファイル "%s" をダウンロードできません。';
$_['error_invalid_url']                   = '警告: URL が無効です。有効な URL を入力してください。';
$_['error_invalid_url_host']              = '警告: URL ホストが無効です。現在のストアのホストと一致する必要があります。';
$_['error_no_services_enabled']           = '警告: サービスが有効になっていません。少なくとも1つのサービスを有効にしてください。';
$_['error_submit_url_list_empty']         = '警告: 送信された URL リストが空です。';
$_['error_submit_url_list_invalid']       = '警告: 送信された URL リストに無効な URL、または現在のストアと一致しないホストの URL が含まれています。';
$_['error_empty_queue']                   = '警告: キューが空です。';
$_['error_file_upload_limit']              = '警告: ファイルサイズが 50MB の制限を超えています。より小さなファイルをアップロードしてください。';
$_['error_service_key']                   = 'サービスキーが無効です。有効なサービスキーを入力してください。';
$_['error_service_key_location']          = 'サービスキーの場所が無効です。有効な場所を入力してください。';
