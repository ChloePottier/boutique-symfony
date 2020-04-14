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

/* panier/panier.html.twig */
class __TwigTemplate_7e834f752dc8948c16230f033f59be4961533d89120f357f20db5e792229c3c1 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "panier/panier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Détails du panier | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<div class=\"container-fluid \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1>Détails du panier</h1>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    ";
        // line 15
        if (1 === twig_compare(twig_length_filter($this->env, ($context["items"] ?? null)), 0)) {
            // line 16
            echo "                    <table class=\"table\">
                        <thead class=\"thead-light  title-listing\">
                            <tr>
                                <th colspan=\"2\">Produit</th>
                                <th>Prix</th>
                                <th>Quantité</th>
                                <th>Supprimer</th>
                                <th>Total</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 29
                echo "                            <tr>
                                <td><img src=\"";
                // line 30
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 30), "image", [], "any", false, false, false, 30)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 30), "nom", [], "any", false, false, false, 30), "html", null, true);
                echo "\" width=\"50\" height=\"50\"></td>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 31), "nom", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                                <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 32), "prix", [], "any", false, false, false, 32), "html", null, true);
                echo " €</td>
                                <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                                <td>
                                    <a href=\" ";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo " \" class=\"btn btn-danger btn-sm\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                </td>
                                <td>";
                // line 39
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 39), "prix", [], "any", false, false, false, 39) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 39)), "html", null, true);
                echo " €</td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                        </tbody>
                        <tfoot>
                            <tr class=\"\">

                                <td colspan=\"5\" class=\"font-weight-bold text-right\">Total :</td>
                                <td class=\"font-weight-bold \">
                                    ";
            // line 49
            echo "                                    ";
            echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
            echo " €
                                </td>
                            </tr>
                            
                        </tfoot>
                    </table>
                    <div class=\"d-flex justify-content-between\">
                            <a class=\"text-decoration-none add-category\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\"><i class=\"fas fa-arrow-left mr-2\"></i>Retour à la boutique</a>
                            <a href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
            echo "\" class=\"btn btn-info \">Valider mon panier</a>
                    </div>
                    
                    ";
        } else {
            // line 61
            echo "                    <h2 class=\"text-center mt-5\">Votre panier est vide !  </h2>                         
                    <div class=\"d-flex justify-content-center mt-3\">
                        <a class=\"btn-shopping btn btn-outline-info\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\">Commencez votre shopping</a>
                    </div>                   
                    ";
        }
        // line 66
        echo "                </div>

            </div>
                    
        </div>
            
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "panier/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 66,  162 => 63,  158 => 61,  151 => 57,  147 => 56,  136 => 49,  128 => 42,  119 => 39,  112 => 35,  107 => 33,  103 => 32,  99 => 31,  93 => 30,  90 => 29,  86 => 28,  72 => 16,  70 => 15,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "panier/panier.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\panier\\panier.html.twig");
    }
}
