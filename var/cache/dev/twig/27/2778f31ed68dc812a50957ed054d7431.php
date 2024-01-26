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

/* order/add.html.twig */
class __TwigTemplate_40af84ebefd2847d532f2a21f93eb145 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 2
        echo "<script src=\"https://js.stripe.com/v3/\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Paiement de ma commande - La Boutique
Française";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "<h2>Mon récapitulatif</h2>
<p>Vérifiez vos informations avant de payer votre commande.</p>
<hr />
<div class=\"row\">
  <div class=\"col-md-6\">
    <strong>Mon adresse de livraison</strong><br />
    <div class=\"form-check mt-4\">
      ";
        // line 12
        echo (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 12, $this->source); })());
        echo "
    </div>
    <hr />
    <strong>Mon transporteur</strong><br />
    <div class=\"form-check\">
      ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "<br />
      ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18), "html", null, true);
        echo "<br />
      ";
        // line 19
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 19, $this->source); })()), "price", [], "any", false, false, false, 19) / 100), 2, ",", "."), "html", null, true);
        echo " €
    </div>
  </div>
  <div class=\"col-md-6\">
    <div class=\"text-center\"><b>Ma commande</b><br /></div>
    <div class=\"order-summary\">
      ";
        // line 25
        $context["total"] = null;
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 26
            echo "      <div class=\"row ";
            if (($context["key"] > 0)) {
                echo "mt-2";
            }
            echo "\">
        <div class=\"col-2\">
          <img
            src=\"/uploads/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 29), "illustration", [], "any", false, false, false, 29), "html", null, true);
            echo "\"
            alt=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
            echo "\"
            height=\"75px\" />
        </div>
        <div class=\"col-8 my-auto\">
          ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
            echo "<br />
          <small>
            ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "subtitle", [], "any", false, false, false, 36), "html", null, true);
            echo "
            <br />
            x ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 38), "html", null, true);
            echo "
          </small>
        </div>
        <div class=\"col-2 my-auto\">
          ";
            // line 42
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 42), "price", [], "any", false, false, false, 42) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 42)) / 100), 2, ",", "."), "html", null, true);
            echo "
          €
        </div>
      </div>
      ";
            // line 46
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 46, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 46), "price", [], "any", false, false, false, 46) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 46)));
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </div>

    <hr />
    <strong>Sous-Total : </strong>
    ";
        // line 52
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 52, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo " €<br />

    <strong>Livraison : </strong>
    ";
        // line 55
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 55, $this->source); })()), "price", [], "any", false, false, false, 55) / 100), 2, ",", "."), "html", null, true);
        echo " €
    <hr />
    <strong>Total : </strong>
    ";
        // line 58
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 58, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 58, $this->source); })()), "price", [], "any", false, false, false, 58) / 100)), 2, ",", "."), "html", null, true);
        echo " €

    <a class=\"btn btn-success btn-block mt-3\" id=\"checkout-button\"
      >Payer |
      ";
        // line 62
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 62, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 62, $this->source); })()), "price", [], "any", false, false, false, 62) / 100)), 2, ",", "."), "html", null, true);
        echo "
      €</a
    >
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 68
        echo "<script type=\"text/javascript\">
  var stripe = Stripe(
    \"pk_test_51ObzRNIHR8VSmFCaNsGu1sKjd0KxVUqewszy0q8IMxSYIYGNlt0iGZyynOZVwBVyPljzBH2MawtV8l5LcBkXmgbq00u6Q3JkzZ\"
  );
  var checkoutButton = document.getElementById(\"checkout-button\");
  checkoutButton.addEventListener(\"click\", function () {
    fetch(\"/commande/create-session\", {
      method: \"POST\",
    })
      .then(function (response) {
        return response.json();
      })
      .then(function (session) {
        if (session.error == \"order\") {
          //  window.location.replace('";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
        echo "');
        } else {
          return stripe.redirectToCheckout({ sessionId: session.id });
        }
      })
      .then(function (result) {
        // If redirectToCheckout fails due to a browser or network
        // error, you should display the localized error message to your
        // customer using error.message.
        if (result.error) {
          alert(result.error.message);
        }
      })
      .catch(function (error) {
        console.error(\"Error:\", error);
      });
  });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "order/add.html.twig";
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
        return array (  269 => 82,  253 => 68,  243 => 67,  227 => 62,  220 => 58,  214 => 55,  208 => 52,  202 => 48,  195 => 46,  188 => 42,  181 => 38,  176 => 36,  171 => 34,  164 => 30,  160 => 29,  151 => 26,  145 => 25,  136 => 19,  132 => 18,  128 => 17,  120 => 12,  111 => 5,  101 => 4,  81 => 3,  70 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block javascript %}
<script src=\"https://js.stripe.com/v3/\"></script>
{% endblock %} {% block title %}Paiement de ma commande - La Boutique
Française{% endblock %} {% block content %}
<h2>Mon récapitulatif</h2>
<p>Vérifiez vos informations avant de payer votre commande.</p>
<hr />
<div class=\"row\">
  <div class=\"col-md-6\">
    <strong>Mon adresse de livraison</strong><br />
    <div class=\"form-check mt-4\">
      {{ delivery | raw }}
    </div>
    <hr />
    <strong>Mon transporteur</strong><br />
    <div class=\"form-check\">
      {{ carrier.name }}<br />
      {{ carrier.description }}<br />
      {{ (carrier.price / 100)|number_format(2, ',', '.') }} €
    </div>
  </div>
  <div class=\"col-md-6\">
    <div class=\"text-center\"><b>Ma commande</b><br /></div>
    <div class=\"order-summary\">
      {% set total = null %} {% for key,product in cart %}
      <div class=\"row {% if key > 0 %}mt-2{% endif %}\">
        <div class=\"col-2\">
          <img
            src=\"/uploads/{{ product.product.illustration }}\"
            alt=\"{{ product.product.name }}\"
            height=\"75px\" />
        </div>
        <div class=\"col-8 my-auto\">
          {{ product.product.name }}<br />
          <small>
            {{ product.product.subtitle }}
            <br />
            x {{ product.quantity }}
          </small>
        </div>
        <div class=\"col-2 my-auto\">
          {{ ((product.product.price * product.quantity ) / 100)|number_format(2, ',', '.') }}
          €
        </div>
      </div>
      {% set total = total + (product.product.price * product.quantity) %} {%
      endfor %}
    </div>

    <hr />
    <strong>Sous-Total : </strong>
    {{ (total / 100)|number_format(2, ',', '.') }} €<br />

    <strong>Livraison : </strong>
    {{ (carrier.price / 100)|number_format(2, ',', '.') }} €
    <hr />
    <strong>Total : </strong>
    {{ ((total / 100) + (carrier.price / 100))|number_format(2, ',', '.') }} €

    <a class=\"btn btn-success btn-block mt-3\" id=\"checkout-button\"
      >Payer |
      {{ ((total / 100) + (carrier.price / 100))|number_format(2, ',', '.') }}
      €</a
    >
  </div>
</div>
{% endblock %} {% block script %}
<script type=\"text/javascript\">
  var stripe = Stripe(
    \"pk_test_51ObzRNIHR8VSmFCaNsGu1sKjd0KxVUqewszy0q8IMxSYIYGNlt0iGZyynOZVwBVyPljzBH2MawtV8l5LcBkXmgbq00u6Q3JkzZ\"
  );
  var checkoutButton = document.getElementById(\"checkout-button\");
  checkoutButton.addEventListener(\"click\", function () {
    fetch(\"/commande/create-session\", {
      method: \"POST\",
    })
      .then(function (response) {
        return response.json();
      })
      .then(function (session) {
        if (session.error == \"order\") {
          //  window.location.replace('{{ path('order') }}');
        } else {
          return stripe.redirectToCheckout({ sessionId: session.id });
        }
      })
      .then(function (result) {
        // If redirectToCheckout fails due to a browser or network
        // error, you should display the localized error message to your
        // customer using error.message.
        if (result.error) {
          alert(result.error.message);
        }
      })
      .catch(function (error) {
        console.error(\"Error:\", error);
      });
  });
</script>
{% endblock %}
", "order/add.html.twig", "C:\\poke-bio\\templates\\order\\add.html.twig");
    }
}
