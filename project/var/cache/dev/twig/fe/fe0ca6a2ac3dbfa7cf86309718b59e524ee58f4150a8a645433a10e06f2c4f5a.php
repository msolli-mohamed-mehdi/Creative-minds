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

/* hotel/searchhotel.html.twig */
class __TwigTemplate_bca4be9c73ccb1e68fd63d0cde604bb88cc145b1978b31c4be9d45a0b1204d9f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 70
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/searchhotel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/searchhotel.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "hotel/searchhotel.html.twig", 70);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 72
        echo "<div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h3 class=\"mb-4\">Recherche Avacée</h3>
                             ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formsearchhotel"]) || array_key_exists("formsearchhotel", $context) ? $context["formsearchhotel"] : (function () { throw new RuntimeError('Variable "formsearchhotel" does not exist.', 77, $this->source); })()), 'form_start');
        echo "
                            <div class=\"mb-3\">
                                    <!--
                                    <label  class=\"form-label\">Nom</label>
                                    <input type=\"text\" class=\"form-control\" >
                                    -->
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formsearchhotel"]) || array_key_exists("formsearchhotel", $context) ? $context["formsearchhotel"] : (function () { throw new RuntimeError('Variable "formsearchhotel" does not exist.', 83, $this->source); })()), "nom", [], "any", false, false, false, 83), 'label');
        echo "
                                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formsearchhotel"]) || array_key_exists("formsearchhotel", $context) ? $context["formsearchhotel"] : (function () { throw new RuntimeError('Variable "formsearchhotel" does not exist.', 84, $this->source); })()), "nom", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    
                                </div>
                                ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formsearchhotel"]) || array_key_exists("formsearchhotel", $context) ? $context["formsearchhotel"] : (function () { throw new RuntimeError('Variable "formsearchhotel" does not exist.', 87, $this->source); })()), 'form_end');
        echo "
            </div> 
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 95
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
<script>
    \$(document).ready{function(){
        \$('select').formSelect();
    } }
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hotel/searchhotel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 95,  111 => 94,  95 => 87,  89 => 84,  85 => 83,  76 => 77,  69 => 72,  59 => 71,  36 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("{#  
 {% extends 'base-back.html.twig' %}


{% block content %}
            <!-- Form Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h3 class=\"mb-4\">Recherche Avacée</h3>
                            
                            {{form_start(formhotel) }}
                                <div class=\"mb-3\">
                                    <!--
                                    <label  class=\"form-label\">Nom</label>
                                    <input type=\"text\" class=\"form-control\" >
                                    -->
                                    {{form_label(formhotel.nom)  }}
                                    {{form_widget(formhotel.nom ,{'attr':{class: 'form-control'}})}}
                                    
                                </div>

                                <div class=\"mb-3\">
                                    <!--
                                    <input type=\"email\" class=\"form-control\" 
                                        aria-describedby=\"emailHelp\">
                                    -->
                                    {{form_label(formhotel.email)  }}
                                    {{form_widget(formhotel.email ,{'attr':{class: 'form-control'}})}}
                                </div>

                                <div class=\"mb-3\">
                                    {{form_label(formhotel.localisation)  }}
                                    {{form_widget(formhotel.localisation ,{'attr':{class: 'form-control'}})}}
                                    <!--
                                    <input type=\"number\" class=\"form-control\" >
                                    -->
                                    
                                </div>

                                <div class=\"mb-3\">
                                    {{form_label(formhotel.nbr_chambre)  }}
                                    {{form_widget(formhotel.nbr_chambre ,{'attr':{class: 'form-control'}})}}
                                    <!--
                                    <input type=\"number\" class=\"form-control\" >
                                    -->
                                    
                                </div>
                                

                                
                                <br>
                                <button  class=\"btn btn-primary\">chercher</button>
                            {{form_end(formhotel) }}
                            

                        </div>
                    </div>
                    
                    
                    
                    
                </div>
            </div>
            <!-- Form End -->

{% endblock %}
  #}
  {% extends 'base-back.html.twig' %}
{% block body %}
<div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h3 class=\"mb-4\">Recherche Avacée</h3>
                             {{form_start(formsearchhotel) }}
                            <div class=\"mb-3\">
                                    <!--
                                    <label  class=\"form-label\">Nom</label>
                                    <input type=\"text\" class=\"form-control\" >
                                    -->
                                    {{form_label(formsearchhotel.nom)  }}
                                    {{form_widget(formsearchhotel.nom ,{'attr':{class: 'form-control'}})}}
                                    
                                </div>
                                {{form_end(formsearchhotel) }}
            </div> 
        </div>
    </div>
</div>
{% endblock %}

{%block javascript%}
{{ parent() }}
<script>
    \$(document).ready{function(){
        \$('select').formSelect();
    } }
{% endblock %} 





", "hotel/searchhotel.html.twig", "C:\\Users\\Asus\\Downloads\\Creative-minds-Emir\\templates\\hotel\\searchhotel.html.twig");
    }
}
