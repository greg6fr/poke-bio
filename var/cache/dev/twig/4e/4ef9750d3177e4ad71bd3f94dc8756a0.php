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

/* cart/index.html.twig */
class __TwigTemplate_bd71aeba2b118f66c8a0bce18a7d8403 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Mon panier - La Boutique
Française";
        
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
        echo "<h1>Mon panier</h1>
Retrouvez l'ensemble des produits que vous avez ajouté à votre panier. ";
        // line 4
        if ((twig_length_filter($this->env,         // line 5
(isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 5, $this->source); })())) > 0)) {
            // line 6
            echo "<table class=\"table mt-3\">
  <thead>
    <tr>
      <th scope=\"col\">Produit</th>
      <th scope=\"col\"></th>
      <th scope=\"col\">Quantité</th>
      <th scope=\"col\">Prix</th>
      <th scope=\"col\">Total</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
    ";
            // line 18
            $context["total"] = 0;
            echo " ";
            $context["compteur"] = 0;
            echo " ";
            $context["totalnet"] = 0;
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(            // line 19
(isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo " ";
                $context["compteur"] = ((isset($context["compteur"]) || array_key_exists("compteur", $context) ? $context["compteur"] : (function () { throw new RuntimeError('Variable "compteur" does not exist.', 19, $this->source); })()) + 1);
                // line 20
                echo "    <tr>
      <th>
        <img
          src=\"/uploads/";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 23), "illustration", [], "any", false, false, false, 23), "html", null, true);
                echo "\"
          alt=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
                echo "\"
          height=\"75px\" /><br />
      </th>
      <td>
        ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
                echo "<br />
        <small>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 29), "subtitle", [], "any", false, false, false, 29), "html", null, true);
                echo "</small>
      </td>
      <td>
        <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decrease_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\">
          <img
            src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/minus.png"), "html", null, true);
                echo "\"
            height=\"12px\"
            alt=\"Retirer une quantité à mon produit\" />
        </a>
        x ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 38), "html", null, true);
                echo "
        <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\">
          <img
            src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/plus.png"), "html", null, true);
                echo "\"
            height=\"12px\"
            alt=\"Ajouter un produit\" />
        </a>
      </td>
      <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 46), "price", [], "any", false, false, false, 46) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
      <td>
        ";
                // line 48
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 48), "price", [], "any", false, false, false, 48) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 48)) / 100), 2, ",", "."), "html", null, true);
                echo "
        €
      </td>
      <td>
        <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\">
          <img
            src=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/delete.png"), "html", null, true);
                echo "\"
            height=\"18px\"
            alt=\"Supprimer mon produit\" />
        </a>
      </td>
    </tr>
    ";
                // line 60
                if ((((isset($context["taux"]) || array_key_exists("taux", $context) ? $context["taux"] : (function () { throw new RuntimeError('Variable "taux" does not exist.', 60, $this->source); })()) == 5) && ((isset($context["compteur"]) || array_key_exists("compteur", $context) ? $context["compteur"] : (function () { throw new RuntimeError('Variable "compteur" does not exist.', 60, $this->source); })()) == 2))) {
                    echo " ";
                    $context["totalnet"] = ((isset($context["totalnet"]) || array_key_exists("totalnet", $context) ? $context["totalnet"] : (function () { throw new RuntimeError('Variable "totalnet" does not exist.', 60, $this->source); })()) + ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 61
$context["product"], "product", [], "any", false, false, false, 61), "price", [], "any", false, false, false, 61) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 61)) - ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 61), "price", [], "any", false, false, false, 61) * twig_get_attribute($this->env, $this->source,                     // line 62
$context["product"], "quantity", [], "any", false, false, false, 62)) * 0.5)));
                    echo " ";
                }
                echo " ";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 62, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 63
$context["product"], "product", [], "any", false, false, false, 63), "price", [], "any", false, false, false, 63) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 63)));
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "  </tbody>
</table>
<div class=\"text-right mb-5\">
  <b>Nombre de produit :</b> ";
            // line 67
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 67, $this->source); })())), "html", null, true);
            echo "
  <br />
  <b>Total de mon panier :</b>
  ";
            // line 70
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 70, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
            echo " €<br />
  ";
            // line 71
            if ((((isset($context["taux"]) || array_key_exists("taux", $context) ? $context["taux"] : (function () { throw new RuntimeError('Variable "taux" does not exist.', 71, $this->source); })()) == 10) && ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 71, $this->source); })()) >= 30))) {
                // line 72
                echo "  <b>Code promo appliqué : </b>";
                echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 72, $this->source); })()), "html", null, true);
                echo "<br />
  <b>Taux de réduction : </b>";
                // line 73
                echo twig_escape_filter($this->env, (isset($context["taux"]) || array_key_exists("taux", $context) ? $context["taux"] : (function () { throw new RuntimeError('Variable "taux" does not exist.', 73, $this->source); })()), "html", null, true);
                echo " <br />
  <b>Total net à payer: </b>
  ";
                // line 75
                $context["result"] = twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 75, $this->source); })()) - ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 75, $this->source); })()) * 0.1)) / 100), 2, ",", ".");
                echo " €
  ";
                // line 76
                echo twig_escape_filter($this->env, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 76, $this->source); })()), "html", null, true);
                echo "
  ";
                // line 77
                $context["result"] = null;
                echo " ";
            }
            echo " ";
            if ((((isset($context["taux"]) || array_key_exists("taux", $context) ? $context["taux"] : (function () { throw new RuntimeError('Variable "taux" does not exist.', 77, $this->source); })()) == 5) && (twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 77, $this->source); })())) >= 2))) {
                // line 78
                echo "  <b>Code promo appliqué : </b>";
                echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 78, $this->source); })()), "html", null, true);
                echo "<br />
  <b>Taux de réduction : </b>";
                // line 79
                echo twig_escape_filter($this->env, (isset($context["taux"]) || array_key_exists("taux", $context) ? $context["taux"] : (function () { throw new RuntimeError('Variable "taux" does not exist.', 79, $this->source); })()), "html", null, true);
                echo " <br />
  <b>Total net à payer: </b>
  ";
                // line 81
                $context["result"] = twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 81, $this->source); })()) - (isset($context["totalnet"]) || array_key_exists("totalnet", $context) ? $context["totalnet"] : (function () { throw new RuntimeError('Variable "totalnet" does not exist.', 81, $this->source); })())) / 100), 2, ",", ".");
                echo " €
  ";
                // line 82
                echo twig_escape_filter($this->env, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 82, $this->source); })()), "html", null, true);
                echo "
  ";
                // line 83
                $context["result"] = null;
                echo " ";
            }
            echo " ";
            if ((((isset($context["taux"]) || array_key_exists("taux", $context) ? $context["taux"] : (function () { throw new RuntimeError('Variable "taux" does not exist.', 83, $this->source); })()) == 3) && ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 83, $this->source); })()) == 35))) {
                // line 84
                echo "  <b>Code promo appliqué : </b>";
                echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 84, $this->source); })()), "html", null, true);
                echo "<br />
  <b>Taux de réduction : </b>";
                // line 85
                echo twig_escape_filter($this->env, (isset($context["taux"]) || array_key_exists("taux", $context) ? $context["taux"] : (function () { throw new RuntimeError('Variable "taux" does not exist.', 85, $this->source); })()), "html", null, true);
                echo " <br />
  <b>Total net à payer: </b>
  ";
                // line 87
                $context["result"] = twig_number_format_filter($this->env, (0 / 100), 2, ",", ".");
                echo " €
  ";
                // line 88
                echo twig_escape_filter($this->env, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 88, $this->source); })()), "html", null, true);
                echo "
  ";
                // line 89
                $context["result"] = null;
                echo " ";
            }
            // line 90
            echo "  <br />

  <a href=\"";
            // line 92
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
            echo "\" class=\"btn btn-success btn-block mt-3\"
    >Valider mon panier</a
  >
</div>
";
        } else {
            // line 97
            echo "<hr />
<p><b>Votre panier est vide.</b></p>
";
        }
        // line 99
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cart/index.html.twig";
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
        return array (  321 => 99,  316 => 97,  308 => 92,  304 => 90,  300 => 89,  296 => 88,  292 => 87,  287 => 85,  282 => 84,  276 => 83,  272 => 82,  268 => 81,  263 => 79,  258 => 78,  252 => 77,  248 => 76,  244 => 75,  239 => 73,  234 => 72,  232 => 71,  228 => 70,  222 => 67,  217 => 64,  210 => 63,  205 => 62,  204 => 61,  201 => 60,  192 => 54,  187 => 52,  180 => 48,  175 => 46,  167 => 41,  162 => 39,  158 => 38,  151 => 34,  146 => 32,  140 => 29,  136 => 28,  129 => 24,  125 => 23,  120 => 20,  115 => 19,  108 => 18,  94 => 6,  92 => 5,  91 => 4,  88 => 3,  78 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %}Mon panier - La Boutique
Française{% endblock %} {% block content %}
<h1>Mon panier</h1>
Retrouvez l'ensemble des produits que vous avez ajouté à votre panier. {% if
cart|length > 0 %}
<table class=\"table mt-3\">
  <thead>
    <tr>
      <th scope=\"col\">Produit</th>
      <th scope=\"col\"></th>
      <th scope=\"col\">Quantité</th>
      <th scope=\"col\">Prix</th>
      <th scope=\"col\">Total</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
    {% set total = 0 %} {% set compteur = 0 %} {% set totalnet = 0 %}{% for
    product in cart %} {% set compteur = compteur+1 %}
    <tr>
      <th>
        <img
          src=\"/uploads/{{ product.product.illustration }}\"
          alt=\"{{ product.product.name }}\"
          height=\"75px\" /><br />
      </th>
      <td>
        {{ product.product.name }}<br />
        <small>{{ product.product.subtitle }}</small>
      </td>
      <td>
        <a href=\"{{ path('decrease_to_cart', { id: product.product.id }) }}\">
          <img
            src=\"{{ asset('assets/img/minus.png') }}\"
            height=\"12px\"
            alt=\"Retirer une quantité à mon produit\" />
        </a>
        x {{ product.quantity }}
        <a href=\"{{ path('add_to_cart', { id: product.product.id }) }}\">
          <img
            src=\"{{ asset('assets/img/plus.png') }}\"
            height=\"12px\"
            alt=\"Ajouter un produit\" />
        </a>
      </td>
      <td>{{ (product.product.price / 100)|number_format(2, ',', '.') }} €</td>
      <td>
        {{ ((product.product.price * product.quantity ) / 100)|number_format(2, ',', '.') }}
        €
      </td>
      <td>
        <a href=\"{{ path('delete_to_cart', { id: product.product.id }) }}\">
          <img
            src=\"{{ asset('assets/img/delete.png') }}\"
            height=\"18px\"
            alt=\"Supprimer mon produit\" />
        </a>
      </td>
    </tr>
    {% if taux==5 and compteur ==2 %} {% set totalnet = totalnet +
    ((product.product.price * product.quantity)-(product.product.price *
    product.quantity)*0.50) %} {%endif%} {% set total = total +
    (product.product.price * product.quantity) %} {% endfor %}
  </tbody>
</table>
<div class=\"text-right mb-5\">
  <b>Nombre de produit :</b> {{ cart | length }}
  <br />
  <b>Total de mon panier :</b>
  {{ (total / 100)|number_format(2, ',', '.') }} €<br />
  {% if taux==10 and total>=30 %}
  <b>Code promo appliqué : </b>{{ code }}<br />
  <b>Taux de réduction : </b>{{ taux }} <br />
  <b>Total net à payer: </b>
  {% set result = ((total-(total*0.10)) / 100) | number_format(2, ',', '.') %} €
  {{ result }}
  {% set result =null %} {% endif %} {% if taux==5 and cart | length >=2 %}
  <b>Code promo appliqué : </b>{{ code }}<br />
  <b>Taux de réduction : </b>{{ taux }} <br />
  <b>Total net à payer: </b>
  {% set result = ((total-totalnet)/100) | number_format(2, ',', '.') %} €
  {{ result }}
  {% set result =null %} {% endif %} {% if taux==3 and total==35 %}
  <b>Code promo appliqué : </b>{{ code }}<br />
  <b>Taux de réduction : </b>{{ taux }} <br />
  <b>Total net à payer: </b>
  {% set result = (0/100) | number_format(2, ',', '.') %} €
  {{ result }}
  {% set result =null %} {% endif %}
  <br />

  <a href=\"{{ path('order') }}\" class=\"btn btn-success btn-block mt-3\"
    >Valider mon panier</a
  >
</div>
{% else %}
<hr />
<p><b>Votre panier est vide.</b></p>
{% endif %} {% endblock %}
", "cart/index.html.twig", "C:\\poke-bio\\templates\\cart\\index.html.twig");
    }
}
