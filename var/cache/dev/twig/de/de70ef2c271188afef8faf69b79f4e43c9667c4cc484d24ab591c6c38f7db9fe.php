<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_61f9f8095728df907e1553eb3038e994e1ac6edd6e737e16adf60db4a0a06855 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_339bd7e534aef33a1a47dc3cbbc6efe5b1adab217910bdfd56f19162ecd8bcb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_339bd7e534aef33a1a47dc3cbbc6efe5b1adab217910bdfd56f19162ecd8bcb2->enter($__internal_339bd7e534aef33a1a47dc3cbbc6efe5b1adab217910bdfd56f19162ecd8bcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bf8e0acb74f136c4a80417e0640ce4c9fd9fa60005f264b15d9ac6798af99a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8e0acb74f136c4a80417e0640ce4c9fd9fa60005f264b15d9ac6798af99a0c->enter($__internal_bf8e0acb74f136c4a80417e0640ce4c9fd9fa60005f264b15d9ac6798af99a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_339bd7e534aef33a1a47dc3cbbc6efe5b1adab217910bdfd56f19162ecd8bcb2->leave($__internal_339bd7e534aef33a1a47dc3cbbc6efe5b1adab217910bdfd56f19162ecd8bcb2_prof);

        
        $__internal_bf8e0acb74f136c4a80417e0640ce4c9fd9fa60005f264b15d9ac6798af99a0c->leave($__internal_bf8e0acb74f136c4a80417e0640ce4c9fd9fa60005f264b15d9ac6798af99a0c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0fd16a82e61f3d39a5c31c6192aa0366318cd082026954b7022664aaa01dfff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd16a82e61f3d39a5c31c6192aa0366318cd082026954b7022664aaa01dfff4->enter($__internal_0fd16a82e61f3d39a5c31c6192aa0366318cd082026954b7022664aaa01dfff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ef3945d9f6f53ddaf81b33c3b0888fca805909279a4f240a6b9c9c8daf4ac5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3945d9f6f53ddaf81b33c3b0888fca805909279a4f240a6b9c9c8daf4ac5b7->enter($__internal_ef3945d9f6f53ddaf81b33c3b0888fca805909279a4f240a6b9c9c8daf4ac5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ef3945d9f6f53ddaf81b33c3b0888fca805909279a4f240a6b9c9c8daf4ac5b7->leave($__internal_ef3945d9f6f53ddaf81b33c3b0888fca805909279a4f240a6b9c9c8daf4ac5b7_prof);

        
        $__internal_0fd16a82e61f3d39a5c31c6192aa0366318cd082026954b7022664aaa01dfff4->leave($__internal_0fd16a82e61f3d39a5c31c6192aa0366318cd082026954b7022664aaa01dfff4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_342494118d8ffc8113d268c8b6a6f01d27667af11dadfb89c424d25984b351e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342494118d8ffc8113d268c8b6a6f01d27667af11dadfb89c424d25984b351e4->enter($__internal_342494118d8ffc8113d268c8b6a6f01d27667af11dadfb89c424d25984b351e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7fc4bfe1db626aae9c697acd90842d88b94c44ec1b9031ad3bf28a78c9f1c698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc4bfe1db626aae9c697acd90842d88b94c44ec1b9031ad3bf28a78c9f1c698->enter($__internal_7fc4bfe1db626aae9c697acd90842d88b94c44ec1b9031ad3bf28a78c9f1c698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7fc4bfe1db626aae9c697acd90842d88b94c44ec1b9031ad3bf28a78c9f1c698->leave($__internal_7fc4bfe1db626aae9c697acd90842d88b94c44ec1b9031ad3bf28a78c9f1c698_prof);

        
        $__internal_342494118d8ffc8113d268c8b6a6f01d27667af11dadfb89c424d25984b351e4->leave($__internal_342494118d8ffc8113d268c8b6a6f01d27667af11dadfb89c424d25984b351e4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4eca74e5d3f787f7d9688e39e8f7baedc86dc37133ab97fcd06ab58ed3ff7ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eca74e5d3f787f7d9688e39e8f7baedc86dc37133ab97fcd06ab58ed3ff7ed0->enter($__internal_4eca74e5d3f787f7d9688e39e8f7baedc86dc37133ab97fcd06ab58ed3ff7ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_350db31cfea9f4fc7b31b5d33d28d6dae3ce3e936b832ac9c889e73e067859d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_350db31cfea9f4fc7b31b5d33d28d6dae3ce3e936b832ac9c889e73e067859d5->enter($__internal_350db31cfea9f4fc7b31b5d33d28d6dae3ce3e936b832ac9c889e73e067859d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_350db31cfea9f4fc7b31b5d33d28d6dae3ce3e936b832ac9c889e73e067859d5->leave($__internal_350db31cfea9f4fc7b31b5d33d28d6dae3ce3e936b832ac9c889e73e067859d5_prof);

        
        $__internal_4eca74e5d3f787f7d9688e39e8f7baedc86dc37133ab97fcd06ab58ed3ff7ed0->leave($__internal_4eca74e5d3f787f7d9688e39e8f7baedc86dc37133ab97fcd06ab58ed3ff7ed0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\sparta\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
