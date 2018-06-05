<?php

/* layout.twig */
class __TwigTemplate_2a70f1b3c0b64f43b5cd997a228852ec08a4cc66d8bc26c326a24076a3d2d7de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>  
    <head>
        <meta charset=\"utf-8\">
        <title>ประกันลูก</title>
        <meta name=\"Description\" content=\"\">
        <meta name=\"keywords\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta charset=\"utf-8\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url("assets/frontend/css/bootstrap-reboot.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, base_url("assets/frontend/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url("assets/frontend/css/fonts.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, base_url("assets/frontend/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, base_url("assets/frontend/css/responsive.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, base_url("assets/frontend/css/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, base_url("assets/frontend/css/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, base_url("assets/frontend/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, base_url("assets/frontend/css/aos.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, base_url("assets/frontend/css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, base_url("assets/frontend/css/social-buttons.css"), "html", null, true);
        echo "\">
        
        <link href=\"https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css\" rel=\"stylesheet\" type=\"text/css\" />

        ";
        // line 25
        $this->displayBlock('css', $context, $blocks);
        // line 26
        echo "
        <!-- CSS for IE -->
        <!--[if lte IE 9]>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/ie.css\" />
        <![endif]-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src=\"assets/js/html5shiv.js\"></script>
        <script src=\"assets/js/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
        <section id=\"header\">
            <div class=\"topbar bg-violet \">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"social top-social\">
                                <a href=\"#\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-fb.png\" alt=\"\"></a>
                                <a href=\"#\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-ig.png\" alt=\"\"></a>
                                <a href=\"#\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-tw.png\" alt=\"\"></a>
                            </div>
                        
                        </div>
                        <div class=\"col text-right lan\">
                            <span class=\"list-inline\">
                                <a class=\"active\" href=\"#\">ไทย</a>
                                <a href=\"#\">EN</a>
                            </span>

                        </div>
                        
                    </div>
                </div>
            </div>
            <div class=\"main-menu\" id=\"menu\">
                <div class=\"container\">
                    <nav class=\"navbar navbar-expand-lg navbar-light \">
                        <a class=\"navbar-brand\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, base_url("home"), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "logo.png\" alt=\"\">
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>

                        <div class=\"collapse navbar-collapse color-gray\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav mr-auto \">
                                <li class=\"nav-item ";
        // line 74
        echo ((((isset($context["page"]) ? $context["page"] : null) == "home")) ? ("active") : (""));
        echo "\">
                                    <a class=\"nav-link color-gray\" href=\"";
        // line 75
        echo twig_escape_filter($this->env, base_url("home"), "html", null, true);
        echo "\">หน้าหลัก <span class=\"sr-only\">(current)</span></a>
                                </li>
                            
                                <li class=\"nav-item dropdown ";
        // line 78
        echo ((((isset($context["page"]) ? $context["page"] : null) == "info")) ? ("active") : (""));
        echo "\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        ประกันสุขภาพลูก
                                    </a>
                                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                        
                                        <li><a class=\"dropdown-item\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, base_url("info"), "html", null, true);
        echo "\">หน้ารวมประกัน</a></li>
                                        <li><a class=\"dropdown-item\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, base_url("info/detail/1"), "html", null, true);
        echo "\">ผ่อนหนักให้เป็นเบา</a></li>
                                        <li><a class=\"dropdown-item\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, base_url("info/detail/2"), "html", null, true);
        echo "\">เบากระเป๋า</a></li>
                                        <li><a class=\"dropdown-item\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, base_url("info/detail/3"), "html", null, true);
        echo "\">เบาใจเหมาจ่าย</a></li>
                                        <li><a class=\"dropdown-item\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, base_url("info/detail/4"), "html", null, true);
        echo "\">เบี้ยไม่ทิ้ง</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item ";
        // line 91
        echo ((((isset($context["page"]) ? $context["page"] : null) == "hospital")) ? ("active") : (""));
        echo "\">
                                    <a class=\"nav-link color-gray\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, base_url("hospital"), "html", null, true);
        echo "\">โรงพยาบาลลูก</a>
                                </li>
                                 <li class=\"nav-item ";
        // line 94
        echo ((((isset($context["page"]) ? $context["page"] : null) == "momandkids")) ? ("active") : (""));
        echo "\">
                                    <a class=\"nav-link color-gray\" href=\"";
        // line 95
        echo twig_escape_filter($this->env, base_url("momandkids"), "html", null, true);
        echo "\">แม่และลูก</a>
                                </li>
                                <li class=\"nav-item ";
        // line 97
        echo ((((isset($context["page"]) ? $context["page"] : null) == "plan")) ? ("active") : (""));
        echo "\">
                                    <a class=\"nav-link color-gray\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, base_url("plan"), "html", null, true);
        echo "\">วางแผนการศึกษา</a>
                                </li>

                                <li class=\"nav-item dropdown ";
        // line 101
        echo ((((isset($context["page"]) ? $context["page"] : null) == "contact")) ? ("active") : (""));
        echo "\">
                                    <a class=\"nav-link dropdown-toggle color-gray\" href=\"";
        // line 102
        echo twig_escape_filter($this->env, base_url("contact"), "html", null, true);
        echo "\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        ติดต่อเรา
                                    </a>
                                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                        <li><a class=\"dropdown-item \" href=\"";
        // line 106
        echo twig_escape_filter($this->env, base_url("contact/agent"), "html", null, true);
        echo "\">ตัวแทนของเรา</a></li>
                                        <li><a class=\"dropdown-item \" href=\"";
        // line 107
        echo twig_escape_filter($this->env, base_url("contact/agent/aia"), "html", null, true);
        echo "\">ตัวแทน เอ ไอ เอ</a></li>
                                        <li><a class=\"dropdown-item \" href=\"";
        // line 108
        echo twig_escape_filter($this->env, base_url("contact/agent/thailife"), "html", null, true);
        echo "\">ตัวแทน ไทยประกันชีวิต</a></li>
                                        <li><a class=\"dropdown-item \" href=\"";
        // line 109
        echo twig_escape_filter($this->env, base_url("contact/agent/prudential"), "html", null, true);
        echo "\">ตัวแทน พรูเด็นเชียล</a></li>
                                    
                                    </ul>
                                </li>
   
                            </ul>
                            <a class=\"form-inline my-2 my-lg-0 top-inline\">
                                <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-24hr.png\" alt=\"\">
                                <span class=\"color-violet\">215 (362) 4579</span>
                            </a>
                        </div>
                    </nav>
                </div>
                
            </div>
        </section>

        ";
        // line 126
        $this->displayBlock('content', $context, $blocks);
        // line 127
        echo "
        <footer class=\"bg-gray content-p-top \">
            <div>
                <div class=\"container\">
                    <div class=\"stop\">
                        <div class=\"row footer-social\">
                            <div class=\"col-12 col-sm-6 col-md-3 link\">
                                <h4 class=\"title color-violet2\"><img draggable=\"false\"  alt=\"\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-fb-footer.png\"> <span>แชร์หน้านี้บนเฟสบุ๊ค</span></h4>
                            </div>
                            <div class=\"col-12 col-sm-6 col-md-3 link\">
                                <h4 class=\"title color-violet2\"><img draggable=\"false\"  alt=\"\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-line-footer.png\"> <span>pragunluk</span></h4>
                            </div>
                            <div class=\"col-12 col-sm-6 col-md-3 link\">
                                <h4 class=\"title color-violet2\"><img draggable=\"false\"  alt=\"\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-tel-footer.png\"> <span>215 (362) 4579</span></h4>
                            </div>
                            <div class=\"col-12 col-sm-6 col-md-3 link\">
                                <h4 class=\"title color-violet2\"><img draggable=\"false\"  alt=\"\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-message-footer.png\"> <span>info@pragundek.com</span></h4>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class=\"container content-p-bottom \">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "logo.png\">
                        <p class=\"mt-2 footer-content\">เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง </p>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"row nav-footer\">
                            <div class=\"col-md-3\">
                                <h5>เกี่ยวกับเรา</h5>
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"#\">นิยามบริษัท</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">ทำไมต้องเรา</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"col-md-3\">
                                <h5>ประกันเด็ก</h5>
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"#\">เบากระเป๋า</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">เบาใจเหมาจ่าย</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">เบี้ยไม่ทิ้ง</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"col-md-3\">
                                <h5>โรงพยาบาลเด็ก</h5>
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"#\">นิยามบริษัท</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">ทำไมต้องเรา</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"col-md-3\">
                                <h5>ติดต่อสอบถาม</h5>
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"#\">นิยามบริษัท</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">ทำไมต้องเรา</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"copy-right bg-violet2\">
                <div class=\"container rel\">
                    <div class=\"text-center\">Copyright © 2018 Pragundek.com All Rights Reserved.</div>

                    <div class=\"social top-social social-footer\">
                        <a href=\"#\"><img src=\"";
        // line 215
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-fb.png\" alt=\"\"></a>
                        <a href=\"#\"><img src=\"";
        // line 216
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-ig.png\" alt=\"\"></a>
                        <a href=\"#\"><img src=\"";
        // line 217
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-tw.png\" alt=\"\"></a>
                    </div>
                </div>

               

            </div>
        </footer>

        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        ";
        // line 228
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, base_url("assets/frontend/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, base_url("assets/frontend/js/owl.carousel.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, base_url("assets/frontend/js/aos.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, base_url("assets/frontend/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, base_url("assets/frontend/js/social-buttons.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, base_url("assets/frontend/js/custom.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js\" type=\"text/javascript\"></script>

        <script>
            if (\$(window).width() > 992){
              jQuery(function(\$) {
                    \$('.navbar .dropdown').hover(function() {
                    \$(this).find('.dropdown-menu').first().stop(true, true).delay(0).slideDown();

                    }, function() {
                    \$(this).find('.dropdown-menu').first().stop(true, true).delay(0).slideUp();

                    });

                    \$('.navbar .dropdown > a').click(function(){
                    location.href = this.href;
                    });

                });
            }
        </script>

        ";
        // line 255
        $this->displayBlock('js', $context, $blocks);
        // line 256
        echo "    </body>
</html>";
    }

    // line 25
    public function block_css($context, array $blocks = array())
    {
        echo " ";
    }

    // line 126
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 255
    public function block_js($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 255,  450 => 126,  444 => 25,  439 => 256,  437 => 255,  412 => 233,  408 => 232,  404 => 231,  400 => 230,  396 => 229,  391 => 228,  378 => 217,  374 => 216,  370 => 215,  305 => 153,  292 => 143,  286 => 140,  280 => 137,  274 => 134,  265 => 127,  263 => 126,  250 => 116,  240 => 109,  236 => 108,  232 => 107,  228 => 106,  221 => 102,  217 => 101,  211 => 98,  207 => 97,  202 => 95,  198 => 94,  193 => 92,  189 => 91,  183 => 88,  179 => 87,  175 => 86,  171 => 85,  167 => 84,  158 => 78,  152 => 75,  148 => 74,  137 => 66,  133 => 65,  112 => 47,  108 => 46,  104 => 45,  83 => 26,  81 => 25,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  34 => 11,  22 => 1,);
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
<html>  
    <head>
        <meta charset=\"utf-8\">
        <title>ประกันลูก</title>
        <meta name=\"Description\" content=\"\">
        <meta name=\"keywords\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta charset=\"utf-8\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url('assets/frontend/css/bootstrap-reboot.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url('assets/frontend/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url('assets/frontend/css/fonts.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url('assets/frontend/css/style.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url('assets/frontend/css/responsive.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ base_url('assets/frontend/css/animate.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ base_url('assets/frontend/css/font-awesome/css/font-awesome.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ base_url('assets/frontend/css/owl.carousel.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ base_url('assets/frontend/css/aos.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ base_url('assets/frontend/css/owl.theme.default.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ base_url('assets/frontend/css/social-buttons.css') }}\">
        
        <link href=\"https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css\" rel=\"stylesheet\" type=\"text/css\" />

        {% block css %} {% endblock %}

        <!-- CSS for IE -->
        <!--[if lte IE 9]>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/ie.css\" />
        <![endif]-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src=\"assets/js/html5shiv.js\"></script>
        <script src=\"assets/js/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
        <section id=\"header\">
            <div class=\"topbar bg-violet \">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"social top-social\">
                                <a href=\"#\"><img src=\"{{ link_img }}icon/icon-fb.png\" alt=\"\"></a>
                                <a href=\"#\"><img src=\"{{ link_img }}icon/icon-ig.png\" alt=\"\"></a>
                                <a href=\"#\"><img src=\"{{ link_img }}icon/icon-tw.png\" alt=\"\"></a>
                            </div>
                        
                        </div>
                        <div class=\"col text-right lan\">
                            <span class=\"list-inline\">
                                <a class=\"active\" href=\"#\">ไทย</a>
                                <a href=\"#\">EN</a>
                            </span>

                        </div>
                        
                    </div>
                </div>
            </div>
            <div class=\"main-menu\" id=\"menu\">
                <div class=\"container\">
                    <nav class=\"navbar navbar-expand-lg navbar-light \">
                        <a class=\"navbar-brand\" href=\"{{ base_url('home') }}\">
                            <img src=\"{{ link_img }}logo.png\" alt=\"\">
                        </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>

                        <div class=\"collapse navbar-collapse color-gray\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav mr-auto \">
                                <li class=\"nav-item {{ page == 'home' ? 'active' : '' }}\">
                                    <a class=\"nav-link color-gray\" href=\"{{ base_url('home') }}\">หน้าหลัก <span class=\"sr-only\">(current)</span></a>
                                </li>
                            
                                <li class=\"nav-item dropdown {{ page == 'info' ? 'active' : '' }}\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        ประกันสุขภาพลูก
                                    </a>
                                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                        
                                        <li><a class=\"dropdown-item\" href=\"{{ base_url('info') }}\">หน้ารวมประกัน</a></li>
                                        <li><a class=\"dropdown-item\" href=\"{{ base_url('info/detail/1') }}\">ผ่อนหนักให้เป็นเบา</a></li>
                                        <li><a class=\"dropdown-item\" href=\"{{ base_url('info/detail/2') }}\">เบากระเป๋า</a></li>
                                        <li><a class=\"dropdown-item\" href=\"{{ base_url('info/detail/3') }}\">เบาใจเหมาจ่าย</a></li>
                                        <li><a class=\"dropdown-item\" href=\"{{ base_url('info/detail/4') }}\">เบี้ยไม่ทิ้ง</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item {{ page == 'hospital' ? 'active' : '' }}\">
                                    <a class=\"nav-link color-gray\" href=\"{{ base_url('hospital') }}\">โรงพยาบาลลูก</a>
                                </li>
                                 <li class=\"nav-item {{ page == 'momandkids' ? 'active' : '' }}\">
                                    <a class=\"nav-link color-gray\" href=\"{{ base_url('momandkids') }}\">แม่และลูก</a>
                                </li>
                                <li class=\"nav-item {{ page == 'plan' ? 'active' : '' }}\">
                                    <a class=\"nav-link color-gray\" href=\"{{ base_url('plan') }}\">วางแผนการศึกษา</a>
                                </li>

                                <li class=\"nav-item dropdown {{ page == 'contact' ? 'active' : '' }}\">
                                    <a class=\"nav-link dropdown-toggle color-gray\" href=\"{{ base_url('contact') }}\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        ติดต่อเรา
                                    </a>
                                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                        <li><a class=\"dropdown-item \" href=\"{{ base_url('contact/agent') }}\">ตัวแทนของเรา</a></li>
                                        <li><a class=\"dropdown-item \" href=\"{{ base_url('contact/agent/aia') }}\">ตัวแทน เอ ไอ เอ</a></li>
                                        <li><a class=\"dropdown-item \" href=\"{{ base_url('contact/agent/thailife') }}\">ตัวแทน ไทยประกันชีวิต</a></li>
                                        <li><a class=\"dropdown-item \" href=\"{{ base_url('contact/agent/prudential') }}\">ตัวแทน พรูเด็นเชียล</a></li>
                                    
                                    </ul>
                                </li>
   
                            </ul>
                            <a class=\"form-inline my-2 my-lg-0 top-inline\">
                                <img src=\"{{ link_img }}icon/icon-24hr.png\" alt=\"\">
                                <span class=\"color-violet\">215 (362) 4579</span>
                            </a>
                        </div>
                    </nav>
                </div>
                
            </div>
        </section>

        {% block content %} {% endblock %}

        <footer class=\"bg-gray content-p-top \">
            <div>
                <div class=\"container\">
                    <div class=\"stop\">
                        <div class=\"row footer-social\">
                            <div class=\"col-12 col-sm-6 col-md-3 link\">
                                <h4 class=\"title color-violet2\"><img draggable=\"false\"  alt=\"\" src=\"{{ link_img }}icon/icon-fb-footer.png\"> <span>แชร์หน้านี้บนเฟสบุ๊ค</span></h4>
                            </div>
                            <div class=\"col-12 col-sm-6 col-md-3 link\">
                                <h4 class=\"title color-violet2\"><img draggable=\"false\"  alt=\"\" src=\"{{ link_img }}icon/icon-line-footer.png\"> <span>pragunluk</span></h4>
                            </div>
                            <div class=\"col-12 col-sm-6 col-md-3 link\">
                                <h4 class=\"title color-violet2\"><img draggable=\"false\"  alt=\"\" src=\"{{ link_img }}icon/icon-tel-footer.png\"> <span>215 (362) 4579</span></h4>
                            </div>
                            <div class=\"col-12 col-sm-6 col-md-3 link\">
                                <h4 class=\"title color-violet2\"><img draggable=\"false\"  alt=\"\" src=\"{{ link_img }}icon/icon-message-footer.png\"> <span>info@pragundek.com</span></h4>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class=\"container content-p-bottom \">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <img src=\"{{ link_img }}logo.png\">
                        <p class=\"mt-2 footer-content\">เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง </p>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"row nav-footer\">
                            <div class=\"col-md-3\">
                                <h5>เกี่ยวกับเรา</h5>
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"#\">นิยามบริษัท</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">ทำไมต้องเรา</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"col-md-3\">
                                <h5>ประกันเด็ก</h5>
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"#\">เบากระเป๋า</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">เบาใจเหมาจ่าย</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">เบี้ยไม่ทิ้ง</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"col-md-3\">
                                <h5>โรงพยาบาลเด็ก</h5>
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"#\">นิยามบริษัท</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">ทำไมต้องเรา</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"col-md-3\">
                                <h5>ติดต่อสอบถาม</h5>
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"#\">นิยามบริษัท</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">ทำไมต้องเรา</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"copy-right bg-violet2\">
                <div class=\"container rel\">
                    <div class=\"text-center\">Copyright © 2018 Pragundek.com All Rights Reserved.</div>

                    <div class=\"social top-social social-footer\">
                        <a href=\"#\"><img src=\"{{ link_img }}icon/icon-fb.png\" alt=\"\"></a>
                        <a href=\"#\"><img src=\"{{ link_img }}icon/icon-ig.png\" alt=\"\"></a>
                        <a href=\"#\"><img src=\"{{ link_img }}icon/icon-tw.png\" alt=\"\"></a>
                    </div>
                </div>

               

            </div>
        </footer>

        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        {# <script src=\"{{ base_url('assets/frontend/js/jquery-migrate-1.0.0.js') }}\"></script> #}
        <script src=\"{{ base_url('assets/frontend/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ base_url('assets/frontend/js/owl.carousel.js') }}\"></script>
        <script src=\"{{ base_url('assets/frontend/js/aos.js') }}\"></script>
        <script src=\"{{ base_url('assets/frontend/js/jquery.sticky.js') }}\"></script>
        <script src=\"{{ base_url('assets/frontend/js/social-buttons.js') }}\"></script>
        <script src=\"{{ base_url('assets/frontend/js/custom.js') }}\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js\" type=\"text/javascript\"></script>

        <script>
            if (\$(window).width() > 992){
              jQuery(function(\$) {
                    \$('.navbar .dropdown').hover(function() {
                    \$(this).find('.dropdown-menu').first().stop(true, true).delay(0).slideDown();

                    }, function() {
                    \$(this).find('.dropdown-menu').first().stop(true, true).delay(0).slideUp();

                    });

                    \$('.navbar .dropdown > a').click(function(){
                    location.href = this.href;
                    });

                });
            }
        </script>

        {% block js %} {% endblock %}
    </body>
</html>", "layout.twig", "/Applications/MAMP/htdocs/insurance/application/views/template/layout.twig");
    }
}
