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

/* home/index.html.twig */
class __TwigTemplate_10121cad5f9df6857cf9e0d39e03d41c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'carousel' => [$this, 'block_carousel'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<!-- Three columns of text below the carousel -->
<h3>Nos meilleures ventes</h3>
<p>Découvrez les articles les plus vendus.</p>
<div class=\"row\">
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 7, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "  <div class=\"col-md-3\">";
            $this->loadTemplate("product/single_product.html.twig", "home/index.html.twig", 8)->display($context);
            echo "</div>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>
<!-- /.row -->

<!-- START THE FEATURETTES -->

<hr class=\"featurette-divider\" />

<div class=\"row featurette\">
  <div class=\"col-md-7\">
    <h2 class=\"featurette-heading\">
      Une équipe de professionnel
      <span class=\"text-muted\">au grand savoir-faire</span>
    </h2>
    <p class=\"lead\">
      Que vous soyez un amateur de cuisine saine ou un explorateur de saveurs
      exotiques, nos Poke Bowls sont conçus pour satisfaire vos papilles tout en
      vous apportant une dose de vitalité. Plongez dans une expérience culinaire
      unique et délectez-vous d'une explosion de fraîcheur et de bien-être avec
      nos Poke Bowls.
    </p>
  </div>
  <div class=\"col-md-5\">
    <img
      src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/first.jpg"), "html", null, true);
        echo "\"
      class=\"img-fluid\"
      alt=\"Un savoir-faire Français\" />
  </div>
</div>

<hr class=\"featurette-divider\" />

<div class=\"row featurette\">
  <div class=\"col-md-7 order-md-2\">
    <h2 class=\"featurette-heading\">
      Venez nous rencontrer dans notre
      <span class=\"text-muted\">restaurant en France.</span>
    </h2>
    <p class=\"lead\">
      Notre établissement vous accueille avec une atmosphère chaleureuse et une
      cuisine exquise qui saura ravir vos papilles. Que vous soyez amateur de
      saveurs authentiques, de plats innovants ou simplement en quête d'un
      moment convivial, nous sommes impatients de vous rencontrer et de partager
      notre passion pour la gastronomie française. Chez nous, chaque repas est
      une invitation à l'émerveillement, où la qualité des ingrédients se marie
      à un service attentionné.
    </p>
  </div>
  <div class=\"col-md-5 order-md-1\">
    <img
      src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/second.jpg"), "html", null, true);
        echo "\"
      class=\"img-fluid\"
      alt=\"Une boutique ouverte toute l'année\" />
  </div>
</div>

<!-- /END THE FEATURETTES -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
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
        return array (  179 => 59,  150 => 33,  125 => 10,  108 => 8,  91 => 7,  85 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block carousel %}{% endblock %} {% block
content %}
<!-- Three columns of text below the carousel -->
<h3>Nos meilleures ventes</h3>
<p>Découvrez les articles les plus vendus.</p>
<div class=\"row\">
  {% for product in products %}
  <div class=\"col-md-3\">{% include 'product/single_product.html.twig' %}</div>
  {% endfor %}
</div>
<!-- /.row -->

<!-- START THE FEATURETTES -->

<hr class=\"featurette-divider\" />

<div class=\"row featurette\">
  <div class=\"col-md-7\">
    <h2 class=\"featurette-heading\">
      Une équipe de professionnel
      <span class=\"text-muted\">au grand savoir-faire</span>
    </h2>
    <p class=\"lead\">
      Que vous soyez un amateur de cuisine saine ou un explorateur de saveurs
      exotiques, nos Poke Bowls sont conçus pour satisfaire vos papilles tout en
      vous apportant une dose de vitalité. Plongez dans une expérience culinaire
      unique et délectez-vous d'une explosion de fraîcheur et de bien-être avec
      nos Poke Bowls.
    </p>
  </div>
  <div class=\"col-md-5\">
    <img
      src=\"{{ asset('assets/img/first.jpg') }}\"
      class=\"img-fluid\"
      alt=\"Un savoir-faire Français\" />
  </div>
</div>

<hr class=\"featurette-divider\" />

<div class=\"row featurette\">
  <div class=\"col-md-7 order-md-2\">
    <h2 class=\"featurette-heading\">
      Venez nous rencontrer dans notre
      <span class=\"text-muted\">restaurant en France.</span>
    </h2>
    <p class=\"lead\">
      Notre établissement vous accueille avec une atmosphère chaleureuse et une
      cuisine exquise qui saura ravir vos papilles. Que vous soyez amateur de
      saveurs authentiques, de plats innovants ou simplement en quête d'un
      moment convivial, nous sommes impatients de vous rencontrer et de partager
      notre passion pour la gastronomie française. Chez nous, chaque repas est
      une invitation à l'émerveillement, où la qualité des ingrédients se marie
      à un service attentionné.
    </p>
  </div>
  <div class=\"col-md-5 order-md-1\">
    <img
      src=\"{{ asset('assets/img/second.jpg') }}\"
      class=\"img-fluid\"
      alt=\"Une boutique ouverte toute l'année\" />
  </div>
</div>

<!-- /END THE FEATURETTES -->
{% endblock %}
", "home/index.html.twig", "C:\\poke-bio\\templates\\home\\index.html.twig");
    }
}
