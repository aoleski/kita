<?php

/*
 * German Language File / Deutsche Sprachdatei
 * 
 * Date:			Januar 2013
 * Revision:		1.0
 * Version:			GetSimple 3.2
 * Traductors: 	    Matthias Winter
 *
 * @package GetSimple
 * @subpackage Language
 */


$i18n = array(

/* 
 * install.php
*/

    "PHPVER_ERROR" => "<b>Installation kann nicht fortgesetzt werden:</b> PHP 5.1.3 oder höher wird benötigt, Sie haben"
  , "SIMPLEXML_ERROR" => "<b>Installation kann nicht fortgesetzt werden:</b> <em>SimpleXML</em> ist nicht installiert"
  , "CURL_WARNING" => "<b>Warnung:</b> <em>cURL</em> ist nicht installiert"
  , "TZ_WARNING" => "<b>Warnung:</b> <em>date_default_timezone_set</em>ist nicht konfiguriert."
  , "WEBSITENAME_ERROR" => "<b>Fehler:</b> Es gibt ein Problem mit dem Titel Ihrer Website"
  , "WEBSITEURL_ERROR" => "<b>Fehler:</b> Es gibt ein Problem mit der URL Ihrer Website"
  , "USERNAME_ERROR" => "<b>Fehler:</b> Benutzername ist nicht vereinbart."
  , "EMAIL_ERROR" => "<b>Fehler:</b> Es gibt ein Problem mit Ihrer E-Mail Adresse"
  , "CHMOD_ERROR" => "<b>Installation kann nicht fortgesetzt werden:</b> Die Konfigurationsdatei kann nicht geschrieben werden. Wenden Sie <em>CHMOD 755</em> (evtl. CHMOD 777)  auf die Ordner /data/ und /backups/ und deren Unterordner an und versuchen Sie es erneut"
  , "EMAIL_COMPLETE" => "Installation vollständig"
  , "EMAIL_USERNAME" => "Ihr Benutzername lautet"
  , "EMAIL_PASSWORD" => "Ihr neues Passwort lautet"
  , "EMAIL_LOGIN" => "Melden Sie sich hier an"
  , "EMAIL_THANKYOU" => "Danke für den Einsatz von"
  , "NOTE_REGISTRATION" => "Ihre Zugangsdaten wurden versandt an"
  , "NOTE_REGERROR" => "<b>Fehler:</b> Ihre Zugangsdaten konnten nicht per E-Mail versandt werden. Notieren Sie sich daher folgendes Passwort"
  , "NOTE_USERNAME" => "Ihr Benutzername lautet"
  , "NOTE_PASSWORD" => "Ihr Passwort lautet"
  , "INSTALLATION" => "Installation"
  , "LABEL_WEBSITE" => "Website-Name"
  , "LABEL_BASEURL" => "Website-Basis-URL"
  , "LABEL_SUGGESTION" => "Vorgeschlagener Wert"
  , "LABEL_USERNAME" => "Benutzername"
  , "LABEL_EMAIL" => "E-Mail-Adresse"
  , "LABEL_INSTALL" => "Installation starten"
  , "SELECT_LANGUAGE" => "Wählen Sie die gewünschte Sprache aus"
  , "CONTINUE_SETUP" => "Mit Setup fortfahren"
  , "DOWNLOAD_LANG" => "Sprachdateien herunterladen"

/* 
 * pages.php
*/

  , "MENUITEM_SUBTITLE" => "Menü-Eintrag"
  , "HOMEPAGE_SUBTITLE" => "Startseite"
  , "PRIVATE_SUBTITLE" => "Privat"
  , "EDITPAGE_TITLE" => "Seite editieren"
  , "VIEWPAGE_TITLE" => "Seite anzeigen"
  , "DELETEPAGE_TITLE" => "Seite löschen"
  , "PAGE_MANAGEMENT" => "Seitenverwaltung"
  , "TOGGLE_STATUS" => "<em>S</em>tatus ein-/ausblenden"
  , "TOTAL_PAGES" => "Seiten insgesamt"
  , "ALL_PAGES" => "Seiten"

/* 
 * edit.php
*/

  , "PAGE_NOTEXIST" => "Die gewünschte Seite existiert nicht"
  , "BTN_SAVEPAGE" => "Seite speichern"
  , "BTN_SAVEUPDATES" => "Änderungen speichern"
  , "DEFAULT_TEMPLATE" => "Standardvorlage"
  , "NONE" => "Leer"
  , "PAGE" => "Seite"
  , "NEW_PAGE" => "Neue Seite"
  , "PAGE_EDIT_MODE" => "Seitenbearbeitungsmodus"
  , "CREATE_NEW_PAGE" => "Neue Seite hinzufügen"
  , "VIEW" => "<em>V</em>orschau"
  , "PAGE_OPTIONS" => "<em>O</em>ptionen"
  , "SLUG_URL" => "Spezielle URL (slug)"
  , "TAG_KEYWORDS" => "Schlüsselworte"
  , "PARENT_PAGE" => "übergeordnete Seite"
  , "TEMPLATE" => "Seiten-Vorlage"
  , "KEEP_PRIVATE" => "Sichtbarkeit der Seite"
  , "ADD_TO_MENU" => "Diese Seite im Menü anzeigen"
  , "PRIORITY" => "Priorität"
  , "MENU_TEXT" => "Menü-Text"
  , "LABEL_PAGEBODY" => "Seiteninhalt"
  , "CANCEL" => "Abbrechen"
  , "BACKUP_AVAILABLE" => "Sicherung verfügbar"
  , "MAX_FILE_SIZE" => "Maximale Dateigröße"
  , "LAST_SAVED" => "Zuletzt gespeichert von %s am"
  , "FILE_UPLOAD" => "Datei hochladen"
  , "OR" => "oder"
  , "SAVE_AND_CLOSE" => "Speichern und Schließen"

/* 
 * upload.php
*/

  , "ERROR_UPLOAD" => "Die Datei konnte nicht hochgeladen werden"
  , "FILE_SUCCESS_MSG" => "Es hat funktioniert! Die Datei wurde gespeichert unter"
  , "FILE_MANAGEMENT" => "Dateiverwaltung"
  , "UPLOADED_FILES" => "Hochgeladene Dateien"
  , "SHOW_ALL" => "Alle anzeigen"
  , "VIEW_FILE" => "Datei anzeigen"
  , "DELETE_FILE" => "Datei löschen"
  , "TOTAL_FILES" => "Dateien und Ordner"

/* 
 * logout.php
*/

  , "MSG_LOGGEDOUT" => "Sie sind nun abgemeldet."

/* 
 * index.php
*/

  , "LOGIN" => "Login"
  , "USERNAME" => "Benutzername"
  , "PASSWORD" => "Passwort"
  , "FORGOT_PWD" => "Haben Sie das Passwort vergessen?"
  , "CONTROL_PANEL" => "Admin-Bereich"

/* 
 * navigation.php
*/

  , "CURRENT_MENU" => "Aktuelles Menü"
  , "NO_MENU_PAGES" => "Es gibt noch keine Seiten, die im Hauptmenü angezeigt werden sollen"

/* 
 * theme-edit.php
*/

  , "TEMPLATE_FILE" => "Die Vorlage-Datei <b>%s</b> wurde erfolgreich aktualisiert"
  , "THEME_MANAGEMENT" => "Vorlagen-Management"
  , "EDIT_THEME" => "Vorlage bearbeiten"
  , "EDITING_FILE" => "Datei bearbeiten"
  , "BTN_SAVECHANGES" => "Änderungen speichern"
  , "EDIT" => "bearbeiten"

/* 
 * support.php
*/

  , "SETTINGS_UPDATED" => "Die Einstellungen wurden aktualisiert"
  , "UNDO" => "Rückgängig machen"
  , "SUPPORT" => "Support"
  , "SETTINGS" => "Einstellungen"
  , "ERROR" => "Fehler"
  , "BTN_SAVESETTINGS" => "Einstellungen speichern"
  , "VIEW_FAILED_LOGIN" => "Anzahl der fehlgeschlagenen Anmeldeversuche anzeigen"

/* 
 * log.php
*/

  , "MSG_HAS_BEEN_CLR" => "wurde gelöscht"
  , "LOGS" => "Log-Dateien"
  , "VIEWING" => "Anzeigen"
  , "LOG_FILE" => "Log-Datei"
  , "CLEAR_ALL_DATA" => "Lösche alle Daten von"
  , "CLEAR_THIS_LOG" => "<em>D</em>iese Logdatei löschen"
  , "LOG_FILE_ENTRY" => "Eintrag in der Log-Datei"
  , "THIS_COMPUTER" => "Dieser Computer"

/* 
 * backup-edit.php
*/

  , "BAK_MANAGEMENT" => "Backup-Verwaltung"
  , "ASK_CANCEL" => "<em>a</em>bbrechen" // "a" ist Befehlstaste
  , "ASK_RESTORE" => "<em>w</em>iederherstellen" // "w" ist Befehlstaste
  , "ASK_DELETE" => "<em>l</em>öschen" // "l" ist Befehlstaste
  , "BACKUP_OF" => "Sicherung von"
  , "PAGE_TITLE" => "Seitentitel"
  , "YES" => "Ja"
  , "NO" => "Nein"
  , "DATE" => "Datum"
  , "PERMS" => "Zugriffsrechte"

/* 
 * components.php
*/

  , "COMPONENTS" => "Komponenten"
  , "DELETE_COMPONENT" => "Komponente löschen"
  , "ADD_COMPONENT" => "Komponente hinzufügen"
  , "SAVE_COMPONENTS" => "Komponenten speichern"
  , "EDIT" => "Bearbeiten"

/* 
 * sitemap.php
*/

  , "SITEMAP_CREATED" => "Die Sitemap wurde erstellt! Dabei wurden auch 4 Suchmaschinen benachrichtigt"
  , "SITEMAP_ERRORPING" => "Die Sitemap wurde erstellt, jedoch trat ein Fehler beim Benachrichtigen der Suchmaschinen auf"
  , "SITEMAP_ERROR" => "Die Sitemap konnte nicht erstellt werden"
  , "SITEMAP_WAIT" => "<b>Bitte warten:</b> Die Sitemap wird gerade erstellt"

/* 
 * theme.php
*/

  , "THEME_CHANGED" => "Ihre Vorlage wurde erfolgreich geändert"
  , "CHOOSE_THEME" => "Wählen Sie die gewünschte Vorlage aus"
  , "ACTIVATE_THEME" => "Vorlage aktivieren"
  , "THEME_SCREENSHOT" => "Screenshot der Vorlage"
  , "THEME_PATH" => "Pfad der aktuellen Vorlage"

/* 
 * resetpassword.php
*/

  , "RESET_PASSWORD" => "Passwort zurücksetzen"
  , "YOUR_NEW" => "Ihr neues"
  , "PASSWORD_IS" => "Passwort lautet"
  , "ATTEMPT" => "Versuch"
  , "MSG_PLEASE_EMAIL" => "Bitte geben Sie den registrierten Benutzernamen ein. Nach dem Absenden wird eine Email mit dem neu erstellten Passwort an die Email-Adresse gesandt."
  , "SEND_NEW_PWD" => "Neues Passwort anfordern"

/* 
 * settings.php
*/

  , "GENERAL_SETTINGS" => "Allgemeine Einstellungen"
  , "WEBSITE_SETTINGS" => "Website-Einstellungen"
  , "LOCAL_TIMEZONE" => "Lokale Zeitzone"
  , "LANGUAGE" => "Sprache"
  , "USE_FANCY_URLS" => "<b>Nutze freundliche URLs</b> - <b style=\"font-weight:100\">Erfordert <code>mod_rewrite</code> auf Ihrem Server</b>"
  , "ENABLE_HTML_ED" => "<b>Den HTML Editor aktivieren</b>"
  , "WARN_EMAILINVALID" => "Hinweis: Die angegebene E-Mail - Adresse hat kein gültiges E-Mail-Format"
  , "ONLY_NEW_PASSWORD" => "Nur wenn Sie Ihr aktuelles Passwort ändern möchten, tragen Sie das neue Passwort hier ein"
  , "NEW_PASSWORD" => "Neues Passwort"
  , "CONFIRM_PASSWORD" => "Passwort wiederholen"
  , "PASSWORD_NO_MATCH" => "Die eingegebenen Passwörter stimmen nicht überein"
  , "PERMALINK" => "Gewünschte URL-Permalink-Struktur"
  , "MORE" => "mehr"
  , "HELP" => "Hilfe"


/* 
 * health-check.php
*/

  , "WEB_HEALTH_CHECK" => "Website-Server-Prüfung"
  , "VERSION" => "Version"
  , "UPG_NEEDED" => "Aktualisierung wird benötigt für"
  , "CANNOT_CHECK" => "Prüfung nicht möglich. Ihre Version ist"
  , "LATEST_VERSION" => "Die aktuellste Version ist installiert"
  , "SERVER_SETUP" => "Server-Einrichtung"
  , "OR_GREATER_REQ" => "oder höher wird benötigt"
  , "OK" => "OK"
  , "INSTALLED" => "installiert"
  , "NOT_INSTALLED" => "nicht installiert"
  , "WARNING" => "Warnung"
  , "DATA_FILE_CHECK" => "Test der Datei-Integrität"
  , "DIR_PERMISSIONS" => "Verzeichnis-Rechte"
  , "EXISTANCE" => "%s vorhanden"
  , "MISSING_FILE" => "Fehlende Datei"
  , "BAD_FILE" => "Fehlerhafte Datei"
  , "NO_FILE" => "Keine Datei"
  , "GOOD_D_FILE" => "Gute 'Verbieten' Datei"
  , "GOOD_A_FILE" => "Gute 'Erlauben' Datei"
  , "CANNOT_DEL_FILE" => "Die Datei kann nicht gelöscht werden"
  , "DOWNLOAD" => "Download"
  , "WRITABLE" => "Beschreibbar"
  , "NOT_WRITABLE" => "Nicht beschreibbar"

/* 
 * footer.php
*/

  , "POWERED_BY" => "Betrieben mit"

/* 
 * backups.php
*/

  , "PAGE_BACKUPS" => "Seiten-Backup(s)"
  , "ASK_DELETE_ALL" => "<em>A</em>lle Sicherungen löschen"
  , "DELETE_ALL_BAK" => "Alle Sicherungen löschen?"
  , "TOTAL_BACKUPS" => "Alle Sicherungen"

/* 
 * archive.php
*/

  , "SUCC_WEB_ARCHIVE" => "Ein Archiv Ihrer Webseite wurde erfolgreich erstellt!"
  , "SUCC_WEB_ARC_DEL" => "Die gewählte Webseiten-Sicherung wurde erfolgreich gelöscht"
  , "WEBSITE_ARCHIVES" => "Komplett-Sicherungen (ZIP-Archive)"
  , "ARCHIVE_DELETED" => "Das Archiv (ZIP) wurde erfolgreich gelöscht"
  , "CREATE_NEW_ARC" => "Neue Komplett-Sicherung (ZIP-Archiv) erstellen"
  , "ASK_CREATE_ARC" => "Neue Komplett-Sicherung jetzt <em>e</em>rstellen?"
  , "CREATE_ARC_WAIT" => "<b>Bitte warten:</b> Die Webseite wird gerade gesichert ..."
  , "DOWNLOAD_ARCHIVES" => "Archiv (ZIP) herunterladen"
  , "DELETE_ARCHIVE" => "Archiv löschen"
  , "TOTAL_ARCHIVES" => "Webseiten-Sicherung(en)"

/* 
 * include-nav.php
*/

  , "WELCOME" => "Willkommen"
  , "TAB_PAGES" => "<em>S</em>eiten"
  , "TAB_FILES" => "<em>D</em>ateien"
  , "TAB_THEME" => "<em>V</em>orlagen"
  , "TAB_BACKUPS" => "<em>B</em>ackups"
  , "PLUGINS_NAV" => "Plu<em>g</em>ins"
  , "TAB_SETTINGS" => "<em>E</em>instellungen"
  , "TAB_SUPPORT" => "Supp<em>o</em>rt"
  , "TAB_LOGOUT" => "<em>A</em>bmelden"

/* 
 * sidebar-files.php
*/

  , "BROWSE_COMPUTER" => "Auf dem Computer suchen"
  , "UPLOAD" => "Hochladen"

/* 
 * sidebar-support.php
*/

  , "SIDE_SUPPORT_LOG" => "Supp<em>o</em>rt Einstellungen und Log-Dateien"
  , "SIDE_HEALTH_CHK" => "Website-Server-Prüfung"
  , "SIDE_DOCUMENTATION" => "<em>D</em>okumentation"
  , "SIDE_VIEW_LOG" => "<em>L</em>og anzeigen"

/* 
 * sidebar-theme.php
*/

  , "SIDE_VIEW_SITEMAP" => "Sitemap <em>a</em>nzeigen"
  , "SIDE_GEN_SITEMAP" => "Sitemap <em>e</em>rstellen"
  , "SIDE_COMPONENTS" => "Komponenten <em>b</em>earbeiten"
  , "SIDE_EDIT_THEME" => "<em>V</em>orlage bearbeiten"
  , "SIDE_CHOOSE_THEME" => "Vorlage auswählen"

/* 
 * sidebar-pages.php
*/

  , "SIDE_CREATE_NEW" => "<em>N</em>eue Seite erstellen"
  , "SIDE_VIEW_PAGES" => "Alle <em>S</em>eiten anzeigen"

/* 
 * sidebar-settings.php
*/

  , "SIDE_GEN_SETTINGS" => "Allgemeine <em>E</em>instellungen"
  , "SIDE_USER_PROFILE" => "<em>B</em>enutzer Profil"

/* 
 * sidebar-backups.php
*/

  , "SIDE_VIEW_BAK" => "Seiten-Sicherung anzeigen"
  , "SIDE_WEB_ARCHIVES" => "<em>K</em>omplett-Sicherungen (ZIP)"
  , "SIDE_PAGE_BAK" => "<em>S</em>eiten-Backups"

/* 
 * error_checking.php
*/

  , "ER_PWD_CHANGE" => "Vergessen Sie nicht, das automatisch erzeugte Passwort durch ein eigenes Passwort <a href=\"settings.php#profile\">zu ersetzen</a>"
  , "ER_BAKUP_DELETED" => "Die Sicherung von %s  wurde gelöscht"
  , "ER_REQ_PROC_FAIL" => "Der Prozess ist fehlgeschlagen"
  , "ER_YOUR_CHANGES" => "Ihre Änderungen von %s wurden gespeichert"
  , "ER_HASBEEN_REST" => "<b>%s</b> wurde wiederhergestellt"
  , "ER_HASBEEN_DEL" => "<b>%s</b> wurde gelöscht"
  , "ER_CANNOT_INDEX" => "Sie können die URL der <b>Startseite</b> nicht ändern"
  , "ER_SETTINGS_UPD" => "Ihre Einstellungen wurden gespeichert"
  , "ER_OLD_RESTORED" => "Ihre vorherigen Einstellungen wurden wiederhergestellt"
  , "ER_NEW_PWD_SENT" => "Es wurde ein neues Passwort an die registrierte E-Mail - Adresse versandt"
  , "ER_SENDMAIL_ERR" => "Die E-Mail  konnte nicht versandt werden. Bitte versuchen Sie es erneut"
  , "ER_FILE_DEL_SUC" => "Datei wurde erfolgreich gelöscht"
  , "ER_PROBLEM_DEL" => "Die Datei konnte nicht gelöscht werden, es trat ein Fehler auf"
  , "ER_COMPONENT_SAVE" => "Die Komponenten wurden gespeichert"
  , "ER_COMPONENT_REST" => "Die Komponenten wurden wiederhergestellt"
  , "ER_CANCELLED_FAIL" => "<b>Abgebrochen:</b> Die Veränderungen wurden nicht übernommen"

/* 
 * changedata.php
*/

  , "CANNOT_SAVE_EMPTY" => "Sie können keine leere Seite oder eine Seite ohne Titel abspeichern"
  , "META_DESC" => "Meta-Beschreibung"

/* 
 * template_functions.php
*/

  , "FTYPE_COMPRESSED" => "Komprimiert"
  , "FTYPE_VECTOR" => "Vektor"
  , "FTYPE_FLASH" => "Flash"
  , "FTYPE_VIDEO" => "Video"
  , "FTYPE_AUDIO" => "Audio"
  , "FTYPE_WEB" => "Web"
  , "FTYPE_DOCUMENTS" => "Dokument"
  , "FTYPE_SYSTEM" => "System"
  , "FTYPE_MISC" => "Sonstiges"
  , "IMAGES" => "Bilder"

/* 
 * login_functions.php
*/

  , "FILL_IN_REQ_FIELD" => "Bitte füllen Sie alle Pflichtfelder aus"
  , "LOGIN_FAILED" => "Anmeldung fehlgeschlagen. Bitte prüfen Sie Ihren Benutzernamen und das Passwort."

/* 
 * Date Format
*/

  , "DATE_FORMAT" => "d.M Y"
  , "DATE_AND_TIME_FORMAT" => "d.m.Y - H:i"

/* 
 * support.php
*/

  , "WELCOME_MSG" => "Vielen Dank, dass Sie sich für GetSimple als Ihr CMS entschieden haben."
  , "WELCOME_P" => "Mit GetSimple verwalten Sie Ihre Website so einfach wie möglich, mit einer der besten Anwender-Oberflächen.<br />Wir wollen, daß das System so einfach wie möglich in der Handhabung ist, aber dem Entwickler alle benötigten Features bietet.</p><p>Nützliche <strong>Erst-Infos</strong>:</p>"
  , "GETTING_STARTED" => "Erst-Info und Erste Schritte"

/* 
 * image.php
*/

  , "CURRENT_THUMBNAIL" => "Aktuelle Thumbnail-Datei"
  , "RECREATE" => "Erneut erstellen"
  , "CREATE_ONE" => "Erstellen"
  , "IMG_CONTROl_PANEL" => "Bild-Verwaltung"
  , "ORIGINAL_IMG" => "Originalbild"
  , "CLIPBOARD_INSTR" => "Alle Auswählen"
  , "CREATE_THUMBNAIL" => "Thumbnail erstellen"
  , "CROP_INSTR_NEW" => "<em>ctrl-B</em> oder <em>command-B</em> für ein quadratisches Thumbnail"
  , "SELECT_DIMENTIONS" => "Abmessungen auswählen"
  , "HTML_ORIG_IMG" => "Originalbild HTML"
  , "LINK_ORIG_IMG" => "Originalbild Link"
  , "HTML_THUMBNAIL" => "Thumbnail HTML"
  , "LINK_THUMBNAIL" => "Thumbnail Link"
  , "HTML_THUMB_ORIG" => "Thumbnail-zu-Bild HTML"

/* 
 * plugins.php
*/

  , "PLUGINS_MANAGEMENT" => "Plugin-Verwaltung"
  , "PLUGINS_INSTALLED" => "Installierte Plugins"
  , "SHOW_PLUGINS" => "Installierte Plugi<em>n</em>s"
  , "PLUGIN_NAME" => "Name"
  , "PLUGIN_DESC" => "Beschreibung"
  , "PLUGIN_VER" => "Version"



/***********************************************************************************
 * SINCE Version 3.0
***********************************************************************************/

/* 
 * setup.php
 */

  , "ROOT_HTACCESS_ERROR" => ".htaccess konnte nicht im Hauptverzeichis angelegt werden. Bitte kopieren Sie <b>%s</b> als <b>.htaccess</b>  und ändern Sie <code>%s</code> in <code>%s</code>"
  , "REMOVE_TEMPCONFIG_ERROR" => "<b>%s</b> konnte nicht gelöscht werden! Bitte löschen Sie es manuell."
  , "MOVE_TEMPCONFIG_ERROR" => "<b>%s</b> konnte nicht in <b>%s</b> umbenannt werden! Bitte nennen Sie es manuell um."
  , "KILL_CANT_CONTINUE" => "Ein Fortsetzen der Installation ist nicht möglich. Bitte beheben Sie die Fehler und versuchen Sie es noch einmal."
  , "REFRESH" => "Aktualisieren"
  , "BETA" => "Beta / Bleeding Edge"

/*
 * Misc Cleanup Work
 */

# new to 3.0 
  
  , "HOMEPAGE_DELETE_ERROR" => "Die Startseite kann nicht gelöscht werden."
  , "NO_ZIPARCHIVE" => "Die <i>PHP-ZipArchiv-Erweiterung</i> ist nicht installiert, es kann keine ZIP-Sicherung erstellt werden"
  , "REDIRECT_MSG" => "Wenn Ihr Browser Sie nicht weiterleitet, klicken Sie <a href=\"%s\">hier</a>"
  , "REDIRECT" => "Weiterleitung"
  , "DENIED" => "Verweigert" //sitemap
  , "DEBUG_MODE" => "DEBUG MODUS" //nav-include
  , "DOUBLE_CLICK_EDIT" => "Zum Bearbeiten zweimal klicken" //components
  , "THUMB_SAVED" => "Thumbnail wurde gespeichert" //image
  , "EDIT_COMPONENTS" => "Komponenten bearbeiten" //components
  , "REQS_MORE_INFO" => "Weitere Informationen zu den benötigten Modulen finden Sie auf der Seite mit den <a href=\"%s\" target=\"_blank\" >Installations-Voraussetzungen</a>." //install & health-check
  , "SYSTEM_UPDATE" => "System-Update" // update.php
  , "AUTHOR" => "Autor" //plugins.php
  , "ENABLE" => "Aktivieren" //plugins.php
  , "DISABLE" => "Deaktivieren" //plugins.php
  , "NO_THEME_SCREENSHOT" => "Die Seitenvorlage verfügt über keinen Screenshot" //theme.php
  , "UNSAVED_INFORMATION" => "Wenn Sie die Seite verlassen, werden die Änderungen nicht gespeichert." //edit.php
  , "BACK_TO_WEBSITE" => "Zur Webseite" //index & resetpassword
  , "SUPPORT_FORUM" => "Support-Forum" //support.php
  , "FILTER" => "Filte<em>r</em>" //pages.php
  , "UPLOADIFY_BUTTON" => "Dateien und/oder Grafiken hochladen..." //upload.php
  , "FILE_BROWSER" => "Datei-Browser" //filebrowser.php
  , "SELECT_FILE" => "Datei auswählen" //filebrowser.php
  , "CREATE_FOLDER" => "Verzeichnis anlegen" //upload.php
  , "THUMBNAIL" => "Thumbnail" //filebrowser.php
  , "ERROR_FOLDER_EXISTS" => "Den Ordner, den Sie anlegen möchten, gibt es schon" //upload.php
  , "FOLDER_CREATED" => "Das neue Verzeichnis wurde angelegt: <b>%s</b>" //upload.php
  , "ERROR_CREATING_FOLDER" => "Das Verzeichnis konnte nicht angelegt werden" //upload.php
  , "DELETE_FOLDER" => "Verzeichnis löschen" //upload.php
  , "FILE_NAME" => "Datei-Name" //multiple tr header rows
  , "FILE_SIZE" => "Datei-Größe" //multiple tr header rows
  , "ARCHIVE_DATE" => "Archiv-Datum" //archive.php
  , "CKEDITOR_LANG" => "de" // edit.php ; set CKEditor language, don"t forget to include CKEditor language file in translation zip

# new to 3.1
 
  , "XML_INVALID" => "Ungültige XML - Datei" //template-functions.php
  , "XML_VALID" => "Gültige XML - Datei" //template-functions.php
  , "UPDATE_AVAILABLE" => "Aktualisieren auf" //plugins.php
  , "STATUS" => "Status" //plugins.php
  , "CLONE" => "Seite klonen" //edit.php
  , "CLONE_SUCCESS" => "Kopierprozess erfolgreich: angelegt wurde %s" //pages.php
  , "COPY" => "Kopieren" //pages.php
  , "CLONE_ERROR" => "Das Klonen der Seite <b>%s</b> war nicht erfolgreich"  //pages.php
  , "AUTOSAVE_NOTIFY" => "automatische Speicherung um" //edit.php
  , "MENU_MANAGER" => "<em>M</em>enu-Manager" //edit.php
  , "GET_PLUGINS_LINK" => "<em>w</em>eitere Plugins herunterladen"
  , "SITEMAP_REFRESHED" => "Die Sitemap wurde aktualisiert" //edit.php
  , "LOG_FILE_EMPTY" => "Diese Log-Datei ist leer" //log.php
  , "SHARE" => "Teilen" //footer.php
  , "NO_PARENT" => "keine übergeordnete Seite" //edit.php
  , "REMAINING" => "Zeichen können noch eingegeben werden" //edit.php
  , "NORMAL" => "Normal" //edit.php
  , "ERR_CANNOT_DELETE" => "%s kann nicht gelöscht werden. Bitte machen Sie das selbst." //common.php
  , "ADDITIONAL_ACTIONS" => "Weitere Schritte" //edit.php
  , "ITEMS" => "Dateien" //upload.php
  , "SAVE_MENU_ORDER" => "Menü-Anordnung speichern" //menu-manager.php
  , "MENU_MANAGER_DESC" => "Ordnen Sie die Seiten mit Drag-und-drop so, wie Sie die Menü-Struktur haben möchten. Zum Speichern klicken Sie dann auf  <strong>'Menü-Anordnung speichern'</strong>." //menu-manager.php
  , "MENU_MANAGER_SUCCESS" => "Die Menü-Anordnung wurde gespeichert." //menu-manager.php

# new to 3.2 
  
  , "LABEL_DISPNAME" => "Anzeigename" //install.php 
  , "FLUSHCACHE" => "Speicher leeren" //settings.php
  , "FLUSHCACHE-SUCCESS" => "Speicher erfolgreich geleert!" //settings.php
  , "DISPLAY_NAME" => "Der Name für die öffentliche Darstellung, das ist nicht der Benutzername." //settings.php
  
/* 
 * api related pages
 */
 
  , "API_ERR_MISSINGPARAM" => "diesen Parameter gibt es nicht"
  , "API_ERR_BADMETHOD" => "diese Methode gibt es nicht"
  , "API_ERR_AUTHFAILED" => "Authentifizierung gescheitert"
  , "API_ERR_AUTHDISABLED" => "Authentifizierung deaktiviert"
  , "API_ERR_NOPAGE" => "die angeforderte Seite %s gibt es nicht"
  , "API_CONFIGURATION" => "API - Konfiguration"
  , "API_ENABLE" => "API aktivieren"
  , "API_REGENKEY" => "Key neu erzeugen"
  , "API_DISCLAIMER" => "Durch das Aktivieren dieser API kann jede externe Anwendung, die über eine Kopie Ihres Schlüssels verfügt, auf die Daten Ihrer Webseite zugreifen. <b>Geben Sie diesen Key nur an vertrauenswürdige Applikationen weiter.</b>"
  , "API_REGEN_DISCLAIMER" => "Wenn Sie den Key neu erzeugen, müssen Sie diesen neuen Schlüssel allen externen Applikationen, die auf Ihre Seite zugreifen, mitteilen."
  , "API_CONFIRM" => "SIND SIE SICHER?"


  , "X" => "nicht übersetzt"

/*
 * Additions for 3.1
 */
 
  , "DEBUG_CONSOLE" => "Debug-Konsole"
  , "TRANSLITERATION" => "Umschreibung"

);

?>
