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

/* /home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/items/item.total.twig */
class __TwigTemplate_920d1c6ee03f5d250ab1b5543386116776af013821d417ac299386ef2df0a417 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"total\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "formatInvoicePrice", [0 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getDisplayTotal", [], "method"), 1 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getCurrency", [], "method")], "method"), "html", null, true);
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/items/item.total.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/items/item.total.twig", "");
    }
}
