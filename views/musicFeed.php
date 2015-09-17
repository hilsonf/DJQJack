  <?php
// echo "<div id=\"postscontainer\">";
echo "<div class=\"section group allMix\">";
  echo "<h1>All Mixes </h1>";
 if(count($results)=="int(0)"){
   echo "<h3>There are no songs, please post a song<h3>";
 }

foreach ($results as $row) {

  echo "<div class=\"col col6\">";
  echo "<div id=\"" .$row['songId'] . "\" class=\"post\">";
  echo "<p> <h3>" . $row['songname']."</h3></p>";


  if($row['songFile']== 'static/songUploads/'){

    }
    else{
        echo "<img class=\"cover\" src=\"coverUploads/". $row["songCover"] . "\" />";
        // echo "<p><audio controls><source src=\"songUploads/" . $row['songFile'] . "\" type=\"audio/mpeg\">Your browser does not support audio</audio></p>";
    }

    echo "<p><a class=\"listen\" href=\"/?action=mixtape&songId=" . $row['songId'] . "\">Listen</a></p>";
    echo "<p><a id=\"download\" href=\"/?action=download&file=" . $row['songFile']. "&songId=" . $row['songId'] ."\">Download</a>" . " </p> <p clsss=\"downloadcount\"> <label>Total Downloads &nbsp;<span>". $row['downloadCount']."</span></p>";

  //   echo "<p><a id=\"like\" href=\"/?action=like&songId=" . $row['songId']. "\">Like</a>" . "  <label>Likes <span>". $row['likeCount']."</span></label>";
  // echo "<a id=\"download\" href=\"/?action=download&file=" . $row['songFile']. "&songId=" . $row['songId'] ."\">Download</a>" . "  <label>Downloads<span>". $row['downloadCount']."</span></p>";
  echo "</div>
        </div>

  ";

}
echo "</div>";
?>
