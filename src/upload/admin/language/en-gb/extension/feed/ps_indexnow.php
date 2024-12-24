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
$_['text_edit']                           = 'Edit IndexNow';
$_['text_getting_started']                = '<p><strong>Overview:</strong> The Playful Sparkle - IndexNow extension enables OpenCart users to easily notify supported search engines when URLs on their website have been added, updated, or deleted. Using IndexNow, search engines are informed instantly, allowing them to prioritize crawling these URLs and quickly reflect changes in search results.</p><p><strong>Requirements:</strong> OpenCart 4.x+, PHP 7.4+ or higher.</p>';
$_['text_setup']                          = '<ul>
    <li>Enable the extension in your OpenCart admin panel.</li>
    <li>For each supported IndexNow service, enable the service individually.</li>
    <li>Configure the Service Key for each enabled service. If the key is not accessible from the server root, specify the Service Key URL where it can be accessed.</li>
    <li>Add the IndexNow endpoint to your cron job list to ensure the URL queue is processed periodically. Alternatively, you can run the endpoint manually to process the queue.</li>
</ul>
<p>The URL queue is automatically filled when you add, update, or delete products, categories, manufacturers, or information pages. This ensures that any changes made on your site will be promptly submitted to the search engines configured with IndexNow.</p>';
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
$_['text_faq']                            = '<details><summary>What happens after I submit a URL?</summary>Search engines will crawl the URL based on their scheduling and quota.</details>
<details><summary>What happens if I submit 10,000 URLs in a day?</summary>Search engines will crawl some or all URLs if they have enough quota.</details>
<details><summary>Why isn’t my submitted URL indexed?</summary>IndexNow informs search engines of changes, but indexing is not guaranteed and may take time.</details>
<details><summary>Should I submit URLs changed last year?</summary>Only submit URLs that have changed since you started using IndexNow.</details>
<details><summary>Do submitted URLs count towards my crawl quota?</summary>Yes, each crawl counts towards your quota, and IndexNow prioritizes these URLs.</details>
<details><summary>Why aren’t all submitted URLs indexed?</summary>Search engines may not index URLs if they don’t meet their criteria.</details>
<details><summary>Why is my URL indexed on one search engine but not others?</summary>Different search engines have different selection criteria.</details>
<details><summary>Should I use IndexNow for a small website?</summary>Yes, it helps search engines discover changes quickly.</details>
<details><summary>Can I submit the same URL multiple times a day?</summary>Avoid frequent submissions; wait 10 minutes between edits.</details>
<details><summary>Can I submit 404 URLs?</summary>Yes, you can notify search engines about dead links.</details>
<details><summary>Can I submit new redirects?</summary>Yes, notify search engines about new redirects.</details>
<details><summary>Can I submit all URLs for my site?</summary>Submit only recently changed URLs; use sitemaps for all URLs.</details>
<details><summary>What should I do if I receive a HTTP 429 response?</summary>Slow down or retry later as you are sending too many requests.</details>
<details><summary>When should I change my key?</summary>Change it when search engines need to verify ownership with a new key.</details>
<details><summary>Can I use more than one key per host?</summary>Yes, different CMS can use different keys.</details>
<details><summary>Can I use one key for the whole domain?</summary>No, each host needs its own key.</details>
<details><summary>Can I use the same key on multiple hosts?</summary>Yes, you can reuse the same key on multiple hosts and domains.</details>
<details><summary>Do I need IndexNow if I have a sitemap?</summary>Yes, IndexNow allows immediate notification of changes, unlike sitemaps.</details>
<details><summary>What if I have more questions about IndexNow?</summary>Refer to the documentation from each search engine.</details>';
$_['text_contact']                        = '<p>For further assistance, please reach out to our support team:</p><ul><li><strong>Contact:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentation:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">User Documentation</a></li></ul>';
$_['text_log_no_results']                 = 'No log entries available at this time.';
$_['text_queue_no_results']               = 'No queued URLs are currently in the queue.';
$_['text_categories']                     = 'Categories on your site are added, updated, or deleted';
$_['text_products']                       = 'Products on your site are added, updated, or deleted';
$_['text_manufacturers']                  = 'Manufacturers on your site are added, updated, or deleted';
$_['text_information']                    = 'Information Pages on your site are added, updated, or deleted';
$_['text_articles']                       = 'Articles on your site are added, updated, or deleted';

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

// Button
$_['button_change_key']                   = 'Change Key';
$_['button_check_key']                    = 'Check Key';
$_['button_submit_url']                   = 'Submit URL';
$_['button_submit_queue']                 = 'Submit Queued URLs';
$_['button_clear_queue']                  = 'Clear Queued URLs';
$_['button_clear_log']                    = 'Clear Log';
$_['button_submit_url_list']              = 'Submit URL List';
$_['button_clear_url_list']               = 'Clear URL List';

// Help
$_['help_service_key']                    = 'The IndexNow API key verifies site ownership and is generated automatically. Change the key if it becomes compromised.';
$_['help_service_key_location']           = 'Click the Check Key button to ensure the key is accessible to search engines. This should open the live URL where the key is located.';
$_['help_url_list']                       = 'Enter a list of URLs separated by a new line. Click the Submit URL List button to submit these URLs to the search engines.';

// Error
$_['error_permission']                    = 'Warning: You do not have permission to modify IndexNow feed!';
$_['error_generate_service_key']          = 'Warning: Unable to generate a new service key!';
$_['error_remove_queue']                  = 'Warning: Unable to remove queued URLs!';
$_['error_service_key']                   = 'The Service Key is invalid. Please provide a valid Service Key.';
