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

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_9c76e67da67000741f5133c4718d99181c4e141b772118ee28a6d30a1d702c46 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (("The template \"" . $this->getTemplateName()) . "\" is deprecated since Symfony 4.4, will be removed in 5.0.");
        @trigger_error($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4." (\"@Twig/Exception/traces.xml.twig\" at line 1).", E_USER_DEPRECATED);
        // line 2
        echo "        <traces>
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "trace", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 4
            echo "            <trace>
";
            // line 5
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", ["trace" => $context["trace"]], false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </traces>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 9,  50 => 5,  47 => 4,  43 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/traces.xml.twig", "C:\\xampp\\htdocs\\boutique_symphony\\boutique-symphony\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
