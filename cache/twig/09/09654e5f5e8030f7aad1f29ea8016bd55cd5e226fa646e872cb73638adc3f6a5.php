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

/* @Page:/user/pages/03.galeria-zdjec/02.koncert-lokator */
class __TwigTemplate_ac1d962af5694f39a346914a4295499cfe9129716f946baeacec1efc0b947fa0 extends \Twig\Template
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
        echo "<p>Energetyczny koncert \"Niewolników Systemu\" na rozpoczęcie wakacji 2021! Był rock,, ballady, emocje, bisy, popisy solowe i zespołowe. <br>
NIEwolnicy Systemu dali po prostu takiego czadu, że musieli bisować, a  i tak widownia nie chciała opuścić sali po koncercie. <br>
Był materiał z pierwszej płyty i nowe utwory.  <br>
Był kawał dobrej muzyki i zabawy.  <br>
Mówiąc wprost, rozwaliliście SYSTEM 😉 <br></p>
<!-- Flickity HTML init -->
<div class=\"gallery js-flickity p-centered\" data-flickity-options='{ \"wrapAround\": true, \"adaptiveHeight\": true }'>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/lokator (1).jpg\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/lokator (2).jpg\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/lokator (3).jpg\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/lokator (4).jpg\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/lokator (5).jpg\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/lokator (6).jpg\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/lokator (7).jpg\"></div>
</div>
<style>
  .gallery{
    width: 80%;
    height: auto;
  }
  /* position dots up a bit */
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

</style>";
    }

    public function getTemplateName()
    {
        return "@Page:/user/pages/03.galeria-zdjec/02.koncert-lokator";
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
        return new Source("<p>Energetyczny koncert \"Niewolników Systemu\" na rozpoczęcie wakacji 2021! Był rock,, ballady, emocje, bisy, popisy solowe i zespołowe. <br>
NIEwolnicy Systemu dali po prostu takiego czadu, że musieli bisować, a  i tak widownia nie chciała opuścić sali po koncercie. <br>
Był materiał z pierwszej płyty i nowe utwory.  <br>
Był kawał dobrej muzyki i zabawy.  <br>
Mówiąc wprost, rozwaliliście SYSTEM 😉 <br></p>
<!-- Flickity HTML init -->
<div class=\"gallery js-flickity p-centered\" data-flickity-options='{ \"wrapAround\": true, \"adaptiveHeight\": true }'>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/lokator (1).jpg\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/lokator (2).jpg\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/lokator (3).jpg\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/lokator (4).jpg\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/lokator (5).jpg\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/lokator (6).jpg\"></div>
  <div class=\"gallery-cell\"><img src=\"/images/myphoto/lokator (7).jpg\"></div>
</div>
<style>
  .gallery{
    width: 80%;
    height: auto;
  }
  /* position dots up a bit */
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

</style>", "@Page:/user/pages/03.galeria-zdjec/02.koncert-lokator", "");
    }
}
