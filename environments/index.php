<?php
/**
 * The manifest of files that are local to specific environment.
 * This file returns a list of environments that the application
 * may be installed under. The returned data must be in the following
 * format:
 *
 * ```php
 * return [
 *     'environment name' => [
 *         'path' => 'directory storing the local files',
 *         'skipFiles'  => [
 *             // list of files that should only copied once and skipped if they already exist
 *         ],
 *         'setWritable' => [
 *             // list of directories that should be set writable
 *         ],
 *         'setExecutable' => [
 *             // list of files that should be set executable
 *         ],
 *         'setCookieValidationKey' => [
 *             // list of config files that need to be inserted with automatically generated cookie validation keys
 *         ],
 *         'createSymlink' => [
 *             // list of symlinks to be created. Keys are symlinks, and values are the targets.
 *         ],
 *     ],
 * ];
 * ```
 */
return [
    // В этом окружении находится основной пример работающей конфигурации
    // Его следует всякий раз корректировать если в проекте добавляются
    // новые элементы в игнорируемые файлы
    // Из этого окружения разработчики могут/должны копировать фрагменты
    // конфигурации
    // 
    // sudo -u www-data ./init --env=Development --overwrite=y
    'Development' => [
        'path' => 'dev',
        'setWritable' => [
            'runtime',
            'runtime/cache',
            'runtime/logs',
            'runtime/mail',
        ],
        'setExecutable' => [
            'yii',
        ],
    ],
    // sudo -u www-data ./init --env=Production --overwrite=y
    'Production' => [
        'path' => 'prod',
        'setWritable' => [
            'runtime',
            'runtime/cache',
            'runtime/logs',
            'runtime/mail',
        ],
        'setExecutable' => [
            'yii',
        ],
    ],
    // sudo -u www-data ./init --env=Local --overwrite=y
    'Local' => [
        'path' => 'local',
        'setWritable' => [
            'runtime',
            'runtime/cache',
            'runtime/logs',
            'runtime/mail',
        ],
        'setExecutable' => [
            'yii',
        ],
    ],
    // sudo -u www-data ./init --env=Test --overwrite=y
    'Test' => [
        'path' => 'test',
        'setWritable' => [
            'runtime',
            'runtime/cache',
            'runtime/logs',
            'runtime/mail',
        ],
        'setExecutable' => [
            'yii',
        ],
    ],
];
