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

/* admin/order/order.html.twig */
class __TwigTemplate_d550066eae20af1df2598dd41a3fd69be494ce160d1c3e2292d57a8f3e3437f7 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "admin/order/order.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Admin | Listing des commandes | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->loadTemplate("includes/adminNavBar.html.twig", "admin/order/order.html.twig", 6)->display($context);
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
\t<div class=\"container-fluid \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1>Listing des commandes</h1>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-6 d-flex justify-content-start\">
                    <a class=\"text-decoration-none add-category\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\"><i class=\"fas fa-arrow-left mr-2\"></i>Retour au Dashboard de l'admin</a>
                </div>
                <table class=\"table table-hover mt-3 text col-12\">
                        <thead class=\"thead-dark  title-listing\">
                            <tr>
                                <th class=\"text-center\">N° de commande</th>
                                <th class=\"text-center\">Nom client</th>
                                <th class=\"text-center\">Prénom client</th>
                                <th class=\"text-center\">Date de la commande</th>
                                <th class=\"text-center\">Total</th>
                                <th class=\"text-center\">Détails</th>

                            </tr>
                        </thead>
                            
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 35
            echo "                        
                        <tr>
                            <td class=\"text-center font-weight-bold\">n° ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                            <td class=\"text-center font-weight-bold\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "User", [], "any", false, false, false, 38), "nom", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                            <td class=\"text-center font-weight-bold\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "User", [], "any", false, false, false, 39), "prenom", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                            <td class=\"text-center font-weight-bold\">";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "date", [], "any", false, false, false, 40), "d/m/Y"), "html", null, true);
            echo "</td> 
                            <td class=\"text-center font-weight-bold\">total ???</td>                          
                            <td class=\"text-center font-weight-bold\">
                                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details_order_user", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . "show.svg")), "html", null, true);
            echo "\" width=\"40\" height=\"40\" alt=\"détails\"/></a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    </table>
            </div>
            
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "admin/order/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 47,  125 => 43,  119 => 40,  115 => 39,  111 => 38,  107 => 37,  103 => 35,  99 => 34,  81 => 19,  69 => 9,  65 => 8,  60 => 6,  56 => 5,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/order/order.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\admin\\order\\order.html.twig");
    }
}
