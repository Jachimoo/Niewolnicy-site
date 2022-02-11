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

/* @Page:/user/pages/03.galeria-zdjec */
class __TwigTemplate_2f96a295e31092aded7f9844d98cf1eaa70beafab7aca67d44cff62ccc06b245 extends \Twig\Template
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
        echo "<div class=\"galleryhero p-centered\">
GALERIA
</div>
<style>
.galleryhero{
    text-shadow: 0 0 15px #000, 0 0 15px #000;
    color: #fff;
    font-size: 72px;
    font-weight: 500;
}
</style>";
    }

    public function getTemplateName()
    {
        return "@Page:/user/pages/03.galeria-zdjec";
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
        return new Source("<div class=\"galleryhero p-centered\">
GALERIA
</div>
<style>
.galleryhero{
    text-shadow: 0 0 15px #000, 0 0 15px #000;
    color: #fff;
    font-size: 72px;
    font-weight: 500;
}
</style>", "@Page:/user/pages/03.galeria-zdjec", "");
    }
}
