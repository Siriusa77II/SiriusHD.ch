<?php

/* /var/www/siriushd.net/cms/themes/sirius/pages/kiwi.htm */
class __TwigTemplate_0440c1ecfe236f2d2c0b8e965ef24a444795df2d4faf7e68179c7c950f66948c extends Twig_Template
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
        echo "<img src=\"/themes/sirius/assets/archive/hp/kiwi.jpg\"><br>
Merci a Patate pour ce partage.";
    }

    public function getTemplateName()
    {
        return "/var/www/siriushd.net/cms/themes/sirius/pages/kiwi.htm";
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
        return new Twig_Source("<img src=\"/themes/sirius/assets/archive/hp/kiwi.jpg\"><br>
Merci a Patate pour ce partage.", "/var/www/siriushd.net/cms/themes/sirius/pages/kiwi.htm", "");
    }
}
