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
class __TwigTemplate_64291756e7c1c6cca465a78005d93e7e90974ebb4192596ccc1bb47023fb1ce1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/add/newProduct.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/add/newProduct.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/product/add/newProduct.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Admin | Ajouter un produit | ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "    ";
        $this->loadTemplate("includes/adminNavBar.html.twig", "admin/product/add/newProduct.html.twig", 5)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["class" => "row"]]);
        echo "
                        ";
        // line 20
        echo "                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 22
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'label', ["attr" => ["class" => "font-weight-bold"], "label" => "Nom du produit"]);
        echo "
                        ";
        // line 24
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'errors');
        echo "</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 29
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 29, $this->source); })()), "image", [], "any", false, false, false, 29), 'label', ["label" => "Image"]);
        echo "
                        ";
        // line 31
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 31, $this->source); })()), "image", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 32, $this->source); })()), "image", [], "any", false, false, false, 32), 'errors');
        echo "</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 36
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), 'label', ["label" => "Decription"]);
        echo "
                        ";
        // line 38
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), 'errors');
        echo "</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 43
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 43, $this->source); })()), "category", [], "any", false, false, false, 43), 'label', ["label" => "Catégorie du produit"]);
        echo "
                        ";
        // line 45
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 45, $this->source); })()), "category", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span id=\"msg-errors\" class=\"error text-da, {'attr': {'class':'form-control'}}nger\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 46, $this->source); })()), "category", [], "any", false, false, false, 46), 'errors');
        echo "</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 50
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 50, $this->source); })()), "prix", [], "any", false, false, false, 50), 'label', ["label" => "Prix"]);
        echo "
                        ";
        // line 52
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 52, $this->source); })()), "prix", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 53, $this->source); })()), "category", [], "any", false, false, false, 53), 'errors');
        echo "</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 57
        echo "
                        <label class=\"d-flex justify-content-end\">
                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 59, $this->source); })()), "isPublished", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "filled-in "]]);
        echo "
                            <span class=\"checkbox-published ml-1\">Publier</span>
                        </label>
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 62, $this->source); })()), "isPublished", [], "any", false, false, false, 62), 'errors');
        echo "</span>
                    </div>

                        <div class=\"input-formP submit-formP col-12 mb-2 d-flex justify-content-end\">
                            <input type=\"submit\" name=\"\" value=\"Enregistrer\" class=\"btn btn-dark btn-submit-form\">
                        </div>
                                           
                    ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 69, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  233 => 69,  223 => 62,  217 => 59,  213 => 57,  207 => 53,  202 => 52,  197 => 50,  191 => 46,  186 => 45,  181 => 43,  175 => 39,  170 => 38,  165 => 36,  159 => 32,  154 => 31,  149 => 29,  143 => 25,  138 => 24,  133 => 22,  130 => 20,  126 => 18,  120 => 15,  111 => 8,  101 => 7,  90 => 5,  80 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin | Ajouter un produit | {{ parent() }}{% endblock %}
{% block header %}
    {% include \"includes/adminNavBar.html.twig\" %}
{% endblock %}
{% block content %}
\t<div class=\"container-fluid \">
        <div class=\"container\">
            <div class=\"row  mt-5 mb-3\">
                <div class=\"col-12\">
                    <h1>Ajouter ou modifier un produit</h1>
                </div>
                <div class=\"col-12 text-right \">
                    <a href=\"{{ path('liste_product')}}\" class=\"btn btn-danger\" alt=\"retour listing\"> Annuler</a>
                </div>
            </div>
                {{form_start(formP, {'attr': {'class':'row'}})}}
                        {# {{form_widget(formP)}} #}
                    <div class=\"input-formP col-12 mb-2\">
                        {# Label #}
                        {{ form_label(formP.nom, 'Nom du produit', {'attr': {'class':'font-weight-bold'}}) }}
                        {# Input title class input-title #}
                        {{form_widget(formP.nom, {'attr': {'class':'form-control'}})}}
                        <span id=\"msg-errors\" class=\"error text-danger\">{{ form_errors(formP.nom) }}</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        {# Label #}
                        {{ form_label(formP.image, 'Image') }}
                        {# Input title class input-title #}
                        {{form_widget(formP.image, {'attr': {'class':'form-control'}})}}
                        <span id=\"msg-errors\" class=\"error text-danger\">{{ form_errors(formP.image) }}</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        {# Label #}
                        {{ form_label(formP.description, 'Decription') }}
                        {# Input title class input-title #}
                        {{form_widget(formP.description, {'attr': {'class':'form-control'}})}}
                        <span id=\"msg-errors\" class=\"error text-danger\">{{ form_errors(formP.description) }}</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        {# Label #}
                        {{ form_label(formP.category, 'Catégorie du produit') }}
                        {# Input title class input-title #}
                        {{form_widget(formP.category, {'attr': {'class':'form-control'}})}}
                        <span id=\"msg-errors\" class=\"error text-da, {'attr': {'class':'form-control'}}nger\">{{ form_errors(formP.category) }}</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        {# Label #}
                        {{ form_label(formP.prix, 'Prix') }}
                        {# Input title class input-title #}
                        {{form_widget(formP.prix, {'attr': {'class':'form-control'}})}}
                        <span id=\"msg-errors\" class=\"error text-danger\">{{ form_errors(formP.category) }}</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        {# Label #}

                        <label class=\"d-flex justify-content-end\">
                            {{ form_widget(formP.isPublished, {'attr': {'class': 'filled-in '}}) }}
                            <span class=\"checkbox-published ml-1\">Publier</span>
                        </label>
                        <span id=\"msg-errors\" class=\"error text-danger\">{{ form_errors(formP.isPublished) }}</span>
                    </div>

                        <div class=\"input-formP submit-formP col-12 mb-2 d-flex justify-content-end\">
                            <input type=\"submit\" name=\"\" value=\"Enregistrer\" class=\"btn btn-dark btn-submit-form\">
                        </div>
                                           
                    {{form_end(formP)}}
        </div>
    </div>


{% endblock %}", "admin/product/add/newProduct.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\admin\\product\\add\\newProduct.html.twig");
    }
}
