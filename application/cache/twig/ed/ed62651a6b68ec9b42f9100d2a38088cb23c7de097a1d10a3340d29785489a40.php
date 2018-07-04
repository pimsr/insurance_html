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
        echo twig_escape_filter($this->env, ((isset($context["link_cover"]) ? $context["link_cover"] : null) . $this->getAttribute((isset($context["cover"]) ? $context["cover"] : null), "img", array())), "html", null, true);
        echo "');\">
 \t\t<div class=\"banner-caption\">
 \t\t\t<h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cover"]) ? $context["cover"] : null), ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
        echo "</h2>
 \t\t</div>
 \t\t<div class=\"overlay\"></div>
 \t</section>
  <section class=\"content-p-top\">
     <div class=\"container\">
          <div class=\"\">
              <h3 class=\"title color-violet2 text-center\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
        echo "</h3>
              <div class=\"text-center\">
                ";
        // line 15
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), ("subtitle_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true));
        echo "
              </div>

              <div class=\"row my-5\">
                <div class=\"col-md-6\">
                  <div class=\"bg-gray contact-list text-center\">
                      <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-location.png\">
                      <h6 class=\"color-violet2 my-3\">ที่อยู่บริษัท</h6>
                      <p>
                        ";
        // line 24
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), ("address_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true));
        echo "
                      </p>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"bg-gray contact-list text-center\">
                      <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-time.png\">
                      <h6 class=\"color-violet2 my-3\">เวลาทำการ</h6>
                      <p>
                        ";
        // line 33
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), ("time_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true));
        echo "
                      </p>
                  </div>
                </div>
              </div>

              <div class=\"row mt-5 bg-gray contact-list\">
                <div class=\"col-md-12 text-center\">
                    <a href=\"tel: ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "claim_tel", array()), "html", null, true);
        echo "\"><h4 class=\"color-violet2 mb-4\" >ติดต่อเรื่องเคลม  ( ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "claim_tel", array()), "html", null, true);
        echo " )</h4></a>
                    <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "claim_link", array()), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-violet\">ดูข้อมูลการเคลม</a>
                </div>
              </div>
              
          </div>

          <div class=\"content-p-top\">
              <h3 class=\"color-violet2 text-center title\">ติดต่อประกันลูก</h3>
              <p class=\"text-center\">โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อ</p>

              <form class=\"mt-5\" action=\"";
        // line 52
        echo twig_escape_filter($this->env, base_url("contact/sendMsg"), "html", null, true);
        echo "\" method=\"post\">
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"text\" name=\"name\" placeholder=\"ช่ือ-นามสกุล\" required>
                    </div>
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"email\" name=\"email\" placeholder=\"อีเมล์\" required>
                    </div>
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"text\" name=\"card_id\" placeholder=\"เลขบัตรประชาชน*\" required>
                    </div>
                  </div>

                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"text\" name=\"subject\" placeholder=\"เรื่องที่ต้องการสอบถาม**\" required>
                    </div>
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"text\" name=\"tel\" placeholder=\"เบอร์โทรศัพท์\" required>
                    </div>
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"text\" name=\"policy_number\" placeholder=\"เลขที่กรมธรรม์\" required>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"form-group\">
                      <textarea class=\"form-custom\" rows=\"6\" name=\"message\" laceholder=\"ข้อความ...\" required></textarea>
                    </div>
                  </div>

                  <div class=\"col-md-12 text-center\">
                    <button type=\"submit\" class=\"btn btn-violet\">ส่งข้อมูล</button>
                  </div>
                </div>
              </form>
          </div>
     </div>
     
  </section>
";
    }

    // line 95
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
        return array (  159 => 95,  113 => 52,  100 => 42,  94 => 41,  83 => 33,  77 => 30,  68 => 24,  62 => 21,  53 => 15,  48 => 13,  38 => 6,  32 => 4,  29 => 3,  11 => 1,);
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
 \t<section class=\"banner\" style=\"background-image: url('{{ link_cover~cover.img }}');\">
 \t\t<div class=\"banner-caption\">
 \t\t\t<h2>{{ attribute(cover, 'title_'~lang) }}</h2>
 \t\t</div>
 \t\t<div class=\"overlay\"></div>
 \t</section>
  <section class=\"content-p-top\">
     <div class=\"container\">
          <div class=\"\">
              <h3 class=\"title color-violet2 text-center\">{{ attribute(data, 'title_'~lang) }}</h3>
              <div class=\"text-center\">
                {{ attribute(data, 'subtitle_'~lang)|nl2br }}
              </div>

              <div class=\"row my-5\">
                <div class=\"col-md-6\">
                  <div class=\"bg-gray contact-list text-center\">
                      <img src=\"{{ link_img }}icon/icon-location.png\">
                      <h6 class=\"color-violet2 my-3\">ที่อยู่บริษัท</h6>
                      <p>
                        {{ attribute(data, 'address_'~lang)|nl2br }}
                      </p>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"bg-gray contact-list text-center\">
                      <img src=\"{{ link_img }}icon/icon-time.png\">
                      <h6 class=\"color-violet2 my-3\">เวลาทำการ</h6>
                      <p>
                        {{ attribute(data, 'time_'~lang)|nl2br }}
                      </p>
                  </div>
                </div>
              </div>

              <div class=\"row mt-5 bg-gray contact-list\">
                <div class=\"col-md-12 text-center\">
                    <a href=\"tel: {{ data.claim_tel }}\"><h4 class=\"color-violet2 mb-4\" >ติดต่อเรื่องเคลม  ( {{ data.claim_tel }} )</h4></a>
                    <a href=\"{{ data.claim_link }}\" target=\"_blank\" class=\"btn btn-violet\">ดูข้อมูลการเคลม</a>
                </div>
              </div>
              
          </div>

          <div class=\"content-p-top\">
              <h3 class=\"color-violet2 text-center title\">ติดต่อประกันลูก</h3>
              <p class=\"text-center\">โลเล็ม อิปซัม (lorem ipsum) — เป็นข้อความแทนที่ (placeholder text) ใช้เพื่อลดความสนใจต่อ</p>

              <form class=\"mt-5\" action=\"{{ base_url('contact/sendMsg') }}\" method=\"post\">
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"text\" name=\"name\" placeholder=\"ช่ือ-นามสกุล\" required>
                    </div>
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"email\" name=\"email\" placeholder=\"อีเมล์\" required>
                    </div>
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"text\" name=\"card_id\" placeholder=\"เลขบัตรประชาชน*\" required>
                    </div>
                  </div>

                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"text\" name=\"subject\" placeholder=\"เรื่องที่ต้องการสอบถาม**\" required>
                    </div>
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"text\" name=\"tel\" placeholder=\"เบอร์โทรศัพท์\" required>
                    </div>
                    <div class=\"form-group\">
                      <input class=\"form-custom\" type=\"text\" name=\"policy_number\" placeholder=\"เลขที่กรมธรรม์\" required>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"form-group\">
                      <textarea class=\"form-custom\" rows=\"6\" name=\"message\" laceholder=\"ข้อความ...\" required></textarea>
                    </div>
                  </div>

                  <div class=\"col-md-12 text-center\">
                    <button type=\"submit\" class=\"btn btn-violet\">ส่งข้อมูล</button>
                  </div>
                </div>
              </form>
          </div>
     </div>
     
  </section>
{% endblock %}

{% block js %}{% endblock %}", "@f/contact.twig", "/Applications/MAMP/htdocs/insurance/application/views/contact.twig");
    }
}
