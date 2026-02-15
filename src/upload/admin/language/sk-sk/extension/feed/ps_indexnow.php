<?php
// Heading
$_['heading_title']                       = 'Playful Sparkle - IndexNow';
$_['heading_getting_started']             = 'Getting Started';
$_['heading_setup']                       = 'Setting Up IndexNow';
$_['heading_troubleshot']                 = 'Common Troubleshooting';
$_['heading_faq']                         = 'FAQ';
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
$_['text_getting_started']                = '<p><strong>Overview:</strong> The <strong>Playful Sparkle - IndexNow</strong> extension for OpenCart 3.x+ enables your store to automatically notify search engines like Bing and Yandex when your store’s content is added, updated, or deleted. This ensures faster indexing of changes, improving your store’s visibility and search performance. It offers features like manual URL submission, queued URL submission, customizable settings, and Cron support.</p><p><strong>Requirements:</strong> OpenCart 3.x+, PHP 7.3 or higher.</p>';
$_['text_setup']                          = '<ul><li><strong>Krok 1: Inštalácia rozšírenia</strong> - Nahrajte a nainštalujte rozšírenie v administračnom paneli OpenCart. Po inštalácii sa automaticky vygeneruje servisný kľúč pre každý obchod.</li><li><strong>Krok 2: Aktualizácia modifikácií</strong> - Prejdite do <strong>Rozšírenia &gt; Modifikácie</strong> a kliknite na tlačidlo <strong>Aktualizovať</strong>, aby sa znova vytvorila vyrovnávacia pamäť modifikácií.</li><li><strong>Krok 3: Povolenie rozšírenia pre každý obchod</strong> - Otvorte nastavenia rozšírenia a povoľte ho pre každý obchod, v ktorom chcete používať IndexNow.</li><li><strong>Krok 4: Výber služby IndexNow</strong> - Vyberte koncový bod IndexNow, do ktorého chcete odosielať údaje.</li><li><strong>Krok 5: Konfigurácia automatického upozornenia</strong> - Povoľte možnosti automatického upozornenia na odosielanie adries URL pri pridaní, aktualizácii alebo odstránení kategórií, produktov, výrobcov alebo článkov.</li><li><strong>Krok 6: Opätovné vygenerovanie servisného kľúča (voliteľné)</strong> - V prípade potreby môžete v nastaveniach rozšírenia znova vygenerovať servisný kľúč samostatne pre každý obchod.</li><li><strong>Krok 7: Odoslanie adries URL</strong> - Adresy URL odošlite spracovaním frontu, importovaním mapy stránok XML, nahraním súboru mapy stránok alebo manuálnym zadaním adries URL.</li><li><strong>Krok 8: Sledovanie protokolov</strong> - Po odoslaní skontrolujte výsledky na karte <strong>Protokol</strong>. V prípade potreby môžete protokol aj vymazať.</li></ul>';
$_['text_troubleshot']                    = '<details><summary><strong>The submitted URL list contains invalid URLs or URLs with a host that does not match the active store</strong></summary> Ensure that the URL list text field contains valid URLs and that the host (domain) of the URLs matches the active store’s domain.</details>
<details><summary><strong>Could not download sitemap file xyz</strong></summary> Ensure that the sitemap URL is entered correctly.</details>
<details><summary><strong>Invalid file type. Please upload a valid file</strong></summary> Ensure you are uploading a valid XML sitemap file.</details>
<details><summary><strong>Queue list is not populated</strong></summary> Ensure that the options to notify search engines are enabled. These options allow the system to queue URLs for categories, products, manufacturers, or articles whenever they are added, updated, or deleted.</details>
<details><summary><strong>No services are enabled. Please enable at least one service</strong></summary> You must enable at least one IndexNow service before clicking the "Submit Queued URLs" button.</details>';
$_['text_faq']                            = '<details><summary><strong>How can I enable or disable the extension for each store?</strong></summary><p>You can enable or disable the extension for each store separately through the extension settings.</p></details>
<details><summary><strong>Can I enable or disable IndexNow services for each store?</strong></summary><p>Yes, you can enable or disable IndexNow services for each store individually in the extension settings.</p></details>
<details><summary><strong>How do I generate a service key for each store?</strong></summary><p>The service key is automatically generated upon installation and is unique to each store. You do not need to generate it manually.</p></details>
<details><summary><strong>Can I re-generate the service key for each store?</strong></summary><p>Yes, you can re-generate the service key for each store separately through the extension settings. This allows you to refresh or change the key as needed.</p></details>
<details><summary><strong>Can I use a custom Cron URL for sending URLs to IndexNow services?</strong></summary><p>Yes, you can choose to use either the extension-provided Cron URL or the OpenCart Cron page URL to send the queued URLs. Both options work without any issues.</p></details>
<details><summary><strong>What are the size and URL limits for the sitemap?</strong></summary><p>The sitemap file can be up to 50MB in size and contain up to 50,000 URLs. Ensure that your sitemap does not exceed these limits.</p></details>
<details><summary><strong>How can I submit URLs to IndexNow services?</strong></summary><p>You can submit URLs to IndexNow services by importing a sitemap, uploading an XML sitemap file, or typing the sitemap URL manually. Additionally, you can submit individual URLs from the queue or send all queued URLs at once for the selected store.</p></details>
<details><summary><strong>How do I clear the URL submission log?</strong></summary><p>You can clear the log in the Log tab. The log is cleared without errors whenever you choose to clear it.</p></details>';
$_['text_contact']                        = '<p>For further assistance, please reach out to our support team:</p><ul><li><strong>Contact:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentation:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">User Documentation</a></li></ul>';
$_['text_log_no_results']                 = 'Momentálne nie sú k dispozícii žiadne záznamy v protokole.';
$_['text_queue_no_results']               = 'Momentálne nie sú v čakacom zozname žiadne URL adresy.';
$_['text_categories']                     = 'Kategórie na vašom webe sú pridané, aktualizované alebo odstránené.';
$_['text_products']                       = 'Produkty na vašom webe sú pridané, aktualizované alebo odstránené.';
$_['text_manufacturers']                  = 'Výrobcovia na vašom webe sú pridaní, aktualizovaní alebo odstránení.';
$_['text_information']                    = 'Informačné stránky na vašom webe sú pridané, aktualizované alebo odstránené.';
$_['text_topics']                         = 'Témy článkov na vašom webe sú pridané, aktualizované alebo odstránené.';
$_['text_articles']                       = 'Články na vašom webe sú pridané, aktualizované alebo odstránené.';
$_['text_url_list_warning']               = 'URL adresy, ktoré vložíte, budú overené. Každá URL musí byť správne formátovaná s "http" alebo "https" a jej hostiteľ musí zodpovedať hostiteľovi obchodu: "%s". Môžete odoslať maximálne 10 000 URL adries.';
$_['text_http_status_code']               = 'Analýza HTTP odpovedí statusových kódov zo služieb IndexNow vám pomôže pochopiť, či boli vaše požiadavky spracované úspešne alebo sa vyskytli problémy. Tieto kódy poskytujú informácie o výsledkoch indexovania URL a potenciálnych chybách. Navštívte nasledujúce služby IndexNow, aby ste sa dozvedeli viac o ich HTTP statusových kódoch:<br><br><ul><li><a href="https://www.bing.com/indexnow/getstarted" target="_blank" rel="noopener noreferrer">Microsoft Bing Webmaster Tools</a></li><li><a href="https://searchadvisor.naver.com/guide/indexnow-request" target="_blank" rel="noopener noreferrer">Naver Search Advisor</a></li><li><a href="https://napoveda.seznam.cz/cz/fulltext-hledani-v-internetu/protokol-indexnow/odeslani-vice-stranek-jednim-pozadavkem/" target="_blank" rel="noopener noreferrer">Seznam.cz</a></li><li><a href="https://yandex.com/support/webmaster/indexnow/reference/post-url.html" target="_blank" rel="noopener noreferrer">Yandex Webmaster Tools</a></li></ul>';

// Column
$_['column_log_id']                       = 'ID protokolu';
$_['column_log_url']                      = 'URL';
$_['column_log_service_name']             = 'Názov služby';
$_['column_log_status_code']              = 'Statusový kód';
$_['column_log_date_added']               = 'Dátum pridania';
$_['column_queue_id']                     = 'ID čakacieho zoznamu';
$_['column_queue_url']                    = 'URL';
$_['column_queue_date_added']             = 'Dátum pridania';
$_['column_queue_action']                 = 'Akcia';

// Tab
$_['tab_general']                         = 'Hlavné';
$_['tab_manual_submit']                   = 'Ručné odoslanie';
$_['tab_queue']                           = 'Čakací zoznam';
$_['tab_log']                             = 'Protokol';
$_['tab_help_and_support']                = 'Pomoc &amp; Podpora';

// Entry
$_['entry_status']                        = 'Stav';
$_['entry_service_key']                   = 'Kľúč služby';
$_['entry_service_key_location']          = 'URL kľúča služby';
$_['entry_active_store']                  = 'Aktívny obchod';
$_['entry_notify_search_engines']         = 'Oznámiť vyhľadávačom';
$_['entry_url_list']                      = 'Zoznam URL';
$_['entry_load_sitemap']                  = 'Načítať Sitemap';
$_['entry_cron_url']                      = 'Cron URL';

// Button
$_['button_change_key']                   = 'Zmeniť kľúč';
$_['button_check_key']                    = 'Skontrolovať kľúč';
$_['button_submit_url']                   = 'Odoslať URL';
$_['button_submit_queue']                 = 'Odoslať čakajúce URL';
$_['button_clear_queue']                  = 'Vymazať čakajúce URL';
$_['button_clear_log']                    = 'Vymazať protokol';
$_['button_submit_url_list']              = 'Odoslať zoznam URL';
$_['button_clear_url_list']               = 'Vymazať zoznam URL';
$_['button_upload_sitemap']               = 'Nahrať Sitemap URL';
$_['button_import_sitemap']               = 'Importovať Sitemap URL';
$_['button_copy']                         = 'Skopírovať URL';

// Help
$_['help_service_key']                    = 'IndexNow API kľúč overuje vlastníctvo stránky a generuje sa automaticky. Zmeňte kľúč, ak bol kompromitovaný.';
$_['help_service_key_location']           = 'Kliknite na tlačidlo „Skontrolovať kľúč“, aby ste sa uistili, že je kľúč prístupný pre vyhľadávače. Malo by sa otvoriť živé URL, kde sa kľúč nachádza.';
$_['help_url_list']                       = 'Zadajte zoznam URL, jednu na riadok (až 10 000). Uistite sa, že každá URL je správne naformátovaná s "http" alebo "https". Kliknite na „Odoslať zoznam URL“, aby ste poslali URL do vybraných IndexNow služieb.';
$_['help_load_sitemap']                   = 'Môžete poskytnúť URL mapy stránok alebo nahrať súbor sitemap.xml (do 50 MB alebo 50 000 URL). URL z mapy stránok sa pridajú do zoznamu a pošlú do vybraných IndexNow služieb. O procese budete informovaní po jeho dokončení.';
$_['help_cron_url']                       = 'Pridajte túto URL do cron tabuľky vášho hostingového servera. Automaticky pošle <strong>všetky URL v čakacej rade</strong> zo <strong>všetkých nakonfigurovaných obchodov</strong> do <strong>vybraných IndexNow koncových bodov služieb</strong> v naplánovaných intervaloch. Alternatívne môžete použiť <a href="%s">OpenCart 4 Cron Jobs</a> URL na odoslanie URL do IndexNow koncových bodov služieb.';

// Error
$_['error_permission']                    = 'Upozornenie: Nemáte povolenie na úpravu rozšírenia IndexNow!';
$_['error_generate_service_key']          = 'Upozornenie: Nepodarilo sa vygenerovať nový služobný kľúč!';
$_['error_remove_queue']                  = 'Upozornenie: Nepodarilo sa odstrániť URL z čakacej rady!';
$_['error_not_configured']                = 'Upozornenie: Rozšírenie IndexNow nie je nakonfigurované!';
$_['error_filetype']                      = 'Upozornenie: Neplatný typ súboru. Nahrajte platný súbor.';
$_['error_upload']                        = 'Upozornenie: Súbor sa nepodarilo nahrať.';
$_['error_download']                      = 'Upozornenie: Nepodarilo sa stiahnuť súbor mapy stránok "%s"';
$_['error_invalid_url']                   = 'Upozornenie: URL je neplatná. Poskytnite platnú URL.';
$_['error_invalid_url_host']              = 'Upozornenie: Hostiteľ URL je neplatný. Hostiteľ URL musí byť rovnaký ako hostiteľ aktuálnej URL.';
$_['error_no_services_enabled']           = 'Upozornenie: Žiadne služby nie sú povolené. Povoliť aspoň jednu službu.';
$_['error_submit_url_list_empty']         = 'Upozornenie: Zoznam odoslaných URL je prázdny.';
$_['error_submit_url_list_invalid']       = 'Upozornenie: Zoznam odoslaných URL obsahuje neplatné URL alebo URL s hostiteľom, ktorý sa nezhoduje s aktívnym obchodom.';
$_['error_empty_queue']                   = 'Upozornenie: Čakacia rada je prázdna.';
$_['error_file_upload_limit']             = 'Upozornenie: Veľkosť súboru presahuje limit 50 MB. Nahrajte menší súbor.';
$_['error_service_key']                   = 'Služobný kľúč je neplatný. Poskytnite platný služobný kľúč.';
$_['error_service_key_location']          = 'Miesto kľúča služby je neplatné. Poskytnite prosím platné miesto kľúča služby.';
