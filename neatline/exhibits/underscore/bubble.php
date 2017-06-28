<?php

/**
 * @package     omeka
 * @subpackage  neatline
 * @copyright   2014 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

?>

<script id="static-bubble-template" type="text/template">

<?php echo sizeof($tags);

/*echo $exhibitTags; */
$items2 = get_records('Item');
/*echo sizeof($items2); */
$tags2 = get_records('Tag');
/*echo sizeof($tags2);*/

$neatlineExhibits = get_records('NeatlineRecord');
echo "number of records is" . sizeof($neatlineExhibits);
foreach($neatlineExhibits as $record) {
    
    $tags = nl_explode($record->tags);
   
    if (sizeof($tags) > 0){
    foreach($tags as $tag) {
        echo $tag;
    }
    }
   
}

?> 


    
  <!-- Close "X". -->
  <div id = "bigdiv" style = "display:block">
  <a name="close" class="close" onclick="clearNarrative()">&times;</a>
    
  <!-- Title. -->
  <div class="title" rv-html="record:title"></div>

  <!-- Body / Item. -->
  <div class="content body" rv-html="record:body" rv-show="record:body"></div>
  <hr class="content" rv-show="record:item" />
  <div class="content item" rv-html="record:item" rv-show="record:item"></div>

 
 <!-- Filters -->
<select id = "tagSelector"  onChange = "filterByTag()" ><option value="init">(select by tag)</option>
  <option value="Test2">Test2</option>
</select>
<button type="button" onclick = "showAll()">Show all</button>
  </div>
 <div id = "narrativeStuff" style = "display:block" onload = "divLoading()">
 <span> <?php echo nl_getExhibitField('narrative'); ?> </span>
 </div> 
 

</script>

<script type="text/javascript">

//remove point information and return to the narrative when the user clicks the x
function clearNarrative() {
       document.getElementById("bigdiv").style.display = "none";
       document.getElementById("narrativeStuff").style.display = "block";
    }    

function filterByTag(){
    var tag = document.getElementById("tagSelector").value;
     Neatline.execute('MAP:load', { tags: [tag] });
    //  Neatline.execute('MAP:load', { tags: ['TestTag'] });
    
}

function showAll(){
   //Neatline.execute('MAP:load', {});
   var url = window.url;
   window.location.href = "http://pennds.org/melanieperon/neatline/fullscreen/test-exhibit";
   //Neatline.vent.trigger('removeFilter', { key: 'tags' });
}
//listen for mouse movement
document.onmousemove = handleMouseMove;

function handleMouseMove(event) {
    //This loop is necessary because the exact id of each point changes each time you load the page
    for (i=0; i<100000; i++) {
    var pointId = "OpenLayers_Geometry_Point_" + i.toString();
    var point = document.getElementById(pointId);
    if (point) {
        //get the left and top locations of the point
       var left = point.getBoundingClientRect().left;
       var top = point.getBoundingClientRect().top;
       //if the user's mouse location matches the location of a point (within a range to accomodate the radius of the point), show the point's information
      //The point radius can be set under the style tab for the individual item
       if ((left - 15) < window.event.clientX &&  window.event.clientX < (left + 15) && (top - 15) < window.event.clientY &&  window.event.clientY <  (top + 15))
       {
        document.getElementById("bigdiv").style.display = "block";
        document.getElementById("narrativeStuff").style.display = "none";
       }
    }
}
 
 //this keeps the narrative and the point information from displaying together       
if (document.getElementById("bigdiv").offsetHeight > 2 && document.getElementById("narrativeStuff").offsetHeight > 0) {
    document.getElementById("narrativeStuff").style.display = "none";
}
} //end function
  
    window.onclick = function(e) {
     
    //if the user clicked on a point, show the point's specific information    
    if (e.target.cx) {
      document.getElementById("bigdiv").style.display = "block";
      document.getElementById("narrativeStuff").style.display = "none";
    }
    
    //If the user clicks on the map, show the narrative
    var string = e.target.id;
    var substring = "OpenLayers_Layer_Vector_RootContainer";
    //This is necessary because the exact id of the map changes each time you load the page
    if (string.indexOf(substring) != -1) { 
       document.getElementById("bigdiv").style.display = "none";
       document.getElementById("narrativeStuff").style.display = "block";
    }
    } //end function


</script>