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

<div  id=\"darktable\">   
<H1>Zawartość koszyka</H1>
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
<!-- ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\DebugExtension')->runDump($this->env, $context, ($context["items2"] ?? null));
        echo "
";
        // line 18
        echo $this->env->getExtension('Cms\Twig\DebugExtension')->runDump($this->env, $context, ($context["items"] ?? null));
        echo " -->
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items2"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["id2"]) {
            // line 20
            echo "

<div class=\"divTableRow\">
    
<div class=\"divTableCell\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id2"], "notation", array()), "html", null, true);
            echo "</div>


    
<div class=\"divTableCell\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id2"], "price", array()), "html", null, true);
            echo "</div>
<div class=\"divTableCell\">m2</div>
<div class=\"divTableCell\">właściwość</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['id2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
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
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["id2"]) {
            if (twig_in_filter("cell", $context["id"])) {
                // line 56
                echo "

<div class=\"divTableRow\">
    
<div class=\"divTableCell\">";
                // line 60
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
        // line 69
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
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["id2"]) {
            if (twig_in_filter("garage", $context["id"])) {
                // line 93
                echo "

<div class=\"divTableRow\">
    
<div class=\"divTableCell\">";
                // line 97
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
        // line 106
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
<button class=\"reservation\"  data-request=\"onNextClick\">Utwórz umowę rezerwacyjną</button>
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
        return array (  184 => 106,  168 => 97,  162 => 93,  157 => 92,  132 => 69,  116 => 60,  110 => 56,  105 => 55,  81 => 33,  70 => 28,  63 => 24,  57 => 20,  53 => 19,  49 => 18,  45 => 17,  29 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% framework %}
{% framework extras %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"/>

<div  id=\"darktable\">   
<H1>Zawartość koszyka</H1>
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
<!-- {{dump(items2)}}
{{dump(items)}} -->
{% for id,id2 in items2  %}


<div class=\"divTableRow\">
    
<div class=\"divTableCell\">{{id2.notation}}</div>


    
<div class=\"divTableCell\">{{id2.price}}</div>
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
{% for id,id2 in items if 'cell' in id  %}


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
{% for id,id2 in items if 'garage' in id  %}


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
<button class=\"reservation\"  data-request=\"onNextClick\">Utwórz umowę rezerwacyjną</button>
</div>
</div>", "C:\\xampp\\htdocs\\crm/plugins/dominik/deals/components/items/default.htm", "");
    }
}
