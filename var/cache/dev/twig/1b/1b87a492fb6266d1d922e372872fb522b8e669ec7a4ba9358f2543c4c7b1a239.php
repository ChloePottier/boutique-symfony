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

        echo "Inscription | ";
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
        echo "\t<div class=\"container-fluid \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1>Inscription</h1>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 d-flex justify-content-start mb-3\">
                    <a class=\"text-decoration-none add-category\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\"><i class=\"fas fa-arrow-left mr-2\"></i> Je suis déjà membre, je veux me connecter</a>
                </div>
                <div class=\"col-12 col-md-6\">
                
                    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
                    <div class=\"form-group d-flex mt-2\">
                        <label for=\"\"><i class=\"fas fa-user\"></i></label>
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "username", [], "any", false, false, false, 22), 'widget', ["attr" => ["placeholder" => "Pseudo", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group d-flex mt-2\">
                        <label for=\"\"><i class=\"fas fa-lock\"></i></label>
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "password", [], "any", false, false, false, 26), 'widget', ["attr" => ["placeholder" => "Mot de passe", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group d-flex mt-2\">
                        <label for=\"\"><i class=\"fas fa-lock\"></i></label>
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "verifPassword", [], "any", false, false, false, 30), 'widget', ["attr" => ["placeholder" => "Confirmation", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group d-flex mt-2\">
                        <label for=\"\"><i class=\"fas fa-at\"></i></label>
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "mail", [], "any", false, false, false, 34), 'widget', ["attr" => ["placeholder" => "E-mail", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group d-flex mt-2\">
                        <label for=\"\"><i class=\"far fa-address-card\"></i></label>
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), 'widget', ["attr" => ["placeholder" => "Nom", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group d-flex mt-2\">
                        <label for=\"\"><i class=\"far fa-address-card\"></i></label>
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "prenom", [], "any", false, false, false, 42), 'widget', ["attr" => ["placeholder" => "Prénom", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group d-flex mt-2\">
                        <label for=\"\"><i class=\"fas fa-map-marker-alt\"></i></label>
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "adresse", [], "any", false, false, false, 46), 'widget', ["attr" => ["placeholder" => "Adresse postale", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group d-flex mt-2\">
                        <label for=\"\"><i class=\"fas fa-map-marker-alt\"></i></label>
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "ville", [], "any", false, false, false, 50), 'widget', ["attr" => ["placeholder" => "Ville", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group d-flex mt-2\">
                        <label for=\"\"><i class=\"fas fa-map-marker-alt\"></i></label>
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "cp", [], "any", false, false, false, 54), 'widget', ["attr" => ["placeholder" => "Code Postal", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group d-flex mt-2\">
                        <label for=\"\"><i class=\"fas fa-mobile-alt\"></i></label>
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "phone", [], "any", false, false, false, 58), 'widget', ["attr" => ["placeholder" => "Téléphone", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\" col-12 mb-2 d-flex\">
                            <input type=\"submit\" name=\"\" value=\"Enregistrer\" class=\"btn btn-info btn-submit-form\">
                        </div>                    
                ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        echo "
                </div>
                <div class=\"col-12 col-md-6 signup-image\">
                    <figure><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . "tshirt-4.jpg")), "html", null, true);
        echo "\" alt=\"logo\" class=\"img-signup\"></figure>
                    <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"signup-image-link\">Je suis déjà membre !</a>
                </div>
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
        return array (  194 => 67,  190 => 66,  184 => 63,  176 => 58,  169 => 54,  162 => 50,  155 => 46,  148 => 42,  141 => 38,  134 => 34,  127 => 30,  120 => 26,  113 => 22,  107 => 19,  100 => 15,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription | {{ parent() }}{% endblock %}

{% block content %}
\t<div class=\"container-fluid \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1>Inscription</h1>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 d-flex justify-content-start mb-3\">
                    <a class=\"text-decoration-none add-category\" href=\"{{path('login')}}\"><i class=\"fas fa-arrow-left mr-2\"></i> Je suis déjà membre, je veux me connecter</a>
                </div>
                <div class=\"col-12 col-md-6\">
                
                    {{form_start(form)}}
                    <div class=\"form-group d-flex mt-2\">
                        <label for=\"\"><i class=\"fas fa-user\"></i></label>
                        {{form_widget(form.username, {'attr' : {'placeholder' : 'Pseudo', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group d-flex mt-2\">
                        <label for=\"\"><i class=\"fas fa-lock\"></i></label>
                        {{form_widget(form.password, {'attr' : {'placeholder' : 'Mot de passe', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group d-flex mt-2\">
                        <label for=\"\"><i class=\"fas fa-lock\"></i></label>
                        {{form_widget(form.verifPassword, {'attr' : {'placeholder' : 'Confirmation', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group d-flex mt-2\">
                        <label for=\"\"><i class=\"fas fa-at\"></i></label>
                        {{form_widget(form.mail, {'attr' : {'placeholder' : 'E-mail', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group d-flex mt-2\">
                        <label for=\"\"><i class=\"far fa-address-card\"></i></label>
                        {{form_widget(form.nom, {'attr' : {'placeholder' : 'Nom', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group d-flex mt-2\">
                        <label for=\"\"><i class=\"far fa-address-card\"></i></label>
                        {{form_widget(form.prenom, {'attr' : {'placeholder' : 'Prénom', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group d-flex mt-2\">
                        <label for=\"\"><i class=\"fas fa-map-marker-alt\"></i></label>
                        {{form_widget(form.adresse, {'attr' : {'placeholder' : 'Adresse postale', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group d-flex mt-2\">
                        <label for=\"\"><i class=\"fas fa-map-marker-alt\"></i></label>
                        {{form_widget(form.ville, {'attr' : {'placeholder' : 'Ville', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group d-flex mt-2\">
                        <label for=\"\"><i class=\"fas fa-map-marker-alt\"></i></label>
                        {{form_widget(form.cp, {'attr' : {'placeholder' : 'Code Postal', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group d-flex mt-2\">
                        <label for=\"\"><i class=\"fas fa-mobile-alt\"></i></label>
                        {{form_widget(form.phone, {'attr' : {'placeholder' : 'Téléphone', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\" col-12 mb-2 d-flex\">
                            <input type=\"submit\" name=\"\" value=\"Enregistrer\" class=\"btn btn-info btn-submit-form\">
                        </div>                    
                {{form_end(form)}}
                </div>
                <div class=\"col-12 col-md-6 signup-image\">
                    <figure><img src=\"{{asset('images/' ~ 'tshirt-4.jpg')}}\" alt=\"logo\" class=\"img-signup\"></figure>
                    <a href=\"{{ path('login') }}\" class=\"signup-image-link\">Je suis déjà membre !</a>
                </div>
            </div>
                    
        </div>
            
    </div>
</section>
{% endblock %}", "index/login/inscription.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\index\\login\\inscription.html.twig");
    }
}
