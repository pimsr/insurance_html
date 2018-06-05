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
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
        </ol>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <div class=\"overlay\"></div>
                <img class=\"d-block w-100\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "banner.png\" alt=\"ประกันเด็ก\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>หมดห่วงสารพัดเรื่องกับ</h5>
                    <p>ประกันสุขภาพเด็กเบากระเป๋า</p>
                    <a class=\"btn btn-violet\" href=\"#\">ดูรายละเอียด</a>
                </div>
            </div>
            <div class=\"carousel-item \">
                <div class=\"overlay\"></div>
                <img class=\"d-block w-100\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "banner.png\" alt=\"ประกันเด็ก\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>หมดห่วงสารพัดเรื่องกับ</h5>
                    <p>ประกันสุขภาพเด็กเบากระเป๋า</p>
                    <a class=\"btn btn-violet\" href=\"#\">ดูรายละเอียด</a>
                </div>
            </div>
            
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
            <div class=\"col-12 col-sm-12 col-md-6 \">
                <img class=\"img-fluid\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "home-img.png\" alt=\"img15\"/>
            </div>
            <div class=\"col-12 col-sm-12 col-md-6\">
                <h3 class=\"title color-violet2\">ประกันลูกดอทคอม</h3>
                <p>
                    โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง 
                </p>

                <ul class=\"home-services\">
                    <li class=\"list list1\">
                        <div>
                            <h4>โลเล็ม อิปซัม </h4>
                            <p>โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ </p>
                        </div>
                    </li>
                    <li class=\"list list2\">
                        <div>
                            <h4>โลเล็ม อิปซัม </h4>
                            <p>โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ </p>
                        </div>
                    </li>
                    <li class=\"list list3\">
                        <div>
                            <h4>โลเล็ม อิปซัม </h4>
                            <p>โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ </p>
                        </div>
                    </li>
                    <li class=\"list list4\">
                        <div>
                            <h4>โลเล็ม อิปซัม </h4>
                            <p>โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ </p>
                        </div>
                    </li>
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
                <img class=\"img-fluid\" src=\"";
        // line 144
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
        // line 159
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "new1.png\" alt=\"Card image cap\">
                        <div class=\"news-date\">
                            <div> 07 <br> ม.ค</div>
                        </div>
                    </div>
                    <div class=\"card-body text-left\">
                    <a href=\"";
        // line 165
        echo twig_escape_filter($this->env, base_url("momandkids/detail"), "html", null, true);
        echo "\">
                            <h5 class=\"card-title\">โลเล็ม อิปซัม (lorem ipsum)</h5>
                            <p class=\"card-text\">เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า ข้อความโลเร็ม ...</p>
                            <p class=\"color-violet2\">อ่านเพิ่ม <img src=\"";
        // line 168
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
        // line 176
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "new1.png\" alt=\"Card image cap\">
                        <div class=\"news-date\">
                            <div> 10 <br> ม.ค</div>
                        </div>
                    </div>
                    <div class=\"card-body text-left\">
                    <a href=\"";
        // line 182
        echo twig_escape_filter($this->env, base_url("momandkids/detail"), "html", null, true);
        echo "\">
                            <h5 class=\"card-title\">โลเล็ม อิปซัม (lorem ipsum)</h5>
                            <p class=\"card-text\">เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า ข้อความโลเร็ม ...</p>
                            <p class=\"color-violet2\">อ่านเพิ่ม <img src=\"";
        // line 185
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
        // line 193
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "new1.png\" alt=\"Card image cap\">
                        <div class=\"news-date\">
                            <div> 11 <br> ม.ค</div>
                        </div>
                    </div>
                    <div class=\"card-body text-left\">
                    <a href=\"";
        // line 199
        echo twig_escape_filter($this->env, base_url("momandkids/detail"), "html", null, true);
        echo "\">
                            <h5 class=\"card-title\">โลเล็ม อิปซัม (lorem ipsum)</h5>
                            <p class=\"card-text\">เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า ข้อความโลเร็ม ...</p>
                            <p class=\"color-violet2\">อ่านเพิ่ม <img src=\"";
        // line 202
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-right.png\"></p>
                    </a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"text-center load-more\">
            <a class=\"btn btn-violet\" href=\"";
        // line 210
        echo twig_escape_filter($this->env, base_url("momandkids"), "html", null, true);
        echo "\">ดูข่าวทั้งหมด</a>
        </div>
    </div>
</section>
<!-- End News -->

<section id=\"home-contact\" class=\"content-p-top bg-gray content-p-bottom home-contact-inner\">
    <div class=\"container  \">
        <h3 class=\"title color-violet2\"><img draggable=\"false\" class=\"emoji\" alt=\"\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/phone-contact.png\"> ให้เราติดต่อคุณ</h3>

        <div class=\"row mt-5 contact-position\">
            <div class=\"col-md-12 col-xl-6\">

                <div class=\"row \">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <input class=\"form-custom\" type=\"\" name=\"\" placeholder=\"ชื่อของคุณ\">
                        </div>
                            <div class=\"form-group\">
                            <input class=\"form-custom\" type=\"\" name=\"\" placeholder=\"อีเมล์\">
                        </div>
                            <div class=\"form-group\">
                            <input class=\"form-custom\" type=\"\" name=\"\" placeholder=\"เบอร์โทรศัพท์\">
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                            <div class=\"form-group\">
                            <input id=\"datepicker\" class=\"form-custom\" type=\"\" name=\"\" placeholder=\"วันเกิดลูก*\">
                        </div>
                        <div class=\"form-group select-wrapper\">
                            <select class=\"form-custom\">
                                <option>ประเภทประกันที่สนใจ*</option>
                                <option>ประเภทประกันที่สนใจ*</option>
                                <option>ประเภทประกันที่สนใจ*</option>
                            </select>
                        </div>
                            <div class=\"form-group d-center\">
                            <a class=\"btn btn-violet \" href=\"#\">ส่งข้อมูล</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
    <img  class=\"c-img\" src=\"";
        // line 256
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "baby.png\">
</section>
<!-- home-contact -->   

<section id=\"home-reviews\" class=\"content-p-top content-p-bottom \">
    <div class=\"container text-center\">
        <h3 class=\"title color-violet2\">รีวิวจากลูกค้า</h3>

        
        <div class=\"owl-carousel owl-theme mt-5\">
            <div class=\"item\">
                <div class=\"card\" >
                    <div class=\"text-center\">
                        <img class=\"\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "avatar.png\" alt=\"\">
                            
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title color-violet\">Card titlea</h5>
                        <h6 class=\"card-subtitle mb-2 text-muted\">Card subtitle</h6>
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"card\" >
                    <div class=\"text-center\">
                        <img class=\"\" src=\"";
        // line 283
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "avatar.png\" alt=\"\">
                            
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title color-violet\">Card titlea</h5>
                        <h6 class=\"card-subtitle mb-2 text-muted\">Card subtitle</h6>
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"card\" >
                    <div class=\"text-center\">
                        <img class=\"\" src=\"";
        // line 297
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "avatar.png\" alt=\"\">
                            
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title color-violet\">Card titlea</h5>
                        <h6 class=\"card-subtitle mb-2 text-muted\">Card subtitle</h6>
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"card\" >
                    <div class=\"text-center\">
                        <img class=\"\" src=\"";
        // line 311
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "avatar.png\" alt=\"\">
                            
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title color-violet\">Card titlea</h5>
                        <h6 class=\"card-subtitle mb-2 text-muted\">Card subtitle</h6>
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                    </div>
                </div>
            </div>

            
        </div>
    
    </div>
</section>
";
    }

    // line 330
    public function block_js($context, array $blocks = array())
    {
        // line 331
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

        \$('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
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
        return array (  423 => 331,  420 => 330,  398 => 311,  381 => 297,  364 => 283,  347 => 269,  331 => 256,  290 => 218,  279 => 210,  268 => 202,  262 => 199,  253 => 193,  242 => 185,  236 => 182,  227 => 176,  216 => 168,  210 => 165,  201 => 159,  183 => 144,  82 => 46,  55 => 22,  43 => 13,  32 => 4,  29 => 3,  11 => 1,);
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
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
        </ol>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <div class=\"overlay\"></div>
                <img class=\"d-block w-100\" src=\"{{ link_img }}banner.png\" alt=\"ประกันเด็ก\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>หมดห่วงสารพัดเรื่องกับ</h5>
                    <p>ประกันสุขภาพเด็กเบากระเป๋า</p>
                    <a class=\"btn btn-violet\" href=\"#\">ดูรายละเอียด</a>
                </div>
            </div>
            <div class=\"carousel-item \">
                <div class=\"overlay\"></div>
                <img class=\"d-block w-100\" src=\"{{ link_img }}banner.png\" alt=\"ประกันเด็ก\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>หมดห่วงสารพัดเรื่องกับ</h5>
                    <p>ประกันสุขภาพเด็กเบากระเป๋า</p>
                    <a class=\"btn btn-violet\" href=\"#\">ดูรายละเอียด</a>
                </div>
            </div>
            
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
            <div class=\"col-12 col-sm-12 col-md-6 \">
                <img class=\"img-fluid\" src=\"{{ link_img }}home-img.png\" alt=\"img15\"/>
            </div>
            <div class=\"col-12 col-sm-12 col-md-6\">
                <h3 class=\"title color-violet2\">ประกันลูกดอทคอม</h3>
                <p>
                    โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง 
                </p>

                <ul class=\"home-services\">
                    <li class=\"list list1\">
                        <div>
                            <h4>โลเล็ม อิปซัม </h4>
                            <p>โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ </p>
                        </div>
                    </li>
                    <li class=\"list list2\">
                        <div>
                            <h4>โลเล็ม อิปซัม </h4>
                            <p>โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ </p>
                        </div>
                    </li>
                    <li class=\"list list3\">
                        <div>
                            <h4>โลเล็ม อิปซัม </h4>
                            <p>โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ </p>
                        </div>
                    </li>
                    <li class=\"list list4\">
                        <div>
                            <h4>โลเล็ม อิปซัม </h4>
                            <p>โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ </p>
                        </div>
                    </li>
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

        <div class=\"row mt-5 contact-position\">
            <div class=\"col-md-12 col-xl-6\">

                <div class=\"row \">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <input class=\"form-custom\" type=\"\" name=\"\" placeholder=\"ชื่อของคุณ\">
                        </div>
                            <div class=\"form-group\">
                            <input class=\"form-custom\" type=\"\" name=\"\" placeholder=\"อีเมล์\">
                        </div>
                            <div class=\"form-group\">
                            <input class=\"form-custom\" type=\"\" name=\"\" placeholder=\"เบอร์โทรศัพท์\">
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                            <div class=\"form-group\">
                            <input id=\"datepicker\" class=\"form-custom\" type=\"\" name=\"\" placeholder=\"วันเกิดลูก*\">
                        </div>
                        <div class=\"form-group select-wrapper\">
                            <select class=\"form-custom\">
                                <option>ประเภทประกันที่สนใจ*</option>
                                <option>ประเภทประกันที่สนใจ*</option>
                                <option>ประเภทประกันที่สนใจ*</option>
                            </select>
                        </div>
                            <div class=\"form-group d-center\">
                            <a class=\"btn btn-violet \" href=\"#\">ส่งข้อมูล</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
    <img  class=\"c-img\" src=\"{{ link_img }}baby.png\">
</section>
<!-- home-contact -->   

<section id=\"home-reviews\" class=\"content-p-top content-p-bottom \">
    <div class=\"container text-center\">
        <h3 class=\"title color-violet2\">รีวิวจากลูกค้า</h3>

        
        <div class=\"owl-carousel owl-theme mt-5\">
            <div class=\"item\">
                <div class=\"card\" >
                    <div class=\"text-center\">
                        <img class=\"\" src=\"{{ link_img }}avatar.png\" alt=\"\">
                            
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title color-violet\">Card titlea</h5>
                        <h6 class=\"card-subtitle mb-2 text-muted\">Card subtitle</h6>
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"card\" >
                    <div class=\"text-center\">
                        <img class=\"\" src=\"{{ link_img }}avatar.png\" alt=\"\">
                            
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title color-violet\">Card titlea</h5>
                        <h6 class=\"card-subtitle mb-2 text-muted\">Card subtitle</h6>
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"card\" >
                    <div class=\"text-center\">
                        <img class=\"\" src=\"{{ link_img }}avatar.png\" alt=\"\">
                            
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title color-violet\">Card titlea</h5>
                        <h6 class=\"card-subtitle mb-2 text-muted\">Card subtitle</h6>
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"card\" >
                    <div class=\"text-center\">
                        <img class=\"\" src=\"{{ link_img }}avatar.png\" alt=\"\">
                            
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title color-violet\">Card titlea</h5>
                        <h6 class=\"card-subtitle mb-2 text-muted\">Card subtitle</h6>
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                    </div>
                </div>
            </div>

            
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

        \$('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    })();
</script>
{% endblock %}", "@f/home.twig", "/Applications/MAMP/htdocs/insurance/application/views/home.twig");
    }
}
