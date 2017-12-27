<?php

/* page/principal.html.twig */
class __TwigTemplate_ca2eccfa1fc5430e1c53abfd82fb179d6e2e3c16d1859253d4299cb44a82ce07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "page/principal.html.twig", 1);
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
        $__internal_3e9d65909fe28589d1be1c1fe356cf72fe8e6dd559f8525c3d75a8238f70ceb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e9d65909fe28589d1be1c1fe356cf72fe8e6dd559f8525c3d75a8238f70ceb7->enter($__internal_3e9d65909fe28589d1be1c1fe356cf72fe8e6dd559f8525c3d75a8238f70ceb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/principal.html.twig"));

        $__internal_c45996fc6d66b2d41a1870d02c2e9f769a6c2e32d2c96b57e81e922eaf9b31bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45996fc6d66b2d41a1870d02c2e9f769a6c2e32d2c96b57e81e922eaf9b31bc->enter($__internal_c45996fc6d66b2d41a1870d02c2e9f769a6c2e32d2c96b57e81e922eaf9b31bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/principal.html.twig"));

        // line 2
        $context["button"] = $this->loadTemplate("base/button.html.twig", "page/principal.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e9d65909fe28589d1be1c1fe356cf72fe8e6dd559f8525c3d75a8238f70ceb7->leave($__internal_3e9d65909fe28589d1be1c1fe356cf72fe8e6dd559f8525c3d75a8238f70ceb7_prof);

        
        $__internal_c45996fc6d66b2d41a1870d02c2e9f769a6c2e32d2c96b57e81e922eaf9b31bc->leave($__internal_c45996fc6d66b2d41a1870d02c2e9f769a6c2e32d2c96b57e81e922eaf9b31bc_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0228d364e2a13087b8a9a0536c4722d85c322fee3c80d2a37e34eb608907ad98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0228d364e2a13087b8a9a0536c4722d85c322fee3c80d2a37e34eb608907ad98->enter($__internal_0228d364e2a13087b8a9a0536c4722d85c322fee3c80d2a37e34eb608907ad98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4d0e58abd724fac727ba2b0b56dbd689a11a60b2d2aef2afde4836f3c7d547b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0e58abd724fac727ba2b0b56dbd689a11a60b2d2aef2afde4836f3c7d547b6->enter($__internal_4d0e58abd724fac727ba2b0b56dbd689a11a60b2d2aef2afde4836f3c7d547b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Principal
";
        
        $__internal_4d0e58abd724fac727ba2b0b56dbd689a11a60b2d2aef2afde4836f3c7d547b6->leave($__internal_4d0e58abd724fac727ba2b0b56dbd689a11a60b2d2aef2afde4836f3c7d547b6_prof);

        
        $__internal_0228d364e2a13087b8a9a0536c4722d85c322fee3c80d2a37e34eb608907ad98->leave($__internal_0228d364e2a13087b8a9a0536c4722d85c322fee3c80d2a37e34eb608907ad98_prof);

    }

    // line 8
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_04652f1ca9a6af69eb9d1447f09289bd28b37f5f9a93ad2257beaeac85750a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04652f1ca9a6af69eb9d1447f09289bd28b37f5f9a93ad2257beaeac85750a73->enter($__internal_04652f1ca9a6af69eb9d1447f09289bd28b37f5f9a93ad2257beaeac85750a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_546e764260018b962e207fdaae90cff22be1ed81474e78db7808a34c5426c838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546e764260018b962e207fdaae90cff22be1ed81474e78db7808a34c5426c838->enter($__internal_546e764260018b962e207fdaae90cff22be1ed81474e78db7808a34c5426c838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 9
        echo "<h3>Cadastro de cliente</h3>
";
        
        $__internal_546e764260018b962e207fdaae90cff22be1ed81474e78db7808a34c5426c838->leave($__internal_546e764260018b962e207fdaae90cff22be1ed81474e78db7808a34c5426c838_prof);

        
        $__internal_04652f1ca9a6af69eb9d1447f09289bd28b37f5f9a93ad2257beaeac85750a73->leave($__internal_04652f1ca9a6af69eb9d1447f09289bd28b37f5f9a93ad2257beaeac85750a73_prof);

    }

    // line 12
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_7fd15a3b5261c95bd72ce894075433430ac9324f527c4940fa64f46c32d392a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd15a3b5261c95bd72ce894075433430ac9324f527c4940fa64f46c32d392a5->enter($__internal_7fd15a3b5261c95bd72ce894075433430ac9324f527c4940fa64f46c32d392a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_73a0203151844a6e0d2de736d9aa4099dd8b74b66a1e0dbe60c787d93dcc15c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a0203151844a6e0d2de736d9aa4099dd8b74b66a1e0dbe60c787d93dcc15c9->enter($__internal_73a0203151844a6e0d2de736d9aa4099dd8b74b66a1e0dbe60c787d93dcc15c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_73a0203151844a6e0d2de736d9aa4099dd8b74b66a1e0dbe60c787d93dcc15c9->leave($__internal_73a0203151844a6e0d2de736d9aa4099dd8b74b66a1e0dbe60c787d93dcc15c9_prof);

        
        $__internal_7fd15a3b5261c95bd72ce894075433430ac9324f527c4940fa64f46c32d392a5->leave($__internal_7fd15a3b5261c95bd72ce894075433430ac9324f527c4940fa64f46c32d392a5_prof);

    }

    public function getTemplateName()
    {
        return "page/principal.html.twig";
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
{% endblock page_content %}", "page/principal.html.twig", "C:\\wamp64\\www\\sparta\\app\\Resources\\views\\page\\principal.html.twig");
    }
}
