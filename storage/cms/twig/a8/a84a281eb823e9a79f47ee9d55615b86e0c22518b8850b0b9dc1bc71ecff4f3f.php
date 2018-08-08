<?php

/* C:\xampp\htdocs\crm/themes/demo/pages/umowy.htm */
class __TwigTemplate_f18f1bd4794b71e7f85f6e2806ff2430e74df5945973bc2b1db18548f89327b5 extends Twig_Template
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
        echo "<div class=\"row\">
        <div class=\"col-sm-2\" style=\"margin-top: 100px\" >
        \t<BUTTON class=\"dealsmenu\" data-request=\"onReservationClick\">Umowy Rezerwacyjne</BUTTON>
        \t<BUTTON class=\"dealsmenu\" data-request=\"onDeveloperClick\">Umowy Deweloperskie</BUTTON>
        \t<BUTTON class=\"dealsmenu\" data-request=\"onSellClick\">Umowy Sprzedaży</BUTTON>
        \t

        </div>
        <div class=\"col-sm-9 umowy\"><div id=\"myDiv\"> 
</div></div>
    </div>


<script type=\"text/javascript\">    \t
  \tfunction onRefreshTime()
\t{
    return [
        '#myDiv' => \$this->renderPartial('deals/UR')
    ];
\t}
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\crm/themes/demo/pages/umowy.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
        <div class=\"col-sm-2\" style=\"margin-top: 100px\" >
        \t<BUTTON class=\"dealsmenu\" data-request=\"onReservationClick\">Umowy Rezerwacyjne</BUTTON>
        \t<BUTTON class=\"dealsmenu\" data-request=\"onDeveloperClick\">Umowy Deweloperskie</BUTTON>
        \t<BUTTON class=\"dealsmenu\" data-request=\"onSellClick\">Umowy Sprzedaży</BUTTON>
        \t

        </div>
        <div class=\"col-sm-9 umowy\"><div id=\"myDiv\"> 
</div></div>
    </div>


<script type=\"text/javascript\">    \t
  \tfunction onRefreshTime()
\t{
    return [
        '#myDiv' => \$this->renderPartial('deals/UR')
    ];
\t}
</script>", "C:\\xampp\\htdocs\\crm/themes/demo/pages/umowy.htm", "");
    }
}
