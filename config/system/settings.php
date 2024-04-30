<?php
return [
    'BE' => [
        'debug' => true,
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$dXBGVXl1TGZnR0NLU2RCWQ$tAmSwKMPTZaBq2bs7XL6lt5uEK+RVVLkkRn0oyM9UA0',
        'languageDebug' => false,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
            ],
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'de',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'ai_suite' => [
            'aiSuiteApiKey' => 'yWYbC5NC0jMwlMzTERiaho842VXSEpPQm4v82mpIM4bgCUdx7WYX5KBXUYrms71y',
            'aiSuiteServer' => 'https://api.autodudes.de/',
            'mediaStorageFolder' => '',
            'singleNewsDisplayPage' => '1',
            'useUrlForRequest' => '0',
        ],
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
            'loginLogoAlt' => '',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'mask' => [
            'backend' => 'EXT:setup_package/Resources/Private/Templates/Plugins/Mask/Backend/Preview/',
            'backend_layouts_folder' => 'EXT:setup_package/Configuration/Mask/Backend/',
            'backendlayout_pids' => '0',
            'content' => 'EXT:setup_package/Resources/Private/Templates/Plugins/Mask/',
            'content_elements_folder' => 'EXT:setup_package/Configuration/Mask/ContentElements/',
            'json' => '',
            'layouts' => 'EXT:setup_package/Resources/Private/Templates/Plugins/Mask/',
            'layouts_backend' => 'EXT:setup_package/Resources/Private/Templates/Plugins/Mask/Backend/',
            'loader_identifier' => 'json-split',
            'override_shared_fields' => '0',
            'partials' => 'EXT:setup_package/Resources/Private/Templates/Plugins/Mask/',
            'partials_backend' => 'EXT:setup_package/Resources/Private/Templates/Plugins/Mask/Backend/',
            'preview' => 'EXT:setup_package/Resources/Private/Templates/Plugins/Mask/Backend/',
        ],
    ],
    'FE' => [
        'cacheHash' => [
            'enforceValidation' => true,
        ],
        'debug' => false,
        'disableNoCacheParameter' => true,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'GraphicsMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'RGB',
        'processor_effects' => false,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'defaultMailFromAddress' => 'info@example.org',
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailhog sendmail test@example.org --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'UTF8filesystem' => true,
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'devIPmask' => '',
        'displayErrors' => 0,
        'encryptionKey' => '8f0d3e8a42a5af237c200cd11b41f7f34054d583b5822b0009131764dc4a7865a1fbc632b2f19f0434e0872ea92c4975',
        'exceptionalErrors' => 4096,
        'features' => [
            'security.backend.enforceContentSecurityPolicy' => true,
            'security.usePasswordPolicyForFrontendUsers' => true,
        ],
        'sitename' => 'New TYPO3 site',
        'systemLocale' => 'de_DE.UTF-8',
    ],
];
