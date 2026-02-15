<?php
// Heading
$_['heading_title']                       = 'Playful Sparkle - IndexNow';
$_['heading_getting_started']             = 'Démarrage';
$_['heading_setup']                       = 'Configuration de IndexNow';
$_['heading_troubleshot']                 = 'Dépannage courant';
$_['heading_faq']                         = 'FAQ';
$_['heading_contact']                     = 'Contacter le support';
$_['entry_indexnow_services']                    = 'Services IndexNow';

// Text
$_['text_extension']                      = 'Extensions';
$_['text_success']                        = 'Succès : Vous avez modifié l\'extension IndexNow !';
$_['text_success_generate_service_key']   = 'Succès : La clé de service a été générée avec succès !';
$_['text_success_remove_queue']           = 'Succès : L\'URL mise en file d\'attente a été supprimée avec succès !';
$_['text_success_clear_log']              = 'Succès : Le journal a été effacé avec succès !';
$_['text_success_clear_queue']            = 'Succès : La file d\'attente a été effacée avec succès !';
$_['text_success_submit_queue']           = 'Succès : Les URL mises en file d\'attente ont été soumises avec succès !';
$_['text_success_submit_url_list']        = 'Succès : La liste des URL a été soumise avec succès !';
$_['text_edit']                           = 'Modifier IndexNow';
$_['text_getting_started']                = '<p><strong>Vue d\'ensemble :</strong> L\'extension <strong>Playful Sparkle - IndexNow</strong> pour OpenCart 4.x+ permet à votre magasin de notifier automatiquement les moteurs de recherche tels que Bing et Yandex lorsque le contenu de votre magasin est ajouté, mis à jour ou supprimé. Cela garantit un indexage plus rapide des modifications, améliorant ainsi la visibilité et les performances de recherche de votre magasin. Elle propose des fonctionnalités comme la soumission manuelle d\'URL, la soumission d\'URL en file d\'attente, des paramètres personnalisables et le support de Cron.</p><p><strong>Exigences :</strong> OpenCart 4.x+, PHP 7.4+ ou supérieur.</p>';
$_['text_setup']                          = '<ul><li><strong>Étape 1 : Installer l\'extension</strong> - Téléchargez et installez l\'extension dans votre panneau d\'administration OpenCart. Après l\'installation, une clé de service est générée automatiquement pour chaque boutique.</li><li><strong>Étape 2 : Actualiser les modifications</strong> - Allez dans <strong>Extensions &gt; Modifications</strong> et cliquez sur <strong>Actualiser</strong> pour reconstruire le cache des modifications.</li><li><strong>Étape 3 : Activer l\'extension par boutique</strong> - Ouvrez les paramètres de l\'extension et activez-la pour chaque boutique où vous souhaitez utiliser IndexNow.</li><li><strong>Étape 4 : Sélectionner un service IndexNow</strong> - Sélectionnez le point de terminaison IndexNow auquel vous souhaitez soumettre vos données.</li><li><strong>Étape 5 : Configurer la notification automatique</strong> - Activez les options de notification automatique pour soumettre des URL lorsque des catégories, produits, fabricants ou articles sont ajoutés, mis à jour ou supprimés.</li><li><strong>Étape 6 : Régénérer la clé de service (facultatif)</strong> - Si nécessaire, vous pouvez régénérer la clé de service séparément pour chaque boutique dans les paramètres de l\'extension.</li><li><strong>Étape 7 : Soumettre des URL</strong> - Soumettez des URL en traitant la file d\'attente, en fondant votre sitemap XML, en téléchargeant un fichier sitemap ou en saisissant manuellement des URL.</li><li><strong>Étape 8 : Surveiller les journaux</strong> - Après la soumission, consultez l\'onglet <strong>Journal</strong> pour voir les résultats. Vous pouvez également effacer le journal si nécessaire.</li></ul>';
$_['text_troubleshot']                    = '<details><summary><strong>La liste des URL soumises contient des URL invalides ou des URL dont l\'hôte ne correspond pas au magasin actif </strong></summary> Assurez-vous que le champ de texte de la liste des URL contient des URL valides et que l\'hôte (domaine) des URL correspond au domaine du magasin actif.</details>
<details><summary><strong>Impossible de télécharger le fichier sitemap xyz </strong></summary> Assurez-vous que l\'URL du sitemap est saisie correctement.</details>
<details><summary><strong>Type de fichier invalide. Veuillez télécharger un fichier valide </strong></summary> Assurez-vous que vous téléchargez un fichier sitemap XML valide.</details>
<details><summary><strong>La liste des files d\'attente n\'est pas remplie </strong></summary> Assurez-vous que les options de notification aux moteurs de recherche sont activées. Ces options permettent au système de mettre en file d\'attente les URL des catégories, produits, fabricants ou articles dès qu\'ils sont ajoutés, mis à jour ou supprimés.</details>
<details><summary><strong>Aucun service n\'est activé. Veuillez activer au moins un service </strong></summary> Vous devez activer au moins un service IndexNow avant de cliquer sur le bouton "Soumettre les URL en file d\'attente".</details>';
$_['text_faq']                            = '<details><summary><strong>Comment activer ou désactiver l\'extension pour chaque magasin ?</strong></summary><p>Vous pouvez activer ou désactiver l\'extension pour chaque magasin séparément via les paramètres de l\'extension.</p></details>
<details><summary><strong>Puis-je activer ou désactiver les services IndexNow pour chaque magasin ?</strong></summary><p>Oui, vous pouvez activer ou désactiver les services IndexNow pour chaque magasin individuellement dans les paramètres de l\'extension.</p></details>
<details><summary><strong>Comment générer une clé de service pour chaque magasin ?</strong></summary><p>La clé de service est générée automatiquement lors de l\'installation et est unique pour chaque magasin. Vous n\'avez pas besoin de la générer manuellement.</p></details>
<details><summary><strong>Puis-je régénérer la clé de service pour chaque magasin ?</strong></summary><p>Oui, vous pouvez régénérer la clé de service pour chaque magasin séparément via les paramètres de l\'extension. Cela vous permet de rafraîchir ou de changer la clé si nécessaire.</p></details>
<details><summary><strong>Puis-je utiliser une URL Cron personnalisée pour envoyer des URL aux services IndexNow ?</strong></summary><p>Oui, vous pouvez choisir d\'utiliser soit l\'URL Cron fournie par l\'extension, soit l\'URL de la page Cron d\'OpenCart pour envoyer les URL en file d\'attente. Les deux options fonctionnent sans problème.</p></details>
<details><summary><strong>Quelles sont les limites de taille et d\'URL pour le sitemap ?</strong></summary><p>Le fichier sitemap peut peser jusqu\'à 50 Mo et contenir jusqu\'à 50 000 URL. Assurez-vous que votre sitemap ne dépasse pas ces limites.</p></details>
<details><summary><strong>Comment soumettre des URL aux services IndexNow ?</strong></summary><p>Vous pouvez soumettre des URL aux services IndexNow en important un sitemap, en téléchargeant un fichier sitemap XML ou en saisissant manuellement l\'URL du sitemap. De plus, vous pouvez soumettre des URL individuelles depuis la file d\'attente ou envoyer toutes les URL en file d\'attente en une seule fois pour le magasin sélectionné.</p></details>
<details><summary><strong>Comment effacer le journal de soumission des URL ?</strong></summary><p>Vous pouvez effacer le journal dans l\'onglet Journal. Le journal est effacé sans erreur chaque fois que vous choisissez de le supprimer.</p></details>';
$_['text_contact']                        = '<p>For further assistance, please reach out to our support team:</p><ul><li><strong>Contact:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentation:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">User Documentation</a></li></ul>';
$_['text_log_no_results']                 = 'Aucune entrée dans le journal disponible pour le moment.';
$_['text_queue_no_results']               = 'Aucune URL en file d\'attente actuellement.';
$_['text_categories']                     = 'Les catégories sur votre site sont ajoutées, mises à jour ou supprimées.';
$_['text_products']                       = 'Les produits sur votre site sont ajoutés, mis à jour ou supprimés.';
$_['text_manufacturers']                  = 'Les fabricants sur votre site sont ajoutés, mis à jour ou supprimés.';
$_['text_information']                    = 'Les pages d\'information sur votre site sont ajoutées, mises à jour ou supprimées.';
$_['text_topics']                         = 'Les sujets d\'articles sur votre site sont ajoutés, mis à jour ou supprimés.';
$_['text_articles']                       = 'Les articles sur votre site sont ajoutés, mis à jour ou supprimés.';
$_['text_url_list_warning']               = 'Les URLs que vous collez seront validées. Chaque URL doit être correctement formatée avec "http" ou "https", et son hôte doit correspondre à l\'hôte du magasin : "%s". Un maximum de 10 000 URLs peut être soumis.';
$_['text_http_status_code']               = 'L\'analyse des codes de réponse HTTP des services IndexNow vous aide à comprendre si vos demandes ont été traitées avec succès ou ont rencontré des problèmes. Ces codes fournissent des informations sur les résultats d\'indexation des URL et les erreurs potentielles. Visitez les services IndexNow suivants pour en savoir plus sur leurs codes de statut HTTP :<br><br><ul><li><a href="https://www.bing.com/indexnow/getstarted" target="_blank" rel="noopener noreferrer">Microsoft Bing Webmaster Tools</a></li><li><a href="https://searchadvisor.naver.com/guide/indexnow-request" target="_blank" rel="noopener noreferrer">Naver Search Advisor</a></li><li><a href="https://napoveda.seznam.cz/cz/fulltext-hledani-v-internetu/protokol-indexnow/odeslani-vice-stranek-jednim-pozadavkem/" target="_blank" rel="noopener noreferrer">Seznam.cz</a></li><li><a href="https://yandex.com/support/webmaster/indexnow/reference/post-url.html" target="_blank" rel="noopener noreferrer">Yandex Webmaster Tools</a></li></ul>';

// Column
$_['column_log_id']                       = 'ID du journal';
$_['column_log_url']                      = 'URL';
$_['column_log_service_name']             = 'Nom du service';
$_['column_log_status_code']              = 'Code de statut';
$_['column_log_date_added']               = 'Date d\'ajout';
$_['column_queue_id']                     = 'ID de la file d\'attente';
$_['column_queue_url']                    = 'URL';
$_['column_queue_date_added']             = 'Date d\'ajout';
$_['column_queue_action']                 = 'Action';

// Tab
$_['tab_general']                         = 'Général';
$_['tab_manual_submit']                   = 'Soumission manuelle';
$_['tab_queue']                           = 'File d\'attente';
$_['tab_log']                             = 'Journal';
$_['tab_help_and_support']                = 'Aide &amp; Support';

// Entry
$_['entry_status']                        = 'Statut';
$_['entry_service_key']                   = 'Clé du service';
$_['entry_service_key_location']          = 'URL de la clé du service';
$_['entry_active_store']                  = 'Magasin actif';
$_['entry_notify_search_engines']         = 'Notifier les moteurs de recherche';
$_['entry_url_list']                      = 'Liste des URL';
$_['entry_load_sitemap']                  = 'Charger le sitemap';
$_['entry_cron_url']                      = 'URL Cron';

// Button
$_['button_change_key']                   = 'Changer la clé';
$_['button_check_key']                    = 'Vérifier la clé';
$_['button_submit_url']                   = 'Soumettre l\'URL';
$_['button_submit_queue']                 = 'Soumettre les URLs en file d\'attente';
$_['button_clear_queue']                  = 'Effacer la file d\'attente';
$_['button_clear_log']                    = 'Effacer le journal';
$_['button_submit_url_list']              = 'Soumettre la liste des URL';
$_['button_clear_url_list']               = 'Effacer la liste des URL';
$_['button_upload_sitemap']               = 'Télécharger les URLs du sitemap';
$_['button_import_sitemap']               = 'Importer les URLs du sitemap';
$_['button_copy']                         = 'Copier l\'URL';

// Help
$_['help_service_key']                    = 'La clé API IndexNow vérifie la propriété du site et est générée automatiquement. Changez la clé si elle devient compromise.';
$_['help_service_key_location']           = 'Cliquez sur le bouton "Vérifier la clé" pour vous assurer que la clé est accessible aux moteurs de recherche. Cela doit ouvrir l\'URL en direct où la clé est située.';
$_['help_url_list']                       = 'Entrez une liste d\'URLs, une par ligne (jusqu\'à 10 000). Assurez-vous que chaque URL est correctement formatée avec "http" ou "https". Cliquez sur "Soumettre la liste d\'URLs" pour envoyer les URLs aux services IndexNow sélectionnés.';
$_['help_load_sitemap']                   = 'Vous pouvez soit fournir une URL de sitemap, soit télécharger un fichier sitemap.xml (jusqu\'à 50 Mo ou 50 000 URLs). Les URLs du sitemap seront ajoutées à la liste et envoyées au service IndexNow sélectionné. Vous serez notifié une fois le processus terminé.';
$_['help_cron_url']                       = 'Ajoutez cette URL à la table cron de votre serveur d\'hébergement. Cela enverra automatiquement <strong>toutes les URLs en file d\'attente</strong> de <strong>tous les magasins configurés</strong> aux <strong>points de terminaison du service IndexNow sélectionné</strong> à intervalles programmés. Vous pouvez également utiliser l\'URL <a href="%s">OpenCart 4 Cron Jobs</a> à la place pour soumettre des URLs aux points de terminaison du service IndexNow.';

// Error
$_['error_permission']                    = 'Avertissement : Vous n\'avez pas la permission de modifier l\'extension IndexNow !';
$_['error_generate_service_key']          = 'Avertissement : Impossible de générer une nouvelle clé de service !';
$_['error_remove_queue']                  = 'Avertissement : Impossible de supprimer les URLs en file d\'attente !';
$_['error_not_configured']                = 'Avertissement : L\'extension IndexNow n\'est pas configurée !';
$_['error_filetype']                      = 'Avertissement : Type de fichier invalide. Veuillez télécharger un fichier valide.';
$_['error_upload']                        = 'Avertissement : Le fichier n\'a pas pu être téléchargé.';
$_['error_download']                      = 'Avertissement : Impossible de télécharger le fichier sitemap "%s"';
$_['error_invalid_url']                   = 'Avertissement : L\'URL est invalide. Veuillez fournir une URL valide.';
$_['error_invalid_url_host']              = 'Avertissement : L\'hôte de l\'URL est invalide. L\'hôte de l\'URL doit être le même que l\'hôte de l\'URL actuelle.';
$_['error_no_services_enabled']           = 'Avertissement : Aucun service n\'est activé. Veuillez activer au moins un service.';
$_['error_submit_url_list_empty']         = 'Avertissement : La liste d\'URLs soumise est vide.';
$_['error_submit_url_list_invalid']       = 'Avertissement : La liste d\'URLs soumise contient des URLs invalides ou des URLs dont l\'hôte ne correspond pas à l\'hôte du magasin actif.';
$_['error_empty_queue']                   = 'Avertissement : La file d\'attente est vide.';
$_['error_file_upload_limit']             = 'Avertissement : La taille du fichier dépasse la limite de 50 Mo. Veuillez télécharger un fichier plus petit.';
$_['error_service_key']                   = 'La clé de service est invalide. Veuillez fournir une clé de service valide.';
$_['error_service_key_location']          = 'L’emplacement de la clé de service est invalide. Veuillez fournir un emplacement valide pour la clé de service.';
