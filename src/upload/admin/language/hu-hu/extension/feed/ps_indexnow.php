<?php
// Heading
$_['heading_title']                       = 'Playful Sparkle - IndexNow';
$_['heading_contact']                     = 'Terméktámogatás';
$_['entry_indexnow_services']                    = 'IndexNow szolgáltatások';

// Text
$_['text_extension']                      = 'Bővítmények';
$_['text_success']                        = 'Siker: Sikeresen módosította az IndexNow feedet!';
$_['text_success_generate_service_key']   = 'Siker: Sikeresen generált új szolgáltatáskulcs!';
$_['text_success_remove_queue']           = 'Siker: A várólistán szereplő URL sikeresen eltávolítva!';
$_['text_success_clear_log']              = 'Siker: A napló sikeresen törölve!';
$_['text_success_clear_queue']            = 'Siker: A várólista sikeresen törölve!';
$_['text_success_submit_queue']           = 'Siker: A várólistán szereplő URL-ek sikeresen benyújtva!';
$_['text_success_submit_url_list']        = 'Siker: Az URL lista sikeresen benyújtva!';
$_['text_edit']                           = 'IndexNow szerkesztése';
$_['text_contact']                        = '<p>További segítségért kérjük, lépjen kapcsolatba támogatási csapatunkkal:</p><ul><li><strong>Kapcsolat:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentáció:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Felhasználói dokumentáció</a></li></ul>';
$_['text_log_no_results']                 = 'Jelenleg nincsenek naplórészletek elérhetőek.';
$_['text_queue_no_results']               = 'Jelenleg nincsenek URL-ek a várólistán.';
$_['text_categories']                     = 'Webhelyén a kategóriák hozzáadása, frissítése vagy törlése.';
$_['text_products']                       = 'Webhelyén a termékek hozzáadása, frissítése vagy törlése.';
$_['text_manufacturers']                  = 'Webhelyén a gyártók hozzáadása, frissítése vagy törlése.';
$_['text_information']                    = 'Webhelyén az információs oldalak hozzáadása, frissítése vagy törlése.';
$_['text_articles']                       = 'Webhelyén a cikkek hozzáadása, frissítése vagy törlése.';
$_['text_url_list_warning']               = 'A beillesztett URL-ek validálásra kerülnek. Minden URL-nek megfelelő formátumban kell lennie, "http" vagy "https" kezdettel, és a hosztnak meg kell egyeznie az üzlet hosztjával: "%s". Legfeljebb 10 000 URL küldhető be.';
$_['text_http_status_code']               = 'Az IndexNow szolgáltatások HTTP válaszkódjainak elemzése segít megérteni, hogy a kéréseket sikeresen feldolgozták-e vagy problémákba ütköztek. Ezen kódok információkat adnak az URL-ek indexelésének eredményeiről és az esetleges hibákról. További információk az alábbi IndexNow szolgáltatásoknál találhatók:<br><br><ul><li><a href="https://www.bing.com/indexnow/getstarted" target="_blank" rel="noopener noreferrer">Microsoft Bing Webmaster Tools</a></li><li><a href="https://searchadvisor.naver.com/guide/indexnow-request" target="_blank" rel="noopener noreferrer">Naver Search Advisor</a></li><li><a href="https://napoveda.seznam.cz/cz/fulltext-hledani-v-internetu/protokol-indexnow/odeslani-vice-stranek-jednim-pozadavkem/" target="_blank" rel="noopener noreferrer">Seznam.cz</a></li><li><a href="https://yandex.com/support/webmaster/indexnow/reference/post-url.html" target="_blank" rel="noopener noreferrer">Yandex Webmaster Tools</a></li></ul>';

// Column
$_['column_log_id']                       = 'Naplóazonosító';
$_['column_log_url']                      = 'URL';
$_['column_log_service_name']             = 'Szolgáltatás neve';
$_['column_log_status_code']              = 'Állapotkód';
$_['column_log_date_added']               = 'Hozzáadás dátuma';
$_['column_queue_id']                     = 'Várólista azonosító';
$_['column_queue_url']                    = 'URL';
$_['column_queue_date_added']             = 'Hozzáadás dátuma';
$_['column_queue_action']                 = 'Művelet';

// Tab
$_['tab_general']                         = 'Általános';
$_['tab_manual_submit']                   = 'Manuális beküldés';
$_['tab_queue']                           = 'Várólista';
$_['tab_log']                             = 'Napló';
$_['tab_help_and_support']                = 'Segítség és támogatás';

// Entry
$_['entry_status']                        = 'Állapot';
$_['entry_service_key']                   = 'Szolgáltatási kulcs';
$_['entry_service_key_location']          = 'Szolgáltatási kulcs URL';
$_['entry_active_store']                  = 'Aktív bolt';
$_['entry_notify_search_engines']         = 'Értesítés keresőmotoroknak';
$_['entry_url_list']                      = 'URL lista';
$_['entry_load_sitemap']                  = 'Webhelytérkép betöltése';
$_['entry_cron_url']                      = 'Cron URL';

// Button
$_['button_change_key']                   = 'Kulcs módosítása';
$_['button_check_key']                    = 'Kulcs ellenőrzése';
$_['button_submit_url']                   = 'URL beküldése';
$_['button_submit_queue']                 = 'Várólistás URL-ek beküldése';
$_['button_clear_queue']                  = 'Várólista törlése';
$_['button_clear_log']                    = 'Napló törlése';
$_['button_submit_url_list']              = 'URL lista beküldése';
$_['button_clear_url_list']               = 'URL lista törlése';
$_['button_upload_sitemap']               = 'Webhelytérkép URL-ek feltöltése';
$_['button_import_sitemap']               = 'Webhelytérkép URL-ek importálása';
$_['button_copy']                         = 'URL másolása';

// Help
$_['help_service_key']                    = 'Az IndexNow API kulcs a webhely tulajdonjogát ellenőrzi, és automatikusan generálódik. Cserélje ki a kulcsot, ha az kompromittálódik.';
$_['help_service_key_location']           = 'Kattintson a "Kulcs ellenőrzése" gombra, hogy megbizonyosodjon arról, hogy a kulcs elérhető a keresőmotorok számára. Ezzel megnyílik az élő URL, ahol a kulcs található.';
$_['help_url_list']                       = 'Adjon meg egy URL listát, minden URL-t külön sorban (legfeljebb 10 000). Bizonyosodjon meg róla, hogy minden URL helyesen van formázva "http" vagy "https" kezdettel. Kattintson a "URL lista beküldése" gombra az URL-ek IndexNow szolgáltatásokhoz történő küldéséhez.';
$_['help_load_sitemap']                   = 'Webhelytérkép URL-t adhat meg, vagy feltölthet egy sitemap.xml fájlt (legfeljebb 50MB vagy 50 000 URL). A webhelytérképből származó URL-ek hozzáadásra kerülnek a listához, és elküldésre kerülnek a kiválasztott IndexNow szolgáltatáshoz. A folyamat befejezése után értesítést kap.';
$_['help_cron_url']                       = 'Adja hozzá ezt az URL-t a tárhely szerverének cron táblájához. Ez automatikusan elküldi az <strong>összes várólistás URL-t</strong> az <strong>összes konfigurált boltból</strong> a <strong>kiválasztott IndexNow szolgáltatási végpontokhoz</strong> a beütemezett időpontokban. Alternatívaként használhatja a <a href="%s">OpenCart 4 Cron Jobs</a> URL-t is URL-ek beküldésére az IndexNow szolgáltatási végpontokhoz.';

// Error
$_['error_permission']                    = 'Figyelmeztetés: Nincs jogosultsága az IndexNow bővítmény módosításához!';
$_['error_generate_service_key']          = 'Figyelmeztetés: Nem sikerült új szolgáltatási kulcsot generálni!';
$_['error_remove_queue']                  = 'Figyelmeztetés: Nem sikerült eltávolítani a várólistás URL-eket!';
$_['error_not_configured']                = 'Figyelmeztetés: Az IndexNow bővítmény nincs konfigurálva!';
$_['error_filetype']                      = 'Figyelmeztetés: Érvénytelen fájltípus. Kérjük, töltsön fel egy érvényes fájlt.';
$_['error_upload']                        = 'Figyelmeztetés: A fájl nem tölthető fel.';
$_['error_download']                      = 'Figyelmeztetés: Nem sikerült letölteni a webhelytérkép fájlt "%s"';
$_['error_invalid_url']                   = 'Figyelmeztetés: Az URL érvénytelen. Kérjük, adjon meg egy érvényes URL-t.';
$_['error_invalid_url_host']              = 'Figyelmeztetés: Az URL hoszt érvénytelen. Az URL hosztnak meg kell egyeznie a jelenlegi URL hoszttal.';
$_['error_no_services_enabled']           = 'Figyelmeztetés: Nincsenek engedélyezett szolgáltatások. Kérjük, engedélyezzen legalább egy szolgáltatást.';
$_['error_submit_url_list_empty']         = 'Figyelmeztetés: A beküldött URL lista üres.';
$_['error_submit_url_list_invalid']       = 'Figyelmeztetés: A beküldött URL lista érvénytelen URL-eket tartalmaz, vagy olyan URL-eket, amelyek hosztja nem egyezik az aktív bolt hosztjával.';
$_['error_empty_queue']                   = 'Figyelmeztetés: A várólista üres.';
$_['error_file_upload_limit']             = 'Figyelmeztetés: A fájlméret meghaladja az 50 MB-os korlátot. Kérjük, töltsön fel kisebb fájlt.';
$_['error_service_key']                   = 'A szolgáltatási kulcs érvénytelen. Kérjük, adjon meg egy érvényes szolgáltatási kulcsot.';
$_['error_service_key_location']          = 'A szolgáltatás kulcsának helye érvénytelen. Kérem, adjon meg egy érvényes helyet a szolgáltatás kulcsához.';
