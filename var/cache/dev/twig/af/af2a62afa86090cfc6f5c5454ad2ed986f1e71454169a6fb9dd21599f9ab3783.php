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

/* index/client/updateInfosClient.html.twig */
class __TwigTemplate_28076ae5ba1ab6811910534954ecb7012567a9e2d1641d2efb02451d69a68b4a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/client/updateInfosClient.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/client/updateInfosClient.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/client/updateInfosClient.html.twig", 1);
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

        echo " Espace client | ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 mt-5 mb-3\">
                <h1 class=\"form-title\">Modifier mes infos</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12 d-flex justify-content-start\">
                <a class=\"text-decoration-none add-category\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte");
        echo "\"><i class=\"fas fa-arrow-left mr-2\"></i>Retour au détail de mon compte</a>
            </div>
            <div class=\"col-12 d-flex justify-content-center form-modif-infos\">
                ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        echo "

                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"fas fa-at\"></i> </label>
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "mail", [], "any", false, false, false, 21), 'widget', ["attr" => ["placeholder" => "E-mail", "class" => "ml-2"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"far fa-address-card\"></i> </label>
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'widget', ["attr" => ["placeholder" => "Nom", "class" => "ml-2"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"far fa-address-card\"></i> </label>
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "prenom", [], "any", false, false, false, 29), 'widget', ["attr" => ["placeholder" => "Prénom", "class" => "ml-2"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"fas fa-map-marker-alt\"></i> </label>
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "adresse", [], "any", false, false, false, 33), 'widget', ["attr" => ["placeholder" => "Adresse postale", "class" => "ml-2"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"fas fa-map-marker-alt\"></i> </label>
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "ville", [], "any", false, false, false, 37), 'widget', ["attr" => ["placeholder" => "Ville", "class" => "ml-2"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"fas fa-map-marker-alt\"></i> </label>
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "cp", [], "any", false, false, false, 41), 'widget', ["attr" => ["placeholder" => "Code Postal", "class" => "ml-2"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"fas fa-mobile-alt\"></i> </label>
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "phone", [], "any", false, false, false, 45), 'widget', ["attr" => ["placeholder" => "Téléphone", "class" => "ml-2"], "label" => false]);
        echo "
                    </div>
                    <div class=\"mb-2 d-flex justify-content-center\">
                        <input type=\"submit\" value=\"Modifier\" class=\"btn btn-info\">
                    </div>
                ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index/client/updateInfosClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 50,  155 => 45,  148 => 41,  141 => 37,  134 => 33,  127 => 29,  120 => 25,  113 => 21,  106 => 17,  100 => 14,  89 => 5,  79 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Espace client | {{ parent() }}{% endblock %}
{% block content %}
<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 mt-5 mb-3\">
                <h1 class=\"form-title\">Modifier mes infos</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12 d-flex justify-content-start\">
                <a class=\"text-decoration-none add-category\" href=\"{{path('compte')}}\"><i class=\"fas fa-arrow-left mr-2\"></i>Retour au détail de mon compte</a>
            </div>
            <div class=\"col-12 d-flex justify-content-center form-modif-infos\">
                {{form_start(form)}}

                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"fas fa-at\"></i> </label>
                        {{form_widget(form.mail, {'attr' : {'placeholder' : 'E-mail', 'class' : 'ml-2'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"far fa-address-card\"></i> </label>
                        {{form_widget(form.nom, {'attr' : {'placeholder' : 'Nom', 'class' : 'ml-2'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"far fa-address-card\"></i> </label>
                        {{form_widget(form.prenom, {'attr' : {'placeholder' : 'Prénom', 'class' : 'ml-2'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"fas fa-map-marker-alt\"></i> </label>
                        {{form_widget(form.adresse, {'attr' : {'placeholder' : 'Adresse postale', 'class' : 'ml-2'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"fas fa-map-marker-alt\"></i> </label>
                        {{form_widget(form.ville, {'attr' : {'placeholder' : 'Ville', 'class' : 'ml-2'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"fas fa-map-marker-alt\"></i> </label>
                        {{form_widget(form.cp, {'attr' : {'placeholder' : 'Code Postal', 'class' : 'ml-2'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"fas fa-mobile-alt\"></i> </label>
                        {{form_widget(form.phone, {'attr' : {'placeholder' : 'Téléphone', 'class' : 'ml-2'}, 'label' : false})}}
                    </div>
                    <div class=\"mb-2 d-flex justify-content-center\">
                        <input type=\"submit\" value=\"Modifier\" class=\"btn btn-info\">
                    </div>
                {{form_end(form)}}
            </div>
        </div>
    </div>
</div>

{% endblock %}", "index/client/updateInfosClient.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\index\\client\\updateInfosClient.html.twig");
    }
}
