<?php

/* index.html */
class __TwigTemplate_9f47825d78b2b291eb1b9fcda767d0cbed1b743cc348a67c6ffd556262e2829e extends Twig_Template
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
        $__internal_4faf9e637f51652a6df74f0b4434e274e3e9c99990a621379d96a33886796cb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4faf9e637f51652a6df74f0b4434e274e3e9c99990a621379d96a33886796cb7->enter($__internal_4faf9e637f51652a6df74f0b4434e274e3e9c99990a621379d96a33886796cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html"));

        $__internal_3f351a00952e1e1a79af30e64573e0f5e8ba35bc8e3c8813215fdbb431beed33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f351a00952e1e1a79af30e64573e0f5e8ba35bc8e3c8813215fdbb431beed33->enter($__internal_3f351a00952e1e1a79af30e64573e0f5e8ba35bc8e3c8813215fdbb431beed33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href=\"../vendors/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"../vendors/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"../vendors/nprogress/nprogress.css\" rel=\"stylesheet\">
    <!-- jQuery custom content scroller -->
    <link href=\"../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css\" rel=\"stylesheet\"/>

    <!-- Custom Theme Style -->
    <link href=\"../build/css/custom.min.css\" rel=\"stylesheet\">
    
     <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
     
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mine.css"), "html", null, true);
        echo "\" />
  </head>

  <body class=\"nav-md footer_fixed\">
    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
          <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"index.html\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              <div class=\"profile_pic\">
                <img src=\"images/img.jpg\" alt=\"...\" class=\"img-circle profile_img\">
              </div>
              <div class=\"profile_info\">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
              <div class=\"menu_section\">
                <h3>General</h3>
                <ul class=\"nav side-menu\">
                  <li><a><i class=\"fa fa-home\"></i> Home <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"index.html\">Dashboard</a></li>
                      <li><a href=\"index2.html\">Dashboard2</a></li>
                      <li><a href=\"index3.html\">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-edit\"></i> Forms <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"form.html\">General Form</a></li>
                      <li><a href=\"form_advanced.html\">Advanced Components</a></li>
                      <li><a href=\"form_validation.html\">Form Validation</a></li>
                      <li><a href=\"form_wizards.html\">Form Wizard</a></li>
                      <li><a href=\"form_upload.html\">Form Upload</a></li>
                      <li><a href=\"form_buttons.html\">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-desktop\"></i> UI Elements <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"general_elements.html\">General Elements</a></li>
                      <li><a href=\"media_gallery.html\">Media Gallery</a></li>
                      <li><a href=\"typography.html\">Typography</a></li>
                      <li><a href=\"icons.html\">Icons</a></li>
                      <li><a href=\"glyphicons.html\">Glyphicons</a></li>
                      <li><a href=\"widgets.html\">Widgets</a></li>
                      <li><a href=\"invoice.html\">Invoice</a></li>
                      <li><a href=\"inbox.html\">Inbox</a></li>
                      <li><a href=\"calendar.html\">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-table\"></i> Tables <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"tables.html\">Tables</a></li>
                      <li><a href=\"tables_dynamic.html\">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-bar-chart-o\"></i> Data Presentation <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"chartjs.html\">Chart JS</a></li>
                      <li><a href=\"chartjs2.html\">Chart JS2</a></li>
                      <li><a href=\"morisjs.html\">Moris JS</a></li>
                      <li><a href=\"echarts.html\">ECharts</a></li>
                      <li><a href=\"other_charts.html\">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-clone\"></i>Layouts <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"fixed_sidebar.html\">Fixed Sidebar</a></li>
                      <li><a href=\"fixed_footer.html\">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class=\"menu_section\">
                <h3>Live On</h3>
                <ul class=\"nav side-menu\">
                  <li><a><i class=\"fa fa-bug\"></i> Additional Pages <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"e_commerce.html\">E-commerce</a></li>
                      <li><a href=\"projects.html\">Projects</a></li>
                      <li><a href=\"project_detail.html\">Project Detail</a></li>
                      <li><a href=\"contacts.html\">Contacts</a></li>
                      <li><a href=\"profile.html\">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-windows\"></i> Extras <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"page_403.html\">403 Error</a></li>
                      <li><a href=\"page_404.html\">404 Error</a></li>
                      <li><a href=\"page_500.html\">500 Error</a></li>
                      <li><a href=\"plain_page.html\">Plain Page</a></li>
                      <li><a href=\"login.html\">Login Page</a></li>
                      <li><a href=\"pricing_tables.html\">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-sitemap\"></i> Multilevel Menu <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                        <li><a href=\"#level1_1\">Level One</a>
                        <li><a>Level One<span class=\"fa fa-chevron-down\"></span></a>
                          <ul class=\"nav child_menu\">
                            <li class=\"sub_menu\"><a href=\"level2.html\">Level Two</a>
                            </li>
                            <li><a href=\"#level2_1\">Level Two</a>
                            </li>
                            <li><a href=\"#level2_2\">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href=\"#level1_2\">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href=\"javascript:void(0)\"><i class=\"fa fa-laptop\"></i> Landing Page <span class=\"label label-success pull-right\">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class=\"sidebar-footer hidden-small\">
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"login.html\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
          <div class=\"nav_menu\">
            <nav>
              <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
              </div>

              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"images/img.jpg\" alt=\"\">John Doe
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
        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">
            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3>Fixed Footer <small> Just add class <strong>footer_fixed</strong></small></h3>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class=\"pull-right\">
            Gentelella - Bootstrap Admin Template by <a href=\"https://colorlib.com\">Colorlib</a>
          </div>
          <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    
                                    
                        <script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datejs.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/flot.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/flot-plugins.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/skycons.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/icheck.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fastclick.js"), "html", null, true);
        echo "\"></script>    
                    <script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/gauge.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-progressbar.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/chart.js"), "html", null, true);
        echo "\"></script> 
                    <script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jqvmap.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-daterangepicker.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>    
                    <script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mine.js"), "html", null, true);
        echo "\"></script>    
                    
    
    <!-- JQMaps -->
    <script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
    <!-- dateJS -->
    <script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dateJS/build/date.js"), "html", null, true);
        echo "\"></script>
    <!-- datapicker -->
    <script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
        <!-- flot -->
    <script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/flot.curvedlines/curvedlines.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/flot.spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>";
        
        $__internal_4faf9e637f51652a6df74f0b4434e274e3e9c99990a621379d96a33886796cb7->leave($__internal_4faf9e637f51652a6df74f0b4434e274e3e9c99990a621379d96a33886796cb7_prof);

        
        $__internal_3f351a00952e1e1a79af30e64573e0f5e8ba35bc8e3c8813215fdbb431beed33->leave($__internal_3f351a00952e1e1a79af30e64573e0f5e8ba35bc8e3c8813215fdbb431beed33_prof);

    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  466 => 338,  462 => 337,  458 => 336,  453 => 334,  449 => 333,  445 => 332,  441 => 331,  437 => 330,  432 => 328,  428 => 327,  423 => 325,  418 => 323,  414 => 322,  410 => 321,  403 => 317,  399 => 316,  395 => 315,  391 => 314,  387 => 313,  383 => 312,  379 => 311,  375 => 310,  371 => 309,  367 => 308,  363 => 307,  359 => 306,  355 => 305,  351 => 304,  347 => 303,  71 => 30,  67 => 29,  63 => 28,  59 => 27,  55 => 26,  50 => 24,  25 => 1,);
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
<html lang=\"en\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href=\"../vendors/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"../vendors/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"../vendors/nprogress/nprogress.css\" rel=\"stylesheet\">
    <!-- jQuery custom content scroller -->
    <link href=\"../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css\" rel=\"stylesheet\"/>

    <!-- Custom Theme Style -->
    <link href=\"../build/css/custom.min.css\" rel=\"stylesheet\">
    
     <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\" />
     
            <link rel=\"stylesheet\" href=\"{{ asset('css/jquery.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/custom.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/mine.css') }}\" />
  </head>

  <body class=\"nav-md footer_fixed\">
    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
          <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"index.html\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              <div class=\"profile_pic\">
                <img src=\"images/img.jpg\" alt=\"...\" class=\"img-circle profile_img\">
              </div>
              <div class=\"profile_info\">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
              <div class=\"menu_section\">
                <h3>General</h3>
                <ul class=\"nav side-menu\">
                  <li><a><i class=\"fa fa-home\"></i> Home <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"index.html\">Dashboard</a></li>
                      <li><a href=\"index2.html\">Dashboard2</a></li>
                      <li><a href=\"index3.html\">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-edit\"></i> Forms <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"form.html\">General Form</a></li>
                      <li><a href=\"form_advanced.html\">Advanced Components</a></li>
                      <li><a href=\"form_validation.html\">Form Validation</a></li>
                      <li><a href=\"form_wizards.html\">Form Wizard</a></li>
                      <li><a href=\"form_upload.html\">Form Upload</a></li>
                      <li><a href=\"form_buttons.html\">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-desktop\"></i> UI Elements <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"general_elements.html\">General Elements</a></li>
                      <li><a href=\"media_gallery.html\">Media Gallery</a></li>
                      <li><a href=\"typography.html\">Typography</a></li>
                      <li><a href=\"icons.html\">Icons</a></li>
                      <li><a href=\"glyphicons.html\">Glyphicons</a></li>
                      <li><a href=\"widgets.html\">Widgets</a></li>
                      <li><a href=\"invoice.html\">Invoice</a></li>
                      <li><a href=\"inbox.html\">Inbox</a></li>
                      <li><a href=\"calendar.html\">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-table\"></i> Tables <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"tables.html\">Tables</a></li>
                      <li><a href=\"tables_dynamic.html\">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-bar-chart-o\"></i> Data Presentation <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"chartjs.html\">Chart JS</a></li>
                      <li><a href=\"chartjs2.html\">Chart JS2</a></li>
                      <li><a href=\"morisjs.html\">Moris JS</a></li>
                      <li><a href=\"echarts.html\">ECharts</a></li>
                      <li><a href=\"other_charts.html\">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-clone\"></i>Layouts <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"fixed_sidebar.html\">Fixed Sidebar</a></li>
                      <li><a href=\"fixed_footer.html\">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class=\"menu_section\">
                <h3>Live On</h3>
                <ul class=\"nav side-menu\">
                  <li><a><i class=\"fa fa-bug\"></i> Additional Pages <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"e_commerce.html\">E-commerce</a></li>
                      <li><a href=\"projects.html\">Projects</a></li>
                      <li><a href=\"project_detail.html\">Project Detail</a></li>
                      <li><a href=\"contacts.html\">Contacts</a></li>
                      <li><a href=\"profile.html\">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-windows\"></i> Extras <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"page_403.html\">403 Error</a></li>
                      <li><a href=\"page_404.html\">404 Error</a></li>
                      <li><a href=\"page_500.html\">500 Error</a></li>
                      <li><a href=\"plain_page.html\">Plain Page</a></li>
                      <li><a href=\"login.html\">Login Page</a></li>
                      <li><a href=\"pricing_tables.html\">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-sitemap\"></i> Multilevel Menu <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                        <li><a href=\"#level1_1\">Level One</a>
                        <li><a>Level One<span class=\"fa fa-chevron-down\"></span></a>
                          <ul class=\"nav child_menu\">
                            <li class=\"sub_menu\"><a href=\"level2.html\">Level Two</a>
                            </li>
                            <li><a href=\"#level2_1\">Level Two</a>
                            </li>
                            <li><a href=\"#level2_2\">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href=\"#level1_2\">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href=\"javascript:void(0)\"><i class=\"fa fa-laptop\"></i> Landing Page <span class=\"label label-success pull-right\">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class=\"sidebar-footer hidden-small\">
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"login.html\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
          <div class=\"nav_menu\">
            <nav>
              <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
              </div>

              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"images/img.jpg\" alt=\"\">John Doe
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
        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">
            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3>Fixed Footer <small> Just add class <strong>footer_fixed</strong></small></h3>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class=\"pull-right\">
            Gentelella - Bootstrap Admin Template by <a href=\"https://colorlib.com\">Colorlib</a>
          </div>
          <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    
                                    
                        <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
                    <script src=\"{{ asset('js/jquery.js') }}\"></script>
                    <script src=\"{{ asset('js/datejs.js') }}\"></script>
                    <script src=\"{{ asset('js/flot.js') }}\"></script>
                    <script src=\"{{ asset('js/flot-plugins.js') }}\"></script>
                    <script src=\"{{ asset('js/skycons.js') }}\"></script>
                    <script src=\"{{ asset('js/icheck.js') }}\"></script>
                    <script src=\"{{ asset('js/fastclick.js') }}\"></script>    
                    <script src=\"{{ asset('js/gauge.js') }}\"></script>
                    <script src=\"{{ asset('js/bootstrap-progressbar.js') }}\"></script>
                    <script src=\"{{ asset('js/chart.js') }}\"></script> 
                    <script src=\"{{ asset('js/jqvmap.js') }}\"></script>
                    <script src=\"{{ asset('js/bootstrap-daterangepicker.js') }}\"></script>
                    <script src=\"{{ asset('js/custom.js') }}\"></script>    
                    <script src=\"{{ asset('js/mine.js') }}\"></script>    
                    
    
    <!-- JQMaps -->
    <script src=\"{{ asset('js/jqvmap/dist/jquery.vmap.js') }}\"></script>
    <script src=\"{{ asset('js/jqvmap/dist/maps/jquery.vmap.world.js') }}\"></script>
    <script src=\"{{ asset('js/jqvmap/examples/js/jquery.vmap.sampledata.js') }}\"></script>
    <!-- dateJS -->
    <script src=\"{{ asset('js/dateJS/build/date.js') }}\"></script>
    <!-- datapicker -->
    <script src=\"{{ asset('js/bootstrap-daterangepicker/daterangepicker.js') }}\"></script>
    <script src=\"{{ asset('js/moment/min/moment.min.js') }}\"></script>
        <!-- flot -->
    <script src=\"{{ asset('js/flot/jquery.flot.js') }}\"></script>
    <script src=\"{{ asset('js/flot/jquery.flot.pie.js') }}\"></script>
    <script src=\"{{ asset('js/flot/jquery.flot.time.js') }}\"></script>
    <script src=\"{{ asset('js/flot/jquery.flot.stack.js') }}\"></script>
    <script src=\"{{ asset('js/flot/jquery.flot.resize.js') }}\"></script>
    
    <script src=\"{{ asset('js/flot.curvedlines/curvedlines.js') }}\"></script>
    <script src=\"{{ asset('js/flot.orderbars/js/jquery.flot.orderBars.js') }}\"></script>
    <script src=\"{{ asset('js/flot.spline/js/jquery.flot.spline.min.js') }}\"></script>
  </body>
</html>", "index.html", "C:\\wamp64\\www\\sparta\\app\\Resources\\views\\index.html");
    }
}
