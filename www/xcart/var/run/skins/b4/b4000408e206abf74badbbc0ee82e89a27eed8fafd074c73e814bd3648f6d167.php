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

/* /home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/head.companyAddress.address.twig */
class __TwigTemplate_5d0663c6f843d418ed11eaaa9fe6680c8066bbcd69f3594216f059950a462ab8 extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        echo "
";
        // line 7
        $context["company"] = $this->getAttribute(($context["this"] ?? null), "company", []);
        // line 8
        echo "
<p>
  ";
        // line 10
        if ($this->getAttribute(($context["company"] ?? null), "location_address", [])) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? null), "location_address", []), "html", null, true);
            echo "<br />";
        }
        // line 11
        echo "  ";
        if ($this->getAttribute(($context["company"] ?? null), "location_city", [])) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? null), "location_city", []), "html", null, true);
            echo ", ";
        }
        if ($this->getAttribute($this->getAttribute(($context["company"] ?? null), "locationState", []), "state", [])) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["company"] ?? null), "locationState", []), "state", []), "html", null, true);
            echo ", ";
        }
        if ($this->getAttribute(($context["company"] ?? null), "location_zipcode", [])) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? null), "location_zipcode", []), "html", null, true);
        }
        echo "<br />
  ";
        // line 12
        if ($this->getAttribute(($context["company"] ?? null), "locationCountry", [])) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["company"] ?? null), "locationCountry", []), "getCountry", [], "method"), "html", null, true);
        }
        // line 13
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/head.companyAddress.address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  59 => 12,  44 => 11,  39 => 10,  35 => 8,  33 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/head.companyAddress.address.twig", "");
    }
}
