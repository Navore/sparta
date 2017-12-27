<?php

/* menu/menuSuperior.html */
class __TwigTemplate_e9a6a433fd28a2d3d5906427dc3a94c56cd09f1df15a92b4c681ddae12cd02e9 extends Twig_Template
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
        echo "<!-- MENU SUPERIOR -->
<div class=\"top_nav\">
    <div class=\"nav_menu\">
        <nav>
            <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
            </div>
            <!-- PESQUISA --><!--
            <div class=\"title_right\">
                <div class=\"col-md-5 col-sm-5 col-xs-12 form-group top_search\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\">Go!</button>
                        </span>
                    </div>
                </div>
            </div>-->
            <!-- /FIM DA PESQUISA -->
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                    <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"../_Images/images/img.jpg\" alt=\"\">John Doe
                        <span class=\" fa fa-angle-down\"></span>
                    </a>
                    <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                        <li><a href=\"javascript:;\"> Profile</a></li>
                        <li>
                            <a href=\"javascript:;\">
                                <span class=\"badge bg-red pull-right\">50%</span>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li><a href=\"javascript:;\">Help</a></li>
                        <li><a href=\"login.html\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
                    </ul>
                </li>
                <li role=\"presentation\" class=\"dropdown\">
                    <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"fa fa-envelope-o\"></i>
                        <span class=\"badge bg-green\">6</span>
                    </a>
                    <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
                        <li>
                            <a>
                                <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                                <span>
                                    <span>John Smith</span>
                                    <span class=\"time\">3 mins ago</span>
                                </span>
                                <span class=\"message\">
                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                                <span>
                                    <span>John Smith</span>
                                    <span class=\"time\">3 mins ago</span>
                                </span>
                                <span class=\"message\">
                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                                <span>
                                    <span>John Smith</span>
                                    <span class=\"time\">3 mins ago</span>
                                </span>
                                <span class=\"message\">
                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                </span>
                            </a>
                        </li>
                        <li>
                            <div class=\"text-center\">
                                <a>
                                    <strong>See All Alerts</strong>
                                    <i class=\"fa fa-angle-right\"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /FIM DO MENU SUPERIOR -->";
    }

    public function getTemplateName()
    {
        return "menu/menuSuperior.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "menu/menuSuperior.html", "C:\\wamp64\\www\\sparta\\app\\Resources\\views\\menu\\menuSuperior.html");
    }
}
