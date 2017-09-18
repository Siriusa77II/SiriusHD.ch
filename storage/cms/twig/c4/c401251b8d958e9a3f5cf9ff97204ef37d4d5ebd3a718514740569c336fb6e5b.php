<?php

/* /var/www/siriushd.net/cms/themes/sirius/partials/footer.htm */
class __TwigTemplate_a5f9caf02bef36755624dfec0fd6b20a90376810c43fd998781cce984455153b extends Twig_Template
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
        echo "</body>
    <footer>
        <!--footer start from here-->
        <footer>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-4 col-sm-6 footerleft \">
                <div class=\"logofooter\">SiriusNetwork</div>
                <small><h3 class=\"logofooter\">Autres Liens de mon site.</h3></small>
                <a href=\"https://blog.siriushd.net\">Blog</a><br>
                <a href=\"/archive\">Archives</a><br>
                <a href=\"#dedale\">dedale</a><br>        
            </div>
            <div class=\"col-md-2 col-sm-6 paddingtop-bottom\">
                <h6 class=\"heading7\">Sites Amis</h6>
                <ul class=\"footer-ul\">
                  <li><a href=\"http://cloudsdaleradio.com\"> Cloudsdale Radio</a></li>
                  <li><a href=\"https://greenp.fr\"> GreenP</a></li>
                  <li><a href=\"https://Snowfox.fr\"> Snowfox</a></li>
                  <li><a href=\"http://unfdev.com\"> Unfdev.com</a></li>

              </ul>
          </div>
          <div class=\"col-md-3 col-sm-6 paddingtop-bottom\">
            <h6 class=\"heading7\">Partenaire</h6>
            <a href=\"humans.txt\"><img src=\"/themes/sirius/assets/img/humanstxt-isolated-blank.gif\"></a><br>
            <a href=\"http://siriushd.speedtest.net/fr\"><img src=\"/themes/sirius/assets/img/ookla_color_250.png\" width=\"35%\"></a><br>
            <a href=\"https://github.com/Siriusa77II\"><img src=\"/themes/sirius/assets/img/Git-Logo-White.png\" width=\"35%\"></a><br>
            <a href=\"http://nitrogroup.fr\"><img src=\"/themes/sirius/assets/img/NGlogo.png\" width=\"30%\"></a>
        </div>
        <div class=\"col-md-3 col-sm-6 paddingtop-bottom\">
            <div class=\"fb-page\" data-href=\"https://www.facebook.com/facebook\" data-tabs=\"timeline\" data-height=\"300\" data-small-header=\"false\" style=\"margin-bottom:15px;\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\">
              <div class=\"fb-xfbml-parse-ignore\">
                <blockquote cite=\"https://www.twitter.com/Sirius242\"><a href=\"https://www.twitter.com/Sirius242\">Twitter</a></blockquote>
                <a href=\"https://twitter.com/Sirius242\" class=\"twitter-follow-button\" data-size=\"large\" data-dnt=\"true\" data-show-count=\"false\">Follow @Sirius242</a><script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>

                
            </div>
        </div>
    </div>
</div>
</div>
</footer>
<!--footer start from here-->

<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"col-md-6\">
      <p>      <p>Copyright © <a href=\"https://www.copyrighted.com/copyrights/view/pdcn-bnvq-f7x8-efoi\">Sirius</a> &#x25cf; 
        Copyright © Sirius Network
    </p>
</div>
<div class=\"col-md-6\">
  <p class=\"align-right\">
    <a target=\"_blank\" href=\"https://www.copyrighted.com/copyrights/view/pdcn-bnvq-f7x8-efoi\"><img border=\"0\" alt=\"Copyrighted.com Registered &amp; Protected 
        PDCN-BNVQ-F7X8-EFOI\" title=\"Copyrighted.com Registered &amp; Protected 
        PDCN-BNVQ-F7X8-EFOI\" width=\"150\" height=\"40\" src=\"https://static.copyrighted.com/images/seal.gif\" /></a></p>
    </ul>
</div>
</div>
</div>
</footer>
<!-- jQuery -->
<script src=\"/themes/sirius/assets/js/jquery.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"/themes/sirius/assets/js/bootstrap.min.js\"></script>

<!-- Plugin JavaScript -->
<script src=\"/themes/sirius/assets/js/jquery.easing.min.js\"></script>
<script src=\"/themes/sirius/assets/js/jquery.fittext.js\"></script>
<script src=\"/themes/sirius/assets/js/wow.min.js\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"/themes/sirius/assets/js/creative.js\"></script>

<!--Google Script-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41611090-3', 'auto');
  ga('send', 'pageview');

</script>
<script type=\"text/javascript\">
var k = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65],
n = 0;
\$(document).keydown(function (e) {
    if (e.keyCode === k[n++]) {
        if (n === k.length) {
            var audio = new Audio('/storage/app/media/konami/konami.wav');
            audio.play();
            alert('Tweet moi si tu as trouver ce petit easter egg! :p');
            n = 0;
            return false;
        }
    }
    else {
        n = 0;
    }
});

</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/siriushd.net/cms/themes/sirius/partials/footer.htm";
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
        return new Twig_Source("</body>
    <footer>
        <!--footer start from here-->
        <footer>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-4 col-sm-6 footerleft \">
                <div class=\"logofooter\">SiriusNetwork</div>
                <small><h3 class=\"logofooter\">Autres Liens de mon site.</h3></small>
                <a href=\"https://blog.siriushd.net\">Blog</a><br>
                <a href=\"/archive\">Archives</a><br>
                <a href=\"#dedale\">dedale</a><br>        
            </div>
            <div class=\"col-md-2 col-sm-6 paddingtop-bottom\">
                <h6 class=\"heading7\">Sites Amis</h6>
                <ul class=\"footer-ul\">
                  <li><a href=\"http://cloudsdaleradio.com\"> Cloudsdale Radio</a></li>
                  <li><a href=\"https://greenp.fr\"> GreenP</a></li>
                  <li><a href=\"https://Snowfox.fr\"> Snowfox</a></li>
                  <li><a href=\"http://unfdev.com\"> Unfdev.com</a></li>

              </ul>
          </div>
          <div class=\"col-md-3 col-sm-6 paddingtop-bottom\">
            <h6 class=\"heading7\">Partenaire</h6>
            <a href=\"humans.txt\"><img src=\"/themes/sirius/assets/img/humanstxt-isolated-blank.gif\"></a><br>
            <a href=\"http://siriushd.speedtest.net/fr\"><img src=\"/themes/sirius/assets/img/ookla_color_250.png\" width=\"35%\"></a><br>
            <a href=\"https://github.com/Siriusa77II\"><img src=\"/themes/sirius/assets/img/Git-Logo-White.png\" width=\"35%\"></a><br>
            <a href=\"http://nitrogroup.fr\"><img src=\"/themes/sirius/assets/img/NGlogo.png\" width=\"30%\"></a>
        </div>
        <div class=\"col-md-3 col-sm-6 paddingtop-bottom\">
            <div class=\"fb-page\" data-href=\"https://www.facebook.com/facebook\" data-tabs=\"timeline\" data-height=\"300\" data-small-header=\"false\" style=\"margin-bottom:15px;\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\">
              <div class=\"fb-xfbml-parse-ignore\">
                <blockquote cite=\"https://www.twitter.com/Sirius242\"><a href=\"https://www.twitter.com/Sirius242\">Twitter</a></blockquote>
                <a href=\"https://twitter.com/Sirius242\" class=\"twitter-follow-button\" data-size=\"large\" data-dnt=\"true\" data-show-count=\"false\">Follow @Sirius242</a><script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>

                
            </div>
        </div>
    </div>
</div>
</div>
</footer>
<!--footer start from here-->

<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"col-md-6\">
      <p>      <p>Copyright © <a href=\"https://www.copyrighted.com/copyrights/view/pdcn-bnvq-f7x8-efoi\">Sirius</a> &#x25cf; 
        Copyright © Sirius Network
    </p>
</div>
<div class=\"col-md-6\">
  <p class=\"align-right\">
    <a target=\"_blank\" href=\"https://www.copyrighted.com/copyrights/view/pdcn-bnvq-f7x8-efoi\"><img border=\"0\" alt=\"Copyrighted.com Registered &amp; Protected 
        PDCN-BNVQ-F7X8-EFOI\" title=\"Copyrighted.com Registered &amp; Protected 
        PDCN-BNVQ-F7X8-EFOI\" width=\"150\" height=\"40\" src=\"https://static.copyrighted.com/images/seal.gif\" /></a></p>
    </ul>
</div>
</div>
</div>
</footer>
<!-- jQuery -->
<script src=\"/themes/sirius/assets/js/jquery.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"/themes/sirius/assets/js/bootstrap.min.js\"></script>

<!-- Plugin JavaScript -->
<script src=\"/themes/sirius/assets/js/jquery.easing.min.js\"></script>
<script src=\"/themes/sirius/assets/js/jquery.fittext.js\"></script>
<script src=\"/themes/sirius/assets/js/wow.min.js\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"/themes/sirius/assets/js/creative.js\"></script>

<!--Google Script-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41611090-3', 'auto');
  ga('send', 'pageview');

</script>
<script type=\"text/javascript\">
var k = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65],
n = 0;
\$(document).keydown(function (e) {
    if (e.keyCode === k[n++]) {
        if (n === k.length) {
            var audio = new Audio('/storage/app/media/konami/konami.wav');
            audio.play();
            alert('Tweet moi si tu as trouver ce petit easter egg! :p');
            n = 0;
            return false;
        }
    }
    else {
        n = 0;
    }
});

</script>", "/var/www/siriushd.net/cms/themes/sirius/partials/footer.htm", "");
    }
}
