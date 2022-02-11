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

/* forgot.html.twig */
class __TwigTemplate_78ace94d003923b30c513592e4003f0e9defa03c453733c8f7b06e4c80a036b6 extends \Twig\Template
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
        $this->loadTemplate("forgot.html.twig", "forgot.html.twig", 1, "1224820431")->display(twig_array_merge($context, ["title" => "Grav Forgot Password"]));
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "forgot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 14,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/login.html.twig' with {title:'Grav Forgot Password'} %}

    {% block form %}
        {% embed 'forms/default/fields.html.twig' with {name: null, fields: form.fields} %}
            {% block inner_markup_field_open %}<div>{% endblock %}
            {% block inner_markup_field_close %}</div>{% endblock %}
        {% endembed %}
        <div class=\"form-actions primary-accent\">
            <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"forgot\"><i class=\"fa fa-paper-plane\"></i> {{ \"PLUGIN_ADMIN.LOGIN_BTN_SEND_INSTRUCTIONS\"|t }}</button>
        </div>
    {% endblock %}

{% endembed %}

", "forgot.html.twig", "/user/plugins/admin/themes/grav/templates/forgot.html.twig");
    }
}


/* forgot.html.twig */
class __TwigTemplate_78ace94d003923b30c513592e4003f0e9defa03c453733c8f7b06e4c80a036b6___1224820431 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/login.html.twig", "forgot.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form($context, array $blocks = [])
    {
        // line 4
        echo "        ";
        $this->loadTemplate("forgot.html.twig", "forgot.html.twig", 4, "1900852981")->display(twig_array_merge($context, ["name" => null, "fields" => $this->getAttribute(($context["form"] ?? null), "fields", [])]));
        // line 8
        echo "        <div class=\"form-actions primary-accent\">
            <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"forgot\"><i class=\"fa fa-paper-plane\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.LOGIN_BTN_SEND_INSTRUCTIONS"), "html", null, true);
        echo "</button>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "forgot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 9,  111 => 8,  108 => 4,  105 => 3,  95 => 1,  32 => 14,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/login.html.twig' with {title:'Grav Forgot Password'} %}

    {% block form %}
        {% embed 'forms/default/fields.html.twig' with {name: null, fields: form.fields} %}
            {% block inner_markup_field_open %}<div>{% endblock %}
            {% block inner_markup_field_close %}</div>{% endblock %}
        {% endembed %}
        <div class=\"form-actions primary-accent\">
            <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"forgot\"><i class=\"fa fa-paper-plane\"></i> {{ \"PLUGIN_ADMIN.LOGIN_BTN_SEND_INSTRUCTIONS\"|t }}</button>
        </div>
    {% endblock %}

{% endembed %}

", "forgot.html.twig", "/user/plugins/admin/themes/grav/templates/forgot.html.twig");
    }
}


/* forgot.html.twig */
class __TwigTemplate_78ace94d003923b30c513592e4003f0e9defa03c453733c8f7b06e4c80a036b6___1900852981 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'inner_markup_field_open' => [$this, 'block_inner_markup_field_open'],
            'inner_markup_field_close' => [$this, 'block_inner_markup_field_close'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return "forms/default/fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/default/fields.html.twig", "forgot.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_inner_markup_field_open($context, array $blocks = [])
    {
        echo "<div>";
    }

    // line 6
    public function block_inner_markup_field_close($context, array $blocks = [])
    {
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "forgot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 6,  190 => 5,  180 => 4,  114 => 9,  111 => 8,  108 => 4,  105 => 3,  95 => 1,  32 => 14,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/login.html.twig' with {title:'Grav Forgot Password'} %}

    {% block form %}
        {% embed 'forms/default/fields.html.twig' with {name: null, fields: form.fields} %}
            {% block inner_markup_field_open %}<div>{% endblock %}
            {% block inner_markup_field_close %}</div>{% endblock %}
        {% endembed %}
        <div class=\"form-actions primary-accent\">
            <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"forgot\"><i class=\"fa fa-paper-plane\"></i> {{ \"PLUGIN_ADMIN.LOGIN_BTN_SEND_INSTRUCTIONS\"|t }}</button>
        </div>
    {% endblock %}

{% endembed %}

", "forgot.html.twig", "/user/plugins/admin/themes/grav/templates/forgot.html.twig");
    }
}
