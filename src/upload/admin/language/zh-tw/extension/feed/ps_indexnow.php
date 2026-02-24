<?php
// Heading
$_['heading_title']                       = 'Playful Sparkle - IndexNow';
$_['heading_contact']                     = '聯繫支援';
$_['entry_indexnow_services']             = 'IndexNow 服務';

// Text
$_['text_extension']                      = '擴充功能';
$_['text_success']                        = '成功：您已修改 IndexNow 供稿！';
$_['text_success_generate_service_key']   = '成功：已成功產生新的服務金鑰！';
$_['text_success_remove_queue']           = '成功：已成功從隊列中移除 URL！';
$_['text_success_clear_log']              = '成功：已成功清除日誌！';
$_['text_success_clear_queue']            = '成功：已成功清除隊列！';
$_['text_success_submit_queue']           = '成功：已成功提交隊列中的 URL！';
$_['text_success_submit_url_list']        = '成功：已成功提交 URL 列表！';
$_['text_edit']                           = '編輯 IndexNow';
$_['text_contact']                        = '<p>如需進一步協助，請聯繫我們的支援團隊：</p><ul><li><strong>聯繫方式：</strong> <a href="mailto:%s">%s</a></li><li><strong>說明文件：</strong> <a href="%s" target="_blank" rel="noopener noreferrer">使用者文件</a></li></ul>';
$_['text_log_no_results']                 = '目前沒有日誌條目。';
$_['text_queue_no_results']               = '目前隊列中没有 URL。';
$_['text_categories']                     = '您網站上的分類被新增、更新或刪除';
$_['text_products']                       = '您網站上的產品被新增、更新或刪除';
$_['text_manufacturers']                  = '您網站上的品牌商被新增、更新或刪除';
$_['text_information']                    = '您網站上的資訊頁面被新增、更新或刪除';
$_['text_articles']                       = '您網站上的文章被新增、更新或刪除';
$_['text_url_list_warning']               = '您貼上的 URL 將被驗證。每個 URL 必須以 "http" 或 "https" 正確格式化，且其主機名稱必須與商店主機名稱匹配："%s"。最多可提交 10,000 個 URL。';
$_['text_http_status_code']               = '分析來自 IndexNow 服務的 HTTP 回應狀態代碼有助於您了解請求是成功處理還是遇到了問題。這些代碼提供了有關 URL 索引結果和潛在錯誤的見解。造訪以下 IndexNow 服務以了解有關其 HTTP 狀態代碼的更多資訊：<br><br><ul><li><a href="https://www.bing.com/indexnow/getstarted"target="_blank" rel="noopener noreferrer">Microsoft Bing Webmaster Tools</a></li><li><a href="https://searchadvisor.naver.com/guide/indexnow-request"target="_blank" rel="noopener noreferrer">Naver Search Advisor</a></li><li><a href="https://napoveda.seznam.cz/cz/fulltext-hledani-v-internetu/protokol-indexnow/odeslani-vice-stranek-jednim-pozadavkem/"target="_blank" rel="noopener noreferrer">Seznam.cz</a></li><li><a href="https://yandex.com/support/webmaster/indexnow/reference/post-url.html"target="_blank" rel="noopener noreferrer">Yandex Webmaster Tools</a></li></ul>';

// Column
$_['column_log_id']                       = '日誌 ID';
$_['column_log_url']                      = 'URL';
$_['column_log_service_name']              = '服務名稱';
$_['column_log_status_code']              = '狀態代碼';
$_['column_log_date_added']               = '新增日期';
$_['column_queue_id']                     = '隊列 ID';
$_['column_queue_url']                    = 'URL';
$_['column_queue_date_added']             = '新增日期';
$_['column_queue_action']                 = '操作';

// Tab
$_['tab_general']                         = '一般';
$_['tab_manual_submit']                   = '手動提交';
$_['tab_queue']                           = '隊列';
$_['tab_log']                             = '日誌';
$_['tab_help_and_support']                = '說明與支援';

// Entry
$_['entry_status']                        = '狀態';
$_['entry_service_key']                   = '服務金鑰';
$_['entry_service_key_location']          = '服務金鑰 URL';
$_['entry_active_store']                  = '活躍商店';
$_['entry_notify_search_engines']         = '通知搜尋引擎';
$_['entry_url_list']                      = 'URL 列表';
$_['entry_load_sitemap']                  = '載入網站地圖';
$_['entry_cron_url']                      = 'Cron URL';

// Button
$_['button_change_key']                   = '更改金鑰';
$_['button_check_key']                    = '檢查金鑰';
$_['button_submit_url']                   = '提交 URL';
$_['button_submit_queue']                 = '提交隊列中的 URL';
$_['button_clear_queue']                  = '清除隊列中的 URL';
$_['button_clear_log']                    = '清除日誌';
$_['button_submit_url_list']              = '提交 URL 列表';
$_['button_clear_url_list']               = '清除 URL 列表';
$_['button_upload_sitemap']               = '上傳網站地圖 URL';
$_['button_import_sitemap']               = '匯入網站地圖 URL';
$_['button_copy']                         = '複製 URL';

// Help
$_['help_service_key']                    = 'IndexNow API 金鑰用於驗證網站所有權，由系統自動產生。如果金鑰洩露，請進行更改。';
$_['help_service_key_location']           = '點擊「檢查金鑰」按鈕以確保搜尋引擎可以存取該金鑰。這應該會開啟金鑰所在的即時 URL。';
$_['help_url_list']                       = '輸入 URL 列表，每行一個（最多 10,000 個）。確保每個 URL 都以 "http" 或 "https" 正确格式化。點擊「提交 URL 列表」將 URL 發送到選定的 IndexNow 服務。';
$_['help_load_sitemap']                   = '您可以提供網站地圖 URL 或上傳 sitemap.xml 檔案（最大 50MB 或 50,000 個 URL）。網站地圖中的 URL 將被新增到列表中並發送到選定的 IndexNow 服務。流程完成後您將收到通知。';
$_['help_cron_url']                       = '將此 URL 新增到您代管伺服器的 cron 表中。它將定期自動將來自<strong>所有已設定商店</strong>的<strong>所有隊列中的 URL</strong> 發送到<strong>選定的 IndexNow 服務端點</strong>。';

// Error
$_['error_permission']                    = '警告：您沒有權限修改 IndexNow 擴充功能！';
$_['error_generate_service_key']          = '警告：無法產生新的服務金鑰！';
$_['error_remove_queue']                  = '警告：無法移除隊列中的 URL！';
$_['error_not_configured']                = '警告：IndexNow 擴充功能未設定！';
$_['error_filetype']                      = '警告：無效的檔案類型。請上傳有效檔案。';
$_['error_upload']                        = '警告：檔案無法上傳。';
$_['error_download']                      = '警告：無法下載網站地圖檔案 "%s"';
$_['error_invalid_url']                   = '警告：URL 無效。請提供有效的 URL。';
$_['error_invalid_url_host']              = '警告：URL 主機名稱無效。URL 主機名稱必須與當前商店的主機名稱一致。';
$_['error_no_services_enabled']           = '警告：未啟用任何服務。請至少啟用一個服務。';
$_['error_submit_url_list_empty']         = '警告：提交的 URL 列表為空。';
$_['error_submit_url_list_invalid']       = '警告：提交的 URL 列表包含無效的 URL，或者主機名稱與目前商店不匹配。';
$_['error_empty_queue']                   = '警告：隊列為空。';
$_['error_file_upload_limit']              = '警告：檔案大小超過 50MB 限制。請上傳較小的檔案。';
$_['error_service_key']                   = '服務金鑰無效。請提供有效的服務金鑰。';
$_['error_service_key_location']          = '服務金鑰位置無效。請提供有效的位置。';
