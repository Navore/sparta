<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_763d59e50f83d198cbbfd0ec7770236491a553843573551602b4136c009be014 extends Twig_Template
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
        $__internal_cd869e88937fe4e12abf87cd8fdf2cc3ae68d1c727bfef5dc75d33df7c6f38bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd869e88937fe4e12abf87cd8fdf2cc3ae68d1c727bfef5dc75d33df7c6f38bb->enter($__internal_cd869e88937fe4e12abf87cd8fdf2cc3ae68d1c727bfef5dc75d33df7c6f38bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7e36525ccff1da0dd47f2148cc9fe03b94efabffe22a213973237a0cdda0e141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e36525ccff1da0dd47f2148cc9fe03b94efabffe22a213973237a0cdda0e141->enter($__internal_7e36525ccff1da0dd47f2148cc9fe03b94efabffe22a213973237a0cdda0e141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd869e88937fe4e12abf87cd8fdf2cc3ae68d1c727bfef5dc75d33df7c6f38bb->leave($__internal_cd869e88937fe4e12abf87cd8fdf2cc3ae68d1c727bfef5dc75d33df7c6f38bb_prof);

        
        $__internal_7e36525ccff1da0dd47f2148cc9fe03b94efabffe22a213973237a0cdda0e141->leave($__internal_7e36525ccff1da0dd47f2148cc9fe03b94efabffe22a213973237a0cdda0e141_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_edfa213025e2ebcec2e908f1420d69fe13df70c5020a116a176202313326fc38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edfa213025e2ebcec2e908f1420d69fe13df70c5020a116a176202313326fc38->enter($__internal_edfa213025e2ebcec2e908f1420d69fe13df70c5020a116a176202313326fc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e188fcefa567f322b899170523755bf5ba66851b5d1c13566afb0abca17ffd31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e188fcefa567f322b899170523755bf5ba66851b5d1c13566afb0abca17ffd31->enter($__internal_e188fcefa567f322b899170523755bf5ba66851b5d1c13566afb0abca17ffd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e188fcefa567f322b899170523755bf5ba66851b5d1c13566afb0abca17ffd31->leave($__internal_e188fcefa567f322b899170523755bf5ba66851b5d1c13566afb0abca17ffd31_prof);

        
        $__internal_edfa213025e2ebcec2e908f1420d69fe13df70c5020a116a176202313326fc38->leave($__internal_edfa213025e2ebcec2e908f1420d69fe13df70c5020a116a176202313326fc38_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cd2c5a658a6fc6f954893f6566bb4d8a22d426cb1e230fa2ffac786fe978e160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2c5a658a6fc6f954893f6566bb4d8a22d426cb1e230fa2ffac786fe978e160->enter($__internal_cd2c5a658a6fc6f954893f6566bb4d8a22d426cb1e230fa2ffac786fe978e160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_331d99507b9514a476f7550f464d85b970b31735a6c501e6dcbf916c87605ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331d99507b9514a476f7550f464d85b970b31735a6c501e6dcbf916c87605ddd->enter($__internal_331d99507b9514a476f7550f464d85b970b31735a6c501e6dcbf916c87605ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_331d99507b9514a476f7550f464d85b970b31735a6c501e6dcbf916c87605ddd->leave($__internal_331d99507b9514a476f7550f464d85b970b31735a6c501e6dcbf916c87605ddd_prof);

        
        $__internal_cd2c5a658a6fc6f954893f6566bb4d8a22d426cb1e230fa2ffac786fe978e160->leave($__internal_cd2c5a658a6fc6f954893f6566bb4d8a22d426cb1e230fa2ffac786fe978e160_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_209d89f820c2e9324dbbf4c5c9e0609c10e6292ebb9216490cb1109d740d6eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_209d89f820c2e9324dbbf4c5c9e0609c10e6292ebb9216490cb1109d740d6eeb->enter($__internal_209d89f820c2e9324dbbf4c5c9e0609c10e6292ebb9216490cb1109d740d6eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0b1c27423c1212d8d636c032019a4f905bc2fe5b3c3ac7891d1e421000e2ae92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b1c27423c1212d8d636c032019a4f905bc2fe5b3c3ac7891d1e421000e2ae92->enter($__internal_0b1c27423c1212d8d636c032019a4f905bc2fe5b3c3ac7891d1e421000e2ae92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0b1c27423c1212d8d636c032019a4f905bc2fe5b3c3ac7891d1e421000e2ae92->leave($__internal_0b1c27423c1212d8d636c032019a4f905bc2fe5b3c3ac7891d1e421000e2ae92_prof);

        
        $__internal_209d89f820c2e9324dbbf4c5c9e0609c10e6292ebb9216490cb1109d740d6eeb->leave($__internal_209d89f820c2e9324dbbf4c5c9e0609c10e6292ebb9216490cb1109d740d6eeb_prof);

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
