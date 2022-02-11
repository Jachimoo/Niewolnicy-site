<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/user/plugins/flex-objects/blueprints/flex-objects/user-accounts.yaml',
    'modified' => 1643805890,
    'data' => [
        'title' => 'User Accounts (Admin)',
        'description' => 'Manage your User Accounts in the new Flex Accounts admin. This allows you to use Flex Accounts only in Admin plugin, while still using the old users in the frontend.',
        'type' => 'flex-objects',
        'extends@' => [
            'type' => 'user-accounts',
            'context' => 'blueprints://flex'
        ]
    ]
];
