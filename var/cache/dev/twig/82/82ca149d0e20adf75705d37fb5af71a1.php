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

/* account/order_show.html.twig */
class __TwigTemplate_73c2e6d51f23a683016588e65da29bf7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ma commandes - La Boutique Française";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Ma commande ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()), "reference", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order");
        echo "\">Retour</a>
    <hr><strong></strong>
    <strong>Statut de la commande : </strong>
    ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "state", [], "any", false, false, false, 10) == 1)) {
            // line 11
            echo "        Paiement accepté
    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "state", [], "any", false, false, false, 12) == 2)) {
            // line 13
            echo "        Préparation en cours
    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 14, $this->source); })()), "state", [], "any", false, false, false, 14) == 3)) {
            // line 15
            echo "        Livraison en cours
    ";
        }
        // line 17
        echo "    <br/>
    <strong>Commande passée le :</strong> ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })()), "createdAt", [], "any", false, false, false, 18), "d/m/Y"), "html", null, true);
        echo "<br/>
    <strong>Référence de ma commande :</strong> <small>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 19, $this->source); })()), "reference", [], "any", false, false, false, 19), "html", null, true);
        echo "</small><br/>
    <strong>Transporteur choisi :</strong> ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 20, $this->source); })()), "carriername", [], "any", false, false, false, 20), "html", null, true);
        echo "
    <hr>
    <strong>Détails:</strong>

    <table class=\"table mt-4\">
        <thead>
        <tr>
            <th scope=\"col\">Produit</th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix unitaire</th>
            <th scope=\"col\">Total</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 34, $this->source); })()), "orderDetails", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 35
            echo "        <tr>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
            <td>x";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 38) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 39) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

    <div class=\"text-right\">
        <strong>Sous-total :</strong> ";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 46, $this->source); })()), "getTotal", [], "any", false, false, false, 46) / 100), 2, ",", "."), "html", null, true);
        echo " €<br/>
        <strong>Livraison :</strong> ";
        // line 47
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 47, $this->source); })()), "carrierprice", [], "any", false, false, false, 47) / 100), 2, ",", "."), "html", null, true);
        echo " €<br/>
        <strong>Total : </strong> ";
        // line 48
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 48, $this->source); })()), "carrierPrice", [], "any", false, false, false, 48) + twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 48, $this->source); })()), "getTotal", [], "any", false, false, false, 48)) / 100), 2, ",", "."), "html", null, true);
        echo " €
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
        return "account/order_show.html.twig";
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
        return array (  185 => 48,  181 => 47,  177 => 46,  171 => 42,  162 => 39,  158 => 38,  154 => 37,  150 => 36,  147 => 35,  143 => 34,  126 => 20,  122 => 19,  118 => 18,  115 => 17,  111 => 15,  109 => 14,  106 => 13,  104 => 12,  101 => 11,  99 => 10,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ma commandes - La Boutique Française{% endblock %}

{% block content %}
    <h1>Ma commande {{ order.reference }}</h1>
    <a href=\"{{ path('account_order') }}\">Retour</a>
    <hr><strong></strong>
    <strong>Statut de la commande : </strong>
    {% if order.state == 1 %}
        Paiement accepté
    {% elseif order.state == 2 %}
        Préparation en cours
    {% elseif order.state == 3 %}
        Livraison en cours
    {% endif %}
    <br/>
    <strong>Commande passée le :</strong> {{ order.createdAt|date('d/m/Y') }}<br/>
    <strong>Référence de ma commande :</strong> <small>{{ order.reference }}</small><br/>
    <strong>Transporteur choisi :</strong> {{ order.carriername }}
    <hr>
    <strong>Détails:</strong>

    <table class=\"table mt-4\">
        <thead>
        <tr>
            <th scope=\"col\">Produit</th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix unitaire</th>
            <th scope=\"col\">Total</th>
        </tr>
        </thead>
        <tbody>
        {% for product in order.orderDetails %}
        <tr>
            <td>{{ product.product }}</td>
            <td>x{{ product.quantity }}</td>
            <td>{{ (product.price / 100)|number_format(2, ',', '.') }} €</td>
            <td>{{ (product.total / 100)|number_format(2, ',', '.') }} €</td>
        </tr>
        {% endfor %}
        </tbody>
    </table>

    <div class=\"text-right\">
        <strong>Sous-total :</strong> {{ (order.getTotal / 100)|number_format(2, ',', '.') }} €<br/>
        <strong>Livraison :</strong> {{ (order.carrierprice / 100)|number_format(2, ',', '.') }} €<br/>
        <strong>Total : </strong> {{ ((order.carrierPrice + order.getTotal) / 100)|number_format(2, ',', '.') }} €
    </div>
{% endblock %}", "account/order_show.html.twig", "C:\\poke-bio\\templates\\account\\order_show.html.twig");
    }
}
