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

/* index/client/compteClient.html.twig */
class __TwigTemplate_1e6ef37e39c317f80c5f54105a74adbeea355e900fcf6b4053f95913e3eb9770 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "index/client/compteClient.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Espace client | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t <div class=\"container-fluid\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-5\">
                    <h1 class=\"text-center mt-4\">Mes informations</h1>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-6 d-flex flex-column align-items-end\">
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
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>
                    <p>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
                    <p>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mail", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
                    <p>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "adresse", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
                    <p>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "cp", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>
                    <p>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ville", [], "any", false, false, false, 32), "html", null, true);
        echo "</p>
                    <p>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 33), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-12 d-flex justify-content-center mt-3\">
                    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_infos");
        echo "\" class=\"btn btn-info mr-1\">Modifier mes infos</a>
                    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_password");
        echo "\" class=\"btn btn-danger ml-1\">Modifier mon mot de passe</a>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "index/client/compteClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 37,  112 => 36,  106 => 33,  102 => 32,  98 => 31,  94 => 30,  90 => 29,  86 => 28,  82 => 27,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/client/compteClient.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\index\\client\\compteClient.html.twig");
    }
}
