<?php

/* /var/www/siriushd.net/cms/plugins/mavitm/youtubechannel/components/ytplaylist/default.htm */
class __TwigTemplate_82100dd4ad184ef97784bf0e33ec6e8eaa9ee9222ff41065fe3e05a2501a712a extends Twig_Template
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
    .playerArea{
        display: block;
        margin-bottom:15px;
        background-color: #000000;
    }
    .playerListArea{
        position: relative;
        height: ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "playerHeight", array()), "html", null, true);
                echo "px;
        overflow: auto;
    }
    .playerListItem{
        display: block;
        height: ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "thumbHeight", array()), "html", null, true);
                echo "px;
        border-bottom:1px solid #CCCCCC;
    }
    .playerListItem img{
        float: left;
        margin-right: 15px;
        width: ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "thumbWidth", array()), "html", null, true);
                echo "px;
        height: ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "thumbHeight", array()), "html", null, true);
                echo "px;
    }
    .playerListItem h3{
        font-size: 14px;
        margin: 0;
        padding: 15px 0;
    }
    .playerListItem h3 a{
        color: #CCCCCC;
    }
</style>
";
                // line 4
                echo $this->env->getExtension('CMS')->endBlock(true                );
            }
            // line 38
            echo "
    ";
            // line 39
            $context["items"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "data", array());
            // line 40
            echo "    ";
            $context["x"] = 0;
            // line 41
            echo "    <div class=\"playerArea\">
        <div class=\"row\">
            <div class=\"col-sm-8\" id=\"";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
            echo "\">
                ";
            // line 44
            echo $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "firstEmbed", array());
            echo "
            </div>
            <div class=\"col-sm-4\">
                <div class=\"playerListArea\">
                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 49
                echo "                    <div class=\"playerListItem\">
                        <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                echo "\" data-href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "autoEmbed", array()), "html", null, true);
                echo "\" data-target=\"#";
                echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
                echo "\" data-v=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "v", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", array()), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"Video\"></a>
                        <h3 data-href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "autoEmbed", array()), "html", null, true);
                echo "\" data-v=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "v", array()), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                echo "\" data-target=\"#";
                echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
                echo "\" data-href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "autoEmbed", array()), "html", null, true);
                echo "\" data-v=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "v", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</a></h3>
                    </div>
                ";
                // line 53
                $context["x"] = ((isset($context["x"]) ? $context["x"] : null) + 1);
                // line 54
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                </div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
";
        }
        // line 62
        echo "
";
        // line 63
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 64
        echo "<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$(\".playerListItem a\").click(function(){
            var target = \$(this).data(\"target\");
            \$(\"iframe\", target).attr(\"src\", \$(this).data(\"href\"));
            return false;
        });
    });
</script>
";
        // line 63
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/siriushd.net/cms/plugins/mavitm/youtubechannel/components/ytplaylist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 63,  157 => 64,  155 => 63,  152 => 62,  143 => 55,  137 => 54,  135 => 53,  118 => 51,  106 => 50,  103 => 49,  99 => 48,  92 => 44,  88 => 43,  84 => 41,  81 => 40,  79 => 39,  76 => 38,  73 => 4,  59 => 25,  55 => 24,  46 => 18,  38 => 13,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
    .playerArea{
        display: block;
        margin-bottom:15px;
        background-color: #000000;
    }
    .playerListArea{
        position: relative;
        height: {{ __SELF__.playerHeight }}px;
        overflow: auto;
    }
    .playerListItem{
        display: block;
        height: {{ __SELF__.thumbHeight }}px;
        border-bottom:1px solid #CCCCCC;
    }
    .playerListItem img{
        float: left;
        margin-right: 15px;
        width: {{ __SELF__.thumbWidth }}px;
        height: {{ __SELF__.thumbHeight }}px;
    }
    .playerListItem h3{
        font-size: 14px;
        margin: 0;
        padding: 15px 0;
    }
    .playerListItem h3 a{
        color: #CCCCCC;
    }
</style>
{% endput %}
{% endif %}

    {% set items = __SELF__.data %}
    {% set x = 0 %}
    <div class=\"playerArea\">
        <div class=\"row\">
            <div class=\"col-sm-8\" id=\"{{ __SELF__ }}\">
                {{ __SELF__.firstEmbed|raw }}
            </div>
            <div class=\"col-sm-4\">
                <div class=\"playerListArea\">
                {% for item in items %}
                    <div class=\"playerListItem\">
                        <a href=\"{{ item.url }}\" data-href=\"{{ item.autoEmbed }}\" data-target=\"#{{ __SELF__ }}\" data-v=\"{{ item.v }}\"><img src=\"{{ item.image }}\" class=\"img-responsive\" alt=\"Video\"></a>
                        <h3 data-href=\"{{ item.autoEmbed }}\" data-v=\"{{ item.v }}\"><a href=\"{{ item.url }}\" data-target=\"#{{ __SELF__ }}\" data-href=\"{{ item.autoEmbed }}\" data-v=\"{{ item.v }}\">{{ item.title }}</a></h3>
                    </div>
                {% set x = x + 1 %}
                {% endfor %}
                </div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
{% endif %}

{% put scripts %}
<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$(\".playerListItem a\").click(function(){
            var target = \$(this).data(\"target\");
            \$(\"iframe\", target).attr(\"src\", \$(this).data(\"href\"));
            return false;
        });
    });
</script>
{% endput %}", "/var/www/siriushd.net/cms/plugins/mavitm/youtubechannel/components/ytplaylist/default.htm", "");
    }
}
