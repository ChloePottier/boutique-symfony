<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/user/detailsUser.html.twig */
class __TwigTemplate_b881cb6f88b1bf97bcbd1e9834912e60d2f10bf8147ab41449d0f71d68b2d1be extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "admin/user/detailsUser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Infos Clients | Admin | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $this->loadTemplate("includes/adminNavBar.html.twig", "admin/user/detailsUser.html.twig", 5)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
<div class=\"container text-center\">
    <h1 class=\"text-center mt-4\">Informations Clients</h1>

    <div class=\"row\">
        <div class=\"col-6 d-flex flex-column align-items-end font-weight-bold\">
            <p>Nom</p>
            <p>Prénom</p>
            <p>Mail</p>
            <p>Adresse Postale</p>
            <p>Code Postal</p>
            <p>Ville</p>
            <p>Téléphone</p>
        </div>
        
        <div class=\"col-6 d-flex flex-column align-items-start\">
         
            <p>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
            <p>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
            <p>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mail", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>
            <p>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "adresse", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
            <p>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "cp", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
            <p>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ville", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
            <p>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>
        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "admin/user/detailsUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 31,  108 => 30,  104 => 29,  100 => 28,  96 => 27,  92 => 26,  88 => 25,  69 => 8,  65 => 7,  60 => 5,  56 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/user/detailsUser.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\admin\\user\\detailsUser.html.twig");
    }
}
