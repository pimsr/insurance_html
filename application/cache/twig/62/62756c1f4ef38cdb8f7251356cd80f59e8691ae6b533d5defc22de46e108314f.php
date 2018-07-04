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
                                <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "contact", array()), "facebook", array()), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-fb.png\" alt=\"\"></a>
                                <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "contact", array()), "instagram", array()), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-ig.png\" alt=\"\"></a>
                                <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "contact", array()), "twitter", array()), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-tw.png\" alt=\"\"></a>
                            </div>
                        
                        </div>
                        <div class=\"col text-right lan\">
                            <span class=\"list-inline\">
                                <a class=\"";
        // line 53
        echo ((((isset($context["lang"]) ? $context["lang"] : null) == "th")) ? ("active") : (""));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, base_url("lang/change/th"), "html", null, true);
        echo "\">ไทย</a>
                                <a class=\"";
        // line 54
        echo ((((isset($context["lang"]) ? $context["lang"] : null) == "en")) ? ("active") : (""));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, base_url("lang/change/en"), "html", null, true);
        echo "\">EN</a>
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
        // line 83
        echo twig_escape_filter($this->env, base_url("info"), "html", null, true);
        echo "\">หน้ารวมประกัน</a></li>
                                        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "insurance", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 85
            echo "                                        <li><a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, (base_url("info/detail/") . $this->getAttribute($context["value"], "id", array())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                                    </ul>
                                </li>
                                <li class=\"nav-item ";
        // line 89
        echo ((((isset($context["page"]) ? $context["page"] : null) == "hospital")) ? ("active") : (""));
        echo "\">
                                    <a class=\"nav-link color-gray\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, base_url("hospital"), "html", null, true);
        echo "\">โรงพยาบาลลูก</a>
                                </li>
                                 <li class=\"nav-item ";
        // line 92
        echo ((((isset($context["page"]) ? $context["page"] : null) == "momandkids")) ? ("active") : (""));
        echo "\">
                                    <a class=\"nav-link color-gray\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, base_url("momandkids"), "html", null, true);
        echo "\">แม่และลูก</a>
                                </li>
                                <li class=\"nav-item ";
        // line 95
        echo ((((isset($context["page"]) ? $context["page"] : null) == "plan")) ? ("active") : (""));
        echo "\">
                                    <a class=\"nav-link color-gray\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, base_url("plan"), "html", null, true);
        echo "\">วางแผนการศึกษา</a>
                                </li>

                                <li class=\"nav-item dropdown ";
        // line 99
        echo ((((isset($context["page"]) ? $context["page"] : null) == "contact")) ? ("active") : (""));
        echo "\">
                                    <a class=\"nav-link dropdown-toggle color-gray\" href=\"";
        // line 100
        echo twig_escape_filter($this->env, base_url("contact"), "html", null, true);
        echo "\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        ติดต่อเรา
                                    </a>
                                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                        <li><a class=\"dropdown-item \" href=\"";
        // line 104
        echo twig_escape_filter($this->env, base_url("contact/agent"), "html", null, true);
        echo "\">ตัวแทนของเรา</a></li>
                                        ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "company", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 106
            echo "                                        <li><a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, (base_url("contact/agent/") . $this->getAttribute($context["value"], "id", array())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                                    </ul>
                                </li>
   
                            </ul>
                            <a class=\"form-inline my-2 my-lg-0 top-inline\" href=\"tel: ";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "contact", array()), "tel", array()), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-24hr.png\" alt=\"\">
                                <span class=\"color-violet\">";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "contact", array()), "tel", array()), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </nav>
                </div>
                
            </div>
        </section>

        ";
        // line 123
        $this->displayBlock('content', $context, $blocks);
        // line 124
        echo "
        <footer class=\"bg-gray content-p-top \">
            <div>
                <div class=\"container\">
                    <div class=\"stop\">
                        <div class=\"row footer-social\">
                            <div class=\"col-12 col-sm-6 col-md-3 link\">
                                <a href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "contact", array()), "facebook", array()), "html", null, true);
        echo "\" target=\"_blank\"><h4 class=\"title color-violet2\"><img draggable=\"false\"  alt=\"\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-fb-footer.png\"> <span>แชร์หน้านี้บนเฟสบุ๊ค</span></h4></a>
                            </div>
                            <div class=\"col-12 col-sm-6 col-md-3 link\">
                                <a href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "contact", array()), "line", array()), "html", null, true);
        echo "\" target=\"_blank\"><h4 class=\"title color-violet2\"><img draggable=\"false\"  alt=\"\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-line-footer.png\"> <span>pragunluk</span></h4></a>
                            </div>
                            <div class=\"col-12 col-sm-6 col-md-3 link\">
                                <a href=\"tel: ";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "contact", array()), "tel", array()), "html", null, true);
        echo "\"><h4 class=\"title color-violet2\"><img draggable=\"false\"  alt=\"\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-tel-footer.png\"> <span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "contact", array()), "tel", array()), "html", null, true);
        echo "</span></h4></a>
                            </div>
                            <div class=\"col-12 col-sm-6 col-md-3 link\">
                                <a href=\"mailto: ";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "contact", array()), "email", array()), "html", null, true);
        echo "\"><h4 class=\"title color-violet2\"><img draggable=\"false\"  alt=\"\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-message-footer.png\"> <span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "contact", array()), "email", array()), "html", null, true);
        echo "</span></h4></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class=\"container content-p-bottom \">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <img src=\"";
        // line 150
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
                        <a href=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "contact", array()), "facebook", array()), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-fb.png\" alt=\"\"></a>
                        <a href=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "contact", array()), "instagram", array()), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-ig.png\" alt=\"\"></a>
                        <a href=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "contact", array()), "twitter", array()), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-tw.png\" alt=\"\"></a>
                    </div>
                </div>
            </div>
        </footer>

        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        ";
        // line 222
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, base_url("assets/frontend/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, base_url("assets/frontend/js/owl.carousel.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, base_url("assets/frontend/js/aos.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, base_url("assets/frontend/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, base_url("assets/frontend/js/social-buttons.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 227
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

                    \$('#datepicker').datepicker({
                        uiLibrary: 'bootstrap4'
                    });
                });
            }
        </script>

        ";
        // line 252
        $this->displayBlock('js', $context, $blocks);
        // line 253
        echo "    </body>
</html>";
    }

    // line 25
    public function block_css($context, array $blocks = array())
    {
        echo " ";
    }

    // line 123
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 252
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
        return array (  500 => 252,  494 => 123,  488 => 25,  483 => 253,  481 => 252,  453 => 227,  449 => 226,  445 => 225,  441 => 224,  437 => 223,  432 => 222,  420 => 214,  414 => 213,  408 => 212,  343 => 150,  326 => 140,  316 => 137,  308 => 134,  300 => 131,  291 => 124,  289 => 123,  277 => 114,  273 => 113,  269 => 112,  263 => 108,  252 => 106,  248 => 105,  244 => 104,  237 => 100,  233 => 99,  227 => 96,  223 => 95,  218 => 93,  214 => 92,  209 => 90,  205 => 89,  201 => 87,  190 => 85,  186 => 84,  182 => 83,  174 => 78,  168 => 75,  164 => 74,  153 => 66,  149 => 65,  133 => 54,  127 => 53,  116 => 47,  110 => 46,  104 => 45,  83 => 26,  81 => 25,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  34 => 11,  22 => 1,);
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
                                <a href=\"{{ nav.contact.facebook }}\" target=\"_blank\"><img src=\"{{ link_img }}icon/icon-fb.png\" alt=\"\"></a>
                                <a href=\"{{ nav.contact.instagram }}\" target=\"_blank\"><img src=\"{{ link_img }}icon/icon-ig.png\" alt=\"\"></a>
                                <a href=\"{{ nav.contact.twitter }}\" target=\"_blank\"><img src=\"{{ link_img }}icon/icon-tw.png\" alt=\"\"></a>
                            </div>
                        
                        </div>
                        <div class=\"col text-right lan\">
                            <span class=\"list-inline\">
                                <a class=\"{{ lang == 'th' ? 'active' : '' }}\" href=\"{{ base_url('lang/change/th') }}\">ไทย</a>
                                <a class=\"{{ lang == 'en' ? 'active' : '' }}\" href=\"{{ base_url('lang/change/en') }}\">EN</a>
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
                                        {% for value in nav.insurance %}
                                        <li><a class=\"dropdown-item\" href=\"{{ base_url('info/detail/')~value.id }}\">{{ attribute(value,'title_'~lang) }}</a></li>
                                        {% endfor %}
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
                                        {% for value in nav.company %}
                                        <li><a class=\"dropdown-item\" href=\"{{ base_url('contact/agent/')~value.id }}\">{{ attribute(value,'title_'~lang) }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </li>
   
                            </ul>
                            <a class=\"form-inline my-2 my-lg-0 top-inline\" href=\"tel: {{ nav.contact.tel }}\">
                                <img src=\"{{ link_img }}icon/icon-24hr.png\" alt=\"\">
                                <span class=\"color-violet\">{{ nav.contact.tel }}</span>
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
                                <a href=\"{{ nav.contact.facebook }}\" target=\"_blank\"><h4 class=\"title color-violet2\"><img draggable=\"false\"  alt=\"\" src=\"{{ link_img }}icon/icon-fb-footer.png\"> <span>แชร์หน้านี้บนเฟสบุ๊ค</span></h4></a>
                            </div>
                            <div class=\"col-12 col-sm-6 col-md-3 link\">
                                <a href=\"{{ nav.contact.line }}\" target=\"_blank\"><h4 class=\"title color-violet2\"><img draggable=\"false\"  alt=\"\" src=\"{{ link_img }}icon/icon-line-footer.png\"> <span>pragunluk</span></h4></a>
                            </div>
                            <div class=\"col-12 col-sm-6 col-md-3 link\">
                                <a href=\"tel: {{ nav.contact.tel }}\"><h4 class=\"title color-violet2\"><img draggable=\"false\"  alt=\"\" src=\"{{ link_img }}icon/icon-tel-footer.png\"> <span>{{ nav.contact.tel }}</span></h4></a>
                            </div>
                            <div class=\"col-12 col-sm-6 col-md-3 link\">
                                <a href=\"mailto: {{ nav.contact.email }}\"><h4 class=\"title color-violet2\"><img draggable=\"false\"  alt=\"\" src=\"{{ link_img }}icon/icon-message-footer.png\"> <span>{{ nav.contact.email }}</span></h4></a>
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
                        <a href=\"{{ nav.contact.facebook }}\" target=\"_blank\"><img src=\"{{ link_img }}icon/icon-fb.png\" alt=\"\"></a>
                        <a href=\"{{ nav.contact.instagram }}\" target=\"_blank\"><img src=\"{{ link_img }}icon/icon-ig.png\" alt=\"\"></a>
                        <a href=\"{{ nav.contact.twitter }}\" target=\"_blank\"><img src=\"{{ link_img }}icon/icon-tw.png\" alt=\"\"></a>
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

                    \$('#datepicker').datepicker({
                        uiLibrary: 'bootstrap4'
                    });
                });
            }
        </script>

        {% block js %} {% endblock %}
    </body>
</html>", "layout.twig", "/Applications/MAMP/htdocs/insurance/application/views/template/layout.twig");
    }
}
