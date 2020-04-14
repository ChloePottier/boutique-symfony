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

/* index/login/login.html.twig */
class __TwigTemplate_3ff5f34364f92bc1292a51d52811cfe88f4931e43f8c36e5c2aebe2f76141a56 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "index/login/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Connexion | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 mt-5 mb-5\">
                <h1 class=\"\">Connexion</h1>
                <div>Je n'ai pas encore de compte, <a href=\"/inscription\" class=\"signup-link\">je veux m'inscrire</a></div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12 mb-5\">
                ";
        // line 16
        if (($context["error"] ?? null)) {
            // line 17
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messagedata", [], "any", false, false, false, 18), "security"), "html", null, true);
            echo "
                </div>
                ";
        }
        // line 21
        echo "    
                <form action=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"\">Login : </label>
                        <input type=\"text\" name=\"_username\" required class=\"form-control\">
                    </div>
            
                    <div class=\"form-group\">
                        <label for=\"\">Mot de passe : </label>
                        <input type=\"password\" name=\"_password\" required class=\"form-control\">
                    </div>
                    <input type=\"submit\" value=\"se connecter\" class=\"btn btn-info\">
                </form>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "index/login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 22,  82 => 21,  76 => 18,  73 => 17,  71 => 16,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/login/login.html.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\templates\\index\\login\\login.html.twig");
    }
}
