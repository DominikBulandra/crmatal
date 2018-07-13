<?php

/* C:\xampp\htdocs\crm/themes/demo/pages/basket.htm */
class __TwigTemplate_b42a0305cecaaaff47159002418f7b7f14b802b3a849dbbe3e101a20e98006a8 extends Twig_Template
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
        echo "<H1>Zawartość koszyka</H1>";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Items"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\crm/themes/demo/pages/basket.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<H1>Zawartość koszyka</H1>{% component 'Items' %}", "C:\\xampp\\htdocs\\crm/themes/demo/pages/basket.htm", "");
    }
}
