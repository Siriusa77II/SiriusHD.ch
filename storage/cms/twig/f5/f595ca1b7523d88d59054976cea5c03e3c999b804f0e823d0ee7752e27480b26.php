<?php

/* /var/www/siriushd.net/cms/themes/sirius/pages/Live.htm */
class __TwigTemplate_f6ed79bd6933194525ef3c1b7c4e2cb1299ef097dcd89864de15b91bdda65a2b extends Twig_Template
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
        <title>Live - TheSiriusHD</title>
        <meta http-equiv=\"refresh\" content=\"1; URL=https://www.youtube.com/TheSiriusHD/live\">
</head>
<body>
<center><h1>Redirection vers YouTube</h1><br>
                <h2>Si la redirection ne se fait pas automatiquement cliquez sur le liens en dessous</h2><br>
                <a href=\"https://www.youtube.com/TheSiriusHD/live\">https://www.youtube.com/TheSiriusHD/live</a></center>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/siriushd.net/cms/themes/sirius/pages/Live.htm";
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
        <title>Live - TheSiriusHD</title>
        <meta http-equiv=\"refresh\" content=\"1; URL=https://www.youtube.com/TheSiriusHD/live\">
</head>
<body>
<center><h1>Redirection vers YouTube</h1><br>
                <h2>Si la redirection ne se fait pas automatiquement cliquez sur le liens en dessous</h2><br>
                <a href=\"https://www.youtube.com/TheSiriusHD/live\">https://www.youtube.com/TheSiriusHD/live</a></center>
</body>
</html>", "/var/www/siriushd.net/cms/themes/sirius/pages/Live.htm", "");
    }
}
