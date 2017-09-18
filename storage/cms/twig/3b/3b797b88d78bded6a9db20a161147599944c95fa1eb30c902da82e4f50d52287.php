<?php

/* /var/www/siriushd.net/cms/themes/sirius/pages/Maintenance.htm */
class __TwigTemplate_a32e2366d06d9f40b7fb71a08537740518b319d20d9d45ced1f2fc8bd70b1c27 extends Twig_Template
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
        echo "<center>
<h1>Maintenance en cours.</h1>
Sirius a encore tout cassé :/ <br><br>
<img src=\"https://derpicdn.net/img/2013/7/29/383881/full.gif\" width=\"40%\">
</center>
</article>";
    }

    public function getTemplateName()
    {
        return "/var/www/siriushd.net/cms/themes/sirius/pages/Maintenance.htm";
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
        return new Twig_Source("<center>
<h1>Maintenance en cours.</h1>
Sirius a encore tout cassé :/ <br><br>
<img src=\"https://derpicdn.net/img/2013/7/29/383881/full.gif\" width=\"40%\">
</center>
</article>", "/var/www/siriushd.net/cms/themes/sirius/pages/Maintenance.htm", "");
    }
}
