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

/* index/login/inscription.html.twig */
class __TwigTemplate_4bd56362c25b8c22408e8eae90248f826b4d83ff8b8bae18c35bf29c119b4f3e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/login/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/login/inscription.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/login/inscription.html.twig", 1);
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

        echo "Inscription";
        
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
<section class=\"signup\">
    <div class=\"container\">
        <div class=\"signup-content\">
            <div class=\"signup-form\">
                <h2 class=\"form-title\">Inscription</h2>
                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "

                    <div class=\"form-group\">
                        <label for=\"\"><i class=\"fas fa-user\"></i></label>
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "username", [], "any", false, false, false, 16), 'row', ["attr" => ["placeholder" => "Pseudo", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"\"><i class=\"fas fa-lock\"></i></label>
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "password", [], "any", false, false, false, 20), 'row', ["attr" => ["placeholder" => "Mot de passe", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"\"><i class=\"fas fa-lock\"></i></label>
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "verifPassword", [], "any", false, false, false, 24), 'row', ["attr" => ["placeholder" => "Confirmation", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"\"><i class=\"fas fa-at\"></i></label>
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "mail", [], "any", false, false, false, 28), 'row', ["attr" => ["placeholder" => "E-mail", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"\"><i class=\"far fa-address-card\"></i></label>
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "nom", [], "any", false, false, false, 32), 'row', ["attr" => ["placeholder" => "Nom", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"\"><i class=\"far fa-address-card\"></i></label>
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "prenom", [], "any", false, false, false, 36), 'row', ["attr" => ["placeholder" => "Prénom", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"\"><i class=\"fas fa-map-marker-alt\"></i></label>
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "adresse", [], "any", false, false, false, 40), 'row', ["attr" => ["placeholder" => "Adresse postale", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"\"><i class=\"fas fa-map-marker-alt\"></i></label>
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "ville", [], "any", false, false, false, 44), 'row', ["attr" => ["placeholder" => "Ville", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"\"><i class=\"fas fa-map-marker-alt\"></i></label>
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "cp", [], "any", false, false, false, 48), 'row', ["attr" => ["placeholder" => "Code Postal", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"\"><i class=\"fas fa-mobile-alt\"></i></label>
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "phone", [], "any", false, false, false, 52), 'row', ["attr" => ["placeholder" => "Téléphone", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <input type=\"submit\" value=\"S'inscrire\" class=\"btn btn-success\">
                    ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
        echo "
                    
            </div>
            <div class=\"signup-image\">
                <figure><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . "test.jpg")), "html", null, true);
        echo "\" alt=\"logo\" class=\"img-signup\"></figure>
                <a href=\"#\" class=\"signup-image-link\">Je suis déjà membre !</a>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index/login/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 59,  172 => 55,  166 => 52,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}

{% block content %}

<section class=\"signup\">
    <div class=\"container\">
        <div class=\"signup-content\">
            <div class=\"signup-form\">
                <h2 class=\"form-title\">Inscription</h2>
                {{form_start(form)}}

                    <div class=\"form-group\">
                        <label for=\"\"><i class=\"fas fa-user\"></i></label>
                        {{form_row(form.username, {'attr' : {'placeholder' : 'Pseudo', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"\"><i class=\"fas fa-lock\"></i></label>
                        {{form_row(form.password, {'attr' : {'placeholder' : 'Mot de passe', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"\"><i class=\"fas fa-lock\"></i></label>
                        {{form_row(form.verifPassword, {'attr' : {'placeholder' : 'Confirmation', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"\"><i class=\"fas fa-at\"></i></label>
                        {{form_row(form.mail, {'attr' : {'placeholder' : 'E-mail', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"\"><i class=\"far fa-address-card\"></i></label>
                        {{form_row(form.nom, {'attr' : {'placeholder' : 'Nom', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"\"><i class=\"far fa-address-card\"></i></label>
                        {{form_row(form.prenom, {'attr' : {'placeholder' : 'Prénom', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"\"><i class=\"fas fa-map-marker-alt\"></i></label>
                        {{form_row(form.adresse, {'attr' : {'placeholder' : 'Adresse postale', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"\"><i class=\"fas fa-map-marker-alt\"></i></label>
                        {{form_row(form.ville, {'attr' : {'placeholder' : 'Ville', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"\"><i class=\"fas fa-map-marker-alt\"></i></label>
                        {{form_row(form.cp, {'attr' : {'placeholder' : 'Code Postal', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"\"><i class=\"fas fa-mobile-alt\"></i></label>
                        {{form_row(form.phone, {'attr' : {'placeholder' : 'Téléphone', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <input type=\"submit\" value=\"S'inscrire\" class=\"btn btn-success\">
                    {{form_end(form)}}
                    
            </div>
            <div class=\"signup-image\">
                <figure><img src=\"{{asset('images/' ~ 'test.jpg')}}\" alt=\"logo\" class=\"img-signup\"></figure>
                <a href=\"#\" class=\"signup-image-link\">Je suis déjà membre !</a>
            </div>
        </div>
    </div>
</section>
{% endblock %}", "index/login/inscription.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\index\\login\\inscription.html.twig");
    }
}
