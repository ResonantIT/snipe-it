<?php

return array(
	'alert_email'				=> 'Envoyer les alertes à',
	'alerts_enabled'			=> 'Alerts Enabled',
	'alert_interval'			=> 'Expiring Alerts Threshold (in days)',
	'alert_inv_threshold'		=> 'Inventory Alert Threshold',
	'asset_ids'					=> 'ID de l\'actif',
	'auto_increment_assets'		=> 'Générer des identifiants d\'actifs auto-incrémentés',
	'auto_increment_prefix'		=> 'Préfixe (optionnel)',
	'auto_incrementing_help'    => 'Activer l\'auto-incrémentation des ID d\'actif avant de sélectionner cette option',
	'backups'					=> 'Sauvegardes',
	'barcode_settings'			=> 'Configuration des codes à barres',
    'confirm_purge'			    => 'Confirm Purge',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone.',
	'custom_css'				=> 'CSS personnalisé',
	'custom_css_help'			=> 'Entrez les codes CSS personnalisé que vous souhaitez utiliser . Ne pas inclure les balises &lt;style&gt;&lt;/style&gt;.',
	'default_currency'  		=> 'Devise par défaut',
	'default_eula_text'			=> 'Licence d\'utilisation par défaut',
  'default_language'					=> 'Default Language',
	'default_eula_help_text'	=> 'Vous pouvez également associer les licences d\'utilisations personnalisés à des catégories spécifiques d\'actifs .',
    'display_asset_name'        => 'Afficher le nom des actifs',
    'display_checkout_date'     => 'Afficher la date d\'association',
    'display_eol'               => 'Afficher la fin de vie dans les tables',
    'display_qr'                => 'Display Square Codes',
	'display_alt_barcode'		=> 'Display 2D barcode',
	'barcode_type'				=> '3D Barcode Type',
	'alt_barcode_type'			=> '2D barcode type',
    'eula_settings'				=> 'Configuration pour les licences d\'utilisation',
    'eula_markdown'				=> 'Cette licence d\'utilisation permet l\'utilisation des <a href="https://help.github.com/articles/github-flavored-markdown/">"Github flavored markdown"</a>.',
    'general_settings'			=> 'Configuration générale',
	'generate_backup'			=> 'Générer une sauvegarde',
    'header_color'              => 'Couleur de l\'en-tête',
    'info'                      => 'Ces paramètres vous permettent de personnaliser certains aspects de votre installation.',
    'laravel'                   => 'Version de Laravel',
    'ldap_enabled'              => 'LDAP enabled',
    'ldap_integration'          => 'LDAP Integration',
    'ldap_settings'             => 'LDAP Settings',
    'ldap_server'               => 'LDAP Server',
	'ldap_server_cert'			=> 'LDAP SSL certificate validation',
	'ldap_server_cert_ignore'	=> 'Allow invalid SSL Certificate',
	'ldap_server_cert_help'		=> 'Select this checkbox if you are using a self signed SSL cert and would like to accept an invalid SSL certificate.',
    'ldap_uname'                => 'LDAP Bind Username',
    'ldap_pword'                => 'LDAP Bind Password',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP Filter',
    'ldap_username_field'       => 'Username Field',
    'ldap_lname_field'          => 'Last Name',
    'ldap_fname_field'          => 'LDAP First Name',
    'ldap_auth_filter_query'    => 'LDAP Authentication query',
    'ldap_version'              => 'LDAP Version',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_emp_num'              => 'LDAP Employee Number',
    'ldap_email'                => 'LDAP Email',
    'load_remote_text'          => 'Remote Scripts',
    'load_remote_help_text'		=> 'This Snipe-IT install can load scripts from the outside world.',
    'logo'                    	=> 'Logo',
    'full_multiple_companies_support_help_text' => 'Restricting users (including admins) assigned to companies to their company\'s assets.',
    'full_multiple_companies_support_text' => 'Full Multiple Companies Support',
    'optional'					=> 'facultatif',
    'per_page'                  => 'Résultats par page',
    'php'                       => 'Version de PHP',
    'php_gd_info'               => 'Vous devez installer php-gd afin d\'afficher les QR codes (voir les instructions d\'installation).',
    'php_gd_warning'            => 'Le PHP Image Processing et GD plugin n\'est PAS installé.',
    'qr_help'                   => 'Activer les QR Codes avant de définir ceci',
    'qr_text'                   => 'Texte du QR Code',
    'setting'                   => 'Paramètre',
    'settings'                  => 'Paramètres',
    'site_name'                 => 'Nom du site',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Configuration "Slack"',
    'slack_integration_help'    => 'L\'intégration de Slack est facultative, mai le "endpoint" et le "channel" sont nécessaires pour son utilisation. Pour configurer l\'intégration Slack, vous devez d\'abord <a href=":slack_link" target="_new">créer un "incoming webhook"</a> dans votre compte Slack.',
    'snipe_version'  			=> 'Version de Snipe-IT',
    'system'                    => 'Information du système',
    'update'                    => 'Mettre à jour les paramètres',
    'value'                     => 'Valeur',
    'brand'                     => 'Branding',
    'about_settings_title'      => 'About Settings',
    'about_settings_text'       => 'These settings let you customize certain aspects of your installation.',
    'labels_per_page'           => 'Labels per page',
    'label_dimensions'          => 'Label dimensions (inches)',
    'page_padding'             => 'Page margins (inches)',
    'purge'                    => 'Purge Deleted Records',
    'labels_display_bgutter'    => 'Label bottom gutter',
    'labels_display_sgutter'    => 'Label side gutter',
    'labels_fontsize'           => 'Label font size',
    'labels_pagewidth'          => 'Label sheet width',
    'labels_pageheight'         => 'Label sheet height',
    'label_gutters'        => 'Label spacing (inches)',
    'page_dimensions'        => 'Page dimensions (inches)',
    'label_fields'          => 'Label visible fields',
    'inches'        => 'inches',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'text_pt'        => 'pt',
    'left'        => 'left',
    'right'        => 'right',
    'top'        => 'top',
    'bottom'        => 'bottom',
    'vertical'        => 'vertical',
    'horizontal'        => 'horizontal',
);