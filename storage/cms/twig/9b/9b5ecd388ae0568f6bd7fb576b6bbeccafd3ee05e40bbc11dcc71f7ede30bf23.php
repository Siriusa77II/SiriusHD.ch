<?php

/* /var/www/siriushd.net/cms/themes/sirius/pages/test-kira.htm */
class __TwigTemplate_61b15e2714ba22b11aebe4e89cac14dc0af7b8f0707e57740f1c67d530083bd4 extends Twig_Template
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
\t<head>
\t\t<title>Kira - Video</title>
\t\t<style>
\t\t\t<style>
    .ytChannelList{
        display: block;

        background-color: #FFFFFF;
        border: 1px solid #D1D1D1;
    }
    .ytChannelList img{
        float: left;
        margin-right: 15px;
        width: 100px;
    }
    .ytChannelList h3{
        font-size: 14px;
        margin: 0;
        padding: 0;
    }

\t\t</style>
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">
\t</head>
\t\t
\t<body>
<div class=\"row ytChannelList\">
";
        // line 29
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("youtubechannelList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 30
        echo "
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/siriushd.net/cms/themes/sirius/pages/test-kira.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 30,  49 => 29,  19 => 1,);
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
\t<head>
\t\t<title>Kira - Video</title>
\t\t<style>
\t\t\t<style>
    .ytChannelList{
        display: block;

        background-color: #FFFFFF;
        border: 1px solid #D1D1D1;
    }
    .ytChannelList img{
        float: left;
        margin-right: 15px;
        width: 100px;
    }
    .ytChannelList h3{
        font-size: 14px;
        margin: 0;
        padding: 0;
    }

\t\t</style>
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">
\t</head>
\t\t
\t<body>
<div class=\"row ytChannelList\">
{% component 'youtubechannelList' %}

<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
</body>
</html>", "/var/www/siriushd.net/cms/themes/sirius/pages/test-kira.htm", "");
    }
}
