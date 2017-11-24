<?php

/* page/principal.himl.twig */
class __TwigTemplate_ca1152302f46ecd451edf268cb3eb8ddecf7ac79ed4c57b6ffb0ff50b04d5bad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "page/principal.himl.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b6a1897d5b9bcb161719c0ee9e056f50bc26084f0d6662abe2a8008eb115ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6a1897d5b9bcb161719c0ee9e056f50bc26084f0d6662abe2a8008eb115ffc->enter($__internal_4b6a1897d5b9bcb161719c0ee9e056f50bc26084f0d6662abe2a8008eb115ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/principal.himl.twig"));

        $__internal_59a0c5d25debbc0bc6fc3737433441749e438fcbb62bd67e1dd27a8ae3cb2c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a0c5d25debbc0bc6fc3737433441749e438fcbb62bd67e1dd27a8ae3cb2c59->enter($__internal_59a0c5d25debbc0bc6fc3737433441749e438fcbb62bd67e1dd27a8ae3cb2c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/principal.himl.twig"));

        // line 2
        $context["button"] = $this->loadTemplate("base/button.html.twig", "page/principal.himl.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b6a1897d5b9bcb161719c0ee9e056f50bc26084f0d6662abe2a8008eb115ffc->leave($__internal_4b6a1897d5b9bcb161719c0ee9e056f50bc26084f0d6662abe2a8008eb115ffc_prof);

        
        $__internal_59a0c5d25debbc0bc6fc3737433441749e438fcbb62bd67e1dd27a8ae3cb2c59->leave($__internal_59a0c5d25debbc0bc6fc3737433441749e438fcbb62bd67e1dd27a8ae3cb2c59_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ccfd23ce5807ea23141a7630bc3d28307300ff2359c9bd6ad7db3db4c4226ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ccfd23ce5807ea23141a7630bc3d28307300ff2359c9bd6ad7db3db4c4226ee->enter($__internal_4ccfd23ce5807ea23141a7630bc3d28307300ff2359c9bd6ad7db3db4c4226ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf342f9fe7ed6dbbe3229fd080629b92f728b95097e30eaf7c70bddaa2329b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf342f9fe7ed6dbbe3229fd080629b92f728b95097e30eaf7c70bddaa2329b26->enter($__internal_cf342f9fe7ed6dbbe3229fd080629b92f728b95097e30eaf7c70bddaa2329b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Principal
";
        
        $__internal_cf342f9fe7ed6dbbe3229fd080629b92f728b95097e30eaf7c70bddaa2329b26->leave($__internal_cf342f9fe7ed6dbbe3229fd080629b92f728b95097e30eaf7c70bddaa2329b26_prof);

        
        $__internal_4ccfd23ce5807ea23141a7630bc3d28307300ff2359c9bd6ad7db3db4c4226ee->leave($__internal_4ccfd23ce5807ea23141a7630bc3d28307300ff2359c9bd6ad7db3db4c4226ee_prof);

    }

    // line 8
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a83f3bae93373e1d150a1d6515b7dc0c68389dbfcec7e70d6f847cc1530848c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a83f3bae93373e1d150a1d6515b7dc0c68389dbfcec7e70d6f847cc1530848c0->enter($__internal_a83f3bae93373e1d150a1d6515b7dc0c68389dbfcec7e70d6f847cc1530848c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_b0a5d8b8a1e75cb2b6e200546b89954a0a55614107e54d3ab5e98c9fbd33b5e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a5d8b8a1e75cb2b6e200546b89954a0a55614107e54d3ab5e98c9fbd33b5e8->enter($__internal_b0a5d8b8a1e75cb2b6e200546b89954a0a55614107e54d3ab5e98c9fbd33b5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 9
        echo "<h3>Cadastro de cliente</h3>
";
        
        $__internal_b0a5d8b8a1e75cb2b6e200546b89954a0a55614107e54d3ab5e98c9fbd33b5e8->leave($__internal_b0a5d8b8a1e75cb2b6e200546b89954a0a55614107e54d3ab5e98c9fbd33b5e8_prof);

        
        $__internal_a83f3bae93373e1d150a1d6515b7dc0c68389dbfcec7e70d6f847cc1530848c0->leave($__internal_a83f3bae93373e1d150a1d6515b7dc0c68389dbfcec7e70d6f847cc1530848c0_prof);

    }

    // line 12
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_88cf7d1cf933d59df88529c74697d33b52a4f78cf9ff17355858761406086523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88cf7d1cf933d59df88529c74697d33b52a4f78cf9ff17355858761406086523->enter($__internal_88cf7d1cf933d59df88529c74697d33b52a4f78cf9ff17355858761406086523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_aadddb3a7210d1d66a81dcd8f7252333d482cf51dd787a80a0935673e070b66f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aadddb3a7210d1d66a81dcd8f7252333d482cf51dd787a80a0935673e070b66f->enter($__internal_aadddb3a7210d1d66a81dcd8f7252333d482cf51dd787a80a0935673e070b66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 13
        echo "<div class=\"clearfix\"></div>

<div class=\"row\">
    <!-- FORMULARIO DADOS PESSOAIS DO CLIENTE -->
    <div class=\"col-md-6 col-xs-12\">
        <div class=\"x_panel\">
            <!-- CABE�ALHO DO FORMULARIO -->
            <div id=\"x-title\" class=\"x_title\">
                <h2>Dados pessoais <small>informações pessoais do cliente</small></h2>
                <ul class=\"nav navbar-right panel_toolbox\">
                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"#\">Settings 1</a></li>
                            <li><a href=\"#\">Settings 2</a></li>
                        </ul>
                    </li>
                </ul>
            <div class=\"clearfix\"></div>
            </div>
            <!-- /FIM DO CABE�ALHO DO FORMULARIO -->

            <!-- CONTEUDO DO FORMULARIO -->
            <div class=\"x_content form-horizontal form-label-left input_mask\">
                <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                    <input type=\"text\" class=\"form-control\" id=\"inputSuccess3\"  name=\"cpf_cnpj\" placeholder=\"Cpf ou Cnpj\">
                    <span class=\"fa fa-newspaper-o form-control-feedback right\" aria-hidden=\"true\"></span>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                    <input type=\"text\" class=\"form-control has-feedback-left\" id=\"inputSuccess4\" name=\"rg_ie\" placeholder=\"Rg ou Ie\">
                    <span class=\"fa fa-newspaper-o form-control-feedback left\" aria-hidden=\"true\"></span>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                    <input type=\"text\" class=\"form-control has-feedback-left\" id=\"inputSuccess2\" name=\"nome\" placeholder=\"Nome ou Razão social\">
                    <span class=\"fa fa-user form-control-feedback left\" aria-hidden=\"true\"></span>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                    <input type=\"text\" class=\"form-control has-feedback-left\" id=\"inputSuccess2\" name=\"nome_fantasia\" placeholder=\"Nome fantasia\">
                    <span class=\"fa fa-user-plus form-control-feedback left\" aria-hidden=\"true\"></span>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Data nascimento\" name=\"data_nasc\" data-inputmask=\"'mask': '99/99/9999'\">
                    <span class=\"fa fa-calendar form-control-feedback right\" aria-hidden=\"true\"></span>
                </div>
                <div class=\"form-group pull-right\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Sexo</label>&nbsp;
                    <div id=\"gender\" class=\"btn-group\" data-toggle=\"buttons\">
                        <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                            <input type=\"radio\" name=\"gender\" value=\"masc\"> Masc
                        </label>
                        <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                            <input type=\"radio\" name=\"gender\" value=\"femi\"> Femi
                        </label>
                    </div>
                </div>
            </div>
            <!-- /FIM DO CONTEUDO DO FORMULARIO -->
        </div>
    </div>
    <!-- /FIM DO FORMULARIO DADOS PESSOAIS -->

    <!-- FORMULARIO ENDERE�O DO CLIENTE -->
    <div class=\"col-md-6 col-xs-12\">
        <div class=\"x_panel\">
            <!-- CABE�ALHO DO FORMULARIO -->
            <div class=\"x_title\">
                <h2>Endereço <small>informações dos endereços do cliente</small></h2>
                <ul class=\"nav navbar-right panel_toolbox\">
                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"#\">Settings 1</a></li>
                            <li><a href=\"#\">Settings 2</a></li>
                        </ul>
                    </li>
                </ul>
                <div class=\"clearfix\"></div>
            </div>
            <!-- /FIM DO CABE�ALHO DO FORMULARIO -->

            <!-- CONTEUDO DO FORMULARIO ENDERE�O-->
            <div class=\"x_content form-horizontal form-label-left input_mask\">
                <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Cep\" name=\"cep\" data-inputmask=\"'mask' : '9999999-999'\">
                    <span class=\"fa fa-newspaper-o form-control-feedback right\" aria-hidden=\"true\"></span>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                    <input type=\"text\" class=\"form-control has-feedback-left\" id=\"inputSuccess4\" name=\"rg_ie\" placeholder=\"Rg ou Ie\">
                    <span class=\"fa fa-newspaper-o form-control-feedback left\" aria-hidden=\"true\"></span>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                    <input type=\"text\" class=\"form-control has-feedback-left\" id=\"inputSuccess2\" name=\"nome\" placeholder=\"Nome ou Raz�o social\">
                    <span class=\"fa fa-user form-control-feedback left\" aria-hidden=\"true\"></span>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                    <input type=\"text\" class=\"form-control has-feedback-left\" id=\"inputSuccess2\" name=\"nome_fantasia\" placeholder=\"Nome fantasia\">
                    <span class=\"fa fa-user-plus form-control-feedback left\" aria-hidden=\"true\"></span>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Data nascimento\" name=\"data_nasc\" data-inputmask=\"'mask': '99/99/9999'\">
                    <span class=\"fa fa-calendar form-control-feedback right\" aria-hidden=\"true\"></span>
                </div>
                <div class=\"form-group pull-right\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Sexo</label>&nbsp;
                    <div id=\"gender\" class=\"btn-group\" data-toggle=\"buttons\">
                        <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                            <input type=\"radio\" name=\"gender\" value=\"masc\"> Masc
                        </label>
                        <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                            <input type=\"radio\" name=\"gender\" value=\"femi\"> Femi
                        </label>
                    </div>
                </div>
            </div>
            <!-- /FIM DO CONTEUDO DO FORMULARIO ENDERE�O-->
        </div>
    </div>
    <!-- /FIM DO FORMULARIO ENDERE�O DO CLIENTE -->
</div>
";
        
        $__internal_aadddb3a7210d1d66a81dcd8f7252333d482cf51dd787a80a0935673e070b66f->leave($__internal_aadddb3a7210d1d66a81dcd8f7252333d482cf51dd787a80a0935673e070b66f_prof);

        
        $__internal_88cf7d1cf933d59df88529c74697d33b52a4f78cf9ff17355858761406086523->leave($__internal_88cf7d1cf933d59df88529c74697d33b52a4f78cf9ff17355858761406086523_prof);

    }

    public function getTemplateName()
    {
        return "page/principal.himl.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  74 => 9,  65 => 8,  54 => 5,  45 => 4,  35 => 1,  33 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base/base.html.twig\" %}
{% import \"base/button.html.twig\" as button %}

{% block title %}
Principal
{% endblock title %}

{% block page_title %}
<h3>Cadastro de cliente</h3>
{% endblock page_title %}

{% block page_content %}
<div class=\"clearfix\"></div>

<div class=\"row\">
    <!-- FORMULARIO DADOS PESSOAIS DO CLIENTE -->
    <div class=\"col-md-6 col-xs-12\">
        <div class=\"x_panel\">
            <!-- CABE�ALHO DO FORMULARIO -->
            <div id=\"x-title\" class=\"x_title\">
                <h2>Dados pessoais <small>informações pessoais do cliente</small></h2>
                <ul class=\"nav navbar-right panel_toolbox\">
                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"#\">Settings 1</a></li>
                            <li><a href=\"#\">Settings 2</a></li>
                        </ul>
                    </li>
                </ul>
            <div class=\"clearfix\"></div>
            </div>
            <!-- /FIM DO CABE�ALHO DO FORMULARIO -->

            <!-- CONTEUDO DO FORMULARIO -->
            <div class=\"x_content form-horizontal form-label-left input_mask\">
                <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                    <input type=\"text\" class=\"form-control\" id=\"inputSuccess3\"  name=\"cpf_cnpj\" placeholder=\"Cpf ou Cnpj\">
                    <span class=\"fa fa-newspaper-o form-control-feedback right\" aria-hidden=\"true\"></span>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                    <input type=\"text\" class=\"form-control has-feedback-left\" id=\"inputSuccess4\" name=\"rg_ie\" placeholder=\"Rg ou Ie\">
                    <span class=\"fa fa-newspaper-o form-control-feedback left\" aria-hidden=\"true\"></span>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                    <input type=\"text\" class=\"form-control has-feedback-left\" id=\"inputSuccess2\" name=\"nome\" placeholder=\"Nome ou Razão social\">
                    <span class=\"fa fa-user form-control-feedback left\" aria-hidden=\"true\"></span>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                    <input type=\"text\" class=\"form-control has-feedback-left\" id=\"inputSuccess2\" name=\"nome_fantasia\" placeholder=\"Nome fantasia\">
                    <span class=\"fa fa-user-plus form-control-feedback left\" aria-hidden=\"true\"></span>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Data nascimento\" name=\"data_nasc\" data-inputmask=\"'mask': '99/99/9999'\">
                    <span class=\"fa fa-calendar form-control-feedback right\" aria-hidden=\"true\"></span>
                </div>
                <div class=\"form-group pull-right\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Sexo</label>&nbsp;
                    <div id=\"gender\" class=\"btn-group\" data-toggle=\"buttons\">
                        <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                            <input type=\"radio\" name=\"gender\" value=\"masc\"> Masc
                        </label>
                        <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                            <input type=\"radio\" name=\"gender\" value=\"femi\"> Femi
                        </label>
                    </div>
                </div>
            </div>
            <!-- /FIM DO CONTEUDO DO FORMULARIO -->
        </div>
    </div>
    <!-- /FIM DO FORMULARIO DADOS PESSOAIS -->

    <!-- FORMULARIO ENDERE�O DO CLIENTE -->
    <div class=\"col-md-6 col-xs-12\">
        <div class=\"x_panel\">
            <!-- CABE�ALHO DO FORMULARIO -->
            <div class=\"x_title\">
                <h2>Endereço <small>informações dos endereços do cliente</small></h2>
                <ul class=\"nav navbar-right panel_toolbox\">
                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"#\">Settings 1</a></li>
                            <li><a href=\"#\">Settings 2</a></li>
                        </ul>
                    </li>
                </ul>
                <div class=\"clearfix\"></div>
            </div>
            <!-- /FIM DO CABE�ALHO DO FORMULARIO -->

            <!-- CONTEUDO DO FORMULARIO ENDERE�O-->
            <div class=\"x_content form-horizontal form-label-left input_mask\">
                <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Cep\" name=\"cep\" data-inputmask=\"'mask' : '9999999-999'\">
                    <span class=\"fa fa-newspaper-o form-control-feedback right\" aria-hidden=\"true\"></span>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                    <input type=\"text\" class=\"form-control has-feedback-left\" id=\"inputSuccess4\" name=\"rg_ie\" placeholder=\"Rg ou Ie\">
                    <span class=\"fa fa-newspaper-o form-control-feedback left\" aria-hidden=\"true\"></span>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                    <input type=\"text\" class=\"form-control has-feedback-left\" id=\"inputSuccess2\" name=\"nome\" placeholder=\"Nome ou Raz�o social\">
                    <span class=\"fa fa-user form-control-feedback left\" aria-hidden=\"true\"></span>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group has-feedback\">
                    <input type=\"text\" class=\"form-control has-feedback-left\" id=\"inputSuccess2\" name=\"nome_fantasia\" placeholder=\"Nome fantasia\">
                    <span class=\"fa fa-user-plus form-control-feedback left\" aria-hidden=\"true\"></span>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Data nascimento\" name=\"data_nasc\" data-inputmask=\"'mask': '99/99/9999'\">
                    <span class=\"fa fa-calendar form-control-feedback right\" aria-hidden=\"true\"></span>
                </div>
                <div class=\"form-group pull-right\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Sexo</label>&nbsp;
                    <div id=\"gender\" class=\"btn-group\" data-toggle=\"buttons\">
                        <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                            <input type=\"radio\" name=\"gender\" value=\"masc\"> Masc
                        </label>
                        <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                            <input type=\"radio\" name=\"gender\" value=\"femi\"> Femi
                        </label>
                    </div>
                </div>
            </div>
            <!-- /FIM DO CONTEUDO DO FORMULARIO ENDERE�O-->
        </div>
    </div>
    <!-- /FIM DO FORMULARIO ENDERE�O DO CLIENTE -->
</div>
{% endblock page_content %}", "page/principal.himl.twig", "C:\\wamp64\\www\\sparta\\app\\Resources\\views\\page\\principal.himl.twig");
    }
}
