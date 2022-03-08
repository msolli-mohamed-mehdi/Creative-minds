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

/* hotel/afficher.html.twig */
class __TwigTemplate_cd9108b9b2065171718c1a0abc31b6d5170444f80505bf9f516deb151b98d3ac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/afficher.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "hotel/afficher.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<br>
<td>  <a class=\"btn btn-primary\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterhotel");
        echo "\">Ajouter</a> <td> 


\t\t
\t
\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 12
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 12, $this->source); })()), "Rechercher")) : ("Rechercher")), "html", null, true);
        echo "</button>
    \t

<div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Liste des hotels </h6>
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">id</th>
                                        <th scope=\"col\">Nom</th>
                                        <th scope=\"col\">Email</th>
                                        <th scope=\"col\">Localisation</th>
                                        <th scope=\"col\">description</th>
                                        <th scope=\"col\">nombre de chambre</th>
                                        <th scope=\"col\">description</th>

                                        <th scope=\"col\"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 35
            echo "
                                    <tr>
                                    <th scope=\"row\"> ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo " </th>
                                    <td> ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "nom", [], "any", false, false, false, 38), "html", null, true);
            echo " </td>
                                    <td> ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "email", [], "any", false, false, false, 39), "html", null, true);
            echo " </td>
                                    <td> ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "localisation", [], "any", false, false, false, 40), "html", null, true);
            echo " </td>
                                    <td> ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "description", [], "any", false, false, false, 41), "html", null, true);
            echo " </td>
                                    <td> ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "nbrchambre", [], "any", false, false, false, 42), "html", null, true);
            echo " </td>
                                    <td> <a class=\"btn btn-primary\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierhotel", ["id" => twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">modifier</a></td>
                                    <td>  <a class=\"btn btn-primary\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerhotel", ["id" => twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">supprimer</a> <td>

                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div id=\"div_chart\"></div>
    
                    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
                    <script type=\"text/javascript\">
                        ";
        // line 57
        echo $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcDraw((isset($context["BarChart"]) || array_key_exists("BarChart", $context) ? $context["BarChart"] : (function () { throw new RuntimeError('Variable "BarChart" does not exist.', 57, $this->source); })()), "div_chart");
        echo "
                    </script>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hotel/afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 57,  150 => 48,  140 => 44,  136 => 43,  132 => 42,  128 => 41,  124 => 40,  120 => 39,  116 => 38,  112 => 37,  108 => 35,  104 => 34,  79 => 12,  71 => 7,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}



{% block content %}
<br>
<td>  <a class=\"btn btn-primary\" href=\"{{ path('ajouterhotel') }}\">Ajouter</a> <td> 


\t\t
\t
\t<button type=\"submit\" class=\"btn btn-primary\">{{ button_label |default('Rechercher') }}</button>
    \t

<div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Liste des hotels </h6>
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">id</th>
                                        <th scope=\"col\">Nom</th>
                                        <th scope=\"col\">Email</th>
                                        <th scope=\"col\">Localisation</th>
                                        <th scope=\"col\">description</th>
                                        <th scope=\"col\">nombre de chambre</th>
                                        <th scope=\"col\">description</th>

                                        <th scope=\"col\"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    {% for data in list %}

                                    <tr>
                                    <th scope=\"row\"> {{ data.id}} </th>
                                    <td> {{ data.nom }} </td>
                                    <td> {{data.email}} </td>
                                    <td> {{data.localisation}} </td>
                                    <td> {{data.description}} </td>
                                    <td> {{data.nbrchambre}} </td>
                                    <td> <a class=\"btn btn-primary\" href=\"{{ path('modifierhotel', {'id': data.id }) }}\">modifier</a></td>
                                    <td>  <a class=\"btn btn-primary\" href=\"{{ path('supprimerhotel', {'id': data.id }) }}\">supprimer</a> <td>

                                    </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div id=\"div_chart\"></div>
    
                    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
                    <script type=\"text/javascript\">
                        {{ gc_draw(BarChart, 'div_chart') }}
                    </script>



{% endblock %}
", "hotel/afficher.html.twig", "C:\\Users\\Asus\\Downloads\\Creative-minds-Emir\\templates\\hotel\\afficher.html.twig");
    }
}
