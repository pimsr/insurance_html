<?php

/* @f/insurance.twig */
class __TwigTemplate_0a20496013b09df68092bbc0358e3641f740e8983519abcf98ea80975d9bf7bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "@f/insurance.twig", 1);
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
        echo "banner-main.png');\">
 \t\t<div class=\"banner-caption\">
 \t\t\t<h2>ประกันสุขภาพลูก</h2>
 \t\t</div>
 \t\t<div class=\"overlay\"></div>
 \t</section>
 \t<section id=\"main\" class=\" page-insurance\">
 \t\t<div class=\"container\">
 \t\t\t<div class=\"content-p-top content-p-bottom \">
 \t\t\t\t <h3 class=\"title color-violet2 text-center\">ประกันลูกดอทคอม</h3>
 \t\t\t</div>
 \t\t\t<div class=\"row\">
\t \t\t\t<div class=\"col-12 col-md-6\">
\t \t\t\t\t<div class=\"service2\">
\t \t\t\t\t\t<div class=\"list_ active\">
                  <div class=\"icon icon1 \"></div>
                  <h4 class=\"text-center\">ผ่อนหนักให้เป็นเบา</h4>
                  <div class=\"service-content text-center\">
                    <p>
                    \tยามที่ลูกยังเล็ก สิ่งที่เรากังวลมากที่สุดอย่างหนึ่งคือ การเจ็บป่วย และอุบัติเหตุ และไม่ว่าใครก็ไม่สามารถเนรมิตโลกของลูกน้อยให้ปลอดภัยได้อย่างสมบูรณ์แบบ
                    </p>
                    <p class=\"color-violet2\">- เหมาะสำหรับลูกรักที่เริ่มทำประกันครั้งแรกตั้งแต่อายุ 0 - 5 ปี</p>

                    <a class=\"btn btn-violet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, base_url("info/detail/1"), "html", null, true);
        echo "\">ดูรายละเอียด</a>
                </div>
              </div>
\t \t\t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"col-12 col-md-6\">
\t \t\t\t\t<div class=\"service2\">
\t \t\t\t\t\t<div class=\"list_ active\">
                  <div class=\"icon icon2 \"></div>
                  <h4 class=\"text-center\">เบากระเป๋า</h4>
                  <div class=\"service-content text-center\">
                    <p>
                    \tยามที่ลูกยังเล็ก สิ่งที่เรากังวลมากที่สุดอย่างหนึ่งคือ การเจ็บป่วย และอุบัติเหตุ และไม่ว่าใครก็ไม่สามารถเนรมิตโลกของลูกน้อยให้ปลอดภัยได้อย่างสมบูรณ์แบบ
                    </p>
                    <p class=\"color-violet2\">- เหมาะสำหรับลูกรักที่เริ่มทำประกันครั้งแรกตั้งแต่อายุ 0 - 5 ปี</p>

                    <a class=\"btn btn-violet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, base_url("info/detail/2"), "html", null, true);
        echo "\">ดูรายละเอียด</a>
                </div>
              </div>
\t \t\t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"col-12 col-md-6\">
\t \t\t\t\t<div class=\"service2\">
\t \t\t\t\t\t<div class=\"list_ active\">
                  <div class=\"icon icon1 \"></div>
                  <h4 class=\"text-center\">เบาใจเหมาจ่าย</h4>
                  <div class=\"service-content text-center\">
                    <p>
                    \tยามที่ลูกยังเล็ก สิ่งที่เรากังวลมากที่สุดอย่างหนึ่งคือ การเจ็บป่วย และอุบัติเหตุ และไม่ว่าใครก็ไม่สามารถเนรมิตโลกของลูกน้อยให้ปลอดภัยได้อย่างสมบูรณ์แบบ
                    </p>
                    <p class=\"color-violet2\">- เหมาะสำหรับลูกรักที่เริ่มทำประกันครั้งแรกตั้งแต่อายุ 0 - 5 ปี</p>

                    <a class=\"btn btn-violet\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, base_url("info/detail/3"), "html", null, true);
        echo "\">ดูรายละเอียด</a>
                </div>
              </div>
\t \t\t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"col-12 col-md-6\">
\t \t\t\t\t<div class=\"service2\">
\t \t\t\t\t\t<div class=\"list_ active\">
                  <div class=\"icon icon2 \"></div>
                  <h4 class=\"text-center\">เบี้ยไม่ทิ้ง</h4>
                  <div class=\"service-content text-center\">
                    <p>
                    \tยามที่ลูกยังเล็ก สิ่งที่เรากังวลมากที่สุดอย่างหนึ่งคือ การเจ็บป่วย และอุบัติเหตุ และไม่ว่าใครก็ไม่สามารถเนรมิตโลกของลูกน้อยให้ปลอดภัยได้อย่างสมบูรณ์แบบ
                    </p>
                    <p class=\"color-violet2\">- เหมาะสำหรับลูกรักที่เริ่มทำประกันครั้งแรกตั้งแต่อายุ 0 - 5 ปี</p>

                    <a class=\"btn btn-violet\" href=\"";
        // line 75
        echo twig_escape_filter($this->env, base_url("info/detail/4"), "html", null, true);
        echo "\">ดูรายละเอียด</a>
                </div>
              </div>
\t \t\t\t\t</div>
\t \t\t\t</div>
\t \t\t</div>
 \t\t</div>
 \t</section>
 \t<section>
 \t\t<div class=\"h150\"></div>
 \t</section>
 \t<section id=\"home-contact\" class=\"content-p-top bg-gray content-p-bottom home-contact-inner\">
      <div class=\"container  \">
          <h3 class=\"title color-violet2\"><img draggable=\"false\" class=\"emoji\" alt=\"\" src=\"";
        // line 88
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
                              <input class=\"form-custom\" type=\"\" name=\"\" placeholder=\"วันเกิดลูก*\">
                          </div>
                          <div class=\"form-group select-wrapper\">
                              <select class=\"form-custom\">
                                  <option>ประเภทประกันที่สนใจ*</option>
                                  <option>ประเภทประกันที่สนใจ*</option>
                                  <option>ประเภทประกันที่สนใจ*</option>
                              </select>
                          </div>
                           <div class=\"form-group d-center\">
                              <a class=\"btn btn-violet \" href=\"#\">ดูข่าวทั้งหมด</a>
                          </div>
                      </div>
                  </div>
              </div>
             
          </div>

      </div>
     <img  class=\"c-img\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "baby.png\">
    </section>
  <!-- home-contact -->   
    <section class=\"content-p-top content-p-bottom\">
       <div class=\"container\">
            <div class=\"content-pcontent-p\">
                <h3 class=\"title color-violet2 text-center\">ทำไมต้องเลือกประกันลูก</h3>
                <div class=\"text-center mt-4 mb-4\">
                    โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า ข้อความโลเร็ม อิปซัมเป็นข้อความส่วนหนึ่งในภาษาละตินที่แต่งโดย ซิเซโร โดยมีการตัดต่อคำให้ดูเหมือนเป็นข้อความที่ไม่มีความหมายและไม่ใช่ภาษาละตินที่ถูกต้อง
                </div>

                <div class=\"in-list\">
                    <div class=\"row\">
                       <div class=\"col-md-6\">
                           <div class=\"media\">
                              <img width=\"80\" class=\"align-self-center mr-3\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon1.png\" alt=\"\">
                              <div class=\"media-body align-self-center\">
                                <h5 class=\"mt-0 color-violet2\">โลเล็ม อิปซัม</h5>
                                <p class=\"mb-0\">โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ ใช้ทดสอบหน้าเว็บไซตโลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ ใช้ทดสอบหน้าเว็บไซต์</p>
                               
                              </div>
                            </div>
                       </div>
                       <div class=\"col-md-6\">
                            <div class=\"media\">
                              <img width=\"80\" class=\"align-self-center mr-3\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon2.png\" alt=\"\">
                              <div class=\"media-body align-self-center\">
                                <h5 class=\"mt-0 color-violet2\">โลเล็ม อิปซัม</h5>
                                <p class=\"mb-0\">โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ ใช้ทดสอบหน้าเว็บไซต์</p>
                               
                              </div>
                            </div>
                       </div>
                       <div class=\"col-md-6\">
                           <div class=\"media\">
                              <img width=\"80\" class=\"align-self-center mr-3\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon3.png\" alt=\"\">
                              <div class=\"media-body align-self-center\">
                                <h5 class=\"mt-0 color-violet2\">โลเล็ม อิปซัม</h5>
                                <p class=\"mb-0\">โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ ใช้ทดสอบหน้าเว็บไซต์</p>
                               
                              </div>
                            </div>
                       </div>
                       <div class=\"col-md-6\">
                           <div class=\"media\">
                              <img width=\"80\" class=\"align-self-center mr-3\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon4.png\" alt=\"\">
                              <div class=\"media-body align-self-center\">
                                <h5 class=\"mt-0 color-violet2\">โลเล็ม อิปซัม</h5>
                                <p class=\"mb-0\">โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ ใช้ทดสอบหน้าเว็บไซต์</p>
                               
                              </div>
                            </div>
                       </div>
                    </div>
               </div>
            </div>
       </div>
       
    </section>
";
    }

    // line 187
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@f/insurance.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 187,  230 => 171,  217 => 161,  204 => 151,  191 => 141,  173 => 126,  132 => 88,  116 => 75,  97 => 59,  78 => 43,  59 => 27,  32 => 4,  29 => 3,  11 => 1,);
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
 \t<section class=\"banner\" style=\"background-image: url('{{ link_img }}banner-main.png');\">
 \t\t<div class=\"banner-caption\">
 \t\t\t<h2>ประกันสุขภาพลูก</h2>
 \t\t</div>
 \t\t<div class=\"overlay\"></div>
 \t</section>
 \t<section id=\"main\" class=\" page-insurance\">
 \t\t<div class=\"container\">
 \t\t\t<div class=\"content-p-top content-p-bottom \">
 \t\t\t\t <h3 class=\"title color-violet2 text-center\">ประกันลูกดอทคอม</h3>
 \t\t\t</div>
 \t\t\t<div class=\"row\">
\t \t\t\t<div class=\"col-12 col-md-6\">
\t \t\t\t\t<div class=\"service2\">
\t \t\t\t\t\t<div class=\"list_ active\">
                  <div class=\"icon icon1 \"></div>
                  <h4 class=\"text-center\">ผ่อนหนักให้เป็นเบา</h4>
                  <div class=\"service-content text-center\">
                    <p>
                    \tยามที่ลูกยังเล็ก สิ่งที่เรากังวลมากที่สุดอย่างหนึ่งคือ การเจ็บป่วย และอุบัติเหตุ และไม่ว่าใครก็ไม่สามารถเนรมิตโลกของลูกน้อยให้ปลอดภัยได้อย่างสมบูรณ์แบบ
                    </p>
                    <p class=\"color-violet2\">- เหมาะสำหรับลูกรักที่เริ่มทำประกันครั้งแรกตั้งแต่อายุ 0 - 5 ปี</p>

                    <a class=\"btn btn-violet\" href=\"{{ base_url('info/detail/1') }}\">ดูรายละเอียด</a>
                </div>
              </div>
\t \t\t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"col-12 col-md-6\">
\t \t\t\t\t<div class=\"service2\">
\t \t\t\t\t\t<div class=\"list_ active\">
                  <div class=\"icon icon2 \"></div>
                  <h4 class=\"text-center\">เบากระเป๋า</h4>
                  <div class=\"service-content text-center\">
                    <p>
                    \tยามที่ลูกยังเล็ก สิ่งที่เรากังวลมากที่สุดอย่างหนึ่งคือ การเจ็บป่วย และอุบัติเหตุ และไม่ว่าใครก็ไม่สามารถเนรมิตโลกของลูกน้อยให้ปลอดภัยได้อย่างสมบูรณ์แบบ
                    </p>
                    <p class=\"color-violet2\">- เหมาะสำหรับลูกรักที่เริ่มทำประกันครั้งแรกตั้งแต่อายุ 0 - 5 ปี</p>

                    <a class=\"btn btn-violet\" href=\"{{ base_url('info/detail/2') }}\">ดูรายละเอียด</a>
                </div>
              </div>
\t \t\t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"col-12 col-md-6\">
\t \t\t\t\t<div class=\"service2\">
\t \t\t\t\t\t<div class=\"list_ active\">
                  <div class=\"icon icon1 \"></div>
                  <h4 class=\"text-center\">เบาใจเหมาจ่าย</h4>
                  <div class=\"service-content text-center\">
                    <p>
                    \tยามที่ลูกยังเล็ก สิ่งที่เรากังวลมากที่สุดอย่างหนึ่งคือ การเจ็บป่วย และอุบัติเหตุ และไม่ว่าใครก็ไม่สามารถเนรมิตโลกของลูกน้อยให้ปลอดภัยได้อย่างสมบูรณ์แบบ
                    </p>
                    <p class=\"color-violet2\">- เหมาะสำหรับลูกรักที่เริ่มทำประกันครั้งแรกตั้งแต่อายุ 0 - 5 ปี</p>

                    <a class=\"btn btn-violet\" href=\"{{ base_url('info/detail/3') }}\">ดูรายละเอียด</a>
                </div>
              </div>
\t \t\t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"col-12 col-md-6\">
\t \t\t\t\t<div class=\"service2\">
\t \t\t\t\t\t<div class=\"list_ active\">
                  <div class=\"icon icon2 \"></div>
                  <h4 class=\"text-center\">เบี้ยไม่ทิ้ง</h4>
                  <div class=\"service-content text-center\">
                    <p>
                    \tยามที่ลูกยังเล็ก สิ่งที่เรากังวลมากที่สุดอย่างหนึ่งคือ การเจ็บป่วย และอุบัติเหตุ และไม่ว่าใครก็ไม่สามารถเนรมิตโลกของลูกน้อยให้ปลอดภัยได้อย่างสมบูรณ์แบบ
                    </p>
                    <p class=\"color-violet2\">- เหมาะสำหรับลูกรักที่เริ่มทำประกันครั้งแรกตั้งแต่อายุ 0 - 5 ปี</p>

                    <a class=\"btn btn-violet\" href=\"{{ base_url('info/detail/4') }}\">ดูรายละเอียด</a>
                </div>
              </div>
\t \t\t\t\t</div>
\t \t\t\t</div>
\t \t\t</div>
 \t\t</div>
 \t</section>
 \t<section>
 \t\t<div class=\"h150\"></div>
 \t</section>
 \t<section id=\"home-contact\" class=\"content-p-top bg-gray content-p-bottom home-contact-inner\">
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
                              <input class=\"form-custom\" type=\"\" name=\"\" placeholder=\"วันเกิดลูก*\">
                          </div>
                          <div class=\"form-group select-wrapper\">
                              <select class=\"form-custom\">
                                  <option>ประเภทประกันที่สนใจ*</option>
                                  <option>ประเภทประกันที่สนใจ*</option>
                                  <option>ประเภทประกันที่สนใจ*</option>
                              </select>
                          </div>
                           <div class=\"form-group d-center\">
                              <a class=\"btn btn-violet \" href=\"#\">ดูข่าวทั้งหมด</a>
                          </div>
                      </div>
                  </div>
              </div>
             
          </div>

      </div>
     <img  class=\"c-img\" src=\"{{ link_img }}baby.png\">
    </section>
  <!-- home-contact -->   
    <section class=\"content-p-top content-p-bottom\">
       <div class=\"container\">
            <div class=\"content-pcontent-p\">
                <h3 class=\"title color-violet2 text-center\">ทำไมต้องเลือกประกันลูก</h3>
                <div class=\"text-center mt-4 mb-4\">
                    โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า ข้อความโลเร็ม อิปซัมเป็นข้อความส่วนหนึ่งในภาษาละตินที่แต่งโดย ซิเซโร โดยมีการตัดต่อคำให้ดูเหมือนเป็นข้อความที่ไม่มีความหมายและไม่ใช่ภาษาละตินที่ถูกต้อง
                </div>

                <div class=\"in-list\">
                    <div class=\"row\">
                       <div class=\"col-md-6\">
                           <div class=\"media\">
                              <img width=\"80\" class=\"align-self-center mr-3\" src=\"{{ link_img }}icon/icon1.png\" alt=\"\">
                              <div class=\"media-body align-self-center\">
                                <h5 class=\"mt-0 color-violet2\">โลเล็ม อิปซัม</h5>
                                <p class=\"mb-0\">โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ ใช้ทดสอบหน้าเว็บไซตโลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ ใช้ทดสอบหน้าเว็บไซต์</p>
                               
                              </div>
                            </div>
                       </div>
                       <div class=\"col-md-6\">
                            <div class=\"media\">
                              <img width=\"80\" class=\"align-self-center mr-3\" src=\"{{ link_img }}icon/icon2.png\" alt=\"\">
                              <div class=\"media-body align-self-center\">
                                <h5 class=\"mt-0 color-violet2\">โลเล็ม อิปซัม</h5>
                                <p class=\"mb-0\">โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ ใช้ทดสอบหน้าเว็บไซต์</p>
                               
                              </div>
                            </div>
                       </div>
                       <div class=\"col-md-6\">
                           <div class=\"media\">
                              <img width=\"80\" class=\"align-self-center mr-3\" src=\"{{ link_img }}icon/icon3.png\" alt=\"\">
                              <div class=\"media-body align-self-center\">
                                <h5 class=\"mt-0 color-violet2\">โลเล็ม อิปซัม</h5>
                                <p class=\"mb-0\">โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ ใช้ทดสอบหน้าเว็บไซต์</p>
                               
                              </div>
                            </div>
                       </div>
                       <div class=\"col-md-6\">
                           <div class=\"media\">
                              <img width=\"80\" class=\"align-self-center mr-3\" src=\"{{ link_img }}icon/icon4.png\" alt=\"\">
                              <div class=\"media-body align-self-center\">
                                <h5 class=\"mt-0 color-violet2\">โลเล็ม อิปซัม</h5>
                                <p class=\"mb-0\">โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ ใช้ทดสอบหน้าเว็บไซต์</p>
                               
                              </div>
                            </div>
                       </div>
                    </div>
               </div>
            </div>
       </div>
       
    </section>
{% endblock %}

{% block js %}{% endblock %}", "@f/insurance.twig", "/Applications/MAMP/htdocs/insurance/application/views/insurance.twig");
    }
}
