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

/* admin/category/category.html.twig */
class __TwigTemplate_c6ff0b28cff0943daddb10235f8386978ba6d9022098e5127685625d6d9ece96 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/category.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/category.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/category/category.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter une catégorie | ";
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
                    <h1> Ajouter une catégorie</h1>
                </div>
            </div>
          
            <div class=\"input-formCat col-12 mb-2\">
                <a class=\"text-decoration-none\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_category");
        echo "\"><i class=\"fas fa-plus mr-2\"></i>Nouvelle catégorie</a>
                <table class=\"table table-hover mt-5 text\">
                        <thead class=\"thead-dark text-uppercase\">
                            <tr>
                                <th class=\"text-center\">Nom</th>
                                <th class=\"text-center\">Modifier</th>
                                <th class=\"text-center\">Supprimer</th>
                            </tr>
                        </thead>
                            
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 27
            echo "                        
                        <tr>
                            
                            <td class=\"text-center font-weight-bold\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                            <td class=\"text-center\"><a class=\"both input-style color-blue\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_category", ["id" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">Update</a></td>
                            <td class=\"text-center\"><form action=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_cat", ["id" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" method=\"post\" class=\"col\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ?');\">
                                <input type=\"hidden\" name=\"_method\" value=\"SUP\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("SUP" . twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 34))), "html", null, true);
            echo "\">
                                <input type=\"submit\" value=\"Supprimer\" class=\"input-style both input-style-color\">
                            </form></td>

                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </table>
            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 40,  136 => 34,  131 => 32,  127 => 31,  123 => 30,  118 => 27,  114 => 26,  101 => 16,  89 => 6,  79 => 5,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
 {% extends 'base.html.twig' %}

{% block title %}Ajouter une catégorie | {{ parent() }}{% endblock %}
{% block content %}

\t<div class=\"container-fluid \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1> Ajouter une catégorie</h1>
                </div>
            </div>
          
            <div class=\"input-formCat col-12 mb-2\">
                <a class=\"text-decoration-none\" href=\"{{path('add_category')}}\"><i class=\"fas fa-plus mr-2\"></i>Nouvelle catégorie</a>
                <table class=\"table table-hover mt-5 text\">
                        <thead class=\"thead-dark text-uppercase\">
                            <tr>
                                <th class=\"text-center\">Nom</th>
                                <th class=\"text-center\">Modifier</th>
                                <th class=\"text-center\">Supprimer</th>
                            </tr>
                        </thead>
                            
                        {% for cat in categories %}
                        
                        <tr>
                            
                            <td class=\"text-center font-weight-bold\">{{ cat.nom }}</td>
                            <td class=\"text-center\"><a class=\"both input-style color-blue\" href=\"{{ path('update_category', {'id' : cat.id}) }}\">Update</a></td>
                            <td class=\"text-center\"><form action=\"{{path('delete_cat', {'id' : cat.id})}}\" method=\"post\" class=\"col\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ?');\">
                                <input type=\"hidden\" name=\"_method\" value=\"SUP\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{csrf_token('SUP' ~ cat.id)}}\">
                                <input type=\"submit\" value=\"Supprimer\" class=\"input-style both input-style-color\">
                            </form></td>

                        </tr>
                        {% endfor %}
                    </table>
            </div>
        </div>
    </div>


{% endblock %}
", "admin/category/category.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\admin\\category\\category.html.twig");
    }
}
