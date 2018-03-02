<?php

/* C:\xampp2\htdocs\crm/themes/demo/pages/index.htm */
class __TwigTemplate_5f873e707fa15cfcfb19c572076c7071c0e5689e53c8b0ab6d2b35973d985640 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Projectslist"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\crm/themes/demo/pages/index.htm";
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
        return new Twig_Source("{% component 'Projectslist' %}", "C:\\xampp2\\htdocs\\crm/themes/demo/pages/index.htm", "");
    }
}
