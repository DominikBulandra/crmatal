<?php

/* C:\xampp\htdocs\crm/themes/demo/partials/site/header.htm */
class __TwigTemplate_e2e1d7e62eb4e3fe5b5974aee5e56319ea7fcb91fbffe3fc7f94f6e001aca355 extends Twig_Template
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
        <div class=\"row\">
    <div class='col-xs-12 col-md-10'>
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <ul class=\"nav navbar-nav\">

            <li><DIV class=\"headerbrand\" style=\"height:100px;width: 50px; background: red;\"><P style=\"margin-left: 15px;font-weight: 900;\">CRM</P></DIV></li>
            <li>";
        // line 15
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Projectslist"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</li>
            </ul>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
               
            
                <li class=\"separator hidden-xs\"></li>
                <!--<li class=\"";
        // line 23
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Basic concepts</a></li>
                <li class=\"";
        // line 24
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "ajax")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("ajax");
        echo "\">AJAX framework</a></li>
                <li class=\"";
        // line 25
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "plugins")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("plugins");
        echo "\">Plugin components</a></li>-->
                  <li class=\"navbar-form\"></li>
                  <li class-\"navbar-form\">";
        // line 27
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("menu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</li>
                  
                  
                </ul>
                 
        </div>
        
        
        
    </div>
<div class='col-xs-6 col-md-2'>
";
        // line 38
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Basketlist"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 39
        echo "</div>
</div>
    
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\crm/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 39,  89 => 38,  73 => 27,  64 => 25,  56 => 24,  48 => 23,  35 => 15,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
        <div class=\"row\">
    <div class='col-xs-12 col-md-10'>
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <ul class=\"nav navbar-nav\">

            <li><DIV class=\"headerbrand\" style=\"height:100px;width: 50px; background: red;\"><P style=\"margin-left: 15px;font-weight: 900;\">CRM</P></DIV></li>
            <li>{% component 'Projectslist' %}</li>
            </ul>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
               
            
                <li class=\"separator hidden-xs\"></li>
                <!--<li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Basic concepts</a></li>
                <li class=\"{% if this.page.id == 'ajax' %}active{% endif %}\"><a href=\"{{ 'ajax'|page }}\">AJAX framework</a></li>
                <li class=\"{% if this.page.id == 'plugins' %}active{% endif %}\"><a href=\"{{ 'plugins'|page }}\">Plugin components</a></li>-->
                  <li class=\"navbar-form\"></li>
                  <li class-\"navbar-form\">{% component 'menu' %}</li>
                  
                  
                </ul>
                 
        </div>
        
        
        
    </div>
<div class='col-xs-6 col-md-2'>
{% component 'Basketlist' %}
</div>
</div>
    
</nav>", "C:\\xampp\\htdocs\\crm/themes/demo/partials/site/header.htm", "");
    }
}
