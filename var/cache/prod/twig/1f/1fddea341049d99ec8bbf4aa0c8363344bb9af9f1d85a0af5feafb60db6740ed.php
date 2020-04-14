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
class __TwigTemplate_53f7bae3219686d31e10ae994c1919201837f4230609a3b59a8c5e8688503b8c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "index/client/updateInfosClient.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Espace client | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"fas fa-at\"></i> </label>
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mail", [], "any", false, false, false, 21), 'widget', ["attr" => ["placeholder" => "E-mail", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"far fa-address-card\"></i> </label>
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 25), 'widget', ["attr" => ["placeholder" => "Nom", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"far fa-address-card\"></i> </label>
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 29), 'widget', ["attr" => ["placeholder" => "Prénom", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"fas fa-map-marker-alt\"></i> </label>
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse", [], "any", false, false, false, 33), 'widget', ["attr" => ["placeholder" => "Adresse postale", "class" => " input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"fas fa-map-marker-alt\"></i> </label>
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville", [], "any", false, false, false, 37), 'widget', ["attr" => ["placeholder" => "Ville", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"fas fa-map-marker-alt\"></i> </label>
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cp", [], "any", false, false, false, 41), 'widget', ["attr" => ["placeholder" => "Code Postal", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group  d-flex mt-4\">
                        <label for=\"\" class=\"icone-form\"><i class=\"fas fa-mobile-alt\"></i> </label>
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 45), 'widget', ["attr" => ["placeholder" => "Téléphone", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"mb-2 d-flex justify-content-center\">
                        <input type=\"submit\" value=\"Modifier\" class=\"btn btn-info\">
                    </div>
                ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
            </div>
        </div>
    </div>
</div>

";
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
        return array (  133 => 50,  125 => 45,  118 => 41,  111 => 37,  104 => 33,  97 => 29,  90 => 25,  83 => 21,  76 => 17,  70 => 14,  59 => 5,  55 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/client/updateInfosClient.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\index\\client\\updateInfosClient.html.twig");
    }
}
