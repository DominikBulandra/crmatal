$( document ).ready(function() {
    console.log( "basketready!" );

var html="";
var y = document.cookie;
  var res = y.split(";");
  for (var i = 0, len = res.length; i < len; i++) {
    if(res[i].includes("basket"))
    {
      html += (res[i]);
      html +=  '<input type="button" onClick="delCookie(\'' + res[i] + '\')" />';
     
  html += ("<P>-------</P>");
  html += ("<a href= basket >przejdz</a>")
    }
 
}
  
$('#basketdiv').html(html);
});