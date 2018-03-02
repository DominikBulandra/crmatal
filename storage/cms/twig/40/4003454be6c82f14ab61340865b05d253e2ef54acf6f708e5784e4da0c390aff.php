<?php

/* C:\xampp2\htdocs\crm/themes/demo/pages/index_filtered.htm */
class __TwigTemplate_0884ce4518aed105873b2ed73026872eae86e73cbd0919e9398261caa14620d0 extends Twig_Template
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
        echo "<h2 class=\"ui header\" style=\"margin-top:40px;\">Filtered Places</h2>
<div class=\"row justify-content-md-center\">
\t<div class=\"col-sm-4\">
\t";
        // line 4
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onFilterPlaces", array("update" => array("places/places" => "#partialPlaces"))));
        echo "
\t\t<div id=\"PlacesFilter\" class=\"places-filter ui form\">
\t\t\t<div class=\"ui segment vertial\">
\t\t\t\t<label>Klatka</label>
\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cells"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
            // line 9
            echo "\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"Filter[cells][]\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cell"], "id", array()), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cell"], "notation", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cell"], "id", array()), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t</div>
\t\t</div>

\t";
        // line 20
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "
\t</div>

\t<div class=\"col-sm-8\">
\t<div id=\"partialPlaces\">
\t\t";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("places/places"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\crm/themes/demo/pages/index_filtered.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  69 => 25,  61 => 20,  56 => 17,  44 => 13,  40 => 12,  35 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2 class=\"ui header\" style=\"margin-top:40px;\">Filtered Places</h2>
<div class=\"row justify-content-md-center\">
\t<div class=\"col-sm-4\">
\t{{ form_ajax('onFilterPlaces',{ update: { 'places/places': '#partialPlaces'}})}}
\t\t<div id=\"PlacesFilter\" class=\"places-filter ui form\">
\t\t\t<div class=\"ui segment vertial\">
\t\t\t\t<label>Klatka</label>
\t\t\t\t{% for cell in cells %}
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"Filter[cells][]\" value=\"{{ cell.id }}\" />
\t\t\t\t\t\t\t{{cell.notation}} {{cell.id}}</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>

\t{{ form_close() }}
\t</div>

\t<div class=\"col-sm-8\">
\t<div id=\"partialPlaces\">
\t\t{% partial 'places/places' %}
\t</div>
\t</div>
</div>", "C:\\xampp2\\htdocs\\crm/themes/demo/pages/index_filtered.htm", "");
    }
}
