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

/* @Page:/user/pages/02.o-nas/_3text-opal */
class __TwigTemplate_525826516a253819f0227aa0de215e22854fa1e59a72f479f9f278ab59c603bf extends \Twig\Template
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
        echo "<section class=\"section modular-text  bg-gray\">
    <section class=\"container grid-xl\">
        <div class=\"columns right\" data-aos=\"fade-up\" data-aos-once=\"true\" data-aos-mirror=\"true\" data-aos-duration=\"1000\" data-aos-delay=\"50\">
                        <div class=\"column col-6 col-md-12\">
                <div class=\"text-opal\">
<h2>Kacper Opaliński</h2>
Na perkusji gram od małego, będzie już na spokojnie z 10 lat, ale dopiero od czasu dołączenia do niewolników wziąłem się za to na poważnie. Gram dlatego że mam poczucie rytmu i zespół niespokojnych nóg. 
<br> <br>
Dołączyłem do niewolników dlatego że granie z innymi sprawia mi więcej frajdy niż samemu. Jestem również autorem niektórych tekstów i kompozycji w zespole.
</div>
<style>
    .text-opal{
        font-size: 20px;
        text-align: right;
        font-weight: 400;
        margin-top:1em;
}
</style>
            </div>
            <div class=\"column col-6 col-md-12 foto\">
                <img alt=\"\" src=\"/user/pages/02.o-nas/_3text-opal/pobrany plik.jpg\" />
            </div>
                         
        </div>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:/user/pages/02.o-nas/_3text-opal";
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
        return new Source("<section class=\"section modular-text  bg-gray\">
    <section class=\"container grid-xl\">
        <div class=\"columns right\" data-aos=\"fade-up\" data-aos-once=\"true\" data-aos-mirror=\"true\" data-aos-duration=\"1000\" data-aos-delay=\"50\">
                        <div class=\"column col-6 col-md-12\">
                <div class=\"text-opal\">
<h2>Kacper Opaliński</h2>
Na perkusji gram od małego, będzie już na spokojnie z 10 lat, ale dopiero od czasu dołączenia do niewolników wziąłem się za to na poważnie. Gram dlatego że mam poczucie rytmu i zespół niespokojnych nóg. 
<br> <br>
Dołączyłem do niewolników dlatego że granie z innymi sprawia mi więcej frajdy niż samemu. Jestem również autorem niektórych tekstów i kompozycji w zespole.
</div>
<style>
    .text-opal{
        font-size: 20px;
        text-align: right;
        font-weight: 400;
        margin-top:1em;
}
</style>
            </div>
            <div class=\"column col-6 col-md-12 foto\">
                <img alt=\"\" src=\"/user/pages/02.o-nas/_3text-opal/pobrany plik.jpg\" />
            </div>
                         
        </div>
    </section>
</section>
", "@Page:/user/pages/02.o-nas/_3text-opal", "");
    }
}
