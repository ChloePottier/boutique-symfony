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

/* admin/category/add/newCategory.html.twig */
class __TwigTemplate_006da0b9fb903146a0a3b6c9195a2275ce48d4580097b8218cc4a615718d0bb6 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/category/add/newCategory.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Admin | Ajouter une catégorie | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $this->loadTemplate("includes/adminNavBar.html.twig", "admin/category/add/newCategory.html.twig", 5)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<div class=\"container-fluid \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1> Ajouter ou modifier une catégorie</h1>
                </div>
                <div class=\"col-12 text-right \">
                    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_cat");
        echo "\" class=\"btn btn-danger\" alt=\"retour listing\"> Annuler</a>
                </div>
            </div>
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formCat"] ?? null), 'form_start', ["attr" => ["class" => "row"]]);
        echo "
                ";
        // line 20
        echo "            <div class=\"input-formCat col-12 mb-2\">
                ";
        // line 22
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formCat"] ?? null), "nom", [], "any", false, false, false, 22), 'label', ["label" => "Nom de la catégorie"]);
        echo "
                ";
        // line 24
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formCat"] ?? null), "nom", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formCat"] ?? null), "nom", [], "any", false, false, false, 25), 'errors');
        echo "</span>
                    <div class=\"input-formP submit-formP mb-2 d-flex justify-content-end\">
                        <input type=\"submit\" name=\"\" value=\"Enregistrer\" class=\"btn btn-info btn-submit-form mt-4\">
                    </div>
                ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formCat"] ?? null), 'form_end');
        echo " 
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "admin/category/add/newCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 29,  101 => 25,  96 => 24,  91 => 22,  88 => 20,  84 => 18,  78 => 15,  69 => 8,  65 => 7,  60 => 5,  56 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/category/add/newCategory.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\admin\\category\\add\\newCategory.html.twig");
    }
}
