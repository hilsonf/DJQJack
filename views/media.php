<?php ?>
<h1>Media</h1>

<div class="section group">

	<div class="col span_2_of_4">
	<h2>Latest Uploads</h2>
	<?php

	foreach ($results as $row) {

	  echo "<div class=\"col col4\">";
	  echo "<div id=\"" .$row['songId'] . "\" class=\"post\">";
	  echo "<p> <h3>Song Name: </h3><span>" . $row['songname']."</span></p>";
	  


	  if($row['songFile']== 'static/songUploads/'){
		  echo "song is missing";
		}
		else{
			echo "<img class=\"cover\" src=\"coverUploads/". $row["songCover"] . "\" width=\"300\"/>";
			echo "<p><audio controls><source src=\"songUploads/" . $row['songFile'] . "\" type=\"audio/mpeg\">Your browser does not support audio</audio></p>";
			
		}
		echo "</div>";
	  		echo "</div>";
	}


	 ?>
	</div>


	<div class="col span_2_of_4">
	<h2>Videos</h2>
	<div class="videoWrapper">
    <!-- Copy & Pasted from YouTube -->
    <iframe width="560" height="349" src="https://www.facebook.com/DjQjack/videos/802621723145764/" frameborder="0" allowfullscreen></iframe>
</div>
	</div>

<div id="gallery"> 

	<h2>Gallery</h2>
	
	<div class="col span_1_of_2">
	    <a href="../images/img1.jpg" data-lightbox="example-set" data-title="Dj Q on the ones and twos"><img class="example-image" src="../images/img1.jpg" alt=""/></a> <!--  Lightbox-->
	</div>

	<div class="col span_1_of_2">
	    <a href="../images/img2.jpg" data-lightbox="example-set" data-title="Dj Q on the ones and twos"><img class="example-image" src="../images/img2.jpg" alt="" /></a> <!--  Lightbox-->
	</div>

	<div class="col span_1_of_2">
	    <a href="../images/img3.jpg" data-lightbox="example-set" data-title="Dj Q on the ones and twos"><img class="example-image" src="../images/img3.jpg" alt="" /></a><!--  Lightbox-->
	</div>

	<div class="col span_1_of_2">
	    <a href="../images/img4.jpg" data-lightbox="example-set" data-title="Dj Q on the ones and twos"><img class="example-image" src="../images/img4.jpg" alt="" /></a> <!--  Lightbox-->
	</div>
	<div class="col span_1_of_2">
	    <a href="../images/img5.jpg" data-lightbox="example-set" data-title="Dj Q on the ones and twos"><img class="example-image" src="../images/img5.jpg" alt="" /></a> <!--  Lightbox-->
	</div>

	<div class="col span_1_of_2">
	     <a href="../images/img6.jpg" data-lightbox="example-set" data-title="Dj Q on the ones and twos"><img class="example-image" src="../images/img6.jpg" alt="" /></a> <!--  Lightbox-->
	</div>

	</div>
</div>
