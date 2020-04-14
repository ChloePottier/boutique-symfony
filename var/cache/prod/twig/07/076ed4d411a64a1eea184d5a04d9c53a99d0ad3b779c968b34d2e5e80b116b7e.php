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
class __TwigTemplate_9e918e42662920c71a7e8339ee9701ebd3a9b951792e163a6cdff799610dc559 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "index/login/inscription.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Inscription | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<div class=\"container-fluid \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 mt-5 mb-3\">
                    <h1>Inscription</h1>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 col-md-6\">
                    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                    <div class=\"form-group d-flex mt-4\">
                        <label for=\"\"><i class=\"fas fa-user\"></i></label>
                        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 18), 'widget', ["attr" => ["placeholder" => "Pseudo", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group d-flex mt-4\">
                        <label for=\"\"><i class=\"fas fa-lock\"></i></label>
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 22), 'widget', ["attr" => ["placeholder" => "Mot de passe", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group d-flex mt-4\">
                        <label for=\"\"><i class=\"fas fa-lock\"></i></label>
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "verifPassword", [], "any", false, false, false, 26), 'widget', ["attr" => ["placeholder" => "Confirmation", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group d-flex mt-4\">
                        <label for=\"\"><i class=\"fas fa-at\"></i></label>
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mail", [], "any", false, false, false, 30), 'widget', ["attr" => ["placeholder" => "E-mail", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group d-flex mt-4\">
                        <label for=\"\"><i class=\"far fa-address-card\"></i></label>
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 34), 'widget', ["attr" => ["placeholder" => "Nom", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group d-flex mt-4\">
                        <label for=\"\"><i class=\"far fa-address-card\"></i></label>
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 38), 'widget', ["attr" => ["placeholder" => "Prénom", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group d-flex mt-4\">
                        <label for=\"\"><i class=\"fas fa-map-marker-alt\"></i></label>
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adresse", [], "any", false, false, false, 42), 'widget', ["attr" => ["placeholder" => "Adresse postale", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group d-flex mt-4\">
                        <label for=\"\"><i class=\"fas fa-map-marker-alt\"></i></label>
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville", [], "any", false, false, false, 46), 'widget', ["attr" => ["placeholder" => "Ville", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group d-flex mt-4\">
                        <label for=\"\"><i class=\"fas fa-map-marker-alt\"></i></label>
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cp", [], "any", false, false, false, 50), 'widget', ["attr" => ["placeholder" => "Code Postal", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group d-flex mt-4\">
                        <label for=\"\"><i class=\"fas fa-mobile-alt\"></i></label>
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 54), 'widget', ["attr" => ["placeholder" => "Téléphone", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\" col-12 mb-2 d-flex justify-content-end\">
                            <input type=\"submit\" name=\"\" value=\"Enregistrer\" class=\"btn btn-info btn-submit-form\">
                        </div>                    
                ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                </div>
                <div class=\"col-12 col-md-6 signup-image\">
                    <figure><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . "tshirt-4.jpg")), "html", null, true);
        echo "\" alt=\"logo\" class=\"img-signup\"></figure>
                    <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"signup-image-link\">Je suis déjà membre !</a>
                </div>
            </div>
                    
        </div>
            
    </div>
</section>
";
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
        return array (  157 => 63,  153 => 62,  147 => 59,  139 => 54,  132 => 50,  125 => 46,  118 => 42,  111 => 38,  104 => 34,  97 => 30,  90 => 26,  83 => 22,  76 => 18,  70 => 15,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/login/inscription.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\index\\login\\inscription.html.twig");
    }
}
