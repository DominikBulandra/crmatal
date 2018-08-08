<?php

/* C:\xampp\htdocs\crm/themes/demo/partials/clients/create.htm */
class __TwigTemplate_873c7b30dbe2754ca47e8f321aa841cb9629633b90da1fa0c717d7d4ac4bc737 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Create"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\crm/themes/demo/partials/clients/create.htm";
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
        return new Twig_Source("{% component 'Create' %}", "C:\\xampp\\htdocs\\crm/themes/demo/partials/clients/create.htm", "");
    }
}
