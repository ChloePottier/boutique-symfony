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
class __TwigTemplate_6d84aaa91fdc1d0b27834b388d501edb790db89b04b2be7101d9bdbf31031d96 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "index/client/updatePassword.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Espace client | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

                    <div class=\"form-group d-flex mt-4\">
                        <label for=\"\"><i class=\"fas fa-lock\"></i></label>
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 20), 'widget', ["attr" => ["placeholder" => "Nouveau mot de passe", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"form-group d-flex mt-4\">
                        <label for=\"\"><i class=\"fas fa-lock\"></i></label>
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "verifPassword", [], "any", false, false, false, 24), 'row', ["attr" => ["placeholder" => "Confirmation", "class" => "input"], "label" => false]);
        echo "
                    </div>
                    <div class=\"mb-2 d-flex justify-content-center\">
                        <input type=\"submit\" value=\"Modifier\" class=\"btn btn-info d-flex justify-content-center\">
                    </div>
                ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
            </div>
           
        </div>
    </div>
</dic>

";
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
        return array (  98 => 29,  90 => 24,  83 => 20,  76 => 16,  70 => 13,  59 => 4,  55 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/client/updatePassword.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\index\\client\\updatePassword.html.twig");
    }
}
