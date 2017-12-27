<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_2db052d433637537009646cb615b888bd38a7f67db330735555ab17dbed2f0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03d0ee73b6cb56b42010c99412d81b81ef55d90cbd51629545af782ff8c2a2a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d0ee73b6cb56b42010c99412d81b81ef55d90cbd51629545af782ff8c2a2a9->enter($__internal_03d0ee73b6cb56b42010c99412d81b81ef55d90cbd51629545af782ff8c2a2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6e4e08b0cdd18972d2466bab2bdcf88274fa3815ebce3825be3c94253f1de551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4e08b0cdd18972d2466bab2bdcf88274fa3815ebce3825be3c94253f1de551->enter($__internal_6e4e08b0cdd18972d2466bab2bdcf88274fa3815ebce3825be3c94253f1de551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03d0ee73b6cb56b42010c99412d81b81ef55d90cbd51629545af782ff8c2a2a9->leave($__internal_03d0ee73b6cb56b42010c99412d81b81ef55d90cbd51629545af782ff8c2a2a9_prof);

        
        $__internal_6e4e08b0cdd18972d2466bab2bdcf88274fa3815ebce3825be3c94253f1de551->leave($__internal_6e4e08b0cdd18972d2466bab2bdcf88274fa3815ebce3825be3c94253f1de551_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_93bb6ae7bacf2cb7298a545c28be97372343ce046c309eaa73ba8976491ea062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93bb6ae7bacf2cb7298a545c28be97372343ce046c309eaa73ba8976491ea062->enter($__internal_93bb6ae7bacf2cb7298a545c28be97372343ce046c309eaa73ba8976491ea062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7e810e1f6ae74ef2cc76254c07efcccd7866e2a69d4b069a84d6f10661307bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e810e1f6ae74ef2cc76254c07efcccd7866e2a69d4b069a84d6f10661307bea->enter($__internal_7e810e1f6ae74ef2cc76254c07efcccd7866e2a69d4b069a84d6f10661307bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_7e810e1f6ae74ef2cc76254c07efcccd7866e2a69d4b069a84d6f10661307bea->leave($__internal_7e810e1f6ae74ef2cc76254c07efcccd7866e2a69d4b069a84d6f10661307bea_prof);

        
        $__internal_93bb6ae7bacf2cb7298a545c28be97372343ce046c309eaa73ba8976491ea062->leave($__internal_93bb6ae7bacf2cb7298a545c28be97372343ce046c309eaa73ba8976491ea062_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\sparta\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
