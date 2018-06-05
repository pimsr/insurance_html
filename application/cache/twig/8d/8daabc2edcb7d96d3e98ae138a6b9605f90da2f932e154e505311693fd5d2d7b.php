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
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "banner-main2.png');\">
 \t\t<div class=\"banner-caption\">
 \t\t\t<h2>โรงพยาบาลลูกรัก</h2>
 \t\t</div>
 \t\t<div class=\"overlay\"></div>
 \t</section>
  <section class=\"content-p-top\">
     <div class=\"container\">
          
          <div class=\"\">
              <h3 class=\"title color-violet2 text-center\">โรงพยาบาลลูกรัก</h3>
              <div class=\"text-center\">
                หมดกังวลไม่ว่าจะอยู่ที่ไหนของประเทศ เพราะเราใส่ใจในบริการจึงมีโรงพยาบาลเพื่อลูกรักคอยให้การรักษาครอบคลุมทั่วประเทศไทย<br>
                มีโรงพยาบาลในเครือข่ายครอบคลุมทุกการรักษา จึงหมดห่วงเรื่องการรักษาลูกรักได้เลย 
              </div>

              <div class=\"py-5 list-head\">
                <form class=\"\">
                    <div class=\"row\">
                        <div class=\"col-sm-8\">
                            <div class=\"input-group \">
                              
                              <input  type=\"text\" class=\"form-custom search\" id=\"\" placeholder=\"ค้นหาโรงพยาบาล\">
                            </div>
                        </div>
                       
                        <div class=\"col-sm-4\">
                            <div class=\"row\">
                              <label for=\"inputPassword\" class=\"col-sm-4  color-violet2 label-filter\">Filters :</label>
                              <div class=\"col-sm-8\">
                                <div class=\"select-wrapper\">
                                    <select class=\"form-custom\">
                                        <option>ทั้งหมด*</option>
                                        <option>ทั้งหมด*</option>
                                        <option>ทั้งหมด*</option>
                                    </select>
                                </div>
                              </div>
                            </div>
                           
                         
                        </div>
                        
                      </div>
                    
                  </form>

                  <div class=\"mt-4\">
                    <div id=\"accordion\" class=\"accordion\">
                      <div class=\"card\">
                        <div class=\"card-header\" id=\"headingOne\">
                          <h5 class=\"mb-0\">
                            <button class=\"btn btn-link\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                              <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-hospital.png\"> รพ.รามาธิบดี(อาคารสมเด็จพระเทพ)
                            </button>
                          </h5>
                        </div>

                        <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
                          <div class=\"card-body\">
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>

                              
                            </div>
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>
                            </div>
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>
                            </div>

                            <div class=\"link mt-3 \">
                              <ul class=\"list-inline mb-0\">
                                <li class=\"list-inline-item\">
                                    <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-tel.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"tel:02-201-1000\">02-201-1000</a>
                                </li>

                                <li class=\"list-inline-item\">
                                    <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-link.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"tel:02-201-1000\">เข้าเว็บไซต์ รพ</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div><!-- card -->
                      <div class=\"card\">
                        <div class=\"card-header\" id=\"headingTwo\">
                          <h5 class=\"mb-0\">
                            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                              <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-hospital.png\"> รพ.กรุงเทพ
                            </button>
                          </h5>
                        </div>
                        <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordion\">
                          <div class=\"card-body\">
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>

                              
                            </div>
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>
                            </div>
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>
                            </div>

                            <div class=\"link mt-3 \">
                              <ul class=\"list-inline mb-0\">
                                <li class=\"list-inline-item\">
                                    <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-tel.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"tel:02-201-1000\">02-201-1000</a>
                                </li>

                                <li class=\"list-inline-item\">
                                    <img src=\"";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-link.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"tel:02-201-1000\">เข้าเว็บไซต์ รพ</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div><!-- card -->
                      <div class=\"card\">
                        <div class=\"card-header\" id=\"headingThree\">
                          <h5 class=\"mb-0\">
                            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                              <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-hospital.png\"> รพ.กรุงเทพคริสเตียน
                            </button>
                          </h5>
                        </div>
                        <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordion\">
                          <div class=\"card-body\">
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>

                              
                            </div>
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>
                            </div>
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>
                            </div>

                            <div class=\"link mt-3 \">
                              <ul class=\"list-inline mb-0\">
                                <li class=\"list-inline-item\">
                                    <img src=\"";
        // line 190
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-tel.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"tel:02-201-1000\">02-201-1000</a>
                                </li>

                                <li class=\"list-inline-item\">
                                    <img src=\"";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-link.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"tel:02-201-1000\">เข้าเว็บไซต์ รพ</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div><!-- card -->
                      <div class=\"card\">
                        <div class=\"card-header\" id=\"headingfour\">
                          <h5 class=\"mb-0\">
                            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
                              <img src=\"";
        // line 211
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-hospital.png\"> รพ.กรุงเทพพระประแดง
                            </button>
                          </h5>
                        </div>
                        <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingfour\" data-parent=\"#accordion\">
                          <div class=\"card-body\">
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>

                              
                            </div>
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>
                            </div>
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>
                            </div>

                            <div class=\"link mt-3 \">
                              <ul class=\"list-inline mb-0\">
                                <li class=\"list-inline-item\">
                                    <img src=\"";
        // line 241
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-tel.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"tel:02-201-1000\">02-201-1000</a>
                                </li>

                                <li class=\"list-inline-item\">
                                    <img src=\"";
        // line 248
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-link.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"tel:02-201-1000\">เข้าเว็บไซต์ รพ</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div><!-- card -->
                    </div>

                    <div class=\"text-center\">
                      <p><img src=\"";
        // line 261
        echo twig_escape_filter($this->env, (isset($context["link_img"]) ? $context["link_img"] : null), "html", null, true);
        echo "icon/icon-loading.png\"></p>
                      <p class=\"color-violet2\">กำลังโหลดเพิ่ม</p>
                    </div>
                  </div>
              </div>

              
          </div>
     </div>
     
  </section>
";
    }

    // line 274
    public function block_js($context, array $blocks = array())
    {
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
        return array (  345 => 274,  329 => 261,  313 => 248,  303 => 241,  270 => 211,  253 => 197,  243 => 190,  210 => 160,  193 => 146,  183 => 139,  150 => 109,  133 => 95,  123 => 88,  89 => 57,  32 => 4,  29 => 3,  11 => 1,);
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
 \t<section class=\"banner\" style=\"background-image: url('{{ link_img }}banner-main2.png');\">
 \t\t<div class=\"banner-caption\">
 \t\t\t<h2>โรงพยาบาลลูกรัก</h2>
 \t\t</div>
 \t\t<div class=\"overlay\"></div>
 \t</section>
  <section class=\"content-p-top\">
     <div class=\"container\">
          
          <div class=\"\">
              <h3 class=\"title color-violet2 text-center\">โรงพยาบาลลูกรัก</h3>
              <div class=\"text-center\">
                หมดกังวลไม่ว่าจะอยู่ที่ไหนของประเทศ เพราะเราใส่ใจในบริการจึงมีโรงพยาบาลเพื่อลูกรักคอยให้การรักษาครอบคลุมทั่วประเทศไทย<br>
                มีโรงพยาบาลในเครือข่ายครอบคลุมทุกการรักษา จึงหมดห่วงเรื่องการรักษาลูกรักได้เลย 
              </div>

              <div class=\"py-5 list-head\">
                <form class=\"\">
                    <div class=\"row\">
                        <div class=\"col-sm-8\">
                            <div class=\"input-group \">
                              
                              <input  type=\"text\" class=\"form-custom search\" id=\"\" placeholder=\"ค้นหาโรงพยาบาล\">
                            </div>
                        </div>
                       
                        <div class=\"col-sm-4\">
                            <div class=\"row\">
                              <label for=\"inputPassword\" class=\"col-sm-4  color-violet2 label-filter\">Filters :</label>
                              <div class=\"col-sm-8\">
                                <div class=\"select-wrapper\">
                                    <select class=\"form-custom\">
                                        <option>ทั้งหมด*</option>
                                        <option>ทั้งหมด*</option>
                                        <option>ทั้งหมด*</option>
                                    </select>
                                </div>
                              </div>
                            </div>
                           
                         
                        </div>
                        
                      </div>
                    
                  </form>

                  <div class=\"mt-4\">
                    <div id=\"accordion\" class=\"accordion\">
                      <div class=\"card\">
                        <div class=\"card-header\" id=\"headingOne\">
                          <h5 class=\"mb-0\">
                            <button class=\"btn btn-link\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                              <img src=\"{{ link_img }}icon/icon-hospital.png\"> รพ.รามาธิบดี(อาคารสมเด็จพระเทพ)
                            </button>
                          </h5>
                        </div>

                        <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordion\">
                          <div class=\"card-body\">
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>

                              
                            </div>
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>
                            </div>
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>
                            </div>

                            <div class=\"link mt-3 \">
                              <ul class=\"list-inline mb-0\">
                                <li class=\"list-inline-item\">
                                    <img src=\"{{ link_img }}icon/icon-tel.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"tel:02-201-1000\">02-201-1000</a>
                                </li>

                                <li class=\"list-inline-item\">
                                    <img src=\"{{ link_img }}icon/icon-link.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"tel:02-201-1000\">เข้าเว็บไซต์ รพ</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div><!-- card -->
                      <div class=\"card\">
                        <div class=\"card-header\" id=\"headingTwo\">
                          <h5 class=\"mb-0\">
                            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                              <img src=\"{{ link_img }}icon/icon-hospital.png\"> รพ.กรุงเทพ
                            </button>
                          </h5>
                        </div>
                        <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordion\">
                          <div class=\"card-body\">
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>

                              
                            </div>
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>
                            </div>
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>
                            </div>

                            <div class=\"link mt-3 \">
                              <ul class=\"list-inline mb-0\">
                                <li class=\"list-inline-item\">
                                    <img src=\"{{ link_img }}icon/icon-tel.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"tel:02-201-1000\">02-201-1000</a>
                                </li>

                                <li class=\"list-inline-item\">
                                    <img src=\"{{ link_img }}icon/icon-link.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"tel:02-201-1000\">เข้าเว็บไซต์ รพ</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div><!-- card -->
                      <div class=\"card\">
                        <div class=\"card-header\" id=\"headingThree\">
                          <h5 class=\"mb-0\">
                            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                              <img src=\"{{ link_img }}icon/icon-hospital.png\"> รพ.กรุงเทพคริสเตียน
                            </button>
                          </h5>
                        </div>
                        <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#accordion\">
                          <div class=\"card-body\">
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>

                              
                            </div>
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>
                            </div>
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>
                            </div>

                            <div class=\"link mt-3 \">
                              <ul class=\"list-inline mb-0\">
                                <li class=\"list-inline-item\">
                                    <img src=\"{{ link_img }}icon/icon-tel.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"tel:02-201-1000\">02-201-1000</a>
                                </li>

                                <li class=\"list-inline-item\">
                                    <img src=\"{{ link_img }}icon/icon-link.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"tel:02-201-1000\">เข้าเว็บไซต์ รพ</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div><!-- card -->
                      <div class=\"card\">
                        <div class=\"card-header\" id=\"headingfour\">
                          <h5 class=\"mb-0\">
                            <button class=\"btn btn-link collapsed\" data-toggle=\"collapse\" data-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
                              <img src=\"{{ link_img }}icon/icon-hospital.png\"> รพ.กรุงเทพพระประแดง
                            </button>
                          </h5>
                        </div>
                        <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingfour\" data-parent=\"#accordion\">
                          <div class=\"card-body\">
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>

                              
                            </div>
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>
                            </div>
                            <div class=\"list-hospital\">
                              <ul>
                                <li>ห้องพรีเมี่ยม </li>
                                <li>4,500 บาทต่อวัน </li>
                              </ul>
                            </div>

                            <div class=\"link mt-3 \">
                              <ul class=\"list-inline mb-0\">
                                <li class=\"list-inline-item\">
                                    <img src=\"{{ link_img }}icon/icon-tel.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"tel:02-201-1000\">02-201-1000</a>
                                </li>

                                <li class=\"list-inline-item\">
                                    <img src=\"{{ link_img }}icon/icon-link.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"tel:02-201-1000\">เข้าเว็บไซต์ รพ</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div><!-- card -->
                    </div>

                    <div class=\"text-center\">
                      <p><img src=\"{{ link_img }}icon/icon-loading.png\"></p>
                      <p class=\"color-violet2\">กำลังโหลดเพิ่ม</p>
                    </div>
                  </div>
              </div>

              
          </div>
     </div>
     
  </section>
{% endblock %}

{% block js %}{% endblock %}", "@f/hospital.twig", "/Applications/MAMP/htdocs/insurance/application/views/hospital.twig");
    }
}
