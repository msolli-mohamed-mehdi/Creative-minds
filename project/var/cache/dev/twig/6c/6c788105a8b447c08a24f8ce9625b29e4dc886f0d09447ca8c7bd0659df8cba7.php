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

/* hotel/modifier.html.twig */
class __TwigTemplate_c88ac92d282acca81edfbb97de32b75b0cc39b9b0bd327d500217e86f22ef8e6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/modifier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/modifier.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "hotel/modifier.html.twig", 1);
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
        echo "            <!-- Form Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h3 class=\"mb-4\">Modifier un hotel</h3>
                            
                            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formhotel"]) || array_key_exists("formhotel", $context) ? $context["formhotel"] : (function () { throw new RuntimeError('Variable "formhotel" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
                                <div class=\"mb-3\">
                                    <!--
                                    <label  class=\"form-label\">Nom</label>
                                    <input type=\"text\" class=\"form-control\" >
                                    -->
                                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formhotel"]) || array_key_exists("formhotel", $context) ? $context["formhotel"] : (function () { throw new RuntimeError('Variable "formhotel" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), 'label');
        echo "
                                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formhotel"]) || array_key_exists("formhotel", $context) ? $context["formhotel"] : (function () { throw new RuntimeError('Variable "formhotel" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    
                                </div>

                                <div class=\"mb-3\">
                                    <!--
                                    <input type=\"email\" class=\"form-control\" 
                                        aria-describedby=\"emailHelp\">
                                    -->
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formhotel"]) || array_key_exists("formhotel", $context) ? $context["formhotel"] : (function () { throw new RuntimeError('Variable "formhotel" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), 'label');
        echo "
                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formhotel"]) || array_key_exists("formhotel", $context) ? $context["formhotel"] : (function () { throw new RuntimeError('Variable "formhotel" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>

                                <div class=\"mb-3\">
                                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formhotel"]) || array_key_exists("formhotel", $context) ? $context["formhotel"] : (function () { throw new RuntimeError('Variable "formhotel" does not exist.', 33, $this->source); })()), "localisation", [], "any", false, false, false, 33), 'label');
        echo "
                                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formhotel"]) || array_key_exists("formhotel", $context) ? $context["formhotel"] : (function () { throw new RuntimeError('Variable "formhotel" does not exist.', 34, $this->source); })()), "localisation", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    <!--
                                    <input type=\"number\" class=\"form-control\" >
                                    -->
                                    
                                </div>

                                <div class=\"mb-3\">
                                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formhotel"]) || array_key_exists("formhotel", $context) ? $context["formhotel"] : (function () { throw new RuntimeError('Variable "formhotel" does not exist.', 42, $this->source); })()), "nbr_chambre", [], "any", false, false, false, 42), 'label');
        echo "
                                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formhotel"]) || array_key_exists("formhotel", $context) ? $context["formhotel"] : (function () { throw new RuntimeError('Variable "formhotel" does not exist.', 43, $this->source); })()), "nbr_chambre", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    <!--
                                    <input type=\"number\" class=\"form-control\" >
                                    -->
                                    
                                </div>
                                

                                <div class=\"mb-3\">
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formhotel"]) || array_key_exists("formhotel", $context) ? $context["formhotel"] : (function () { throw new RuntimeError('Variable "formhotel" does not exist.', 52, $this->source); })()), "image", [], "any", false, false, false, 52), 'label');
        echo "
                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formhotel"]) || array_key_exists("formhotel", $context) ? $context["formhotel"] : (function () { throw new RuntimeError('Variable "formhotel" does not exist.', 53, $this->source); })()), "image", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    <!--
                                    <input type=\"number\" class=\"form-control\" >
                                    -->
                                    
                                </div>
                                <div class=\"form-floating\">
                                    <!--
                                    <textarea class=\"form-control\" 
                                         style=\"height: 150px;\"></textarea>
                                    -->
                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formhotel"]) || array_key_exists("formhotel", $context) ? $context["formhotel"] : (function () { throw new RuntimeError('Variable "formhotel" does not exist.', 64, $this->source); })()), "description", [], "any", false, false, false, 64), 'label');
        echo "
                                    
                                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formhotel"]) || array_key_exists("formhotel", $context) ? $context["formhotel"] : (function () { throw new RuntimeError('Variable "formhotel" does not exist.', 66, $this->source); })()), "description", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>

                                <br>
                                <button  class=\"btn btn-primary\">Modifier</button>
                            ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formhotel"]) || array_key_exists("formhotel", $context) ? $context["formhotel"] : (function () { throw new RuntimeError('Variable "formhotel" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
                            

                        </div>
                    </div>
                    
                    
                    
                    
                </div>
            </div>
            <!-- Form End -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hotel/modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 71,  167 => 66,  162 => 64,  148 => 53,  144 => 52,  132 => 43,  128 => 42,  117 => 34,  113 => 33,  106 => 29,  102 => 28,  90 => 19,  86 => 18,  77 => 12,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}


{% block content %}
            <!-- Form Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h3 class=\"mb-4\">Modifier un hotel</h3>
                            
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
                                

                                <div class=\"mb-3\">
                                    {{form_label(formhotel.image)  }}
                                    {{form_widget(formhotel.image ,{'attr':{class: 'form-control'}})}}
                                    <!--
                                    <input type=\"number\" class=\"form-control\" >
                                    -->
                                    
                                </div>
                                <div class=\"form-floating\">
                                    <!--
                                    <textarea class=\"form-control\" 
                                         style=\"height: 150px;\"></textarea>
                                    -->
                                    {{form_label(formhotel.description)  }}
                                    
                                    {{form_widget(formhotel.description ,{'attr':{class: 'form-control'}})}}
                                </div>

                                <br>
                                <button  class=\"btn btn-primary\">Modifier</button>
                            {{form_end(formhotel) }}
                            

                        </div>
                    </div>
                    
                    
                    
                    
                </div>
            </div>
            <!-- Form End -->

{% endblock %}
 ", "hotel/modifier.html.twig", "C:\\Users\\Asus\\Downloads\\Creative-minds-Emir\\templates\\hotel\\modifier.html.twig");
    }
}
