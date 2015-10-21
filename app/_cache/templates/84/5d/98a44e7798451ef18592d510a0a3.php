<?php

/* default.html */
class __TwigTemplate_845d98a44e7798451ef18592d510a0a3 extends Twig_Template
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
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo ": Technology, Designs, Works.</title>
  <meta name=\"description\" content=\"DOTCROSSE - Technology, Designs, and Works. \">
  <meta name=\"keywords\" content=\"clean, elegant, design, simplicity, theme, html5\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
  <meta name=\"author\" content=\"dc.cyne.jp\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/img/icon.png\" />

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
    
      <div class=\"logo\" id=\"full\" style=\"display:none;\"><a class=\"ajax-link\" href=\"index.html\">";
        // line 54
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo "</a></div>
      
        <div class=\"menu-index\" style=\"display:none;\" id=\"button\">
        <i class=\"fa fa-bars\"></i>
        </div>

  </header>


<!--Header-->
<header class=\"boxed\" id=\"header-white\">

  <div class=\"header-margin\">
  
    <div class=\"logo\"><a class=\"ajax-link\" href=\"";
        // line 68
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo "</a></div>
    <ul id=\"navigation\" class=\"header-nav\">
      ";
        // line 70
        $this->env->loadTemplate("partials/navigation/navigation.html")->display($context);
        // line 71
        echo "    </ul>
    <ul class=\"social-icon\">
      <div class=\"social-index\">
      <li><a href=\"https://www.twitter.com/DotCrosse\"><i class=\"fa fa-twitter\"></i></a></li>
      <li><a href=\"https://www.behance.net/AlexNeri\"><i class=\"fa fa-behance\"></i></a></li>
      </div>
    </ul>
    
  </div>

</header>

<div class=\"clear\"></div>

<!--Content-->

<div class=\"content\" id=\"ajax-content\">


      <div class=\"text-intro\" id=\"site-type\">

        <h1>Technical.<br />Creative.<br />See all</h1>
        <h1 class=\"typewrite\"><span>Portfolio</span></h1>
        <p>This is my creative and technical portfolio site. Have a look around and see what I have been up to.</p>

      </div>


<!--Portfolio grid-->

<ul class=\"portfolio-grid\" id=\"portfolio-sidebar\">

  
    <li class=\"grid-item\" data-jkit=\"[show:delay=3000;speed=500;animation=fade]\">
      <img src=\"img/portfolio/1.png\">
        <a class=\"ajax-link\" href=\"my-designs-mirai-umbrella.html\">  
          <div class=\"grid-hover\">
            <h1>Mirai Umbrella</h1>
            <p>Product Design</p>
          </div>
        </a>  
    </li>

    <li class=\"grid-item\" data-jkit=\"[show:delay=3000;speed=500;animation=fade]\">
      <img src=\"img/portfolio/5.png\">
        <a class=\"ajax-link\" href=\"my-designs-cucina-espana.html\">  
          <div class=\"grid-hover\">
            <h1>Cucina España</h1>
            <p>Branding</p>
          </div>
        </a>      
    </li> 
  
  <li class=\"grid-item\" data-jkit=\"[show:delay=3000;speed=500;animation=fade]\">
    <img src=\"img/portfolio/2.jpg\">
      <a class=\"ajax-link\" href=\"#\">  
        <div class=\"grid-hover\">
          <h1>Single</h1>
          <p>Branding</p>
        </div>
      </a>      
  </li>  
  
  <li class=\"grid-item\" data-jkit=\"[show:delay=3000;speed=500;animation=fade]\">
    <img src=\"img/portfolio/3.jpg\">
      <a class=\"ajax-link\" href=\"#\">  
        <div class=\"grid-hover\">
          <h1>Single</h1>
          <p>Branding</p>
        </div>
      </a>      
  </li>    

  <li class=\"grid-item\" data-jkit=\"[show:delay=3000;speed=500;animation=fade]\">
    <img src=\"img/portfolio/4.jpg\">
      <a class=\"ajax-link\" href=\"#\">  
        <div class=\"grid-hover\">
          <h1>Single</h1>
          <p>Branding</p>
        </div>
      </a>      
  </li>    

  <li class=\"grid-item\" data-jkit=\"[show:delay=3000;speed=500;animation=fade]\">
    <img src=\"img/portfolio/6.jpg\">
      <a class=\"ajax-link\" href=\"#\">  
        <div class=\"grid-hover\">
          <h1>Single</h1>
          <p>Branding</p>
        </div>
      </a>      
  </li>  

</ul>

</div>


<!--Home Sidebar-->

<div id=\"ajax-sidebar\">

    <div class=\"home-sidebar\"style=\"background-image:url('img/home-sidebar.jpg')\" id=\"hero\">

      <div class=\"parallax-option\" data-jkit=\"[parallax:strength=0.8;axis=both]\">

        <div class=\"parallax parallax1\"><img src=\"";
        // line 177
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/img/business-card-2.png\"></div>
      
      </div>
      
      <div class=\"parallax-option\" data-jkit=\"[parallax:strength=0.5;axis=both]\">

        <div class=\"parallax parallax1\"><img src=\"";
        // line 183
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/img/char_img.png\"></div>
      
      </div>

      <div class=\"parallax-option\" data-jkit=\"[parallax:strength=0.3;axis=both]\">

        <div class=\"parallax parallax1\"><img src=\"";
        // line 189
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/img/business-card.png\"></div>
      
      </div>

    </div>

</div>


<!--Footer-->

<footer id=\"footer-box\">

  <div class=\"footer-margin\">
   
  <div class=\"copyright\" id=\"footer-left\">© Copyright ";
        // line 204
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "current_year");
        echo " Alex Neri | ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        echo ". All Rights Reserved unless otherwise specified. <a class=\"atom-rss\" href=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/?/feed/\">RSS</a> </div>
  
  </div>


</footer>


<!--Scripts-->

  <script src=\"";
        // line 214
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/js/jquery.min.js\"></script>
\t<script src=\"";
        // line 215
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/js/jquery.easing.min.js\"></script>
\t<script src=\"";
        // line 216
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/js/modernizr.custom.42534.js\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 217
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/js/jquery.waitforimages.js\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 218
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/js/typed.js\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 219
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/js/masonry.pkgd.min.js\" type=\"text/javascript\"></script>  
  <script src=\"";
        // line 220
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/js/imagesloaded.pkgd.min.js\" type=\"text/javascript\"></script>    
  <script src=\"";
        // line 221
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/templates/js/jquery.jkit.1.2.16.min.js\"></script>
  <script src=\"";
        // line 222
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
        return "default.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
