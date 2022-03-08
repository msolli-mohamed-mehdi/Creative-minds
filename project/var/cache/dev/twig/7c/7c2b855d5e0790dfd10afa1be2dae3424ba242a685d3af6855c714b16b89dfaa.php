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

/* reservation_hotel/create.html.twig */
class __TwigTemplate_d10429e7c2b9688434b305005b586e8a179119729793a2819a096a263247848c extends Template
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
        // line 2
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_hotel/create.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "reservation_hotel/create.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Ajouter une reservation</h6>
                        

                            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formreshotel"]) || array_key_exists("formreshotel", $context) ? $context["formreshotel"] : (function () { throw new RuntimeError('Variable "formreshotel" does not exist.', 12, $this->source); })()), 'form_start');
        echo " 
                                <div class=\"mb-3\">
                                    <label for=\"exampleInputEmail1\" class=\"form-label\">Nom Hotel  </label>
                                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formreshotel"]) || array_key_exists("formreshotel", $context) ? $context["formreshotel"] : (function () { throw new RuntimeError('Variable "formreshotel" does not exist.', 15, $this->source); })()), "Hotel", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    
                                </div>

                                 <div class=\"mb-3\">
                                    <label for=\"exampleInputEmail1\" class=\"form-label\">Nom client</label>
                                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formreshotel"]) || array_key_exists("formreshotel", $context) ? $context["formreshotel"] : (function () { throw new RuntimeError('Variable "formreshotel" does not exist.', 21, $this->source); })()), "Client", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    
                                </div> 

                                <div class=\"mb-3\">
                                    <label for=\"exampleInputEmail1\" class=\"form-label\">nombre_de_chambres</label>
                                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formreshotel"]) || array_key_exists("formreshotel", $context) ? $context["formreshotel"] : (function () { throw new RuntimeError('Variable "formreshotel" does not exist.', 27, $this->source); })()), "nombre_de_chambres", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    
                                </div>

                                <div class=\"mb-3\">
                                    <label for=\"exampleInputEmail1\" class=\"form-label\">Date reservation </label>
                                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formreshotel"]) || array_key_exists("formreshotel", $context) ? $context["formreshotel"] : (function () { throw new RuntimeError('Variable "formreshotel" does not exist.', 33, $this->source); })()), "date_res", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    
                                </div>


                                <br>
                                <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
                            ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formreshotel"]) || array_key_exists("formreshotel", $context) ? $context["formreshotel"] : (function () { throw new RuntimeError('Variable "formreshotel" does not exist.', 40, $this->source); })()), 'form_end');
        echo " 
                        </div>
                    </div>

                </div>
            </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation_hotel/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 40,  110 => 33,  101 => 27,  92 => 21,  83 => 15,  77 => 12,  68 => 5,  58 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base-back.html.twig' %}

{% block content %}
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Ajouter une reservation</h6>
                        

                            {{form_start(formreshotel) }} 
                                <div class=\"mb-3\">
                                    <label for=\"exampleInputEmail1\" class=\"form-label\">Nom Hotel  </label>
                                    {{form_widget(formreshotel.Hotel ,{'attr':{class: 'form-control'}})}}
                                    
                                </div>

                                 <div class=\"mb-3\">
                                    <label for=\"exampleInputEmail1\" class=\"form-label\">Nom client</label>
                                    {{form_widget(formreshotel.Client ,{'attr':{class: 'form-control'}})}}
                                    
                                </div> 

                                <div class=\"mb-3\">
                                    <label for=\"exampleInputEmail1\" class=\"form-label\">nombre_de_chambres</label>
                                    {{form_widget(formreshotel.nombre_de_chambres ,{'attr':{class: 'form-control'}})}}
                                    
                                </div>

                                <div class=\"mb-3\">
                                    <label for=\"exampleInputEmail1\" class=\"form-label\">Date reservation </label>
                                    {{form_widget(formreshotel.date_res ,{'attr':{class: 'form-control'}})}}
                                    
                                </div>


                                <br>
                                <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
                            {{form_end(formreshotel) }} 
                        </div>
                    </div>

                </div>
            </div>

{% endblock %}", "reservation_hotel/create.html.twig", "C:\\Users\\Asus\\Downloads\\Creative-minds-Emir\\templates\\reservation_hotel\\create.html.twig");
    }
}
