<?php

/* /var/www/siriushd.net/cms/themes/sirius/layouts/RadioDefault.htm */
class __TwigTemplate_e7ad47b7b80bb1f960d75c432c5e869a60d8dd4ce2ef12a06b57d269c31a6c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("radioheader"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        echo $this->env->getExtension('CMS')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/var/www/siriushd.net/cms/themes/sirius/layouts/RadioDefault.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial \"radioheader\" %}
{% page %}", "/var/www/siriushd.net/cms/themes/sirius/layouts/RadioDefault.htm", "");
    }
}
