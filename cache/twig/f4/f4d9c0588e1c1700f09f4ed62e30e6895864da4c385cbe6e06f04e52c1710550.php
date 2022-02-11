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

/* partials/base.html.twig */
class __TwigTemplate_a29314868589a152cef21f7351444f700770ec841a1b9c65a7de1e9fd1fa0ba6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("blocks/base.html.twig", "partials/base.html.twig", 4);
        // line 4
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."blocks/base.html.twig".'" cannot be used as a trait.', 4, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'head' => [$this, 'block_head'],
                'stylesheets' => [$this, 'block_stylesheets'],
                'javascripts' => [$this, 'block_javascripts'],
                'assets' => [$this, 'block_assets'],
                'body_classes' => [$this, 'block_body_classes'],
                'header' => [$this, 'block_header'],
                'lang' => [$this, 'block_lang'],
                'header_navigation' => [$this, 'block_header_navigation'],
                'hero' => [$this, 'block_hero'],
                'body' => [$this, 'block_body'],
                'messages' => [$this, 'block_messages'],
                'footer' => [$this, 'block_footer'],
                'mobile' => [$this, 'block_mobile'],
                'bottom' => [$this, 'block_bottom'],
            ]
        );
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->bodyClassFunc($context, [0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"]);
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "production-mode")) ? (".min.css") : (".css"));
        // line 5
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\">
<head>
";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 108
        echo "
";
        // line 109
        $this->displayBlock('javascripts', $context, $blocks);
        // line 114
        echo "  
";
        // line 115
        $this->displayBlock('assets', $context, $blocks);
        // line 119
        echo "</head>
<body id=\"top\" class=\"";
        // line 120
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
    <div class=\"loader-wrapper\">
    <span class=\"loader\"><span class=\"loader-inner\"></span></span>
    </div>
    <div id=\"page-wrapper\">
    ";
        // line 125
        $this->displayBlock('header', $context, $blocks);
        // line 159
        echo "
    ";
        // line 160
        $this->displayBlock('hero', $context, $blocks);
        // line 161
        echo "
        <section id=\"start\">
        ";
        // line 163
        $this->displayBlock('body', $context, $blocks);
        // line 173
        echo "        </section>

    </div>

    ";
        // line 177
        $this->displayBlock('footer', $context, $blocks);
        // line 180
        echo "
    ";
        // line 181
        $this->displayBlock('mobile', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('bottom', $context, $blocks);
        // line 197
        echo "<script src=\"https://unpkg.com/aos@next/dist/aos.js\"></script>
  <script>
    AOS.init();
  </script>
  <script>
        \$(window).on(\"load\",function(){
          if(getCookie(\"first\") != '1') {
           setCookie(\"first\",\"1\", 0.1);
           location.reload();
          }   
          else{
              \$(\".loader-wrapper\").fadeOut(\"slow\");
          }
        });
    </script>
</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'head');
    }

    // line 8
    public function block_head_deferred($context, array $blocks = [])
    {
        // line 9
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 14
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 14)->display($context);
        // line 15
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/favicon.png"), "html", null, true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\" />
    <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/flickity@2/dist/flickity.min.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">
    <script src=\"/user/themes/darkquark/js/jquerry.min.js\" type=\"text/javascript\"></script>
    <script src=\"https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js\"></script>
    <script src=\"/user/themes/darkquark/js/baffle.min.js\" type=\"text/javascript\"></script>
    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/flickity-fade@1/flickity-fade.css\">
        <!-- JS -->
    <script src=\"https://unpkg.com/flickity-fade@1/flickity-fade.js\"></script>
    <script type=\"text/javascript\">
        (function() {
        emailjs.init(\"user_pYWN0MNSt9Tog66uKwzGi\");
        })();
    </script>
    <script>
    /* *
    User ID user_pYWN0MNSt9Tog66uKwzGi
    Access Token 042b4b342966dc192d53ab63f25913cf
    */
    </script>
    <script type=\"text/javascript\">
        window.onload = function() {
            document.getElementById('contact-form').addEventListener('submit', function(event) {
                event.preventDefault();
                // generate a five digit number for the contact_number variable
                this.contact_number.value = Math.random() * 100000 | 0;
                // these IDs from the previous steps
               if(getCookie(\"send\") == 'sended') {
                   alert(\"Zaczekaj kilka minut przed wysłaniem kolejnej wiadomości\")
               }
               else{
                emailjs.sendForm('service_gml08gh', 'template_lbwkvpr', this)
                    .then(function() {
                        console.log('SUCCESS!');
                        setCookie(\"send\",\"sended\", 5)
                        alert('Wiadomość została wysłana!');
                    }, function(error) {
                        console.log('FAILED...', error);
                        alert('Nie udało się wysłać wiadomości!');
                    });
               }
            });
        }
 function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays * 60 * 1000));
  let expires = \"expires=\"+d.toUTCString();
  document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";
}
function getCookie(cname) {
  let name = cname + \"=\";
  let ca = document.cookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return \"\";
}
function checkCookie() {
  let user = getCookie(\"username\");
  if (user != \"\") {
    alert(\"Welcome again \" + user);
  } else {
    user = prompt(\"Please enter your name:\", \"\");
    if (user != \"\" && user != null) {
      setCookie(\"username\", user, 365);
    }
  }
}
    </script>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 99
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 100
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method");
        // line 101
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method");
        }
        // line 102
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method");
        }
        // line 103
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method");
        // line 104
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 105
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/all.min.css", 1 => 100], "method");
        // line 106
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/line-awesome.min.css", 1 => 100], "method");
    }

    // line 109
    public function block_javascripts($context, array $blocks = [])
    {
        // line 110
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 111
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 112
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 115
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 116
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 117
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 120
    public function block_body_classes($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ($context["body_classes"] ?? null), "html", null, true);
    }

    // line 125
    public function block_header($context, array $blocks = [])
    {
        // line 126
        echo "        <section id=\"header\" class=\"section\">
            <section class=\"container ";
        // line 127
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        ";
        // line 130
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 130)->display($context);
        // line 131
        echo "                    </section>
                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                        ";
        // line 135
        $this->displayBlock('lang', $context, $blocks);
        // line 138
        echo "                        ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 141
        echo "                        </nav>

                        ";
        // line 143
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 144
            echo "                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 144)->display($context);
            echo "</span>
                        ";
        }
        // line 146
        echo "
                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    ";
    }

    // line 135
    public function block_lang($context, array $blocks = [])
    {
        // line 136
        echo "                            ";
        $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 136)->display($context);
        // line 137
        echo "                        ";
    }

    // line 138
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 139
        echo "                            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 139)->display($context);
        // line 140
        echo "                        ";
    }

    // line 160
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 163
    public function block_body($context, array $blocks = [])
    {
        // line 164
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 165
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 166
        $this->displayBlock('messages', $context, $blocks);
        // line 169
        echo "                    ";
        $this->displayBlock("content_surround", $context, $blocks);
        echo "
                </section>
            </section>
        ";
    }

    // line 166
    public function block_messages($context, array $blocks = [])
    {
        // line 167
        echo "                        ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 167);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 168
        echo "                    ";
    }

    // line 177
    public function block_footer($context, array $blocks = [])
    {
        // line 178
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 178)->display($context);
        // line 179
        echo "    ";
    }

    // line 181
    public function block_mobile($context, array $blocks = [])
    {
        // line 182
        echo "    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 185
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 185)->display(twig_array_merge($context, ["mobile" => true]));
        // line 186
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 188
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 188)->display(twig_array_merge($context, ["tree" => true]));
        // line 189
        echo "            </nav>
        </div>
    </div>
    ";
    }

    // line 194
    public function block_bottom($context, array $blocks = [])
    {
        // line 195
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 195,  489 => 194,  482 => 189,  480 => 188,  476 => 186,  474 => 185,  469 => 182,  466 => 181,  462 => 179,  459 => 178,  456 => 177,  452 => 168,  441 => 167,  438 => 166,  429 => 169,  427 => 166,  423 => 165,  420 => 164,  417 => 163,  412 => 160,  408 => 140,  405 => 139,  402 => 138,  398 => 137,  395 => 136,  392 => 135,  376 => 146,  370 => 144,  368 => 143,  364 => 141,  361 => 138,  359 => 135,  353 => 131,  351 => 130,  345 => 127,  342 => 126,  339 => 125,  333 => 120,  326 => 117,  321 => 116,  318 => 115,  308 => 112,  305 => 111,  302 => 110,  299 => 109,  294 => 106,  291 => 105,  288 => 104,  285 => 103,  280 => 102,  275 => 101,  272 => 100,  269 => 99,  183 => 17,  179 => 16,  176 => 15,  174 => 14,  163 => 10,  160 => 9,  157 => 8,  130 => 197,  128 => 194,  125 => 193,  123 => 181,  120 => 180,  118 => 177,  112 => 173,  110 => 163,  106 => 161,  104 => 160,  101 => 159,  99 => 125,  91 => 120,  88 => 119,  86 => 115,  83 => 114,  81 => 109,  78 => 108,  76 => 99,  73 => 98,  71 => 8,  66 => 6,  63 => 5,  61 => 3,  59 => 2,  57 => 1,  25 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %}
{% use 'blocks/base.html.twig' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head deferred %}
    <meta charset=\"utf-8\" />
    <title>{% if page.title %}{{ page.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/flickity@2/dist/flickity.min.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">
    <script src=\"/user/themes/darkquark/js/jquerry.min.js\" type=\"text/javascript\"></script>
    <script src=\"https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js\"></script>
    <script src=\"/user/themes/darkquark/js/baffle.min.js\" type=\"text/javascript\"></script>
    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/flickity-fade@1/flickity-fade.css\">
        <!-- JS -->
    <script src=\"https://unpkg.com/flickity-fade@1/flickity-fade.js\"></script>
    <script type=\"text/javascript\">
        (function() {
        emailjs.init(\"user_pYWN0MNSt9Tog66uKwzGi\");
        })();
    </script>
    <script>
    /* *
    User ID user_pYWN0MNSt9Tog66uKwzGi
    Access Token 042b4b342966dc192d53ab63f25913cf
    */
    </script>
    <script type=\"text/javascript\">
        window.onload = function() {
            document.getElementById('contact-form').addEventListener('submit', function(event) {
                event.preventDefault();
                // generate a five digit number for the contact_number variable
                this.contact_number.value = Math.random() * 100000 | 0;
                // these IDs from the previous steps
               if(getCookie(\"send\") == 'sended') {
                   alert(\"Zaczekaj kilka minut przed wysłaniem kolejnej wiadomości\")
               }
               else{
                emailjs.sendForm('service_gml08gh', 'template_lbwkvpr', this)
                    .then(function() {
                        console.log('SUCCESS!');
                        setCookie(\"send\",\"sended\", 5)
                        alert('Wiadomość została wysłana!');
                    }, function(error) {
                        console.log('FAILED...', error);
                        alert('Nie udało się wysłać wiadomości!');
                    });
               }
            });
        }
 function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays * 60 * 1000));
  let expires = \"expires=\"+d.toUTCString();
  document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";
}
function getCookie(cname) {
  let name = cname + \"=\";
  let ca = document.cookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return \"\";
}
function checkCookie() {
  let user = getCookie(\"username\");
  if (user != \"\") {
    alert(\"Welcome again \" + user);
  } else {
    user = prompt(\"Please enter your name:\", \"\");
    if (user != \"\" && user != null) {
      setCookie(\"username\", user, 365);
    }
  }
}
    </script>
{% endblock head %}

{% block stylesheets %}
    {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
    {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress)  %}{% endif %}
    {% if theme_var('spectre.icons') %}{%  do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
    {% do assets.addCss('theme://css-compiled/theme'~compress) %}
    {% do assets.addCss('theme://css/custom.css') %}
    {% do assets.addCss('theme://css/all.min.css', 100) %}
    {% do assets.addCss('theme://css/line-awesome.min.css', 100) %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 101) %}
    {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
{% endblock %}
  
{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">
    <div class=\"loader-wrapper\">
    <span class=\"loader\"><span class=\"loader-inner\"></span></span>
    </div>
    <div id=\"page-wrapper\">
    {% block header %}
        <section id=\"header\" class=\"section\">
            <section class=\"container {{ grid_size }}\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        {% include 'partials/logo.html.twig' %}
                    </section>
                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                        {% block lang %}
                            {% include 'partials/langswitcher.html.twig' %}
                        {% endblock %}
                        {% block header_navigation %}
                            {% include 'partials/navigation.html.twig' %}
                        {% endblock %}
                        </nav>

                        {% if config.plugins.login.enabled and grav.user.username %}
                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include 'partials/login-status.html.twig' %}</span>
                        {% endif %}

                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    {% endblock %}

    {% block hero %}{% endblock %}

        <section id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container {{ grid_size }}\">
                    {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {{ block('content_surround') }}
                </section>
            </section>
        {% endblock %}
        </section>

    </div>

    {% block footer %}
        {% include 'partials/footer.html.twig' %}
    {% endblock %}

    {% block mobile %}
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include 'partials/logo.html.twig' with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>
    {% endblock %}

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}
<script src=\"https://unpkg.com/aos@next/dist/aos.js\"></script>
  <script>
    AOS.init();
  </script>
  <script>
        \$(window).on(\"load\",function(){
          if(getCookie(\"first\") != '1') {
           setCookie(\"first\",\"1\", 0.1);
           location.reload();
          }   
          else{
              \$(\".loader-wrapper\").fadeOut(\"slow\");
          }
        });
    </script>
</body>
</html>
", "partials/base.html.twig", "/user/themes/darkquark/templates/partials/base.html.twig");
    }
}
