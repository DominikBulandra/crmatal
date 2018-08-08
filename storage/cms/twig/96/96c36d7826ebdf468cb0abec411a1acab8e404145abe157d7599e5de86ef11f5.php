<?php

/* C:\xampp\htdocs\crm/themes/demo/pages/clients.htm */
class __TwigTemplate_c1e599e525d7dd70710f3577a85dcf39c19d8a07393887ffeb4a582fc0008968 extends Twig_Template
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
        \t<BUTTON class=\"dealsmenu\" data-request=\"onNewClick\">Dodaj Klienta</BUTTON>
        \t<BUTTON class=\"dealsmenu\" data-request=\"onDeveloperClick\">Moi Klienci</BUTTON>
            <BUTTON class=\"dealsmenu\" data-request=\"onAllClick\">Wszyscy Klienci</BUTTON>
        \t

        </div>
        <div class=\"col-sm-9 umowy\" style=\"height: auto;\"><div id=\"myDiv2\"> 
</div></div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\crm/themes/demo/pages/clients.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
        <div class=\"col-sm-2\" style=\"margin-top: 100px\" >
        \t<BUTTON class=\"dealsmenu\" data-request=\"onNewClick\">Dodaj Klienta</BUTTON>
        \t<BUTTON class=\"dealsmenu\" data-request=\"onDeveloperClick\">Moi Klienci</BUTTON>
            <BUTTON class=\"dealsmenu\" data-request=\"onAllClick\">Wszyscy Klienci</BUTTON>
        \t

        </div>
        <div class=\"col-sm-9 umowy\" style=\"height: auto;\"><div id=\"myDiv2\"> 
</div></div>
    </div>", "C:\\xampp\\htdocs\\crm/themes/demo/pages/clients.htm", "");
    }
}
