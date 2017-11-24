<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ac058f7249345135c0dca236e3e955be77a4b027a6c74b5cc17c4fc5f4110c86 extends Twig_Template
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
        $__internal_44a36d832ae996db9e3cc5fb234dd37a5b5a91640772699761f734d92219fa7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a36d832ae996db9e3cc5fb234dd37a5b5a91640772699761f734d92219fa7f->enter($__internal_44a36d832ae996db9e3cc5fb234dd37a5b5a91640772699761f734d92219fa7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_268d4c217c84f3b00ae6b3131f64d117854323df171121831395427de628a936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268d4c217c84f3b00ae6b3131f64d117854323df171121831395427de628a936->enter($__internal_268d4c217c84f3b00ae6b3131f64d117854323df171121831395427de628a936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44a36d832ae996db9e3cc5fb234dd37a5b5a91640772699761f734d92219fa7f->leave($__internal_44a36d832ae996db9e3cc5fb234dd37a5b5a91640772699761f734d92219fa7f_prof);

        
        $__internal_268d4c217c84f3b00ae6b3131f64d117854323df171121831395427de628a936->leave($__internal_268d4c217c84f3b00ae6b3131f64d117854323df171121831395427de628a936_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e0f310ad94b4b314a962f836998f86ff7a03666808d13f7f228a49b08903cfc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f310ad94b4b314a962f836998f86ff7a03666808d13f7f228a49b08903cfc0->enter($__internal_e0f310ad94b4b314a962f836998f86ff7a03666808d13f7f228a49b08903cfc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_33f9e87b625010a6ac71112945eca8cc2e0cede0af4d4ad7380ff88cc41b2593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f9e87b625010a6ac71112945eca8cc2e0cede0af4d4ad7380ff88cc41b2593->enter($__internal_33f9e87b625010a6ac71112945eca8cc2e0cede0af4d4ad7380ff88cc41b2593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_33f9e87b625010a6ac71112945eca8cc2e0cede0af4d4ad7380ff88cc41b2593->leave($__internal_33f9e87b625010a6ac71112945eca8cc2e0cede0af4d4ad7380ff88cc41b2593_prof);

        
        $__internal_e0f310ad94b4b314a962f836998f86ff7a03666808d13f7f228a49b08903cfc0->leave($__internal_e0f310ad94b4b314a962f836998f86ff7a03666808d13f7f228a49b08903cfc0_prof);

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
