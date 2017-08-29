<?php

/* /var/www/siriushd.net/cms/themes/sirius/pages/archive-home.htm */
class __TwigTemplate_7fe3a1a754cb4e286a14905854d00cbd91a9d656f3f968462aec88d020b61d02 extends Twig_Template
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
        echo "<h1>Les Archives</h1>
\t<p>Que vous soyez la pour passer le temps ou juste pour vous marré un peut, vous etes dans la bonne section!</p>
\t<hr>
<ul>
\t\t<li><a href=\"archive/hp/\">Harmonia Pony</a></li>
\t\t<li><a href=\"archive/video/\">Les Archives Video</a> <mark><b>back soon!</b></mark></li>
\t\t<li><a href=\"archive/audio/\">Les Archives Audio</a><mark><b>Back Soon!</b></mark></li>
\t\t<li><a href=\"archive/youtube/\">Les archives de Youtube</a><mark><b>Back Soon!</b></mark></li>
\t\t<li><a href=\"archive/image/\">Les images a la con</a><mark><b>Back Soon!</b></mark></li>
\t</ul>";
    }

    public function getTemplateName()
    {
        return "/var/www/siriushd.net/cms/themes/sirius/pages/archive-home.htm";
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
        return new Twig_Source("<h1>Les Archives</h1>
\t<p>Que vous soyez la pour passer le temps ou juste pour vous marré un peut, vous etes dans la bonne section!</p>
\t<hr>
<ul>
\t\t<li><a href=\"archive/hp/\">Harmonia Pony</a></li>
\t\t<li><a href=\"archive/video/\">Les Archives Video</a> <mark><b>back soon!</b></mark></li>
\t\t<li><a href=\"archive/audio/\">Les Archives Audio</a><mark><b>Back Soon!</b></mark></li>
\t\t<li><a href=\"archive/youtube/\">Les archives de Youtube</a><mark><b>Back Soon!</b></mark></li>
\t\t<li><a href=\"archive/image/\">Les images a la con</a><mark><b>Back Soon!</b></mark></li>
\t</ul>", "/var/www/siriushd.net/cms/themes/sirius/pages/archive-home.htm", "");
    }
}
