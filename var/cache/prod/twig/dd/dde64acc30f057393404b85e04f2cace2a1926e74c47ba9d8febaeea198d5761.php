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

/* order/order.html.twig */
class __TwigTemplate_8c6ff08834db54a52cacfff8081a3ceb28c54e3a57b488ee63ccfc0f48e946b8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Commande";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "    
<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row  mt-5 mb-5\">
            <div class=\"col-12\">
                <h1 class=\"\">Commande</h1>
            </div>
        </div>        
        <div class=\"row\">
            <div class=\"col-lg-6\">

                <h3>Adresse de facturation</h3>
                <p> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", false, false, false, 17), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", false, false, false, 17), "html", null, true);
        echo " </p>
                <p> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "adresse", [], "any", false, false, false, 18), "html", null, true);
        echo " </p>
                <p> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ville", [], "any", false, false, false, 19), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "cp", [], "any", false, false, false, 19), "html", null, true);
        echo " </p>
            </div>
            <div class=\"col-lg-6\">

                <h3>Adresse de livraison</h3>
                <p> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", false, false, false, 24), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", false, false, false, 24), "html", null, true);
        echo " </p>
                <p> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "adresse", [], "any", false, false, false, 25), "html", null, true);
        echo " </p>
                <p> ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ville", [], "any", false, false, false, 26), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "cp", [], "any", false, false, false, 26), "html", null, true);
        echo " </p>
            </div>
        </div>
        <div class=\"row mt-5\">  
            <div class=\"col-12\">
                <h2 class=\"\">Récapitulatif de la commande</h2>
            </div>
            <div class=\"col-12\">
                <table class=\"table \">
                    <thead  class=\"thead-light  title-listing\">
                        <tr>
                            <th colspan=\"2\">Produit</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 45
            echo "                        <tr>
                            <td><img src=\"";
            // line 46
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 46), "image", [], "any", false, false, false, 46)), "html", null, true);
            echo "\" alt=\"items\" width=\"50\" height=\"50\"></td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 47), "nom", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 48), "prix", [], "any", false, false, false, 48), "html", null, true);
            echo "€</td>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 50), "prix", [], "any", false, false, false, 50) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 50)), "html", null, true);
            echo "€</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                    </tbody>
                </table>
                <div class=\"d-flex justify-content-between\">
                    <a class=\"text-decoration-none add-category\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><i class=\"fas fa-arrow-left mr-2\"></i>Retour à la boutique</a>
                    <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_confirm");
        echo "\" class=\"btn btn-info \">Valider la commande</a>
                </div> 
            </div>
        </div>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "order/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  161 => 56,  156 => 53,  147 => 50,  143 => 49,  139 => 48,  135 => 47,  131 => 46,  128 => 45,  124 => 44,  101 => 26,  97 => 25,  91 => 24,  81 => 19,  77 => 18,  71 => 17,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/order.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\order\\order.html.twig");
    }
}
