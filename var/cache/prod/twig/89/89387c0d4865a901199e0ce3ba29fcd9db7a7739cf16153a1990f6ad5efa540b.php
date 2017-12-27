<?php

/* base/base.html.twig */
class __TwigTemplate_04474f31ce610e4ae9b61be54a64d4fc5e93a1c41cb4c6753bdcd53fc0fb6e15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'icon_head' => array($this, 'block_icon_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'js_head' => array($this, 'block_js_head'),
            'body' => array($this, 'block_body'),
            'body_menu' => array($this, 'block_body_menu'),
            'body_content' => array($this, 'block_body_content'),
            'page_head' => array($this, 'block_page_head'),
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
            'footer' => array($this, 'block_footer'),
            'js_footer' => array($this, 'block_js_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        </title>
        ";
        // line 10
        $this->displayBlock('icon_head', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        
        ";
        // line 23
        $this->displayBlock('js_head', $context, $blocks);
        // line 25
        echo "  
    </head>
    ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "            Bem vindo ao Sparta!
            ";
    }

    // line 10
    public function block_icon_head($context, array $blocks = array())
    {
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagens/icon.jpg"), "html", null, true);
        echo "\" />
        ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mine.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 23
    public function block_js_head($context, array $blocks = array())
    {
        // line 24
        echo "        
        ";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 28
        echo "    <body class=\"nav-md footer_fixed\">
        <div class=\"container body\">
            <div class=\"main_container\">
                ";
        // line 31
        $this->displayBlock('body_menu', $context, $blocks);
        // line 35
        echo "
                ";
        // line 36
        $this->displayBlock('body_content', $context, $blocks);
        // line 55
        echo "
                ";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "
                ";
        // line 65
        $this->displayBlock('js_footer', $context, $blocks);
        // line 71
        echo "            </div>
        </div>
    </body>
    ";
    }

    // line 31
    public function block_body_menu($context, array $blocks = array())
    {
        // line 32
        echo "                ";
        echo twig_include($this->env, $context, "menu/menuLateral.html");
        echo "
                ";
        // line 33
        echo twig_include($this->env, $context, "menu/menuSuperior.html");
        echo "
                ";
    }

    // line 36
    public function block_body_content($context, array $blocks = array())
    {
        // line 37
        echo "                <div class=\"right_col\" role=\"main\">
                    <div class=\"\">
                        ";
        // line 39
        $this->displayBlock('page_head', $context, $blocks);
        // line 48
        echo "                        
                        ";
        // line 49
        $this->displayBlock('page_content', $context, $blocks);
        // line 52
        echo "                    </div>
                </div>
                ";
    }

    // line 39
    public function block_page_head($context, array $blocks = array())
    {
        // line 40
        echo "                        <div class=\"page-title\">
                            <div class=\"title_left\">
                                ";
        // line 42
        $this->displayBlock('page_title', $context, $blocks);
        // line 45
        echo "                            </div>
                        </div>
                        ";
    }

    // line 42
    public function block_page_title($context, array $blocks = array())
    {
        // line 43
        echo "                                <h3>Base</h3>
                                ";
    }

    // line 49
    public function block_page_content($context, array $blocks = array())
    {
        // line 50
        echo "
                        ";
    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        // line 57
        echo "                <footer>
                    <div class=\"pull-right\">
                        Gentelella - Bootstrap Admin Template by <a href=\"https://colorlib.com\">Colorlib</a>
                    </div>
                    <div class=\"clearfix\"></div>
                </footer>
                ";
    }

    // line 65
    public function block_js_footer($context, array $blocks = array())
    {
        // line 66
        echo "                <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script> 
                <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>    
                <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mine.js"), "html", null, true);
        echo "\"></script>        
                ";
    }

    public function getTemplateName()
    {
        return "base/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  248 => 69,  244 => 68,  240 => 67,  235 => 66,  232 => 65,  222 => 57,  219 => 56,  214 => 50,  211 => 49,  206 => 43,  203 => 42,  197 => 45,  195 => 42,  191 => 40,  188 => 39,  182 => 52,  180 => 49,  177 => 48,  175 => 39,  171 => 37,  168 => 36,  162 => 33,  157 => 32,  154 => 31,  147 => 71,  145 => 65,  142 => 64,  140 => 56,  137 => 55,  135 => 36,  132 => 35,  130 => 31,  125 => 28,  122 => 27,  117 => 24,  114 => 23,  108 => 20,  104 => 19,  100 => 18,  96 => 17,  92 => 16,  87 => 15,  84 => 14,  77 => 11,  74 => 10,  69 => 7,  66 => 6,  61 => 75,  59 => 27,  55 => 25,  53 => 23,  50 => 22,  48 => 14,  45 => 13,  43 => 10,  40 => 9,  38 => 6,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base/base.html.twig", "C:\\wamp64\\www\\sparta\\app\\Resources\\views\\base\\base.html.twig");
    }
}
