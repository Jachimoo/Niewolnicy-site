<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/user/pages/03.galeria-zdjec/blog.md',
    'modified' => 1643812095,
    'data' => [
        'header' => [
            'title' => 'Galeria Zdjęć',
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 5,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'show_sidebar' => false,
            'show_breadcrumbs' => true,
            'show_pagination' => true,
            'media_order' => 'JSJJ6371-1-min_11zon (3)_11zon.jpg',
            'hero_classes' => 'hero-small overlay-dark-gradient text-light',
            'blog_url' => '/blog'
        ],
        'frontmatter' => 'title: \'Galeria Zdjęć\'
content:
    items:
        - \'@self.children\'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
show_sidebar: false
show_breadcrumbs: true
show_pagination: true
media_order: \'JSJJ6371-1-min_11zon (3)_11zon.jpg\'
hero_classes: \'hero-small overlay-dark-gradient text-light\'
blog_url: /blog',
        'markdown' => '<div class="galleryhero p-centered">
GALERIA
</div>
<style>
.galleryhero{
    text-shadow: 0 0 15px #000, 0 0 15px #000;
    color: #fff;
    font-size: 72px;
    font-weight: 500;
}
</style>'
    ]
];
