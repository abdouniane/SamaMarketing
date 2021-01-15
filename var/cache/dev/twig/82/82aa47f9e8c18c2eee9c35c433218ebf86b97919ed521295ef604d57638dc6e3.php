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

/* smarketing/nouveau-client.html.twig */
class __TwigTemplate_6ffdf824f9c32ae0b6b636d3de07436ee8217c882a6ce05c2bed4473a935a7fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "smarketing/nouveau-client.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "smarketing/nouveau-client.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "smarketing/nouveau-client.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new RuntimeError('Variable "clientForm" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
    <div class=\"card border-primary mb-3\" style=\"max-width: 40rem; border: 0px \">                
        <div class=\"card-body\"> 
            <h3>
                 ";
        // line 8
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "                    Modification des informations d'un client
                ";
        } else {
            // line 11
            echo "                    Ajout d'un nouveau client
                ";
        }
        // line 13
        echo "                
            </h3>
            <br/>
            <div class=\"form-group\">
                <label for=\"nom\">Nom du Client</label>
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new RuntimeError('Variable "clientForm" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label for=\"prenom\">Prénom du Client</label>
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new RuntimeError('Variable "clientForm" does not exist.', 22, $this->source); })()), "prenom", [], "any", false, false, false, 22), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label for=\"telephone\">Numéro de Téléphone</label>
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new RuntimeError('Variable "clientForm" does not exist.', 26, $this->source); })()), "telephone", [], "any", false, false, false, 26), 'widget');
        echo "
            </div>
            <br/>
            <button type=\"submit\" class=\"btn btn-primary\">
                ";
        // line 30
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "                    Enregistrer les modifications
                ";
        } else {
            // line 33
            echo "                    Ajouter le client
                ";
        }
        // line 35
        echo "            </button>
        </div>
    </div> 

    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["clientForm"]) || array_key_exists("clientForm", $context) ? $context["clientForm"] : (function () { throw new RuntimeError('Variable "clientForm" does not exist.', 39, $this->source); })()), 'form_end');
        echo " 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "smarketing/nouveau-client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 39,  126 => 35,  122 => 33,  118 => 31,  116 => 30,  109 => 26,  102 => 22,  95 => 18,  88 => 13,  84 => 11,  80 => 9,  78 => 8,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %} 
{% block body %}

    {{ form_start(clientForm) }}
    <div class=\"card border-primary mb-3\" style=\"max-width: 40rem; border: 0px \">                
        <div class=\"card-body\"> 
            <h3>
                 {% if editMode %}
                    Modification des informations d'un client
                {%else %}
                    Ajout d'un nouveau client
                {% endif %}
                
            </h3>
            <br/>
            <div class=\"form-group\">
                <label for=\"nom\">Nom du Client</label>
                {{form_widget(clientForm.nom)}}
            </div>
            <div class=\"form-group\">
                <label for=\"prenom\">Prénom du Client</label>
                {{form_widget(clientForm.prenom)}}
            </div>
            <div class=\"form-group\">
                <label for=\"telephone\">Numéro de Téléphone</label>
                {{form_widget(clientForm.telephone)}}
            </div>
            <br/>
            <button type=\"submit\" class=\"btn btn-primary\">
                {% if editMode %}
                    Enregistrer les modifications
                {%else %}
                    Ajouter le client
                {% endif %}
            </button>
        </div>
    </div> 

    {{ form_end(clientForm) }} 

{% endblock %}
", "smarketing/nouveau-client.html.twig", "C:\\Users\\Guest\\Desktop\\smarketing\\templates\\smarketing\\nouveau-client.html.twig");
    }
}
