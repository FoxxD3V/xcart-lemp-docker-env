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

/* /home/vagrant/next/output/xcart/src/skins/crisp_white/customer/mini_cart/horizontal/parts/item.image.twig */
class __TwigTemplate_ab7a4ccd5e5c6d9e894578c3a0333c6c0711235b8bb2c05d3834e4422b379f33 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "hasImage", [], "method")) {
            // line 8
            echo "\t<span class=\"item-image\">
\t";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Image", "lazyLoad" => true, "image" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getImage", [], "method"), "maxWidth" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getMiniCartImageWidth", [], "method"), "maxHeight" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getMiniCartImageHeight", [], "method"), "centerImage" => "1", "alt" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getName", [], "method")]]), "html", null, true);
            echo "
\t</span>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/mini_cart/horizontal/parts/item.image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  35 => 8,  33 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/mini_cart/horizontal/parts/item.image.twig", "");
    }
}
