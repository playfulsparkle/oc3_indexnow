<?php
// Heading
$_['heading_title']                       = 'Playful Sparkle - IndexNow';
$_['heading_getting_started']             = 'Erste Schritte';
$_['heading_setup']                       = 'Einrichtung des IndexNow';
$_['heading_troubleshot']                 = 'Häufige Fehlersuche';
$_['heading_faq']                         = 'Häufig gestellte Fragen';
$_['heading_contact']                     = 'Support kontaktieren';
$_['heading_services']                    = 'IndexNow-Dienste';

// Text
$_['text_extension']                      = 'Erweiterungen';
$_['text_success']                        = 'Erfolg: Sie haben den IndexNow-Feed erfolgreich geändert!';
$_['text_success_generate_service_key']   = 'Erfolg: Der Service-Schlüssel wurde erfolgreich generiert!';
$_['text_success_remove_queue']           = 'Erfolg: Die wartende URL wurde erfolgreich entfernt!';
$_['text_success_clear_log']              = 'Erfolg: Das Protokoll wurde erfolgreich gelöscht!';
$_['text_success_clear_queue']            = 'Erfolg: Die Warteschlange wurde erfolgreich gelöscht!';
$_['text_success_submit_queue']           = 'Erfolg: Die wartenden URLs wurden erfolgreich übermittelt!';
$_['text_success_submit_url_list']        = 'Erfolg: Die URL-Liste wurde erfolgreich übermittelt!';
$_['text_edit']                           = 'IndexNow bearbeiten';
$_['text_getting_started']                = '<p><strong>Übersicht:</strong> Die <strong>Playful Sparkle - IndexNow</strong> Erweiterung für OpenCart 4.x+ ermöglicht es Ihrem Shop, Suchmaschinen wie Bing und Yandex automatisch zu benachrichtigen, wenn Inhalte in Ihrem Shop hinzugefügt, aktualisiert oder gelöscht werden. Dadurch wird die Indexierung von Änderungen beschleunigt, was die Sichtbarkeit und Suchleistung Ihres Shops verbessert. Es bietet Funktionen wie die manuelle URL-Übermittlung, die Übermittlung von wartenden URLs, anpassbare Einstellungen und Cron-Unterstützung.</p><p><strong>Voraussetzungen:</strong> OpenCart 4.x+, PHP 7.4+ oder höher.</p>';
$_['text_setup']                          = '<ul><li><strong>Schritt 1: Erweiterung installieren</strong> - Laden Sie die Erweiterung herunter und installieren Sie sie über das OpenCart-Admin-Panel. Nach der Installation wird der Service-Schlüssel für jeden Shop automatisch generiert.</li>
<li><strong>Schritt 2: Cache der Modifikationen leeren</strong> - Gehen Sie nach der Installation zu <strong>Erweiterungen > Modifikationen</strong> und klicken Sie auf den <strong>Aktualisieren</strong>-Button, um den Cache der Modifikationen zu leeren. Dadurch wird sichergestellt, dass die Erweiterung vollständig in Ihr System integriert ist.</li>
<li><strong>Schritt 3: Erweiterung für Ihren Shop aktivieren</strong> - Gehen Sie zu den Erweiterungseinstellungen und aktivieren Sie die Erweiterung für jeden Shop, in dem Sie die IndexNow-Dienste nutzen möchten.</li>
<li><strong>Schritt 4: IndexNow-Dienste für Ihren Shop aktivieren</strong> - Aktivieren Sie in den Erweiterungseinstellungen die IndexNow-Dienste für den ausgewählten Shop. Sie können auch entscheiden, bestimmte IndexNow-Dienste für jeden Shop zu aktivieren oder zu deaktivieren.</li>
<li><strong>Schritt 5: Optionen für die Benachrichtigung der Suchmaschinen festlegen</strong> - Aktivieren Sie diese Optionen, um Suchmaschinen zu benachrichtigen, wenn Inhalte wie Kategorien, Produkte, Hersteller oder Artikel hinzugefügt, aktualisiert oder gelöscht werden. Dies stellt sicher, dass die Suchmaschinen auf dem neuesten Stand bleiben.</li>
<li><strong>Schritt 6: Service-Schlüssel erneut generieren (optional)</strong> - Wenn nötig, können Sie den Service-Schlüssel für jeden Shop separat in den Erweiterungseinstellungen erneut generieren.</li>
<li><strong>Schritt 7: URLs übermitteln</strong> - Übermitteln Sie URLs an die IndexNow-Dienste, indem Sie entweder die wartenden URLs übermitteln, Ihre XML-Sitemap importieren/hochladen oder eine URL manuell eingeben und an die IndexNow-Dienste übermitteln.</li>
<li><strong>Schritt 8: Protokolle überwachen</strong> - Sobald URLs übermittelt wurden, können Sie im Protokoll-Tab die Ergebnisse der Übermittlungen einsehen. Sie können das Protokoll auch bei Bedarf löschen.</li></ul>';
$_['text_troubleshot']                    = '<details><summary><strong>Die übermittelte URL-Liste enthält ungültige URLs oder URLs mit einem Host, der nicht mit dem aktiven Shop übereinstimmt:</strong></summary> Stellen Sie sicher, dass das Textfeld der URL-Liste gültige URLs enthält und dass der Host (die Domain) der URLs mit der Domain des aktiven Shops übereinstimmt.</details>
<details><summary><strong>Sitemap-Datei xyz konnte nicht heruntergeladen werden:</strong></summary> Stellen Sie sicher, dass die Sitemap-URL korrekt eingegeben wurde.</details>
<details><summary><strong>Ungültiger Dateityp. Bitte laden Sie eine gültige Datei hoch:</strong></summary> Stellen Sie sicher, dass Sie eine gültige XML-Sitemap-Datei hochladen.</details>
<details><summary><strong>Warteschlangenliste ist leer:</strong></summary> Stellen Sie sicher, dass die Optionen zur Benachrichtigung der Suchmaschinen aktiviert sind. Diese Optionen ermöglichen es dem System, URLs für Kategorien, Produkte, Hersteller oder Artikel zu sammeln, wenn diese hinzugefügt, aktualisiert oder gelöscht werden.</details>
<details><summary><strong>Keine Dienste aktiviert. Bitte aktivieren Sie mindestens einen Dienst:</strong></summary> Sie müssen mindestens einen IndexNow-Dienst aktivieren, bevor Sie auf die Schaltfläche "Wartende URLs übermitteln" klicken.</details>';
$_['text_faq']                            = '<details><summary><strong>Wie kann ich die Erweiterung für jeden Shop aktivieren oder deaktivieren?</strong></summary><p>Sie können die Erweiterung für jeden Shop separat über die Erweiterungseinstellungen aktivieren oder deaktivieren.</p></details>
<details><summary><strong>Kann ich die IndexNow-Dienste für jeden Shop aktivieren oder deaktivieren?</strong></summary><p>Ja, Sie können die IndexNow-Dienste für jeden Shop einzeln in den Erweiterungseinstellungen aktivieren oder deaktivieren.</p></details>
<details><summary><strong>Wie generiere ich einen Service-Schlüssel für jeden Shop?</strong></summary><p>Der Service-Schlüssel wird automatisch bei der Installation generiert und ist für jeden Shop einzigartig. Sie müssen ihn nicht manuell generieren.</p></details>
<details><summary><strong>Kann ich den Service-Schlüssel für jeden Shop erneut generieren?</strong></summary><p>Ja, Sie können den Service-Schlüssel für jeden Shop separat in den Erweiterungseinstellungen erneut generieren. Dies ermöglicht es Ihnen, den Schlüssel bei Bedarf zu aktualisieren oder zu ändern.</p></details>
<details><summary><strong>Kann ich eine benutzerdefinierte Cron-URL für das Senden von URLs an die IndexNow-Dienste verwenden?</strong></summary><p>Ja, Sie können entweder die von der Erweiterung bereitgestellte Cron-URL oder die OpenCart-Cron-Seiten-URL verwenden, um die wartenden URLs zu senden. Beide Optionen funktionieren ohne Probleme.</p></details>
<details><summary><strong>Was sind die Größen- und URL-Grenzen für die Sitemap?</strong></summary><p>Die Sitemap-Datei kann bis zu 50 MB groß sein und bis zu 50.000 URLs enthalten. Stellen Sie sicher, dass Ihre Sitemap diese Grenzen nicht überschreitet.</p></details>
<details><summary><strong>Wie kann ich URLs an die IndexNow-Dienste übermitteln?</strong></summary><p>Sie können URLs an die IndexNow-Dienste übermitteln, indem Sie eine Sitemap importieren, eine XML-Sitemap-Datei hochladen oder die Sitemap-URL manuell eingeben. Zusätzlich können Sie einzelne URLs aus der Warteschlange übermitteln oder alle wartenden URLs auf einmal für den ausgewählten Shop senden.</p></details>
<details><summary><strong>Wie lösche ich das URL-Übermittlungsprotokoll?</strong></summary><p>Sie können das Protokoll im Tab "Protokoll" löschen. Das Protokoll wird ohne Fehler gelöscht, wenn Sie sich dafür entscheiden, es zu löschen.</p></details>';
$_['text_contact']                        = '<p>Für weitere Unterstützung wenden Sie sich bitte an unser Support-Team:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentation:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Benutzerdokumentation</a></li></ul>';
$_['text_log_no_results']                 = 'Derzeit sind keine Logeinträge verfügbar.';
$_['text_queue_no_results']               = 'Aktuell sind keine URLs in der Warteschlange.';
$_['text_categories']                     = 'Kategorien auf Ihrer Seite wurden hinzugefügt, aktualisiert oder gelöscht.';
$_['text_products']                       = 'Produkte auf Ihrer Seite wurden hinzugefügt, aktualisiert oder gelöscht.';
$_['text_manufacturers']                  = 'Hersteller auf Ihrer Seite wurden hinzugefügt, aktualisiert oder gelöscht.';
$_['text_information']                    = 'Informationsseiten auf Ihrer Seite wurden hinzugefügt, aktualisiert oder gelöscht.';
$_['text_topics']                         = 'Themenartikel auf Ihrer Seite wurden hinzugefügt, aktualisiert oder gelöscht.';
$_['text_articles']                       = 'Artikel auf Ihrer Seite wurden hinzugefügt, aktualisiert oder gelöscht.';
$_['text_url_list_warning']               = 'Die URLs, die Sie einfügen, werden validiert. Jede URL muss korrekt mit "http" oder "https" formatiert sein, und der Host muss mit dem Store-Host übereinstimmen: "%s". Es können maximal 10.000 URLs eingereicht werden.';
$_['text_http_status_code']               = 'Die Analyse der HTTP-Antwortstatuscodes von IndexNow-Diensten hilft Ihnen zu verstehen, ob Ihre Anfragen erfolgreich verarbeitet wurden oder auf Probleme gestoßen sind. Diese Codes liefern Einblicke in die Indexierungsergebnisse der URLs und mögliche Fehler. Besuchen Sie die folgenden IndexNow-Dienste, um mehr über deren HTTP-Statuscodes zu erfahren:<br><br><ul><li><a href="https://www.bing.com/indexnow/getstarted" target="_blank" rel="noopener noreferrer">Microsoft Bing Webmaster Tools</a></li><li><a href="https://searchadvisor.naver.com/guide/indexnow-request" target="_blank" rel="noopener noreferrer">Naver Search Advisor</a></li><li><a href="https://napoveda.seznam.cz/cz/fulltext-hledani-v-internetu/protokol-indexnow/odeslani-vice-stranek-jednim-pozadavkem/" target="_blank" rel="noopener noreferrer">Seznam.cz</a></li><li><a href="https://yandex.com/support/webmaster/indexnow/reference/post-url.html" target="_blank" rel="noopener noreferrer">Yandex Webmaster Tools</a></li></ul>';

// Column
$_['column_log_id']                       = 'Log-ID';
$_['column_log_url']                      = 'URL';
$_['column_log_service_name']             = 'Dienstname';
$_['column_log_status_code']              = 'Statuscode';
$_['column_log_date_added']               = 'Datum hinzugefügt';
$_['column_queue_id']                     = 'Warteschlangen-ID';
$_['column_queue_url']                    = 'URL';
$_['column_queue_date_added']             = 'Datum hinzugefügt';
$_['column_queue_action']                 = 'Aktion';

// Tab
$_['tab_general']                         = 'Allgemein';
$_['tab_manual_submit']                   = 'Manuelle Einreichung';
$_['tab_queue']                           = 'Warteschlange';
$_['tab_log']                             = 'Log';
$_['tab_help_and_support']                = 'Hilfe &amp; Support';

// Entry
$_['entry_status']                        = 'Status';
$_['entry_service_key']                   = 'Dienstschlüssel';
$_['entry_service_key_location']          = 'URL des Dienstschlüssels';
$_['entry_active_store']                  = 'Aktiver Shop';
$_['entry_notify_search_engines']         = 'Suchmaschinen benachrichtigen';
$_['entry_url_list']                      = 'URL-Liste';
$_['entry_load_sitemap']                  = 'Sitemap laden';
$_['entry_cron_url']                      = 'Cron-URL';

// Button
$_['button_change_key']                   = 'Schlüssel ändern';
$_['button_check_key']                    = 'Schlüssel überprüfen';
$_['button_submit_url']                   = 'URL einreichen';
$_['button_submit_queue']                 = 'Warteschlangen-URLs einreichen';
$_['button_clear_queue']                  = 'Warteschlange löschen';
$_['button_clear_log']                    = 'Log löschen';
$_['button_submit_url_list']              = 'URL-Liste einreichen';
$_['button_clear_url_list']               = 'URL-Liste löschen';
$_['button_upload_sitemap']               = 'Sitemap-URLs hochladen';
$_['button_import_sitemap']               = 'Sitemap-URLs importieren';
$_['button_copy']                         = 'URL kopieren';

// Help
$_['help_service_key']                    = 'Der IndexNow API-Schlüssel bestätigt die Eigentümerschaft der Website und wird automatisch generiert. Ändern Sie den Schlüssel, falls er kompromittiert wurde.';
$_['help_service_key_location']           = 'Klicken Sie auf die Schaltfläche "Schlüssel überprüfen", um sicherzustellen, dass der Schlüssel für Suchmaschinen zugänglich ist. Dies sollte die Live-URL öffnen, an der sich der Schlüssel befindet.';
$_['help_url_list']                       = 'Geben Sie eine Liste von URLs ein, jeweils eine pro Zeile (bis zu 10.000). Stellen Sie sicher, dass jede URL korrekt mit "http" oder "https" formatiert ist. Klicken Sie auf "URL-Liste absenden", um die URLs an die ausgewählten IndexNow-Dienste zu senden.';
$_['help_load_sitemap']                   = 'Sie können entweder eine Sitemap-URL angeben oder eine Sitemap.xml-Datei hochladen (bis zu 50 MB oder 50.000 URLs). Die URLs aus der Sitemap werden zur Liste hinzugefügt und an den ausgewählten IndexNow-Dienst gesendet. Sie werden benachrichtigt, sobald der Vorgang abgeschlossen ist.';
$_['help_cron_url']                       = 'Fügen Sie diese URL zur Cron-Tabelle Ihres Hosting-Servers hinzu. Sie sendet automatisch <strong>alle wartenden URLs</strong> von <strong>allen konfigurierten Shops</strong> an die <strong>ausgewählten IndexNow-Dienstendpunkte</strong> in geplanten Intervallen. Alternativ können Sie die <a href="%s">OpenCart 4 Cron Jobs</a> URL verwenden, um URLs an die IndexNow-Dienstendpunkte zu senden.';

// Error
$_['error_permission']                    = 'Warnung: Sie haben keine Berechtigung, die IndexNow-Erweiterung zu bearbeiten!';
$_['error_generate_service_key']          = 'Warnung: Der API-Schlüssel konnte nicht generiert werden!';
$_['error_remove_queue']                  = 'Warnung: Die wartenden URLs konnten nicht entfernt werden!';
$_['error_not_configured']                = 'Warnung: Die IndexNow-Erweiterung ist nicht konfiguriert!';
$_['error_filetype']                      = 'Warnung: Ungültiger Dateityp. Bitte laden Sie eine gültige Datei hoch.';
$_['error_upload']                        = 'Warnung: Die Datei konnte nicht hochgeladen werden.';
$_['error_download']                      = 'Warnung: Die Sitemap-Datei "%s" konnte nicht heruntergeladen werden.';
$_['error_invalid_url']                   = 'Warnung: Die URL ist ungültig. Bitte geben Sie eine gültige URL an.';
$_['error_invalid_url_host']              = 'Warnung: Der Host der URL ist ungültig. Der Host der URL muss mit dem Host der aktuellen URL übereinstimmen.';
$_['error_no_services_enabled']           = 'Warnung: Es sind keine Dienste aktiviert. Bitte aktivieren Sie mindestens einen Dienst.';
$_['error_submit_url_list_empty']         = 'Warnung: Die eingereichte URL-Liste ist leer.';
$_['error_submit_url_list_invalid']       = 'Warnung: Die eingereichte URL-Liste enthält ungültige URLs oder URLs mit einem Host, der nicht dem aktiven Store entspricht.';
$_['error_empty_queue']                   = 'Warnung: Die Warteschlange ist leer.';
$_['error_file_upload_limit']             = 'Warnung: Die Dateigröße überschreitet das 50 MB-Limit. Bitte laden Sie eine kleinere Datei hoch.';
$_['error_service_key']                   = 'Der API-Schlüssel ist ungültig. Bitte geben Sie einen gültigen API-Schlüssel an.';
