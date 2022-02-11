<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/user/pages/04.dyskografia/_sekret/text.pl.md',
    'modified' => 1643805776,
    'data' => [
        'header' => [
            'title' => 'Sekret',
            'body_classes' => 'modular',
            'image_align' => 'right',
            'media_order' => 'przód2.png'
        ],
        'frontmatter' => 'title: Sekret
body_classes: modular
image_align: right
media_order: przód2.png',
        'markdown' => '<div>
    <h2 class="secret">0000 - 000000</h2>
    <p class="secret">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </p>
    <ol>
        <li class=secret>commodo ullamcorper</li>
        <li class=secret>commodo ullamcorper</li>
        <li class=secret>commodo ullamcorper</li>
        <li class=secret>commodo ullamcorper</li>
        <li class=secret>commodo ullamcorper</li>
        <li class=secret>commodo ullamcorper</li>
        <li class=secret>commodo ullamcorper</li>
        <li class=secret>commodo ullamcorper</li>
        <li class=secret>commodo ullamcorper</li>
        <li class=secret>commodo ullamcorper</li>
        <li class=secret>commodo ullamcorper</li>
    </ol>
</div>

<script>
    let b = baffle(\'.secret\', {characters: \'▀▄█▌▐░▒▓\', speed: 50}).start();
</script>
<style>
    .secret{
        text-align: justify;
    }
</style>'
    ]
];
