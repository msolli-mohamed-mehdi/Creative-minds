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

/* hotel/listp.html.twig */
class __TwigTemplate_7b9a94792663e5c30f7fcac798180fbf398b6db5361db5de237031c44a14cf43 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/listp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/listp.html.twig"));

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
        <!-- Spinner Start -->
        
        
            <div class=\"content\">

                <!-- Sale & Revenue Start -->
                ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "                
                <!-- Footer End -->
            </div>
        <!-- Content End -->


        <!-- Back to Top -->


    <!-- JavaScript Libraries -->
    
 
    
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

    // line 40
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo " 
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h3 class=\"mb-4\">Liste des hotels </h3>
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Nom</th>
                                        <th scope=\"col\">|</th>
                                        <th scope=\"col\">localisation</th>
                                        <th scope=\"col\">|</th>
                                        <th scope=\"col\"> description</th>
                                        <th scope=\"col\">|</th>
                                        <th scope=\"col\"> email</th>
                                        <th scope=\"col\">|</th>
                                        <th scope=\"col\">nbr_chambre</th>
                                        <th scope=\"col\">|</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 62
            echo "
                                    <tr>
                                    <td> ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "nom", [], "any", false, false, false, 64), "html", null, true);
            echo " </td>
                                    <td>|</td>
                                    <td> ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "localisation", [], "any", false, false, false, 66), "html", null, true);
            echo " </td>
                                    <td>|</td>
                                    <td> ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "description", [], "any", false, false, false, 68), "html", null, true);
            echo " </td>
                                    <td>|</td>
                                    <td> ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "email", [], "any", false, false, false, 70), "html", null, true);
            echo " </td>
                                    <td>|</td>
                                    <td> ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "nbrchambre", [], "any", false, false, false, 72), "html", null, true);
            echo " </td>
                                    <td>|</td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hotel/listp.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  217 => 76,  207 => 72,  202 => 70,  197 => 68,  192 => 66,  187 => 64,  183 => 62,  179 => 61,  147 => 40,  135 => 29,  129 => 26,  123 => 23,  119 => 22,  105 => 10,  95 => 9,  70 => 81,  68 => 40,  57 => 31,  55 => 9,  45 => 1,);
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
        <!-- Spinner Start -->
        
        
            <div class=\"content\">

                <!-- Sale & Revenue Start -->
                {% block content %} 
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h3 class=\"mb-4\">Liste des hotels </h3>
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Nom</th>
                                        <th scope=\"col\">|</th>
                                        <th scope=\"col\">localisation</th>
                                        <th scope=\"col\">|</th>
                                        <th scope=\"col\"> description</th>
                                        <th scope=\"col\">|</th>
                                        <th scope=\"col\"> email</th>
                                        <th scope=\"col\">|</th>
                                        <th scope=\"col\">nbr_chambre</th>
                                        <th scope=\"col\">|</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    {% for data in list %}

                                    <tr>
                                    <td> {{ data.nom }} </td>
                                    <td>|</td>
                                    <td> {{ data.localisation }} </td>
                                    <td>|</td>
                                    <td> {{ data.description}} </td>
                                    <td>|</td>
                                    <td> {{ data.email}} </td>
                                    <td>|</td>
                                    <td> {{ data.nbrchambre}} </td>
                                    <td>|</td>
                                    </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                {% endblock %}
                
                <!-- Footer End -->
            </div>
        <!-- Content End -->


        <!-- Back to Top -->


    <!-- JavaScript Libraries -->
    
 
    
</body>

</html>", "hotel/listp.html.twig", "C:\\Users\\Asus\\Downloads\\Creative-minds-Emir\\templates\\hotel\\listp.html.twig");
    }
}
