<?php

/* /var/www/siriushd.net/cms/themes/sirius/pages/radio.htm */
class __TwigTemplate_c56bed261933cb98d2c8d4baa2a706134ee952b59241793ba2e031b25ea0e2ba extends Twig_Template
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
        echo "<div align=\"center\">
    <div style=\"background-color:#b2b2b2;height:290px;width:450px;font-family:Sans-serif;border-radius: 15px;\">
        <div style=\"background-color:#ffffff;height:280px;width:440px;position:relative;top:5px;border-radius: 12px;\"><br>
            <div style=\"width:420px;color:#000\">Bienvenue sur Sirius Radio, Une radio qui diffuse uniquement des titres libre de droit. Cette radio as etait crée en moins de 24h puis modifier au cours du temps.<br>
                <h3><a href=\"/radio/request\">song request</a></h3>
            </div><br>
<center>
<iframe src=\"https://195-154-54-224.nitrogroup.fr/public/embed/3\" frameborder=\"0\" allowtransparency=\"false\" style=\"width: 70%; min-height: 250px; border: 0; position:relative; top: 20px; left: 10px;\" scrolling=\"no\"></iframe>
</center>

</div>
<p>&nbsp;</p>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/siriushd.net/cms/themes/sirius/pages/radio.htm";
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
        return new Twig_Source("<div align=\"center\">
    <div style=\"background-color:#b2b2b2;height:290px;width:450px;font-family:Sans-serif;border-radius: 15px;\">
        <div style=\"background-color:#ffffff;height:280px;width:440px;position:relative;top:5px;border-radius: 12px;\"><br>
            <div style=\"width:420px;color:#000\">Bienvenue sur Sirius Radio, Une radio qui diffuse uniquement des titres libre de droit. Cette radio as etait crée en moins de 24h puis modifier au cours du temps.<br>
                <h3><a href=\"/radio/request\">song request</a></h3>
            </div><br>
<center>
<iframe src=\"https://195-154-54-224.nitrogroup.fr/public/embed/3\" frameborder=\"0\" allowtransparency=\"false\" style=\"width: 70%; min-height: 250px; border: 0; position:relative; top: 20px; left: 10px;\" scrolling=\"no\"></iframe>
</center>

</div>
<p>&nbsp;</p>
</body>
</html>", "/var/www/siriushd.net/cms/themes/sirius/pages/radio.htm", "");
    }
}
