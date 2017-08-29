<?php

/* /var/www/siriushd.net/cms/themes/sirius/partials/archive-header.htm */
class __TwigTemplate_2781456dc040608cc94eac8d6b0f93a865b8ec197119bac63ca1782fa3eb9fc0 extends Twig_Template
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
        echo "<html>
<head>
\t<title>TheSiriusHD | ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "</title>
\t<meta charset=\"utf-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t<!--[if lte IE 8]><script href=\"assets/js/ie/html5shiv.js\"></script><![endif]-->
\t<link rel=\"stylesheet\" href=\"/themes/sirius/assets/archive/style.css\" />
\t
\t<!--[if lte IE 8]><link rel=\"stylesheet\" href=\"assets/css/ie8.css\" /><![endif]-->
</head>";
    }

    public function getTemplateName()
    {
        return "/var/www/siriushd.net/cms/themes/sirius/partials/archive-header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
\t<title>TheSiriusHD | {{ this.page.meta_title }}</title>
\t<meta charset=\"utf-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t<!--[if lte IE 8]><script href=\"assets/js/ie/html5shiv.js\"></script><![endif]-->
\t<link rel=\"stylesheet\" href=\"/themes/sirius/assets/archive/style.css\" />
\t
\t<!--[if lte IE 8]><link rel=\"stylesheet\" href=\"assets/css/ie8.css\" /><![endif]-->
</head>", "/var/www/siriushd.net/cms/themes/sirius/partials/archive-header.htm", "");
    }
}
