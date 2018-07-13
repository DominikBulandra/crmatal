<?php

/* C:\xampp\htdocs\crm/plugins/dominik/deals/components/items/default.htm */
class __TwigTemplate_9a73654d525bce7357dfef8989e128d5a2b2aaa725f53f0d35d5489c181a9273 extends Twig_Template
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

   

<div class=\"divTable darkTable\">
<div class=\"divTableHeading\">
<div class=\"divTableRow\">
<div class=\"divTableHead\">Lokal</div>
<div class=\"divTableHead\">Cena</div>
<div class=\"divTableHead\">Powierzchnia</div>
<div class=\"divTableHead\">Usuń</div>
</div>
</div>
<div class=\"divTableBody\">
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["id2"]) {
            if (twig_in_filter("basket", $context["id"])) {
                // line 18
                echo "

<div class=\"divTableRow\">
    
<div class=\"divTableCell\">";
                // line 22
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "</div>


    
<div class=\"divTableCell\">Cena</div>
<div class=\"divTableCell\">m2</div>
<div class=\"divTableCell\">właściwość</div>
</div>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['id2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
<div class=\"divTableFoot tableFootStyle\">
<div class=\"divTableRow\">
<div class=\"divTableCell\">foot1</div>
<div class=\"divTableCell\">foot2</div>
<div class=\"divTableCell\">foot3</div>
<div class=\"divTableCell\">foot4</div>
</div>
</div>
</div>
</div>

<div class=\"divTable darkTable\">
<div class=\"divTableHeading\">
<div class=\"divTableRow\">
<div class=\"divTableHead\">Komórki</div>
<div class=\"divTableHead\">Cena</div>
<div class=\"divTableHead\">Powierzchnia</div>
<div class=\"divTableHead\">Usuń</div>
</div>
</div>
<div class=\"divTableBody\">
";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["id2"]) {
            if (twig_in_filter("basket", $context["id"])) {
                // line 54
                echo "

<div class=\"divTableRow\">
    
<div class=\"divTableCell\">";
                // line 58
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "</div>


    
<div class=\"divTableCell\">Cena</div>
<div class=\"divTableCell\">m2</div>
<div class=\"divTableCell\">właściwość</div>
</div>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['id2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
<div class=\"divTableFoot tableFootStyle\">
<div class=\"divTableRow\">
<div class=\"divTableCell\">foot1</div>
<div class=\"divTableCell\">foot2</div>
<div class=\"divTableCell\">foot3</div>
<div class=\"divTableCell\">foot4</div>
</div>
</div>
</div>
</div>


<div class=\"divTable darkTable\">
<div class=\"divTableHeading\">
<div class=\"divTableRow\">
<div class=\"divTableHead\">garaże/parkingi</div>
<div class=\"divTableHead\">Cena</div>
<div class=\"divTableHead\">Powierzchnia</div>
<div class=\"divTableHead\">Usuń</div>
</div>
</div>
<div class=\"divTableBody\">
";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["id2"]) {
            if (twig_in_filter("basket", $context["id"])) {
                // line 91
                echo "

<div class=\"divTableRow\">
    
<div class=\"divTableCell\">";
                // line 95
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "</div>


    
<div class=\"divTableCell\">Cena</div>
<div class=\"divTableCell\">m2</div>
<div class=\"divTableCell\">właściwość</div>
</div>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['id2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
<div class=\"divTableFoot tableFootStyle\">
<div class=\"divTableRow\">
<div class=\"divTableCell\">foot1</div>
<div class=\"divTableCell\">foot2</div>
<div class=\"divTableCell\">foot3</div>
<div class=\"divTableCell\">foot4</div>
</div>
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\crm/plugins/dominik/deals/components/items/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 104,  159 => 95,  153 => 91,  148 => 90,  123 => 67,  107 => 58,  101 => 54,  96 => 53,  72 => 31,  56 => 22,  50 => 18,  45 => 17,  29 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% framework %}
{% framework extras %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"/>

   

<div class=\"divTable darkTable\">
<div class=\"divTableHeading\">
<div class=\"divTableRow\">
<div class=\"divTableHead\">Lokal</div>
<div class=\"divTableHead\">Cena</div>
<div class=\"divTableHead\">Powierzchnia</div>
<div class=\"divTableHead\">Usuń</div>
</div>
</div>
<div class=\"divTableBody\">
{% for id,id2 in items if 'basket' in id  %}


<div class=\"divTableRow\">
    
<div class=\"divTableCell\">{{id}}</div>


    
<div class=\"divTableCell\">Cena</div>
<div class=\"divTableCell\">m2</div>
<div class=\"divTableCell\">właściwość</div>
</div>
{% endfor %}

<div class=\"divTableFoot tableFootStyle\">
<div class=\"divTableRow\">
<div class=\"divTableCell\">foot1</div>
<div class=\"divTableCell\">foot2</div>
<div class=\"divTableCell\">foot3</div>
<div class=\"divTableCell\">foot4</div>
</div>
</div>
</div>
</div>

<div class=\"divTable darkTable\">
<div class=\"divTableHeading\">
<div class=\"divTableRow\">
<div class=\"divTableHead\">Komórki</div>
<div class=\"divTableHead\">Cena</div>
<div class=\"divTableHead\">Powierzchnia</div>
<div class=\"divTableHead\">Usuń</div>
</div>
</div>
<div class=\"divTableBody\">
{% for id,id2 in items if 'basket' in id  %}


<div class=\"divTableRow\">
    
<div class=\"divTableCell\">{{id}}</div>


    
<div class=\"divTableCell\">Cena</div>
<div class=\"divTableCell\">m2</div>
<div class=\"divTableCell\">właściwość</div>
</div>
{% endfor %}

<div class=\"divTableFoot tableFootStyle\">
<div class=\"divTableRow\">
<div class=\"divTableCell\">foot1</div>
<div class=\"divTableCell\">foot2</div>
<div class=\"divTableCell\">foot3</div>
<div class=\"divTableCell\">foot4</div>
</div>
</div>
</div>
</div>


<div class=\"divTable darkTable\">
<div class=\"divTableHeading\">
<div class=\"divTableRow\">
<div class=\"divTableHead\">garaże/parkingi</div>
<div class=\"divTableHead\">Cena</div>
<div class=\"divTableHead\">Powierzchnia</div>
<div class=\"divTableHead\">Usuń</div>
</div>
</div>
<div class=\"divTableBody\">
{% for id,id2 in items if 'basket' in id  %}


<div class=\"divTableRow\">
    
<div class=\"divTableCell\">{{id}}</div>


    
<div class=\"divTableCell\">Cena</div>
<div class=\"divTableCell\">m2</div>
<div class=\"divTableCell\">właściwość</div>
</div>
{% endfor %}

<div class=\"divTableFoot tableFootStyle\">
<div class=\"divTableRow\">
<div class=\"divTableCell\">foot1</div>
<div class=\"divTableCell\">foot2</div>
<div class=\"divTableCell\">foot3</div>
<div class=\"divTableCell\">foot4</div>
</div>
</div>
</div>
</div>", "C:\\xampp\\htdocs\\crm/plugins/dominik/deals/components/items/default.htm", "");
    }
}
