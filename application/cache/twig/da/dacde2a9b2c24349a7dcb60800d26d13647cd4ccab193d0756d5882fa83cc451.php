<?php

/* @f/plan.twig */
class __TwigTemplate_aef657ed0c1800da673f4690b8c7ebf141e3236463d7382487c37a1710f4343c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "@f/plan.twig", 1);
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
        echo "  <section class=\"banner\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, ((isset($context["link_cover"]) ? $context["link_cover"] : null) . $this->getAttribute((isset($context["cover"]) ? $context["cover"] : null), "img", array())), "html", null, true);
        echo "');\">
    <div class=\"banner-caption\">
      <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cover"]) ? $context["cover"] : null), ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"overlay\"></div>
  </section>
  <!-- Start Service -->
  <section id=\"content\" class=\"content-p-top\">
      <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-12 col-sm-12 col-md-6 \">
                ";
        // line 15
        $context["img"] = (((trim($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content", array()), 0, array(), "array"), "img", array())) == "")) ? (((isset($context["link_img"]) ? $context["link_img"] : null) . "default/detail.png")) : (((isset($context["link_plan"]) ? $context["link_plan"] : null) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content", array()), 0, array(), "array"), "img", array()))));
        // line 16
        echo "                <img class=\"img-fluid\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : null), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content", array()), 0, array(), "array"), ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
        echo "\"/>
              </div>
              <div class=\"col-12 col-sm-12 col-md-6 content-p-bottom\">
                  <h3 class=\"title color-violet2 d-top\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content", array()), 0, array(), "array"), ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
        echo "</h3>
                  <div class=\"service-content\">
                    ";
        // line 22
        echo "                      ";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content", array()), 0, array(), "array"), ("desc_" . (isset($context["lang"]) ? $context["lang"] : null)));
        echo "
                    ";
        // line 23
        echo " 
                  </div>
              </div>
          </div>
      </div>
  </section>
  <div class=\"line-center text-center\">
    <img class=\"img-fluid\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon5.png\">
  </div>
  <section id=\"content2\" class=\"\">
      <div class=\"container\">
          <div class=\"row d-flex\">
              <div class=\"col-12 col-sm-12 col-md-6 content-p-top content-p-bottom order-1 d-top0\">
                  <h3 class=\"title color-violet2 d-top\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content", array()), 1, array(), "array"), ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
        echo "</h3>
                  <div class=\"service-content\">
                    ";
        // line 39
        echo "                      ";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content", array()), 1, array(), "array"), ("desc_" . (isset($context["lang"]) ? $context["lang"] : null)));
        echo "
                    ";
        // line 40
        echo " 
                  </div>
              </div>
              <div class=\"col-12 col-sm-12 col-md-6 order-2\">
                ";
        // line 44
        $context["img"] = (((trim($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content", array()), 1, array(), "array"), "img", array())) == "")) ? (((isset($context["link_img"]) ? $context["link_img"] : null) . "default/detail.png")) : (((isset($context["link_plan"]) ? $context["link_plan"] : null) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content", array()), 1, array(), "array"), "img", array()))));
        // line 45
        echo "                <img class=\"img-fluid\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : null), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content", array()), 1, array(), "array"), ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
        echo "\"/>
              </div>
          </div>
      </div>
  </section>
  <!-- End Service -->
  <section>
    <div class=\"h150\"></div>
  </section>
  <section id=\"home-contact\" class=\"content-p-top bg-gray content-p-bottom home-contact-inner\">
      <div class=\"container  \">
          <h3 class=\"title color-violet2\"><img draggable=\"false\" class=\"emoji\" alt=\"\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/phone-contact.png\"> ให้เราติดต่อคุณ</h3>
          <form class=\"row mt-5 contact-position\"  action=\"";
        // line 57
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
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "insurance", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 79
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
        // line 81
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
        // line 91
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "baby.png\">
  </section>
  <!-- home-contact -->   

  <section class=\"content-p-top\">
      <div class=\"container\">
          
          <div class=\"\">
              <h3 class=\"title color-violet2 text-center\">แพ็คเกจวางแผนการศึกษา</h3>

              <div class=\"list-head pt-5\">
                <div class=\"owl-carousel owl-theme\">
                    ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "package", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 104
            echo "                    <div class=\"item tabs\"><a class=\"btn btn-violet ";
            echo ((($context["key"] == 0)) ? ("activelink") : (""));
            echo "\" href=\"javascript:void();\" data-tag=\"pack";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "</a></div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                </div>
              </div>
              <div class=\"list-content\">
                ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "package", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 110
            echo "                <div class=\"list box-list\" id=\"pack";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
                  <div class=\"table-group\">
                    <div class=\"table-responsive\">
                      ";
            // line 114
            echo "                        ";
            echo $this->getAttribute($context["value"], ("desc_" . (isset($context["lang"]) ? $context["lang"] : null)));
            echo "
                      ";
            // line 115
            echo " 
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "              </div>
          </div>
      </div>
      
  </section>


";
    }

    // line 129
    public function block_js($context, array $blocks = array())
    {
        // line 130
        echo "<script>
  \$(document).ready(function(){
      \$('.tabs a').click(function(){
          var tagid = \$(this).data('tag');
          \$('.tabs a').removeClass('activelink');
          \$(this).addClass('activelink');
          \$( '.box-list' ).slideUp( 'slow', function() {
            \$(this).removeClass('active').addClass('hide');
          });
          \$( '#'+tagid ).slideDown( 'slow', function() {
            \$(this).addClass('active').removeClass('hide');
          });
      });
      \$('.owl-carousel').owlCarousel({
          margin:10,

          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:2
              },
              1000:{
                  items:5
              }
          }
      });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "@f/plan.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 130,  253 => 129,  242 => 120,  232 => 115,  227 => 114,  220 => 110,  216 => 109,  211 => 106,  198 => 104,  194 => 103,  179 => 91,  167 => 81,  156 => 79,  152 => 78,  128 => 57,  124 => 56,  107 => 45,  105 => 44,  99 => 40,  94 => 39,  89 => 36,  80 => 30,  71 => 23,  66 => 22,  61 => 19,  52 => 16,  50 => 15,  38 => 6,  32 => 4,  29 => 3,  11 => 1,);
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
  <section class=\"banner\" style=\"background-image: url('{{ link_cover~cover.img }}');\">
    <div class=\"banner-caption\">
      <h2>{{ attribute(cover, 'title_'~lang) }}</h2>
    </div>
    <div class=\"overlay\"></div>
  </section>
  <!-- Start Service -->
  <section id=\"content\" class=\"content-p-top\">
      <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-12 col-sm-12 col-md-6 \">
                {% set img = trim(data.content[0].img) == '' ?  link_img~'default/detail.png' : link_plan~data.content[0].img %}
                <img class=\"img-fluid\" src=\"{{ img }}\" alt=\"{{ attribute(data.content[0], 'title_'~lang) }}\"/>
              </div>
              <div class=\"col-12 col-sm-12 col-md-6 content-p-bottom\">
                  <h3 class=\"title color-violet2 d-top\">{{ attribute(data.content[0], 'title_'~lang) }}</h3>
                  <div class=\"service-content\">
                    {% autoescape %}
                      {{ attribute(data.content[0],'desc_'~lang)|raw }}
                    {% endautoescape %} 
                  </div>
              </div>
          </div>
      </div>
  </section>
  <div class=\"line-center text-center\">
    <img class=\"img-fluid\" src=\"{{ link_img }}icon/icon5.png\">
  </div>
  <section id=\"content2\" class=\"\">
      <div class=\"container\">
          <div class=\"row d-flex\">
              <div class=\"col-12 col-sm-12 col-md-6 content-p-top content-p-bottom order-1 d-top0\">
                  <h3 class=\"title color-violet2 d-top\">{{ attribute(data.content[1], 'title_'~lang) }}</h3>
                  <div class=\"service-content\">
                    {% autoescape %}
                      {{ attribute(data.content[1],'desc_'~lang)|raw }}
                    {% endautoescape %} 
                  </div>
              </div>
              <div class=\"col-12 col-sm-12 col-md-6 order-2\">
                {% set img = trim(data.content[1].img) == '' ?  link_img~'default/detail.png' : link_plan~data.content[1].img %}
                <img class=\"img-fluid\" src=\"{{ img }}\" alt=\"{{ attribute(data.content[1], 'title_'~lang) }}\"/>
              </div>
          </div>
      </div>
  </section>
  <!-- End Service -->
  <section>
    <div class=\"h150\"></div>
  </section>
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

  <section class=\"content-p-top\">
      <div class=\"container\">
          
          <div class=\"\">
              <h3 class=\"title color-violet2 text-center\">แพ็คเกจวางแผนการศึกษา</h3>

              <div class=\"list-head pt-5\">
                <div class=\"owl-carousel owl-theme\">
                    {% for key, value in data.package %}
                    <div class=\"item tabs\"><a class=\"btn btn-violet {{ key == 0 ? 'activelink' : '' }}\" href=\"javascript:void();\" data-tag=\"pack{{ key }}\">{{ attribute(value, 'title_'~lang) }}</a></div>
                    {% endfor %}
                </div>
              </div>
              <div class=\"list-content\">
                {% for key, value in data.package %}
                <div class=\"list box-list\" id=\"pack{{ key }}\">
                  <div class=\"table-group\">
                    <div class=\"table-responsive\">
                      {% autoescape %}
                        {{ attribute(value,'desc_'~lang)|raw }}
                      {% endautoescape %} 
                    </div>
                  </div>
                </div>
                {% endfor %}
              </div>
          </div>
      </div>
      
  </section>


{% endblock %}

{% block js %}
<script>
  \$(document).ready(function(){
      \$('.tabs a').click(function(){
          var tagid = \$(this).data('tag');
          \$('.tabs a').removeClass('activelink');
          \$(this).addClass('activelink');
          \$( '.box-list' ).slideUp( 'slow', function() {
            \$(this).removeClass('active').addClass('hide');
          });
          \$( '#'+tagid ).slideDown( 'slow', function() {
            \$(this).addClass('active').removeClass('hide');
          });
      });
      \$('.owl-carousel').owlCarousel({
          margin:10,

          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:2
              },
              1000:{
                  items:5
              }
          }
      });
  });
</script>
{% endblock %}", "@f/plan.twig", "/Applications/MAMP/htdocs/insurance/application/views/plan.twig");
    }
}
