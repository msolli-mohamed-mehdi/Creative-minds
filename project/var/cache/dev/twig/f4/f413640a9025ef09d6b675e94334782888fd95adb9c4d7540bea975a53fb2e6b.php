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
class __TwigTemplate_c88ef8c7957654c77420bf8e0829350434ccae198cb522bded22d90029d7d03c extends Template
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
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 28
            echo "
                                    <tr>
                                    <th scope=\"row\"> ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo " </th>
                                    <td> ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "nom", [], "any", false, false, false, 31), "html", null, true);
            echo " </td>
                                    <td> ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "email", [], "any", false, false, false, 32), "html", null, true);
            echo " </td>
                                    <td> ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "localisation", [], "any", false, false, false, 33), "html", null, true);
            echo " </td>
                                    <td> ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "description", [], "any", false, false, false, 34), "html", null, true);
            echo " </td>
                                    <td> ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "nbrchambre", [], "any", false, false, false, 35), "html", null, true);
            echo " </td>
                                    <td> <a class=\"btn btn-primary\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierhotel", ["id" => twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">modifier</a></td>
                                    <td>  <a class=\"btn btn-primary\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerhotel", ["id" => twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">supprimer</a> <td> 

                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        return "hotel/afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 41,  130 => 37,  126 => 36,  122 => 35,  118 => 34,  114 => 33,  110 => 32,  106 => 31,  102 => 30,  98 => 28,  94 => 27,  71 => 7,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}



{% block content %}
<br>
<td>  <a class=\"btn btn-primary\" href=\"{{ path('ajouterhotel') }}\">Ajouter</a> <td> 
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



{% endblock %}
", "hotel/afficher.html.twig", "C:\\Users\\Asus\\Downloads\\Creative-minds-Emir\\templates\\hotel\\afficher.html.twig");
    }
}
