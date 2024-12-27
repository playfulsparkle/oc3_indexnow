<?php
// Heading
$_['heading_title']                       = 'Playful Sparkle - IndexNow';
$_['heading_getting_started']             = 'Začínáme';
$_['heading_setup']                       = 'Nastavení IndexNow';
$_['heading_troubleshot']                 = 'Běžné řešení problémů';
$_['heading_faq']                         = 'Často kladené otázky';
$_['heading_contact']                     = 'Kontaktujte podporu';
$_['heading_v3_score_threshold']          = 'Prahová hodnota skóre';

// Text
$_['text_extension']                      = 'Rozšíření';
$_['text_success']                        = 'Úspěch: Úspěšně jste upravili IndexNow feed!';
$_['text_success_generate_service_key']   = 'Úspěch: Úspěšně vygenerován nový klíč služby!';
$_['text_success_remove_queue']           = 'Úspěch: URL ve frontě bylo úspěšně odstraněno!';
$_['text_success_clear_log']              = 'Úspěch: Log byl úspěšně vymazán!';
$_['text_success_clear_queue']            = 'Úspěch: Fronta byla úspěšně vymazána!';
$_['text_success_submit_queue']           = 'Úspěch: URL ve frontě byly úspěšně odeslány!';
$_['text_success_submit_url_list']        = 'Úspěch: Seznam URL byl úspěšně odeslán!';
$_['text_edit']                           = 'Upravit IndexNow';
$_['text_getting_started']                = '<p><strong>Přehled:</strong> Rozšíření <strong>Playful Sparkle - IndexNow</strong> pro OpenCart 4.x+ umožňuje vašemu obchodu automaticky informovat vyhledávače jako Bing a Yandex, když jsou přidány, aktualizovány nebo smazány obsahové položky. To zajistí rychlejší indexování změn a zlepší viditelnost vašeho obchodu a výkonnost ve vyhledávání. Nabízí funkce jako ruční odesílání URL, odesílání URL ve frontě, přizpůsobitelné nastavení a podporu Cronu.</p><p><strong>Požadavky:</strong> OpenCart 3.x+, PHP 7.3+ nebo vyšší.</p>';
$_['text_setup']                          = '<ul>
<li><strong>Krok 1: Instalace rozšíření</strong> - Stáhněte a nainstalujte rozšíření přes administrátorský panel OpenCart. Po instalaci bude pro každý obchod automaticky vygenerován klíč služby.</li>
<li><strong>Krok 2: Vymazání cache modifikací</strong> - Po instalaci přejděte na <strong>Rozšíření > Modifikace</strong> a klikněte na tlačítko <strong>Obnovit</strong> pro vymazání cache modifikací. Tím zajistíte, že bude rozšíření plně integrováno do vašeho systému.</li>
<li><strong>Krok 3: Povolení rozšíření pro váš obchod</strong> - Přejděte do nastavení rozšíření a povolte rozšíření pro každý obchod, kde chcete používat služby IndexNow.</li>
<li><strong>Krok 4: Povolení služeb IndexNow pro váš obchod</strong> - V nastavení rozšíření povolte služby IndexNow pro vybraný obchod. Můžete si také vybrat, které konkrétní služby IndexNow chcete povolit nebo zakázat pro každý obchod.</li>
<li><strong>Krok 5: Konfigurace nastavení odesílání URL</strong> - Zvolte, jak chcete odesílat URL do služeb IndexNow. Můžete importovat sitemap, nahrát XML soubor sitemapy nebo ručně zadat URL. Každá metoda automaticky vygeneruje seznam URL pro odeslání.</li>
<li><strong>Krok 6: Nastavení možností notifikací</strong> - Povolit notifikace pro přidání, aktualizaci nebo smazání obsahu jako kategorie, produkty, výrobci nebo články. To zajistí, že vyhledávače budou mít aktuální informace.</li>
<li><strong>Krok 7: Regenerace klíče služby (volitelné)</strong> - Pokud je to nutné, můžete znovu vygenerovat klíč služby pro každý obchod zvlášť v nastavení rozšíření.</li>
<li><strong>Krok 8: Monitorování logů</strong> - Jakmile jsou URL odeslány, můžete zkontrolovat záložku Log pro zobrazení výsledků odeslání. Log můžete také vymazat, pokud je to potřeba.</li>
</ul>';
$_['text_troubleshot']                    = '<ul>
    <li><strong>Seznam odeslaných URL obsahuje neplatné URL nebo URL s hostitelem, který neodpovídá aktivnímu obchodu:</strong> Zajistěte, aby textové pole seznamu URL obsahovalo platné URL a aby hostitel (doména) URL odpovídal doméně aktivního obchodu.</li>
    <li><strong>Nelze stáhnout soubor sitemap xyz:</strong> Zajistěte, aby URL sitemapy byla zadána správně.</li>
    <li><strong>Neplatný typ souboru. Nahrajte prosím platný soubor:</strong> Zajistěte, aby byl nahrán platný XML soubor sitemapy.</li>
    <li><strong>Seznam ve frontě není naplněn:</strong> Zajistěte, že máte povolené následující možnosti: Kategorii, Produkty, Výrobce, Informace o stránkách, Témata článků a Články na vašem webu, které jsou přidány, aktualizovány nebo smazány. Ujistěte se také, že každá sekce je povolena a že je vybrán správný obchod při úpravách produktů, kategorií atd.</li>
    <li><strong>Žádné služby nejsou povoleny. Povolte alespoň jednu službu:</strong> Musíte povolit alespoň jednu službu IndexNow, než kliknete na tlačítko "Odeslat URL ve frontě".</li>
</ul>';
$_['text_faq']                            = '<details><summary><strong>Jak mohu povolit nebo zakázat rozšíření pro každý obchod?</strong></summary><p>Rozšíření můžete povolit nebo zakázat pro každý obchod samostatně prostřednictvím nastavení rozšíření.</p></details>
<details><summary><strong>Mohu povolit nebo zakázat služby IndexNow pro každý obchod?</strong></summary><p>Ano, služby IndexNow můžete povolit nebo zakázat pro každý obchod jednotlivě v nastavení rozšíření.</p></details>
<details><summary><strong>Jak vygeneruji klíč služby pro každý obchod?</strong></summary><p>Klíč služby je automaticky vygenerován při instalaci a je jedinečný pro každý obchod. Není nutné ho generovat ručně.</p></details>
<details><summary><strong>Mohu znovu vygenerovat klíč služby pro každý obchod?</strong></summary><p>Ano, klíč služby můžete znovu vygenerovat pro každý obchod samostatně prostřednictvím nastavení rozšíření. Tímto způsobem můžete klíč obnovit nebo změnit podle potřeby.</p></details>
<details><summary><strong>Mohu použít vlastní Cron URL pro odesílání URL adres na služby IndexNow?</strong></summary><p>Ano, můžete si vybrat mezi Cron URL poskytnutým rozšířením nebo URL Cron stránky OpenCart pro odesílání URL adres do fronty. Obě možnosti fungují bez problémů.</p></details>
<details><summary><strong>Jaké jsou velikostní a URL limity pro sitemapu?</strong></summary><p>Soubor sitemap může mít až 50 MB a obsahovat až 50 000 URL adres. Ujistěte se, že vaše sitemap nepřekračuje tyto limity.</p></details>
<details><summary><strong>Jak mohu odeslat URL adresy na služby IndexNow?</strong></summary><p>URL adresy můžete odesílat na služby IndexNow importováním sitemap, nahráním souboru XML sitemap nebo ručním zadáním URL adresy sitemap. Kromě toho můžete odeslat jednotlivé URL adresy z fronty nebo odeslat všechny URL adresy najednou pro vybraný obchod.</p></details>
<details><summary><strong>Jak vymažu log odeslaných URL?</strong></summary><p>Log můžete vymazat na kartě Log. Log je vymazán bez chyb, kdykoli se rozhodnete jej vymazat.</p></details>';
$_['text_contact']                        = '<p>Pro další pomoc se prosím obraťte na náš tým podpory:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentace:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Dokumentace pro uživatele</a></li></ul>';
$_['text_log_no_results']                 = 'V tuto chvíli nejsou k dispozici žádné záznamy v logu.';
$_['text_queue_no_results']               = 'V tuto chvíli nejsou v čekárně žádné URL adresy.';
$_['text_categories']                     = 'Kategorie na vašem webu jsou přidávány, aktualizovány nebo mazány';
$_['text_products']                       = 'Produkty na vašem webu jsou přidávány, aktualizovány nebo mazány';
$_['text_manufacturers']                  = 'Výrobci na vašem webu jsou přidáváni, aktualizováni nebo mazáni';
$_['text_information']                    = 'Informační stránky na vašem webu jsou přidávány, aktualizovány nebo mazány';
$_['text_topics']                         = 'Témata článků na vašem webu jsou přidávána, aktualizována nebo mazána';
$_['text_articles']                       = 'Články na vašem webu jsou přidávány, aktualizovány nebo mazány';
$_['text_url_list_warning']               = 'URL adresy, které vložíte, budou ověřeny. Každá URL musí být správně naformátována s "http" nebo "https" a její hostitel musí odpovídat hostiteli obchodu: "%s". Maximálně 10 000 URL adres může být odesláno.';
$_['text_http_status_code']               = 'Analýza stavových kódů HTTP odpovědí od služeb IndexNow vám pomůže pochopit, zda byly vaše požadavky úspěšně zpracovány nebo narazily na problémy. Tyto kódy poskytují přehled o výsledcích indexování URL adres a možných chybách. Navštivte následující služby IndexNow pro více informací o jejich stavových kódech:<br><br><ul><li><a href="https://www.bing.com/indexnow/getstarted" target="_blank" rel="noopener noreferrer">Microsoft Bing Webmaster Tools</a></li><li><a href="https://searchadvisor.naver.com/guide/indexnow-request" target="_blank" rel="noopener noreferrer">Naver Search Advisor</a></li><li><a href="https://napoveda.seznam.cz/cz/fulltext-hledani-v-internetu/protokol-indexnow/odeslani-vice-stranek-jednim-pozadavkem/" target="_blank" rel="noopener noreferrer">Seznam.cz</a></li><li><a href="https://yandex.com/support/webmaster/indexnow/reference/post-url.html" target="_blank" rel="noopener noreferrer">Yandex Webmaster Tools</a></li></ul>';

// Column
$_['column_log_id']                       = 'ID logu';
$_['column_log_url']                      = 'URL';
$_['column_log_service_name']             = 'Název služby';
$_['column_log_status_code']              = 'Stavový kód';
$_['column_log_date_added']               = 'Datum přidání';
$_['column_queue_id']                     = 'ID fronty';
$_['column_queue_url']                    = 'URL';
$_['column_queue_date_added']             = 'Datum přidání';
$_['column_queue_action']                 = 'Akce';

// Tab
$_['tab_general']                         = 'Obecné';
$_['tab_manual_submit']                   = 'Ruční odeslání';
$_['tab_queue']                           = 'Čekárna';
$_['tab_log']                             = 'Log';
$_['tab_help_and_support']                = 'Nápověda a podpora';

// Entry
$_['entry_status']                        = 'Stav';
$_['entry_service_key']                   = 'Klíč služby';
$_['entry_service_key_location']          = 'URL klíče služby';
$_['entry_active_store']                  = 'Aktivní obchod';
$_['entry_notify_search_engines']         = 'Oznámit vyhledávačům';
$_['entry_url_list']                      = 'Seznam URL';
$_['entry_load_sitemap']                  = 'Načíst sitemapu';
$_['entry_cron_url']                      = 'Cron URL';

// Button
$_['button_change_key']                   = 'Změnit klíč';
$_['button_check_key']                    = 'Ověřit klíč';
$_['button_submit_url']                   = 'Odeslat URL';
$_['button_submit_queue']                 = 'Odeslat čekající URL';
$_['button_clear_queue']                  = 'Vymazat čekající URL';
$_['button_clear_log']                    = 'Vymazat log';
$_['button_submit_url_list']              = 'Odeslat seznam URL';
$_['button_clear_url_list']               = 'Vymazat seznam URL';
$_['button_upload_sitemap']               = 'Nahrát URL z mapy stránek';
$_['button_import_sitemap']               = 'Importovat URL z mapy stránek';
$_['button_copy']                         = 'Kopírovat URL';

// Help
$_['help_service_key']                    = 'API klíč IndexNow ověřuje vlastnictví webu a je automaticky generován. Změňte klíč, pokud dojde k jeho kompromitaci.';
$_['help_service_key_location']           = 'Klikněte na tlačítko Ověřit klíč, abyste ověřili, že je klíč přístupný vyhledávačům. To by mělo otevřít živou URL, kde je klíč umístěn.';
$_['help_url_list']                       = 'Zadejte seznam URL, každou na nový řádek (maximálně 10 000). Ujistěte se, že každá URL je správně naformátována s "http" nebo "https". Klikněte na "Odeslat seznam URL", aby byly URL odeslány do vybraných služeb IndexNow.';
$_['help_load_sitemap']                   = 'Můžete buď poskytnout URL mapy stránek, nebo nahrát soubor sitemap.xml (maximálně 50 MB nebo 50 000 URL). URL z mapy stránek budou přidány do seznamu a odeslány do vybrané služby IndexNow. O dokončení procesu budete informováni.';
$_['help_cron_url']                       = 'Přidejte tuto URL do cron tabulky vašeho hostingového serveru. Bude automaticky odesílat <strong>všechny čekající URL</strong> ze <strong>všech nakonfigurovaných obchodů</strong> do <strong>vybraných koncových bodů služeb IndexNow</strong> v naplánovaných intervalech. Alternativně můžete použít <a href="%s">OpenCart 4 Cron Jobs</a> URL pro odesílání URL do koncových bodů služby IndexNow.';

// Error
$_['error_permission']                    = 'Upozornění: Nemáte oprávnění upravovat IndexNow feed!';
$_['error_generate_service_key']          = 'Upozornění: Nelze vygenerovat nový klíč služby!';
$_['error_remove_queue']                  = 'Upozornění: Nelze odstranit čekající URL!';
$_['error_not_configured']                = 'Upozornění: Rozšíření IndexNow není nakonfigurováno!';
$_['error_filetype']                      = 'Upozornění: Neplatný typ souboru. Nahrajte platný soubor.';
$_['error_upload']                        = 'Upozornění: Soubor nelze nahrát.';
$_['error_download']                      = 'Upozornění: Nelze stáhnout soubor mapy stránek "%s"';
$_['error_invalid_url']                   = 'Upozornění: URL je neplatná. Poskytněte platnou URL.';
$_['error_invalid_url_host']              = 'Upozornění: Hostitel URL je neplatný. Hostitel URL musí být stejný jako hostitel aktuální URL.';
$_['error_no_services_enabled']           = 'Upozornění: Žádné služby nejsou povoleny. Aktivujte alespoň jednu službu.';
$_['error_submit_url_list_empty']         = 'Upozornění: Odeslaný seznam URL je prázdný.';
$_['error_submit_url_list_invalid']       = 'Upozornění: Odeslaný seznam URL obsahuje neplatné URL nebo URL s hostitelem, který neodpovídá aktivnímu obchodu.';
$_['error_empty_queue']                   = 'Upozornění: Fronta je prázdná.';
$_['error_file_upload_limit']             = 'Upozornění: Velikost souboru přesahuje limit 50 MB. Nahrajte menší soubor.';
$_['error_service_key']                   = 'Klíč služby je neplatný. Poskytněte platný klíč služby.';
