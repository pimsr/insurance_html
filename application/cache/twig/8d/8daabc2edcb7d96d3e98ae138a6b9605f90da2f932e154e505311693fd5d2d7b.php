<?php

/* @f/hospital.twig */
class __TwigTemplate_4e6a89d8a281ba3e5a1b288747b1460dd954ad792a5896d557d1a545846897ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "@f/hospital.twig", 1);
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
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["headline"]) ? $context["headline"] : null), ("title_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
        echo "</h3>
              <div class=\"text-center\">
                ";
        // line 16
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["headline"]) ? $context["headline"] : null), ("subtitle_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true));
        echo "
              </div>

              <div class=\"py-5 list-head\">
                <form class=\"\">
                  <div class=\"row\">
                      <div class=\"col-sm-8\">
                          <div class=\"input-group \">
                            <input  type=\"text\" class=\"form-custom search\" id=\"input-filter\" placeholder=\"ค้นหาโรงพยาบาล\">
                          </div>
                      </div>
                      
                      <div class=\"col-sm-4\">
                          <div class=\"row\">
                            <label for=\"inputPassword\" class=\"col-sm-4  color-violet2 label-filter\">Filters :</label>
                            <div class=\"col-sm-8\">
                              <div class=\"select-wrapper\">
                                  <select class=\"form-custom\" id=\"select-filter\">
                                    <option value=\"0\">ทั้งหมด*</option>
                                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["province"]) ? $context["province"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 36
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("name_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                                  </select>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </form>

                  <div class=\"mt-4\">
                    <div id=\"accordion\" class=\"accordion\">
                      ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 49
            echo "                      <div class=\"card\" data-filter=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("name_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "\" data-province=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "province_id", array()), "html", null, true);
            echo "\">
                        <div class=\"card-header\" id=\"heading";
            // line 50
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
                          <h5 class=\"mb-0\">
                            <button class=\"btn btn-link ";
            // line 52
            echo ((($context["key"] == 0)) ? ("") : ("collapsed"));
            echo "\" data-toggle=\"collapse\" data-target=\"#collapse";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" aria-expanded=\"";
            echo twig_escape_filter($this->env, ($context["key"] == 0), "html", null, true);
            echo "\" aria-controls=\"collapse";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
                              <img src=\"";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
            echo "icon/icon-hospital.png\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("name_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "
                            </button>
                          </h5>
                        </div>
                        <div id=\"collapse";
            // line 57
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" class=\"collapse ";
            echo ((($context["key"] == 0)) ? ("show") : (""));
            echo "\" aria-labelledby=\"heading";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" data-parent=\"#accordion\">
                          <div class=\"card-body\">
                            ";
            // line 59
            $context["room"] = json_decode($this->getAttribute($context["value"], ("room_" . (isset($context["lang"]) ? $context["lang"] : null))));
            // line 60
            echo "                            ";
            $context["price"] = json_decode($this->getAttribute($context["value"], "price", array()));
            // line 61
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["room"]) ? $context["room"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 62
                echo "                            <div class=\"list-hospital\">
                              <ul>
                                <li>";
                // line 64
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</li>
                                <li>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["price"]) ? $context["price"] : null), $context["key"], array(), "array"), "html", null, true);
                echo "</li>
                              </ul>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                            <div class=\"link mt-3 \">
                              <ul class=\"list-inline mb-0\">
                                
                                ";
            // line 72
            if (trim($this->getAttribute($context["value"], "tel", array()))) {
                // line 73
                echo "                                <li class=\"list-inline-item\">
                                    <img src=\"";
                // line 74
                echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
                echo "icon/icon-tel.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"tel:";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "tel", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "tel", array()), "html", null, true);
                echo "</a>
                                </li>
                                ";
            }
            // line 80
            echo "
                                ";
            // line 81
            if (trim($this->getAttribute($context["value"], "link", array()))) {
                // line 82
                echo "                                <li class=\"list-inline-item\">
                                    <img src=\"";
                // line 83
                echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
                echo "icon/icon-link.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "link", array()), "html", null, true);
                echo "\" target=\"_blank\">เข้าเว็บไซต์</a>
                                </li>
                                ";
            }
            // line 89
            echo "                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                    </div>

                    ";
        // line 101
        echo "                  </div>
              </div>

              
          </div>
     </div>
     
  </section>
";
    }

    // line 111
    public function block_js($context, array $blocks = array())
    {
        // line 112
        echo "<script>
(function(){
  var province = null;
  var text = null;
  \$('#select-filter').change(function(){
    var val = \$(this).val();
    \$('#accordion .card').hide();
    \$('#accordion .card[data-province=\"'+val+'\"]').fadeIn(300);
    province = val;
  });
  \$('#input-filter').keyup(function(){
    var val = \$(this).val();
    text = val;
    \$('#accordion .card').hide();
    if(val.trim() == ''){
      \$('#accordion .card').fadeIn(300);
    }else{
      \$('#accordion .card[data-filter*=\"'+val+'\"]').fadeIn(300);
    }
  });
})();
</script>
";
    }

    public function getTemplateName()
    {
        return "@f/hospital.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 112,  246 => 111,  234 => 101,  230 => 95,  219 => 89,  213 => 86,  207 => 83,  204 => 82,  202 => 81,  199 => 80,  191 => 77,  185 => 74,  182 => 73,  180 => 72,  175 => 69,  165 => 65,  161 => 64,  157 => 62,  152 => 61,  149 => 60,  147 => 59,  138 => 57,  129 => 53,  119 => 52,  114 => 50,  107 => 49,  103 => 48,  91 => 38,  80 => 36,  76 => 35,  54 => 16,  49 => 14,  38 => 6,  32 => 4,  29 => 3,  11 => 1,);
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
              <h3 class=\"title color-violet2 text-center\">{{ attribute(headline, 'title_'~lang) }}</h3>
              <div class=\"text-center\">
                {{ attribute(headline, 'subtitle_'~lang)|nl2br }}
              </div>

              <div class=\"py-5 list-head\">
                <form class=\"\">
                  <div class=\"row\">
                      <div class=\"col-sm-8\">
                          <div class=\"input-group \">
                            <input  type=\"text\" class=\"form-custom search\" id=\"input-filter\" placeholder=\"ค้นหาโรงพยาบาล\">
                          </div>
                      </div>
                      
                      <div class=\"col-sm-4\">
                          <div class=\"row\">
                            <label for=\"inputPassword\" class=\"col-sm-4  color-violet2 label-filter\">Filters :</label>
                            <div class=\"col-sm-8\">
                              <div class=\"select-wrapper\">
                                  <select class=\"form-custom\" id=\"select-filter\">
                                    <option value=\"0\">ทั้งหมด*</option>
                                    {% for value in province %}
                                    <option value=\"{{ value.id }}\">{{ attribute(value, 'name_'~lang) }}</option>
                                    {% endfor %}
                                  </select>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </form>

                  <div class=\"mt-4\">
                    <div id=\"accordion\" class=\"accordion\">
                      {% for key, value in data %}
                      <div class=\"card\" data-filter=\"{{ attribute(value, 'name_'~lang) }}\" data-province=\"{{ value.province_id }}\">
                        <div class=\"card-header\" id=\"heading{{ key }}\">
                          <h5 class=\"mb-0\">
                            <button class=\"btn btn-link {{ key == 0 ? '' : 'collapsed' }}\" data-toggle=\"collapse\" data-target=\"#collapse{{ key }}\" aria-expanded=\"{{ key == 0 }}\" aria-controls=\"collapse{{ key }}\">
                              <img src=\"{{ link_img }}icon/icon-hospital.png\"> {{ attribute(value, 'name_'~lang) }}
                            </button>
                          </h5>
                        </div>
                        <div id=\"collapse{{ key }}\" class=\"collapse {{ key == 0 ? 'show' : '' }}\" aria-labelledby=\"heading{{ key }}\" data-parent=\"#accordion\">
                          <div class=\"card-body\">
                            {% set room = json_decode(attribute(value, 'room_'~lang) ) %}
                            {% set price = json_decode(value.price) %}
                            {% for key, value in room %}
                            <div class=\"list-hospital\">
                              <ul>
                                <li>{{ value }}</li>
                                <li>{{ price[key] }}</li>
                              </ul>
                            </div>
                            {% endfor %}
                            <div class=\"link mt-3 \">
                              <ul class=\"list-inline mb-0\">
                                
                                {% if value.tel|trim %}
                                <li class=\"list-inline-item\">
                                    <img src=\"{{ link_img }}icon/icon-tel.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"tel:{{ value.tel }}\">{{ value.tel }}</a>
                                </li>
                                {% endif %}

                                {% if value.link|trim %}
                                <li class=\"list-inline-item\">
                                    <img src=\"{{ link_img }}icon/icon-link.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"{{ value.link }}\" target=\"_blank\">เข้าเว็บไซต์</a>
                                </li>
                                {% endif %}
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      {% endfor %}
                    </div>

                    {# <div class=\"text-center\">
                      <p><img src=\"{{ link_img }}icon/icon-loading.png\"></p>
                      <p class=\"color-violet2\">กำลังโหลดเพิ่ม</p>
                    </div> #}
                  </div>
              </div>

              
          </div>
     </div>
     
  </section>
{% endblock %}

{% block js %}
<script>
(function(){
  var province = null;
  var text = null;
  \$('#select-filter').change(function(){
    var val = \$(this).val();
    \$('#accordion .card').hide();
    \$('#accordion .card[data-province=\"'+val+'\"]').fadeIn(300);
    province = val;
  });
  \$('#input-filter').keyup(function(){
    var val = \$(this).val();
    text = val;
    \$('#accordion .card').hide();
    if(val.trim() == ''){
      \$('#accordion .card').fadeIn(300);
    }else{
      \$('#accordion .card[data-filter*=\"'+val+'\"]').fadeIn(300);
    }
  });
})();
</script>
{% endblock %}", "@f/hospital.twig", "/Applications/MAMP/htdocs/insurance/application/views/hospital.twig");
    }
}
