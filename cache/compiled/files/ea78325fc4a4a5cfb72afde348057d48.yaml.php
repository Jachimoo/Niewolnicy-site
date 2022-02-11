<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/config/backups.yaml',
    'modified' => 1643826130,
    'data' => [
        'purge' => [
            'trigger' => 'space',
            'max_backups_count' => 25,
            'max_backups_space' => 5,
            'max_backups_time' => 365
        ],
        'profiles' => [
            0 => [
                'name' => 'Backup',
                'root' => '/backup',
                'exclude_paths' => NULL,
                'exclude_files' => NULL,
                'schedule' => true,
                'schedule_at' => '* 2 * * 7'
            ]
        ]
    ]
];
