<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1cce335b545c0df376366d1cfbf7dc5ccc13a6c3e98a6cfec1cfddbed9ac12a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9c4f714fea0ff6d62ef708c8ffe96a99edd612b248f438428d8ad5ed5ff574f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c4f714fea0ff6d62ef708c8ffe96a99edd612b248f438428d8ad5ed5ff574f3->enter($__internal_9c4f714fea0ff6d62ef708c8ffe96a99edd612b248f438428d8ad5ed5ff574f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2b35816926911c45899e1fbed16dc5b12c57af8acab0b4effd99a471633e8fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b35816926911c45899e1fbed16dc5b12c57af8acab0b4effd99a471633e8fcc->enter($__internal_2b35816926911c45899e1fbed16dc5b12c57af8acab0b4effd99a471633e8fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c4f714fea0ff6d62ef708c8ffe96a99edd612b248f438428d8ad5ed5ff574f3->leave($__internal_9c4f714fea0ff6d62ef708c8ffe96a99edd612b248f438428d8ad5ed5ff574f3_prof);

        
        $__internal_2b35816926911c45899e1fbed16dc5b12c57af8acab0b4effd99a471633e8fcc->leave($__internal_2b35816926911c45899e1fbed16dc5b12c57af8acab0b4effd99a471633e8fcc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_39285c65b4d0b124550f872c94dc3d0d7f3d9d2839dd88742fd4d785e8c4dded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39285c65b4d0b124550f872c94dc3d0d7f3d9d2839dd88742fd4d785e8c4dded->enter($__internal_39285c65b4d0b124550f872c94dc3d0d7f3d9d2839dd88742fd4d785e8c4dded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8dfe0d5c3cd6900d5867fd0a4b7a0d6cef1d8ea0c01dd5c2c93e8c99bc84e0e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfe0d5c3cd6900d5867fd0a4b7a0d6cef1d8ea0c01dd5c2c93e8c99bc84e0e5->enter($__internal_8dfe0d5c3cd6900d5867fd0a4b7a0d6cef1d8ea0c01dd5c2c93e8c99bc84e0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8dfe0d5c3cd6900d5867fd0a4b7a0d6cef1d8ea0c01dd5c2c93e8c99bc84e0e5->leave($__internal_8dfe0d5c3cd6900d5867fd0a4b7a0d6cef1d8ea0c01dd5c2c93e8c99bc84e0e5_prof);

        
        $__internal_39285c65b4d0b124550f872c94dc3d0d7f3d9d2839dd88742fd4d785e8c4dded->leave($__internal_39285c65b4d0b124550f872c94dc3d0d7f3d9d2839dd88742fd4d785e8c4dded_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e713233f69de0a3c550e009a2c818fd8c6c51d2b3e0fd8a8c647d0f241dcf511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e713233f69de0a3c550e009a2c818fd8c6c51d2b3e0fd8a8c647d0f241dcf511->enter($__internal_e713233f69de0a3c550e009a2c818fd8c6c51d2b3e0fd8a8c647d0f241dcf511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5b47b522a914ef43d18471348e7073c606a14cbcb195d0136745e6dff06ed264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b47b522a914ef43d18471348e7073c606a14cbcb195d0136745e6dff06ed264->enter($__internal_5b47b522a914ef43d18471348e7073c606a14cbcb195d0136745e6dff06ed264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5b47b522a914ef43d18471348e7073c606a14cbcb195d0136745e6dff06ed264->leave($__internal_5b47b522a914ef43d18471348e7073c606a14cbcb195d0136745e6dff06ed264_prof);

        
        $__internal_e713233f69de0a3c550e009a2c818fd8c6c51d2b3e0fd8a8c647d0f241dcf511->leave($__internal_e713233f69de0a3c550e009a2c818fd8c6c51d2b3e0fd8a8c647d0f241dcf511_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_360f6821044803130e5ec0f03fbb0c299373abe72c75fa91f78421f27556c041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_360f6821044803130e5ec0f03fbb0c299373abe72c75fa91f78421f27556c041->enter($__internal_360f6821044803130e5ec0f03fbb0c299373abe72c75fa91f78421f27556c041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9279292ebfd26594f666dbbc6527f5135bea07558372592682f1db25e0317088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9279292ebfd26594f666dbbc6527f5135bea07558372592682f1db25e0317088->enter($__internal_9279292ebfd26594f666dbbc6527f5135bea07558372592682f1db25e0317088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9279292ebfd26594f666dbbc6527f5135bea07558372592682f1db25e0317088->leave($__internal_9279292ebfd26594f666dbbc6527f5135bea07558372592682f1db25e0317088_prof);

        
        $__internal_360f6821044803130e5ec0f03fbb0c299373abe72c75fa91f78421f27556c041->leave($__internal_360f6821044803130e5ec0f03fbb0c299373abe72c75fa91f78421f27556c041_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\sparta\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
