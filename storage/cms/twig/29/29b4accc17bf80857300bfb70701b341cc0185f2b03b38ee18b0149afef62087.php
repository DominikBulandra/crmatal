<?php

/* C:\xampp2\htdocs\crm/themes/demo/partials/Projectslist.htm */
class __TwigTemplate_77ab6b3161cf27c5e6a48878d6b2b6ade21bf47eb2f98d2c9eebff30b3bf7edf extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("builderList2"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\crm/themes/demo/partials/Projectslist.htm";
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
        return new Twig_Source("{% component 'builderList2' %}", "C:\\xampp2\\htdocs\\crm/themes/demo/partials/Projectslist.htm", "");
    }
}
