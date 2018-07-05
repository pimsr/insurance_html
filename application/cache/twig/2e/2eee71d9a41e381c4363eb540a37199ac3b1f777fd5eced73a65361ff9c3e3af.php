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
          
          <div class=\"agent\">
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

              <div class=\"row my-5\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 21
            echo "                ";
            $context["img"] = (((trim($this->getAttribute($context["value"], "img", array())) == "")) ? (((isset($context["link_img"]) ? $context["link_img"] : null) . "default/staff.png")) : (((isset($context["link_company"]) ? $context["link_company"] : null) . $this->getAttribute($context["value"], "img", array()))));
            // line 22
            echo "                <div class=\"col-md-4\">
                  <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, (base_url("contact/agent/") . $this->getAttribute($context["value"], "id", array())), "html", null, true);
            echo "\">
                    <div class=\"card\">
                      <img class=\"card-img-top\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : null), "html", null, true);
            echo "\" alt=\"Card image cap\">
                      <div class=\"card-body text-center\">
                        <h5 class=\"card-title mb-0 color-violet2\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("name_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "</h5>
                        <h6 class=\"color-violet2\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("position_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo "</h6>
                        <p class=\"card-text\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], ("caption_" . (isset($context["lang"]) ? $context["lang"] : null))), "html", null, true);
            echo " </p>
                      </div>
                    </div>
                  </a>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "              </div>

              <div class=\"row mt-5 bg-gray contact-list\">
                <div class=\"col-md-12 text-center\">
                    <a href=\"tel: ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "contact", array()), "claim_tel", array()), "html", null, true);
        echo "\"><h4 class=\"color-violet2 mb-4\" >ติดต่อเรื่องเคลม  ( ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "contact", array()), "claim_tel", array()), "html", null, true);
        echo " )</h4></a>
                    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "contact", array()), "claim_link", array()), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-violet\">ดูข้อมูลการเคลม</a>
                </div>
              </div>
              
          </div>

          
     </div>
     
  </section>
";
    }

    // line 52
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
        return array (  128 => 52,  113 => 40,  107 => 39,  101 => 35,  89 => 29,  85 => 28,  81 => 27,  76 => 25,  71 => 23,  68 => 22,  65 => 21,  61 => 20,  54 => 16,  49 => 14,  38 => 6,  32 => 4,  29 => 3,  11 => 1,);
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
          
          <div class=\"agent\">
              <h3 class=\"title color-violet2 text-center\">{{ attribute(headline, 'title_'~lang) }}</h3>
              <div class=\"text-center\">
                {{ attribute(headline, 'subtitle_'~lang)|nl2br }}
              </div>

              <div class=\"row my-5\">
                {% for value in data %}
                {% set img = trim(value.img) == '' ?  link_img~'default/staff.png' : link_company~value.img %}
                <div class=\"col-md-4\">
                  <a href=\"{{ base_url('contact/agent/')~value.id }}\">
                    <div class=\"card\">
                      <img class=\"card-img-top\" src=\"{{ img }}\" alt=\"Card image cap\">
                      <div class=\"card-body text-center\">
                        <h5 class=\"card-title mb-0 color-violet2\">{{ attribute(value, 'name_'~lang) }}</h5>
                        <h6 class=\"color-violet2\">{{ attribute(value, 'position_'~lang) }}</h6>
                        <p class=\"card-text\">{{ attribute(value, 'caption_'~lang) }} </p>
                      </div>
                    </div>
                  </a>
                </div>
                {% endfor %}
              </div>

              <div class=\"row mt-5 bg-gray contact-list\">
                <div class=\"col-md-12 text-center\">
                    <a href=\"tel: {{ nav.contact.claim_tel }}\"><h4 class=\"color-violet2 mb-4\" >ติดต่อเรื่องเคลม  ( {{ nav.contact.claim_tel }} )</h4></a>
                    <a href=\"{{ nav.contact.claim_link }}\" target=\"_blank\" class=\"btn btn-violet\">ดูข้อมูลการเคลม</a>
                </div>
              </div>
              
          </div>

          
     </div>
     
  </section>
{% endblock %}

{% block js %}{% endblock %}", "@f/agent.twig", "/Applications/MAMP/htdocs/insurance/application/views/agent.twig");
    }
}
