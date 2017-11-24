<?php

/* login/login.html.twig */
class __TwigTemplate_1f9056815b286da207485f0abece7f172908943378dc04e31c437875401e7e7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "login/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'js_head' => array($this, 'block_js_head'),
            'body' => array($this, 'block_body'),
            'body_menu' => array($this, 'block_body_menu'),
            'body_content' => array($this, 'block_body_content'),
            'js_footer' => array($this, 'block_js_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab71042b79bac5bb736eb3401fb6c8f87ef1b324c27dbdf8e7312468453b5b6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab71042b79bac5bb736eb3401fb6c8f87ef1b324c27dbdf8e7312468453b5b6b->enter($__internal_ab71042b79bac5bb736eb3401fb6c8f87ef1b324c27dbdf8e7312468453b5b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $__internal_cd52287f3172e5a2a19a4e96e42cd7c4713e380facbc9413ea76c2e6fe993516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd52287f3172e5a2a19a4e96e42cd7c4713e380facbc9413ea76c2e6fe993516->enter($__internal_cd52287f3172e5a2a19a4e96e42cd7c4713e380facbc9413ea76c2e6fe993516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        // line 2
        $context["button"] = $this->loadTemplate("base/button.html.twig", "login/login.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab71042b79bac5bb736eb3401fb6c8f87ef1b324c27dbdf8e7312468453b5b6b->leave($__internal_ab71042b79bac5bb736eb3401fb6c8f87ef1b324c27dbdf8e7312468453b5b6b_prof);

        
        $__internal_cd52287f3172e5a2a19a4e96e42cd7c4713e380facbc9413ea76c2e6fe993516->leave($__internal_cd52287f3172e5a2a19a4e96e42cd7c4713e380facbc9413ea76c2e6fe993516_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fc450b91f3d1e981fbe99740a7c0e23825b1e101f224fa4e5c5c4bd464fc91d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc450b91f3d1e981fbe99740a7c0e23825b1e101f224fa4e5c5c4bd464fc91d->enter($__internal_2fc450b91f3d1e981fbe99740a7c0e23825b1e101f224fa4e5c5c4bd464fc91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9185e98c841a7d52f0ea5bd27e95f077f2784284ff4c48eeecb106fa0295171a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9185e98c841a7d52f0ea5bd27e95f077f2784284ff4c48eeecb106fa0295171a->enter($__internal_9185e98c841a7d52f0ea5bd27e95f077f2784284ff4c48eeecb106fa0295171a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Sparta | Login
";
        
        $__internal_9185e98c841a7d52f0ea5bd27e95f077f2784284ff4c48eeecb106fa0295171a->leave($__internal_9185e98c841a7d52f0ea5bd27e95f077f2784284ff4c48eeecb106fa0295171a_prof);

        
        $__internal_2fc450b91f3d1e981fbe99740a7c0e23825b1e101f224fa4e5c5c4bd464fc91d->leave($__internal_2fc450b91f3d1e981fbe99740a7c0e23825b1e101f224fa4e5c5c4bd464fc91d_prof);

    }

    // line 7
    public function block_js_head($context, array $blocks = array())
    {
        $__internal_4403b7be0391dec22c9600dde2cb20a747cd875894f364073b4f6870670e8ea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4403b7be0391dec22c9600dde2cb20a747cd875894f364073b4f6870670e8ea9->enter($__internal_4403b7be0391dec22c9600dde2cb20a747cd875894f364073b4f6870670e8ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_head"));

        $__internal_a0dfbb01ba90bbdf3c5aa87a1d2e54d9ce5581e3c2fc2360787dec651719d688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0dfbb01ba90bbdf3c5aa87a1d2e54d9ce5581e3c2fc2360787dec651719d688->enter($__internal_a0dfbb01ba90bbdf3c5aa87a1d2e54d9ce5581e3c2fc2360787dec651719d688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_head"));

        // line 8
        echo "    <!--<script src=\"//code.jquery.com/jquery-1.10.2.min.js\"></script>-->
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mine.js"), "html", null, true);
        echo "\"></script>    
";
        
        $__internal_a0dfbb01ba90bbdf3c5aa87a1d2e54d9ce5581e3c2fc2360787dec651719d688->leave($__internal_a0dfbb01ba90bbdf3c5aa87a1d2e54d9ce5581e3c2fc2360787dec651719d688_prof);

        
        $__internal_4403b7be0391dec22c9600dde2cb20a747cd875894f364073b4f6870670e8ea9->leave($__internal_4403b7be0391dec22c9600dde2cb20a747cd875894f364073b4f6870670e8ea9_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_c98f65a555614aceb1e02aba21abc31a8f0dbdc56622cd9926b28cf6ba7dd9d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c98f65a555614aceb1e02aba21abc31a8f0dbdc56622cd9926b28cf6ba7dd9d4->enter($__internal_c98f65a555614aceb1e02aba21abc31a8f0dbdc56622cd9926b28cf6ba7dd9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f38640498356ecbf3bc0f426ab097bb0bbd16a44a697af18b6a2ebea40067c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f38640498356ecbf3bc0f426ab097bb0bbd16a44a697af18b6a2ebea40067c32->enter($__internal_f38640498356ecbf3bc0f426ab097bb0bbd16a44a697af18b6a2ebea40067c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <body id=\"body\" class=\"login\">
        ";
        // line 16
        $this->displayBlock('body_menu', $context, $blocks);
        // line 19
        echo "        
        ";
        // line 20
        $this->displayBlock('body_content', $context, $blocks);
        // line 159
        echo "        ";
        $this->displayBlock('js_footer', $context, $blocks);
        // line 161
        echo "    
    </body>
";
        
        $__internal_f38640498356ecbf3bc0f426ab097bb0bbd16a44a697af18b6a2ebea40067c32->leave($__internal_f38640498356ecbf3bc0f426ab097bb0bbd16a44a697af18b6a2ebea40067c32_prof);

        
        $__internal_c98f65a555614aceb1e02aba21abc31a8f0dbdc56622cd9926b28cf6ba7dd9d4->leave($__internal_c98f65a555614aceb1e02aba21abc31a8f0dbdc56622cd9926b28cf6ba7dd9d4_prof);

    }

    // line 16
    public function block_body_menu($context, array $blocks = array())
    {
        $__internal_46359700cbe4f7461683e5d1c2557c8c388ee9360e4e436d98bf91ebded1bc0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46359700cbe4f7461683e5d1c2557c8c388ee9360e4e436d98bf91ebded1bc0e->enter($__internal_46359700cbe4f7461683e5d1c2557c8c388ee9360e4e436d98bf91ebded1bc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        $__internal_7d5c74a4478f136d917a4b270c1eb30c5445453c57bb0feebe9160fd3c0ab21a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5c74a4478f136d917a4b270c1eb30c5445453c57bb0feebe9160fd3c0ab21a->enter($__internal_7d5c74a4478f136d917a4b270c1eb30c5445453c57bb0feebe9160fd3c0ab21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        // line 17
        echo "            
        ";
        
        $__internal_7d5c74a4478f136d917a4b270c1eb30c5445453c57bb0feebe9160fd3c0ab21a->leave($__internal_7d5c74a4478f136d917a4b270c1eb30c5445453c57bb0feebe9160fd3c0ab21a_prof);

        
        $__internal_46359700cbe4f7461683e5d1c2557c8c388ee9360e4e436d98bf91ebded1bc0e->leave($__internal_46359700cbe4f7461683e5d1c2557c8c388ee9360e4e436d98bf91ebded1bc0e_prof);

    }

    // line 20
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_5f7bd6064038d684507053eae678b3c5bd9b6328eb0ab1b7bb75a061b0c0663e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f7bd6064038d684507053eae678b3c5bd9b6328eb0ab1b7bb75a061b0c0663e->enter($__internal_5f7bd6064038d684507053eae678b3c5bd9b6328eb0ab1b7bb75a061b0c0663e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        $__internal_c1b0cdb3811ff39b8be4973e991a4f37a13292ca70d5f72e15029e866f725101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b0cdb3811ff39b8be4973e991a4f37a13292ca70d5f72e15029e866f725101->enter($__internal_c1b0cdb3811ff39b8be4973e991a4f37a13292ca70d5f72e15029e866f725101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 21
        echo "        <div>
            <a class=\"hiddenanchor\" id=\"signup\"></a>
            <a class=\"hiddenanchor\" id=\"signin\"></a>

            <div class=\"login_wrapper\">
                <div class=\"animate form login_form\">
                    <section class=\"login_content\">
                        <form action=\"control.php\" method=\"post\">
                            <h1>Login</h1>
                            <div class=\"col-md-19 col-sm-10 col-xs-10 pull-left\" style=\"padding:0\">
                                <input id=\"focus-signin\" type=\"text\" class=\"form-control\" placeholder=\"Login\" name=\"login\" required autofocus/>
                            </div>
                            
                            <!-- AJUDA LOGIN -->\t
                            <div id=\"help\" class=\"pull-right\">
                                <span id=\"help-login\" class=\"help\"> ? </span>
                            </div>
                            <!-- /////////////////////// -->
                            <div class=\"col-md-19 col-sm-10 col-xs-10 pull-left\" style=\"padding:0\">
                                <input type=\"password\" class=\"form-control\" placeholder=\"Senha\" nome=\"senha\" required/>
                            </div>
                            
                            <!-- AJUDA SENHA -->\t
                            <div id=\"help\" class=\"pull-right\">
                                <span id=\"help-senha\" class=\"help\"> ? </span>
                            </div>
                            <!-- /////////////////////// -->
                            
                            <div class=\"col-xs-12 margin-top-20\">
                                <span class=\"pull-left\">
                                    <input id=\"login-remember\" type=\"checkbox\" name=\"remember\" value=\"1\"> Relembrar senha
                                </span>
                                <span class=\"pull-right\">
                                    <a href=\"#\">Esqueceu sua senha?</a>
                                </span>
                            </div>
                            <div class=\"col-xs-14 margin-top-20\">
                                ";
        // line 58
        echo $context["button"]->getbutton2("", "Entrar", "play", "");
        echo "
                                
                                ";
        // line 60
        echo $context["button"]->getbutton1("", "Novo", "hand-up", "onclick", "window.location.href='#signup'; Change_Color('#ccccff',2)");
        echo "
                            </div>
                            
                            <div class=\"clearfix\"></div>
                            
                            <div class=\"separator\">
                                <p class=\"change_link\"> Novo no site? Clique em novo </p>
                                <div class=\"clearfix\"></div><br/>
                                <div>
                                    <h1><i class=\"fa fa-lightbulb-o fa-2x\"></i> Navore Desenvolvimento</h1>
                                    <!--<h1><span class=\"glyphicon glyphicon-tree-deciduous\"></span> Navore Desenvolvimento</h1>-->
                                    <p>2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
<!--/////////////////////////////////////////////////////////-->
<!--///////////PARTE DO CADASTRO DA EMPRESA//////////////////-->
<!--/////////////////////////////////////////////////////////-->
                <div id=\"register\" class=\"animate form registration_form\">
                    <section class=\"login_content\">
                        <?php echo \$form_cab; ?>
                        <!-- <form action=\"../functions/get_Info_CNPJ.php\" method=\"post\"> -->
                            <h1>Criar cadastro</h1>
                            <?php if(\$show == true){ 
                                    if(\$erro == 'erro_cad'){?>
                            <label for=\"lastname\" class=\"col-md-12 control-label margin-top-10\">  
                                Erro ao buscar infomações<br/>
                                CNPJ ou Captcha incorretos
                            </label>
                            <?php } ?>

                            <div class=\"form-group\">
                                <div>
                                    <input id=\"focus-signup\" class=\"form-control\" type=\"text\" placeholder=\"Insira seu CNPJ ou CPF\" name=\"cnpj\" required/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div>
                                    <input class=\"form-control\" type=\"text\" placeholder=\"Insira a imagem abaixo\" name=\"captcha_cnpj\" required/>
                                </div>
                                <div>
                                    <img id=\"captcha_cnpj\" src=\"<?php echo \$imagem_cnpj; ?>\" border=\"0\">
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(\$show == false){ ?>
                            <label for=\"lastname\" class=\"col-md-12 control-label margin-top-10\">  
                                Infomações recebidas com sucesso
                            </label>
                            <div class=\"form-group\">
                                <div class=\"pull-left\">
                                    <label for=\"lastname\" class=\"col-md-12 control-label margin-top-10\"> Nome Fantasia </label>
                                </div>
                                <div>
                                    <input id=\"focus-signup\" type=\"form-control\" class=\"form-control\" placeholder=\"Insira o nome fantasia\" required />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"pull-left\">
                                    <label for=\"lastname\" class=\"col-md-12 control-label margin-top-10\"> Senha </label>
                                </div>
                                <div>
                                    <input type=\"password\" class=\"form-control\" placeholder=\"Insira a senha\" required/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"pull-left\">
                                    <label for=\"lastname\" class=\"col-md-12 control-label margin-top-10\"> Confirmar senha </label>
                                </div>
                                <div>
                                    <input type=\"password\" class=\"form-control\" placeholder=\"Confirme sua senha\" required/>
                                </div>
                            </div>
                            <?php } ?>
                            <div class=\"col-xs-14 margin-top-20\">
                                <?php
                                echo \$createButton->CreateButtonHtml(2, \"\", \"Cadastar\", \"play\");

                                echo \$createButton->CreateButtonHtml(1, \"\", \"Cadastar\", \"hand-up\", \"onclick\", \"window.location.href='#signin'; Change_Color('#ccccff',1)\");
                                ?>
                            </div>
                            <div class=\"clearfix\"></div>
                            <div class=\"separator\">
                                <p class=\"change_link\"> Já é cadastrado ?  Clique em login</p>
                                <p class=\"change_link\"> Não tem CNPJ ?  Cadastre-se com o CPF</p>
                                <div class=\"clearfix\"></div><br />
                                <div>
                                    <h1><span class=\"glyphicon glyphicon-tree-deciduous\"></span> Navore Desenvolvimento</h1>
                                    <p>2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
        ";
        
        $__internal_c1b0cdb3811ff39b8be4973e991a4f37a13292ca70d5f72e15029e866f725101->leave($__internal_c1b0cdb3811ff39b8be4973e991a4f37a13292ca70d5f72e15029e866f725101_prof);

        
        $__internal_5f7bd6064038d684507053eae678b3c5bd9b6328eb0ab1b7bb75a061b0c0663e->leave($__internal_5f7bd6064038d684507053eae678b3c5bd9b6328eb0ab1b7bb75a061b0c0663e_prof);

    }

    // line 159
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_d3556f6f8d95e5f84b251bb46a690681e40f58d307c3996505274e42fbc7babd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3556f6f8d95e5f84b251bb46a690681e40f58d307c3996505274e42fbc7babd->enter($__internal_d3556f6f8d95e5f84b251bb46a690681e40f58d307c3996505274e42fbc7babd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        $__internal_54dc72f026f1e5cae3d0c43e027023dddbd35f395dd529da49b70d122bca7b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54dc72f026f1e5cae3d0c43e027023dddbd35f395dd529da49b70d122bca7b5a->enter($__internal_54dc72f026f1e5cae3d0c43e027023dddbd35f395dd529da49b70d122bca7b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 160
        echo "        
        ";
        
        $__internal_54dc72f026f1e5cae3d0c43e027023dddbd35f395dd529da49b70d122bca7b5a->leave($__internal_54dc72f026f1e5cae3d0c43e027023dddbd35f395dd529da49b70d122bca7b5a_prof);

        
        $__internal_d3556f6f8d95e5f84b251bb46a690681e40f58d307c3996505274e42fbc7babd->leave($__internal_d3556f6f8d95e5f84b251bb46a690681e40f58d307c3996505274e42fbc7babd_prof);

    }

    public function getTemplateName()
    {
        return "login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 160,  316 => 159,  207 => 60,  202 => 58,  163 => 21,  154 => 20,  143 => 17,  134 => 16,  122 => 161,  119 => 159,  117 => 20,  114 => 19,  112 => 16,  109 => 15,  100 => 14,  88 => 11,  84 => 10,  80 => 9,  77 => 8,  68 => 7,  57 => 5,  48 => 4,  38 => 1,  36 => 2,  11 => 1,);
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
    Sparta | Login
{% endblock title %}
{% block js_head %}
    <!--<script src=\"//code.jquery.com/jquery-1.10.2.min.js\"></script>-->
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.js') }}\"></script>
    <script src=\"{{ asset('js/mine.js') }}\"></script>    
{% endblock js_head %}           
    
{% block body %}
    <body id=\"body\" class=\"login\">
        {% block body_menu %}
            
        {% endblock body_menu %}
        
        {% block body_content %}
        <div>
            <a class=\"hiddenanchor\" id=\"signup\"></a>
            <a class=\"hiddenanchor\" id=\"signin\"></a>

            <div class=\"login_wrapper\">
                <div class=\"animate form login_form\">
                    <section class=\"login_content\">
                        <form action=\"control.php\" method=\"post\">
                            <h1>Login</h1>
                            <div class=\"col-md-19 col-sm-10 col-xs-10 pull-left\" style=\"padding:0\">
                                <input id=\"focus-signin\" type=\"text\" class=\"form-control\" placeholder=\"Login\" name=\"login\" required autofocus/>
                            </div>
                            
                            <!-- AJUDA LOGIN -->\t
                            <div id=\"help\" class=\"pull-right\">
                                <span id=\"help-login\" class=\"help\"> ? </span>
                            </div>
                            <!-- /////////////////////// -->
                            <div class=\"col-md-19 col-sm-10 col-xs-10 pull-left\" style=\"padding:0\">
                                <input type=\"password\" class=\"form-control\" placeholder=\"Senha\" nome=\"senha\" required/>
                            </div>
                            
                            <!-- AJUDA SENHA -->\t
                            <div id=\"help\" class=\"pull-right\">
                                <span id=\"help-senha\" class=\"help\"> ? </span>
                            </div>
                            <!-- /////////////////////// -->
                            
                            <div class=\"col-xs-12 margin-top-20\">
                                <span class=\"pull-left\">
                                    <input id=\"login-remember\" type=\"checkbox\" name=\"remember\" value=\"1\"> Relembrar senha
                                </span>
                                <span class=\"pull-right\">
                                    <a href=\"#\">Esqueceu sua senha?</a>
                                </span>
                            </div>
                            <div class=\"col-xs-14 margin-top-20\">
                                {{ button.button2(\"\", \"Entrar\", \"play\", \"\") }}
                                
                                {{ button.button1(\"\", \"Novo\",\"hand-up\",\"onclick\", \"window.location.href='#signup'; Change_Color('#ccccff',2)\") }}
                            </div>
                            
                            <div class=\"clearfix\"></div>
                            
                            <div class=\"separator\">
                                <p class=\"change_link\"> Novo no site? Clique em novo </p>
                                <div class=\"clearfix\"></div><br/>
                                <div>
                                    <h1><i class=\"fa fa-lightbulb-o fa-2x\"></i> Navore Desenvolvimento</h1>
                                    <!--<h1><span class=\"glyphicon glyphicon-tree-deciduous\"></span> Navore Desenvolvimento</h1>-->
                                    <p>2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
<!--/////////////////////////////////////////////////////////-->
<!--///////////PARTE DO CADASTRO DA EMPRESA//////////////////-->
<!--/////////////////////////////////////////////////////////-->
                <div id=\"register\" class=\"animate form registration_form\">
                    <section class=\"login_content\">
                        <?php echo \$form_cab; ?>
                        <!-- <form action=\"../functions/get_Info_CNPJ.php\" method=\"post\"> -->
                            <h1>Criar cadastro</h1>
                            <?php if(\$show == true){ 
                                    if(\$erro == 'erro_cad'){?>
                            <label for=\"lastname\" class=\"col-md-12 control-label margin-top-10\">  
                                Erro ao buscar infomações<br/>
                                CNPJ ou Captcha incorretos
                            </label>
                            <?php } ?>

                            <div class=\"form-group\">
                                <div>
                                    <input id=\"focus-signup\" class=\"form-control\" type=\"text\" placeholder=\"Insira seu CNPJ ou CPF\" name=\"cnpj\" required/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div>
                                    <input class=\"form-control\" type=\"text\" placeholder=\"Insira a imagem abaixo\" name=\"captcha_cnpj\" required/>
                                </div>
                                <div>
                                    <img id=\"captcha_cnpj\" src=\"<?php echo \$imagem_cnpj; ?>\" border=\"0\">
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(\$show == false){ ?>
                            <label for=\"lastname\" class=\"col-md-12 control-label margin-top-10\">  
                                Infomações recebidas com sucesso
                            </label>
                            <div class=\"form-group\">
                                <div class=\"pull-left\">
                                    <label for=\"lastname\" class=\"col-md-12 control-label margin-top-10\"> Nome Fantasia </label>
                                </div>
                                <div>
                                    <input id=\"focus-signup\" type=\"form-control\" class=\"form-control\" placeholder=\"Insira o nome fantasia\" required />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"pull-left\">
                                    <label for=\"lastname\" class=\"col-md-12 control-label margin-top-10\"> Senha </label>
                                </div>
                                <div>
                                    <input type=\"password\" class=\"form-control\" placeholder=\"Insira a senha\" required/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"pull-left\">
                                    <label for=\"lastname\" class=\"col-md-12 control-label margin-top-10\"> Confirmar senha </label>
                                </div>
                                <div>
                                    <input type=\"password\" class=\"form-control\" placeholder=\"Confirme sua senha\" required/>
                                </div>
                            </div>
                            <?php } ?>
                            <div class=\"col-xs-14 margin-top-20\">
                                <?php
                                echo \$createButton->CreateButtonHtml(2, \"\", \"Cadastar\", \"play\");

                                echo \$createButton->CreateButtonHtml(1, \"\", \"Cadastar\", \"hand-up\", \"onclick\", \"window.location.href='#signin'; Change_Color('#ccccff',1)\");
                                ?>
                            </div>
                            <div class=\"clearfix\"></div>
                            <div class=\"separator\">
                                <p class=\"change_link\"> Já é cadastrado ?  Clique em login</p>
                                <p class=\"change_link\"> Não tem CNPJ ?  Cadastre-se com o CPF</p>
                                <div class=\"clearfix\"></div><br />
                                <div>
                                    <h1><span class=\"glyphicon glyphicon-tree-deciduous\"></span> Navore Desenvolvimento</h1>
                                    <p>2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
        {% endblock body_content %}
        {% block js_footer %}
        
        {% endblock js_footer %}    
    </body>
{% endblock body %}", "login/login.html.twig", "C:\\wamp64\\www\\sparta\\app\\Resources\\views\\login\\login.html.twig");
    }
}
