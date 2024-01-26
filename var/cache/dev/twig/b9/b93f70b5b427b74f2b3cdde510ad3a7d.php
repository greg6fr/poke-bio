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
class __TwigTemplate_3cd3c4576a585db9eeea0f6e727fd733 extends Template
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
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 19
                echo "    <tr>
      <th>
        <img
          src=\"/uploads/";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 22), "illustration", [], "any", false, false, false, 22), "html", null, true);
                echo "\"
          alt=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
                echo "\"
          height=\"75px\" /><br />
      </th>
      <td>
        ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
                echo "<br />
        <small>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 28), "subtitle", [], "any", false, false, false, 28), "html", null, true);
                echo "</small>
      </td>
      <td>
        <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decrease_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\">
          <img
            src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/minus.png"), "html", null, true);
                echo "\"
            height=\"12px\"
            alt=\"Retirer une quantité à mon produit\" />
        </a>
        x ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37), "html", null, true);
                echo "
        <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\">
          <img
            src=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/plus.png"), "html", null, true);
                echo "\"
            height=\"12px\"
            alt=\"Ajouter un produit\" />
        </a>
      </td>
      <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 45), "price", [], "any", false, false, false, 45) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
      <td>
        ";
                // line 47
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 47), "price", [], "any", false, false, false, 47) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 47)) / 100), 2, ",", "."), "html", null, true);
                echo "
        €
      </td>
      <td>
        <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\">
          <img
            src=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/delete.png"), "html", null, true);
                echo "\"
            height=\"18px\"
            alt=\"Supprimer mon produit\" />
        </a>
      </td>
    </tr>
    ";
                // line 59
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 59, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 59), "price", [], "any", false, false, false, 59) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 59)));
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "  </tbody>
</table>
<div class=\"text-right mb-5\">
  <b>Nombre de produit :</b> ";
            // line 64
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 64, $this->source); })())), "html", null, true);
            echo "
  <br />
  <b>Total de mon panier :</b>
  ";
            // line 67
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 67, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
            echo " €<br />
  ";
            // line 68
            if ((((isset($context["taux"]) || array_key_exists("taux", $context) ? $context["taux"] : (function () { throw new RuntimeError('Variable "taux" does not exist.', 68, $this->source); })()) == 10) && ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 68, $this->source); })()) >= 30))) {
                // line 69
                echo "  <b>Code promo appliqué : </b>";
                echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 69, $this->source); })()), "html", null, true);
                echo "<br />
  <b>Taux de réduction : </b>";
                // line 70
                echo twig_escape_filter($this->env, (isset($context["taux"]) || array_key_exists("taux", $context) ? $context["taux"] : (function () { throw new RuntimeError('Variable "taux" does not exist.', 70, $this->source); })()), "html", null, true);
                echo " <br />
  <b>Total net à payer: </b>
  ";
                // line 72
                $context["result"] = twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 72, $this->source); })()) - ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 72, $this->source); })()) * 0.1)) / 100), 2, ",", ".");
                echo " €
  ";
                // line 73
                echo twig_escape_filter($this->env, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 73, $this->source); })()), "html", null, true);
                echo "
  ";
                // line 74
                $context["result"] = null;
                echo " ";
            }
            echo " ";
            if ((((isset($context["taux"]) || array_key_exists("taux", $context) ? $context["taux"] : (function () { throw new RuntimeError('Variable "taux" does not exist.', 74, $this->source); })()) == 5) && (twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 74, $this->source); })())) >= 2))) {
                // line 75
                echo "  <b>Code promo appliqué : </b>";
                echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 75, $this->source); })()), "html", null, true);
                echo "<br />
  <b>Taux de réduction : </b>";
                // line 76
                echo twig_escape_filter($this->env, (isset($context["taux"]) || array_key_exists("taux", $context) ? $context["taux"] : (function () { throw new RuntimeError('Variable "taux" does not exist.', 76, $this->source); })()), "html", null, true);
                echo " <br />
  <b>Total net à payer: </b>
  ";
                // line 78
                $context["result"] = twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 78, $this->source); })()) - ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 78, $this->source); })()) * 0.5)) / 100), 2, ",", ".");
                echo " €
  ";
                // line 79
                echo twig_escape_filter($this->env, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 79, $this->source); })()), "html", null, true);
                echo "
  ";
                // line 80
                $context["result"] = null;
                echo " ";
            }
            echo " ";
            if ((((isset($context["taux"]) || array_key_exists("taux", $context) ? $context["taux"] : (function () { throw new RuntimeError('Variable "taux" does not exist.', 80, $this->source); })()) == 3) && ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 80, $this->source); })()) == 35))) {
                // line 81
                echo "  <b>Code promo appliqué : </b>";
                echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 81, $this->source); })()), "html", null, true);
                echo "<br />
  <b>Taux de réduction : </b>";
                // line 82
                echo twig_escape_filter($this->env, (isset($context["taux"]) || array_key_exists("taux", $context) ? $context["taux"] : (function () { throw new RuntimeError('Variable "taux" does not exist.', 82, $this->source); })()), "html", null, true);
                echo " <br />
  <b>Total net à payer: </b>
  ";
                // line 84
                $context["result"] = twig_number_format_filter($this->env, (0 / 100), 2, ",", ".");
                echo " €
  ";
                // line 85
                echo twig_escape_filter($this->env, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 85, $this->source); })()), "html", null, true);
                echo "
  ";
                // line 86
                $context["result"] = null;
                echo " ";
            }
            // line 87
            echo "  <br />

  <a href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
            echo "\" class=\"btn btn-success btn-block mt-3\"
    >Valider mon panier</a
  >
</div>
";
        } else {
            // line 94
            echo "<hr />
<p><b>Votre panier est vide.</b></p>
";
        }
        // line 96
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
        return array (  306 => 96,  301 => 94,  293 => 89,  289 => 87,  285 => 86,  281 => 85,  277 => 84,  272 => 82,  267 => 81,  261 => 80,  257 => 79,  253 => 78,  248 => 76,  243 => 75,  237 => 74,  233 => 73,  229 => 72,  224 => 70,  219 => 69,  217 => 68,  213 => 67,  207 => 64,  202 => 61,  195 => 59,  186 => 53,  181 => 51,  174 => 47,  169 => 45,  161 => 40,  156 => 38,  152 => 37,  145 => 33,  140 => 31,  134 => 28,  130 => 27,  123 => 23,  119 => 22,  114 => 19,  108 => 18,  94 => 6,  92 => 5,  91 => 4,  88 => 3,  78 => 2,  36 => 1,);
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
    {% set total = 0 %} {% for product in cart %}
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
    {% set total = total + (product.product.price * product.quantity) %} {%
    endfor %}
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
  {% set result = ((total-(total*0.10))/100) | number_format(2, ',', '.') %} €
  {{ result }}
  {% set result =null %} {% endif %} {% if taux==5 and cart | length >=2 %}
  <b>Code promo appliqué : </b>{{ code }}<br />
  <b>Taux de réduction : </b>{{ taux }} <br />
  <b>Total net à payer: </b>
  {% set result = ((total-(total*0.50))/100) | number_format(2, ',', '.') %} €
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
", "cart/index.html.twig", "C:\\la-boutique-francaise\\templates\\cart\\index.html.twig");
    }
}
