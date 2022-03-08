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

/* backend/index.html.twig */
class __TwigTemplate_eb6efcaaf0439fd43821fba962770b13d4c20855e26432c9e51f95cea3ca7f12 extends Template
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
        // line 5
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/index.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "backend/index.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo " 
    <div class=\"container-fluid pt-4 px-4\">
        <div class=\"row g-4\">
            <div class=\"col-sm-6 col-xl-3\">
                <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                    <i class=\"fa fa-chart-line fa-3x text-primary\"></i>
                    <div class=\"ms-3\">
                        <p class=\"mb-2\">la vente d'aujourd'hui</p>
                        <h6 class=\"mb-0\">\$2500</h6>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-xl-3\">
                <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                    <i class=\"fa fa-chart-bar fa-3x text-primary\"></i>
                    <div class=\"ms-3\">
                        <p class=\"mb-2\">la vente totale</p>
                        <h6 class=\"mb-0\">\$10k</h6>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-xl-3\">
                <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                    <i class=\"fa fa-chart-area fa-3x text-primary\"></i>
                    <div class=\"ms-3\">
                        <p class=\"mb-2\"> Revenu d'aujourd'hui</p>
                        <h6 class=\"mb-0\">\$2500</h6>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-xl-3\">
                <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                    <i class=\"fa fa-chart-pie fa-3x text-primary\"></i>
                    <div class=\"ms-3\">
                        <p class=\"mb-2\"> Revenu Total</p>
                        <h6 class=\"mb-0\">\$15k</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->


    <!-- Sales Chart Start -->
    <div class=\"container-fluid pt-4 px-4\">
        <div class=\"row g-4\">
            <div class=\"col-sm-12 col-xl-6\">
                <div class=\"bg-light text-center rounded p-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-4\">
                        <h6 class=\"mb-0\">Vente dans le monde</h6>
                        <a href=\"\">Show All</a>
                    </div>
                    <canvas id=\"worldwide-sales\"></canvas>
                </div>
            </div>
            <div class=\"col-sm-12 col-xl-6\">
                <div class=\"bg-light text-center rounded p-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-4\">
                        <h6 class=\"mb-0\">vente et revenu</h6>
                        <a href=\"\">Show All</a>
                    </div>
                    <canvas id=\"salse-revenue\"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- Sales Chart End -->


    <!-- Recent Sales Start -->
    <div class=\"container-fluid pt-4 px-4\">
        <div class=\"bg-light text-center rounded p-4\">
            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                <h6 class=\"mb-0\">Recent Salse</h6>
                <a href=\"\">Show All</a>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table text-start align-middle table-bordered table-hover mb-0\">
                    <thead>
                        <tr class=\"text-dark\">
                            <th scope=\"col\"><input class=\"form-check-input\" type=\"checkbox\"></th>
                            <th scope=\"col\">Date</th>
                            <th scope=\"col\">Invoice</th>
                            <th scope=\"col\">Customer</th>
                            <th scope=\"col\">Amount</th>
                            <th scope=\"col\">Status</th>
                            <th scope=\"col\">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Emir Thameur</td>
                            <td>\$123</td>
                            <td>Paid</td>
                            <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Emir Thameur</td>
                            <td>\$123</td>
                            <td>Paid</td>
                            <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Emir Thameur</td>
                            <td>\$123</td>
                            <td>Paid</td>
                            <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Emir Thameur</td>
                            <td>\$123</td>
                            <td>Paid</td>
                            <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Emir Thameur</td>
                            <td>\$123</td>
                            <td>Paid</td>
                            <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backend/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  35 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("



{% extends \"base-back.html.twig\" %}

{% block content %} 
    <div class=\"container-fluid pt-4 px-4\">
        <div class=\"row g-4\">
            <div class=\"col-sm-6 col-xl-3\">
                <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                    <i class=\"fa fa-chart-line fa-3x text-primary\"></i>
                    <div class=\"ms-3\">
                        <p class=\"mb-2\">la vente d'aujourd'hui</p>
                        <h6 class=\"mb-0\">\$2500</h6>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-xl-3\">
                <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                    <i class=\"fa fa-chart-bar fa-3x text-primary\"></i>
                    <div class=\"ms-3\">
                        <p class=\"mb-2\">la vente totale</p>
                        <h6 class=\"mb-0\">\$10k</h6>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-xl-3\">
                <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                    <i class=\"fa fa-chart-area fa-3x text-primary\"></i>
                    <div class=\"ms-3\">
                        <p class=\"mb-2\"> Revenu d'aujourd'hui</p>
                        <h6 class=\"mb-0\">\$2500</h6>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6 col-xl-3\">
                <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                    <i class=\"fa fa-chart-pie fa-3x text-primary\"></i>
                    <div class=\"ms-3\">
                        <p class=\"mb-2\"> Revenu Total</p>
                        <h6 class=\"mb-0\">\$15k</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->


    <!-- Sales Chart Start -->
    <div class=\"container-fluid pt-4 px-4\">
        <div class=\"row g-4\">
            <div class=\"col-sm-12 col-xl-6\">
                <div class=\"bg-light text-center rounded p-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-4\">
                        <h6 class=\"mb-0\">Vente dans le monde</h6>
                        <a href=\"\">Show All</a>
                    </div>
                    <canvas id=\"worldwide-sales\"></canvas>
                </div>
            </div>
            <div class=\"col-sm-12 col-xl-6\">
                <div class=\"bg-light text-center rounded p-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-4\">
                        <h6 class=\"mb-0\">vente et revenu</h6>
                        <a href=\"\">Show All</a>
                    </div>
                    <canvas id=\"salse-revenue\"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- Sales Chart End -->


    <!-- Recent Sales Start -->
    <div class=\"container-fluid pt-4 px-4\">
        <div class=\"bg-light text-center rounded p-4\">
            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                <h6 class=\"mb-0\">Recent Salse</h6>
                <a href=\"\">Show All</a>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table text-start align-middle table-bordered table-hover mb-0\">
                    <thead>
                        <tr class=\"text-dark\">
                            <th scope=\"col\"><input class=\"form-check-input\" type=\"checkbox\"></th>
                            <th scope=\"col\">Date</th>
                            <th scope=\"col\">Invoice</th>
                            <th scope=\"col\">Customer</th>
                            <th scope=\"col\">Amount</th>
                            <th scope=\"col\">Status</th>
                            <th scope=\"col\">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Emir Thameur</td>
                            <td>\$123</td>
                            <td>Paid</td>
                            <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Emir Thameur</td>
                            <td>\$123</td>
                            <td>Paid</td>
                            <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Emir Thameur</td>
                            <td>\$123</td>
                            <td>Paid</td>
                            <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Emir Thameur</td>
                            <td>\$123</td>
                            <td>Paid</td>
                            <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Emir Thameur</td>
                            <td>\$123</td>
                            <td>Paid</td>
                            <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->
{% endblock %}



", "backend/index.html.twig", "C:\\Users\\Asus\\Downloads\\Creative-minds-Emir\\templates\\backend\\index.html.twig");
    }
}
