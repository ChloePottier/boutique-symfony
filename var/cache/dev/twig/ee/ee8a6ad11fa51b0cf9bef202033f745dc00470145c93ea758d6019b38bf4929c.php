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
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1>Ajouter ou modifier un produit</h1>
                </div>
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["class" => "row"]]);
        echo "
                        ";
        // line 16
        echo "                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 18
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), 'label', ["label" => "Nom du produit"]);
        echo "
                        ";
        // line 20
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'errors');
        echo "</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 25
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 25, $this->source); })()), "image", [], "any", false, false, false, 25), 'label', ["label" => "Image"]);
        echo "
                        ";
        // line 27
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 27, $this->source); })()), "image", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 28, $this->source); })()), "image", [], "any", false, false, false, 28), 'errors');
        echo "</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 32
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), 'label', ["label" => "Decription"]);
        echo "
                        ";
        // line 34
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), 'errors');
        echo "</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 39
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 39, $this->source); })()), "category", [], "any", false, false, false, 39), 'label', ["label" => "Catégorie du produit"]);
        echo "
                        ";
        // line 41
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 41, $this->source); })()), "category", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 42, $this->source); })()), "category", [], "any", false, false, false, 42), 'errors');
        echo "</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 46
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 46, $this->source); })()), "prix", [], "any", false, false, false, 46), 'label', ["label" => "Prix"]);
        echo "
                        ";
        // line 48
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 48, $this->source); })()), "prix", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 49, $this->source); })()), "category", [], "any", false, false, false, 49), 'errors');
        echo "</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 53
        echo "
                        <label class=\"d-flex justify-content-end\">
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 55, $this->source); })()), "isPublished", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "filled-in "]]);
        echo "
                            <span class=\"checkbox-published ml-1\">Publier</span>
                        </label>
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 58, $this->source); })()), "isPublished", [], "any", false, false, false, 58), 'errors');
        echo "</span>
                    </div>

                        <div class=\"input-formP submit-formP col-12 mb-2 d-flex justify-content-end\">
                            <input type=\"submit\" name=\"\" value=\"Enregistrer\" class=\"btn btn-dark btn-submit-form\">
                        </div>
                                           
                    ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 65, $this->source); })()), 'form_end');
        echo "


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
        return array (  226 => 65,  216 => 58,  210 => 55,  206 => 53,  200 => 49,  195 => 48,  190 => 46,  184 => 42,  179 => 41,  174 => 39,  168 => 35,  163 => 34,  158 => 32,  152 => 28,  147 => 27,  142 => 25,  136 => 21,  131 => 20,  126 => 18,  123 => 16,  119 => 14,  111 => 8,  101 => 7,  90 => 5,  80 => 4,  60 => 3,  37 => 1,);
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
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1>Ajouter ou modifier un produit</h1>
                </div>
                {{form_start(formP, {'attr': {'class':'row'}})}}
                        {# {{form_widget(formP)}} #}
                    <div class=\"input-formP col-12 mb-2\">
                        {# Label #}
                        {{ form_label(formP.nom, 'Nom du produit') }}
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
                        <span id=\"msg-errors\" class=\"error text-danger\">{{ form_errors(formP.category) }}</span>
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


{% endblock %}", "admin/product/add/newProduct.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\admin\\product\\add\\newProduct.html.twig");
    }
}
