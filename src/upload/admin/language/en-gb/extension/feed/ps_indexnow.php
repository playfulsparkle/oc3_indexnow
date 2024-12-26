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
$_['text_getting_started']                = '<p><strong>Overview:</strong> The Playful Sparkle - IndexNow extension enables OpenCart users to easily notify supported search engines when URLs on their website have been added, updated, or deleted. Using IndexNow, search engines are informed instantly, allowing them to prioritize crawling these URLs and quickly reflect changes in search results.</p><p><strong>Requirements:</strong> OpenCart 4.x+, PHP 7.4+ or higher.</p>';
$_['text_setup']                          = '<ul>
<li>Click the "Edit" button next to "Playful Sparkle - IndexNow" and set the status to "Enabled".</li>
<li>In the extension settings, locate the "IndexNow Services" section and enable the services you want to notify about URL changes.</li>
<li>Scroll down to the "Notify Search Engines" section and enable the areas you want to monitor for changes, such as Categories, Products, Manufacturers, Information Pages.</li>
<li>If necessary, regenerate the service key by clicking the "Generate New Key" button. This will create a new key and update the service key URL.</li>
<li>Once all settings are configured, click the "Save" button to apply the changes.</li>
</ul>';
$_['text_troubleshot']                    = '<ul>
<li><strong>URL Not Indexed:</strong> IndexNow informs search engines of changes, but indexing is not guaranteed and may take time.</li>
<li><strong>HTTP 429 Response:</strong> Slow down or retry later as you are sending too many requests.</li>
<li><strong>Submitted URLs Not Fully Crawled:</strong> Search engines may not crawl all URLs if they exceed the quota or do not meet criteria.</li>
<li><strong>URL Indexed on One Search Engine but Not Others:</strong> Different search engines use different selection criteria for indexing.</li>
<li><strong>Key Verification Issues:</strong> Ensure the key is accessible at the specified URL and follows the required format.</li>
<li><strong>Incorrect Key Usage:</strong> Use separate keys for each host unless specified otherwise.</li>
<li><strong>URL Submission Errors:</strong> Avoid submitting unchanged or outdated URLs; focus on recent changes.</li>
<li><strong>Frequent Edits:</strong> Wait at least 10 minutes before resubmitting the same URL to avoid excessive requests.</li>
</ul>';
$_['text_faq']                            = '<details><summary>What happens after I submit a URL?</summary>Search engines will visit the URL to check for updates. The timing depends on their schedules and limits.</details>
<details><summary>What happens if I submit 10,000 URLs in one day?</summary>Search engines may visit some or all of them, depending on their limits for your site.</details>
<details><summary>Why isn’t my submitted URL showing up in search results?</summary>Submitting a URL lets search engines know about it, but they decide if and when to include it in search results.</details>
<details><summary>Should I submit old URLs?</summary>Only submit URLs that have been updated since you started using IndexNow.</details>
<details><summary>Do submitted URLs count towards my search engine limit?</summary>Yes, each visit by a search engine counts towards your limit, but submitted URLs are prioritized.</details>
<details><summary>Why aren’t all submitted URLs showing up?</summary>Search engines may skip some URLs if they don’t meet their guidelines.</details>
<details><summary>Why is one search engine showing my URL but not others?</summary>Each search engine uses its own rules to decide which URLs to include.</details>
<details><summary>Should I use IndexNow for a small website?</summary>Yes, it helps search engines find updates faster.</details>
<details><summary>Can I submit the same URL multiple times in a day?</summary>Avoid doing this often. Wait at least 10 minutes between updates.</details>
<details><summary>Can I submit URLs that no longer exist (404 errors)?</summary>Yes, this helps search engines know which links are no longer active.</details>
<details><summary>Can I submit new redirects?</summary>Yes, you can notify search engines about changes like new redirects.</details>
<details><summary>Can I submit all the URLs from my website?</summary>Only submit URLs that have recently changed. Use a sitemap for the full list of your site’s URLs.</details>
<details><summary>What should I do if I see an HTTP 429 error?</summary>This means you’ve sent too many requests. Slow down and try again later.</details>
<details><summary>When should I change my key?</summary>Change it if a search engine asks for a new one to verify your site.</details>
<details><summary>Can I use more than one key for my site?</summary>Yes, if you have different systems (like CMS) on your site, you can use different keys.</details>
<details><summary>Can I use one key for my entire domain?</summary>No, each part of your website (like different subdomains) needs its own key.</details>
<details><summary>Can I use the same key for multiple websites?</summary>Yes, you can use one key for several websites if you want.</details>
<details><summary>Do I still need IndexNow if I have a sitemap?</summary>Yes, IndexNow notifies search engines immediately, while sitemaps are checked less often.</details>
<details><summary>Where can I find more information?</summary>Check the help guides or documentation provided by each search engine.</details>';
$_['text_contact']                        = '<p>For further assistance, please reach out to our support team:</p><ul><li><strong>Contact:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentation:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">User Documentation</a></li></ul>';
$_['text_log_no_results']                 = 'No log entries available at this time.';
$_['text_queue_no_results']               = 'No queued URLs are currently in the queue.';
$_['text_categories']                     = 'Categories on your site are added, updated, or deleted';
$_['text_products']                       = 'Products on your site are added, updated, or deleted';
$_['text_manufacturers']                  = 'Manufacturers on your site are added, updated, or deleted';
$_['text_information']                    = 'Information Pages on your site are added, updated, or deleted';
$_['text_articles']                       = 'Articles on your site are added, updated, or deleted';
$_['text_url_list_warning']               = 'The URLs you enter will be validated. They must be valid, and the host of each URL must match the store host "%s".';

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
$_['help_url_list']                       = 'Enter a list of URLs, one per line. Click the "Submit URL List" button to send them to the enabled IndexNow services.';
$_['help_load_sitemap']                   = 'You can either provide a sitemap URL or upload a sitemap.xml file. The URLs from the sitemap will be added to the URL list, which will then be sent to the IndexNow services.';
$_['help_cron_url']                       = 'Add this URL to your hosting server’s cron table. It will automatically send <strong>all queued URLs</strong> from <strong>all configured stores</strong> to the <strong>selected IndexNow service endpoints</strong> at scheduled intervals.';

// Error
$_['error_permission']                    = 'Warning: You do not have permission to modify the IndexNow feed!';
$_['error_generate_service_key']          = 'Warning: Unable to generate a new service key!';
$_['error_remove_queue']                  = 'Warning: Unable to remove the queued URLs!';
$_['error_clear_log']                     = 'Warning: The log is either empty or could not be cleared!';
$_['error_clear_queue']                   = 'Warning: The queue is either empty or could not be cleared!';
$_['error_not_configured']                = 'Warning: The IndexNow extension is not configured!';
$_['error_submit_queue']                  = 'Warning: There was a problem submitting the queued URLs!';
$_['error_submit_url_list']               = 'Warning: There was a problem submitting the URL list!';
$_['error_filetype']                      = 'Warning: Invalid file type. Please upload a valid file.';
$_['error_upload']                        = 'Warning: The file could not be uploaded.';
$_['error_download']                      = 'Warning: Could not download sitemap file from "%s"';
$_['error_invalid_url']                   = 'Warning: The URL is invalid. Please provide a valid URL.';
$_['error_invalid_url_host']              = 'Warning: The URL host is invalid. The URL host must be the same as the current URL host.';
$_['error_no_services_enabled']           = 'Warning: No services are enabled. Please enable at least one service.';
$_['error_submit_url_list_invalid']       = 'Warning: The URL list contains invalid entries, such as URLs with a different host than the active store, invalid URLs, or empty lines.';
$_['error_empty_queue']                   = 'Warning: The queue URL list is empty and contains no URLs.';
$_['error_service_key']                   = 'The service key is invalid. Please provide a valid service key.';
