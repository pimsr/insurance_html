<?php

/* @f/contact.twig */
class __TwigTemplate_bbe21b8d2dc352716d982dd2f14897d411a463c8fd8051bd920b0f3bcfaa5913 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "@f/contact.twig", 1);
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
        echo "banner-main4.png');\">
 \t\t<div class=\"banner-caption\">
 \t\t\t<h2>ติดต่อเรา</h2>
 \t\t</div>
 \t\t<div class=\"overlay\"></div>
 \t</section>
  <section class=\"content-p-top\">
     <div class=\"container\">
          
          <div class=\"\">
              <h3 class=\"title color-violet2 text-center\">บริการลูกค้า</h3>
              <div class=\"text-center\">
                โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อ
              </div>

              <div class=\"row my-5\">
                <div class=\"col-md-6\">
                  <div class=\"bg-gray contact-list text-center\">
                      <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-location.png\">
                      <h6 class=\"color-violet2 my-3\">ที่อยู่บริษัท</h6>
                      <p>
                        The Wilson Selly Corporation 550 Helsey wings Rd. <br>
                        Vanfoyld Village, CA 44143
                      </p>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"bg-gray contact-list text-center\">
                      <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-time.png\">
                      <h6 class=\"color-violet2 my-3\">เวลาทำการ</h6>
                      <p>
                        Monday to Friday 9.00 am to 6.00 pm  <br>
                        Saturday 10.00 am to 4.00 pm
                      </p>
                  </div>
                </div>
              </div>

              <div class=\"row mt-5 bg-gray contact-list\">
                <div class=\"col-md-12 text-center\">
                    <h4 class=\"color-violet2 mb-4\" >ติดต่อเรื่องเคลม  ( 800 - 123 - 4567 )</h4>
                    <a href=\"#\" class=\"btn btn-violet\">ดูข้อมูลการเคลม</a>
                </div>
              </div>
              
          </div>

          <div class=\"content-p-top\">
              <h3 class=\"color-violet2 text-center title\">ติดต่อประกันลูก</h3>
              <p class=\"text-center\">โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อ</p>

              <div class=\"mt-5\">
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"text\" name=\"\" placeholder=\"ช่ือ-นามสกุล\">
                    </div>
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"email\" name=\"\" placeholder=\"อีเมล์\">
                    </div>
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"text\" name=\"\" placeholder=\"เลขบัตรประชาชน*\">
                    </div>
                  </div>

                  <div class=\"col-md-6\">
                    <div class=\"form-group select-wrapper\">
                          <select class=\"form-custom\">
                              <option>เรื่องที่ต้องการสอบถาม**</option>
                              <option>เรื่องที่ต้องการสอบถาม**</option>
                              <option>เรื่องที่ต้องการสอบถาม**</option>
                          </select>
                    </div>
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"email\" name=\"\" placeholder=\"เบอร์โทรศัพท์\">
                    </div>
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"text\" name=\"\" placeholder=\"เลขที่กรมธรรม์\">
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"form-group\">
                      <textarea class=\"form-custom\" rows=\"6\" placeholder=\"ข้อความ...\"></textarea>
                    </div>
                  </div>

                  <div class=\"col-md-12 text-center\">
                    <a href=\"#\" class=\"btn btn-violet\">ส่งข้อมูล</a>
                  </div>
                </div>
              </div>
          </div>
     </div>
     
  </section>
";
    }

    // line 102
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@f/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 102,  67 => 32,  54 => 22,  32 => 4,  29 => 3,  11 => 1,);
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
 \t<section class=\"banner\" style=\"background-image: url('{{ link_img }}banner-main4.png');\">
 \t\t<div class=\"banner-caption\">
 \t\t\t<h2>ติดต่อเรา</h2>
 \t\t</div>
 \t\t<div class=\"overlay\"></div>
 \t</section>
  <section class=\"content-p-top\">
     <div class=\"container\">
          
          <div class=\"\">
              <h3 class=\"title color-violet2 text-center\">บริการลูกค้า</h3>
              <div class=\"text-center\">
                โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อ
              </div>

              <div class=\"row my-5\">
                <div class=\"col-md-6\">
                  <div class=\"bg-gray contact-list text-center\">
                      <img src=\"{{ link_img }}icon/icon-location.png\">
                      <h6 class=\"color-violet2 my-3\">ที่อยู่บริษัท</h6>
                      <p>
                        The Wilson Selly Corporation 550 Helsey wings Rd. <br>
                        Vanfoyld Village, CA 44143
                      </p>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"bg-gray contact-list text-center\">
                      <img src=\"{{ link_img }}icon/icon-time.png\">
                      <h6 class=\"color-violet2 my-3\">เวลาทำการ</h6>
                      <p>
                        Monday to Friday 9.00 am to 6.00 pm  <br>
                        Saturday 10.00 am to 4.00 pm
                      </p>
                  </div>
                </div>
              </div>

              <div class=\"row mt-5 bg-gray contact-list\">
                <div class=\"col-md-12 text-center\">
                    <h4 class=\"color-violet2 mb-4\" >ติดต่อเรื่องเคลม  ( 800 - 123 - 4567 )</h4>
                    <a href=\"#\" class=\"btn btn-violet\">ดูข้อมูลการเคลม</a>
                </div>
              </div>
              
          </div>

          <div class=\"content-p-top\">
              <h3 class=\"color-violet2 text-center title\">ติดต่อประกันลูก</h3>
              <p class=\"text-center\">โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อ</p>

              <div class=\"mt-5\">
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"text\" name=\"\" placeholder=\"ช่ือ-นามสกุล\">
                    </div>
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"email\" name=\"\" placeholder=\"อีเมล์\">
                    </div>
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"text\" name=\"\" placeholder=\"เลขบัตรประชาชน*\">
                    </div>
                  </div>

                  <div class=\"col-md-6\">
                    <div class=\"form-group select-wrapper\">
                          <select class=\"form-custom\">
                              <option>เรื่องที่ต้องการสอบถาม**</option>
                              <option>เรื่องที่ต้องการสอบถาม**</option>
                              <option>เรื่องที่ต้องการสอบถาม**</option>
                          </select>
                    </div>
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"email\" name=\"\" placeholder=\"เบอร์โทรศัพท์\">
                    </div>
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"text\" name=\"\" placeholder=\"เลขที่กรมธรรม์\">
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"form-group\">
                      <textarea class=\"form-custom\" rows=\"6\" placeholder=\"ข้อความ...\"></textarea>
                    </div>
                  </div>

                  <div class=\"col-md-12 text-center\">
                    <a href=\"#\" class=\"btn btn-violet\">ส่งข้อมูล</a>
                  </div>
                </div>
              </div>
          </div>
     </div>
     
  </section>
{% endblock %}

{% block js %}{% endblock %}", "@f/contact.twig", "/Applications/MAMP/htdocs/insurance/application/views/contact.twig");
    }
}
