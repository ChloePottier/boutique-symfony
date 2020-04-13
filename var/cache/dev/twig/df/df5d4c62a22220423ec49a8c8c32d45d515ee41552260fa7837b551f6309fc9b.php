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

/* index/client/updatePassword.html.twig */
class __TwigTemplate_750146c84841d71dde9012408e4cd48b899c97b3ac833c43efae545c4396da15 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/client/updatePassword.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/client/updatePassword.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/client/updatePassword.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
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

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 mt-5 mb-3\">
                <h1 class=\"form-title\">Modifier mon mot de passe</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12 d-flex justify-content-start\">
                <a class=\"text-decoration-none add-category\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte");
        echo "\"><i class=\"fas fa-arrow-left mr-2\"></i>Retour au détail de mon compte</a>
            </div>
            <div class=\"col-12 d-flex justify-content-center form-modif-infos\">
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "

                    <div class=\"form-group d-flex mt-4\">
                        <label for=\"\"><i class=\"fas fa-lock\"></i></label>
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "password", [], "any", false, false, false, 20), 'widget', ["attr" => ["placeholder" => "Nouveau mot de passe", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group d-flex mt-4\">
                        <label for=\"\"><i class=\"fas fa-lock\"></i></label>
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "verifPassword", [], "any", false, false, false, 24), 'row', ["attr" => ["placeholder" => "Confirmation", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"mb-2 d-flex justify-content-center\">
                        <input type=\"submit\" value=\"Modifier\" class=\"btn btn-info d-flex justify-content-center\">
                    </div>
                ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
            </div>
           
        </div>
    </div>
</dic>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index/client/updatePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 29,  120 => 24,  113 => 20,  106 => 16,  100 => 13,  89 => 4,  79 => 3,  59 => 2,  36 => 1,);
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
                <h1 class=\"form-title\">Modifier mon mot de passe</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12 d-flex justify-content-start\">
                <a class=\"text-decoration-none add-category\" href=\"{{path('compte')}}\"><i class=\"fas fa-arrow-left mr-2\"></i>Retour au détail de mon compte</a>
            </div>
            <div class=\"col-12 d-flex justify-content-center form-modif-infos\">
                {{form_start(form)}}

                    <div class=\"form-group d-flex mt-4\">
                        <label for=\"\"><i class=\"fas fa-lock\"></i></label>
                        {{form_widget(form.password, {'attr' : {'placeholder' : 'Nouveau mot de passe', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\"form-group d-flex mt-4\">
                        <label for=\"\"><i class=\"fas fa-lock\"></i></label>
                        {{form_row(form.verifPassword, {'attr' : {'placeholder' : 'Confirmation', 'class' : 'input'}, 'label' : false})}}
                    </div>
                    <div class=\"mb-2 d-flex justify-content-center\">
                        <input type=\"submit\" value=\"Modifier\" class=\"btn btn-info d-flex justify-content-center\">
                    </div>
                {{form_end(form)}}
            </div>
           
        </div>
    </div>
</dic>

{% endblock %}", "index/client/updatePassword.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\index\\client\\updatePassword.html.twig");
    }
}
