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

/* reservation_hotel/view.html.twig */
class __TwigTemplate_998a6291241d0bef07edbaf151aa291f2d158e88bafebd32a35ca863b68318e4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/view.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "reservation_hotel/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<br>
<div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Liste des offre </h6>
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">id reservation</th>
                                        <th scope=\"col\">Nom Hotel</th>
                                        <th scope=\"col\">Nom client</th>
                                        <th scope=\"col\">nbr de nombre_de_chambres</th>
                                        <th scope=\"col\">date reservation</th>
                                        <th scope=\"col\"></th>
                                        <th scope=\"col\"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 21
            echo "
                                    <tr>
                                    <th scope=\"row\"> ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo " </th>
                                    <td> ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "Hotel", [], "any", false, false, false, 24), "nom", [], "any", false, false, false, 24), "html", null, true);
            echo " </td>
                                    <td> ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "Client", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
            echo " </td>
                                    <td> ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "nombredechambres", [], "any", false, false, false, 26), "html", null, true);
            echo " </td>
                                    
                                    <td> ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "dateres", [], "any", false, false, false, 28), "d-m-Y"), "html", null, true);
            echo " </td>
                                        
                                    
                                    <td> <a class=\"btn btn-primary\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updatereservationhotel", ["id" => twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">modifier</a></td>
                                    <td> <a class=\"btn btn-primary\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletereshotel", ["id" => twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">supprimer</a></td>
                                     

                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
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
        return "reservation_hotel/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 37,  122 => 32,  118 => 31,  112 => 28,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  91 => 21,  87 => 20,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}
{% block content %}
<br>
<div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Liste des offre </h6>
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">id reservation</th>
                                        <th scope=\"col\">Nom Hotel</th>
                                        <th scope=\"col\">Nom client</th>
                                        <th scope=\"col\">nbr de nombre_de_chambres</th>
                                        <th scope=\"col\">date reservation</th>
                                        <th scope=\"col\"></th>
                                        <th scope=\"col\"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for data in list %}

                                    <tr>
                                    <th scope=\"row\"> {{ data.id}} </th>
                                    <td> {{ data.Hotel.nom }} </td>
                                    <td> {{ data.Client.name }} </td>
                                    <td> {{ data.nombredechambres}} </td>
                                    
                                    <td> {{ data.dateres |date('d-m-Y') }} </td>
                                        
                                    
                                    <td> <a class=\"btn btn-primary\" href=\"{{ path('updatereservationhotel', {'id': data.id }) }}\">modifier</a></td>
                                    <td> <a class=\"btn btn-primary\" href=\"{{ path('deletereshotel', {'id': data.id }) }}\">supprimer</a></td>
                                     

                                    </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>

{% endblock %}", "reservation_hotel/view.html.twig", "C:\\Users\\Asus\\Downloads\\Creative-minds-Emir\\templates\\reservation_hotel\\view.html.twig");
    }
}
