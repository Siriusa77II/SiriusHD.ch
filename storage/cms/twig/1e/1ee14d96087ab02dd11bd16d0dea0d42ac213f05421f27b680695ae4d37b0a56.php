<?php

/* /var/www/siriushd.net/cms/themes/sirius/layouts/default.htm */
class __TwigTemplate_b10d14cff478e16da8601d8c1d902260e0dd29d0bceafa117f8ffa7d29671392 extends Twig_Template
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
<!--
  ____            _        _                                                                              
 |  _ \\ _ __ ___ | |_ ___ | |_ _   _ _ __   ___                                                           
 | |_) | '__/ _ \\| __/ _ \\| __| | | | '_ \\ / _ \\                                                          
 |  __/| | | (_) | || (_) | |_| |_| | |_) |  __/                                                          
 |_|   |_|  \\___/ \\__\\___/ \\__|\\__, | .__/ \\___|                                                          
  ____                         |___/|_|   _             _   _ _ _              ____                       
 |  _ \\ _____      _____ _ __ ___  __| | | |__  _   _  | \\ | (_) |_ _ __ ___  / ___|_ __ ___  _   _ _ __  
 | |_) / _ \\ \\ /\\ / / _ \\ '__/ _ \\/ _` | | '_ \\| | | | |  \\| | | __| '__/ _ \\| |  _| '__/ _ \\| | | | '_ \\ 
 |  __/ (_) \\ V  V /  __/ | |  __/ (_| | | |_) | |_| | | |\\  | | |_| | | (_) | |_| | | | (_) | |_| | |_) |
 |_|   \\___/ \\_/\\_/ \\___|_|  \\___|\\__,_| |_.__/ \\__, | |_| \\_|_|\\__|_|  \\___/ \\____|_|  \\___/ \\__,_| .__/ 
                                                |___/                                              |_|    
Developped by Sirius (https://SiriusHD.net)
For Sirius (https://www.youtube.com/TheSiriusHD)
Hosted on NitroGroup Server (Node: FRWEB01 89.234.182.129)
Version: production 4.6
-->
<html lang=\"fr\">
";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 21
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/siriushd.net/cms/themes/sirius/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 23,  46 => 22,  44 => 21,  40 => 20,  19 => 1,);
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
<!--
  ____            _        _                                                                              
 |  _ \\ _ __ ___ | |_ ___ | |_ _   _ _ __   ___                                                           
 | |_) | '__/ _ \\| __/ _ \\| __| | | | '_ \\ / _ \\                                                          
 |  __/| | | (_) | || (_) | |_| |_| | |_) |  __/                                                          
 |_|   |_|  \\___/ \\__\\___/ \\__|\\__, | .__/ \\___|                                                          
  ____                         |___/|_|   _             _   _ _ _              ____                       
 |  _ \\ _____      _____ _ __ ___  __| | | |__  _   _  | \\ | (_) |_ _ __ ___  / ___|_ __ ___  _   _ _ __  
 | |_) / _ \\ \\ /\\ / / _ \\ '__/ _ \\/ _` | | '_ \\| | | | |  \\| | | __| '__/ _ \\| |  _| '__/ _ \\| | | | '_ \\ 
 |  __/ (_) \\ V  V /  __/ | |  __/ (_| | | |_) | |_| | | |\\  | | |_| | | (_) | |_| | | | (_) | |_| | |_) |
 |_|   \\___/ \\_/\\_/ \\___|_|  \\___|\\__,_| |_.__/ \\__, | |_| \\_|_|\\__|_|  \\___/ \\____|_|  \\___/ \\__,_| .__/ 
                                                |___/                                              |_|    
Developped by Sirius (https://SiriusHD.net)
For Sirius (https://www.youtube.com/TheSiriusHD)
Hosted on NitroGroup Server (Node: FRWEB01 89.234.182.129)
Version: production 4.6
-->
<html lang=\"fr\">
{% partial \"header\" %}
{% page %}
{% partial \"footer\" %}
</html>", "/var/www/siriushd.net/cms/themes/sirius/layouts/default.htm", "");
    }
}
