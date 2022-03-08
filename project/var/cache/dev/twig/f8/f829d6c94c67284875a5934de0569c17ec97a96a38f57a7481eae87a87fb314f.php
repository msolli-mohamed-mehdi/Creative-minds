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

/* reservation_hotel/frontcreate.html.twig */
class __TwigTemplate_0ecac5d89c38009a7ffb9919e2b535fffde0537ad3a5eea40a09b87cc2a39ef9 extends Template
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
        return "base-front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/frontcreate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/frontcreate.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "reservation_hotel/frontcreate.html.twig", 1);
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

        echo " 


<div id=\"fh5co-contact-section\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div id=\"map\" class=\"fh5co-map\"></div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<h3>Reservation  </h3>
\t\t\t\t\t\t";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formreshotel"]) || array_key_exists("formreshotel", $context) ? $context["formreshotel"] : (function () { throw new RuntimeError('Variable "formreshotel" does not exist.', 15, $this->source); })()), 'form_start');
        echo " 

\t\t\t\t\t\t<div class=\"mb-3\">
                                    <label for=\"exampleInputEmail1\" class=\"form-label\">Nom Hotel  </label>
                                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formreshotel"]) || array_key_exists("formreshotel", $context) ? $context["formreshotel"] : (function () { throw new RuntimeError('Variable "formreshotel" does not exist.', 19, $this->source); })()), "Hotel", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    
                                </div>
\t\t\t\t\t\t <div class=\"mb-3\">
                                    <label for=\"exampleInputEmail1\" class=\"form-label\">Nom client</label>
                                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formreshotel"]) || array_key_exists("formreshotel", $context) ? $context["formreshotel"] : (function () { throw new RuntimeError('Variable "formreshotel" does not exist.', 24, $this->source); })()), "Client", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    
                                </div>

                        <div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formreshotel"]) || array_key_exists("formreshotel", $context) ? $context["formreshotel"] : (function () { throw new RuntimeError('Variable "formreshotel" does not exist.', 30, $this->source); })()), "nombre_de_chambres", [], "any", false, false, false, 30), 'widget', ["attr" => ["placeholder" => "nombre_de_chambres ", "class" => "form-control"]]);
        echo "

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formreshotel"]) || array_key_exists("formreshotel", $context) ? $context["formreshotel"] : (function () { throw new RuntimeError('Variable "formreshotel" does not exist.', 37, $this->source); })()), "date_res", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-12\">\t\t\t
                            <button type=\"submit\" class=\"btn btn-primary\">Reserver</button>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>








";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation_hotel/frontcreate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 37,  106 => 30,  97 => 24,  89 => 19,  82 => 15,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}
{% block content %} 


<div id=\"fh5co-contact-section\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div id=\"map\" class=\"fh5co-map\"></div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<h3>Reservation  </h3>
\t\t\t\t\t\t{{form_start(formreshotel) }} 

\t\t\t\t\t\t<div class=\"mb-3\">
                                    <label for=\"exampleInputEmail1\" class=\"form-label\">Nom Hotel  </label>
                                    {{form_widget(formreshotel.Hotel ,{'attr':{class: 'form-control'}})}}
                                    
                                </div>
\t\t\t\t\t\t <div class=\"mb-3\">
                                    <label for=\"exampleInputEmail1\" class=\"form-label\">Nom client</label>
                                    {{form_widget(formreshotel.Client ,{'attr':{class: 'form-control'}})}}
                                    
                                </div>

                        <div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t    {{form_widget(formreshotel.nombre_de_chambres ,{'attr':{ placeholder:'nombre_de_chambres ', class: 'form-control'}})}}

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{{form_widget(formreshotel.date_res ,{'attr':{class: 'form-control'}})}}

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-12\">\t\t\t
                            <button type=\"submit\" class=\"btn btn-primary\">Reserver</button>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>








{% endblock %}", "reservation_hotel/frontcreate.html.twig", "C:\\Users\\Asus\\Downloads\\Creative-minds-Emir\\templates\\reservation_hotel\\frontcreate.html.twig");
    }
}
