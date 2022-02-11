<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Page:/user/pages/03.galeria-zdjec/03.koncert_variete */
class __TwigTemplate_d6a38f271287554005ac389727ea2b9e135f8d32f4751ee419d0e31b30c477cf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<p>W Zduńskowolskim klubie Variete odbył się koncert promujący naszą pierwszą płytę. <br>
Oto kilka fotek z koncertu😉 <br>
Dzięki, za wszelkie wsparcie i za to że byliście z nami! <br>
Jak również klubowi Variete za udostępnienie miejsca na koncert.
Mamy nadzieje że spotkamy się na przyszłych koncertach. <br>
Wraz z nami grał zespół <a href=\"https://www.youtube.com/watch?v=Ig4CLWu06AQ\">Gyntoira</a></p>
<link rel=\"stylesheet\" href=\"https://unpkg.com/flickity-fullscreen@1/fullscreen.css\">
<script src=\"https://unpkg.com/flickity-fullscreen@1/fullscreen.js\"></script>
<div class=\"gallery js-flickity p-centered\" data-flickity-options='{ \"wrapAround\": true, \"adaptiveHeight\": true}'>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/Variete (1).jpg\" style=\"imgsty p-centered\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/Variete (2).jpg\" style=\"imgsty p-centered\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/Variete (3).jpg\" style=\"imgsty p-centered\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/Variete (4).jpg\" style=\"imgsty p-centered\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/Variete (5).jpg\" style=\"imgsty p-centered\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/Variete (6).jpg\" style=\"imgsty p-centered\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/Variete (7).jpg\" style=\"imgsty p-centered\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/Variete (8).jpg\" style=\"imgsty p-centered\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/Variete (9).jpg\" style=\"imgsty p-centered\"></div>
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
</style>";
    }

    public function getTemplateName()
    {
        return "@Page:/user/pages/03.galeria-zdjec/03.koncert_variete";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<p>W Zduńskowolskim klubie Variete odbył się koncert promujący naszą pierwszą płytę. <br>
Oto kilka fotek z koncertu😉 <br>
Dzięki, za wszelkie wsparcie i za to że byliście z nami! <br>
Jak również klubowi Variete za udostępnienie miejsca na koncert.
Mamy nadzieje że spotkamy się na przyszłych koncertach. <br>
Wraz z nami grał zespół <a href=\"https://www.youtube.com/watch?v=Ig4CLWu06AQ\">Gyntoira</a></p>
<link rel=\"stylesheet\" href=\"https://unpkg.com/flickity-fullscreen@1/fullscreen.css\">
<script src=\"https://unpkg.com/flickity-fullscreen@1/fullscreen.js\"></script>
<div class=\"gallery js-flickity p-centered\" data-flickity-options='{ \"wrapAround\": true, \"adaptiveHeight\": true}'>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/Variete (1).jpg\" style=\"imgsty p-centered\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/Variete (2).jpg\" style=\"imgsty p-centered\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/Variete (3).jpg\" style=\"imgsty p-centered\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/Variete (4).jpg\" style=\"imgsty p-centered\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/Variete (5).jpg\" style=\"imgsty p-centered\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/Variete (6).jpg\" style=\"imgsty p-centered\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/Variete (7).jpg\" style=\"imgsty p-centered\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/Variete (8).jpg\" style=\"imgsty p-centered\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/Variete (9).jpg\" style=\"imgsty p-centered\"></div>
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
</style>", "@Page:/user/pages/03.galeria-zdjec/03.koncert_variete", "");
    }
}
