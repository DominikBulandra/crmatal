<?php

/* C:\xampp2\htdocs\crm/plugins/dominik/menu/components/menu/default.htm */
class __TwigTemplate_700a494baebe599f871eed20fcf081d6ce3feb9aab65d18ceb97275c8bb25fcc extends Twig_Template
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
        echo "
 <div>
\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ev2"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["slug"]) {
            // line 6
            echo "

 
   \t<button type=\"button\" data-request=\"onSave2\" data-request-data=\"slug: '";
            // line 9
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "'\" class=\"btn btn-default\">";
            echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
            echo "</button>
    
 


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['slug'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "<!-- eDay -->

  </div>

";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\crm/plugins/dominik/menu/components/menu/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  42 => 9,  37 => 6,  33 => 5,  29 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% framework %}
{% framework extras %}

 <div>
\t\t{% for name,slug in ev2 %}


 
   \t<button type=\"button\" data-request=\"onSave2\" data-request-data=\"slug: '{{name}}'\" class=\"btn btn-default\">{{slug}}</button>
    
 


{% endfor %}<!-- eDay -->

  </div>

", "C:\\xampp2\\htdocs\\crm/plugins/dominik/menu/components/menu/default.htm", "");
    }
}
