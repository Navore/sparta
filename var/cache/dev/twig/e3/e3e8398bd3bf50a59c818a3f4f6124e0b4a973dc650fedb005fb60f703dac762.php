<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_7925fcd8f273ce14fc4bbfd88e980768ad78fc78f061f4e5ffaef7f6df92dc0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac770bab059c6fd0ea80500b625dca26fd86b432aca49f45b26c60bdb5072b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac770bab059c6fd0ea80500b625dca26fd86b432aca49f45b26c60bdb5072b98->enter($__internal_ac770bab059c6fd0ea80500b625dca26fd86b432aca49f45b26c60bdb5072b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d9954d940363641b95209b7e7edce9f3ea4a2d662af2c9c0ac55b51f0576c780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9954d940363641b95209b7e7edce9f3ea4a2d662af2c9c0ac55b51f0576c780->enter($__internal_d9954d940363641b95209b7e7edce9f3ea4a2d662af2c9c0ac55b51f0576c780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_ac770bab059c6fd0ea80500b625dca26fd86b432aca49f45b26c60bdb5072b98->leave($__internal_ac770bab059c6fd0ea80500b625dca26fd86b432aca49f45b26c60bdb5072b98_prof);

        
        $__internal_d9954d940363641b95209b7e7edce9f3ea4a2d662af2c9c0ac55b51f0576c780->leave($__internal_d9954d940363641b95209b7e7edce9f3ea4a2d662af2c9c0ac55b51f0576c780_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbd04e40372e156bb376f614a7a55db3d1c307447478f77e61531764e0ed8423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd04e40372e156bb376f614a7a55db3d1c307447478f77e61531764e0ed8423->enter($__internal_cbd04e40372e156bb376f614a7a55db3d1c307447478f77e61531764e0ed8423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b40bc9896edfd3572322540d58da68e71f7b3953ad033e5271ed125f66f62eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40bc9896edfd3572322540d58da68e71f7b3953ad033e5271ed125f66f62eb4->enter($__internal_b40bc9896edfd3572322540d58da68e71f7b3953ad033e5271ed125f66f62eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b40bc9896edfd3572322540d58da68e71f7b3953ad033e5271ed125f66f62eb4->leave($__internal_b40bc9896edfd3572322540d58da68e71f7b3953ad033e5271ed125f66f62eb4_prof);

        
        $__internal_cbd04e40372e156bb376f614a7a55db3d1c307447478f77e61531764e0ed8423->leave($__internal_cbd04e40372e156bb376f614a7a55db3d1c307447478f77e61531764e0ed8423_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d6a6f0a50d6574929c3c41d5a8638e040ddb7e6eb483512156be4dc054925b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6a6f0a50d6574929c3c41d5a8638e040ddb7e6eb483512156be4dc054925b6->enter($__internal_5d6a6f0a50d6574929c3c41d5a8638e040ddb7e6eb483512156be4dc054925b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7cc09b429f38e76595779d1b5d183e7e39281e38b33e2e47aea5357d15cfbd4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc09b429f38e76595779d1b5d183e7e39281e38b33e2e47aea5357d15cfbd4c->enter($__internal_7cc09b429f38e76595779d1b5d183e7e39281e38b33e2e47aea5357d15cfbd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7cc09b429f38e76595779d1b5d183e7e39281e38b33e2e47aea5357d15cfbd4c->leave($__internal_7cc09b429f38e76595779d1b5d183e7e39281e38b33e2e47aea5357d15cfbd4c_prof);

        
        $__internal_5d6a6f0a50d6574929c3c41d5a8638e040ddb7e6eb483512156be4dc054925b6->leave($__internal_5d6a6f0a50d6574929c3c41d5a8638e040ddb7e6eb483512156be4dc054925b6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4b9e12b10b00361033d193bab0331282cd1d66b739e2ee789e73d61edd7e2db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b9e12b10b00361033d193bab0331282cd1d66b739e2ee789e73d61edd7e2db->enter($__internal_c4b9e12b10b00361033d193bab0331282cd1d66b739e2ee789e73d61edd7e2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6bd3be5e8aed1ce8e5f0ccfde173601b53f475f826997781bca2776abb80eead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd3be5e8aed1ce8e5f0ccfde173601b53f475f826997781bca2776abb80eead->enter($__internal_6bd3be5e8aed1ce8e5f0ccfde173601b53f475f826997781bca2776abb80eead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6bd3be5e8aed1ce8e5f0ccfde173601b53f475f826997781bca2776abb80eead->leave($__internal_6bd3be5e8aed1ce8e5f0ccfde173601b53f475f826997781bca2776abb80eead_prof);

        
        $__internal_c4b9e12b10b00361033d193bab0331282cd1d66b739e2ee789e73d61edd7e2db->leave($__internal_c4b9e12b10b00361033d193bab0331282cd1d66b739e2ee789e73d61edd7e2db_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\sparta\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
