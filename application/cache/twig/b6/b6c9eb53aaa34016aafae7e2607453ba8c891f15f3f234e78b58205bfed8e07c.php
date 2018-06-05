<?php

/* @f/agent-thailife.twig */
class __TwigTemplate_c9137438beea194d016a1aee9e71bfe35bb9e304722d8beaf97f5ccbb59ba439 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "@f/agent-thailife.twig", 1);
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
        echo "banner-main5.png');\">
 \t\t<div class=\"banner-caption\">
 \t\t\t<h2>ตัวแทน ไทยประกันชีวิต</h2>
 \t\t</div>
 \t\t<div class=\"overlay\"></div>
 \t</section>
  <section class=\"content-p-top\">
     <div class=\"container\">
          
          <div class=\"agent\">
              <h3 class=\"title color-violet2 text-center\">ตัวแทน ไทยประกันชีวิต</h3>
              <div class=\"text-center\">
                โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง<br> สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า
              </div>

              <div class=\"row my-5\">
                <div class=\"col-md-4 pr-5\">
                    <div class=\"staff-img\"><img class=\"img-fluid\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "staff2.png\"></div>
                </div>
                <div class=\"col-md-8\">
                    <div class=\"\">
                      <div class=\"agent-info row px-5 py-5 \">
                        <div class=\"col-md-12\">
                          <h6 class=\"color-violet2\">Cowel Ben</h6>
                          <p class=\"color-violet2\">(เอ ไอ เอ)</p>

                          <div>
                            โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า
                            <br> <br>
                            ข้อความโลเร็ม อิปซัมเป็นข้อความส่วนหนึ่งในภาษาละตินที่แต่งโดย ซิเซโร โดยมีการตัดต่อคำให้ดูเหมือนเป็นข้อความที่ไม่มีความหมายและไม่ใช่ภาษาละตินที่ถูกต้อง
                          </div>

                          <div class=\"link mt-3 \">
                            <ul class=\"list-inline mb-0\">
                              
                              <li class=\"list-inline-item\">
                                  <img  src=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-link.png\">
                              </li>
                              <li class=\"list-inline-item\">
                                  <a href=\"tel:02-201-1000\">เข้าสู่เว็บไซต์ ไทยประกันชีวิต</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class=\"row agent-contact bg-violet2 px-5 py-3 \">
                        <div class=\"col-md-6\">
                          <div class=\"media\">
                            <img class=\"align-self-center mr-3\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-location-white.png\" alt=\"\">
                            <div class=\"media-body\">
                              <h5 class=\"mt-0\">Address</h5>
                              <p>PO Box 16122 Collins Street West<br> Victoria - Australia Zip - 3000</p>
                            </div>
                          </div>
                        </div>
                        <div class=\"col-md-6\">
                          <div class=\"media\">
                            <img class=\"align-self-center mr-3\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-tel-footer.png\" alt=\"\">
                            <div class=\"media-body\">
                              <h5 class=\"mt-0\">Address</h5>
                              <p>+66 3 8376 6284 <br>
                                  cowel.ben@ip.com</p>
                            </div>
                          </div>
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

    // line 83
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@f/agent-thailife.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 83,  103 => 62,  91 => 53,  75 => 40,  53 => 21,  32 => 4,  29 => 3,  11 => 1,);
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
 \t<section class=\"banner\" style=\"background-image: url('{{ link_img }}banner-main5.png');\">
 \t\t<div class=\"banner-caption\">
 \t\t\t<h2>ตัวแทน ไทยประกันชีวิต</h2>
 \t\t</div>
 \t\t<div class=\"overlay\"></div>
 \t</section>
  <section class=\"content-p-top\">
     <div class=\"container\">
          
          <div class=\"agent\">
              <h3 class=\"title color-violet2 text-center\">ตัวแทน ไทยประกันชีวิต</h3>
              <div class=\"text-center\">
                โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง<br> สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า
              </div>

              <div class=\"row my-5\">
                <div class=\"col-md-4 pr-5\">
                    <div class=\"staff-img\"><img class=\"img-fluid\" src=\"{{ link_img }}staff2.png\"></div>
                </div>
                <div class=\"col-md-8\">
                    <div class=\"\">
                      <div class=\"agent-info row px-5 py-5 \">
                        <div class=\"col-md-12\">
                          <h6 class=\"color-violet2\">Cowel Ben</h6>
                          <p class=\"color-violet2\">(เอ ไอ เอ)</p>

                          <div>
                            โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า
                            <br> <br>
                            ข้อความโลเร็ม อิปซัมเป็นข้อความส่วนหนึ่งในภาษาละตินที่แต่งโดย ซิเซโร โดยมีการตัดต่อคำให้ดูเหมือนเป็นข้อความที่ไม่มีความหมายและไม่ใช่ภาษาละตินที่ถูกต้อง
                          </div>

                          <div class=\"link mt-3 \">
                            <ul class=\"list-inline mb-0\">
                              
                              <li class=\"list-inline-item\">
                                  <img  src=\"{{ link_img }}icon/icon-link.png\">
                              </li>
                              <li class=\"list-inline-item\">
                                  <a href=\"tel:02-201-1000\">เข้าสู่เว็บไซต์ ไทยประกันชีวิต</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class=\"row agent-contact bg-violet2 px-5 py-3 \">
                        <div class=\"col-md-6\">
                          <div class=\"media\">
                            <img class=\"align-self-center mr-3\" src=\"{{ link_img }}icon/icon-location-white.png\" alt=\"\">
                            <div class=\"media-body\">
                              <h5 class=\"mt-0\">Address</h5>
                              <p>PO Box 16122 Collins Street West<br> Victoria - Australia Zip - 3000</p>
                            </div>
                          </div>
                        </div>
                        <div class=\"col-md-6\">
                          <div class=\"media\">
                            <img class=\"align-self-center mr-3\" src=\"{{ link_img }}icon/icon-tel-footer.png\" alt=\"\">
                            <div class=\"media-body\">
                              <h5 class=\"mt-0\">Address</h5>
                              <p>+66 3 8376 6284 <br>
                                  cowel.ben@ip.com</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
              
          </div>

          
     </div>
     
  </section>
{% endblock %}

{% block js %}{% endblock %}", "@f/agent-thailife.twig", "/Applications/MAMP/htdocs/insurance/application/views/agent-thailife.twig");
    }
}
