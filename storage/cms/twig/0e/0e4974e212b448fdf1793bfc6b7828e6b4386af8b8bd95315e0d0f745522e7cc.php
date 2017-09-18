<?php

/* /var/www/siriushd.net/cms/themes/sirius/pages/rtest.htm */
class __TwigTemplate_2d0fe8f6f68d7f15ecdf54f1c63003c658075386a8f5e99505ae9655a6dcb9f7 extends Twig_Template
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
        echo "<img src=\"/themes/sirius/assets/archive/hp/rtest.jpg\" width=\"80%\">
\t\t<img src=\"/themes/sirius/assets/archive/hp/rtest2.jpg\" width=\"80%\"><br>
\t\t<p>Merci a Rainbow Thunder pour les screen.</p>";
    }

    public function getTemplateName()
    {
        return "/var/www/siriushd.net/cms/themes/sirius/pages/rtest.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<img src=\"/themes/sirius/assets/archive/hp/rtest.jpg\" width=\"80%\">
\t\t<img src=\"/themes/sirius/assets/archive/hp/rtest2.jpg\" width=\"80%\"><br>
\t\t<p>Merci a Rainbow Thunder pour les screen.</p>", "/var/www/siriushd.net/cms/themes/sirius/pages/rtest.htm", "");
    }
}
