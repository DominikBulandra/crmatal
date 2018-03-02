<?php

/* C:\xampp2\htdocs\crm/themes/demo/layouts/fallback.htm */
class __TwigTemplate_b86efb4bd437e8f86b374908fbe4d14ff36a63b6333988d36b00ba08db3af49b extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\crm/themes/demo/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "C:\\xampp2\\htdocs\\crm/themes/demo/layouts/fallback.htm", "");
    }
}
