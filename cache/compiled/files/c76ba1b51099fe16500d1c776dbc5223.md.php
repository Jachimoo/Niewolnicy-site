<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/user/pages/01.strona-glowna/modular.md',
    'modified' => 1643805733,
    'data' => [
        'header' => [
            'title' => 'Strona Główna',
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'dir' => 'ascending'
                ]
            ]
        ],
        'frontmatter' => 'title: \'Strona Główna\'
content:
    items: \'@self.modular\'
    order:
        dir: ascending',
        'markdown' => ''
    ]
];
