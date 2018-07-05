<?php

/* @f/home.twig */
class __TwigTemplate_8a51facb5a0b42b3e9ba6c7a4d1353eff932d80dab575c48625b15f9731904d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "@f/home.twig", 1);
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
        echo "<section id=\"main-slide\">
    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banner"]) ? $context["banner"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 8
            echo "            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" class=\"";
            echo ((($context["key"] == 0)) ? ("active") : (""));
            echo "\"></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </ol>
        <div class=\"carousel-inner\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banner"]) ? $context["banner"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 13
            echo "            ";
            $context["img"] = (((trim($this->getAttribute($context["value"], "img", array())) == "")) ? (((isset($context["link_img"]) ? $context["link_img"] : null) . "default/banner.png")) : (((isset($context["link_banner"]) ? $context["link_banner"] : null) . $this->getAttribute($context["value"], "img", array()))));
            // line 14
            echo "            <div class=\"carousel-item ";
            echo ((($context["key"] == 0)) ? ("active") : (""));
            echo "\">
                <div class=\"overlay\"></div>
                <img class=\"d-block w-100\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "</h5>
                    <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("subtitle_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "</p>
                    ";
            // line 20
            if ($this->getAttribute($context["value"], "link", array())) {
                echo "<a class=\"btn btn-violet\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "link", array()), "html", null, true);
                echo "\">ดูรายละเอียด</a>";
            }
            // line 21
            echo "                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </div>
        <!-- <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a> -->
        </div>
</section>

<section id=\"content\" class=\"content-p-top ser\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-sm-12 col-md-6 dotcom-img\">
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dotcom"]) ? $context["dotcom"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 41
            echo "                ";
            $context["img"] = (((trim($this->getAttribute($context["value"], "img", array())) == "")) ? (((isset($context["link_img"]) ? $context["link_img"] : null) . "default/dotcom.png")) : (((isset($context["link_home"]) ? $context["link_home"] : null) . $this->getAttribute($context["value"], "img", array()))));
            // line 42
            echo "                <img class=\"img-fluid\" style=\"";
            echo ((($context["key"] == 0)) ? ("") : ("display: none"));
            echo "\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "\"/>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </div>
            <div class=\"col-12 col-sm-12 col-md-6\">
                <h3 class=\"title color-violet2\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dotcom_headline"]) ? $context["dotcom_headline"] : null), ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
        echo "</h3>
                <p>
                    ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dotcom_headline"]) ? $context["dotcom_headline"] : null), ("subtitle_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
        echo "
                </p>

                <ul class=\"home-services\">
                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dotcom"]) ? $context["dotcom"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 53
            echo "                    ";
            $context["icon"] = (((trim($this->getAttribute($context["value"], "icon", array())) == "")) ? (((isset($context["link_img"]) ? $context["link_img"] : null) . "default/icon.png")) : (((isset($context["link_home"]) ? $context["link_home"] : null) . $this->getAttribute($context["value"], "icon", array()))));
            // line 54
            echo "                    <li class=\"list list";
            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
            echo " ";
            echo ((($context["key"] == 0)) ? ("active") : (""));
            echo "\">
                        <div>
                            <div class=\"icon\">
                                <img src=\"";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
            echo "\">
                            </div>
                            <h4>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "</h4>
                            <p>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("desc_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "</p>
                        </div>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Service 1 -->

<section id=\"service2\" class=\"content-p-top ser \">
    <div class=\"container\">
        <div class=\"row d-flex\">
            
            <div class=\"col-12 col-sm-12 col-md-6 order-1\">
                <h3 class=\"title color-violet2\">ประกันสุขภาพลูก</h3>

                <div class=\"row service2 text-center\">
                    <div class=\"col\">
                            <div class=\"list_ active\">
                            <a href=\"#\">
                                <div class=\"icon icon1 \"></div>
                                <h4>ผ่อนหนักให้เป็นเบา</h4>
                            </a>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div class=\"list_\">
                            <a href=\"#\">
                                <div class=\"icon icon2\"></div>
                                <h4>เบากระเป๋า</h4>
                            </a>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div class=\"list_\">
                            <a href=\"#\">
                                <div class=\"icon icon3\"></div>
                                <h4>เบาใจเหมาจ่าย</h4>
                            </a>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div class=\"list_\">
                            <a href=\"#\">
                                <div class=\"icon icon4\"></div>
                                <h4>เบี้ยไม่ทิ้ง</h4>
                            </a>
                        </div>
                    </div>
                </div>

                <div class=\"service-content\">
                    <p>
                        ยามที่ลูกยังเล็ก สิ่งที่เรากังวลมากที่สุดอย่างหนึ่งคือ การเจ็บป่วย และอุบัติเหตุ และไม่ว่าใครก็ไม่สามารถเนรมิตโลกของลูกน้อยให้ปลอดภัยได้อย่างสมบูรณ์แบบ

                    </p>
                    <p>
                        ประกันสุขภาพผ่อนหนักให้เป็นเบา  จะบรรเทาภาระค่ารักษาพยาบาลและรายได้ที่หายไป เพื่อให้พ่อแม่มีเวลาดูแลลูกน้อยได้อย่างเต็มที่ ด้วยการคำนวณผลประโยชน์แบบวงเงินคุ้มครองที่เลือกได้

                    </p>
                    <p class=\"color-violet2\">- เหมาะสำหรับลูกรักที่เริ่มทำประกันครั้งแรกตั้งแต่อายุ 0 - 5 ปี</p>

                    <div class=\"d-center\"><a class=\"btn btn-violet\" href=\"#\">ดูรายละเอียด</a></div>
                </div>

            </div>
            <div class=\"col-12 col-sm-12 col-md-6 order-2\">
                <img class=\"img-fluid\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "img-service.png\" alt=\"img15\"/>
            </div>
        </div>
    </div>
</section>
<!-- End Service 2 -->

<section id=\"news\" class=\"content-p-top content-p-bottom \">
    <div class=\"container text-center\">
        <h3 class=\"title color-violet2\">ข่าวสาร และ กิจกรรม</h3>

        <div class=\"news-wrapper mt-4 row\">
            <div class=\"col-12 col-md-4 col-xl-4\">
                <div class=\"card\" >
                    <div class=\"card-img\">
                        <img class=\"card-img-top\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "new1.png\" alt=\"Card image cap\">
                        <div class=\"news-date\">
                            <div> 07 <br> ม.ค</div>
                        </div>
                    </div>
                    <div class=\"card-body text-left\">
                    <a href=\"";
        // line 150
        echo twig_escape_filter($this->env, base_url("momandkids/detail"), "html", null, true);
        echo "\">
                            <h5 class=\"card-title\">โลเล็ม อิปซัม (lorem ipsum)</h5>
                            <p class=\"card-text\">เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า ข้อความโลเร็ม ...</p>
                            <p class=\"color-violet2\">อ่านเพิ่ม <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-right.png\"></p>
                    </a>
                    </div>
                </div>
            </div>
            <div class=\"col-12 col-md-4 col-xl-4\">
                <div class=\"card\" >
                    <div class=\"card-img\">
                        <img class=\"card-img-top\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "new1.png\" alt=\"Card image cap\">
                        <div class=\"news-date\">
                            <div> 10 <br> ม.ค</div>
                        </div>
                    </div>
                    <div class=\"card-body text-left\">
                    <a href=\"";
        // line 167
        echo twig_escape_filter($this->env, base_url("momandkids/detail"), "html", null, true);
        echo "\">
                            <h5 class=\"card-title\">โลเล็ม อิปซัม (lorem ipsum)</h5>
                            <p class=\"card-text\">เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า ข้อความโลเร็ม ...</p>
                            <p class=\"color-violet2\">อ่านเพิ่ม <img src=\"";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-right.png\"></p>
                    </a>
                    </div>
                </div>
            </div>
            <div class=\"col-12 col-md-4 col-xl-4\">
                <div class=\"card\">
                    <div class=\"card-img\">
                        <img class=\"card-img-top\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "new1.png\" alt=\"Card image cap\">
                        <div class=\"news-date\">
                            <div> 11 <br> ม.ค</div>
                        </div>
                    </div>
                    <div class=\"card-body text-left\">
                    <a href=\"";
        // line 184
        echo twig_escape_filter($this->env, base_url("momandkids/detail"), "html", null, true);
        echo "\">
                            <h5 class=\"card-title\">โลเล็ม อิปซัม (lorem ipsum)</h5>
                            <p class=\"card-text\">เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า ข้อความโลเร็ม ...</p>
                            <p class=\"color-violet2\">อ่านเพิ่ม <img src=\"";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-right.png\"></p>
                    </a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"text-center load-more\">
            <a class=\"btn btn-violet\" href=\"";
        // line 195
        echo twig_escape_filter($this->env, base_url("momandkids"), "html", null, true);
        echo "\">ดูข่าวทั้งหมด</a>
        </div>
    </div>
</section>
<!-- End News -->

<section id=\"home-contact\" class=\"content-p-top bg-gray content-p-bottom home-contact-inner\">
    <div class=\"container  \">
        <h3 class=\"title color-violet2\"><img draggable=\"false\" class=\"emoji\" alt=\"\" src=\"";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/phone-contact.png\"> ให้เราติดต่อคุณ</h3>
        <form class=\"row mt-5 contact-position\"  action=\"";
        // line 204
        echo twig_escape_filter($this->env, base_url("contact/sendMsgKids"), "html", null, true);
        echo "\" method=\"post\">
              <div class=\"col-md-12 col-xl-6\">
                  <div class=\"row\">
                      <div class=\"col-md-6\">
                          <div class=\"form-group\">
                              <input class=\"form-custom\" type=\"text\" name=\"name\" placeholder=\"ชื่อของคุณ\">
                          </div>
                           <div class=\"form-group\">
                              <input class=\"form-custom\" type=\"email\" name=\"email\" placeholder=\"อีเมล์\">
                          </div>
                           <div class=\"form-group\">
                              <input class=\"form-custom\" type=\"text\" name=\"tel\" placeholder=\"เบอร์โทรศัพท์\">
                          </div>
                      </div>
                      <div class=\"col-md-6\">
                           <div class=\"form-group\">
                              <input id=\"datepicker\" class=\"form-custom\" type=\"text\" name=\"date\" placeholder=\"วันเกิดลูก*\">
                          </div>
                          <div class=\"form-group select-wrapper\">
                              <select class=\"form-custom\" name=\"insurance_id\">
                                <option value=\"\" disabled selected>เลือกประเภทประกันที่สนใจ*</option>
                                ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "insurance", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 226
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "                              </select>
                          </div>
                          <div class=\"form-group d-center\">
                              <button type=\"submit\" class=\"btn btn-violet\">ส่งข้อมูล   </button>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
    </div>
    <img  class=\"c-img\" src=\"";
        // line 238
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "baby.png\">
</section>
<!-- home-contact -->   

<section id=\"home-reviews\" class=\"content-p-top content-p-bottom \">
    <div class=\"container text-center\">
        <h3 class=\"title color-violet2\">รีวิวจากลูกค้า</h3>

        
        <div class=\"owl-carousel owl-theme mt-5\">
            ";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["review"]) ? $context["review"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 249
            echo "            ";
            $context["img"] = (((trim($this->getAttribute($context["value"], "img", array())) == "")) ? (((isset($context["link_img"]) ? $context["link_img"] : null) . "default/review.png")) : (((isset($context["link_review"]) ? $context["link_review"] : null) . $this->getAttribute($context["value"], "img", array()))));
            // line 250
            echo "            <div class=\"item\">
                <div class=\"card\" >
                    <div class=\"text-center\">
                        <img class=\"\" src=\"";
            // line 253
            echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title color-violet\">";
            // line 256
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "</h5>
                        <h6 class=\"card-subtitle mb-2 text-muted\">";
            // line 257
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("subtitle_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "</h6>
                        <p class=\"card-text\">";
            // line 258
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("desc_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "</p>
                        
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "        </div>
    
    </div>
</section>
";
    }

    // line 270
    public function block_js($context, array $blocks = array())
    {
        // line 271
        echo "<script>
    (function(){
        \$('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,

            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        });

        \$('#content .home-services li').click(function(){
            var index = \$(this).index();
            \$('#content .dotcom-img img').hide().eq(index).fadeIn(300);
            \$('#content .home-services li').removeClass('active').eq(index).addClass('active');
        });
    })();
</script>
";
    }

    public function getTemplateName()
    {
        return "@f/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 271,  477 => 270,  469 => 264,  457 => 258,  453 => 257,  449 => 256,  441 => 253,  436 => 250,  433 => 249,  429 => 248,  416 => 238,  404 => 228,  393 => 226,  389 => 225,  365 => 204,  361 => 203,  350 => 195,  339 => 187,  333 => 184,  324 => 178,  313 => 170,  307 => 167,  298 => 161,  287 => 153,  281 => 150,  272 => 144,  254 => 129,  187 => 64,  177 => 60,  173 => 59,  168 => 57,  159 => 54,  156 => 53,  152 => 52,  145 => 48,  140 => 46,  136 => 44,  123 => 42,  120 => 41,  116 => 40,  98 => 24,  90 => 21,  84 => 20,  80 => 19,  76 => 18,  69 => 16,  63 => 14,  60 => 13,  56 => 12,  52 => 10,  41 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
<section id=\"main-slide\">
    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            {% for key, value in banner %}
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"{{ key }}\" class=\"{{ key == 0 ? 'active' : '' }}\"></li>
            {% endfor %}
        </ol>
        <div class=\"carousel-inner\">
            {% for key, value in banner %}
            {% set img = trim(value.img) == '' ?  link_img~'default/banner.png' : link_banner~value.img %}
            <div class=\"carousel-item {{ key == 0 ? 'active' : '' }}\">
                <div class=\"overlay\"></div>
                <img class=\"d-block w-100\" src=\"{{ img }}\" alt=\"{{ attribute(value,'title_'~lang) }}\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>{{ attribute(value,'title_'~lang) }}</h5>
                    <p>{{ attribute(value,'subtitle_'~lang) }}</p>
                    {% if value.link %}<a class=\"btn btn-violet\" href=\"{{ value.link }}\">ดูรายละเอียด</a>{% endif %}
                </div>
            </div>
            {% endfor %}
        </div>
        <!-- <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a> -->
        </div>
</section>

<section id=\"content\" class=\"content-p-top ser\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-sm-12 col-md-6 dotcom-img\">
                {% for key, value in dotcom %}
                {% set img = trim(value.img) == '' ?  link_img~'default/dotcom.png' : link_home~value.img %}
                <img class=\"img-fluid\" style=\"{{ key == 0 ? '' : 'display: none' }}\" src=\"{{ img }}\" alt=\"{{ attribute(value,'title_'~lang) }}\"/>
                {% endfor %}
            </div>
            <div class=\"col-12 col-sm-12 col-md-6\">
                <h3 class=\"title color-violet2\">{{ attribute(dotcom_headline,'title_'~lang) }}</h3>
                <p>
                    {{ attribute(dotcom_headline,'subtitle_'~lang) }}
                </p>

                <ul class=\"home-services\">
                    {% for key, value in dotcom %}
                    {% set icon = trim(value.icon) == '' ?  link_img~'default/icon.png' : link_home~value.icon %}
                    <li class=\"list list{{ key + 1 }} {{ key == 0 ? 'active' : '' }}\">
                        <div>
                            <div class=\"icon\">
                                <img src=\"{{ icon }}\">
                            </div>
                            <h4>{{ attribute(value,'title_'~lang) }}</h4>
                            <p>{{ attribute(value,'desc_'~lang) }}</p>
                        </div>
                    </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Service 1 -->

<section id=\"service2\" class=\"content-p-top ser \">
    <div class=\"container\">
        <div class=\"row d-flex\">
            
            <div class=\"col-12 col-sm-12 col-md-6 order-1\">
                <h3 class=\"title color-violet2\">ประกันสุขภาพลูก</h3>

                <div class=\"row service2 text-center\">
                    <div class=\"col\">
                            <div class=\"list_ active\">
                            <a href=\"#\">
                                <div class=\"icon icon1 \"></div>
                                <h4>ผ่อนหนักให้เป็นเบา</h4>
                            </a>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div class=\"list_\">
                            <a href=\"#\">
                                <div class=\"icon icon2\"></div>
                                <h4>เบากระเป๋า</h4>
                            </a>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div class=\"list_\">
                            <a href=\"#\">
                                <div class=\"icon icon3\"></div>
                                <h4>เบาใจเหมาจ่าย</h4>
                            </a>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div class=\"list_\">
                            <a href=\"#\">
                                <div class=\"icon icon4\"></div>
                                <h4>เบี้ยไม่ทิ้ง</h4>
                            </a>
                        </div>
                    </div>
                </div>

                <div class=\"service-content\">
                    <p>
                        ยามที่ลูกยังเล็ก สิ่งที่เรากังวลมากที่สุดอย่างหนึ่งคือ การเจ็บป่วย และอุบัติเหตุ และไม่ว่าใครก็ไม่สามารถเนรมิตโลกของลูกน้อยให้ปลอดภัยได้อย่างสมบูรณ์แบบ

                    </p>
                    <p>
                        ประกันสุขภาพผ่อนหนักให้เป็นเบา  จะบรรเทาภาระค่ารักษาพยาบาลและรายได้ที่หายไป เพื่อให้พ่อแม่มีเวลาดูแลลูกน้อยได้อย่างเต็มที่ ด้วยการคำนวณผลประโยชน์แบบวงเงินคุ้มครองที่เลือกได้

                    </p>
                    <p class=\"color-violet2\">- เหมาะสำหรับลูกรักที่เริ่มทำประกันครั้งแรกตั้งแต่อายุ 0 - 5 ปี</p>

                    <div class=\"d-center\"><a class=\"btn btn-violet\" href=\"#\">ดูรายละเอียด</a></div>
                </div>

            </div>
            <div class=\"col-12 col-sm-12 col-md-6 order-2\">
                <img class=\"img-fluid\" src=\"{{ link_img }}img-service.png\" alt=\"img15\"/>
            </div>
        </div>
    </div>
</section>
<!-- End Service 2 -->

<section id=\"news\" class=\"content-p-top content-p-bottom \">
    <div class=\"container text-center\">
        <h3 class=\"title color-violet2\">ข่าวสาร และ กิจกรรม</h3>

        <div class=\"news-wrapper mt-4 row\">
            <div class=\"col-12 col-md-4 col-xl-4\">
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
            <div class=\"col-12 col-md-4 col-xl-4\">
                <div class=\"card\" >
                    <div class=\"card-img\">
                        <img class=\"card-img-top\" src=\"{{ link_img }}new1.png\" alt=\"Card image cap\">
                        <div class=\"news-date\">
                            <div> 10 <br> ม.ค</div>
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
            <div class=\"col-12 col-md-4 col-xl-4\">
                <div class=\"card\">
                    <div class=\"card-img\">
                        <img class=\"card-img-top\" src=\"{{ link_img }}new1.png\" alt=\"Card image cap\">
                        <div class=\"news-date\">
                            <div> 11 <br> ม.ค</div>
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

        <div class=\"text-center load-more\">
            <a class=\"btn btn-violet\" href=\"{{ base_url('momandkids') }}\">ดูข่าวทั้งหมด</a>
        </div>
    </div>
</section>
<!-- End News -->

<section id=\"home-contact\" class=\"content-p-top bg-gray content-p-bottom home-contact-inner\">
    <div class=\"container  \">
        <h3 class=\"title color-violet2\"><img draggable=\"false\" class=\"emoji\" alt=\"\" src=\"{{ link_img }}icon/phone-contact.png\"> ให้เราติดต่อคุณ</h3>
        <form class=\"row mt-5 contact-position\"  action=\"{{ base_url('contact/sendMsgKids') }}\" method=\"post\">
              <div class=\"col-md-12 col-xl-6\">
                  <div class=\"row\">
                      <div class=\"col-md-6\">
                          <div class=\"form-group\">
                              <input class=\"form-custom\" type=\"text\" name=\"name\" placeholder=\"ชื่อของคุณ\">
                          </div>
                           <div class=\"form-group\">
                              <input class=\"form-custom\" type=\"email\" name=\"email\" placeholder=\"อีเมล์\">
                          </div>
                           <div class=\"form-group\">
                              <input class=\"form-custom\" type=\"text\" name=\"tel\" placeholder=\"เบอร์โทรศัพท์\">
                          </div>
                      </div>
                      <div class=\"col-md-6\">
                           <div class=\"form-group\">
                              <input id=\"datepicker\" class=\"form-custom\" type=\"text\" name=\"date\" placeholder=\"วันเกิดลูก*\">
                          </div>
                          <div class=\"form-group select-wrapper\">
                              <select class=\"form-custom\" name=\"insurance_id\">
                                <option value=\"\" disabled selected>เลือกประเภทประกันที่สนใจ*</option>
                                {% for value in nav.insurance %}
                                <option value=\"{{ value.id }}\">{{ attribute(value, 'title_'~lang) }}</option>
                                {% endfor %}
                              </select>
                          </div>
                          <div class=\"form-group d-center\">
                              <button type=\"submit\" class=\"btn btn-violet\">ส่งข้อมูล   </button>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
    </div>
    <img  class=\"c-img\" src=\"{{ link_img }}baby.png\">
</section>
<!-- home-contact -->   

<section id=\"home-reviews\" class=\"content-p-top content-p-bottom \">
    <div class=\"container text-center\">
        <h3 class=\"title color-violet2\">รีวิวจากลูกค้า</h3>

        
        <div class=\"owl-carousel owl-theme mt-5\">
            {% for key, value in review %}
            {% set img = trim(value.img) == '' ?  link_img~'default/review.png' : link_review~value.img %}
            <div class=\"item\">
                <div class=\"card\" >
                    <div class=\"text-center\">
                        <img class=\"\" src=\"{{ img }}\" alt=\"{{ attribute(value,'title_'~lang) }}\">
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title color-violet\">{{ attribute(value,'title_'~lang) }}</h5>
                        <h6 class=\"card-subtitle mb-2 text-muted\">{{ attribute(value,'subtitle_'~lang) }}</h6>
                        <p class=\"card-text\">{{ attribute(value,'desc_'~lang) }}</p>
                        
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    
    </div>
</section>
{% endblock %}

{% block js %}
<script>
    (function(){
        \$('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,

            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        });

        \$('#content .home-services li').click(function(){
            var index = \$(this).index();
            \$('#content .dotcom-img img').hide().eq(index).fadeIn(300);
            \$('#content .home-services li').removeClass('active').eq(index).addClass('active');
        });
    })();
</script>
{% endblock %}", "@f/home.twig", "/Applications/MAMP/htdocs/insurance/application/views/home.twig");
    }
}
