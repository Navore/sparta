<?php

/* base/button.html.twig */
class __TwigTemplate_bb6de8f559a7634b212de7bf2dba72bff411eb455edc016befdfecba14223cc8 extends Twig_Template
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
            // line 11
            echo "    <div class=\"col-xs-6\">
        <button type=\"button\" class=\"btn btn-block btn-primary\" ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["pEvent"]) ? $context["pEvent"] : null), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, (isset($context["pText"]) ? $context["pText"] : null), "html", null, true);
            echo "
            <span class=\"glyphicon glyphicon-";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["pAwesome"]) ? $context["pAwesome"] : null), "html", null, true);
            echo "\"></span>
        </button>
    </div>
";
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
            // line 21
            echo "    <div class=\"col-xs-6\">
        <button type=\"submit\" class=\"btn btn-block btn-success\" ";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["pEvent"]) ? $context["pEvent"] : null), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, (isset($context["pText"]) ? $context["pText"] : null), "html", null, true);
            echo "
            <span class=\"glyphicon glyphicon-";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["pAwesome"]) ? $context["pAwesome"] : null), "html", null, true);
            echo "\"></span>
        </button>
    </div>
";
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
            // line 31
            echo "    <div class=\"col-xs-6\">
        <button type=\"button\" class=\"btn btn-block btn-warning\" ";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["pEvent"]) ? $context["pEvent"] : null), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, (isset($context["pText"]) ? $context["pText"] : null), "html", null, true);
            echo "
            <span class=\"glyphicon glyphicon-";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["pAwesome"]) ? $context["pAwesome"] : null), "html", null, true);
            echo "\"></span>
        </button>
    </div>
";
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
        return array (  152 => 33,  146 => 32,  143 => 31,  128 => 30,  109 => 23,  103 => 22,  100 => 21,  85 => 20,  66 => 13,  60 => 12,  57 => 11,  42 => 10,  35 => 27,  30 => 17,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base/button.html.twig", "C:\\wamp64\\www\\sparta\\app\\Resources\\views\\base\\button.html.twig");
    }
}
