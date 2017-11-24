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
        $__internal_003a343616a4786ba824209bed0e92f2c2bf46f553cf08e169f60a090181f891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_003a343616a4786ba824209bed0e92f2c2bf46f553cf08e169f60a090181f891->enter($__internal_003a343616a4786ba824209bed0e92f2c2bf46f553cf08e169f60a090181f891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base/button.html.twig"));

        $__internal_e4cfedc88f51f355be7beb434f7b5d64b20ed3f26efb90baa0970fb41bc2138e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4cfedc88f51f355be7beb434f7b5d64b20ed3f26efb90baa0970fb41bc2138e->enter($__internal_e4cfedc88f51f355be7beb434f7b5d64b20ed3f26efb90baa0970fb41bc2138e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base/button.html.twig"));

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
        
        $__internal_003a343616a4786ba824209bed0e92f2c2bf46f553cf08e169f60a090181f891->leave($__internal_003a343616a4786ba824209bed0e92f2c2bf46f553cf08e169f60a090181f891_prof);

        
        $__internal_e4cfedc88f51f355be7beb434f7b5d64b20ed3f26efb90baa0970fb41bc2138e->leave($__internal_e4cfedc88f51f355be7beb434f7b5d64b20ed3f26efb90baa0970fb41bc2138e_prof);

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
            $__internal_cbd73f06054afdb8d179e0ce34ab34cc9599a8171bc42088482ccb83baad2819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_cbd73f06054afdb8d179e0ce34ab34cc9599a8171bc42088482ccb83baad2819->enter($__internal_cbd73f06054afdb8d179e0ce34ab34cc9599a8171bc42088482ccb83baad2819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "button1"));

            $__internal_4e67401c4528ffa952303d2d0a0a21432f9a8160b644f9b4fb7f64ae4f679f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_4e67401c4528ffa952303d2d0a0a21432f9a8160b644f9b4fb7f64ae4f679f3e->enter($__internal_4e67401c4528ffa952303d2d0a0a21432f9a8160b644f9b4fb7f64ae4f679f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "button1"));

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
            
            $__internal_4e67401c4528ffa952303d2d0a0a21432f9a8160b644f9b4fb7f64ae4f679f3e->leave($__internal_4e67401c4528ffa952303d2d0a0a21432f9a8160b644f9b4fb7f64ae4f679f3e_prof);

            
            $__internal_cbd73f06054afdb8d179e0ce34ab34cc9599a8171bc42088482ccb83baad2819->leave($__internal_cbd73f06054afdb8d179e0ce34ab34cc9599a8171bc42088482ccb83baad2819_prof);

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
            $__internal_818ee4e577db4ec61e045dfce4bc8139266803f25af4382a812a97458be5155e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_818ee4e577db4ec61e045dfce4bc8139266803f25af4382a812a97458be5155e->enter($__internal_818ee4e577db4ec61e045dfce4bc8139266803f25af4382a812a97458be5155e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "button2"));

            $__internal_6a19182f904e8c58353ec61abff2707e4337031b28f90f06e204e3ab00180349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6a19182f904e8c58353ec61abff2707e4337031b28f90f06e204e3ab00180349->enter($__internal_6a19182f904e8c58353ec61abff2707e4337031b28f90f06e204e3ab00180349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "button2"));

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
            
            $__internal_6a19182f904e8c58353ec61abff2707e4337031b28f90f06e204e3ab00180349->leave($__internal_6a19182f904e8c58353ec61abff2707e4337031b28f90f06e204e3ab00180349_prof);

            
            $__internal_818ee4e577db4ec61e045dfce4bc8139266803f25af4382a812a97458be5155e->leave($__internal_818ee4e577db4ec61e045dfce4bc8139266803f25af4382a812a97458be5155e_prof);

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
            $__internal_53a3aec4cbcd6e81c670caf240c50bed805c9641d7c64715abd56397a0af79e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_53a3aec4cbcd6e81c670caf240c50bed805c9641d7c64715abd56397a0af79e9->enter($__internal_53a3aec4cbcd6e81c670caf240c50bed805c9641d7c64715abd56397a0af79e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "button3"));

            $__internal_29199b62e2b2b4fab8649c616eed5024d923a82627ef1ddbefa5e10719240842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_29199b62e2b2b4fab8649c616eed5024d923a82627ef1ddbefa5e10719240842->enter($__internal_29199b62e2b2b4fab8649c616eed5024d923a82627ef1ddbefa5e10719240842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "button3"));

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
            
            $__internal_29199b62e2b2b4fab8649c616eed5024d923a82627ef1ddbefa5e10719240842->leave($__internal_29199b62e2b2b4fab8649c616eed5024d923a82627ef1ddbefa5e10719240842_prof);

            
            $__internal_53a3aec4cbcd6e81c670caf240c50bed805c9641d7c64715abd56397a0af79e9->leave($__internal_53a3aec4cbcd6e81c670caf240c50bed805c9641d7c64715abd56397a0af79e9_prof);

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
