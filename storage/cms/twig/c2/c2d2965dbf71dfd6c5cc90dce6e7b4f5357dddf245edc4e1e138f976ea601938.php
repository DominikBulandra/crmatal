<?php

/* C:\xampp2\htdocs\crm/themes/demo/partials/site/header.htm */
class __TwigTemplate_bbe6199453b45c623f101f9bbd1f46128af95d8f7c00ec188ee874e91e15dd7f extends Twig_Template
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
        echo "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">CRM</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
               
            
                <li class=\"separator hidden-xs\"></li>
                <!--<li class=\"";
        // line 18
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Basic concepts</a></li>
                <li class=\"";
        // line 19
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "ajax")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("ajax");
        echo "\">AJAX framework</a></li>
                <li class=\"";
        // line 20
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "plugins")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("plugins");
        echo "\">Plugin components</a></li>-->
                  <li class=\"separator hidden-xs\">";
        // line 21
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Projectslist"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</li>
        </div>
        ";
        // line 23
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("menu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 24
        echo "    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\crm/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 24,  72 => 23,  65 => 21,  57 => 20,  49 => 19,  41 => 18,  31 => 11,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">CRM</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
               
            
                <li class=\"separator hidden-xs\"></li>
                <!--<li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Basic concepts</a></li>
                <li class=\"{% if this.page.id == 'ajax' %}active{% endif %}\"><a href=\"{{ 'ajax'|page }}\">AJAX framework</a></li>
                <li class=\"{% if this.page.id == 'plugins' %}active{% endif %}\"><a href=\"{{ 'plugins'|page }}\">Plugin components</a></li>-->
                  <li class=\"separator hidden-xs\">{% component 'Projectslist' %}</li>
        </div>
        {% component 'menu' %}
    </div>
</nav>", "C:\\xampp2\\htdocs\\crm/themes/demo/partials/site/header.htm", "");
    }
}
