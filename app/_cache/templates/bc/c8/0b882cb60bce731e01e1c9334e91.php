<?php

/* page.html */
class __TwigTemplate_bcc80b882cb60bce731e01e1c9334e91 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>

<html lang=\"en\">
<head>

  <meta charset=\"utf-8\">
  <title>";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
        echo " | ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo " - Technology, Designs, and Works.</title>
  <meta name=\"description\" content=\"";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
        echo " | ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo " - Technology, Designs, and Works. \">
  <meta name=\"keywords\" content=\"about, DotCrosse, theme, html5\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
  <meta name=\"author\" content=\"dc.cyne.jp\">
  <link rel=\"icon\" type=\"image/png\" href=\"img/icon.png\" />

<!--Style-->

  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/css/reset.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/css/style.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/css/style-responsive.css\">  
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
  
  <!--[if lt IE 9]>
  <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
  <![endif]-->
  
</head>

<body>

<!--Preloader-->

<div class=\"preloader\" id=\"preloader\">
    <div class=\"item\">
      <div class=\"spinner\">
      </div>
    </div>
</div>

<div class=\"opacity-nav\">

        <div class=\"menu-index\" id=\"buttons\" style=\"z-index:999999\">
        <i class=\"fa  fa-close\"></i>
        </div>

    <ul class=\"menu-fullscreen\">
      ";
        // line 45
        $this->env->loadTemplate("partials/navigation/navigation.html")->display($context);
        // line 46
        echo "    </ul>

</div>


  <!--Header-->
  <header id=\"fullscreen\">
    
      <div class=\"logo\" id=\"full\"><a class=\"ajax-link\" href=\"index.php\">";
        // line 54
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo "</a></div>
      
        <div class=\"menu-index\" id=\"button\">
        <i class=\"fa fa-bars\"></i>
        </div>

  </header>

  <div class=\"clear\"></div>

  <!--Content-->

  <div class=\"content\" id=\"ajax-content\">


        <div class=\"text-intro\">

          <h1>";
        // line 71
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
        echo "</h1>
                    
          <div class=\"one-column\">
            <p>";
        // line 74
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "profession");
        echo "</p>
          
          </div>


          <div class=\"two-column\">

          ";
        // line 81
        $this->env->loadTemplate("partials/assets/images.html")->display($context);
        // line 82
        echo "          ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content");
        echo "
          ";
        // line 83
        $this->env->loadTemplate("partials/assets/pdfs.html")->display($context);
        // line 84
        echo "          
          </div>          


        </div>
        
        <div class=\"clear\"></div>

        <div class=\"text-intro\" id=\"site-type\">

          <h1>Works</h1>
          <p>Modern. Clean. Professionally done.</p>

        </div>
</div>

  <!--Philosophy separator-->
                <div class=\"clear\"></div>   \t\t\t\t  
                 \t\t\t\t        
\t\t\t\t        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
\t\t\t\t        
\t\t\t\t        <img src=\"img/portfolio/miraisuenaga-umbrella.png\" width=\"100%\"><br/><br/><br/><br/>



  <!--Home Sidebar-->

<div id=\"ajax-sidebar\"></div>


  <!--Footer-->

  <footer id=\"ajax-footer\">

    <div class=\"footer-margin\">
      <div class=\"social-footer\">
        <a href=\"https://www.twitter.com/DotCrosse\"><i class=\"fa fa-twitter\"></i></a>
        <a href=\"https://www.behance.net/AlexNeri\"><i class=\"fa fa-behance\"></i></a>
      
      </div>     
      <div class=\"copyright\" id=\"footer-left\">© Copyright 2015 Alex Neri | DotCrosse. All Rights Reserved unless otherwise specified.</div>
    
    </div>


  </footer>


<!--Scripts-->

  <script src=\"";
        // line 134
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/js/jquery.min.js\"></script>
\t<script src=\"";
        // line 135
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/js/jquery.easing.min.js\"></script>
\t<script src=\"";
        // line 136
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/js/modernizr.custom.42534.js\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 137
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/js/jquery.waitforimages.js\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 138
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/js/typed.js\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 139
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/js/masonry.pkgd.min.js\" type=\"text/javascript\"></script>  
  <script src=\"";
        // line 140
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/js/imagesloaded.pkgd.min.js\" type=\"text/javascript\"></script>    
  <script src=\"";
        // line 141
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/js/jquery.jkit.1.2.16.min.js\"></script>
 
  <script src=\"";
        // line 143
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/js/script.js\" type=\"text/javascript\"></script>
  
\t<script>
    \$('#button, #buttons').on('click', function() {
      \$( \".opacity-nav\" ).fadeToggle( \"slow\", \"linear\" );
    // Animation complete.
    });
  </script>


</body>
</html>";
    }

    public function getTemplateName()
    {
        return "page.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
