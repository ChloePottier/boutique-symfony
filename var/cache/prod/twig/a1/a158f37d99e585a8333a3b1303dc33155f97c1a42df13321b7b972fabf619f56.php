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

/* index/client/detailsOrder.html.twig */
class __TwigTemplate_1fe0e7cd162f2f3ce48d856654c986f21efa3ff690b26d5821a65bded10e17d2 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "index/client/detailsOrder.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Espace client | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t <div class=\"container-fluid\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-5\">
                    <h1 class=\"text-center mt-4\">Mes informations</h1>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-6 d-flex flex-column align-items-end\">
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["details"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 18
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "productId", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18), "html", null, true);
            echo "
                        ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "quantity", [], "any", false, false, false, 19), "html", null, true);
            echo "
                        ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "price", [], "any", false, false, false, 20), "html", null, true);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                </div>
            </div>
                    
    </div>

";
    }

    public function getTemplateName()
    {
        return "index/client/detailsOrder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 22,  84 => 20,  80 => 19,  75 => 18,  71 => 17,  59 => 7,  55 => 6,  47 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/client/detailsOrder.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\index\\client\\detailsOrder.html.twig");
    }
}
