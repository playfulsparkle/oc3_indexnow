<?php
// Heading
$_['heading_title']                       = 'Playful Sparkle - IndexNow';
$_['heading_getting_started']             = 'Začínáme';
$_['heading_setup']                       = 'Nastavení IndexNow';
$_['heading_troubleshot']                 = 'Řešení běžných problémů';
$_['heading_faq']                         = 'Často kladené dotazy';
$_['heading_contact']                     = 'Kontaktujte podporu';
$_['heading_services']                    = 'Služby IndexNow';

// Text
$_['text_extension']                      = 'Rozšíření';
$_['text_success']                        = 'Úspěch: Upravili jste IndexNow feed!';
$_['text_success_generate_service_key']   = 'Úspěch: Nový klíč služby byl úspěšně vygenerován!';
$_['text_success_remove_queue']           = 'Úspěch: URL v frontě byla úspěšně odstraněna!';
$_['text_success_clear_log']              = 'Úspěch: Záznam byl úspěšně vymazán!';
$_['text_success_clear_queue']            = 'Úspěch: Fronta byla úspěšně vymazána!';
$_['text_success_submit_queue']           = 'Úspěch: URL ve frontě byly úspěšně odeslány!';
$_['text_success_submit_url_list']        = 'Úspěch: Seznam URL byl úspěšně odeslán!';
$_['text_edit']                           = 'Upravit IndexNow';
$_['text_getting_started']                = '<p><strong>Přehled:</strong> Rozšíření <strong>Playful Sparkle - IndexNow</strong> pro OpenCart 4.x+ umožňuje vašemu obchodu automaticky informovat vyhledávače, jako jsou Bing a Yandex, o změnách obsahu obchodu, včetně přidání, aktualizace nebo odstranění obsahu. To zajišťuje rychlejší indexování změn, což zlepšuje viditelnost a výkon vyhledávání vašeho obchodu. Rozšíření zahrnuje funkce manuálního odeslání URL, fronty URL, přizpůsobitelná nastavení a podporu Cron.</p><p><strong>Požadavky:</strong> OpenCart 3.x+, PHP 7.3 nebo vyšší.</p>';
$_['text_setup']                          = '<ul><li><strong>Krok 1: Instalace rozšíření</strong> - Stáhněte a nainstalujte rozšíření prostřednictvím administrátorského panelu OpenCart. Po instalaci bude pro každý obchod automaticky vygenerován klíč služby.</li>
<li><strong>Krok 2: Vymazání cache úprav</strong> - Po instalaci přejděte do sekce <strong>Rozšíření > Úpravy</strong> a klikněte na tlačítko <strong>Obnovit</strong> pro vymazání cache úprav. Tím zajistíte plnou integraci rozšíření do vašeho systému.</li>
<li><strong>Krok 3: Aktivace rozšíření pro váš obchod</strong> - Přejděte do nastavení rozšíření a aktivujte rozšíření pro každý obchod, kde chcete používat služby IndexNow.</li>
<li><strong>Krok 4: Aktivace služeb IndexNow pro váš obchod</strong> - V nastavení rozšíření aktivujte služby IndexNow pro vybraný obchod. Můžete také povolit nebo zakázat specifické služby IndexNow pro jednotlivé obchody.</li>
<li><strong>Krok 5: Nastavení možností upozornění vyhledávačů</strong> - Povolením těchto možností zajistíte, že vyhledávače budou informovány o změnách obsahu, jako jsou kategorie, produkty, výrobci nebo články.</li>
<li><strong>Krok 6: Regenerace klíče služby (volitelné)</strong> - Pokud je to nutné, můžete prostřednictvím nastavení rozšíření regenerovat klíč služby pro každý obchod samostatně.</li>
<li><strong>Krok 7: Odesílání URL</strong> - Odesílejte URL na služby IndexNow prostřednictvím fronty URL, importu/nahrání XML sitemapy nebo manuálním zadáním URL a jejím odesláním na služby IndexNow.</li>
<li><strong>Krok 8: Sledování záznamů</strong> - Po odeslání URL můžete kontrolovat výsledky v záložce Záznamy a v případě potřeby záznamy vymazat.</li></ul>';
$_['text_troubleshot']                    = '<details><summary><strong>Seznam odeslaných URL obsahuje neplatné URL nebo URL s hostem, který neodpovídá aktivnímu obchodu</strong></summary> Ujistěte se, že textové pole seznamu URL obsahuje platné URL a že hostitel (doména) URL odpovídá doméně aktivního obchodu.</details>
<details><summary><strong>Nelze stáhnout soubor sitemap xyz</strong></summary> Ověřte, že je URL sitemapy zadána správně.</details>
<details><summary><strong>Neplatný typ souboru. Nahrajte platný soubor</strong></summary> Ověřte, že nahráváte platný XML soubor sitemapy.</details>
<details><summary><strong>Fronta není naplněna</strong></summary> Ujistěte se, že jsou povoleny možnosti upozorňování vyhledávačů. Tyto možnosti umožňují systému přidávat URL do fronty při přidávání, aktualizaci nebo odstranění kategorií, produktů, výrobců nebo článků.</details>
<details><summary><strong>Žádné služby nejsou aktivní. Aktivujte alespoň jednu službu</strong></summary> Než kliknete na tlačítko "Odeslat URL ve frontě", musíte aktivovat alespoň jednu službu IndexNow.</details>';
$_['text_faq']                            = '<details><summary><strong>Jak mohu aktivovat nebo deaktivovat rozšíření pro každý obchod?</strong></summary><p>Rozšíření můžete aktivovat nebo deaktivovat pro každý obchod samostatně prostřednictvím nastavení rozšíření.</p></details>
<details><summary><strong>Mohu aktivovat nebo deaktivovat služby IndexNow pro každý obchod?</strong></summary><p>Ano, služby IndexNow můžete aktivovat nebo deaktivovat pro každý obchod samostatně v nastavení rozšíření.</p></details>
<details><summary><strong>Jak mohu vygenerovat klíč služby pro každý obchod?</strong></summary><p>Klíč služby je automaticky generován při instalaci a je unikátní pro každý obchod. Není potřeba jej generovat ručně.</p></details>
<details><summary><strong>Mohu regenerovat klíč služby pro každý obchod?</strong></summary><p>Ano, můžete regenerovat klíč služby pro každý obchod samostatně prostřednictvím nastavení rozšíření.</p></details>
<details><summary><strong>Mohu použít vlastní Cron URL pro odesílání URL na služby IndexNow?</strong></summary><p>Ano, můžete použít buď Cron URL poskytovanou rozšířením, nebo URL Cron stránky OpenCart. Obě možnosti fungují bez problémů.</p></details>
<details><summary><strong>Jaké jsou velikostní limity a limity URL pro sitemap?</strong></summary><p>Soubor sitemap může mít až 50 MB a obsahovat až 50 000 URL. Ujistěte se, že vaše sitemap tyto limity nepřesahuje.</p></details>
<details><summary><strong>Jak mohu odeslat URL na služby IndexNow?</strong></summary><p>URL na služby IndexNow můžete odesílat importem sitemap, nahráním XML souboru sitemap nebo manuálním zadáním URL sitemapy. Také můžete odesílat jednotlivé URL z fronty nebo odeslat všechny URL ve frontě najednou.</p></details>
<details><summary><strong>Jak mohu vymazat záznamy odeslaných URL?</strong></summary><p>Záznamy můžete vymazat v záložce Záznamy. Při vymazání se záznamy odstraní bez chyb.</p></details>';
$_['text_contact']                        = '<p>Pro další pomoc se prosím obraťte na náš tým podpory:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentace:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Dokumentace pro uživatele</a></li></ul>';
$_['text_log_no_results']                 = 'V tuto chvíli nejsou k dispozici žádné záznamy v logu.';
$_['text_queue_no_results']               = 'V tuto chvíli nejsou ve frontě žádné URL adresy.';
$_['text_categories']                     = 'Kategorie na vašem webu byly přidány, aktualizovány nebo odstraněny.';
$_['text_products']                       = 'Produkty na vašem webu byly přidány, aktualizovány nebo odstraněny.';
$_['text_manufacturers']                  = 'Výrobci na vašem webu byli přidáni, aktualizováni nebo odstraněni.';
$_['text_information']                    = 'Informační stránky na vašem webu byly přidány, aktualizovány nebo odstraněny.';
$_['text_topics']                         = 'Témata článků na vašem webu byla přidána, aktualizována nebo odstraněna.';
$_['text_articles']                       = 'Články na vašem webu byly přidány, aktualizovány nebo odstraněny.';
$_['text_url_list_warning']               = 'Vložené URL adresy budou ověřeny. Každá adresa musí být správně formátována s "http" nebo "https" a její hostitel musí odpovídat hostiteli obchodu: "%s". Lze odeslat maximálně 10 000 URL adres.';
$_['text_http_status_code']               = 'Analýza stavových kódů HTTP odpovědí ze služeb IndexNow vám pomůže zjistit, zda byly vaše požadavky úspěšně zpracovány nebo se setkaly s problémy. Tyto kódy poskytují přehled o výsledcích indexace URL a případných chybách. Další informace o stavových kódech HTTP naleznete na následujících službách IndexNow:<br><br><ul><li><a href="https://www.bing.com/indexnow/getstarted" target="_blank" rel="noopener noreferrer">Microsoft Bing Webmaster Tools</a></li><li><a href="https://searchadvisor.naver.com/guide/indexnow-request" target="_blank" rel="noopener noreferrer">Naver Search Advisor</a></li><li><a href="https://napoveda.seznam.cz/cz/fulltext-hledani-v-internetu/protokol-indexnow/odeslani-vice-stranek-jednim-pozadavkem/" target="_blank" rel="noopener noreferrer">Seznam.cz</a></li><li><a href="https://yandex.com/support/webmaster/indexnow/reference/post-url.html" target="_blank" rel="noopener noreferrer">Yandex Webmaster Tools</a></li></ul>';

// Column
$_['column_log_id']                       = 'ID Logu';
$_['column_log_url']                      = 'URL';
$_['column_log_service_name']             = 'Název služby';
$_['column_log_status_code']              = 'Stavový kód';
$_['column_log_date_added']               = 'Datum přidání';
$_['column_queue_id']                     = 'ID Fronty';
$_['column_queue_url']                    = 'URL';
$_['column_queue_date_added']             = 'Datum přidání';
$_['column_queue_action']                 = 'Akce';

// Tab
$_['tab_general']                         = 'Obecné';
$_['tab_manual_submit']                   = 'Ruční odeslání';
$_['tab_queue']                           = 'Fronta';
$_['tab_log']                             = 'Log';
$_['tab_help_and_support']                = 'Nápověda a podpora';

// Entry
$_['entry_status']                        = 'Stav';
$_['entry_service_key']                   = 'Klíč služby';
$_['entry_service_key_location']          = 'URL klíče služby';
$_['entry_active_store']                  = 'Aktivní obchod';
$_['entry_notify_search_engines']         = 'Informovat vyhledávače';
$_['entry_url_list']                      = 'Seznam URL';
$_['entry_load_sitemap']                  = 'Načíst Sitemap';
$_['entry_cron_url']                      = 'Cron URL';

// Button
$_['button_change_key']                   = 'Změnit klíč';
$_['button_check_key']                    = 'Zkontrolovat klíč';
$_['button_submit_url']                   = 'Odeslat URL';
$_['button_submit_queue']                 = 'Odeslat URL ve frontě';
$_['button_clear_queue']                  = 'Vyprázdnit frontu URL';
$_['button_clear_log']                    = 'Vymazat log';
$_['button_submit_url_list']              = 'Odeslat seznam URL';
$_['button_clear_url_list']               = 'Vymazat seznam URL';
$_['button_upload_sitemap']               = 'Nahrát URL ze Sitemap';
$_['button_import_sitemap']               = 'Importovat URL ze Sitemap';
$_['button_copy']                         = 'Kopírovat URL';

// Help
$_['help_service_key']                    = 'IndexNow API klíč ověřuje vlastnictví webu a je automaticky generován. Vyměňte klíč, pokud dojde k jeho kompromitaci.';
$_['help_service_key_location']           = 'Klikněte na tlačítko Zkontrolovat klíč, abyste se ujistili, že klíč je přístupný vyhledávačům. Toto by mělo otevřít živou URL adresu, kde je klíč umístěn.';
$_['help_url_list']                       = 'Zadejte seznam URL adres, jednu na řádek (maximálně 10 000). Ujistěte se, že každá URL je správně formátována s "http" nebo "https". Klikněte na "Odeslat seznam URL" pro odeslání adres vybraným službám IndexNow.';
$_['help_load_sitemap']                   = 'Můžete zadat URL Sitemap nebo nahrát soubor sitemap.xml (do 50 MB nebo 50 000 URL). URL adresy ze Sitemap budou přidány do seznamu a odeslány vybrané službě IndexNow. Po dokončení procesu budete informováni.';
$_['help_cron_url']                       = 'Přidejte tuto URL adresu do plánovače úloh na vašem serveru. Automaticky odešle <strong>všechny URL ve frontě</strong> ze <strong>všech nakonfigurovaných obchodů</strong> do <strong>vybraných služeb IndexNow</strong> v nastavených intervalech. Alternativně můžete použít <a href="%s">URL Cron úloh OpenCart 4</a> pro odesílání URL adres do služeb IndexNow.';

// Error
$_['error_permission']                    = 'Upozornění: Nemáte oprávnění k úpravám rozšíření IndexNow!';
$_['error_generate_service_key']          = 'Upozornění: Nelze vygenerovat nový klíč služby!';
$_['error_remove_queue']                  = 'Upozornění: Nelze odstranit čekající URL adresy!';
$_['error_not_configured']                = 'Upozornění: Rozšíření IndexNow není nakonfigurováno!';
$_['error_filetype']                      = 'Upozornění: Neplatný typ souboru. Nahrajte platný soubor.';
$_['error_upload']                        = 'Upozornění: Soubor se nepodařilo nahrát.';
$_['error_download']                      = 'Upozornění: Nepodařilo se stáhnout soubor sitemap "%s"';
$_['error_invalid_url']                   = 'Upozornění: URL adresa je neplatná. Uveďte platnou URL adresu.';
$_['error_invalid_url_host']              = 'Upozornění: Hostitel URL adresy je neplatný. Hostitel URL adresy musí být shodný s hostitelem aktuální URL adresy.';
$_['error_no_services_enabled']           = 'Upozornění: Žádné služby nejsou povoleny. Aktivujte alespoň jednu službu.';
$_['error_submit_url_list_empty']         = 'Upozornění: Seznam odeslaných URL adres je prázdný.';
$_['error_submit_url_list_invalid']       = 'Upozornění: Seznam odeslaných URL adres obsahuje neplatné URL adresy nebo URL adresy s hostitelem, který se neshoduje s aktivním obchodem.';
$_['error_empty_queue']                   = 'Upozornění: Fronta je prázdná.';
$_['error_file_upload_limit']             = 'Upozornění: Velikost souboru překračuje limit 50 MB. Nahrajte menší soubor.';
$_['error_service_key']                   = 'Klíč služby je neplatný. Uveďte platný klíč služby.';
