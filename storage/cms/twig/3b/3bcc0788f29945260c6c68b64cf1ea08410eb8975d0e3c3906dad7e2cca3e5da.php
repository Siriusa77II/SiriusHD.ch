<?php

/* /var/www/siriushd.net/cms/themes/sirius/partials/header.htm */
class __TwigTemplate_22647ea0f48ee6dc29da55c5cedee8106c4cdda1c8f3465cea4d78873824be0f extends Twig_Template
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
    <meta name=\"google-site-verification\" content=\"-IRcfUAHnlhcm7XQ_7aLOh3NzUy9tfSYBxRvLrlt-yw\" />
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Sirius Brony completement fou et sysadmin pas normal\">
    <meta name=\"author\" content=\"Sirius\">
    <meta name=\"google-site-verification\" content=\"-IRcfUAHnlhcm7XQ_7aLOh3NzUy9tfSYBxRvLrlt-yw\" />
    <link rel=\"shortcut icon\" href=\"/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"/themes/sirius/assets/img/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"alternate\" hreflang=\"en\" href=\"https://siriushd.net/en\" />
    
    <meta name=\"twitter:card\" content=\"SiriusHD.Net\" />
    <meta name=\"twitter:site\" content=\"@Sirius242\" />
    <meta name=\"twitter:title\" content=\"TheSiriusHD | ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\" />
    <meta name=\"twitter:description\" content=\" Vidéaste, Brony, Developeur Web (mais pas trop) Fondateur de la norme RER-D de NitroGroup, Cloudsdale Radio et Sirius Media Group.\" />
    <meta name=\"twitter:image\" content=\"https://siriushd.net/themes/sirius/assets/img/avatar.jpg\" />

    <title>TheSiriusHD | ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "</title>

    <!-- Bootstrap Core CSS -->
    <link rel=\"stylesheet\" href=\"/themes/sirius/assets/css/bootstrap.min.css\" type=\"text/css\">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"/themes/sirius/assets/font-awesome/css/font-awesome.min.css\" type=\"text/css\">

    <!-- Plugin CSS -->
    <link rel=\"stylesheet\" href=\"/themes/sirius/assets/css/animate.min.css\" type=\"text/css\">

    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"/themes/sirius/assets/css/creative.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/themes/sirius/assets/css/footer.css\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
        <script type=\"text/javascript\">
            window.smartlook||(function(d) {
                var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
                var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
                c.charset='utf-8';c.src='//rec.getsmartlook.com/recorder.js';h.appendChild(c);
            })(document);
            smartlook('init', '9a698e82e49126b7342057014e2fd6a4ee767e5b');
        </script>
    </head>

    <body id=\"page-top\">

        <nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">SiriusHD</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand page-scroll\" href=\"#page-top\">SiriusHD</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                      <a href=\"http://blog.siriushd.net\">Blog</a>
                  </li>
                  <li>
                    <a class=\"page-scroll\" href=\"#about\">Qui suis-je?</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#services\">quelques mot</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#portfolio\">Mes projets</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#contact\">Contact</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"/objectifs-2019\">Objectifs 2019</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>";
    }

    public function getTemplateName()
    {
        return "/var/www/siriushd.net/cms/themes/sirius/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 19,  35 => 15,  19 => 1,);
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
    <meta name=\"google-site-verification\" content=\"-IRcfUAHnlhcm7XQ_7aLOh3NzUy9tfSYBxRvLrlt-yw\" />
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Sirius Brony completement fou et sysadmin pas normal\">
    <meta name=\"author\" content=\"Sirius\">
    <meta name=\"google-site-verification\" content=\"-IRcfUAHnlhcm7XQ_7aLOh3NzUy9tfSYBxRvLrlt-yw\" />
    <link rel=\"shortcut icon\" href=\"/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"/themes/sirius/assets/img/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"alternate\" hreflang=\"en\" href=\"https://siriushd.net/en\" />
    
    <meta name=\"twitter:card\" content=\"SiriusHD.Net\" />
    <meta name=\"twitter:site\" content=\"@Sirius242\" />
    <meta name=\"twitter:title\" content=\"TheSiriusHD | {{ this.page.meta_title }}\" />
    <meta name=\"twitter:description\" content=\" Vidéaste, Brony, Developeur Web (mais pas trop) Fondateur de la norme RER-D de NitroGroup, Cloudsdale Radio et Sirius Media Group.\" />
    <meta name=\"twitter:image\" content=\"https://siriushd.net/themes/sirius/assets/img/avatar.jpg\" />

    <title>TheSiriusHD | {{ this.page.meta_title }}</title>

    <!-- Bootstrap Core CSS -->
    <link rel=\"stylesheet\" href=\"/themes/sirius/assets/css/bootstrap.min.css\" type=\"text/css\">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"/themes/sirius/assets/font-awesome/css/font-awesome.min.css\" type=\"text/css\">

    <!-- Plugin CSS -->
    <link rel=\"stylesheet\" href=\"/themes/sirius/assets/css/animate.min.css\" type=\"text/css\">

    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"/themes/sirius/assets/css/creative.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/themes/sirius/assets/css/footer.css\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
        <script type=\"text/javascript\">
            window.smartlook||(function(d) {
                var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
                var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
                c.charset='utf-8';c.src='//rec.getsmartlook.com/recorder.js';h.appendChild(c);
            })(document);
            smartlook('init', '9a698e82e49126b7342057014e2fd6a4ee767e5b');
        </script>
    </head>

    <body id=\"page-top\">

        <nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">SiriusHD</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand page-scroll\" href=\"#page-top\">SiriusHD</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                      <a href=\"http://blog.siriushd.net\">Blog</a>
                  </li>
                  <li>
                    <a class=\"page-scroll\" href=\"#about\">Qui suis-je?</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#services\">quelques mot</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#portfolio\">Mes projets</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#contact\">Contact</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"/objectifs-2019\">Objectifs 2019</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>", "/var/www/siriushd.net/cms/themes/sirius/partials/header.htm", "");
    }
}
