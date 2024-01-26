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

/* promo/index.html.twig */
class __TwigTemplate_cc55ac63d0eb6583240377296cf7d88a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promo/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promo/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "promo/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to Poke-Bio";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"block-small\">
  <form method=\"post\">
    <h1 class=\"h3 mb-3 font-weight-normal text-center\">Bingooo</h1>
    <h2 class=\"h3 mb-3 font-weight-normal text-center\">
      Vous gagné le code promo
    </h2>
    <h2 class=\"h3 mb-3 font-weight-normal text-center\">
      <strong>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</strong>
    </h2>
    <h2 class=\"h3 mb-3 font-weight-normal text-center\">
      vous donnant droit à :
    </h2>
    ";
        // line 15
        if (((isset($context["taux"]) || array_key_exists("taux", $context) ? $context["taux"] : (function () { throw new RuntimeError('Variable "taux" does not exist.', 15, $this->source); })()) == 10)) {
            // line 16
            echo "    <h2 class=\"h3 mb-3 font-weight-normal text-center\">
      <strong> ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["taux"]) || array_key_exists("taux", $context) ? $context["taux"] : (function () { throw new RuntimeError('Variable "taux" does not exist.', 17, $this->source); })()), "html", null, true);
            echo " % sur toute commande à partir de 30 euros. </strong>
    </h2>
    ";
        }
        // line 19
        echo " ";
        if (((isset($context["taux"]) || array_key_exists("taux", $context) ? $context["taux"] : (function () { throw new RuntimeError('Variable "taux" does not exist.', 19, $this->source); })()) == 5)) {
            // line 20
            echo "    <h2 class=\"h3 mb-3 font-weight-normal text-center\">
      <strong> ";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["taux"]) || array_key_exists("taux", $context) ? $context["taux"] : (function () { throw new RuntimeError('Variable "taux" does not exist.', 21, $this->source); })()), "html", null, true);
            echo " % de reduction sur le deuxième menu acheté. </strong>
    </h2>
    ";
        }
        // line 23
        echo " ";
        if (((isset($context["taux"]) || array_key_exists("taux", $context) ? $context["taux"] : (function () { throw new RuntimeError('Variable "taux" does not exist.', 23, $this->source); })()) == 3)) {
            // line 24
            echo "    <h2 class=\"h3 mb-3 font-weight-normal text-center\">
      <strong>Un menu de 35 euros gratuit.</strong>
    </h2>
    ";
        }
        // line 28
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\" class=\"btn btn-lg btn-info btn-block mt-3\"
      >Bénéficiez de votre gain</a
    >

    <hr />
  </form>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "promo/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  136 => 28,  130 => 24,  127 => 23,  121 => 21,  118 => 20,  115 => 19,  109 => 17,  106 => 16,  104 => 15,  96 => 10,  87 => 3,  77 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %}Welcome to Poke-Bio{% endblock
%} {% block content %}
<div class=\"block-small\">
  <form method=\"post\">
    <h1 class=\"h3 mb-3 font-weight-normal text-center\">Bingooo</h1>
    <h2 class=\"h3 mb-3 font-weight-normal text-center\">
      Vous gagné le code promo
    </h2>
    <h2 class=\"h3 mb-3 font-weight-normal text-center\">
      <strong>{{ code }}</strong>
    </h2>
    <h2 class=\"h3 mb-3 font-weight-normal text-center\">
      vous donnant droit à :
    </h2>
    {% if taux == 10 %}
    <h2 class=\"h3 mb-3 font-weight-normal text-center\">
      <strong> {{ taux }} % sur toute commande à partir de 30 euros. </strong>
    </h2>
    {% endif %} {% if taux == 5 %}
    <h2 class=\"h3 mb-3 font-weight-normal text-center\">
      <strong> {{ taux }} % de reduction sur le deuxième menu acheté. </strong>
    </h2>
    {% endif %} {% if taux == 3 %}
    <h2 class=\"h3 mb-3 font-weight-normal text-center\">
      <strong>Un menu de 35 euros gratuit.</strong>
    </h2>
    {% endif %}
    <a href=\"{{ path('products') }}\" class=\"btn btn-lg btn-info btn-block mt-3\"
      >Bénéficiez de votre gain</a
    >

    <hr />
  </form>
</div>

{% endblock %}
", "promo/index.html.twig", "C:\\poke-bio\\templates\\promo\\index.html.twig");
    }
}
