<?php

/* /var/www/siriushd.net/cms/themes/sirius/layouts/Maintenance.htm */
class __TwigTemplate_1df20e0f19a12dac69524acdf60fd103c4f4e61d8021c2bc2b980f934e1a09ea extends Twig_Template
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
        echo "<head>
    <title>TheSiriusHD | ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "</title>
<style>
  body { text-align: center; padding: 150px; }
  h1 { font-size: 100px; }
  body { font: 20px Helvetica, sans-serif; color: #333; }
  article { display: block; text-align: left; width: 650px; margin: 0 auto; }
  a { color: #dc8100; text-decoration: none; }
  a:hover { color: #333; text-decoration: none; }
  div.yay { position: absolute; top: 40%; left: 30%; text-align: center;}
  div.normale { position: absolute; bottom: 0px; text-align: center; }
</style>
</head>
    <body>

";
        // line 16
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 17
        echo "
</body>
<!--lol-->";
    }

    public function getTemplateName()
    {
        return "/var/www/siriushd.net/cms/themes/sirius/layouts/Maintenance.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 17,  39 => 16,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<head>
    <title>TheSiriusHD | {{ this.page.meta_title }}</title>
<style>
  body { text-align: center; padding: 150px; }
  h1 { font-size: 100px; }
  body { font: 20px Helvetica, sans-serif; color: #333; }
  article { display: block; text-align: left; width: 650px; margin: 0 auto; }
  a { color: #dc8100; text-decoration: none; }
  a:hover { color: #333; text-decoration: none; }
  div.yay { position: absolute; top: 40%; left: 30%; text-align: center;}
  div.normale { position: absolute; bottom: 0px; text-align: center; }
</style>
</head>
    <body>

{% page %}

</body>
<!--lol-->", "/var/www/siriushd.net/cms/themes/sirius/layouts/Maintenance.htm", "");
    }
}
