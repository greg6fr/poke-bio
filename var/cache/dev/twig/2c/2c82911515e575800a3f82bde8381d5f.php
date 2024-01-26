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

/* cgu/index.html.twig */
class __TwigTemplate_a0281648cf9694250d154bdbc99bd5f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cgu/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cgu/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cgu/index.html.twig", 1);
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
    <h1>Conditions Générales d'Utilisation de Poke-bio</h1>

    <p><strong>Date d'entrée en vigueur :</strong> 26/01/2024</p>

    <p>
      Bienvenue sur Poke-bio ! En utilisant notre plateforme, vous acceptez les
      conditions générales d'utilisation décrites ci-dessous. Veuillez les lire
      attentivement.
    </p>

    <h2>1. Acceptation des Conditions</h2>

    <p>
      En accédant et en utilisant Poke-bio, vous reconnaissez avoir lu, compris
      et accepté les présentes conditions générales d'utilisation. Si vous
      n'acceptez pas ces conditions, veuillez ne pas utiliser notre service.
    </p>

    <h2>2. Utilisation du Service</h2>

    <p>
      2.1. Vous êtes responsable de l'utilisation de votre compte et des
      activités qui s'y rapportent. Assurez-vous de maintenir la confidentialité
      de vos informations d'identification.
    </p>

    <p>
      2.2. Vous vous engagez à ne pas utiliser Poke-bio à des fins illégales ou
      non autorisées.
    </p>

    <h2>3. Contenu de l'Utilisateur</h2>

    <p>
      3.1. Vous conservez tous les droits sur le contenu que vous soumettez ou
      publiez sur Poke-bio.
    </p>

    <p>
      3.2. En soumettant du contenu, vous accordez à Poke-bio une licence
      mondiale, non exclusive, libre de redevance, pouvant être sous-licenciée,
      et transférable pour utiliser, reproduire, distribuer, préparer des œuvres
      dérivées, afficher et exécuter le contenu en relation avec les services
      offerts par Poke-bio.
    </p>

    <h2>4. Modifications du Service</h2>

    <p>
      Poke-bio se réserve le droit de modifier, suspendre ou interrompre tout
      aspect du service à tout moment, y compris la disponibilité du service ou
      de toute fonctionnalité.
    </p>

    <h2>5. Responsabilité</h2>

    <p>
      5.1. Poke-bio ne garantit pas l'exactitude, l'exhaustivité ou la fiabilité
      du contenu disponible sur la plateforme.
    </p>

    <p>
      5.2. Vous utilisez Poke-bio à vos propres risques. Nous ne serons pas
      responsables des dommages directs, indirects, accessoires, spéciaux,
      consécutifs ou exemplaires découlant de votre utilisation du service.
    </p>

    <h2>6. Résiliation</h2>

    <p>
      Poke-bio se réserve le droit de résilier ou de suspendre votre compte et
      votre accès au service pour non-respect des présentes conditions.
    </p>

    <p>
      Ces conditions générales d'utilisation peuvent être modifiées
      périodiquement. Il est de votre responsabilité de consulter régulièrement
      les conditions mises à jour. En continuant d'utiliser Poke-bio après toute
      modification, vous acceptez les nouvelles conditions.
    </p>

    <p>
      Si vous avez des questions ou des préoccupations, veuillez nous contacter
      à [adresse e-mail de contact].
    </p>

    <p>Merci d'utiliser Poke-bio !</p>

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
        return "cgu/index.html.twig";
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
    <h1>Conditions Générales d'Utilisation de Poke-bio</h1>

    <p><strong>Date d'entrée en vigueur :</strong> 26/01/2024</p>

    <p>
      Bienvenue sur Poke-bio ! En utilisant notre plateforme, vous acceptez les
      conditions générales d'utilisation décrites ci-dessous. Veuillez les lire
      attentivement.
    </p>

    <h2>1. Acceptation des Conditions</h2>

    <p>
      En accédant et en utilisant Poke-bio, vous reconnaissez avoir lu, compris
      et accepté les présentes conditions générales d'utilisation. Si vous
      n'acceptez pas ces conditions, veuillez ne pas utiliser notre service.
    </p>

    <h2>2. Utilisation du Service</h2>

    <p>
      2.1. Vous êtes responsable de l'utilisation de votre compte et des
      activités qui s'y rapportent. Assurez-vous de maintenir la confidentialité
      de vos informations d'identification.
    </p>

    <p>
      2.2. Vous vous engagez à ne pas utiliser Poke-bio à des fins illégales ou
      non autorisées.
    </p>

    <h2>3. Contenu de l'Utilisateur</h2>

    <p>
      3.1. Vous conservez tous les droits sur le contenu que vous soumettez ou
      publiez sur Poke-bio.
    </p>

    <p>
      3.2. En soumettant du contenu, vous accordez à Poke-bio une licence
      mondiale, non exclusive, libre de redevance, pouvant être sous-licenciée,
      et transférable pour utiliser, reproduire, distribuer, préparer des œuvres
      dérivées, afficher et exécuter le contenu en relation avec les services
      offerts par Poke-bio.
    </p>

    <h2>4. Modifications du Service</h2>

    <p>
      Poke-bio se réserve le droit de modifier, suspendre ou interrompre tout
      aspect du service à tout moment, y compris la disponibilité du service ou
      de toute fonctionnalité.
    </p>

    <h2>5. Responsabilité</h2>

    <p>
      5.1. Poke-bio ne garantit pas l'exactitude, l'exhaustivité ou la fiabilité
      du contenu disponible sur la plateforme.
    </p>

    <p>
      5.2. Vous utilisez Poke-bio à vos propres risques. Nous ne serons pas
      responsables des dommages directs, indirects, accessoires, spéciaux,
      consécutifs ou exemplaires découlant de votre utilisation du service.
    </p>

    <h2>6. Résiliation</h2>

    <p>
      Poke-bio se réserve le droit de résilier ou de suspendre votre compte et
      votre accès au service pour non-respect des présentes conditions.
    </p>

    <p>
      Ces conditions générales d'utilisation peuvent être modifiées
      périodiquement. Il est de votre responsabilité de consulter régulièrement
      les conditions mises à jour. En continuant d'utiliser Poke-bio après toute
      modification, vous acceptez les nouvelles conditions.
    </p>

    <p>
      Si vous avez des questions ou des préoccupations, veuillez nous contacter
      à [adresse e-mail de contact].
    </p>

    <p>Merci d'utiliser Poke-bio !</p>

    <hr />
  </form>
</div>

{% endblock %}
", "cgu/index.html.twig", "C:\\poke-bio\\templates\\cgu\\index.html.twig");
    }
}
