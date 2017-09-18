<?php

/* /var/www/siriushd.net/cms/themes/sirius/partials/radioheader.htm */
class __TwigTemplate_d612994e2679732994c99ff853e7ae458658265f605dbb11a5060373fa9cbb16 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
<style type=\"text/css\">    
html { 
  margin:0;
  padding:0;
  background: url(/themes/sirius/assets/radio/BGSRR.jpg) no-repeat center fixed; 
  -webkit-background-size: cover;
  background-size: cover;
  }
</style>
<TITLE>Sirius Radio</TITLE>
<META NAME=\"description\" CONTENT=\"\">
<META NAME=\"keywords\" CONTENT=\"\">
<META NAME=\"robot\" CONTENT=\"index,follow\">
    <meta name=\"twitter:card\" content=\"SiriusHD.Net\" />
    <meta name=\"twitter:site\" content=\"@Sirius242\" />
    <meta name=\"twitter:title\" content=\"Sirius Radio | ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\" />
    <meta name=\"twitter:description\" content=\" NCS Music radio. Développer en moins de 24heures.\" />
    <meta name=\"twitter:image\" content=\"https://siriushd.net/themes/sirius/assets/radio/logosiriusradio.png\" />

    <title>Sirius Radio ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "</title>
 
</head>
<body>
<div align=\"center\">
<p><a href=\"http://Siriushd.net/radio\"><img src=\"/themes/sirius/assets/radio/logosiriusradio.png\" alt=\"Sirius Radio\" width=\"450\"/></a></p></div>";
    }

    public function getTemplateName()
    {
        return "/var/www/siriushd.net/cms/themes/sirius/partials/radioheader.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 24,  40 => 20,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
<style type=\"text/css\">    
html { 
  margin:0;
  padding:0;
  background: url(/themes/sirius/assets/radio/BGSRR.jpg) no-repeat center fixed; 
  -webkit-background-size: cover;
  background-size: cover;
  }
</style>
<TITLE>Sirius Radio</TITLE>
<META NAME=\"description\" CONTENT=\"\">
<META NAME=\"keywords\" CONTENT=\"\">
<META NAME=\"robot\" CONTENT=\"index,follow\">
    <meta name=\"twitter:card\" content=\"SiriusHD.Net\" />
    <meta name=\"twitter:site\" content=\"@Sirius242\" />
    <meta name=\"twitter:title\" content=\"Sirius Radio | {{ this.page.meta_title }}\" />
    <meta name=\"twitter:description\" content=\" NCS Music radio. Développer en moins de 24heures.\" />
    <meta name=\"twitter:image\" content=\"https://siriushd.net/themes/sirius/assets/radio/logosiriusradio.png\" />

    <title>Sirius Radio {{ this.page.meta_title }}</title>
 
</head>
<body>
<div align=\"center\">
<p><a href=\"http://Siriushd.net/radio\"><img src=\"/themes/sirius/assets/radio/logosiriusradio.png\" alt=\"Sirius Radio\" width=\"450\"/></a></p></div>", "/var/www/siriushd.net/cms/themes/sirius/partials/radioheader.htm", "");
    }
}
