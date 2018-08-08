<?php

/* C:\xampp\htdocs\crm/themes/demo/pages/cells.htm */
class __TwigTemplate_4684b43b77824874521bc4d1b11caa27acb0f3033fc2e8c2e039a272abef3594 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "<h2 class=\"ui header\" style=\"margin-top:40px;\">Cells </h2>

<table id=\"table\" class=\"display\">
    <thead>
        <tr>
            <th>Id </th>
            <th>Oznaczenie</th>
            <th>cell id</th>
            <th>Koszyk</th>
        </tr>
    </thead>
    <tbody>
    \t
    \t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ev4"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 15
            echo "        <tr>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "notation", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "cell_id", array()), "html", null, true);
            echo "</td>
            <td> <button id=\"addc\" onclick=\"addCookie('";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "notation", array()), "html", null, true);
            echo "')\">dodaj do koszyka</button></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        
    </tbody>
</table>
<button id=\"testbutton\">test</button>


<script type=\"text/javascript\">
\t
\$(document).ready( function () {
    var table= \$('#table').DataTable();
} );
function delCookie( name ) {
  document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
 
  alert(\"usunięto\");
  var y = document.cookie;
  var html=\"\";
  var res = y.split(\";\");
  for (var i = 0, len = res.length; i < len; i++) {
    if(res[i].includes(\"basket\"))
    {
      html += (res[i]);
      html +=  '<button onClick=\"delCookie(\\'' + res[i] + '\\')\" />Usuń</button>';
     
  html += (\"<P>-------</P>\");
    }
  }
  \$('#basketdiv').html(html);
}
function addCookie(c,notation){
  
  document.cookie = \"cell\"+c+\"=\"+notation;
  var y = document.cookie;
  var html=\"\";
  var res = y.split(\";\");
   for (var i = 0, len = res.length; i < len; i++) {
  \t 
    if(res[i].includes(\"basket\"))
    {
      html += (res[i]);
      html +=  '<input type=\"button\" onClick=\"delCookie(\\'' + res[i] + '\\')\" />';
     
  html += (\"<P>-------</P>\");
    }
 
}
 html += (\"<P>Komórki:</P>\");
   for (var i = 0, len = res.length; i < len; i++) {
  \t
    if(res[i].includes(\"cell\"))
    {
      html += (res[i]);
      html +=  '<input type=\"button\" onClick=\"delCookie(\\'' + res[i] + '\\')\" />';
     
  html += (\"<P>-------</P>\");
    }
 
}
html += (\"<P>Parking/Garaż:</P>\");
   for (var i = 0, len = res.length; i < len; i++) {
  \t
    if(res[i].includes(\"garage\"))
    {
      html += (res[i]);
      html +=  '<input type=\"button\" onClick=\"delCookie(\\'' + res[i] + '\\')\" />';
     
  html += (\"<P>-------</P>\");
    }
 
}
\$('#basketdiv').html(html);
  
alert(\"dodano do koszyka \"+c);
}
\t
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\crm/themes/demo/pages/cells.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 22,  56 => 19,  52 => 18,  48 => 17,  44 => 16,  41 => 15,  37 => 14,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'session' %}<h2 class=\"ui header\" style=\"margin-top:40px;\">Cells </h2>

<table id=\"table\" class=\"display\">
    <thead>
        <tr>
            <th>Id </th>
            <th>Oznaczenie</th>
            <th>cell id</th>
            <th>Koszyk</th>
        </tr>
    </thead>
    <tbody>
    \t
    \t{% for id in ev4 %}
        <tr>
            <td>{{id.id}}</td>
            <td>{{id.notation}}</td>
            <td>{{id.cell_id}}</td>
            <td> <button id=\"addc\" onclick=\"addCookie('{{id.id}}','{{id.notation}}')\">dodaj do koszyka</button></td>
        </tr>
        {% endfor %}
        
    </tbody>
</table>
<button id=\"testbutton\">test</button>


<script type=\"text/javascript\">
\t
\$(document).ready( function () {
    var table= \$('#table').DataTable();
} );
function delCookie( name ) {
  document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
 
  alert(\"usunięto\");
  var y = document.cookie;
  var html=\"\";
  var res = y.split(\";\");
  for (var i = 0, len = res.length; i < len; i++) {
    if(res[i].includes(\"basket\"))
    {
      html += (res[i]);
      html +=  '<button onClick=\"delCookie(\\'' + res[i] + '\\')\" />Usuń</button>';
     
  html += (\"<P>-------</P>\");
    }
  }
  \$('#basketdiv').html(html);
}
function addCookie(c,notation){
  
  document.cookie = \"cell\"+c+\"=\"+notation;
  var y = document.cookie;
  var html=\"\";
  var res = y.split(\";\");
   for (var i = 0, len = res.length; i < len; i++) {
  \t 
    if(res[i].includes(\"basket\"))
    {
      html += (res[i]);
      html +=  '<input type=\"button\" onClick=\"delCookie(\\'' + res[i] + '\\')\" />';
     
  html += (\"<P>-------</P>\");
    }
 
}
 html += (\"<P>Komórki:</P>\");
   for (var i = 0, len = res.length; i < len; i++) {
  \t
    if(res[i].includes(\"cell\"))
    {
      html += (res[i]);
      html +=  '<input type=\"button\" onClick=\"delCookie(\\'' + res[i] + '\\')\" />';
     
  html += (\"<P>-------</P>\");
    }
 
}
html += (\"<P>Parking/Garaż:</P>\");
   for (var i = 0, len = res.length; i < len; i++) {
  \t
    if(res[i].includes(\"garage\"))
    {
      html += (res[i]);
      html +=  '<input type=\"button\" onClick=\"delCookie(\\'' + res[i] + '\\')\" />';
     
  html += (\"<P>-------</P>\");
    }
 
}
\$('#basketdiv').html(html);
  
alert(\"dodano do koszyka \"+c);
}
\t
</script>", "C:\\xampp\\htdocs\\crm/themes/demo/pages/cells.htm", "");
    }
}
