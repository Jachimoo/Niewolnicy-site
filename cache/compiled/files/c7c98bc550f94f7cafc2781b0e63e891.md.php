<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/user/pages/03.galeria-zdjec/03.koncert_variete/item.md',
    'modified' => 1643812508,
    'data' => [
        'header' => [
            'title' => 'Koncert Variete',
            'media_order' => 'variat (1).jpg,variat (2).jpg,variat (3).jpg,variat (4).jpg,variat (5).jpg,variat (6).jpg,variat (7).jpg,variat (8).jpg,variat (9).jpg',
            'date' => '09-02-2020 18:00'
        ],
        'frontmatter' => 'title: \'Koncert Variete\'
media_order: \'variat (1).jpg,variat (2).jpg,variat (3).jpg,variat (4).jpg,variat (5).jpg,variat (6).jpg,variat (7).jpg,variat (8).jpg,variat (9).jpg\'
date: \'09-02-2020 18:00\'',
        'markdown' => 'W Zduńskowolskim klubie Variete odbył się koncert promujący naszą pierwszą płytę. <br>
Oto kilka fotek z koncertu😉 <br>
Dzięki, za wszelkie wsparcie i za to że byliście z nami! <br>
Jak również klubowi Variete za udostępnienie miejsca na koncert.
Mamy nadzieje że spotkamy się na przyszłych koncertach. <br>
Wraz z nami grał zespół [Gyntoira](https://www.youtube.com/watch?v=Ig4CLWu06AQ)
<link rel="stylesheet" href="https://unpkg.com/flickity-fullscreen@1/fullscreen.css">
<script src="https://unpkg.com/flickity-fullscreen@1/fullscreen.js"></script>
<div class="gallery js-flickity p-centered" data-flickity-options=\'{ "wrapAround": true, "adaptiveHeight": true}\'>
  <div class="gallery-cell"><img src="/images/myphoto/Variete (1).jpg" style="imgsty p-centered"></div>
  <div class="gallery-cell"><img src="/images/myphoto/Variete (2).jpg" style="imgsty p-centered"></div>
  <div class="gallery-cell"><img src="/images/myphoto/Variete (3).jpg" style="imgsty p-centered"></div>
  <div class="gallery-cell"><img src="/images/myphoto/Variete (4).jpg" style="imgsty p-centered"></div>
  <div class="gallery-cell"><img src="/images/myphoto/Variete (5).jpg" style="imgsty p-centered"></div>
  <div class="gallery-cell"><img src="/images/myphoto/Variete (6).jpg" style="imgsty p-centered"></div>
  <div class="gallery-cell"><img src="/images/myphoto/Variete (7).jpg" style="imgsty p-centered"></div>
  <div class="gallery-cell"><img src="/images/myphoto/Variete (8).jpg" style="imgsty p-centered"></div>
  <div class="gallery-cell"><img src="/images/myphoto/Variete (9).jpg" style="imgsty p-centered"></div>
</div>

<style>
  .gallery{
    width: 80%;
    height: auto;
    background-color: #272b2c;
  }
.flickity-page-dots {
  bottom: -22px;
}
/* dots are lines */
.flickity-page-dots .dot {
  height: 4px;
  width: 40px;
  margin: 0;
  border-radius: 0;
}
.flickity-viewport {
  transition: height 0.2s;
}
.carousel-cell {
  width: 100%; /* full width */
  height: 200px;
  background: #222;
  /* center images in cells with flexbox */
  display: flex;
  align-items: center;
  justify-content: center;
}

.carousel.is-fullscreen .carousel-cell {
  height: 80%;
  width:auto;
}

.carousel-cell img {
  display: block;
  max-height: 80%;
  max-width: auto;
}
</style>'
    ]
];
