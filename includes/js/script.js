function Highlight(span)
{
{
 function __TreeMenuPostBack(node,style)
 {
    var id    = (node.parentNode.id != null) ? node.parentNode.id : '';
	document.getElementById('nodeid').value = id;
    document.getElementById('frmnodes').submit();
   //Switch(node,style); 
} 
function Switch(node,style)
{
    if(node.parentNode.className=="expanded")
    {
       if(node.className=="image-last")
          node.src="includes/styles/"+style+"/images/plus-last.jpg";
       else node.src="includes/styles/"+style+"/images/plus.jpg";
       node.parentNode.className="collapsed";
       
       document.getElementById("node"+node.parentNode.id).value="c";
    }
    else if(node.parentNode.className=="collapsed")
    {
       if(node.className=="image-last")
          node.src="includes/styles/"+style+"/images/minus-last.jpg";
       else node.src="includes/styles/"+style+"/images/minus.jpg";
       node.parentNode.className="expanded";
       
       document.getElementById("node"+node.parentNode.id).value="e";
    }
    
}