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

/* mentions/index.html.twig */
class __TwigTemplate_0fa13f0067e2bf325e1fa90f00756e4d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mentions/index.html.twig", 1);
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
    <h1>Mention Légale - Poke-Bio</h1>

    <h2>Éditeur du site :</h2>
    <p>Nom de l'entreprise : Poke-Bio</p>
    <p>Forme juridique : Sarl</p>
    <p>Adresse du siège social : 8 rue des lylas fleuris, 75000 Paris.</p>
    <p>Numéro de téléphone : 01 01 01 01 01</p>
    <p>Adresse e-mail : contact@poke-bio.com</p>
    <p>Capital social : 10.000</p>
    <p>Numéro d'immatriculation : RCS-POMK</p>
    <p>Responsable de la publication : Luc Monsieur</p>

    <h2>Hébergeur du site :</h2>
    <p>Nom de l'hébergeur : AWS</p>
    <p>Adresse : 6 Rue Faubourg 75010 Paris</p>
    <p>Numéro de téléphone : 01 54 25 65 11</p>

    <h2>Propriété intellectuelle :</h2>
    <p>
      Le site et son contenu (textes, images, vidéos, etc.) sont la propriété
      exclusive de Poke-Bio. Toute reproduction ou utilisation sans autorisation
      préalable est strictement interdite.
    </p>

    <h2>Collecte de données personnelles :</h2>
    <p>
      Poke-Bio collecte des données personnelles dans le respect des lois en
      vigueur. Pour en savoir plus sur notre politique de confidentialité,
      veuillez consulter notre page dédiée à la vie privée.
    </p>

    <h2>Cookies :</h2>
    <p>
      Le site utilise des cookies pour améliorer l'expérience de l'utilisateur.
      En continuant à naviguer sur ce site, vous acceptez l'utilisation de
      cookies conformément à notre politique en la matière.
    </p>

    <h2>Liens externes :</h2>
    <p>
      Le site peut contenir des liens vers des sites externes. Poke-Bio décline
      toute responsabilité quant au contenu de ces sites.
    </p>

    <h2>Contact :</h2>
    <p>
      Pour toute question ou demande, vous pouvez nous contacter à l'adresse
      e-mail suivante : [insérer l'adresse e-mail de contact].
    </p>

    <p>
      Merci de prendre connaissance de cette mention légale avant d'utiliser
      notre site.
    </p>
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
        return "mentions/index.html.twig";
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
    <h1>Mention Légale - Poke-Bio</h1>

    <h2>Éditeur du site :</h2>
    <p>Nom de l'entreprise : Poke-Bio</p>
    <p>Forme juridique : Sarl</p>
    <p>Adresse du siège social : 8 rue des lylas fleuris, 75000 Paris.</p>
    <p>Numéro de téléphone : 01 01 01 01 01</p>
    <p>Adresse e-mail : contact@poke-bio.com</p>
    <p>Capital social : 10.000</p>
    <p>Numéro d'immatriculation : RCS-POMK</p>
    <p>Responsable de la publication : Luc Monsieur</p>

    <h2>Hébergeur du site :</h2>
    <p>Nom de l'hébergeur : AWS</p>
    <p>Adresse : 6 Rue Faubourg 75010 Paris</p>
    <p>Numéro de téléphone : 01 54 25 65 11</p>

    <h2>Propriété intellectuelle :</h2>
    <p>
      Le site et son contenu (textes, images, vidéos, etc.) sont la propriété
      exclusive de Poke-Bio. Toute reproduction ou utilisation sans autorisation
      préalable est strictement interdite.
    </p>

    <h2>Collecte de données personnelles :</h2>
    <p>
      Poke-Bio collecte des données personnelles dans le respect des lois en
      vigueur. Pour en savoir plus sur notre politique de confidentialité,
      veuillez consulter notre page dédiée à la vie privée.
    </p>

    <h2>Cookies :</h2>
    <p>
      Le site utilise des cookies pour améliorer l'expérience de l'utilisateur.
      En continuant à naviguer sur ce site, vous acceptez l'utilisation de
      cookies conformément à notre politique en la matière.
    </p>

    <h2>Liens externes :</h2>
    <p>
      Le site peut contenir des liens vers des sites externes. Poke-Bio décline
      toute responsabilité quant au contenu de ces sites.
    </p>

    <h2>Contact :</h2>
    <p>
      Pour toute question ou demande, vous pouvez nous contacter à l'adresse
      e-mail suivante : [insérer l'adresse e-mail de contact].
    </p>

    <p>
      Merci de prendre connaissance de cette mention légale avant d'utiliser
      notre site.
    </p>
    <hr />
  </form>
</div>

{% endblock %}
", "mentions/index.html.twig", "C:\\poke-bio\\templates\\mentions\\index.html.twig");
    }
}
