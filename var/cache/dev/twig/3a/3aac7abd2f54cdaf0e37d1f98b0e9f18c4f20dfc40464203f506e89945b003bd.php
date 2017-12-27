<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_243650bb9ec724ff0a969d2e91b1b8545dac3172fad2a499e3e0953f65668a3e extends Twig_Template
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
        $__internal_3887818c7b89874cee2e5f9edd90ad7c52d80069eebb42a8657eda958a2f3164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3887818c7b89874cee2e5f9edd90ad7c52d80069eebb42a8657eda958a2f3164->enter($__internal_3887818c7b89874cee2e5f9edd90ad7c52d80069eebb42a8657eda958a2f3164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_efceb75362e5afab3483bf49c499366c8a19dcee27bfa3b6693aa5c68634f996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efceb75362e5afab3483bf49c499366c8a19dcee27bfa3b6693aa5c68634f996->enter($__internal_efceb75362e5afab3483bf49c499366c8a19dcee27bfa3b6693aa5c68634f996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_3887818c7b89874cee2e5f9edd90ad7c52d80069eebb42a8657eda958a2f3164->leave($__internal_3887818c7b89874cee2e5f9edd90ad7c52d80069eebb42a8657eda958a2f3164_prof);

        
        $__internal_efceb75362e5afab3483bf49c499366c8a19dcee27bfa3b6693aa5c68634f996->leave($__internal_efceb75362e5afab3483bf49c499366c8a19dcee27bfa3b6693aa5c68634f996_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ccd27c286fa6592b0d3072286ced7e30cccbd721116a39d012f62743ad8f709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ccd27c286fa6592b0d3072286ced7e30cccbd721116a39d012f62743ad8f709->enter($__internal_7ccd27c286fa6592b0d3072286ced7e30cccbd721116a39d012f62743ad8f709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0b60a56e25da19a1ba83ff849804dd167d843cf31b94f925cb2e367c89b05091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b60a56e25da19a1ba83ff849804dd167d843cf31b94f925cb2e367c89b05091->enter($__internal_0b60a56e25da19a1ba83ff849804dd167d843cf31b94f925cb2e367c89b05091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0b60a56e25da19a1ba83ff849804dd167d843cf31b94f925cb2e367c89b05091->leave($__internal_0b60a56e25da19a1ba83ff849804dd167d843cf31b94f925cb2e367c89b05091_prof);

        
        $__internal_7ccd27c286fa6592b0d3072286ced7e30cccbd721116a39d012f62743ad8f709->leave($__internal_7ccd27c286fa6592b0d3072286ced7e30cccbd721116a39d012f62743ad8f709_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_86e2ce56c077038b90f61e42fce23e2c3941138e6e7d2643bd6bc30dadc90c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e2ce56c077038b90f61e42fce23e2c3941138e6e7d2643bd6bc30dadc90c20->enter($__internal_86e2ce56c077038b90f61e42fce23e2c3941138e6e7d2643bd6bc30dadc90c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1e9dee8e18c2da6ba0f24977bad33868063e251f9aaf470625228f588da31dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9dee8e18c2da6ba0f24977bad33868063e251f9aaf470625228f588da31dac->enter($__internal_1e9dee8e18c2da6ba0f24977bad33868063e251f9aaf470625228f588da31dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1e9dee8e18c2da6ba0f24977bad33868063e251f9aaf470625228f588da31dac->leave($__internal_1e9dee8e18c2da6ba0f24977bad33868063e251f9aaf470625228f588da31dac_prof);

        
        $__internal_86e2ce56c077038b90f61e42fce23e2c3941138e6e7d2643bd6bc30dadc90c20->leave($__internal_86e2ce56c077038b90f61e42fce23e2c3941138e6e7d2643bd6bc30dadc90c20_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fd8b65cef2595a29a49f822883f2da007db9d6a55e9d70248d9cb26a5c5b8fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd8b65cef2595a29a49f822883f2da007db9d6a55e9d70248d9cb26a5c5b8fb->enter($__internal_0fd8b65cef2595a29a49f822883f2da007db9d6a55e9d70248d9cb26a5c5b8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc1eeb580e5ac896462aeb1bd3677a4a63624334b448847f69455ac9ca7fb907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1eeb580e5ac896462aeb1bd3677a4a63624334b448847f69455ac9ca7fb907->enter($__internal_bc1eeb580e5ac896462aeb1bd3677a4a63624334b448847f69455ac9ca7fb907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bc1eeb580e5ac896462aeb1bd3677a4a63624334b448847f69455ac9ca7fb907->leave($__internal_bc1eeb580e5ac896462aeb1bd3677a4a63624334b448847f69455ac9ca7fb907_prof);

        
        $__internal_0fd8b65cef2595a29a49f822883f2da007db9d6a55e9d70248d9cb26a5c5b8fb->leave($__internal_0fd8b65cef2595a29a49f822883f2da007db9d6a55e9d70248d9cb26a5c5b8fb_prof);

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
