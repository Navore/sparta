<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_59f2ea7563e6f5c1a51c38d77048e25d34181655348d6a3422cd48f180832bd1 extends Twig_Template
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
        $__internal_3b2bc82b4f842fa02c040652828f1552c9f5352baa14011c6b21b49ab49df0d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b2bc82b4f842fa02c040652828f1552c9f5352baa14011c6b21b49ab49df0d1->enter($__internal_3b2bc82b4f842fa02c040652828f1552c9f5352baa14011c6b21b49ab49df0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c8484f4d54bb821a43363112f1c49f44957431d7512e589c94bea582bae649be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8484f4d54bb821a43363112f1c49f44957431d7512e589c94bea582bae649be->enter($__internal_c8484f4d54bb821a43363112f1c49f44957431d7512e589c94bea582bae649be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b2bc82b4f842fa02c040652828f1552c9f5352baa14011c6b21b49ab49df0d1->leave($__internal_3b2bc82b4f842fa02c040652828f1552c9f5352baa14011c6b21b49ab49df0d1_prof);

        
        $__internal_c8484f4d54bb821a43363112f1c49f44957431d7512e589c94bea582bae649be->leave($__internal_c8484f4d54bb821a43363112f1c49f44957431d7512e589c94bea582bae649be_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f44a0d00769e74a179d4c83a3f8bd1440c24911d8722dba481001c6c04f3dc85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44a0d00769e74a179d4c83a3f8bd1440c24911d8722dba481001c6c04f3dc85->enter($__internal_f44a0d00769e74a179d4c83a3f8bd1440c24911d8722dba481001c6c04f3dc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5637613b3f1333c6ed751f7ea787255aba9a9c45b31cc20507b6ac76caee651f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5637613b3f1333c6ed751f7ea787255aba9a9c45b31cc20507b6ac76caee651f->enter($__internal_5637613b3f1333c6ed751f7ea787255aba9a9c45b31cc20507b6ac76caee651f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5637613b3f1333c6ed751f7ea787255aba9a9c45b31cc20507b6ac76caee651f->leave($__internal_5637613b3f1333c6ed751f7ea787255aba9a9c45b31cc20507b6ac76caee651f_prof);

        
        $__internal_f44a0d00769e74a179d4c83a3f8bd1440c24911d8722dba481001c6c04f3dc85->leave($__internal_f44a0d00769e74a179d4c83a3f8bd1440c24911d8722dba481001c6c04f3dc85_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_62db213c2cd375c9e0585eeaf4b70a97e2dd89c4065ba5162f22fc4dac60fa04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62db213c2cd375c9e0585eeaf4b70a97e2dd89c4065ba5162f22fc4dac60fa04->enter($__internal_62db213c2cd375c9e0585eeaf4b70a97e2dd89c4065ba5162f22fc4dac60fa04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d23dd202154495d0f505adcab0573594e3b575ea991265c7010ca66d9a55c15c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23dd202154495d0f505adcab0573594e3b575ea991265c7010ca66d9a55c15c->enter($__internal_d23dd202154495d0f505adcab0573594e3b575ea991265c7010ca66d9a55c15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d23dd202154495d0f505adcab0573594e3b575ea991265c7010ca66d9a55c15c->leave($__internal_d23dd202154495d0f505adcab0573594e3b575ea991265c7010ca66d9a55c15c_prof);

        
        $__internal_62db213c2cd375c9e0585eeaf4b70a97e2dd89c4065ba5162f22fc4dac60fa04->leave($__internal_62db213c2cd375c9e0585eeaf4b70a97e2dd89c4065ba5162f22fc4dac60fa04_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3b6b915f65294fb2dbd2dd7a24289faa782cf02a54fd7d0cba7e8b02955b633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b6b915f65294fb2dbd2dd7a24289faa782cf02a54fd7d0cba7e8b02955b633->enter($__internal_e3b6b915f65294fb2dbd2dd7a24289faa782cf02a54fd7d0cba7e8b02955b633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_556e744eb06bd5ba61a92d5e7c9075c8455c3553e98b01123631c6ce2e01fd6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556e744eb06bd5ba61a92d5e7c9075c8455c3553e98b01123631c6ce2e01fd6b->enter($__internal_556e744eb06bd5ba61a92d5e7c9075c8455c3553e98b01123631c6ce2e01fd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_556e744eb06bd5ba61a92d5e7c9075c8455c3553e98b01123631c6ce2e01fd6b->leave($__internal_556e744eb06bd5ba61a92d5e7c9075c8455c3553e98b01123631c6ce2e01fd6b_prof);

        
        $__internal_e3b6b915f65294fb2dbd2dd7a24289faa782cf02a54fd7d0cba7e8b02955b633->leave($__internal_e3b6b915f65294fb2dbd2dd7a24289faa782cf02a54fd7d0cba7e8b02955b633_prof);

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
