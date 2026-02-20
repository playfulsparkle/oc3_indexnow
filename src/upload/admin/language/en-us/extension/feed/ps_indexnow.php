<?php
// Heading
$_['heading_title']                       = 'Playful Sparkle - IndexNow';
$_['heading_contact']                     = 'Contact Support';
$_['entry_indexnow_services']                    = 'IndexNow Services';

// Text
$_['text_extension']                      = 'Extensions';
$_['text_success']                        = 'Success: You have modified IndexNow feed!';
$_['text_success_generate_service_key']   = 'Success: Successfully generated a new service key!';
$_['text_success_remove_queue']           = 'Success: Queued URL has been successfully removed!';
$_['text_success_clear_log']              = 'Success: Log has been successfully cleared!';
$_['text_success_clear_queue']            = 'Success: Queue has been successfully cleared!';
$_['text_success_submit_queue']           = 'Success: Queued URLs have been successfully submitted!';
$_['text_success_submit_url_list']        = 'Success: URL list has been successfully submitted!';
$_['text_edit']                           = 'Edit IndexNow';
$_['text_contact']                        = '<p>For further assistance, please reach out to our support team:</p><ul><li><strong>Contact:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentation:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">User Documentation</a></li></ul>';
$_['text_log_no_results']                 = 'No log entries available at this time.';
$_['text_queue_no_results']               = 'No queued URLs are currently in the queue.';
$_['text_categories']                     = 'Categories on your site are added, updated, or deleted';
$_['text_products']                       = 'Products on your site are added, updated, or deleted';
$_['text_manufacturers']                  = 'Manufacturers on your site are added, updated, or deleted';
$_['text_information']                    = 'Information Pages on your site are added, updated, or deleted';
$_['text_articles']                       = 'Articles on your site are added, updated, or deleted';
$_['text_url_list_warning']               = 'The URLs you paste will be validated. Each URL must be properly formatted with "http" or "https", and its host must match the store host: "%s". A maximum of 10,000 URLs can be submitted.';
$_['text_http_status_code']               = 'Analyzing HTTP response status codes from IndexNow services helps you understand if your requests were processed successfully or encountered issues. These codes provide insights into URL indexing results and potential errors. Visit the following IndexNow services to learn more about their HTTP status codes:<br><br><ul><li><a href="https://www.bing.com/indexnow/getstarted"target="_blank" rel="noopener noreferrer">Microsoft Bing Webmaster Tools</a></li><li><a href="https://searchadvisor.naver.com/guide/indexnow-request"target="_blank" rel="noopener noreferrer">Naver Search Advisor</a></li><li><a href="https://napoveda.seznam.cz/cz/fulltext-hledani-v-internetu/protokol-indexnow/odeslani-vice-stranek-jednim-pozadavkem/"target="_blank" rel="noopener noreferrer">Seznam.cz</a></li><li><a href="https://yandex.com/support/webmaster/indexnow/reference/post-url.html"target="_blank" rel="noopener noreferrer">Yandex Webmaster Tools</a></li></ul>';

// Column
$_['column_log_id']                       = 'Log ID';
$_['column_log_url']                      = 'URL';
$_['column_log_service_name']             = 'Service Name';
$_['column_log_status_code']              = 'Status Code';
$_['column_log_date_added']               = 'Date Added';
$_['column_queue_id']                     = 'Queue ID';
$_['column_queue_url']                    = 'URL';
$_['column_queue_date_added']             = 'Date Added';
$_['column_queue_action']                 = 'Action';

// Tab
$_['tab_general']                         = 'General';
$_['tab_manual_submit']                   = 'Manual Submit';
$_['tab_queue']                           = 'Queue';
$_['tab_log']                             = 'Log';
$_['tab_help_and_support']                = 'Help &amp; Support';

// Entry
$_['entry_status']                        = 'Status';
$_['entry_service_key']                   = 'Service Key';
$_['entry_service_key_location']          = 'Service Key URL';
$_['entry_active_store']                  = 'Active Store';
$_['entry_notify_search_engines']         = 'Notify Search Engines';
$_['entry_url_list']                      = 'URL List';
$_['entry_load_sitemap']                  = 'Load Sitemap';
$_['entry_cron_url']                      = 'Cron URL';

// Button
$_['button_change_key']                   = 'Change Key';
$_['button_check_key']                    = 'Check Key';
$_['button_submit_url']                   = 'Submit URL';
$_['button_submit_queue']                 = 'Submit Queued URLs';
$_['button_clear_queue']                  = 'Clear Queued URLs';
$_['button_clear_log']                    = 'Clear Log';
$_['button_submit_url_list']              = 'Submit URL List';
$_['button_clear_url_list']               = 'Clear URL List';
$_['button_upload_sitemap']               = 'Upload Sitemap URLs';
$_['button_import_sitemap']               = 'Import Sitemap URLs';
$_['button_copy']                         = 'Copy URL';

// Help
$_['help_service_key']                    = 'The IndexNow API key verifies site ownership and is generated automatically. Change the key if it becomes compromised.';
$_['help_service_key_location']           = 'Click the Check Key button to ensure the key is accessible to search engines. This should open the live URL where the key is located.';
$_['help_url_list']                       = 'Enter a list of URLs, one per line (up to 10,000). Ensure each URL is properly formatted with "http" or "https". Click "Submit URL List" to send the URLs to the selected IndexNow services.';
$_['help_load_sitemap']                   = 'You can either provide a sitemap URL or upload a sitemap.xml file (up to 50MB or 50,000 URLs). The URLs from the sitemap will be added to the list and sent to the selected IndexNow service. You will be notified once the process is complete.';
$_['help_cron_url']                       = 'Add this URL to your hosting server’s cron table. It will automatically send <strong>all queued URLs</strong> from <strong>all configured stores</strong> to the <strong>selected IndexNow service endpoints</strong> at scheduled intervals.';

// Error
$_['error_permission']                    = 'Warning: You do not have permission to modify the IndexNow extension!';
$_['error_generate_service_key']          = 'Warning: Unable to generate a new service key!';
$_['error_remove_queue']                  = 'Warning: Unable to remove the queued URLs!';
$_['error_not_configured']                = 'Warning: The IndexNow extension is not configured!';
$_['error_filetype']                      = 'Warning: Invalid file type. Please upload a valid file.';
$_['error_upload']                        = 'Warning: The file could not be uploaded.';
$_['error_download']                      = 'Warning: Could not download sitemap file "%s"';
$_['error_invalid_url']                   = 'Warning: The URL is invalid. Please provide a valid URL.';
$_['error_invalid_url_host']              = 'Warning: The URL host is invalid. The URL host must be the same as the current URL host.';
$_['error_no_services_enabled']           = 'Warning: No services are enabled. Please enable at least one service.';
$_['error_submit_url_list_empty']         = 'Warning: The submitted URL list is empty.';
$_['error_submit_url_list_invalid']       = 'Warning: The submitted URL list contains invalid URLs or URLs with a host that does not match the active store.';
$_['error_empty_queue']                   = 'Warning: The queue is empty.';
$_['error_file_upload_limit']             = 'Warning: The file size exceeds the 50MB limit. Please upload a smaller file.';
$_['error_service_key']                   = 'The service key is invalid. Please provide a valid service key.';
$_['error_service_key_location']          = 'The service key location is invalid. Please provide a valid service key location.';
