<?php

/* C:\xampp\htdocs\crm/themes/demo/pages/apartments.htm */
class __TwigTemplate_6437f47669e4e36ffd4125da79b0fb998fea74156266f31fe1499f0fcf2aa498 extends Twig_Template
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
        echo "<h2 class=\"ui header\" style=\"margin-top:40px;\">Apartments </h2>

<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<style>
  .dialog-form {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
</style>

<table id=\"table\" class=\"display\">
    <thead>
        <tr>
            <th>Id </th>
            <th>Oznaczenie</th>
            <th>cell id</th>
            <th>Edycja</th>
        </tr>
    </thead>
    <tbody>
    \t
    \t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ev4"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 32
            echo "        <tr id=\"tableon\">
            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "notation", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "cell_id", array()), "html", null, true);
            echo "</td>
            <td><button id=\"modalb\" onclick=\"loadDoc()\">test</button><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target='#exampleModal";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "'>Szczegóły</button>
            <button id=\"addc\" onclick=\"addCookie('";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "notation", array()), "html", null, true);
            echo "')\">dodaj do koszyka</button>
<div class=\"modal fade\" id=\"exampleModal";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
      
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
          ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "
          <ul class=\"nav nav-tabs\"id=\"tabContent\">
              <li><a href=\"#details";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"tab\">Karta lokalu</a></li>
              <li><a href=\"#access-security";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"tab\">Dokumenty</a></li>
              <li><a href=\"#networking";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"tab\">Finanse</a></li>
                <li><a href=\"#plan";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"tab\">Plan</a></li>
              <li><a href=\"#wykonczenie";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"tab\">Wykończenie</a></li>
            </ul>
        
            
              
         
            <div class=\"control-group\">
              <label class=\"control-label\">Instance Name</label>
            
              </div>
            
              
              <div class=\"tab-pane fade\" id=\"details";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\">
                <DIV id='displaydiv' style=\"display: none;\"><P>display none</P></DIV>
                <form onsubmit='onEdit()'>
                  <table>
                      
                      <tr>
                        <td>Oznaczenie</td>
                        <td><input id='EditInput' name='id' value='";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "notation", array()), "html", null, true);
            echo "' readonly='readonly'></td>
                      </tr>
                      <tr>
                        <td>Piętro</td>
                        <td><input  id='EditInput' name='floor' value='";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "floor", array()), "html", null, true);
            echo "' readonly='readonly'></td>
                        
                      </tr>
                      <tr>
                        <td>Cena</td>
                        <td><input  id='EditInput' name='price' value='";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "price", array()), "html", null, true);
            echo "' readonly='readonly'></td>
                       
                      </tr>
                      <tr>
                        <td>Powierzchnia</td>
                        <td>Helen Bennett</td>
                    
                      </tr>
                      <tr>
                        <td>Ilość pokoi</td>
                        <td>Yoshi Tannamuri</td>
                      </tr>
                      <tr>
                        <td>Vat</td>
                        <td>Giovanni Rovelli</td>
                      </tr>
                      <button type=\"submit\">Zapisz</button>
                    </table>
                    </form>
                    <button id=\"editapart\" onclick=\"loadEdit()\">Zmień</button>
                    


              </div>
              <div class=\"tab-pane fade\" id=\"access-security";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\">
               <P>Lista dokumentów:</P>
            </div> 
            
              <div class=\"tab-pane fade\" id=\"plan";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\">
                  ";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "notation", array()), "html", null, true);
            echo "
              ";
            // line 112
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("places/places"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            echo " plan
              </div> 
           
              <div class=\"tab-pane fade\" id=\"wykonczenie";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\">
              wykonczenia
              
              </div> 
            
      
           
              <div class=\"tab-pane fade\" id=\"networking";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\">
              networking
             </div> 
            
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
      </div>
    </div>
  </div>
</div>


                                    </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "        
    </tbody>
</table>

<div id=\"dialog-form\" class=\"dialog-form\" title=\"Create new user\">
  <p class=\"validateTips\">All form fields are required.</p>
 
  <form>
    <fieldset>
      <label for=\"name\">Name</label>
      <input type=\"text\" name=\"name\" id=\"name\" value=\"Jane Smith\" class=\"text ui-widget-content ui-corner-all\">
      <label for=\"email\">Email</label>
      <input type=\"text\" name=\"email\" id=\"email\" value=\"jane@smith.com\" class=\"text ui-widget-content ui-corner-all\">
      <label for=\"password\">Password</label>
      <input type=\"password\" name=\"password\" id=\"password\" value=\"xxxxxxx\" class=\"text ui-widget-content ui-corner-all\">
 
      <!-- Allow form submission with keyboard without duplicating the dialog button -->
      <input type=\"submit\" tabindex=\"-1\" style=\"position:absolute; top:-1000px\">
    </fieldset>
  </form>
</div>
<DIV id='displaydiv' style=\"display: none;\"><P>display none</P></DIV>
<button id=\"testbutton\" onclick=\"loadDoc()\">test</button>
<div id=\"dialog\" title=\"Basic dialog\">
    <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
  </div>

  <button id=\"editapart\">Zmień</button>
<script type=\"text/javascript\">

 var dialog, form;
 function addUser (){
  alert(\"adduser\");
 };
 dialog = \$( \"#dialog-form\" ).dialog({
      autoOpen: false,
      height: 400,
      width: 350,
      modal: true,
      buttons: {
        \"Create an account\": addUser,
        Cancel: function() {
          dialog.dialog( \"close\" );
        }
      },
      close: function() {
        form[ 0 ].reset();
        allFields.removeClass( \"ui-state-error\" );
      }
    });
    \$( \"#testbutton\" ).button().on( \"click\", function() {
  dialog.dialog( \"open\" );
    });
    function loadDoc(){
      dialog.dialog( \"open\" );

    };
    function loadEdit(){
      var \$yourUl = \$(\"#displaydiv\"); 
\$yourUl.css(\"display\", \$yourUl.css(\"display\") === 'none' ? '' : 'none');
\$(\"#yourUlId\").toggle();
     
    };

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
  
  document.cookie = \"basket\"+c+\"=\"+notation;
  var y = document.cookie;
  var html=\"\";
  var res = y.split(\";\");
  for (var i = 0, len = res.length; i < len; i++) {
    if(res[i].includes(\"basket\"))
    {
      html += (res[i]);
      html +=  '<input type=\"button\" onClick=\"delCookie(\\'' + res[i] + '\\')\" />';
     
  html += (\"<P>-------</P>\");
    }
 
}
  
\$('#basketdiv').html(html);
  
alert(\"dodano do koszyka \"+c);
}
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\crm/themes/demo/pages/apartments.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 139,  217 => 122,  207 => 115,  199 => 112,  195 => 111,  191 => 110,  184 => 106,  157 => 82,  149 => 77,  142 => 73,  132 => 66,  117 => 54,  113 => 53,  109 => 52,  105 => 51,  101 => 50,  96 => 48,  83 => 38,  77 => 37,  73 => 36,  69 => 35,  65 => 34,  61 => 33,  58 => 32,  54 => 31,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'session' %}<h2 class=\"ui header\" style=\"margin-top:40px;\">Apartments </h2>

<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<style>
  .dialog-form {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
</style>

<table id=\"table\" class=\"display\">
    <thead>
        <tr>
            <th>Id </th>
            <th>Oznaczenie</th>
            <th>cell id</th>
            <th>Edycja</th>
        </tr>
    </thead>
    <tbody>
    \t
    \t{% for id in ev4 %}
        <tr id=\"tableon\">
            <td>{{id.id}}</td>
            <td>{{id.notation}}</td>
            <td>{{id.cell_id}}</td>
            <td><button id=\"modalb\" onclick=\"loadDoc()\">test</button><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target='#exampleModal{{ id.id }}'>Szczegóły</button>
            <button id=\"addc\" onclick=\"addCookie('{{id.id}}','{{id.notation}}')\">dodaj do koszyka</button>
<div class=\"modal fade\" id=\"exampleModal{{ id.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
      
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
          {{id.id}}
          <ul class=\"nav nav-tabs\"id=\"tabContent\">
              <li><a href=\"#details{{ id.id }}\" data-toggle=\"tab\">Karta lokalu</a></li>
              <li><a href=\"#access-security{{ id.id }}\" data-toggle=\"tab\">Dokumenty</a></li>
              <li><a href=\"#networking{{ id.id }}\" data-toggle=\"tab\">Finanse</a></li>
                <li><a href=\"#plan{{ id.id }}\" data-toggle=\"tab\">Plan</a></li>
              <li><a href=\"#wykonczenie{{ id.id }}\" data-toggle=\"tab\">Wykończenie</a></li>
            </ul>
        
            
              
         
            <div class=\"control-group\">
              <label class=\"control-label\">Instance Name</label>
            
              </div>
            
              
              <div class=\"tab-pane fade\" id=\"details{{ id.id }}\">
                <DIV id='displaydiv' style=\"display: none;\"><P>display none</P></DIV>
                <form onsubmit='onEdit()'>
                  <table>
                      
                      <tr>
                        <td>Oznaczenie</td>
                        <td><input id='EditInput' name='id' value='{{id.notation}}' readonly='readonly'></td>
                      </tr>
                      <tr>
                        <td>Piętro</td>
                        <td><input  id='EditInput' name='floor' value='{{id.floor}}' readonly='readonly'></td>
                        
                      </tr>
                      <tr>
                        <td>Cena</td>
                        <td><input  id='EditInput' name='price' value='{{id.price}}' readonly='readonly'></td>
                       
                      </tr>
                      <tr>
                        <td>Powierzchnia</td>
                        <td>Helen Bennett</td>
                    
                      </tr>
                      <tr>
                        <td>Ilość pokoi</td>
                        <td>Yoshi Tannamuri</td>
                      </tr>
                      <tr>
                        <td>Vat</td>
                        <td>Giovanni Rovelli</td>
                      </tr>
                      <button type=\"submit\">Zapisz</button>
                    </table>
                    </form>
                    <button id=\"editapart\" onclick=\"loadEdit()\">Zmień</button>
                    


              </div>
              <div class=\"tab-pane fade\" id=\"access-security{{ id.id }}\">
               <P>Lista dokumentów:</P>
            </div> 
            
              <div class=\"tab-pane fade\" id=\"plan{{ id.id }}\">
                  {{id.notation}}
              {% partial 'places/places' %} plan
              </div> 
           
              <div class=\"tab-pane fade\" id=\"wykonczenie{{ id.id }}\">
              wykonczenia
              
              </div> 
            
      
           
              <div class=\"tab-pane fade\" id=\"networking{{ id.id }}\">
              networking
             </div> 
            
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
      </div>
    </div>
  </div>
</div>


                                    </td>
        </tr>
        {% endfor %}
        
    </tbody>
</table>

<div id=\"dialog-form\" class=\"dialog-form\" title=\"Create new user\">
  <p class=\"validateTips\">All form fields are required.</p>
 
  <form>
    <fieldset>
      <label for=\"name\">Name</label>
      <input type=\"text\" name=\"name\" id=\"name\" value=\"Jane Smith\" class=\"text ui-widget-content ui-corner-all\">
      <label for=\"email\">Email</label>
      <input type=\"text\" name=\"email\" id=\"email\" value=\"jane@smith.com\" class=\"text ui-widget-content ui-corner-all\">
      <label for=\"password\">Password</label>
      <input type=\"password\" name=\"password\" id=\"password\" value=\"xxxxxxx\" class=\"text ui-widget-content ui-corner-all\">
 
      <!-- Allow form submission with keyboard without duplicating the dialog button -->
      <input type=\"submit\" tabindex=\"-1\" style=\"position:absolute; top:-1000px\">
    </fieldset>
  </form>
</div>
<DIV id='displaydiv' style=\"display: none;\"><P>display none</P></DIV>
<button id=\"testbutton\" onclick=\"loadDoc()\">test</button>
<div id=\"dialog\" title=\"Basic dialog\">
    <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
  </div>

  <button id=\"editapart\">Zmień</button>
<script type=\"text/javascript\">

 var dialog, form;
 function addUser (){
  alert(\"adduser\");
 };
 dialog = \$( \"#dialog-form\" ).dialog({
      autoOpen: false,
      height: 400,
      width: 350,
      modal: true,
      buttons: {
        \"Create an account\": addUser,
        Cancel: function() {
          dialog.dialog( \"close\" );
        }
      },
      close: function() {
        form[ 0 ].reset();
        allFields.removeClass( \"ui-state-error\" );
      }
    });
    \$( \"#testbutton\" ).button().on( \"click\", function() {
  dialog.dialog( \"open\" );
    });
    function loadDoc(){
      dialog.dialog( \"open\" );

    };
    function loadEdit(){
      var \$yourUl = \$(\"#displaydiv\"); 
\$yourUl.css(\"display\", \$yourUl.css(\"display\") === 'none' ? '' : 'none');
\$(\"#yourUlId\").toggle();
     
    };

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
  
  document.cookie = \"basket\"+c+\"=\"+notation;
  var y = document.cookie;
  var html=\"\";
  var res = y.split(\";\");
  for (var i = 0, len = res.length; i < len; i++) {
    if(res[i].includes(\"basket\"))
    {
      html += (res[i]);
      html +=  '<input type=\"button\" onClick=\"delCookie(\\'' + res[i] + '\\')\" />';
     
  html += (\"<P>-------</P>\");
    }
 
}
  
\$('#basketdiv').html(html);
  
alert(\"dodano do koszyka \"+c);
}
</script>", "C:\\xampp\\htdocs\\crm/themes/demo/pages/apartments.htm", "");
    }
}
