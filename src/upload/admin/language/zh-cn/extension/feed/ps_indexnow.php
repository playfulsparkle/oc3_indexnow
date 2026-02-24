<?php
// Heading
$_['heading_title']                       = 'Playful Sparkle - IndexNow';
$_['heading_contact']                     = '联系支持';
$_['entry_indexnow_services']             = 'IndexNow 服务';

// Text
$_['text_extension']                      = '扩展程序';
$_['text_success']                        = '成功：您已修改 IndexNow 供稿！';
$_['text_success_generate_service_key']   = '成功：已成功生成新的服务密钥！';
$_['text_success_remove_queue']           = '成功：已成功从队列中移除 URL！';
$_['text_success_clear_log']              = '成功：已成功清除日志！';
$_['text_success_clear_queue']            = '成功：已成功清除队列！';
$_['text_success_submit_queue']           = '成功：已成功提交队列中的 URL！';
$_['text_success_submit_url_list']        = '成功：已成功提交 URL 列表！';
$_['text_edit']                           = '编辑 IndexNow';
$_['text_contact']                        = '<p>如需进一步帮助，请联系我们的支持团队：</p><ul><li><strong>联系方式：</strong> <a href="mailto:%s">%s</a></li><li><strong>文档：</strong> <a href="%s" target="_blank" rel="noopener noreferrer">用户文档</a></li></ul>';
$_['text_log_no_results']                 = '当前没有日志条目。';
$_['text_queue_no_results']               = '当前队列中没有 URL。';
$_['text_categories']                     = '您网站上的分类被添加、更新或删除';
$_['text_products']                       = '您网站上的产品被添加、更新或删除';
$_['text_manufacturers']                  = '您网站上的品牌商被添加、更新或删除';
$_['text_information']                    = '您网站上的信息页面被添加、更新或删除';
$_['text_articles']                       = '您网站上的文章被添加、更新 or 删除';
$_['text_url_list_warning']               = '您粘贴的 URL 将被验证。每个 URL 必须以 "http" 或 "https" 正确格式化，且其主机名必须与商店主机名匹配："%s"。最多可提交 10,000 个 URL。';
$_['text_http_status_code']               = '分析来自 IndexNow 服务的 HTTP 响应状态代码有助于您了解请求是成功处理还是遇到了问题。这些代码提供了有关 URL 索引结果和潜在错误的见解。访问以下 IndexNow 服务以了解有关其 HTTP 状态代码的更多信息：<br><br><ul><li><a href="https://www.bing.com/indexnow/getstarted"target="_blank" rel="noopener noreferrer">Microsoft Bing Webmaster Tools</a></li><li><a href="https://searchadvisor.naver.com/guide/indexnow-request"target="_blank" rel="noopener noreferrer">Naver Search Advisor</a></li><li><a href="https://napoveda.seznam.cz/cz/fulltext-hledani-v-internetu/protokol-indexnow/odeslani-vice-stranek-jednim-pozadavkem/"target="_blank" rel="noopener noreferrer">Seznam.cz</a></li><li><a href="https://yandex.com/support/webmaster/indexnow/reference/post-url.html"target="_blank" rel="noopener noreferrer">Yandex Webmaster Tools</a></li></ul>';

// Column
$_['column_log_id']                       = '日志 ID';
$_['column_log_url']                      = 'URL';
$_['column_log_service_name']              = '服务名称';
$_['column_log_status_code']              = '状态代码';
$_['column_log_date_added']               = '添加日期';
$_['column_queue_id']                     = '队列 ID';
$_['column_queue_url']                    = 'URL';
$_['column_queue_date_added']             = '添加日期';
$_['column_queue_action']                 = '操作';

// Tab
$_['tab_general']                         = '常规';
$_['tab_manual_submit']                   = '手动提交';
$_['tab_queue']                           = '队列';
$_['tab_log']                             = '日志';
$_['tab_help_and_support']                = '帮助与支持';

// Entry
$_['entry_status']                        = '状态';
$_['entry_service_key']                   = '服务密钥';
$_['entry_service_key_location']          = '服务密钥 URL';
$_['entry_active_store']                  = '活跃商店';
$_['entry_notify_search_engines']         = '通知搜索引擎';
$_['entry_url_list']                      = 'URL 列表';
$_['entry_load_sitemap']                  = '加载站点地图';
$_['entry_cron_url']                      = 'Cron URL';

// Button
$_['button_change_key']                   = '更改密钥';
$_['button_check_key']                    = '检查密钥';
$_['button_submit_url']                   = '提交 URL';
$_['button_submit_queue']                 = '提交队列中的 URL';
$_['button_clear_queue']                  = '清除队列中的 URL';
$_['button_clear_log']                    = '清除日志';
$_['button_submit_url_list']              = '提交 URL 列表';
$_['button_clear_url_list']               = '清除 URL 列表';
$_['button_upload_sitemap']               = '上传站点地图 URL';
$_['button_import_sitemap']               = '导入站点地图 URL';
$_['button_copy']                         = '复制 URL';

// Help
$_['help_service_key']                    = 'IndexNow API 密钥用于验证网站所有权，由系统自动生成。如果密钥泄露，请进行更改。';
$_['help_service_key_location']           = '点击“检查密钥”按钮以确保搜索引擎可以访问该密钥。这应该会打开密钥所在的实时 URL。';
$_['help_url_list']                       = '输入 URL 列表，每行一个（最多 10,000 个）。确保每个 URL 都以 "http" 或 "https" 正确格式化。点击“提交 URL 列表”将 URL 发送到选定的 IndexNow 服务。';
$_['help_load_sitemap']                   = '您可以提供站点地图 URL 或上传 sitemap.xml 文件（最大 50MB 或 50,000 个 URL）。站点地图中的 URL 将被添加到列表中并发送到选定的 IndexNow 服务。流程完成后您将收到通知。';
$_['help_cron_url']                       = '将此 URL 添加到您托管服务器的 cron 表中。它将定期自动将来自<strong>所有已配置商店</strong>的<strong>所有队列中的 URL</strong> 发送到<strong>选定的 IndexNow 服务端点</strong>。';

// Error
$_['error_permission']                    = '警告：您没有权限修改 IndexNow 扩展程序！';
$_['error_generate_service_key']          = '警告：无法生成新的服务密钥！';
$_['error_remove_queue']                  = '警告：无法移除队列中的 URL！';
$_['error_not_configured']                = '警告：IndexNow 扩展程序未配置！';
$_['error_filetype']                      = '警告：无效的文件类型。请上传有效文件。';
$_['error_upload']                        = '警告：文件无法上传。';
$_['error_download']                      = '警告：无法下载站点地图文件 "%s"';
$_['error_invalid_url']                   = '警告：URL 无效。请提供有效的 URL。';
$_['error_invalid_url_host']              = '警告：URL 主机名无效。URL 主机名必须与当前商店的主机名一致。';
$_['error_no_services_enabled']           = '警告：未启用任何服务。请至少启用一个服务。';
$_['error_submit_url_list_empty']         = '警告：提交的 URL 列表为空。';
$_['error_submit_url_list_invalid']       = '警告：提交的 URL 列表包含无效的 URL，或者主机名与当前商店不匹配。';
$_['error_empty_queue']                   = '警告：队列为空。';
$_['error_file_upload_limit']              = '警告：文件大小超过 50MB 限制。请上传较小的文件。';
$_['error_service_key']                   = '服务密钥无效。请提供有效的服务密钥。';
$_['error_service_key_location']          = '服务密钥位置无效。请提供有效的位置。';
