<?php

/* /var/www/siriushd.net/cms/themes/sirius/pages/discord.htm */
class __TwigTemplate_c7349e9a3a7b041836712f80680c8a50ddd18bddc0b017def79076c8732bd99f extends Twig_Template
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
<html>
<head>
        <title>Discord - TheSiriusHD</title>
        <meta http-equiv=\"refresh\" content=\"1; URL=https://discord.gg/JKrrfdq\">
</head>
<body>
<center><h1>Redirection vers le serveur Discord</h1><br>
                <h2>Si la redirection ne se fait pas automatiquement cliquez sur le liens en dessous</h2><br>
                <a href=\"https://discord.gg/JKrrfdq\">Invitation au Discord TheSiriusHD</a></center>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/siriushd.net/cms/themes/sirius/pages/discord.htm";
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
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
        <title>Discord - TheSiriusHD</title>
        <meta http-equiv=\"refresh\" content=\"1; URL=https://discord.gg/JKrrfdq\">
</head>
<body>
<center><h1>Redirection vers le serveur Discord</h1><br>
                <h2>Si la redirection ne se fait pas automatiquement cliquez sur le liens en dessous</h2><br>
                <a href=\"https://discord.gg/JKrrfdq\">Invitation au Discord TheSiriusHD</a></center>
</body>
</html>", "/var/www/siriushd.net/cms/themes/sirius/pages/discord.htm", "");
    }
}
