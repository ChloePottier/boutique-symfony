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

/* order/orderConfirm.html.twig */
class __TwigTemplate_dd9afc59333a71205f8e3ae0d652869ce86c40f6af197970221d6ae569673a75 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/orderConfirm.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Panier";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row  mt-5 mb-5 text-center\">
            <div class=\"col-12\">
                <h1 class=\"\">Votre commande est validée !</h1>
            </div>
        </div>  
        <div class=\"row  mt-5 mb-5 text-center\">
            <div class=\"col-12\">
                <p>Merci pour votre commande, ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 15), "nom", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
                 <div class=\"\">
                    <a class=\"text-decoration-none add-category mt-3 mr-5\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><i class=\"fas fa-arrow-left mr-2\"></i>Retour à la boutique</a>
                    <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte");
        echo "\" class=\"btn btn-info ml-5\">Voir mes commandes</a>
                </div>         
            </div>
        </div>  
    </div>
</div>
";
        // line 27
        echo "
   

";
    }

    public function getTemplateName()
    {
        return "order/orderConfirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  78 => 18,  74 => 17,  69 => 15,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/orderConfirm.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\order\\orderConfirm.html.twig");
    }
}
