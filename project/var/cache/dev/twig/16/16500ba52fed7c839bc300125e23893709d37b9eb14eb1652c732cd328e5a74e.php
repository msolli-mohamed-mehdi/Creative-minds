<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base-front.html.twig */
class __TwigTemplate_6e07f7bc11c4dd9662ce1b05ba4bf67720dcecfeead6635155e168e3f5046586 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'CSS' => [$this, 'block_CSS'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<!--[if gt IE 8]><!-->
<html class=\"no-js\">
<!--<![endif]-->

<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>Luxe &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"Free HTML5 Template by FREEHTML5.CO\" />
\t<meta name=\"keywords\" content=\"free html5, free template, free bootstrap, html5, css3, mobile first, responsive\" />
\t<meta name=\"author\" content=\"FREEHTML5.CO\" />

\t<meta property=\"og:title\" content=\"\" />
\t<meta property=\"og:image\" content=\"\" />
\t<meta property=\"og:url\" content=\"\" />
\t<meta property=\"og:site_name\" content=\"\" />
\t<meta property=\"og:description\" content=\"\" />
\t<meta name=\"twitter:title\" content=\"\" />
\t<meta name=\"twitter:image\" content=\"\" />
\t<meta name=\"twitter:url\" content=\"\" />
\t<meta name=\"twitter:card\" content=\"\" />


\t<link rel=\"shortcut icon\" href=\"favicon.ico\">
\t<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->
    ";
        // line 29
        $this->displayBlock('CSS', $context, $blocks);
        // line 56
        echo "
</head>

<body>
\t<div id=\"fh5co-wrapper\">
\t\t<div id=\"fh5co-page\">
\t\t\t<div id=\"fh5co-header\">
\t\t\t\t<header id=\"fh5co-header-section\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"nav-header\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"js-fh5co-nav-toggle fh5co-nav-toggle\"><i></i></a>
\t\t\t\t\t\t\t<h1 id=\"fh5co-logo\"><a href=\"index.html\">Luxe</a></h1>
\t\t\t\t\t\t\t<nav id=\"fh5co-menu-wrap\" role=\"navigation\">
\t\t\t\t\t\t\t\t<ul class=\"sf-menu\" id=\"fh5co-primary-menu\">
\t\t\t\t\t\t\t\t\t<li><a class=\"active\" href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"hotel.html\" class=\"fh5co-sub-ddown\">Hotel</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Luxe Hotel</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Deluxe Hotel</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fh5co-sub-ddown\">King Hotel</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\">Build</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\">Work</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\">Light</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\">Relic</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\">Display</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\">Sprint</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Five Star Hotel</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"services.html\">Services</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</header>

\t\t\t</div>
\t\t\t<!-- end:fh5co-header -->
\t\t\t<aside id=\"fh5co-hero\" class=\"js-fullheight\">
\t\t\t\t<div class=\"flexslider js-fullheight\">
\t\t\t\t\t<ul class=\"slides\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li style=\"background-image: url( ";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/images/slider2.jpg"), "html", null, true);
        echo " )\">
\t\t\t\t\t\t\t<div class=\"overlay-gradient\"></div>
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-md-offset-0 text-center slider-text\">
\t\t\t\t\t\t\t\t\t<div class=\"slider-text-inner js-fullheight\">
\t\t\t\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t\t\t\t<p><span>Deluxe Hotel</span></p>
\t\t\t\t\t\t\t\t\t\t\t<h2>Make Your Vacation Comfortable</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-lg\">Book Now</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li style=\"background-image: url(  ";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/images/slider3.jpg"), "html", null, true);
        echo "  )\">
\t\t\t\t\t\t\t<div class=\"overlay-gradient\"></div>
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-md-offset-0 text-center slider-text\">
\t\t\t\t\t\t\t\t\t<div class=\"slider-text-inner js-fullheight\">
\t\t\t\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t\t\t\t<p><span>Luxe Hotel</span></p>
\t\t\t\t\t\t\t\t\t\t\t<h2>A Best Place To Enjoy Your Life</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-lg\">Book Now</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</aside>


            ";
        // line 149
        $this->displayBlock('content', $context, $blocks);
        // line 152
        echo "\t\t\t


\t\t\t<footer id=\"footer\" class=\"fh5co-bg-color\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t\t\t<p><small>&copy; 2016 Free HTML5 Template. <br> All Rights Reserved. <br>
\t\t\t\t\t\t\t\t\t\tDesigned by <a href=\"http://freehtml5.co\" target=\"_blank\">FreeHTML5.co</a> <br>
\t\t\t\t\t\t\t\t\t\tDemo Images: <a href=\"http://unsplash.com/\" target=\"_blank\">Unsplash</a></small>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<h3>Company</h3>
\t\t\t\t\t\t\t\t\t<ul class=\"link\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">About Us</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Hotels</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Customer Care</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact Us</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<h3>Our Facilities</h3>
\t\t\t\t\t\t\t\t\t<ul class=\"link\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Resturant</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Bars</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Pick-up</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Swimming Pool</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Spa</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Gym</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<h3>Subscribe</h3>
\t\t\t\t\t\t\t\t\t<p>Sed cursus ut nibh in semper. Mauris varius et magna in fermentum. </p>
\t\t\t\t\t\t\t\t\t<form action=\"#\" id=\"form-subscribe\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Email Address\" id=\"email\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" id=\"submit\" value=\"Send\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<ul class=\"social-icons\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-twitter-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-facebook-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-instagram-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-linkedin-with-circle\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>

\t\t</div>
\t\t<!-- END fh5co-page -->

\t</div>
\t<!-- END fh5co-wrapper -->
    ";
        // line 219
        $this->displayBlock('js', $context, $blocks);
        // line 245
        echo "
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_CSS($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "CSS"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "CSS"));

        // line 30
        echo "        <link rel=\"stylesheet\" href=\" ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/css/superfish.css"), "html", null, true);
        echo " \">
        
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\">
        <!-- CS Select -->
        <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/css/cs-select.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/css/cs-skin-border.css"), "html", null, true);
        echo "\">

        <!-- Themify Icons -->
        <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/css/themify-icons.css"), "html", null, true);
        echo "\">
        <!-- Flat Icon -->
        <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/css/flaticon.css"), "html", null, true);
        echo "\">
        <!-- Icomoon -->
        <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/css/icomoon.css"), "html", null, true);
        echo "\">
        <!-- Flexslider  -->
        <link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/css/flexslider.css"), "html", null, true);
        echo "\">

        <!-- Style -->
        <link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/css/style.css"), "html", null, true);
        echo "\">

        <!-- Modernizr JS -->
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src=\"js/respond.min.js\"></script>
        <![endif]-->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 149
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo " 
                
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 219
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 220
        echo "\t<!-- Javascripts -->
\t<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Dropdown Menu -->
\t<script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/js/superfish.js"), "html", null, true);
        echo "\"></script>
\t<!-- Bootstrap -->
\t<script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Waypoints -->
\t<script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Counters -->
\t<script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/js/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
\t<!-- Stellar Parallax -->
\t<script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Owl Slider -->
\t<!-- // <script src=\"js/owl.carousel.min.js\"></script> -->
\t<!-- Date Picker -->
\t<script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- CS Select -->
\t<script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/js/classie.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/js/selectFx.js"), "html", null, true);
        echo "\"></script>
\t<!-- Flexslider -->
\t<script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>

\t<script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/js/custom.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 243,  423 => 241,  418 => 239,  414 => 238,  409 => 236,  402 => 232,  397 => 230,  392 => 228,  387 => 226,  382 => 224,  378 => 223,  373 => 221,  370 => 220,  360 => 219,  339 => 149,  323 => 50,  317 => 47,  311 => 44,  306 => 42,  301 => 40,  296 => 38,  290 => 35,  286 => 34,  281 => 32,  275 => 30,  265 => 29,  252 => 245,  250 => 219,  181 => 152,  179 => 149,  154 => 127,  135 => 111,  78 => 56,  76 => 29,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<!--[if gt IE 8]><!-->
<html class=\"no-js\">
<!--<![endif]-->

<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>Luxe &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"Free HTML5 Template by FREEHTML5.CO\" />
\t<meta name=\"keywords\" content=\"free html5, free template, free bootstrap, html5, css3, mobile first, responsive\" />
\t<meta name=\"author\" content=\"FREEHTML5.CO\" />

\t<meta property=\"og:title\" content=\"\" />
\t<meta property=\"og:image\" content=\"\" />
\t<meta property=\"og:url\" content=\"\" />
\t<meta property=\"og:site_name\" content=\"\" />
\t<meta property=\"og:description\" content=\"\" />
\t<meta name=\"twitter:title\" content=\"\" />
\t<meta name=\"twitter:image\" content=\"\" />
\t<meta name=\"twitter:url\" content=\"\" />
\t<meta name=\"twitter:card\" content=\"\" />


\t<link rel=\"shortcut icon\" href=\"favicon.ico\">
\t<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->
    {% block CSS %}
        <link rel=\"stylesheet\" href=\" {{asset('frontoffice/css/superfish.css')}} \">
        
        <link rel=\"stylesheet\" href=\"{{asset('frontoffice/css/bootstrap-datepicker.min.css')}}\">
        <!-- CS Select -->
        <link rel=\"stylesheet\" href=\"{{asset('frontoffice/css/cs-select.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('frontoffice/css/cs-skin-border.css')}}\">

        <!-- Themify Icons -->
        <link rel=\"stylesheet\" href=\"{{asset('frontoffice/css/themify-icons.css')}}\">
        <!-- Flat Icon -->
        <link rel=\"stylesheet\" href=\"{{asset('frontoffice/css/flaticon.css')}}\">
        <!-- Icomoon -->
        <link rel=\"stylesheet\" href=\"{{asset('frontoffice/css/icomoon.css')}}\">
        <!-- Flexslider  -->
        <link rel=\"stylesheet\" href=\"{{asset('frontoffice/css/flexslider.css')}}\">

        <!-- Style -->
        <link rel=\"stylesheet\" href=\"{{asset('frontoffice/css/style.css')}}\">

        <!-- Modernizr JS -->
        <script src=\"{{asset('frontoffice/js/modernizr-2.6.2.min.js')}}\"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src=\"js/respond.min.js\"></script>
        <![endif]-->
    {% endblock %}

</head>

<body>
\t<div id=\"fh5co-wrapper\">
\t\t<div id=\"fh5co-page\">
\t\t\t<div id=\"fh5co-header\">
\t\t\t\t<header id=\"fh5co-header-section\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"nav-header\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"js-fh5co-nav-toggle fh5co-nav-toggle\"><i></i></a>
\t\t\t\t\t\t\t<h1 id=\"fh5co-logo\"><a href=\"index.html\">Luxe</a></h1>
\t\t\t\t\t\t\t<nav id=\"fh5co-menu-wrap\" role=\"navigation\">
\t\t\t\t\t\t\t\t<ul class=\"sf-menu\" id=\"fh5co-primary-menu\">
\t\t\t\t\t\t\t\t\t<li><a class=\"active\" href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"hotel.html\" class=\"fh5co-sub-ddown\">Hotel</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Luxe Hotel</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Deluxe Hotel</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fh5co-sub-ddown\">King Hotel</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"fh5co-sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\">Build</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\">Work</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\">Light</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\">Relic</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\">Display</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\">Sprint</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Five Star Hotel</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"services.html\">Services</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</header>

\t\t\t</div>
\t\t\t<!-- end:fh5co-header -->
\t\t\t<aside id=\"fh5co-hero\" class=\"js-fullheight\">
\t\t\t\t<div class=\"flexslider js-fullheight\">
\t\t\t\t\t<ul class=\"slides\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li style=\"background-image: url( {{asset('frontoffice/images/slider2.jpg')}} )\">
\t\t\t\t\t\t\t<div class=\"overlay-gradient\"></div>
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-md-offset-0 text-center slider-text\">
\t\t\t\t\t\t\t\t\t<div class=\"slider-text-inner js-fullheight\">
\t\t\t\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t\t\t\t<p><span>Deluxe Hotel</span></p>
\t\t\t\t\t\t\t\t\t\t\t<h2>Make Your Vacation Comfortable</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-lg\">Book Now</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li style=\"background-image: url(  {{asset('frontoffice/images/slider3.jpg')}}  )\">
\t\t\t\t\t\t\t<div class=\"overlay-gradient\"></div>
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-md-offset-0 text-center slider-text\">
\t\t\t\t\t\t\t\t\t<div class=\"slider-text-inner js-fullheight\">
\t\t\t\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t\t\t\t<p><span>Luxe Hotel</span></p>
\t\t\t\t\t\t\t\t\t\t\t<h2>A Best Place To Enjoy Your Life</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-lg\">Book Now</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</aside>


            {% block content %} 
                
            {% endblock %}
\t\t\t


\t\t\t<footer id=\"footer\" class=\"fh5co-bg-color\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t\t\t<p><small>&copy; 2016 Free HTML5 Template. <br> All Rights Reserved. <br>
\t\t\t\t\t\t\t\t\t\tDesigned by <a href=\"http://freehtml5.co\" target=\"_blank\">FreeHTML5.co</a> <br>
\t\t\t\t\t\t\t\t\t\tDemo Images: <a href=\"http://unsplash.com/\" target=\"_blank\">Unsplash</a></small>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<h3>Company</h3>
\t\t\t\t\t\t\t\t\t<ul class=\"link\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">About Us</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Hotels</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Customer Care</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact Us</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<h3>Our Facilities</h3>
\t\t\t\t\t\t\t\t\t<ul class=\"link\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Resturant</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Bars</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Pick-up</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Swimming Pool</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Spa</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Gym</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<h3>Subscribe</h3>
\t\t\t\t\t\t\t\t\t<p>Sed cursus ut nibh in semper. Mauris varius et magna in fermentum. </p>
\t\t\t\t\t\t\t\t\t<form action=\"#\" id=\"form-subscribe\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Email Address\" id=\"email\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" id=\"submit\" value=\"Send\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<ul class=\"social-icons\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-twitter-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-facebook-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-instagram-with-circle\"></i></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-linkedin-with-circle\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>

\t\t</div>
\t\t<!-- END fh5co-page -->

\t</div>
\t<!-- END fh5co-wrapper -->
    {% block js %}
\t<!-- Javascripts -->
\t<script src=\"{{asset('frontoffice/js/jquery-2.1.4.min.js')}}\"></script>
\t<!-- Dropdown Menu -->
\t<script src=\"{{asset('frontoffice/js/hoverIntent.js')}}\"></script>
\t<script src=\"{{asset('frontoffice/js/superfish.js')}}\"></script>
\t<!-- Bootstrap -->
\t<script src=\"{{asset('frontoffice/js/bootstrap.min.js')}}\"></script>
\t<!-- Waypoints -->
\t<script src=\"{{asset('frontoffice/js/jquery.waypoints.min.js')}}\"></script>
\t<!-- Counters -->
\t<script src=\"{{asset('frontoffice/js/jquery.countTo.js')}}\"></script>
\t<!-- Stellar Parallax -->
\t<script src=\"{{asset('frontoffice/js/jquery.stellar.min.js')}}\"></script>
\t<!-- Owl Slider -->
\t<!-- // <script src=\"js/owl.carousel.min.js\"></script> -->
\t<!-- Date Picker -->
\t<script src=\"{{asset('frontoffice/js/bootstrap-datepicker.min.js')}}\"></script>
\t<!-- CS Select -->
\t<script src=\"{{asset('frontoffice/js/classie.js')}}\"></script>
\t<script src=\"{{asset('frontoffice/js/selectFx.js')}}\"></script>
\t<!-- Flexslider -->
\t<script src=\"{{asset('frontoffice/js/jquery.flexslider-min.js')}}\"></script>

\t<script src=\"{{asset('frontoffice/js/custom.js')}}\"></script>
    {% endblock %}

</body>

</html>", "base-front.html.twig", "C:\\Users\\Asus\\Downloads\\Creative-minds-Emir\\templates\\base-front.html.twig");
    }
}
