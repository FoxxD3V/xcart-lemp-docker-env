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

/* items_list/product/parts/common.added-mark.twig */
class __TwigTemplate_1d676c491e739ec0f67a57d26542287055ca3c04d968aa18fb68766945dbbe7c extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "<div title=\"Added to cart\" class=\"added-to-cart\"><i class=\"icon-ok-mark\"></i></div>
";
    }

    public function getTemplateName()
    {
        return "items_list/product/parts/common.added-mark.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "items_list/product/parts/common.added-mark.twig", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/items_list/product/parts/common.added-mark.twig");
    }
}
