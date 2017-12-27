<?php

/* page/principal.html.twig */
class __TwigTemplate_71b01554d30d3b8c90fce1975888b191003053c455964b64d84657989abc8f6f extends Twig_Template
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
        // line 2
        $context["button"] = $this->loadTemplate("base/button.html.twig", "page/principal.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "Principal
";
    }

    // line 8
    public function block_page_title($context, array $blocks = array())
    {
        // line 9
        echo "<h3>Cadastro de cliente</h3>
";
    }

    // line 12
    public function block_page_content($context, array $blocks = array())
    {
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
        return array (  52 => 13,  49 => 12,  44 => 9,  41 => 8,  36 => 5,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "page/principal.html.twig", "C:\\wamp64\\www\\sparta\\app\\Resources\\views\\page\\principal.html.twig");
    }
}
