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
$_['text_setup']                          = '<ul><li><strong>Passaggio 1: Installazione dell\'estensione</strong> - Carica e installa l\'estensione nel pannello di amministrazione di OpenCart. Dopo l\'installazione, viene generata automaticamente una chiave di servizio per ogni negozio.</li><li><strong>Passaggio 2: Aggiornamento delle modifiche</strong> - Vai su <strong>Estensioni &gt; Modifiche</strong> e clicca su <strong>Aggiorna</strong> per ricostruire la cache delle modifiche.</li><li><strong>Passaggio 3: Abilitazione dell\'estensione per negozio</strong> - Apri le impostazioni dell\'estensione e abilitala per ogni negozio in cui desideri utilizzare IndexNow.</li><li><strong>Passaggio 4: Selezione di un servizio IndexNow</strong> - Seleziona l\'endpoint IndexNow a cui desideri inviare i dati.</li><li><strong>Passaggio 5: Configurazione della notifica automatica</strong> - Abilita le opzioni di notifica automatica per inviare gli URL quando categorie, prodotti, produttori o articoli vengono aggiunti, aggiornati o eliminati.</li><li><strong>Passaggio 6: Rigenerazione della chiave di servizio (opzionale)</strong> - Se necessario, è possibile rigenerare la chiave di servizio separatamente per ogni negozio nelle impostazioni dell\'estensione.</li><li><strong>Passaggio 7: Invio degli URL</strong> - Invia gli URL elaborando la coda, importando la sitemap XML, caricando un file sitemap o inserendo manualmente gli URL.</li><li><strong>Passaggio 8: Monitoraggio dei log</strong> - Dopo l\'invio, controlla la scheda <strong>Log</strong> per i risultati. È inoltre possibile cancellare il log se necessario.</li></ul>';
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
$_['text_log_no_results']                 = 'Al momento non sono disponibili voci di log.';
$_['text_queue_no_results']               = 'Non ci sono URL in coda al momento.';
$_['text_categories']                     = 'Le categorie sul tuo sito sono aggiunte, aggiornate o eliminate.';
$_['text_products']                       = 'I prodotti sul tuo sito sono aggiunti, aggiornati o eliminati.';
$_['text_manufacturers']                  = 'I produttori sul tuo sito sono aggiunti, aggiornati o eliminati.';
$_['text_information']                    = 'Le pagine di informazioni sul tuo sito sono aggiunte, aggiornate o eliminate.';
$_['text_topics']                         = 'Gli argomenti degli articoli sul tuo sito sono aggiunti, aggiornati o eliminati.';
$_['text_articles']                       = 'Gli articoli sul tuo sito sono aggiunti, aggiornati o eliminati.';
$_['text_url_list_warning']               = 'Gli URL che incollerai saranno convalidati. Ogni URL deve essere correttamente formattato con "http" o "https", e il suo host deve corrispondere all\'host del negozio: "%s". È possibile inviare un massimo di 10.000 URL.';
$_['text_http_status_code']               = 'L\'analisi dei codici di stato della risposta HTTP dai servizi IndexNow ti aiuta a capire se le tue richieste sono state elaborate con successo o se hanno incontrato problemi. Questi codici forniscono informazioni sui risultati dell\'indicizzazione degli URL e sugli eventuali errori. Visita i seguenti servizi IndexNow per saperne di più sui loro codici di stato HTTP:<br><br><ul><li><a href="https://www.bing.com/indexnow/getstarted" target="_blank" rel="noopener noreferrer">Microsoft Bing Webmaster Tools</a></li><li><a href="https://searchadvisor.naver.com/guide/indexnow-request" target="_blank" rel="noopener noreferrer">Naver Search Advisor</a></li><li><a href="https://napoveda.seznam.cz/cz/fulltext-hledani-v-internetu/protokol-indexnow/odeslani-vice-stranek-jednim-pozadavkem/" target="_blank" rel="noopener noreferrer">Seznam.cz</a></li><li><a href="https://yandex.com/support/webmaster/indexnow/reference/post-url.html" target="_blank" rel="noopener noreferrer">Yandex Webmaster Tools</a></li></ul>';

// Column
$_['column_log_id']                       = 'ID Log';
$_['column_log_url']                      = 'URL';
$_['column_log_service_name']             = 'Nome del Servizio';
$_['column_log_status_code']              = 'Codice di Stato';
$_['column_log_date_added']               = 'Data di Aggiunta';
$_['column_queue_id']                     = 'ID Coda';
$_['column_queue_url']                    = 'URL';
$_['column_queue_date_added']             = 'Data di Aggiunta';
$_['column_queue_action']                 = 'Azione';

// Tab
$_['tab_general']                         = 'Generale';
$_['tab_manual_submit']                   = 'Invio Manuale';
$_['tab_queue']                           = 'Coda';
$_['tab_log']                             = 'Log';
$_['tab_help_and_support']                = 'Aiuto &amp; Supporto';

// Entry
$_['entry_status']                        = 'Stato';
$_['entry_service_key']                   = 'Chiave del Servizio';
$_['entry_service_key_location']          = 'URL della Chiave del Servizio';
$_['entry_active_store']                  = 'Negozio Attivo';
$_['entry_notify_search_engines']         = 'Notifica ai Motori di Ricerca';
$_['entry_url_list']                      = 'Elenco URL';
$_['entry_load_sitemap']                  = 'Carica Sitemap';
$_['entry_cron_url']                      = 'URL Cron';

// Button
$_['button_change_key']                   = 'Cambia Chiave';
$_['button_check_key']                    = 'Verifica Chiave';
$_['button_submit_url']                   = 'Invia URL';
$_['button_submit_queue']                 = 'Invia URL in Coda';
$_['button_clear_queue']                  = 'Svuota la Coda';
$_['button_clear_log']                    = 'Svuota il Log';
$_['button_submit_url_list']              = 'Invia Elenco URL';
$_['button_clear_url_list']               = 'Svuota l\'Elenco URL';
$_['button_upload_sitemap']               = 'Carica URL della Sitemap';
$_['button_import_sitemap']               = 'Importa URL della Sitemap';
$_['button_copy']                         = 'Copia URL';

// Help
$_['help_service_key']                    = 'La chiave API di IndexNow verifica la proprietà del sito ed è generata automaticamente. Modifica la chiave se viene compromessa.';
$_['help_service_key_location']           = 'Clicca sul pulsante "Controlla Chiave" per verificare che la chiave sia accessibile ai motori di ricerca. Questo dovrebbe aprire l’URL live dove la chiave è ubicata.';
$_['help_url_list']                       = 'Inserisci un elenco di URL, uno per riga (fino a 10.000). Assicurati che ogni URL sia formattato correttamente con "http" o "https". Clicca su "Invia Elenco URL" per inviare gli URL ai servizi IndexNow selezionati.';
$_['help_load_sitemap']                   = 'Puoi fornire un URL della sitemap oppure caricare un file sitemap.xml (fino a 50 MB o 50.000 URL). Gli URL dalla sitemap verranno aggiunti all’elenco e inviati al servizio IndexNow selezionato. Sarai notificato quando il processo sarà completato.';
$_['help_cron_url']                       = 'Aggiungi questo URL alla tabella cron del server di hosting. Invierà automaticamente <strong>tutti gli URL in coda</strong> da <strong>tutti i negozi configurati</strong> ai <strong>punti di accesso del servizio IndexNow</strong> a intervalli programmati. In alternativa, puoi utilizzare l’URL <a href="%s">OpenCart 4 Cron Jobs</a> per inviare gli URL ai punti di accesso del servizio IndexNow.';

// Error
$_['error_permission']                    = 'Avviso: Non hai il permesso di modificare l\'estensione IndexNow!';
$_['error_generate_service_key']          = 'Avviso: Impossibile generare una nuova chiave di servizio!';
$_['error_remove_queue']                  = 'Avviso: Impossibile rimuovere gli URL in coda!';
$_['error_not_configured']                = 'Avviso: L\'estensione IndexNow non è configurata!';
$_['error_filetype']                      = 'Avviso: Tipo di file non valido. Carica un file valido.';
$_['error_upload']                        = 'Avviso: Impossibile caricare il file.';
$_['error_download']                      = 'Avviso: Impossibile scaricare il file della sitemap "%s"';
$_['error_invalid_url']                   = 'Avviso: L\'URL non è valido. Fornisci un URL valido.';
$_['error_invalid_url_host']              = 'Avviso: L\'host dell\'URL non è valido. L\'host dell\'URL deve essere lo stesso dell\'host dell\'URL corrente.';
$_['error_no_services_enabled']           = 'Avviso: Nessun servizio è abilitato. Abilita almeno un servizio.';
$_['error_submit_url_list_empty']         = 'Avviso: L\'elenco URL inviato è vuoto.';
$_['error_submit_url_list_invalid']       = 'Avviso: L\'elenco URL inviato contiene URL non validi o URL con un host che non corrisponde a quello del negozio attivo.';
$_['error_empty_queue']                   = 'Avviso: La coda è vuota.';
$_['error_file_upload_limit']             = 'Avviso: La dimensione del file supera il limite di 50 MB. Carica un file di dimensioni inferiori.';
$_['error_service_key']                   = 'La chiave di servizio non è valida. Fornisci una chiave di servizio valida.';
$_['error_service_key_location']          = 'La posizione della chiave del servizio non è valida. Si prega di fornire una posizione valida per la chiave del servizio.';
