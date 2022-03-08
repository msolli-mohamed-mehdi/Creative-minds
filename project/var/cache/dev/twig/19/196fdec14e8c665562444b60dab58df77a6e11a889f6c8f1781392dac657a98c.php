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

/* base-back.html.twig */
class __TwigTemplate_940ffd617eb587cf6f83436a8c617f3117dc81ae4e42503b5a402ff03e0e815e extends Template
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
            'sidebar' => [$this, 'block_sidebar'],
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">
    ";
        // line 9
        $this->displayBlock('CSS', $context, $blocks);
        // line 31
        echo "</head>

<body>
    <div class=\"container-xxl position-relative bg-white d-flex p-0\">
        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        ";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 89
        echo "

        <!-- Content Start -->
            <div class=\"content\">
                <!-- Navbar Start -->

                ";
        // line 95
        $this->displayBlock('navbar', $context, $blocks);
        // line 122
        echo "                <!-- Navbar End -->


                <!-- Sale & Revenue Start -->
                ";
        // line 126
        $this->displayBlock('content', $context, $blocks);
        // line 129
        echo "                

                ";
        // line 131
        $this->displayBlock('footer', $context, $blocks);
        // line 151
        echo "                <!-- Footer End -->
            </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    
    ";
        // line 162
        $this->displayBlock('javascript', $context, $blocks);
        // line 177
        echo "    
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_CSS($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "CSS"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "CSS"));

        // line 10
        echo "        <!-- Favicon -->

        <!-- Google Web Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
        
        <!-- Icon Font Stylesheet -->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

        <!-- Libraries Stylesheet -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend-office/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo " \" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend-office/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend-office/css/bootstrap.min.css"), "html", null, true);
        echo " \" rel=\"stylesheet\">

        <!-- Template Stylesheet -->
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend-office/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 44
        echo "
            <!-- Sidebar Start -->
            <div class=\"sidebar pe-4 pb-3\">
                <nav class=\"navbar bg-light navbar-light\">
                    <a href=\"index.html\" class=\"navbar-brand mx-4 mb-3\">
                        <h3 class=\"text-primary\"><i class=\"fa fa-hashtag me-2\"></i>DASHMIN</h3>
                    </a>
                    <div class=\"d-flex align-items-center ms-4 mb-4\">
                        <div class=\"position-relative\">
                            <img class=\"rounded-circle\" src=\" ";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend-office/img/user.jpg"), "html", null, true);
        echo " \" alt=\"\" style=\"width: 40px; height: 40px;\">
                            <div class=\"bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1\"></div>
                        </div>
                        <div class=\"ms-3\">
                            <h6 class=\"mb-0\">Emir Thameur</h6>
                            <span>Admin</span>
                        </div>
                    </div>
                    <div class=\"navbar-nav w-100\">
                        <a href=\"index.html\" class=\"nav-item nav-link active\"><i class=\"fa fa-tachometer-alt me-2\"></i>Dashboard</a>
                        

                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa fa-laptop me-2\"></i>Forms</a>
                            <div class=\"dropdown-menu bg-transparent border-0\">
                                <a href=\"form_offre.html\" class=\"dropdown-item\">Liste hotels</a>
                                <a href=\"reservation_offre.html\" class=\"dropdown-item\">Reservation Hotel </a>

                            </div>
                        </div>

                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa fa-laptop me-2\"></i>Tables</a>
                            <div class=\"dropdown-menu bg-transparent border-0\">
                                <a href=\"typography.html\" class=\"dropdown-item\">Liste hotels</a>
                                <a href=\"element.html\" class=\"dropdown-item\">Reservation Hotel </a>

                            </div>
                        </div>

                        
                    </div>
                </nav>
            </div>
            <!-- Sidebar End -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        echo " 
                    <nav class=\"navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0\">
                        <a href=\"index.html\" class=\"navbar-brand d-flex d-lg-none me-4\">
                            <h2 class=\"text-primary mb-0\"><i class=\"fa fa-hashtag\"></i></h2>
                        </a>
                        <a href=\"#\" class=\"sidebar-toggler flex-shrink-0\">
                            <i class=\"fa fa-bars\"></i>
                        </a>
                        <form class=\"d-none d-md-flex ms-4\">
                            <input class=\"form-control border-0\" type=\"search\" placeholder=\"Search\">
                        </form>
                        <div class=\"navbar-nav align-items-center ms-auto\">
                            
                            <div class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                                    <img class=\"rounded-circle me-lg-2\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend-office/img/user.jpg"), "html", null, true);
        echo " \" alt=\"\" style=\"width: 40px; height: 40px;\">
                                    <span class=\"d-none d-lg-inline-flex\">John Doe</span>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                                    <a href=\"#\" class=\"dropdown-item\">My Profile</a>
                                    <a href=\"#\" class=\"dropdown-item\">Settings</a>
                                    <a href=\"#\" class=\"dropdown-item\">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
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

    // line 131
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 132
        echo "
                    <!-- Footer Start -->
                    <div class=\"container-fluid pt-4 px-4\">
                        <div class=\"bg-light rounded-top p-4\">
                            <div class=\"row\">
                                <div class=\"col-12 col-sm-6 text-center text-sm-start\">
                                    &copy; <a href=\"#\">Your Site Name</a>, All Right Reserved. 
                                </div>
                                <div class=\"col-12 col-sm-6 text-center text-sm-end\">
                                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                                    Designed By <a href=\"https://htmlcodex.com\">Creative Minds</a>
                                </br>
                                Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\" target=\"_blank\">Creative Minds</a>
                                </div>
                            </div>
                        </div>
                    </div>

                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 162
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        echo " 

        <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
        <script src=\" ";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend-office/lib/chart/chart.min.js"), "html", null, true);
        echo " \"></script>
        <script src=\" ";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend-office/lib/easing/easing.min.js"), "html", null, true);
        echo " \"></script>
        <script src=\" ";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend-office/lib/waypoints/waypoints.min.js"), "html", null, true);
        echo " \"></script>
        <script src=\" ";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend-office/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo " \"></script>
        <script src=\" ";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend-office/lib/tempusdominus/js/moment.min.js"), "html", null, true);
        echo " \"></script>
        <script src=\" ";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend-office/lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        echo " \"></script>
        <script src=\" ";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend-office/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo " \"></script>

        <!-- Template Javascript -->
        <script src=\" ";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend-office/js/main.js"), "html", null, true);
        echo " \"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-back.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  400 => 175,  394 => 172,  390 => 171,  386 => 170,  382 => 169,  378 => 168,  374 => 167,  370 => 166,  355 => 162,  327 => 132,  317 => 131,  296 => 126,  274 => 110,  248 => 95,  202 => 53,  191 => 44,  181 => 43,  169 => 29,  163 => 26,  157 => 23,  153 => 22,  139 => 10,  129 => 9,  116 => 177,  114 => 162,  101 => 151,  99 => 131,  95 => 129,  93 => 126,  87 => 122,  85 => 95,  77 => 89,  75 => 43,  61 => 31,  59 => 9,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">
    {% block CSS %}
        <!-- Favicon -->

        <!-- Google Web Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
        
        <!-- Icon Font Stylesheet -->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

        <!-- Libraries Stylesheet -->
        <link href=\"{{ asset('backend-office/lib/owlcarousel/assets/owl.carousel.min.css') }} \" rel=\"stylesheet\">
        <link href=\"{{asset('backend-office/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}} \" rel=\"stylesheet\" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href=\"{{asset('backend-office/css/bootstrap.min.css')}} \" rel=\"stylesheet\">

        <!-- Template Stylesheet -->
        <link href=\"{{asset('backend-office/css/style.css')}}\" rel=\"stylesheet\">
    {% endblock %}
</head>

<body>
    <div class=\"container-xxl position-relative bg-white d-flex p-0\">
        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        {% block sidebar %}

            <!-- Sidebar Start -->
            <div class=\"sidebar pe-4 pb-3\">
                <nav class=\"navbar bg-light navbar-light\">
                    <a href=\"index.html\" class=\"navbar-brand mx-4 mb-3\">
                        <h3 class=\"text-primary\"><i class=\"fa fa-hashtag me-2\"></i>DASHMIN</h3>
                    </a>
                    <div class=\"d-flex align-items-center ms-4 mb-4\">
                        <div class=\"position-relative\">
                            <img class=\"rounded-circle\" src=\" {{asset('backend-office/img/user.jpg')}} \" alt=\"\" style=\"width: 40px; height: 40px;\">
                            <div class=\"bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1\"></div>
                        </div>
                        <div class=\"ms-3\">
                            <h6 class=\"mb-0\">Emir Thameur</h6>
                            <span>Admin</span>
                        </div>
                    </div>
                    <div class=\"navbar-nav w-100\">
                        <a href=\"index.html\" class=\"nav-item nav-link active\"><i class=\"fa fa-tachometer-alt me-2\"></i>Dashboard</a>
                        

                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa fa-laptop me-2\"></i>Forms</a>
                            <div class=\"dropdown-menu bg-transparent border-0\">
                                <a href=\"form_offre.html\" class=\"dropdown-item\">Liste hotels</a>
                                <a href=\"reservation_offre.html\" class=\"dropdown-item\">Reservation Hotel </a>

                            </div>
                        </div>

                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa fa-laptop me-2\"></i>Tables</a>
                            <div class=\"dropdown-menu bg-transparent border-0\">
                                <a href=\"typography.html\" class=\"dropdown-item\">Liste hotels</a>
                                <a href=\"element.html\" class=\"dropdown-item\">Reservation Hotel </a>

                            </div>
                        </div>

                        
                    </div>
                </nav>
            </div>
            <!-- Sidebar End -->
        {% endblock %}


        <!-- Content Start -->
            <div class=\"content\">
                <!-- Navbar Start -->

                {% block navbar %} 
                    <nav class=\"navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0\">
                        <a href=\"index.html\" class=\"navbar-brand d-flex d-lg-none me-4\">
                            <h2 class=\"text-primary mb-0\"><i class=\"fa fa-hashtag\"></i></h2>
                        </a>
                        <a href=\"#\" class=\"sidebar-toggler flex-shrink-0\">
                            <i class=\"fa fa-bars\"></i>
                        </a>
                        <form class=\"d-none d-md-flex ms-4\">
                            <input class=\"form-control border-0\" type=\"search\" placeholder=\"Search\">
                        </form>
                        <div class=\"navbar-nav align-items-center ms-auto\">
                            
                            <div class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                                    <img class=\"rounded-circle me-lg-2\" src=\"{{asset('backend-office/img/user.jpg')}} \" alt=\"\" style=\"width: 40px; height: 40px;\">
                                    <span class=\"d-none d-lg-inline-flex\">John Doe</span>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                                    <a href=\"#\" class=\"dropdown-item\">My Profile</a>
                                    <a href=\"#\" class=\"dropdown-item\">Settings</a>
                                    <a href=\"#\" class=\"dropdown-item\">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                {% endblock %}
                <!-- Navbar End -->


                <!-- Sale & Revenue Start -->
                {% block content %} 
                
                {% endblock %}
                

                {% block footer %}

                    <!-- Footer Start -->
                    <div class=\"container-fluid pt-4 px-4\">
                        <div class=\"bg-light rounded-top p-4\">
                            <div class=\"row\">
                                <div class=\"col-12 col-sm-6 text-center text-sm-start\">
                                    &copy; <a href=\"#\">Your Site Name</a>, All Right Reserved. 
                                </div>
                                <div class=\"col-12 col-sm-6 text-center text-sm-end\">
                                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                                    Designed By <a href=\"https://htmlcodex.com\">Creative Minds</a>
                                </br>
                                Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\" target=\"_blank\">Creative Minds</a>
                                </div>
                            </div>
                        </div>
                    </div>

                {% endblock %}
                <!-- Footer End -->
            </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    
    {% block javascript %} 

        <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
        <script src=\" {{asset('backend-office/lib/chart/chart.min.js')}} \"></script>
        <script src=\" {{asset('backend-office/lib/easing/easing.min.js')}} \"></script>
        <script src=\" {{asset('backend-office/lib/waypoints/waypoints.min.js')}} \"></script>
        <script src=\" {{asset('backend-office/lib/owlcarousel/owl.carousel.min.js')}} \"></script>
        <script src=\" {{asset('backend-office/lib/tempusdominus/js/moment.min.js')}} \"></script>
        <script src=\" {{asset('backend-office/lib/tempusdominus/js/moment-timezone.min.js')}} \"></script>
        <script src=\" {{asset('backend-office/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}} \"></script>

        <!-- Template Javascript -->
        <script src=\" {{asset('backend-office/js/main.js')}} \"></script>
    {% endblock %}
    
</body>

</html>", "base-back.html.twig", "C:\\Users\\Asus\\Downloads\\Creative-minds-Emir\\templates\\base-back.html.twig");
    }
}
