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

/* admin/product/createUpdate.html.twig */
class __TwigTemplate_5630054849b235ec4a287e0af5b096fc5534b072a4b144db6969bb440a888f54 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/createUpdate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/createUpdate.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/product/createUpdate.html.twig", 1);
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

        echo "Ajouter un produit | Admin | ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "


\t<div class=\"container-fluid \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1> Ajouter ou modifier un produit</h1>
                </div>
            </div>
                    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 16, $this->source); })()), 'form_start', ["attr" => ["class" => "row"]]);
        echo "
                        ";
        // line 18
        echo "                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 20
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'label', ["label" => "Nom du produit"]);
        echo "
                        ";
        // line 22
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'errors');
        echo "</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 27
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 27, $this->source); })()), "image", [], "any", false, false, false, 27), 'label', ["label" => "Image"]);
        echo "
                        ";
        // line 29
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 29, $this->source); })()), "image", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 30, $this->source); })()), "image", [], "any", false, false, false, 30), 'errors');
        echo "</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 34
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), 'label', ["label" => "Decription"]);
        echo "
                        ";
        // line 36
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), 'errors');
        echo "</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 41
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 41, $this->source); })()), "category", [], "any", false, false, false, 41), 'label', ["label" => "Catégorie du produit"]);
        echo "
                        ";
        // line 43
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 43, $this->source); })()), "category", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 44, $this->source); })()), "category", [], "any", false, false, false, 44), 'errors');
        echo "</span>
                    </div>
                    <div class=\"input-formP col-12 mb-2\">
                        ";
        // line 48
        echo "
                        <label class=\"d-flex justify-content-end\">
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 50, $this->source); })()), "isPublished", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "filled-in "]]);
        echo "
                            <span class=\"checkbox-published ml-1\">Publier</span>
                        </label>
                        <span id=\"msg-errors\" class=\"error text-danger\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 53, $this->source); })()), "isPublished", [], "any", false, false, false, 53), 'errors');
        echo "</span>
                    </div>

                        <div class=\"input-article submit-article col-12 mb-2 d-flex justify-content-end\">
                            <input type=\"submit\" name=\"\" value=\"Enregistrer\" class=\"btn btn-dark btn-submit-article\">
                        </div>
                                           
                    ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 60, $this->source); })()), 'form_end');
        echo "

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/product/createUpdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 60,  182 => 53,  176 => 50,  172 => 48,  166 => 44,  161 => 43,  156 => 41,  150 => 37,  145 => 36,  140 => 34,  134 => 30,  129 => 29,  124 => 27,  118 => 23,  113 => 22,  108 => 20,  105 => 18,  101 => 16,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter un produit | Admin | {{ parent() }}{% endblock %}

{% block content %}



\t<div class=\"container-fluid \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1> Ajouter ou modifier un produit</h1>
                </div>
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

                        <label class=\"d-flex justify-content-end\">
                            {{ form_widget(formP.isPublished, {'attr': {'class': 'filled-in '}}) }}
                            <span class=\"checkbox-published ml-1\">Publier</span>
                        </label>
                        <span id=\"msg-errors\" class=\"error text-danger\">{{ form_errors(formP.isPublished) }}</span>
                    </div>

                        <div class=\"input-article submit-article col-12 mb-2 d-flex justify-content-end\">
                            <input type=\"submit\" name=\"\" value=\"Enregistrer\" class=\"btn btn-dark btn-submit-article\">
                        </div>
                                           
                    {{form_end(formP)}}

        </div>
    </div>
{% endblock %}

", "admin/product/createUpdate.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\admin\\product\\createUpdate.html.twig");
    }
}
