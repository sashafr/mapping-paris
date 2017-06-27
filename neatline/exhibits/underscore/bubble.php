<?php

/**
 * @package     omeka
 * @subpackage  neatline
 * @copyright   2014 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

?>

<script id="static-bubble-template" type="text/template">

  <!-- Close "X". -->
  <div id = "bigdiv" style = "display:block" onload = "divLoading()">
  <a name="close" class="close" onclick="clearNarrative()">&times;</a>
    
  <!-- Title. -->
  <div class="title" rv-html="record:title"></div>

  <!-- Body / Item. -->
  <div class="content body" rv-html="record:body" rv-show="record:body"></div>
  <hr class="content" rv-show="record:item" />
  <div class="content item" rv-html="record:item" rv-show="record:item"></div>
 </div>
 
 <div id = "narrativeStuff" style = "display:block" onload = "divLoading()">
 <span> <?php echo nl_getExhibitField('narrative'); ?> </span>
 </div> 
 

</script>

<script type="text/javascript">
    function clearNarrative() {
       document.getElementById("bigdiv").style.display = "none";
       document.getElementById("narrativeStuff").style.display = "block";
    }    
    
function divLoading(){
    alert("loading");
}
  //document.getElementById("bigdiv").style.display = "none";   

    window.onclick = function(e) {
        alert(document.getElementById('bigdiv').getComputedStyle('display'));
   // alert(e.target.id);
 
    if (e.target.cx) {
     //   alert ("you clicked a point");
      document.getElementById("bigdiv").style.display = "block";
      document.getElementById("narrativeStuff").style.display = "none";
    
    }
    var string = e.target.id;
    var substring = "OpenLayers_Layer_Vector_RootContainer";

    if (string.indexOf(substring) != -1) { 
       // alert("you did not click a point");
       document.getElementById("bigdiv").style.display = "none";
       document.getElementById("narrativeStuff").style.display = "block";
    }
    }


</script>