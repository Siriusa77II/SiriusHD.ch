<?php

/* /var/www/siriushd.net/cms/plugins/mavitm/youtubechannel/components/ytlist/default.htm */
class __TwigTemplate_0c10b5a6ed96edc1af6d3811c4c824b362c3ef48c81752c6ca33f39d29d8ec2b extends Twig_Template
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
        if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "data", array())) {
            // line 2
            echo "
";
            // line 3
            if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "putCss", array())) {
                // line 4
                echo $this->env->getExtension('CMS')->startBlock('styles'                );
                // line 5
                echo "<style>
    .ytChannelList{
        display: block;
        margin-bottom:15px;
        padding-top: 15px;
        padding-bottom: 15px;
        background-color: #FFFFFF;
        border: 1px solid #D1D1D1;
    }
    .ytChannelList img{
        float: left;
        margin-right: 15px;
        width: 20px;
    }
    .ytChannelList h3{
        font-size: 4px;
        margin: 0;
        padding: 0;
    }
</style>
";
                // line 4
                echo $this->env->getExtension('CMS')->endBlock(true                );
            }
            // line 27
            echo "
    ";
            // line 28
            $context["items"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "data", array());
            // line 29
            echo "    ";
            $context["x"] = 10;
            // line 30
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 31
                echo "\t
            <div class=\"col-md-4\">
                <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                echo "\" data-href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "embed", array()), "html", null, true);
                echo "\" data-v=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "v", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", array()), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"Video\"></a>
                <h3 data-href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "embed", array()), "html", null, true);
                echo "\" data-v=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "v", array()), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                echo "\" data-href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "embed", array()), "html", null, true);
                echo "\" data-v=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "v", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</a></h3>
</div>

        ";
                // line 37
                $context["x"] = ((isset($context["x"]) ? $context["x"] : null) + 1);
                // line 38
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "/var/www/siriushd.net/cms/plugins/mavitm/youtubechannel/components/ytlist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 38,  96 => 37,  80 => 34,  70 => 33,  66 => 31,  61 => 30,  58 => 29,  56 => 28,  53 => 27,  50 => 4,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if __SELF__.data %}

{% if __SELF__.putCss %}
{% put styles %}
<style>
    .ytChannelList{
        display: block;
        margin-bottom:15px;
        padding-top: 15px;
        padding-bottom: 15px;
        background-color: #FFFFFF;
        border: 1px solid #D1D1D1;
    }
    .ytChannelList img{
        float: left;
        margin-right: 15px;
        width: 20px;
    }
    .ytChannelList h3{
        font-size: 4px;
        margin: 0;
        padding: 0;
    }
</style>
{% endput %}
{% endif %}

    {% set items = __SELF__.data %}
    {% set x = 10 %}
    {% for item in items %}
\t
            <div class=\"col-md-4\">
                <a href=\"{{ item.url }}\" data-href=\"{{ item.embed }}\" data-v=\"{{ item.v }}\"><img src=\"{{ item.image }}\" class=\"img-responsive\" alt=\"Video\"></a>
                <h3 data-href=\"{{ item.embed }}\" data-v=\"{{ item.v }}\"><a href=\"{{ item.url }}\" data-href=\"{{ item.embed }}\" data-v=\"{{ item.v }}\">{{ item.title }}</a></h3>
</div>

        {% set x = x + 1 %}
    {% endfor %}
{% endif %}
", "/var/www/siriushd.net/cms/plugins/mavitm/youtubechannel/components/ytlist/default.htm", "");
    }
}
