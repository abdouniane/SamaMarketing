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

/* smarketing/parametres.html.twig */
class __TwigTemplate_8279b2a6e5b687e1d56c65a210737b2ef14b4b3936df38d4058ba6d475a6861b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "smarketing/parametres.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "smarketing/parametres.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "smarketing/parametres.html.twig", 1);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["adminForm"]) || array_key_exists("adminForm", $context) ? $context["adminForm"] : (function () { throw new RuntimeError('Variable "adminForm" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
    <div class=\"card border-primary mb-3\" style=\"max-width: 40rem; border: 0px \">                
        <div class=\"card-body\"> 
            <h3>
                 ";
        // line 8
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "                    Modification des informations d'un administrateur
                ";
        } else {
            // line 11
            echo "                    Ajout d'un nouvel administrateur
                ";
        }
        // line 13
        echo "                
            </h3>
            <br/>
            <div class=\"form-group\">
                <label for=\"nom\">Nom de l'admin</label>
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adminForm"]) || array_key_exists("adminForm", $context) ? $context["adminForm"] : (function () { throw new RuntimeError('Variable "adminForm" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label for=\"prenom\">Prénom de l'admin</label>
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adminForm"]) || array_key_exists("adminForm", $context) ? $context["adminForm"] : (function () { throw new RuntimeError('Variable "adminForm" does not exist.', 22, $this->source); })()), "prenom", [], "any", false, false, false, 22), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label for=\"telephone\">Numéro de Téléphone</label>
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adminForm"]) || array_key_exists("adminForm", $context) ? $context["adminForm"] : (function () { throw new RuntimeError('Variable "adminForm" does not exist.', 26, $this->source); })()), "telephone", [], "any", false, false, false, 26), 'widget');
        echo "
            </div>
             <div class=\"form-group\">
                <label for=\"email\">Adresse email</label>
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adminForm"]) || array_key_exists("adminForm", $context) ? $context["adminForm"] : (function () { throw new RuntimeError('Variable "adminForm" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'widget');
        echo "
            </div>
              <div class=\"form-group\">
                <label for=\"password\">Mot de passe</label>
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adminForm"]) || array_key_exists("adminForm", $context) ? $context["adminForm"] : (function () { throw new RuntimeError('Variable "adminForm" does not exist.', 34, $this->source); })()), "password", [], "any", false, false, false, 34), 'widget');
        echo "
            </div>
            <br/>
            <button type=\"submit\" class=\"btn btn-primary\">
                ";
        // line 38
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 38, $this->source); })())) {
            // line 39
            echo "                    Enregistrer les modifications
                ";
        } else {
            // line 41
            echo "                    Ajouter le nouvel administrateur
                ";
        }
        // line 43
        echo "            </button>
        </div>
    </div> 

    ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["adminForm"]) || array_key_exists("adminForm", $context) ? $context["adminForm"] : (function () { throw new RuntimeError('Variable "adminForm" does not exist.', 47, $this->source); })()), 'form_end');
        echo " 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "smarketing/parametres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 47,  140 => 43,  136 => 41,  132 => 39,  130 => 38,  123 => 34,  116 => 30,  109 => 26,  102 => 22,  95 => 18,  88 => 13,  84 => 11,  80 => 9,  78 => 8,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %} 
{% block body %}

    {{ form_start(adminForm) }}
    <div class=\"card border-primary mb-3\" style=\"max-width: 40rem; border: 0px \">                
        <div class=\"card-body\"> 
            <h3>
                 {% if editMode %}
                    Modification des informations d'un administrateur
                {%else %}
                    Ajout d'un nouvel administrateur
                {% endif %}
                
            </h3>
            <br/>
            <div class=\"form-group\">
                <label for=\"nom\">Nom de l'admin</label>
                {{form_widget(adminForm.nom)}}
            </div>
            <div class=\"form-group\">
                <label for=\"prenom\">Prénom de l'admin</label>
                {{form_widget(adminForm.prenom)}}
            </div>
            <div class=\"form-group\">
                <label for=\"telephone\">Numéro de Téléphone</label>
                {{form_widget(adminForm.telephone)}}
            </div>
             <div class=\"form-group\">
                <label for=\"email\">Adresse email</label>
                {{form_widget(adminForm.email)}}
            </div>
              <div class=\"form-group\">
                <label for=\"password\">Mot de passe</label>
                {{form_widget(adminForm.password)}}
            </div>
            <br/>
            <button type=\"submit\" class=\"btn btn-primary\">
                {% if editMode %}
                    Enregistrer les modifications
                {%else %}
                    Ajouter le nouvel administrateur
                {% endif %}
            </button>
        </div>
    </div> 

    {{ form_end(adminForm) }} 

{% endblock %}", "smarketing/parametres.html.twig", "C:\\Users\\Guest\\Desktop\\smarketing\\templates\\smarketing\\parametres.html.twig");
    }
}
