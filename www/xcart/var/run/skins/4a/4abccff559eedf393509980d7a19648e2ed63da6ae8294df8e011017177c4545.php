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

/* /home/vagrant/next/output/xcart/src/skins/admin/order/packing_slip/parts/head/head.logo.twig */
class __TwigTemplate_abc71683501e7fc0ade466775929735dcb5eb437a331ecdb31bd8d07ff46c107 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"logo\">
  <img src=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getInvoiceLogo", [], "method"), "html", null, true);
        echo "\" alt=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "config", []), "Company", []), "company_name", []), "html", null, true);
        echo "\" class=\"logo\" />
</td>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/order/packing_slip/parts/head/head.logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/home/vagrant/next/output/xcart/src/skins/admin/order/packing_slip/parts/head/head.logo.twig", "");
    }
}
