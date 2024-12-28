<?php
// Heading
$_['heading_title']                       = 'Playful Sparkle - IndexNow';
$_['heading_getting_started']             = 'Getting Started';
$_['heading_setup']                       = 'Setting Up IndexNow';
$_['heading_troubleshot']                 = 'Common Troubleshooting';
$_['heading_faq']                         = 'FAQ';
$_['heading_contact']                     = 'Contact Support';
$_['heading_services']                    = 'IndexNow Services';

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
$_['text_getting_started']                = '<p><strong>Overview:</strong> The <strong>Playful Sparkle - IndexNow</strong> extension for OpenCart 3.x+ enables your store to automatically notify search engines like Bing and Yandex when your store’s content is added, updated, or deleted. This ensures faster indexing of changes, improving your store’s visibility and search performance. It offers features like manual URL submission, queued URL submission, customizable settings, and Cron support.</p><p><strong>Requirements:</strong> OpenCart 3.x+, PHP 7.3 or higher.</p>';
$_['text_setup']                          = '<ul><li><strong>Step 1: Install the Extension</strong> - Download and install the extension through the OpenCart admin panel. Once installed, the service key will be automatically generated for each store.</li>
<li><strong>Step 2: Clear Modification Cache</strong> - After installation, go to <strong>Extensions > Modifications</strong> and click the <strong>Refresh</strong> button to clear the modification cache. This ensures that the extension is fully integrated into your system.</li>
<li><strong>Step 3: Enable the Extension for Your Store</strong> - Go to the extension settings and enable the extension for each store where you want to use the IndexNow services.</li>
<li><strong>Step 4: Enable IndexNow Services for Your Store</strong> - In the extension settings, enable IndexNow services for the selected store. You can also choose to enable or disable specific IndexNow services for each store.</li>
<li><strong>Step 5: Set Notify Search Engines Options</strong> - Enable these options to notify search engines when content such as categories, products, manufacturers, or articles is added, updated, or deleted. This ensures that search engines remain up to date.</li>
<li><strong>Step 6: Re-generate the Service Key (Optional)</strong> - If needed, you can re-generate your service key for each store separately through the extension settings.</li>
<li><strong>Step 7: Submit URLs</strong> - Submit URLs to the IndexNow services by either submitting the queued URLs, importing/uploading your XML sitemap, or manually entering a URL and submitting it to the IndexNow services.</li>
<li><strong>Step 8: Monitor Logs</strong> - Once URLs are submitted, you can check the Log tab to see the results of the submissions. You can also clear the log if needed.</li></ul>';
$_['text_troubleshot']                    = '<details><summary><strong>The submitted URL list contains invalid URLs or URLs with a host that does not match the active store:</strong></summary> Ensure that the URL list text field contains valid URLs and that the host (domain) of the URLs matches the active store’s domain.</details>
<details><summary><strong>Could not download sitemap file xyz:</strong></summary> Ensure that the sitemap URL is entered correctly.</details>
<details><summary><strong>Invalid file type. Please upload a valid file:</strong></summary> Ensure you are uploading a valid XML sitemap file.</details>
<details><summary><strong>Queue list is not populated:</strong></summary> Ensure that the options to notify search engines are enabled. These options allow the system to queue URLs for categories, products, manufacturers, or articles whenever they are added, updated, or deleted.</details>
<details><summary><strong>No services are enabled. Please enable at least one service:</strong></summary> You must enable at least one IndexNow service before clicking the "Submit Queued URLs" button.</details>';
$_['text_faq']                            = '<details><summary><strong>How can I enable or disable the extension for each store?</strong></summary><p>You can enable or disable the extension for each store separately through the extension settings.</p></details>
<details><summary><strong>Can I enable or disable IndexNow services for each store?</strong></summary><p>Yes, you can enable or disable IndexNow services for each store individually in the extension settings.</p></details>
<details><summary><strong>How do I generate a service key for each store?</strong></summary><p>The service key is automatically generated upon installation and is unique to each store. You do not need to generate it manually.</p></details>
<details><summary><strong>Can I re-generate the service key for each store?</strong></summary><p>Yes, you can re-generate the service key for each store separately through the extension settings. This allows you to refresh or change the key as needed.</p></details>
<details><summary><strong>Can I use a custom Cron URL for sending URLs to IndexNow services?</strong></summary><p>Yes, you can choose to use either the extension-provided Cron URL or the OpenCart Cron page URL to send the queued URLs. Both options work without any issues.</p></details>
<details><summary><strong>What are the size and URL limits for the sitemap?</strong></summary><p>The sitemap file can be up to 50MB in size and contain up to 50,000 URLs. Ensure that your sitemap does not exceed these limits.</p></details>
<details><summary><strong>How can I submit URLs to IndexNow services?</strong></summary><p>You can submit URLs to IndexNow services by importing a sitemap, uploading an XML sitemap file, or typing the sitemap URL manually. Additionally, you can submit individual URLs from the queue or send all queued URLs at once for the selected store.</p></details>
<details><summary><strong>How do I clear the URL submission log?</strong></summary><p>You can clear the log in the Log tab. The log is cleared without errors whenever you choose to clear it.</p></details>';
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
