<?php

/* @f/agent.twig */
class __TwigTemplate_4640a7d78cda78d07568adcbdb715b94f86c6db9a067219f71bccee49c98eccd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "@f/agent.twig", 1);
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
 \t\t\t<h2>ตัวแทนของเรา</h2>
 \t\t</div>
 \t\t<div class=\"overlay\"></div>
 \t</section>
  <section class=\"content-p-top\">
     <div class=\"container\">
          
          <div class=\"agent\">
              <h3 class=\"title color-violet2 text-center\">ให้คำแนะนำโดยตัวแทนคุณภาพ</h3>
              <div class=\"text-center\">
                โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง<br> สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า
              </div>

              <div class=\"row my-5\">
                <div class=\"col-md-4\">
                  <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, base_url("contact/agent/aia"), "html", null, true);
        echo "\">
                    <div class=\"card\">
                      <img class=\"card-img-top\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "staff1.png\" alt=\"Card image cap\">
                      <div class=\"card-body text-center\">
                        <h5 class=\"card-title mb-0 color-violet2\">Cowel Ben</h5>
                        <h6 class=\"color-violet2\">(เอ ไอ เอ)</h6>
                        <p class=\"card-text\">โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) </p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class=\"col-md-4\">
                  <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, base_url("contact/agent/thailife"), "html", null, true);
        echo "\">
                    <div class=\"card\">
                      <img class=\"card-img-top\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "staff2.png\" alt=\"Card image cap\">
                      <div class=\"card-body text-center \">
                        <h5 class=\"card-title mb-0 color-violet2\">Cowel Ben</h5>
                        <h6 class=\"color-violet2\">(ไทยประกันชีวิต)</h6>
                        <p class=\"card-text\">โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) </p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class=\"col-md-4\">
                  <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, base_url("contact/agent/prudential"), "html", null, true);
        echo "\">
                    <div class=\"card\">
                      <img class=\"card-img-top\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "staff3.png\" alt=\"Card image cap\">
                      <div class=\"card-body text-center \">
                        <h5 class=\"card-title mb-0 color-violet2\">Cowel Ben</h5>
                        <h6 class=\"color-violet2\">(พรูเดนเชียล)</h6>
                        <p class=\"card-text\">โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) </p>
                      </div>
                    </div>
                  </a>
                </div>
               
              </div>

              <div class=\"row mt-5 bg-gray contact-list\">
                <div class=\"col-md-12 text-center\">
                    <h4 class=\"color-violet2 mb-4\" >ติดต่อเรื่องเคลม  ( 800 - 123 - 4567 )</h4>
                    <a href=\"#\" class=\"btn btn-violet\">ดูข้อมูลการเคลม</a>
                </div>
              </div>
              
          </div>

          
     </div>
     
  </section>
";
    }

    // line 74
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@f/agent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 74,  94 => 47,  89 => 45,  76 => 35,  71 => 33,  58 => 23,  53 => 21,  32 => 4,  29 => 3,  11 => 1,);
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
 \t\t\t<h2>ตัวแทนของเรา</h2>
 \t\t</div>
 \t\t<div class=\"overlay\"></div>
 \t</section>
  <section class=\"content-p-top\">
     <div class=\"container\">
          
          <div class=\"agent\">
              <h3 class=\"title color-violet2 text-center\">ให้คำแนะนำโดยตัวแทนคุณภาพ</h3>
              <div class=\"text-center\">
                โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อข้อความที่นำมาแสดง<br> สำหรับการแสดงลักษณะของ ฟอนต์ การพิมพ์และการจัดหน้า
              </div>

              <div class=\"row my-5\">
                <div class=\"col-md-4\">
                  <a href=\"{{ base_url('contact/agent/aia') }}\">
                    <div class=\"card\">
                      <img class=\"card-img-top\" src=\"{{ link_img }}staff1.png\" alt=\"Card image cap\">
                      <div class=\"card-body text-center\">
                        <h5 class=\"card-title mb-0 color-violet2\">Cowel Ben</h5>
                        <h6 class=\"color-violet2\">(เอ ไอ เอ)</h6>
                        <p class=\"card-text\">โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) </p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class=\"col-md-4\">
                  <a href=\"{{ base_url('contact/agent/thailife') }}\">
                    <div class=\"card\">
                      <img class=\"card-img-top\" src=\"{{ link_img }}staff2.png\" alt=\"Card image cap\">
                      <div class=\"card-body text-center \">
                        <h5 class=\"card-title mb-0 color-violet2\">Cowel Ben</h5>
                        <h6 class=\"color-violet2\">(ไทยประกันชีวิต)</h6>
                        <p class=\"card-text\">โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) </p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class=\"col-md-4\">
                  <a href=\"{{ base_url('contact/agent/prudential') }}\">
                    <div class=\"card\">
                      <img class=\"card-img-top\" src=\"{{ link_img }}staff3.png\" alt=\"Card image cap\">
                      <div class=\"card-body text-center \">
                        <h5 class=\"card-title mb-0 color-violet2\">Cowel Ben</h5>
                        <h6 class=\"color-violet2\">(พรูเดนเชียล)</h6>
                        <p class=\"card-text\">โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) </p>
                      </div>
                    </div>
                  </a>
                </div>
               
              </div>

              <div class=\"row mt-5 bg-gray contact-list\">
                <div class=\"col-md-12 text-center\">
                    <h4 class=\"color-violet2 mb-4\" >ติดต่อเรื่องเคลม  ( 800 - 123 - 4567 )</h4>
                    <a href=\"#\" class=\"btn btn-violet\">ดูข้อมูลการเคลม</a>
                </div>
              </div>
              
          </div>

          
     </div>
     
  </section>
{% endblock %}

{% block js %}{% endblock %}", "@f/agent.twig", "/Applications/MAMP/htdocs/insurance/application/views/agent.twig");
    }
}
