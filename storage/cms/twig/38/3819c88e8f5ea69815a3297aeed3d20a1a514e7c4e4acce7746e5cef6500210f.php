<?php

/* C:\xampp\htdocs\crm/plugins/dominik/deals/components/basketlist/default.htm */
class __TwigTemplate_8bdb531eb309148f6fb6095401b1f1c97e9406c86c92edadb1e2b8885b83ca7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 2
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 3
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"/>
<div class=\"dropdown\">
  <div class=\"basket\" data-toggle=\"dropdown\" >
  Koszyk
  <div></div>
  <i class=\"fa fa-shopping-cart\"></i>'
</div>
  <!-- <button class=\"basket\" type=\"button\" id=\"dropdownMenuButton2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">

    
  Koszyk
 
    
  </button> -->
    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton2\"  id=\"basketdiv\">
        <P>Zawartość koszyka:</P>
        ";
        // line 19
        echo $this->env->getExtension('Cms\Twig\DebugExtension')->runDump($this->env, $context, ($context["ev3"] ?? null));
        echo "
            
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ev3"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 22
            echo "test


 
             <P>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], 1, array(), "array"), "html", null, true);
            echo "</P>

    <div class=\"dropdown-divider\"></div>
  


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "<!-- eDay -->

  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\crm/plugins/dominik/deals/components/basketlist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 32,  62 => 26,  56 => 22,  52 => 21,  47 => 19,  29 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% framework %}
{% framework extras %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"/>
<div class=\"dropdown\">
  <div class=\"basket\" data-toggle=\"dropdown\" >
  Koszyk
  <div></div>
  <i class=\"fa fa-shopping-cart\"></i>'
</div>
  <!-- <button class=\"basket\" type=\"button\" id=\"dropdownMenuButton2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">

    
  Koszyk
 
    
  </button> -->
    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton2\"  id=\"basketdiv\">
        <P>Zawartość koszyka:</P>
        {{dump(ev3)}}
            
        {% for id in ev3 %}
test


 
             <P>{{id[1]}}</P>

    <div class=\"dropdown-divider\"></div>
  


{% endfor %}<!-- eDay -->

  </div>
</div>

", "C:\\xampp\\htdocs\\crm/plugins/dominik/deals/components/basketlist/default.htm", "");
    }
}
