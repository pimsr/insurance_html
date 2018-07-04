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
 \t<section id=\"main\" class=\" page-insurance\">
 \t\t<div class=\"container\">
 \t\t\t<div class=\"content-p-top content-p-bottom \">
 \t\t\t\t <h3 class=\"title color-violet2 text-center\">ประกันสุขภาพลูกทั้งหมด</h3>
 \t\t\t</div>
 \t\t\t<div class=\"row\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["info"]) ? $context["info"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 17
            echo "                ";
            $context["icon"] = (((trim($this->getAttribute($context["value"], "icon", array())) == "")) ? (((isset($context["link_img"]) ? $context["link_img"] : null) . "default/icon.png")) : (((isset($context["link_insurance"]) ? $context["link_insurance"] : null) . $this->getAttribute($context["value"], "icon", array()))));
            // line 18
            echo "\t \t\t\t<div class=\"col-12 col-md-6\">
\t \t\t\t\t<div class=\"service2\">
\t \t\t\t\t\t<div class=\"list_ active\">
                            <div class=\"icon\" style=\"background-image: url('";
            // line 21
            echo twig_escape_filter($this->env, ((isset($context["link_insurance"]) ? $context["link_insurance"] : null) . $this->getAttribute($context["value"], "icon", array())), "html", null, true);
            echo "')\"></div>
                            <h4 class=\"text-center\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "</h4>
                            <div class=\"service-content text-center\">
                                <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("caption_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "</p>
                                <p class=\"color-violet2\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("note_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "</p>
                                <a class=\"btn btn-violet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, (base_url("info/detail/") . $this->getAttribute($context["value"], "id", array())), "html", null, true);
            echo "\">ดูรายละเอียด</a>
                            </div>
                        </div>
\t \t\t\t\t</div>
\t \t\t\t</div>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t \t\t</div>
 \t\t</div>
 \t</section>
 \t<section>
 \t\t<div class=\"h150\"></div>
 \t</section>
 \t<section id=\"home-contact\" class=\"content-p-top bg-gray content-p-bottom home-contact-inner\">
      <div class=\"container\">
          <h3 class=\"title color-violet2\"><img draggable=\"false\" class=\"emoji\" alt=\"\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/phone-contact.png\"> ให้เราติดต่อคุณ</h3>
          <form class=\"row mt-5 contact-position\"  action=\"";
        // line 41
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
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "insurance", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 63
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
        // line 65
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
        // line 75
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "baby.png\">
    </section>
  <!-- home-contact -->   
    <section class=\"content-p-top content-p-bottom\">
       <div class=\"container\">
            <div class=\"content-pcontent-p\">
                <h3 class=\"title color-violet2 text-center\">";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["how_head"]) ? $context["how_head"] : null), ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
        echo "</h3>
                <div class=\"text-center mt-4 mb-4\">
                    ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["how_head"]) ? $context["how_head"] : null), ("desc_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
        echo "
                </div>

                <div class=\"in-list\">
                    <div class=\"row\">
                        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["how_content"]) ? $context["how_content"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 89
            echo "                        ";
            $context["icon"] = (((trim($this->getAttribute($context["value"], "icon", array())) == "")) ? (((isset($context["link_img"]) ? $context["link_img"] : null) . "default/icon.png")) : (((isset($context["link_insurance"]) ? $context["link_insurance"] : null) . $this->getAttribute($context["value"], "icon", array()))));
            // line 90
            echo "                        <div class=\"col-md-6\">
                           <div class=\"media\">
                              <img width=\"80\" class=\"align-self-center mr-3\" src=\"";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "\">
                              <div class=\"media-body align-self-center\">
                                <h5 class=\"mt-0 color-violet2\">";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "</h5>
                                <p class=\"mb-0\">";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("desc_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "</p>
                              </div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                    </div>
               </div>
            </div>
       </div>
       
    </section>
";
    }

    // line 108
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
        return array (  222 => 108,  212 => 100,  201 => 95,  197 => 94,  190 => 92,  186 => 90,  183 => 89,  179 => 88,  171 => 83,  166 => 81,  157 => 75,  145 => 65,  134 => 63,  130 => 62,  106 => 41,  102 => 40,  92 => 32,  80 => 26,  76 => 25,  72 => 24,  67 => 22,  63 => 21,  58 => 18,  55 => 17,  51 => 16,  38 => 6,  32 => 4,  29 => 3,  11 => 1,);
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
 \t\t\t<h2>{{ attribute(cover,'title_'~lang) }}</h2>
 \t\t</div>
 \t\t<div class=\"overlay\"></div>
 \t</section>
 \t<section id=\"main\" class=\" page-insurance\">
 \t\t<div class=\"container\">
 \t\t\t<div class=\"content-p-top content-p-bottom \">
 \t\t\t\t <h3 class=\"title color-violet2 text-center\">ประกันสุขภาพลูกทั้งหมด</h3>
 \t\t\t</div>
 \t\t\t<div class=\"row\">
                {% for value in info %}
                {% set icon = trim(value.icon) == '' ?  link_img~'default/icon.png' : link_insurance~value.icon %}
\t \t\t\t<div class=\"col-12 col-md-6\">
\t \t\t\t\t<div class=\"service2\">
\t \t\t\t\t\t<div class=\"list_ active\">
                            <div class=\"icon\" style=\"background-image: url('{{ link_insurance~value.icon }}')\"></div>
                            <h4 class=\"text-center\">{{ attribute(value, 'title_'~lang) }}</h4>
                            <div class=\"service-content text-center\">
                                <p>{{ attribute(value, 'caption_'~lang) }}</p>
                                <p class=\"color-violet2\">{{ attribute(value, 'note_'~lang) }}</p>
                                <a class=\"btn btn-violet\" href=\"{{ base_url('info/detail/')~value.id }}\">ดูรายละเอียด</a>
                            </div>
                        </div>
\t \t\t\t\t</div>
\t \t\t\t</div>
                 {% endfor %}
\t \t\t</div>
 \t\t</div>
 \t</section>
 \t<section>
 \t\t<div class=\"h150\"></div>
 \t</section>
 \t<section id=\"home-contact\" class=\"content-p-top bg-gray content-p-bottom home-contact-inner\">
      <div class=\"container\">
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
    <section class=\"content-p-top content-p-bottom\">
       <div class=\"container\">
            <div class=\"content-pcontent-p\">
                <h3 class=\"title color-violet2 text-center\">{{ attribute(how_head, 'title_'~lang) }}</h3>
                <div class=\"text-center mt-4 mb-4\">
                    {{ attribute(how_head, 'desc_'~lang) }}
                </div>

                <div class=\"in-list\">
                    <div class=\"row\">
                        {% for value in how_content %}
                        {% set icon = trim(value.icon) == '' ?  link_img~'default/icon.png' : link_insurance~value.icon %}
                        <div class=\"col-md-6\">
                           <div class=\"media\">
                              <img width=\"80\" class=\"align-self-center mr-3\" src=\"{{ icon }}\" alt=\"{{ attribute(value, 'title_'~lang) }}\">
                              <div class=\"media-body align-self-center\">
                                <h5 class=\"mt-0 color-violet2\">{{ attribute(value, 'title_'~lang) }}</h5>
                                <p class=\"mb-0\">{{ attribute(value, 'desc_'~lang) }}</p>
                              </div>
                            </div>
                        </div>
                        {% endfor %}
                    </div>
               </div>
            </div>
       </div>
       
    </section>
{% endblock %}

{% block js %}{% endblock %}", "@f/insurance.twig", "/Applications/MAMP/htdocs/insurance/application/views/insurance.twig");
    }
}
