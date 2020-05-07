<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/average_rating/text.twig */
class __TwigTemplate_e3c7d091d180af3c0cb5813e161aa9bf3c4fe2e6e0db029b924132b9ae5ff8bf extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 7
        echo " <div class=\"text\">
  ";
        // line 8
        if (($this->getAttribute(($context["this"] ?? null), "getAverageRating", [], "method") > 0)) {
            // line 9
            echo "    <div>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Score: X. Votes: Y", ["score" => $this->getAttribute(($context["this"] ?? null), "getAverageRating", [], "method"), "votes" => $this->getAttribute(($context["this"] ?? null), "getVotesCount", [], "method")]]), "html", null, true);
            echo "</div>
  ";
        }
        // line 11
        echo "  ";
        if (($this->getAttribute(($context["this"] ?? null), "getAverageRating", [], "method") == 0)) {
            // line 12
            echo "    <div>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Not rated yet"]), "html", null, true);
            echo "</div>
  ";
        }
        // line 14
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/average_rating/text.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  44 => 12,  41 => 11,  35 => 9,  33 => 8,  30 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/average_rating/text.twig", "");
    }
}
