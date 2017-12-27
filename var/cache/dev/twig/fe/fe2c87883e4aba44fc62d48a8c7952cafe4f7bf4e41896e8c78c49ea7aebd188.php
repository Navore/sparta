<?php

/* base/button.html.twig */
class __TwigTemplate_a7fc0d1712550e21459c88247c58912142cceab073f5e67ea48989b8e503fee5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60bae447d187249f29ada51ef064a2e0be650028ee76b5a99abf70894db2e07c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60bae447d187249f29ada51ef064a2e0be650028ee76b5a99abf70894db2e07c->enter($__internal_60bae447d187249f29ada51ef064a2e0be650028ee76b5a99abf70894db2e07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base/button.html.twig"));

        $__internal_b5d4074a03d9ceae82b487acdcefccfc19ef2bfec0edb60ad1734c8e9a0e13e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d4074a03d9ceae82b487acdcefccfc19ef2bfec0edb60ad1734c8e9a0e13e8->enter($__internal_b5d4074a03d9ceae82b487acdcefccfc19ef2bfec0edb60ad1734c8e9a0e13e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base/button.html.twig"));

        // line 1
        echo "<!--//////////////////////////////////////////////////////////////////////////////////////
///                                 MODELO DOS BOTÕES                                 ////
///  PARA ACRESCENTAR UM NOVO BOTÃO, CRIAR UM MACRO COM O NOME BUTTON E O NUMERO      ////
///  PARA CHAMAR O BOTÃO NA PAGINA { { button.button2(\"\", \"\", \"\", \"\") }}              ////
///  ACRESCENTAR TAMBÉM O HTML DO BOTÃO NA PAGINA DE MODELOS (views/modelo.html.twig) ////
///////////////////////////////////////////////////////////////////////////////////////-->
 <!--//////////////////////////////////////////////////////////////////////////////////////
////////////////////                   BOTÃO 1                     ////////////////////////
////////////////////////////////////////////////////////////////////////////////////////-->
";
        // line 17
        echo " <!--//////////////////////////////////////////////////////////////////////////////////////
////////////////////                   BOTÃO 2                     ////////////////////////
////////////////////////////////////////////////////////////////////////////////////////-->
";
        // line 27
        echo " <!--//////////////////////////////////////////////////////////////////////////////////////
////////////////////                   BOTÃO 3                     ////////////////////////
////////////////////////////////////////////////////////////////////////////////////////-->
";
        
        $__internal_60bae447d187249f29ada51ef064a2e0be650028ee76b5a99abf70894db2e07c->leave($__internal_60bae447d187249f29ada51ef064a2e0be650028ee76b5a99abf70894db2e07c_prof);

        
        $__internal_b5d4074a03d9ceae82b487acdcefccfc19ef2bfec0edb60ad1734c8e9a0e13e8->leave($__internal_b5d4074a03d9ceae82b487acdcefccfc19ef2bfec0edb60ad1734c8e9a0e13e8_prof);

    }

    // line 10
    public function getbutton1($__pId__ = "", $__pText__ = "", $__pAwesome__ = "", $__pEvent__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pId" => $__pId__,
            "pText" => $__pText__,
            "pAwesome" => $__pAwesome__,
            "pEvent" => $__pEvent__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_1466c0996a1d6b6df4bc3b09be4cc09d402869a715e2ec28a94284b3f6aa8dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_1466c0996a1d6b6df4bc3b09be4cc09d402869a715e2ec28a94284b3f6aa8dbd->enter($__internal_1466c0996a1d6b6df4bc3b09be4cc09d402869a715e2ec28a94284b3f6aa8dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "button1"));

            $__internal_1e340ffb616a3123c9076fe9f5bf48310dd599cac6e951ffa965245043c2b8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_1e340ffb616a3123c9076fe9f5bf48310dd599cac6e951ffa965245043c2b8b1->enter($__internal_1e340ffb616a3123c9076fe9f5bf48310dd599cac6e951ffa965245043c2b8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "button1"));

            // line 11
            echo "    <div class=\"col-xs-6\">
        <button type=\"button\" class=\"btn btn-block btn-primary\" ";
            // line 12
            echo twig_escape_filter($this->env, ($context["pEvent"] ?? $this->getContext($context, "pEvent")), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, ($context["pText"] ?? $this->getContext($context, "pText")), "html", null, true);
            echo "
            <span class=\"glyphicon glyphicon-";
            // line 13
            echo twig_escape_filter($this->env, ($context["pAwesome"] ?? $this->getContext($context, "pAwesome")), "html", null, true);
            echo "\"></span>
        </button>
    </div>
";
            
            $__internal_1e340ffb616a3123c9076fe9f5bf48310dd599cac6e951ffa965245043c2b8b1->leave($__internal_1e340ffb616a3123c9076fe9f5bf48310dd599cac6e951ffa965245043c2b8b1_prof);

            
            $__internal_1466c0996a1d6b6df4bc3b09be4cc09d402869a715e2ec28a94284b3f6aa8dbd->leave($__internal_1466c0996a1d6b6df4bc3b09be4cc09d402869a715e2ec28a94284b3f6aa8dbd_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 20
    public function getbutton2($__pId__ = "", $__pText__ = "", $__pAwesome__ = "", $__pEvent__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pId" => $__pId__,
            "pText" => $__pText__,
            "pAwesome" => $__pAwesome__,
            "pEvent" => $__pEvent__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2237650f881cd35d45449eaebc8217838b850696673ae033d71f563a1c36f9ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_2237650f881cd35d45449eaebc8217838b850696673ae033d71f563a1c36f9ac->enter($__internal_2237650f881cd35d45449eaebc8217838b850696673ae033d71f563a1c36f9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "button2"));

            $__internal_24ea08c2202e7060f62ae1f3121bd082b482a764d9a99617f4e7fd638fee255e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_24ea08c2202e7060f62ae1f3121bd082b482a764d9a99617f4e7fd638fee255e->enter($__internal_24ea08c2202e7060f62ae1f3121bd082b482a764d9a99617f4e7fd638fee255e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "button2"));

            // line 21
            echo "    <div class=\"col-xs-6\">
        <button type=\"submit\" class=\"btn btn-block btn-success\" ";
            // line 22
            echo twig_escape_filter($this->env, ($context["pEvent"] ?? $this->getContext($context, "pEvent")), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, ($context["pText"] ?? $this->getContext($context, "pText")), "html", null, true);
            echo "
            <span class=\"glyphicon glyphicon-";
            // line 23
            echo twig_escape_filter($this->env, ($context["pAwesome"] ?? $this->getContext($context, "pAwesome")), "html", null, true);
            echo "\"></span>
        </button>
    </div>
";
            
            $__internal_24ea08c2202e7060f62ae1f3121bd082b482a764d9a99617f4e7fd638fee255e->leave($__internal_24ea08c2202e7060f62ae1f3121bd082b482a764d9a99617f4e7fd638fee255e_prof);

            
            $__internal_2237650f881cd35d45449eaebc8217838b850696673ae033d71f563a1c36f9ac->leave($__internal_2237650f881cd35d45449eaebc8217838b850696673ae033d71f563a1c36f9ac_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 30
    public function getbutton3($__pId__ = "", $__pText__ = "", $__pAwesome__ = "", $__pEvent__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pId" => $__pId__,
            "pText" => $__pText__,
            "pAwesome" => $__pAwesome__,
            "pEvent" => $__pEvent__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_989a5f1d76463d5f631b4df414a6d941de3f9d83991a2fcf8e88e7d91702568b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_989a5f1d76463d5f631b4df414a6d941de3f9d83991a2fcf8e88e7d91702568b->enter($__internal_989a5f1d76463d5f631b4df414a6d941de3f9d83991a2fcf8e88e7d91702568b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "button3"));

            $__internal_797328df58b2c766611e943e05654437c83a1e4a2070a7ec8cbc309e90708429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_797328df58b2c766611e943e05654437c83a1e4a2070a7ec8cbc309e90708429->enter($__internal_797328df58b2c766611e943e05654437c83a1e4a2070a7ec8cbc309e90708429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "button3"));

            // line 31
            echo "    <div class=\"col-xs-6\">
        <button type=\"button\" class=\"btn btn-block btn-warning\" ";
            // line 32
            echo twig_escape_filter($this->env, ($context["pEvent"] ?? $this->getContext($context, "pEvent")), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, ($context["pText"] ?? $this->getContext($context, "pText")), "html", null, true);
            echo "
            <span class=\"glyphicon glyphicon-";
            // line 33
            echo twig_escape_filter($this->env, ($context["pAwesome"] ?? $this->getContext($context, "pAwesome")), "html", null, true);
            echo "\"></span>
        </button>
    </div>
";
            
            $__internal_797328df58b2c766611e943e05654437c83a1e4a2070a7ec8cbc309e90708429->leave($__internal_797328df58b2c766611e943e05654437c83a1e4a2070a7ec8cbc309e90708429_prof);

            
            $__internal_989a5f1d76463d5f631b4df414a6d941de3f9d83991a2fcf8e88e7d91702568b->leave($__internal_989a5f1d76463d5f631b4df414a6d941de3f9d83991a2fcf8e88e7d91702568b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "base/button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 33,  188 => 32,  185 => 31,  164 => 30,  139 => 23,  133 => 22,  130 => 21,  109 => 20,  84 => 13,  78 => 12,  75 => 11,  54 => 10,  41 => 27,  36 => 17,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--//////////////////////////////////////////////////////////////////////////////////////
///                                 MODELO DOS BOTÕES                                 ////
///  PARA ACRESCENTAR UM NOVO BOTÃO, CRIAR UM MACRO COM O NOME BUTTON E O NUMERO      ////
///  PARA CHAMAR O BOTÃO NA PAGINA { { button.button2(\"\", \"\", \"\", \"\") }}              ////
///  ACRESCENTAR TAMBÉM O HTML DO BOTÃO NA PAGINA DE MODELOS (views/modelo.html.twig) ////
///////////////////////////////////////////////////////////////////////////////////////-->
 <!--//////////////////////////////////////////////////////////////////////////////////////
////////////////////                   BOTÃO 1                     ////////////////////////
////////////////////////////////////////////////////////////////////////////////////////-->
{% macro button1(pId=\"\", pText=\"\",pAwesome=\"\", pEvent=\"\") %}
    <div class=\"col-xs-6\">
        <button type=\"button\" class=\"btn btn-block btn-primary\" {{ pEvent }}> {{ pText }}
            <span class=\"glyphicon glyphicon-{{pAwesome}}\"></span>
        </button>
    </div>
{% endmacro %}
 <!--//////////////////////////////////////////////////////////////////////////////////////
////////////////////                   BOTÃO 2                     ////////////////////////
////////////////////////////////////////////////////////////////////////////////////////-->
{% macro button2(pId=\"\", pText=\"\",pAwesome=\"\", pEvent=\"\") %}
    <div class=\"col-xs-6\">
        <button type=\"submit\" class=\"btn btn-block btn-success\" {{ pEvent }}> {{ pText }}
            <span class=\"glyphicon glyphicon-{{pAwesome}}\"></span>
        </button>
    </div>
{% endmacro %}
 <!--//////////////////////////////////////////////////////////////////////////////////////
////////////////////                   BOTÃO 3                     ////////////////////////
////////////////////////////////////////////////////////////////////////////////////////-->
{% macro button3(pId=\"\", pText=\"\",pAwesome=\"\", pEvent=\"\") %}
    <div class=\"col-xs-6\">
        <button type=\"button\" class=\"btn btn-block btn-warning\" {{ pEvent }}> {{ pText }}
            <span class=\"glyphicon glyphicon-{{pAwesome}}\"></span>
        </button>
    </div>
{% endmacro %}
", "base/button.html.twig", "C:\\wamp64\\www\\sparta\\app\\Resources\\views\\base\\button.html.twig");
    }
}
