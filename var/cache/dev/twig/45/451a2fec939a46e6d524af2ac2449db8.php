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

/* cgv/index.html.twig */
class __TwigTemplate_524474bb835330dde24b405dbfe973ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cgv/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cgv/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cgv/index.html.twig", 1);
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
    <h1>Conditions Générales de Vente de Poke-Bio</h1>

    <p><strong>Date d'entrée en vigueur :</strong> [Insérez la date]</p>

    <p>
      Bienvenue sur Poke-Bio ! Les présentes conditions générales de vente
      régissent l'utilisation de nos services. En effectuant un achat sur
      Poke-Bio, vous acceptez ces conditions.
    </p>

    <h2>1. Commandes et Paiements</h2>

    <p>
      1.1. Vous pouvez passer commande via notre plateforme en suivant les
      instructions fournies.
    </p>

    <p>
      1.2. Le paiement des produits doit être effectué au moment de la commande.
      Les modes de paiement acceptés seront spécifiés lors de la procédure
      d'achat.
    </p>

    <h2>2. Prix et Taxes</h2>

    <p>
      2.1. Les prix des produits sont indiqués sur la plateforme et peuvent être
      modifiés sans préavis.
    </p>

    <p>
      2.2. Tous les prix sont indiqués en [devise] et incluent toutes les taxes
      applicables, sauf indication contraire.
    </p>

    <h2>3. Livraison</h2>

    <p>
      3.1. Les délais de livraison sont estimés et peuvent varier en fonction de
      la destination.
    </p>

    <p>
      3.2. Les frais de livraison seront indiqués lors de la commande et
      dépendent de la destination.
    </p>

    <h2>4. Droit de Rétractation</h2>

    <p>
      4.1. Conformément à la législation en vigueur, vous avez un droit de
      rétractation dans les [indiquez le délai] jours suivant la réception des
      produits.
    </p>

    <p>
      4.2. Pour exercer ce droit, contactez notre service clientèle à [adresse
      e-mail de contact] pour obtenir des instructions de retour.
    </p>

    <h2>5. Garanties et Responsabilités</h2>

    <p>
      5.1. Nous garantissons que nos produits sont conformes à leur description
      et exempts de défauts.
    </p>

    <p>
      5.2. Notre responsabilité est limitée au montant payé pour le produit.
    </p>

    <h2>6. Modifications des Conditions</h2>

    <p>
      Poke-Bio se réserve le droit de modifier ces conditions générales de
      vente. Les modifications prendront effet dès leur publication sur la
      plateforme.
    </p>

    <h2>7. Contact</h2>

    <p>
      Si vous avez des questions ou des préoccupations concernant vos achats,
      veuillez contacter notre service clientèle à [adresse e-mail de contact].
    </p>

    <p>Merci de faire vos achats sur Poke-Bio !</p>
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
        return "cgv/index.html.twig";
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
    <h1>Conditions Générales de Vente de Poke-Bio</h1>

    <p><strong>Date d'entrée en vigueur :</strong> [Insérez la date]</p>

    <p>
      Bienvenue sur Poke-Bio ! Les présentes conditions générales de vente
      régissent l'utilisation de nos services. En effectuant un achat sur
      Poke-Bio, vous acceptez ces conditions.
    </p>

    <h2>1. Commandes et Paiements</h2>

    <p>
      1.1. Vous pouvez passer commande via notre plateforme en suivant les
      instructions fournies.
    </p>

    <p>
      1.2. Le paiement des produits doit être effectué au moment de la commande.
      Les modes de paiement acceptés seront spécifiés lors de la procédure
      d'achat.
    </p>

    <h2>2. Prix et Taxes</h2>

    <p>
      2.1. Les prix des produits sont indiqués sur la plateforme et peuvent être
      modifiés sans préavis.
    </p>

    <p>
      2.2. Tous les prix sont indiqués en [devise] et incluent toutes les taxes
      applicables, sauf indication contraire.
    </p>

    <h2>3. Livraison</h2>

    <p>
      3.1. Les délais de livraison sont estimés et peuvent varier en fonction de
      la destination.
    </p>

    <p>
      3.2. Les frais de livraison seront indiqués lors de la commande et
      dépendent de la destination.
    </p>

    <h2>4. Droit de Rétractation</h2>

    <p>
      4.1. Conformément à la législation en vigueur, vous avez un droit de
      rétractation dans les [indiquez le délai] jours suivant la réception des
      produits.
    </p>

    <p>
      4.2. Pour exercer ce droit, contactez notre service clientèle à [adresse
      e-mail de contact] pour obtenir des instructions de retour.
    </p>

    <h2>5. Garanties et Responsabilités</h2>

    <p>
      5.1. Nous garantissons que nos produits sont conformes à leur description
      et exempts de défauts.
    </p>

    <p>
      5.2. Notre responsabilité est limitée au montant payé pour le produit.
    </p>

    <h2>6. Modifications des Conditions</h2>

    <p>
      Poke-Bio se réserve le droit de modifier ces conditions générales de
      vente. Les modifications prendront effet dès leur publication sur la
      plateforme.
    </p>

    <h2>7. Contact</h2>

    <p>
      Si vous avez des questions ou des préoccupations concernant vos achats,
      veuillez contacter notre service clientèle à [adresse e-mail de contact].
    </p>

    <p>Merci de faire vos achats sur Poke-Bio !</p>
    <hr />
  </form>
</div>

{% endblock %}
", "cgv/index.html.twig", "C:\\poke-bio\\templates\\cgv\\index.html.twig");
    }
}
