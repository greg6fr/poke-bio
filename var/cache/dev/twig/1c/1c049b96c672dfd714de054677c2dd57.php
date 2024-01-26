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

/* quisommesnous/index.html.twig */
class __TwigTemplate_94a96000694c1b448f25fb09f7083701 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quisommesnous/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quisommesnous/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quisommesnous/index.html.twig", 1);
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
    <h1>Nous sommes ODENS - Agence Web</h1>

    <p>ODENS est une agence web composée d’une équipe de 6 personnes :</p>

    <ul>
      <li>2 développeurs</li>
      <li>1 designer</li>
      <li>1 chef de projet</li>
      <li>1 responsable marketing digital</li>
    </ul>

    <p>
      ODENS a été créée en 2023 après la rencontre des fondateurs Aya, Océany,
      Romane, Jules, Valentin et Sara pendant leurs études de marketing. Portés
      par une vision claire de l’impact que la communication peut avoir sur une
      entreprise, nos fondateurs voulaient apporter une expertise et une
      stratégie personnalisée, selon les valeurs de chaque entreprise.
    </p>

    <p>
      ODENS s’engage envers ses collaborateurs pour l’excellence stratégique qui
      se reflète dans nos méthodes de travail.
    </p>

    <footer>
      <p>Contactez-nous : contact@poke-bio.com</p>
    </footer>
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
        return "quisommesnous/index.html.twig";
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
        return array (  87 => 3,  77 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %}Welcome to Poke-Bio{% endblock
%} {% block content %}
<div class=\"block-small\">
  <form method=\"post\">
    <h1>Nous sommes ODENS - Agence Web</h1>

    <p>ODENS est une agence web composée d’une équipe de 6 personnes :</p>

    <ul>
      <li>2 développeurs</li>
      <li>1 designer</li>
      <li>1 chef de projet</li>
      <li>1 responsable marketing digital</li>
    </ul>

    <p>
      ODENS a été créée en 2023 après la rencontre des fondateurs Aya, Océany,
      Romane, Jules, Valentin et Sara pendant leurs études de marketing. Portés
      par une vision claire de l’impact que la communication peut avoir sur une
      entreprise, nos fondateurs voulaient apporter une expertise et une
      stratégie personnalisée, selon les valeurs de chaque entreprise.
    </p>

    <p>
      ODENS s’engage envers ses collaborateurs pour l’excellence stratégique qui
      se reflète dans nos méthodes de travail.
    </p>

    <footer>
      <p>Contactez-nous : contact@poke-bio.com</p>
    </footer>
    <hr />
  </form>
</div>

{% endblock %}
", "quisommesnous/index.html.twig", "C:\\poke-bio\\templates\\quisommesnous\\index.html.twig");
    }
}
