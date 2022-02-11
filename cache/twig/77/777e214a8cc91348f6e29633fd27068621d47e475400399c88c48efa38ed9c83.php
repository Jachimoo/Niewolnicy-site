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

/* @Page:/user/pages/05.kontakt/_mainhero2 */
class __TwigTemplate_c35aa733a4788cb3f5a06861e49e4c6c94626d0ac6818bc5ff07b431f48c727b extends \Twig\Template
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
        echo "
<section id=\"\" class=\"section modular-hero hero hero-fullscreen \" style=\"background-image: url('/user/pages/05.kontakt/_mainhero2/JSJJ6371-1-min_11zon (3)_11zon.jpg');\">
    <div class=\"image-overlay\"></div>
    <section class=\"container grid-xl\" style=\"text-align: center\">
        <div class=\"contacts_container\" data-aos=\"fade-in\" data-aos-duration=\"10\">
    <div class=\"dane\">
    <h4>Dane kontaktowe:</h4>
    Telefon: 662 175 567 <br>
    E-mail: niewolnicysystemu@gmail.com 
    </div>
    <form id=\"contact-form\">
        <h4>Formularz kontaktowy</h4>
        <input type=\"hidden\" name=\"contact_number\">
        <input type=\"text\"  class=\"form-input\" name=\"user_name\" placeholder=\"Imię i nazwisko\" required> <br>
        <input type=\"email\" class=\"form-input\" name=\"user_email\" placeholder=\"Adres email\" required><br>
        <textarea name=\"message\" class=\"form-input msg\" maxlength=\"1000\" minlength=\"25\" placeholder=\"Wiadomość...\" required></textarea>
        <input type=\"submit\" class=\"btn btn-lg mybtn\" value=\"Wyślij\"> <br>
    </form>
</div>
<style>
   .contacts_container{
      background-color: #181a1bf1 ;
      padding: 10px;
      align-items: center;
      width: 50%;
      margin-left: 25%;
      margin-top: -5%;
      height: 60%; 
      border-radius: 5px;
      box-shadow: rgba(0, 0, 0, 0.753) 0px 8px 16px 0px, rgba(0, 0, 0, 0.712) 8px 0px 16px 0px;
      border:  #35393D 1px solid;
      border-radius: 5px;
    }
    textarea.msg 
    {
        height: 30vh;
    }   
    .dane {
        margin-top: -35px;
    }
    .mybtn{
        margin-top: 2%;
    }
    .form-input{
        resize: none;
        width: 80%;
        margin-left: 10% ;
        margin-right: 10%;
    }
    @media only screen and (max-width: 1250px) {
  .contacts_container{
      width: 75%;
      margin-left: 12.5%;
  }
}
</style>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:/user/pages/05.kontakt/_mainhero2";
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
        return new Source("
<section id=\"\" class=\"section modular-hero hero hero-fullscreen \" style=\"background-image: url('/user/pages/05.kontakt/_mainhero2/JSJJ6371-1-min_11zon (3)_11zon.jpg');\">
    <div class=\"image-overlay\"></div>
    <section class=\"container grid-xl\" style=\"text-align: center\">
        <div class=\"contacts_container\" data-aos=\"fade-in\" data-aos-duration=\"10\">
    <div class=\"dane\">
    <h4>Dane kontaktowe:</h4>
    Telefon: 662 175 567 <br>
    E-mail: niewolnicysystemu@gmail.com 
    </div>
    <form id=\"contact-form\">
        <h4>Formularz kontaktowy</h4>
        <input type=\"hidden\" name=\"contact_number\">
        <input type=\"text\"  class=\"form-input\" name=\"user_name\" placeholder=\"Imię i nazwisko\" required> <br>
        <input type=\"email\" class=\"form-input\" name=\"user_email\" placeholder=\"Adres email\" required><br>
        <textarea name=\"message\" class=\"form-input msg\" maxlength=\"1000\" minlength=\"25\" placeholder=\"Wiadomość...\" required></textarea>
        <input type=\"submit\" class=\"btn btn-lg mybtn\" value=\"Wyślij\"> <br>
    </form>
</div>
<style>
   .contacts_container{
      background-color: #181a1bf1 ;
      padding: 10px;
      align-items: center;
      width: 50%;
      margin-left: 25%;
      margin-top: -5%;
      height: 60%; 
      border-radius: 5px;
      box-shadow: rgba(0, 0, 0, 0.753) 0px 8px 16px 0px, rgba(0, 0, 0, 0.712) 8px 0px 16px 0px;
      border:  #35393D 1px solid;
      border-radius: 5px;
    }
    textarea.msg 
    {
        height: 30vh;
    }   
    .dane {
        margin-top: -35px;
    }
    .mybtn{
        margin-top: 2%;
    }
    .form-input{
        resize: none;
        width: 80%;
        margin-left: 10% ;
        margin-right: 10%;
    }
    @media only screen and (max-width: 1250px) {
  .contacts_container{
      width: 75%;
      margin-left: 12.5%;
  }
}
</style>
    </section>
</section>
", "@Page:/user/pages/05.kontakt/_mainhero2", "");
    }
}
