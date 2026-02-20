<?php
// Heading
$_['heading_title']                       = 'Playful Sparkle - IndexNow';
$_['heading_contact']                     = 'Contactar soporte';
$_['heading_v3_score_threshold']          = 'Umbral de puntuación';
$_['entry_indexnow_services']                    = 'Servicios de IndexNow';

// Text
$_['text_extension']                      = 'Extensiones';
$_['text_success']                        = 'Éxito: ¡Has modificado el feed de IndexNow!';
$_['text_success_generate_service_key']   = 'Éxito: ¡Se ha generado correctamente una nueva clave de servicio!';
$_['text_success_remove_queue']           = 'Éxito: ¡La URL en cola se ha eliminado correctamente!';
$_['text_success_clear_log']              = 'Éxito: ¡El registro se ha borrado correctamente!';
$_['text_success_clear_queue']            = 'Éxito: ¡La cola se ha borrado correctamente!';
$_['text_success_submit_queue']           = 'Éxito: ¡Las URLs en cola se han enviado correctamente!';
$_['text_success_submit_url_list']        = 'Éxito: ¡La lista de URLs se ha enviado correctamente!';
$_['text_edit']                           = 'Editar IndexNow';
$_['text_contact']                        = '<p>Para obtener más ayuda, por favor contacta a nuestro equipo de soporte:</p><ul><li><strong>Contacto:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentación:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentación para el Usuario</a></li></ul>';
$_['text_log_no_results']                 = 'No hay entradas en el registro disponibles en este momento.';
$_['text_queue_no_results']               = 'No hay URLs en la cola actualmente.';
$_['text_categories']                     = 'Las categorías de su sitio han sido añadidas, actualizadas o eliminadas';
$_['text_products']                       = 'Los productos en su sitio han sido añadidos, actualizados o eliminados';
$_['text_manufacturers']                  = 'Los fabricantes en su sitio han sido añadidos, actualizados o eliminados';
$_['text_information']                    = 'Las páginas de información en su sitio han sido añadidas, actualizadas o eliminadas';
$_['text_topics']                         = 'Los temas de artículos en su sitio han sido añadidos, actualizados o eliminados';
$_['text_articles']                       = 'Los artículos en su sitio han sido añadidos, actualizados o eliminados';
$_['text_url_list_warning']               = 'Las URLs que pegue serán validadas. Cada URL debe estar correctamente formateada con "http" o "https", y su host debe coincidir con el host de la tienda: "%s". Se puede enviar un máximo de 10,000 URLs.';
$_['text_http_status_code']               = 'El análisis de los códigos de estado de respuesta HTTP de los servicios de IndexNow le ayuda a entender si sus solicitudes fueron procesadas con éxito o si encontraron problemas. Estos códigos proporcionan información sobre los resultados de indexación de URLs y posibles errores. Visite los siguientes servicios de IndexNow para obtener más información sobre sus códigos de estado HTTP:<br><br><ul><li><a href="https://www.bing.com/indexnow/getstarted" target="_blank" rel="noopener noreferrer">Microsoft Bing Webmaster Tools</a></li><li><a href="https://searchadvisor.naver.com/guide/indexnow-request" target="_blank" rel="noopener noreferrer">Naver Search Advisor</a></li><li><a href="https://napoveda.seznam.cz/cz/fulltext-hledani-v-internetu/protokol-indexnow/odeslani-vice-stranek-jednim-pozadavkem/" target="_blank" rel="noopener noreferrer">Seznam.cz</a></li><li><a href="https://yandex.com/support/webmaster/indexnow/reference/post-url.html" target="_blank" rel="noopener noreferrer">Yandex Webmaster Tools</a></li></ul>';

// Column
$_['column_log_id']                       = 'ID de registro';
$_['column_log_url']                      = 'URL';
$_['column_log_service_name']             = 'Nombre del servicio';
$_['column_log_status_code']              = 'Código de estado';
$_['column_log_date_added']               = 'Fecha de adición';
$_['column_queue_id']                     = 'ID de la cola';
$_['column_queue_url']                    = 'URL';
$_['column_queue_date_added']             = 'Fecha de adición';
$_['column_queue_action']                 = 'Acción';

// Tab
$_['tab_general']                         = 'General';
$_['tab_manual_submit']                   = 'Envío manual';
$_['tab_queue']                           = 'Cola';
$_['tab_log']                             = 'Registro';
$_['tab_help_and_support']                = 'Ayuda y soporte';

// Entry
$_['entry_status']                        = 'Estado';
$_['entry_service_key']                   = 'Clave del servicio';
$_['entry_service_key_location']          = 'URL de la clave del servicio';
$_['entry_active_store']                  = 'Tienda activa';
$_['entry_notify_search_engines']         = 'Notificar a los motores de búsqueda';
$_['entry_url_list']                      = 'Lista de URLs';
$_['entry_load_sitemap']                  = 'Cargar sitemap';
$_['entry_cron_url']                      = 'URL de Cron';

// Button
$_['button_change_key']                   = 'Cambiar clave';
$_['button_check_key']                    = 'Verificar clave';
$_['button_submit_url']                   = 'Enviar URL';
$_['button_submit_queue']                 = 'Enviar URLs en la cola';
$_['button_clear_queue']                  = 'Borrar URLs en la cola';
$_['button_clear_log']                    = 'Borrar registro';
$_['button_submit_url_list']              = 'Enviar lista de URLs';
$_['button_clear_url_list']               = 'Borrar lista de URLs';
$_['button_upload_sitemap']               = 'Subir URLs del sitemap';
$_['button_import_sitemap']               = 'Importar URLs del sitemap';
$_['button_copy']                         = 'Copiar URL';

// Help
$_['help_service_key']                    = 'La clave API de IndexNow verifica la propiedad del sitio y se genera automáticamente. Cambie la clave si se ve comprometida.';
$_['help_service_key_location']           = 'Haga clic en el botón "Comprobar clave" para asegurarse de que la clave sea accesible para los motores de búsqueda. Esto debería abrir la URL en vivo donde se encuentra la clave.';
$_['help_url_list']                       = 'Ingrese una lista de URLs, una por línea (hasta 10,000). Asegúrese de que cada URL esté correctamente formateada con "http" o "https". Haga clic en "Enviar lista de URLs" para enviar las URLs a los servicios de IndexNow seleccionados.';
$_['help_load_sitemap']                   = 'Puede proporcionar una URL de mapa del sitio o cargar un archivo sitemap.xml (hasta 50MB o 50,000 URLs). Las URLs del mapa del sitio se agregarán a la lista y se enviarán al servicio IndexNow seleccionado. Se le notificará una vez que el proceso se haya completado.';
$_['help_cron_url']                       = 'Agregue esta URL a la tabla cron de su servidor de hosting. Esto enviará automáticamente <strong>todas las URLs en cola</strong> de <strong>todos los sitios configurados</strong> a los <strong>puntos finales del servicio IndexNow seleccionados</strong> a intervalos programados. Alternativamente, puede usar la URL de <a href="%s">OpenCart 4 Cron Jobs</a> para enviar las URLs a los puntos finales del servicio IndexNow.';

// Error
$_['error_permission']                    = 'Advertencia: ¡No tiene permiso para modificar la extensión IndexNow!';
$_['error_generate_service_key']          = 'Advertencia: ¡No se puede generar una nueva clave de servicio!';
$_['error_remove_queue']                  = 'Advertencia: ¡No se pueden eliminar las URLs en cola!';
$_['error_not_configured']                = 'Advertencia: ¡La extensión IndexNow no está configurada!';
$_['error_filetype']                      = 'Advertencia: Tipo de archivo no válido. Por favor, cargue un archivo válido.';
$_['error_upload']                        = 'Advertencia: El archivo no se pudo cargar.';
$_['error_download']                      = 'Advertencia: No se pudo descargar el archivo del mapa del sitio "%s"';
$_['error_invalid_url']                   = 'Advertencia: La URL no es válida. Proporcione una URL válida.';
$_['error_invalid_url_host']              = 'Advertencia: El host de la URL no es válido. El host de la URL debe coincidir con el host actual de la URL.';
$_['error_no_services_enabled']           = 'Advertencia: No hay servicios habilitados. Habilite al menos un servicio.';
$_['error_submit_url_list_empty']         = 'Advertencia: La lista de URLs enviada está vacía.';
$_['error_submit_url_list_invalid']       = 'Advertencia: La lista de URLs enviada contiene URLs no válidas o URLs cuyo host no coincide con el host del sitio activo.';
$_['error_empty_queue']                   = 'Advertencia: La cola está vacía.';
$_['error_file_upload_limit']             = 'Advertencia: El tamaño del archivo excede el límite de 50MB. Cargue un archivo más pequeño.';
$_['error_service_key']                   = 'La clave de servicio no es válida. Por favor, proporcione una clave de servicio válida.';
$_['error_service_key_location']          = 'La ubicación de la clave de servicio no es válida. Por favor, proporcione una ubicación válida de la clave de servicio.';
