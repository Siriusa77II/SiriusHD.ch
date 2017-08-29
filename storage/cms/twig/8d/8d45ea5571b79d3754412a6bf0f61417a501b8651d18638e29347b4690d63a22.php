<?php

/* /var/www/siriushd.net/cms/themes/sirius/layouts/archive.htm */
class __TwigTemplate_85c83e429d630ed5a690e213b8122f56882bf89790f56c225acc50356739bf8d extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"fr\">
";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("archive-header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 5
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/siriushd.net/cms/themes/sirius/layouts/archive.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
{% partial \"archive-header\" %}
{% page %}
</body>
</html>", "/var/www/siriushd.net/cms/themes/sirius/layouts/archive.htm", "");
    }
}
