<?php

/* @f/momandkids.twig */
class __TwigTemplate_268ebe7b922014658ccbdf9455fd959b3403dbaf797741fd37322f712cb90335 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "@f/momandkids.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo " \t<section class=\"banner\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "banner-main3.png');\">
 \t\t<div class=\"banner-caption\">
 \t\t\t<h2>แม่และลูก</h2>
 \t\t</div>
 \t\t<div class=\"overlay\"></div>
 \t</section>
  <section id=\"news\" class=\"content-p-top\">
        <div class=\"container\">
          <div class=\"row d-flex\">
            <div class=\"col-md-8 news-wrapper order-2\">
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    <div class=\"card\" >
                        <div class=\"card-img\">
                            <img class=\"card-img-top\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "new1.png\" alt=\"Card image cap\">
                            <div class=\"news-date\">
                               <div> 07 <br> ม.ค</div>
                            </div>
                        </div>
                        <div class=\"card-body text-left\">
                            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, base_url("momandkids/detail"), "html", null, true);
        echo "\">
                                 <h5 class=\"card-title\">โลเล็ม อิปซัม (lorem ipsum)</h5>
                                 <p class=\"card-text\">เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า ข้อความโลเร็ม ...</p>
                                 <p class=\"color-violet2\">อ่านเพิ่ม <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-right.png\"></p>
                            </a>
                          </div>
                      </div>
                  </div>

                  <div class=\"col-md-6\">
                    <div class=\"card\" >
                        <div class=\"card-img\">
                            <img class=\"card-img-top\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "new1.png\" alt=\"Card image cap\">
                            <div class=\"news-date\">
                               <div> 07 <br> ม.ค</div>
                            </div>
                        </div>
                        <div class=\"card-body text-left\">
                            <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, base_url("momandkids/detail"), "html", null, true);
        echo "\">
                                 <h5 class=\"card-title\">โลเล็ม อิปซัม (lorem ipsum)</h5>
                                 <p class=\"card-text\">เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า ข้อความโลเร็ม ...</p>
                                 <p class=\"color-violet2\">อ่านเพิ่ม <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-right.png\"></p>
                            </a>
                          </div>
                      </div>
                  </div>

                  <div class=\"col-md-6\">
                    <div class=\"card\" >
                        <div class=\"card-img\">
                            <img class=\"card-img-top\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "new1.png\" alt=\"Card image cap\">
                            <div class=\"news-date\">
                               <div> 07 <br> ม.ค</div>
                            </div>
                        </div>
                        <div class=\"card-body text-left\">
                          <h5 class=\"card-title\">โลเล็ม อิปซัม (lorem ipsum)</h5>
                          <p class=\"card-text\">เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า ข้อความโลเร็ม ...</p>
                          <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, base_url("momandkids/detail"), "html", null, true);
        echo "\" class=\"\">อ่านเพิ่ม</a>
                        </div>
                      </div>
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"card\" >
                        <div class=\"card-img\">
                            <img class=\"card-img-top\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "new1.png\" alt=\"Card image cap\">
                            <div class=\"news-date\">
                               <div> 07 <br> ม.ค</div>
                            </div>
                        </div>
                        <div class=\"card-body text-left\">
                            <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, base_url("momandkids/detail"), "html", null, true);
        echo "\">
                                 <h5 class=\"card-title\">โลเล็ม อิปซัม (lorem ipsum)</h5>
                                 <p class=\"card-text\">เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า ข้อความโลเร็ม ...</p>
                                 <p class=\"color-violet2\">อ่านเพิ่ม <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-right.png\"></p>
                            </a>
                          </div>
                      </div>
                  </div>

                  <div class=\"col-md-6\">
                    <div class=\"card\" >
                        <div class=\"card-img\">
                            <img class=\"card-img-top\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "new1.png\" alt=\"Card image cap\">
                            <div class=\"news-date\">
                               <div> 07 <br> ม.ค</div>
                            </div>
                        </div>
                        <div class=\"card-body text-left\">
                            <a href=\"";
        // line 93
        echo twig_escape_filter($this->env, base_url("momandkids/detail"), "html", null, true);
        echo "\">
                                 <h5 class=\"card-title\">โลเล็ม อิปซัม (lorem ipsum)</h5>
                                 <p class=\"card-text\">เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า ข้อความโลเร็ม ...</p>
                                 <p class=\"color-violet2\">อ่านเพิ่ม <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-right.png\"></p>
                            </a>
                          </div>
                      </div>
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"card\" >
                        <div class=\"card-img\">
                            <img class=\"card-img-top\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "new1.png\" alt=\"Card image cap\">
                            <div class=\"news-date\">
                               <div> 07 <br> ม.ค</div>
                            </div>
                        </div>
                        <div class=\"card-body text-left\">
                            <a href=\"";
        // line 110
        echo twig_escape_filter($this->env, base_url("momandkids/detail"), "html", null, true);
        echo "\">
                                 <h5 class=\"card-title\">โลเล็ม อิปซัม (lorem ipsum)</h5>
                                 <p class=\"card-text\">เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า ข้อความโลเร็ม ...</p>
                                 <p class=\"color-violet2\">อ่านเพิ่ม <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-right.png\"></p>
                            </a>
                          </div>
                      </div>
                  </div>
                </div>

                <div class=\"row news-result mt-4\">
                  <div class=\"col\">
                    <nav aria-label=\"Page navigation example\">
                      <ul class=\"pagination\">
                        <li class=\"page-item disabled\">
                          <a class=\"page-link\" href=\"#\" tabindex=\"-1\">ย้อนกลับ</a>
                        </li>
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                        <li class=\"page-item active\"><a class=\"page-link \" href=\"#\">3</a></li>
                        <li class=\"page-item\">
                          <a class=\"page-link\" href=\"#\">ถัดไป <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-right.png\"></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                  <div class=\"col text-right\"><span>Page 1 of 60 results</span></div>
                </div>
            </div><!-- right -->
            <div class=\"col-md-4 order-1 c-left\">
                <div class=\"news-group\">
                  <div class=\"title line\">
                    <h5 class=\"color-violet2\">ค้นหาบทความ</h5>
                    <input type=\"text\" class=\"form-custom search\" id=\"\" placeholder=\"ค้นหาโรงพยาบาล\">
                  </div>
                </div><!-- news-group -->

                <div class=\"news-group\">
                  <div class=\"title line\">
                    <h5 class=\"color-violet2\">หมวดหมู่บทความ</h5>
                  </div>

                  <div>
                    <p><a href=\"#\">โลเล็ม อิปซัม. <span class=\"color-violet2 float-right\">(07)</span></a></p>
                    <p><a href=\"#\">โลเล็ม อิปซัม. <span class=\"color-violet2 float-right\">(07)</span></a></p>
                    <p><a href=\"#\">โลเล็ม อิปซัม. <span class=\"color-violet2 float-right\">(07)</span></a></p>
                    <p><a href=\"#\">โลเล็ม อิปซัม. <span class=\"color-violet2 float-right\">(07)</span></a></p>
                  </div>
                </div><!-- news-group -->

                <div class=\"news-group\">
                  <div class=\"title line\">
                    <h5 class=\"color-violet2\">บทความล่าสุด</h5>
                  </div>

                  <div class=\"news-recent\">
                    <div class=\"media\">
                      <img width=\"100\" class=\"mr-3\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "new1.png\" alt=\"\">
                      <div class=\"media-body\">
                        <h5 class=\"mt-0\">2 June 2017</h5>
                        <p>เป็นข้อความแทนที่ (placeholder </p>
                        <a href=\"#\" class=\"\">อ่านเพิ่ม</a>
                      </div>
                    </div>
                  </div>

                  <div class=\"news-recent\">
                    <div class=\"media\">
                      <img width=\"100\" class=\"mr-3\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "new1.png\" alt=\"\">
                      <div class=\"media-body\">
                        <h5 class=\"mt-0\">2 June 2017</h5>
                        <p>เป็นข้อความแทนที่ (placeholder </p>
                        <a href=\"#\" class=\"\">อ่านเพิ่ม</a>
                      </div>
                    </div>
                  </div>

                  <div class=\"news-recent\">
                    <div class=\"media\">
                      <img width=\"100\" class=\"mr-3\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "new1.png\" alt=\"\">
                      <div class=\"media-body\">
                        <h5 class=\"mt-0\">2 June 2017</h5>
                        <p>เป็นข้อความแทนที่ (placeholder </p>
                        <a href=\"#\" class=\"\">อ่านเพิ่ม</a>
                      </div>
                    </div>
                  </div>

                </div><!-- news-group -->

                <div class=\"news-group\">
                  <div class=\"title line\">
                    <h5 class=\"color-violet2\">ปีที่โพสต์</h5>
                  </div>

                  <div>
                    <p><a href=\"#\">โลเล็ม อิปซัม. <span class=\"color-violet2 float-right\">(07)</span></a></p>
                    <p><a href=\"#\">โลเล็ม อิปซัม. <span class=\"color-violet2 float-right\">(07)</span></a></p>
                    <p><a href=\"#\">โลเล็ม อิปซัม. <span class=\"color-violet2 float-right\">(07)</span></a></p>
                    <p><a href=\"#\">โลเล็ม อิปซัม. <span class=\"color-violet2 float-right\">(07)</span></a></p>
                  </div>
                </div><!-- news-group -->

                <div class=\"news-group\">
                  <div class=\"title line\">
                    <h5 class=\"color-violet2\">โฆษณา</h5>
                  </div>

                  <div>
                    <div class=\"owl-carousel owl-theme\">
                        <div class=\"item\"><img src=\"";
        // line 220
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "new1.png\"></div>
                        <div class=\"item\"><img src=\"";
        // line 221
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "new1.png\"></div>
                        <div class=\"item\"><img src=\"";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "new1.png\"></div>
                    </div>
                  </div>
                </div><!-- news-group -->


            </div><!-- left -->
          </div>


        </div>
          
     </div>
     
  </section>
";
    }

    // line 239
    public function block_js($context, array $blocks = array())
    {
        // line 240
        echo "  <script>
    \$('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
  </script>
";
    }

    public function getTemplateName()
    {
        return "@f/momandkids.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 240,  343 => 239,  323 => 222,  319 => 221,  315 => 220,  281 => 189,  267 => 178,  253 => 167,  214 => 131,  193 => 113,  187 => 110,  178 => 104,  167 => 96,  161 => 93,  152 => 87,  140 => 78,  134 => 75,  125 => 69,  115 => 62,  104 => 54,  92 => 45,  86 => 42,  77 => 36,  65 => 27,  59 => 24,  50 => 18,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.twig\" %}

{% block content %}
 \t<section class=\"banner\" style=\"background-image: url('{{ link_img }}banner-main3.png');\">
 \t\t<div class=\"banner-caption\">
 \t\t\t<h2>แม่และลูก</h2>
 \t\t</div>
 \t\t<div class=\"overlay\"></div>
 \t</section>
  <section id=\"news\" class=\"content-p-top\">
        <div class=\"container\">
          <div class=\"row d-flex\">
            <div class=\"col-md-8 news-wrapper order-2\">
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    <div class=\"card\" >
                        <div class=\"card-img\">
                            <img class=\"card-img-top\" src=\"{{ link_img }}new1.png\" alt=\"Card image cap\">
                            <div class=\"news-date\">
                               <div> 07 <br> ม.ค</div>
                            </div>
                        </div>
                        <div class=\"card-body text-left\">
                            <a href=\"{{ base_url('momandkids/detail') }}\">
                                 <h5 class=\"card-title\">โลเล็ม อิปซัม (lorem ipsum)</h5>
                                 <p class=\"card-text\">เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า ข้อความโลเร็ม ...</p>
                                 <p class=\"color-violet2\">อ่านเพิ่ม <img src=\"{{ link_img }}icon/icon-right.png\"></p>
                            </a>
                          </div>
                      </div>
                  </div>

                  <div class=\"col-md-6\">
                    <div class=\"card\" >
                        <div class=\"card-img\">
                            <img class=\"card-img-top\" src=\"{{ link_img }}new1.png\" alt=\"Card image cap\">
                            <div class=\"news-date\">
                               <div> 07 <br> ม.ค</div>
                            </div>
                        </div>
                        <div class=\"card-body text-left\">
                            <a href=\"{{ base_url('momandkids/detail') }}\">
                                 <h5 class=\"card-title\">โลเล็ม อิปซัม (lorem ipsum)</h5>
                                 <p class=\"card-text\">เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า ข้อความโลเร็ม ...</p>
                                 <p class=\"color-violet2\">อ่านเพิ่ม <img src=\"{{ link_img }}icon/icon-right.png\"></p>
                            </a>
                          </div>
                      </div>
                  </div>

                  <div class=\"col-md-6\">
                    <div class=\"card\" >
                        <div class=\"card-img\">
                            <img class=\"card-img-top\" src=\"{{ link_img }}new1.png\" alt=\"Card image cap\">
                            <div class=\"news-date\">
                               <div> 07 <br> ม.ค</div>
                            </div>
                        </div>
                        <div class=\"card-body text-left\">
                          <h5 class=\"card-title\">โลเล็ม อิปซัม (lorem ipsum)</h5>
                          <p class=\"card-text\">เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า ข้อความโลเร็ม ...</p>
                          <a href=\"{{ base_url('momandkids/detail') }}\" class=\"\">อ่านเพิ่ม</a>
                        </div>
                      </div>
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"card\" >
                        <div class=\"card-img\">
                            <img class=\"card-img-top\" src=\"{{ link_img }}new1.png\" alt=\"Card image cap\">
                            <div class=\"news-date\">
                               <div> 07 <br> ม.ค</div>
                            </div>
                        </div>
                        <div class=\"card-body text-left\">
                            <a href=\"{{ base_url('momandkids/detail') }}\">
                                 <h5 class=\"card-title\">โลเล็ม อิปซัม (lorem ipsum)</h5>
                                 <p class=\"card-text\">เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า ข้อความโลเร็ม ...</p>
                                 <p class=\"color-violet2\">อ่านเพิ่ม <img src=\"{{ link_img }}icon/icon-right.png\"></p>
                            </a>
                          </div>
                      </div>
                  </div>

                  <div class=\"col-md-6\">
                    <div class=\"card\" >
                        <div class=\"card-img\">
                            <img class=\"card-img-top\" src=\"{{ link_img }}new1.png\" alt=\"Card image cap\">
                            <div class=\"news-date\">
                               <div> 07 <br> ม.ค</div>
                            </div>
                        </div>
                        <div class=\"card-body text-left\">
                            <a href=\"{{ base_url('momandkids/detail') }}\">
                                 <h5 class=\"card-title\">โลเล็ม อิปซัม (lorem ipsum)</h5>
                                 <p class=\"card-text\">เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า ข้อความโลเร็ม ...</p>
                                 <p class=\"color-violet2\">อ่านเพิ่ม <img src=\"{{ link_img }}icon/icon-right.png\"></p>
                            </a>
                          </div>
                      </div>
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"card\" >
                        <div class=\"card-img\">
                            <img class=\"card-img-top\" src=\"{{ link_img }}new1.png\" alt=\"Card image cap\">
                            <div class=\"news-date\">
                               <div> 07 <br> ม.ค</div>
                            </div>
                        </div>
                        <div class=\"card-body text-left\">
                            <a href=\"{{ base_url('momandkids/detail') }}\">
                                 <h5 class=\"card-title\">โลเล็ม อิปซัม (lorem ipsum)</h5>
                                 <p class=\"card-text\">เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า ข้อความโลเร็ม ...</p>
                                 <p class=\"color-violet2\">อ่านเพิ่ม <img src=\"{{ link_img }}icon/icon-right.png\"></p>
                            </a>
                          </div>
                      </div>
                  </div>
                </div>

                <div class=\"row news-result mt-4\">
                  <div class=\"col\">
                    <nav aria-label=\"Page navigation example\">
                      <ul class=\"pagination\">
                        <li class=\"page-item disabled\">
                          <a class=\"page-link\" href=\"#\" tabindex=\"-1\">ย้อนกลับ</a>
                        </li>
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                        <li class=\"page-item active\"><a class=\"page-link \" href=\"#\">3</a></li>
                        <li class=\"page-item\">
                          <a class=\"page-link\" href=\"#\">ถัดไป <img src=\"{{ link_img }}icon/icon-right.png\"></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                  <div class=\"col text-right\"><span>Page 1 of 60 results</span></div>
                </div>
            </div><!-- right -->
            <div class=\"col-md-4 order-1 c-left\">
                <div class=\"news-group\">
                  <div class=\"title line\">
                    <h5 class=\"color-violet2\">ค้นหาบทความ</h5>
                    <input type=\"text\" class=\"form-custom search\" id=\"\" placeholder=\"ค้นหาโรงพยาบาล\">
                  </div>
                </div><!-- news-group -->

                <div class=\"news-group\">
                  <div class=\"title line\">
                    <h5 class=\"color-violet2\">หมวดหมู่บทความ</h5>
                  </div>

                  <div>
                    <p><a href=\"#\">โลเล็ม อิปซัม. <span class=\"color-violet2 float-right\">(07)</span></a></p>
                    <p><a href=\"#\">โลเล็ม อิปซัม. <span class=\"color-violet2 float-right\">(07)</span></a></p>
                    <p><a href=\"#\">โลเล็ม อิปซัม. <span class=\"color-violet2 float-right\">(07)</span></a></p>
                    <p><a href=\"#\">โลเล็ม อิปซัม. <span class=\"color-violet2 float-right\">(07)</span></a></p>
                  </div>
                </div><!-- news-group -->

                <div class=\"news-group\">
                  <div class=\"title line\">
                    <h5 class=\"color-violet2\">บทความล่าสุด</h5>
                  </div>

                  <div class=\"news-recent\">
                    <div class=\"media\">
                      <img width=\"100\" class=\"mr-3\" src=\"{{ link_img }}new1.png\" alt=\"\">
                      <div class=\"media-body\">
                        <h5 class=\"mt-0\">2 June 2017</h5>
                        <p>เป็นข้อความแทนที่ (placeholder </p>
                        <a href=\"#\" class=\"\">อ่านเพิ่ม</a>
                      </div>
                    </div>
                  </div>

                  <div class=\"news-recent\">
                    <div class=\"media\">
                      <img width=\"100\" class=\"mr-3\" src=\"{{ link_img }}new1.png\" alt=\"\">
                      <div class=\"media-body\">
                        <h5 class=\"mt-0\">2 June 2017</h5>
                        <p>เป็นข้อความแทนที่ (placeholder </p>
                        <a href=\"#\" class=\"\">อ่านเพิ่ม</a>
                      </div>
                    </div>
                  </div>

                  <div class=\"news-recent\">
                    <div class=\"media\">
                      <img width=\"100\" class=\"mr-3\" src=\"{{ link_img }}new1.png\" alt=\"\">
                      <div class=\"media-body\">
                        <h5 class=\"mt-0\">2 June 2017</h5>
                        <p>เป็นข้อความแทนที่ (placeholder </p>
                        <a href=\"#\" class=\"\">อ่านเพิ่ม</a>
                      </div>
                    </div>
                  </div>

                </div><!-- news-group -->

                <div class=\"news-group\">
                  <div class=\"title line\">
                    <h5 class=\"color-violet2\">ปีที่โพสต์</h5>
                  </div>

                  <div>
                    <p><a href=\"#\">โลเล็ม อิปซัม. <span class=\"color-violet2 float-right\">(07)</span></a></p>
                    <p><a href=\"#\">โลเล็ม อิปซัม. <span class=\"color-violet2 float-right\">(07)</span></a></p>
                    <p><a href=\"#\">โลเล็ม อิปซัม. <span class=\"color-violet2 float-right\">(07)</span></a></p>
                    <p><a href=\"#\">โลเล็ม อิปซัม. <span class=\"color-violet2 float-right\">(07)</span></a></p>
                  </div>
                </div><!-- news-group -->

                <div class=\"news-group\">
                  <div class=\"title line\">
                    <h5 class=\"color-violet2\">โฆษณา</h5>
                  </div>

                  <div>
                    <div class=\"owl-carousel owl-theme\">
                        <div class=\"item\"><img src=\"{{ link_img }}new1.png\"></div>
                        <div class=\"item\"><img src=\"{{ link_img }}new1.png\"></div>
                        <div class=\"item\"><img src=\"{{ link_img }}new1.png\"></div>
                    </div>
                  </div>
                </div><!-- news-group -->


            </div><!-- left -->
          </div>


        </div>
          
     </div>
     
  </section>
{% endblock %}

{% block js %}
  <script>
    \$('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
  </script>
{% endblock %}", "@f/momandkids.twig", "/Applications/MAMP/htdocs/insurance/application/views/momandkids.twig");
    }
}
