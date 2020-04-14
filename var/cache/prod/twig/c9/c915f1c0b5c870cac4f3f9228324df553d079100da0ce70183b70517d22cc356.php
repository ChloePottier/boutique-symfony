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

/* admin/product/add/newProduct.html.twig */
class __TwigTemplate_f6724a65e5571b9efb1eadbd528d38ae054d084345c4a5d4ee803b347a3a7009 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/product/add/newProduct.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Admin | Ajouter un produit | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $this->loadTemplate("includes/adminNavBar.html.twig", "admin/product/add/newProduct.html.twig", 5)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t<div class=\"container-fluid \">
        <div class=\"container\">
            <div class=\"row  mt-5 mb-3\">
                <div class=\"col-12\">
                    <h1>Ajouter ou modifier un produit</h1>
                </div>
                <div class=\"col-12 text-right \">
                    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_product");
        echo "\" class=\"btn btn-danger\" alt=\"retour listing\"> Annuler</a>
                </div>
            </div>
                ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formP"] ?? null), 'form_start', ["attr" => ["class" => "row"]]);
        echo "
                        ";
        // line 20
        echo "                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 22
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formP"] ?? null), "nom", [], "any", false, false, false, 22), 'label', ["attr" => ["class" => "font-weight-bold"], "label" => "Nom du produit"]);
        echo "
                        ";
        // line 24
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formP"] ?? null), "nom", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formP"] ?? null), "nom", [], "any", false, false, false, 25), 'errors');
        echo "</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 29
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formP"] ?? null), "image", [], "any", false, false, false, 29), 'label', ["label" => "Image"]);
        echo "
                        ";
        // line 31
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formP"] ?? null), "image", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formP"] ?? null), "image", [], "any", false, false, false, 32), 'errors');
        echo "</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 36
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formP"] ?? null), "description", [], "any", false, false, false, 36), 'label', ["label" => "Decription"]);
        echo "
                        ";
        // line 38
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formP"] ?? null), "description", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formP"] ?? null), "description", [], "any", false, false, false, 39), 'errors');
        echo "</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 43
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formP"] ?? null), "category", [], "any", false, false, false, 43), 'label', ["label" => "Catégorie du produit"]);
        echo "
                        ";
        // line 45
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formP"] ?? null), "category", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span id=\"msg-errors\" class=\"error text-da, {'attr': {'class':'form-control'}}nger\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formP"] ?? null), "category", [], "any", false, false, false, 46), 'errors');
        echo "</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 50
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formP"] ?? null), "prix", [], "any", false, false, false, 50), 'label', ["label" => "Prix"]);
        echo "
                        ";
        // line 52
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formP"] ?? null), "prix", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formP"] ?? null), "category", [], "any", false, false, false, 53), 'errors');
        echo "</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 57
        echo "
                        <label class=\"d-flex justify-content-end\">
                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formP"] ?? null), "isPublished", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "filled-in "]]);
        echo "
                            <span class=\"checkbox-published ml-1\">Publier</span>
                        </label>
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formP"] ?? null), "isPublished", [], "any", false, false, false, 62), 'errors');
        echo "</span>
                    </div>

                        <div class=\"input-formP submit-formP col-12 mb-2 d-flex justify-content-end\">
                            <input type=\"submit\" name=\"\" value=\"Enregistrer\" class=\"btn btn-info btn-submit-form\">
                        </div>
                                           
                    ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formP"] ?? null), 'form_end');
        echo "
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "admin/product/add/newProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 69,  181 => 62,  175 => 59,  171 => 57,  165 => 53,  160 => 52,  155 => 50,  149 => 46,  144 => 45,  139 => 43,  133 => 39,  128 => 38,  123 => 36,  117 => 32,  112 => 31,  107 => 29,  101 => 25,  96 => 24,  91 => 22,  88 => 20,  84 => 18,  78 => 15,  69 => 8,  65 => 7,  60 => 5,  56 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/product/add/newProduct.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\admin\\product\\add\\newProduct.html.twig");
    }
}
