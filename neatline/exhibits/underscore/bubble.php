<?php

/**
 * @package     omeka
 * @subpackage  neatline
 * @copyright   2014 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

?>

<body onload = "populateSelector()">
<script id="static-bubble-template" type="text/template">

<?php 
//get a list of all tags in the exhibit
$neatlineRecords = get_records('NeatlineRecord');
$tagList = array();
//add the tags to a list
foreach($neatlineRecords as $record) {
    $tags = nl_explode($record->tags);
    foreach($tags as $tag) {
        if($tag){
    array_push ($tagList, $tag);
    }
    }
}
?> 

   <!-- Filters -->
    <select id = "tagSelector"  onChange = "filterByTag()" ><option value="init">(select by tag)</option></select>

    <button type="button" onclick = "showAll()">Show all</button>

  <div id = "bigdiv" style = "display:block">
  
  <!-- Close "X". -->
  <a name="close" class="close" onclick="clearNarrative()">&times;</a>
    
  <!-- Title. -->
  <div class="title" rv-html="record:title"></div>

  <!-- Body / Item. -->
  <div class="content body" rv-html="record:body" rv-show="record:body"></div>
  <hr class="content" rv-show="record:item" />
  <div class="content item" rv-html="record:item" rv-show="record:item"></div>

<!-- Narrative -->
 </div>   
 <div id = "narrativeStuff" style = "display:block">
 <span> <?php echo nl_getExhibitField('narrative'); ?> </span>
 </div>

</script>

</body>
<script type="text/javascript">

function isInArray(value, array) {
        return array.indexOf(value) > -1;
    }

//add tags to the tag selector
function populateSelector() {
var tagList = <?php echo json_encode($tagList);?>;
var uniqueTagList = [];

//only add tags that aren't already in the list
for (var i = 0; i < tagList.length; i++){
      var tag = tagList[i];
            if (tag && isInArray(tag, uniqueTagList) == false) {
                uniqueTagList.push(tag);
            }
}

//sort the tags alphabetically, case-insensitive
sortedTags = uniqueTagList.sort(function (a, b) {
    return a.toLowerCase().localeCompare(b.toLowerCase());
});

//add the list of sorted tags to the selector
for (var i = 0; i < sortedTags.length; i++){
    var optionElement = document.createElement("option");
    optionElement.innerHTML = sortedTags[i];
    document.getElementById("tagSelector").appendChild(optionElement);
}
}

//remove point information and return to the narrative when the user clicks the x
function clearNarrative() {
       document.getElementById("bigdiv").style.display = "none";
       document.getElementById("narrativeStuff").style.display = "block";
    }    

 //load the map based on tags
function filterByTag(){
    var tag = document.getElementById("tagSelector").value;
     Neatline.execute('MAP:load', { tags: [tag] });
}

   //load all tags
function showAll(){
    Neatline.execute('MAP:load', {tags: [] });
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
       if ((left - 10) < window.event.clientX &&  window.event.clientX < (left + 10) && (top - 10) < window.event.clientY &&  window.event.clientY <  (top + 10))
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