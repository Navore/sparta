<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6a501f78a713008c5b3bf079a00ed2bc222a36e827b353902370e9dd1826916e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba548697baa5f938eb62419391dd43aecf212b4c37d9e6ad0034e578b1e093b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba548697baa5f938eb62419391dd43aecf212b4c37d9e6ad0034e578b1e093b4->enter($__internal_ba548697baa5f938eb62419391dd43aecf212b4c37d9e6ad0034e578b1e093b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_662844c579a75e797a02881595b50ffb6172ec6c1ab31a34ccd934cbe550c254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662844c579a75e797a02881595b50ffb6172ec6c1ab31a34ccd934cbe550c254->enter($__internal_662844c579a75e797a02881595b50ffb6172ec6c1ab31a34ccd934cbe550c254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba548697baa5f938eb62419391dd43aecf212b4c37d9e6ad0034e578b1e093b4->leave($__internal_ba548697baa5f938eb62419391dd43aecf212b4c37d9e6ad0034e578b1e093b4_prof);

        
        $__internal_662844c579a75e797a02881595b50ffb6172ec6c1ab31a34ccd934cbe550c254->leave($__internal_662844c579a75e797a02881595b50ffb6172ec6c1ab31a34ccd934cbe550c254_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a39487cbae6a8958b092b8700d459635f3cedcbe23fab9753a4d2b15c5f940ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39487cbae6a8958b092b8700d459635f3cedcbe23fab9753a4d2b15c5f940ca->enter($__internal_a39487cbae6a8958b092b8700d459635f3cedcbe23fab9753a4d2b15c5f940ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_83f0042e35155cc5b937b2b8c79b6f36ddfd034fe2e031bfcd9d02b570bf54a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f0042e35155cc5b937b2b8c79b6f36ddfd034fe2e031bfcd9d02b570bf54a1->enter($__internal_83f0042e35155cc5b937b2b8c79b6f36ddfd034fe2e031bfcd9d02b570bf54a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_83f0042e35155cc5b937b2b8c79b6f36ddfd034fe2e031bfcd9d02b570bf54a1->leave($__internal_83f0042e35155cc5b937b2b8c79b6f36ddfd034fe2e031bfcd9d02b570bf54a1_prof);

        
        $__internal_a39487cbae6a8958b092b8700d459635f3cedcbe23fab9753a4d2b15c5f940ca->leave($__internal_a39487cbae6a8958b092b8700d459635f3cedcbe23fab9753a4d2b15c5f940ca_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e2bb347add6fcb18c941a3a8edaa06365ef10f4303e999f521cc251dbd5fc29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e2bb347add6fcb18c941a3a8edaa06365ef10f4303e999f521cc251dbd5fc29->enter($__internal_1e2bb347add6fcb18c941a3a8edaa06365ef10f4303e999f521cc251dbd5fc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_13b0f01f2c4e11616827f219b80617d0ce6dc2d44b258fbf3fb60a5784be1ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b0f01f2c4e11616827f219b80617d0ce6dc2d44b258fbf3fb60a5784be1ca4->enter($__internal_13b0f01f2c4e11616827f219b80617d0ce6dc2d44b258fbf3fb60a5784be1ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_13b0f01f2c4e11616827f219b80617d0ce6dc2d44b258fbf3fb60a5784be1ca4->leave($__internal_13b0f01f2c4e11616827f219b80617d0ce6dc2d44b258fbf3fb60a5784be1ca4_prof);

        
        $__internal_1e2bb347add6fcb18c941a3a8edaa06365ef10f4303e999f521cc251dbd5fc29->leave($__internal_1e2bb347add6fcb18c941a3a8edaa06365ef10f4303e999f521cc251dbd5fc29_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c2fe9abf76d780f0d1dc8fc4c3864adfb49f46e24aab0dcdd4ae026c622549a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2fe9abf76d780f0d1dc8fc4c3864adfb49f46e24aab0dcdd4ae026c622549a->enter($__internal_8c2fe9abf76d780f0d1dc8fc4c3864adfb49f46e24aab0dcdd4ae026c622549a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21beb6207d870aacfa65e93adb75dd9533f991eb6b64a7f6f2ee5f7a6ec300cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21beb6207d870aacfa65e93adb75dd9533f991eb6b64a7f6f2ee5f7a6ec300cf->enter($__internal_21beb6207d870aacfa65e93adb75dd9533f991eb6b64a7f6f2ee5f7a6ec300cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_21beb6207d870aacfa65e93adb75dd9533f991eb6b64a7f6f2ee5f7a6ec300cf->leave($__internal_21beb6207d870aacfa65e93adb75dd9533f991eb6b64a7f6f2ee5f7a6ec300cf_prof);

        
        $__internal_8c2fe9abf76d780f0d1dc8fc4c3864adfb49f46e24aab0dcdd4ae026c622549a->leave($__internal_8c2fe9abf76d780f0d1dc8fc4c3864adfb49f46e24aab0dcdd4ae026c622549a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\sparta\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
