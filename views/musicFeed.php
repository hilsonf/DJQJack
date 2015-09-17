 <script src="js/slider.js"></script>


<div class="slider">
  <!-- Slider -->

  <h1>Top Mixes</h1>
  
  <div id="slider-one">

            <div>
            <img src="../images/img2.jpg" alt="" />
                <p>
                    <a class="pop1" href="../images/img2.jpg" rel="group1" title="example title text">Listen Now</a>
                    <a class="pop1" href="../images/img2.jpg" rel="group1" title="more text right here"></a>
                </p>
            </div>

            <div>
            <img src="../images/img3.jpg" alt="" />
                <p>
                    <a class="pop2" href="../images/img3.jpg" rel="group2" title="example title text">Listen Now</a>
                    <a class="pop2" href="../images/img3.jpg" rel="group2" title="more text right here"></a>
                </p>
            </div>

            <div>
            <img src="../images/img4.jpg" alt="" />
                <p>
                    <a class="pop3" href="../images/img4.jpg" rel="group3" title="example title text">Listen Now</a>
                    <a class="pop3" href="../images/img4.jpg" rel="group3" title="more text right here"></a>
                </p>
            </div>

            <div>
            <img src="images/demo-images/img5.jpg" alt="" />
                <p>
                    <a class="pop4" href="../images/img5.jpg" rel="group4" title="example title text">Listen Now</a>
                    <a class="pop4" href="../images/img5.jpg" rel="group4" title="more text right here"></a>
                </p>
            </div>

            <div>
            <img src="../images/img6.jpg" alt="" />
                <p>
                    <a class="pop5" href="../images/img6.jpg" rel="group5" title="example title text">Listen Now</a>
                    <a class="pop5" href="../images/img6.jpg" rel="group5" title="more text right here"></a>
                </p>
            </div>

            <div>
            <img src="../images/img7.jpg" alt="" />
                <p>
                    <a class="pop6" href="../images/img7.jpg" rel="group6" title="example title text">Listen Now</a>
                    <a class="pop6" href="../images/img7.jpg" rel="group6" title="more text right here"></a>
                </p>
            </div>

            <div>
            <img src="../images/img8.jpg" alt="" />

              <p>
                  <a class="pop7" href="../images/img8.jpg" rel="group7" title="example title text">Listen Now</a>
                  <a class="pop7" href="../images/img8.jpg" rel="group7" title="more text right here"></a>
              </p>
            </div>

  </div>
  </div><!-- /Slider -->

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
  echo "<p> <h3>Song Name: </h3><span>" . $row['songname']."</span></p>";


  if($row['songFile']== 'static/songUploads/'){

    }
    else{
        echo "<img class=\"cover\" src=\"coverUploads/". $row["songCover"] . "\" />";
        // echo "<p><audio controls><source src=\"songUploads/" . $row['songFile'] . "\" type=\"audio/mpeg\">Your browser does not support audio</audio></p>";
    }

    echo "<p><a class=\"listen\">Listen</a></p>";
    echo "<p><a id=\"download\" href=\"/?action=download&file=" . $row['songFile']. "&songId=" . $row['songId'] ."\">Download</a>" . " </p> <p clsss=\"downloadcount\"> <label>Total Downloads &nbsp;<span>". $row['downloadCount']."</span></p>";

  //   echo "<p><a id=\"like\" href=\"/?action=like&songId=" . $row['songId']. "\">Like</a>" . "  <label>Likes <span>". $row['likeCount']."</span></label>";
  // echo "<a id=\"download\" href=\"/?action=download&file=" . $row['songFile']. "&songId=" . $row['songId'] ."\">Download</a>" . "  <label>Downloads<span>". $row['downloadCount']."</span></p>";
  echo "</div>
        </div>

  ";

}
echo "</div>";
?>
